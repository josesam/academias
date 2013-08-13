<?php
class RespuestaReferido{
    var $estado;
    var $errores=array();
}

class Referidos{

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
        $this->res=new RespuestaReferido();
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
        if(!empty($form['cedula']))
            $this->validarCedula($form);

        $this->verificaTelefonos($form['phone_office'],$form['record_actual']);
        $this->verificaTelefonos($form['phone_alternate'],$form['record_actual']);
        $this->cargaEstado();
        $this->validaClientes($form['cedula']);
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

/*         if(empty($form['cedula']))
            $this->res->errores['cedula']='La cedula no puede estar vacia';
         if(empty($form['tipo_documento']))
            $this->res->errores['tipo_documento']='El tipo de documento no puede estar vacio';
         if(empty($form['estado']))
            $this->res->errores['estado']='El estado no puede estar vacio ';
         if(empty($form['zona']))
            $this->res->errores['zona']='La zona no puede estar vacia ';*/

         if(empty($form['nombre_cuenta']))
            $this->res->errores['nombre_cuenta']='El nombre del referido no puede estar vacio';
         if(!empty($form['cedula'])){
                if(empty($form['tipo_documento']))
                 $this->res->errores['tipo_documento']='El tipo de documento no puede estar vacio';
         }
         //if(empty($form['cliente']))
           // $this->res->errores['cliente']='La referencia al cliente no puede estar vacio';

    }

    public function validarCedula($form){
            if(!empty($form['cedula'])){
            if($form['tipo_documento']!='Pasaporte'){
                $respuesta=ValidacionCedulaRuc::procesarDocumento($form['cedula']);
                 /*
                 * Verificar que el tipo documento corresponda
                 */
              if($respuesta->valido){
                if(($form['tipo_documento']=='Ruc')){//ruc
                     if(!$respuesta->ruc){
                            $this->res->errores['ruc']="Número de documento equivocado";
                        }else{
                            if($this->validaExistencias($form['cedula'],$form['record_actual']))
                                $this->res->errores['ruc']="Número de documento existente";
                        }

                }
//                else{
//                           $this->res->errores['ruc']="El tipo de documento no coincide con el documento ingresado";
//                }
                if($form['tipo_documento']=='Cedula'){//cedula
                      if($respuesta->ruc){
                            $this->res->errores['cedula']="Número de documento equivocado";
                        }else{
                             if($this->validaExistencias($form['cedula'],$form['record_actual']))
                                $this->res->errores['cedula']="Número de documento existente";
                        }

                }
                if($form['tipo_documento']==''){
                                $this->res->errores['tipo_documento']="El tipo de documento no puede estar vacio";
                }
              }else{
                   $this->res->errores['cedula']=$respuesta->mensaje;
              }
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
            $this->sql="Select * from bos_referidos a where  a.cedula='".$cedula."' and a.deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                return true;// Existe

            return false;
        }else{
            $this->sql="Select a.id id from bos_referidos a  where  a.cedula='".$cedula."' and deleted=0";
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

    function validaClientes($cedula){
        // Si es un nuevo registro
        // Buscar en la tabla accounts el numero de cedula
        // Si el busqueda esta vacia
        // No existe
        // Buscar en la tabla detalle
        // Si el busqueda esta vacia
        // No existe

            $this->sql="Select id from accounts a where  a.cedula='".$cedula."' and a.deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                $this->res->errores['referidos']="El numero de documento se encuentra registrado como cliente";

            return false;




    }

    
    /**Lista todos los requeridos atados a un cliente que tenga numero de documento y no este convertido*/
    function listaReferidos($cliente_id=''){


    }
    /**Funcion que convierte un referido en un cliente*/
    function convierteReferidos($clientes_id=array()){
       global $beanFiles,$beanList;
       $modulo = $beanList["bos_Referidos"];

        if(file_exists($beanFiles[$modulo])){
            require_once($beanFiles[$modulo]);
            if(is_array($clientes_id)){
                foreach($clientes_id as $value){
                    $referido = new $modulo;
                    $referido->retrieve($value);

                      if(!empty($referido->id)){

                          if(empty($referido->cedula)){
                                  $this->res->errores[]='No tiene registrado numero de documento registrado';
                          }else{
                              if(empty($referido->zona)){
                                  $this->res->errores[]='No tiene registrado la zona';
                              }else{
                                if($referido->estado=='Convertido'){
                                  $this->res->errores[]='El cliente fue converitido';
                                }else{

                                 $cuenta=$beanList["Accounts"];
                                 if(file_exists($beanFiles[$cuenta])){
                                   require_once($beanFiles[$cuenta]);

                                     $cliente=new $cuenta;
                                     $cliente->name=$referido->name;
                                     $cliente->description=$referido->description;
                                     $cliente->assigned_user_id=$referido->assigned_user_id;
                                     $cliente->industry=$referido->industry;
                                     $cliente->billing_address_street=$referido->billing_address_street;
                                     $cliente->billing_address_city=$referido->billing_address_city;
                                     $cliente->billing_address_state=$referido->billing_address_state;
                                     $cliente->billing_address_postalcode=$referido->billing_address_postalcode;
                                     $cliente->billing_address_country=$referido->billing_address_country;
                                     $cliente->phone_office=$referido->phone_office;
                                     $cliente->phone_alternate=$referido->phone_alternate;
                                     $cliente->website=$referido->website;
                                     $cliente->ownership=$referido->ownership;

                                     $cliente->shipping_address_street=$referido->shipping_address_street;
                                     $cliente->shipping_address_city=$referido->shipping_address_city;
                                     $cliente->shipping_address_state=$referido->shipping_address_state;
                                     $cliente->shipping_address_postalcode=$referido->shipping_address_postalcode;
                                     $cliente->shipping_address_country=$referido->shipping_address_country;
                                     $cliente->cedula=$referido->cedula;
                                     $cliente->tipo=$referido->tipo;
                                     $cliente->estado='Activo';
                                     $cliente->zona=$referido->zona;
                                     $cliente->save();
                                     if(!empty($cliente->id)){


                                         $this->sql="Update bos_Referidos set estado='Convertido' where id='".$referido->id."'";
                                         $result=$this->db->query($this->sql);
                                         $this->res->errores[]='Referido Convertido '.$referido->name;
                                     }else{
                                        $this->res->errores[]='Referido no convertido'.$referido->name;
                                     }
                                 }
                                 }
                              }
                          }
                    }
                }
            }
        }
        $this->cargaEstado();
        return $this->res;
    }

    public function verificaTelefonos($telefono="",$record="",$detalle=false){

        // Si es un nuevo registro
        // Buscar en la tabla accounts el numero de cedula
        // Si el busqueda esta vacia
        // No existe
        // Buscar en la tabla detalle
        // Si el busqueda esta vacia
        // No existe
        if(!empty($telefono)){
        if(empty($record)){
            $this->sql="Select * from bos_referidos a where  (a.phone_alternate='".$telefono."' or a.phone_office='".$telefono."') and a.deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal)){
                $this->res->errores[]=' Este referido existe , los telefonos fueron registrados previamente ';
                return true;// Existe
            }
            return false;
        }else{
            $this->sql="Select a.id ,a.name from bos_referidos a  where
                        (a.phone_alternate='".$telefono."' or a.phone_office='".$telefono."') and deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal = $a['id'];
                    if(trim($data_principal)!=trim($record)){
                        $this->res->errores[]=' Este referido existe , los telefonos fueron registrados previamente:<br> '.$a['name'];
                        return true;
                    }
            }


            return false;



        }
        }
        return false;

    }


}
?>
