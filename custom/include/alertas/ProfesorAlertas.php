<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfesorAlertas
 *
 * @author BOS
 */

class ProfesorAlertas extends Alertas {
    //put your code here

    // preparar variables
    // crear la plantilla
    //
    protected $generador;
    /*
     * @var <string> Plantilla actual
     * 
     */
    protected $template;
    
    /*
     * @var <array>  Array donde se encuentran la parametrizacion de las alertas
     */
    protected $parametros;
    /*
     * @var <array> Variables disponibles para la plantilla
     */
    protected $ctx=array();
    /*
     * @var <string> Ruta donde se encuentran todas los archivos de las alertas
     */
    protected $ruta="custom/include/alertas/";
    /*
     * @var <string> Parametro para traer la parametrizacion  de la alerta
     */
    protected $scope="profesores";
    function  __construct($param) {
        
        $path=$this->ruta."GeneradorPlantilla.php";
        if(file_exists($path)){
            include_once $path;
            $this->generador=new GeneradorPlantilla();
        }
//        $path_parametros=$this->ruta."parametros.php";
//        if (file_exists($path_parametros)){
//            $this->parametros=include_once $path_parametros;
//            
//        }
        $this->parametros=$param;
        parent::__construct();
        
    }
    
    /*
     * Carga las variables que estaran disponibles para la plantilla
     * @param <ee_Profesor> Objeto profesor
     * @param <array> Consulta a la base datos
     * @return <array> Variables para la plantilla
     */
    
    public function cargarVariables($cuenta,$consulta=array()){
        global  $beanList, $beanFiles;
        
        $res=array();
	$class_name = $beanList["ee_Profesores"];
	require_once($beanFiles[$class_name]);
        $vardef = new $class_name();
        foreach ($vardef->field_defs as $field=>$value){
            $res[$field]=$cuenta->$field;
        }
        // Cargar las variables de las consultas al array que se despliega en la plantilla 
        foreach($consulta as $key =>$value){
            $res["c_".$key]=$value;
        }
        return $res;
    }
    /*
     * Sirve a modo de patron facade , llama las funciones necesarias para enviar el mail
     */
    public function controlador(){
        $data=array();
        foreach($this->parametros[$this->scope] as $value){
            switch ($value['tipo']){
                case 'dias_antes':
                    $data=self::getDatos($value['dias']);
                    if(count($data)>0){
                        if(is_array($value['bcc'])){
                            foreach($value['bcc'] as $name =>$d){
                              parent::setBcc($d,$name);
                            }
                        }
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['profesor']=self::cargarVariables($valores['profesor'],$valores['info']);
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           parent::setParentId($valores['profesor']->id);
                           parent::setParenttype($valores['profesor']->module_name);
                           if (!empty($valores['profesor']->email1))
                               parent::setEmail($valores['profesor']->email1);
                           else
                               parent::setEmail($value['default']);
                           
                           parent::sendMail($value['Subject'],$text);
                           
                        }
                    }
                    
                    break;
                
            }
        }
        
    }
    /*
     * Obtiene los datos de la base para poder enviar emails
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getDatos($var){
        global $db;

          $query="
                    SELECT p . * , d . *
                    FROM ee_programas p
                    INNER JOIN detalle_programa d ON p.id = d.programa_id
                    WHERE datediff( now( ) , d.fecha_inicio ) = -$var
                    AND p.deleted =0
                    AND d.deleted =0 and (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $GLOBALS['log']->fatal($query);
          $result=$db->query($query);
          
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
             
             $profesor=new ee_Profesores();
             $profesor->disable_row_level_security=true;
             $profesor->retrieve($a['idprofesor']);
             if(!empty($profesor->id)){
                 $data[$cont]['profesor']=$profesor;
                 $data[$cont]['info']=$a;
                 $cont++;
             }
         }
        return $data;
    }

    


}
?>
