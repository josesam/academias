<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgramasAlertas
 *
 * @author BOS
 */

class ProgramasAlertas extends Alertas{
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
    protected $scope="programas";
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
	$class_name = $beanList["ee_Programas"];
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
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['programa']=self::cargarVariables($valores['programa'],$valores['info']);
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           parent::setParentId($valores['programa']->id);
                           parent::setParenttype($valores['programa']->module_name);
                           $mails=parent::usuariosSistema();
                           if(count($mails)>0){
                                parent::sendMailMassive($value['Subject'],$text,$mails);
                           }else{
                             parent::sendMailMassive($value['Subject'],$text,$value['emails']);
                           }
                        }
                    }
                    
                    break;
                 case 'dias_despues':
                     $data=self::getProgramaCreado($value['dias']);
                    if(count($data)>0){
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['programa']=self::cargarVariables($valores['programa'],$valores['info']);
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           parent::setParentId($valores['programa']->id);
                           parent::setParenttype($valores['programa']->module_name);
                           $mails=parent::usuariosSistema();
                           if(count($mails)>0){
                                parent::sendMailMassive($value['Subject'],$text,$mails);
                           }else{
                             parent::sendMailMassive($value['Subject'],$text,$value['emails']);
                           }
                           
                        }
                    }
                     break;
                 case 'recordatorio':
                    $data=self::getProgramaInicio($value['dias']);
                    if(count($data)>0){
                        foreach($data as $valores){
                           $this->ctx=array();                         
                           $this->ctx['programa']=self::cargarVariables($valores['programa'],$valores['info']);
                           $text=$this->generador->generar($value['plantilla'],$this->ctx);
                           parent::setParentId($valores['programa']->id);
                           parent::setParenttype($valores['programa']->module_name);
                           $mails=parent::usuariosSistema();
                           if(count($mails)>0){
                                parent::sendMailMassive($value['Subject'],$text,$mails);
                           }else{
                             parent::sendMailMassive($value['Subject'],$text,$value['emails']);
                           }
                           
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
                    SELECT p . * 
                    FROM ee_programas p
                    WHERE datediff( now( ) , date(  p.fechafinal_programa ) ) = -$var
                    AND p.deleted =0 and  (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $result=$db->query($query);
          $GLOBALS['log']->fatal($query); 
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
             
             $programa=new ee_Programas();
             $programa->disable_row_level_security=true;
             $programa->retrieve($a['id']);
             if(!empty($programa->id)){
                 $data[$cont]['programa']=$programa;
                 
                 $sql_info="
                     SELECT *
                            FROM `detalle_programa`
                            WHERE date( fecha_fin ) = (
                            SELECT max( date( fecha_fin ) )
                            FROM `detalle_programa`
                            WHERE programa_id = '".$programa->id."' )
                            AND deleted =0
                            AND programa_id = '".$programa->id."'
                        ";
                 $GLOBALS['log']->fatal($query);
                 $result_info=$db->query($sql_info);
                 while ($a_info=$db->fetchByAssoc($result_info)){
                         $data[$cont]['info']=$a_info;
                 }
                 $cont++;
             }
         }
        return $data;
    }
    
     /*
     * Obtiene los datos de la base para poder enviar emails,
      * Carga todos los programas que han sido creado un dia antes
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getProgramaCreado($var){
        global $db;

          $query="
                    SELECT p . * 
                    FROM ee_programas p
                    WHERE datediff( now( ) , date(  p.date_entered ) ) = $var
                    AND p.deleted =0 and  (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $GLOBALS['log']->fatal($query);
          $result=$db->query($query);
          
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
             
             $programa=new ee_Programas();
             $programa->disable_row_level_security=true;
             $programa->retrieve($a['id']);
             if(!empty($programa->id)){
                 $data[$cont]['programa']=$programa;
                 
                 $sql_info="
                     SELECT *
                            FROM `detalle_programa`
                            WHERE date( fecha_inicio ) = (
                            SELECT min( date( fecha_inicio ) )
                            FROM `detalle_programa`
                            WHERE programa_id = '".$programa->id."' )
                            AND deleted =0
                            AND programa_id = '".$programa->id."'
                        ";
                 $GLOBALS['log']->fatal($query);
                 $result_info=$db->query($sql_info);
                 while ($a_info=$db->fetchByAssoc($result_info)){
                         $data[$cont]['info']=$a_info;
                 }
                 $cont++;
             }
         }
        return $data;
    }
    
    /*
     * Obtiene los datos de la base para poder enviar emails,
      * Carga todos los programas que han sido creado un dia antes
     * @param <string> Valor en dias
     * @return <array> Datos de la consulta ejecutada
     */
    function getProgramaInicio($var){
        global $db;

          $query="
                    SELECT p . * 
                    FROM ee_programas p
                    WHERE datediff( now( ) , date(  p.fechainicio_programa ) ) =- $var
                    AND p.deleted =0 and (p.estado='Activo' or p.estado='EnEjecucion')
                ";
          $GLOBALS['log']->fatal($query);
          $result=$db->query($query);
          
          $data=array();
          $cont=0;
          while ($a=$db->fetchByAssoc($result)){
             
             $programa=new ee_Programas();
             $programa->disable_row_level_security=true;
             $programa->retrieve($a['id']);
             if(!empty($programa->id)){
                 $data[$cont]['programa']=$programa;
                 
                 $sql_info="
                     SELECT *
                            FROM `detalle_programa`
                            WHERE date( fecha_inicio ) = (
                            SELECT min( date( fecha_inicio ) )
                            FROM `detalle_programa`
                            WHERE programa_id = '".$programa->id."' )
                            AND deleted =0
                            AND programa_id = '".$programa->id."'
                        ";
                 $GLOBALS['log']->fatal($query);
                 $result_info=$db->query($sql_info);
                 while ($a_info=$db->fetchByAssoc($result_info)){
                         $data[$cont]['info']=$a_info;
                 }
                 $cont++;
             }
         }
        return $data;
    }
//    /*
//     * Obtiene todos los usuarios del sistema 
//     * @return <array>
//     */
//    function usuariosSistema(){
//        global $db;
//        $sql="Select id from users where status='Active'";
//        $result=$db->query($sql);
//        $data=array();
//        while ($a=$db->fetchByAssoc($result)){
//           $user=new User();
//           $user->retrieve($a['id']);
//           if(!empty($user->id)){
//               if(!empty($user->email1)){
//                   $data[]=$user->email1;
//               }
//           }
//           
//        }
//        return $data;
//    }
//    


}
?>
