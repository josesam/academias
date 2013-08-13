<?php

class Respuesta{
    var $estado;
    var $errores=array();
}
/**
 * Description of Clientes
 *
 * @author Jose Sambrano
 */

class Clientes {
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
         
        if(($form['tipo_documento']=='Extranjero')||($form['tipo_documento']=='Natural')){
            if(empty($form['primer_nombre']))
                $this->res->errores['primer_nombre']='El primer Nombre no puede estar vacio';
            if(empty($form['primer_apellido']))
                $this->res->errores['primer_apellido']='El primer apellido no puede estar vacio';
        }

        if(($form['tipo_documento']=='Juridico')){
            if(empty($form['razon_social']))
                $this->res->errores['razon_social']='La razón social  no puede estar vacio';
            if(empty($form['nombre_comercial']))
                $this->res->errores['nombre_comercial']='El nombre comercial no puede estar vacio';
        }

        if(empty($form['ruc']))
            $this->res->errores['ruc']='El Nro de Documento Identidad: no puede estar vacio';
         if(empty($form['name']))
            $this->res->errores['name']='El nombre no puede estar vacio';
         if(empty($form['nacionalidad']))
            $this->res->errores['nacionalidad']='La nacionalidad es un campo requerido';
//         if(empty($form['idnacionalidad']))
//           s $this->res->errores['idnacionalidad']='La codigo nacionalidad es un campo requerido';
         if(empty($form['ciudad']))
            $this->res->errores['ciudad']='La ciudad no puede estar vacia ';

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
                            $this->res->errores['ruc']="Nro de Documento Identidad equivocado";
                        }else{
                            if($this->validaExistencias($form['ruc'],$form['record_actual']))
                                $this->res->errores['ruc']="Nro de Documento Identidad existente";
                        }

              }
                if($form['tipo_documento']=='Natural'){//cedula
                      if(!$respuesta->valido){
                            $this->res->errores['cedula']="El Nro de Documento Identidad equivocado";
                        }else{
                             if($this->validaExistencias($form['ruc'],$form['record_actual']))
                                $this->res->errores['ruc']="Nro de Documento Identidad existente";
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
            $this->sql="Select a.id from accounts a inner join accounts_cstm c on a.id=c.id_c  where  c.nrodocumento_c='".$cedula."' and a.deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                return true;// Existe

            return false;
        }else{
            $this->sql="Select a.id id from accounts a inner join accounts_cstm c on a.id=c.id_c where  c.nrodocumento_c='".$cedula."' and deleted=0";
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


    

}
?>
