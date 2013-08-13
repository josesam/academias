<?php


/**
 * Description of Profesor
 *
 * @author Jose Sambrano
 */

class Profesor {
    /*
     * @var $id int
     */
    private $id;
    /*
     * @var $db
     *
     */
    private $db;

    /*
     * @var sql;
     */
    private $sql;
    
    private $res;
    /*
     * @param $path_validacion;
     */
    private $path_validacion='custom/include/clases/varios/ValidacionCedulaRuc.php';
    
    function __construct(){
        $this->db = DBManagerFactory::getInstance();
        include_once 'custom/include/clases/varios/Clientes.php';
        $this->res=new Respuesta();
        if (file_exists($this->path_validacion)){
            include_once $this->path_validacion;
        }

    }
    /*
     * Setea la id
     */
    function setId($var){
        $this->id=$var;
    }
    
     /*
      *Verifica la obligatoriedad de los campos
      * @$form array valores pasado del formulario
      */
    public function tramitarRequest($form=array()){
        $this->validarCampos($form);
        $this->cargaEstado();
        $this->validarCedula($form);
        
        $this->cargaEstado();
        
        
        if($this->res->estado=='error') return $this->res;
     
        
    }

    public function cargaEstado(){
        if(count($this->res->errores)>0){
                $this->res->estado='error';
        }else
              $this->res->estado='exito';
    }
    
    public function validarCampos($form){
         
       

        if(empty($form['ruc']))
            $this->res->errores['ruc']='La número de documento no puede estar vacio';
         if(empty($form['name']))
            $this->res->errores['name']='El apellido  no puede estar vacio';
          if(empty($form['equipo']))
            $this->res->errores['equipo']='El eqquipo de trabajo no puede estar vacio';
         
    }

    public function validarCedula($form){
        
            if($form['tipo_documento']!='Extranjero'){
                $respuesta=ValidacionCedulaRuc::procesarDocumento($form['ruc']);
                 /*
                 * Verificar que el tipo documento corresponda
                 */
              if($respuesta->valido){
                if(($form['tipo_documento']=='Juridico')){//ruc
                     if(!$respuesta->ruc){
                            $this->res->errores['ruc']="Numero de documento equivocado";
                        }else{
                            if($this->validaExistencias($form['cedula'],$form['record_actual']))
                                $this->res->errores['ruc']="Numero de documento existente";
                        }

              }
                if($form['tipo_documento']=='Natural'){//cedula
                      if(!$respuesta->valido){
                            $this->res->errores['cedula']="Numero de documento equivocado";
                        }else{
                             if($this->validaExistencias($form['ruc'],$form['record_actual']))
                                $this->res->errores['ruc']="Numero de documento existente";
                        }
                    
                }
                if($form['tipo_documento']==''){
                                $this->res->errores['tipo_documento']="El tipo de documento no puede estar vacio";
                }
              }else{
                   $this->res->errores['ruc']=$respuesta->mensaje;
              }
           }

        
    }
    
    function validaExistencias($cedula="",$record="",$detalle=false){
        // Si es un nuevo registro
        // Buscar en la tabla accounts el numero de cedula
        // Si el busqueda esta vacia
        // No existe
        // Buscar en la tabla detalle
        // Si el busqueda esta vacia
        // No existe
        if(empty($record)){
            $this->sql="Select a.id from ee_profesores a inner join ee_profesores_cstm c on a.id=c.id_c  where  c.documentoidentidad_c='".$cedula."' and a.deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                return true;// Existe

            return false;
        }else{
            $this->sql="Select a.id id from ee_profesores a inner join ee_profesores_cstm c on a.id=c.id_c where  c.documentoidentidad_c='".$cedula."' and deleted=0";
            $result=$this->db->query($this->sql);
            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal = $a['id'];
                    if(trim($data_principal)!=trim($record)){
                        return true;
                    }
            }
        
          
            return false;



        }
    }


    function consultar($tipo='',$term=''){
        $this->sql="Select concat(last_name,'-',first_name) name,id from ee_profesores a  where  a.title like '%".$tipo."%' and deleted=0 and (a.last_name like '%".$term."%' or a.first_name like '%".$term."%')";
            $result=$this->db->query($this->sql);
            while($a = $this->db->fetchByAssoc($result)) {
                   
                   $data[]=array(
                        'label' => $a['name'],
                        'value' => $a['name'],
                        'id_tabla'=>$a['id'],



                    );
            }

          return $data;

    }

    

}
?>
