<?php

class Respuesta{
    var $estado;
    var $errores=array();
    var $avisos=array();
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
        $this->buscaCoincidencias($form,$form['record']);
        $this->validaemail($form,$form['record']);
        $this->cargaEstado();
        
        
        //if($this->res->estado=='error')
                return $this->res;
     
        
    }

    public function cargaEstado(){
        if(count($this->res->errores)>0){
                $this->res->estado='error';
        }else
              $this->res->estado='exito';
    }
    
    public function validarCampos($form){
         
        if(($form['tipocliente_c']=='Extranjero')||($form['tipocliente_c']=='Natural')){
            if(empty($form['primernombre']))
                $this->res->errores['primer_nombre']='El primer Nombre no puede estar vacio';
            if(empty($form['primerapellido']))
                $this->res->errores['primer_apellido']='El primer apellido no puede estar vacio';
        }

        if(($form['tipocliente_c']=='Juridico')){
            if(empty($form['razonsocial']))
                $this->res->errores['razon_social']='La razón social  no puede estar vacio';
            if(empty($form['nombrecomercial']))
                $this->res->errores['nombre_comercial']='El nombre comercial no puede estar vacio';
        }

//        if(empty($form['ruc']))
//            $this->res->errores['ruc']='El Nro de Documento Identidad: no puede estar vacio';
         if(empty($form['name']))
            $this->res->errores['name']='El nombre no puede estar vacio';
         if(empty($form['nacionalidad_c']))
            $this->res->errores['nacionalidad']='La nacionalidad es un campo requerido';
//         if(empty($form['idnacionalidad']))
//           s $this->res->errores['idnacionalidad']='La codigo nacionalidad es un campo requerido';
         if(empty($form['ciudad_principal']))
            $this->res->errores['ciudad']='La ciudad no puede estar vacia ';

    }

    public function validarCedula($form){
        // Solo si esta lleno
        if(!empty($form['nrodocumento_c'])){
            if($form['tipocliente_c']!='Extranjero'){
                $respuesta=ValidacionCedulaRuc::procesarDocumento($form['nrodocumento_c']);
                 /*
                 * Verificar que el tipo documento corresponda
                 */
              if($respuesta->valido){
                if(($form['tipocliente_c']=='Juridico')){//ruc
                     if(!$respuesta->ruc){
                            $this->res->errores['ruc']="Nro de Documento Identidad equivocado";
                        }else{
                            if($this->validaExistencias($form['nrodocumento_c'],$form['record']))
                                $this->res->errores['ruc']="Nro de Documento Identidad existente";
                        }

              }
                if($form['tipocliente_c']=='Natural'){//cedula
                      if(!$respuesta->valido){
                            $this->res->errores['cedula']="El Nro de Documento Identidad equivocado";
                        }else{
                             if($this->validaExistencias($form['nrodocumento_c'],$form['record']))
                                $this->res->errores['ruc']="Nro de Documento Identidad existente";
                        }
                    
                }
                if($form['tipocliente_c']==''){
                                $this->res->errores['tipo_documento']="El tipo de documento no puede estar vacio";
                }
              }else{
                   $this->res->errores['ruc']=$respuesta->numero;
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
            $this->sql="Select a.id from accounts a inner join accounts_cstm c on a.id=c.id_c  where  c.nrodocumento_c='".$cedula."' and a.deleted=0";
            $result=$this->db->query($this->sql);


            while($a = $this->db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                return true;// Existe

            return false;
        }else{
            $this->sql="Select a.id id from 
                         accounts a inner join accounts_cstm c on a.id=c.id_c
                         where  c.nrodocumento_c='".$cedula."' and deleted=0";
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
    /*
     * Valida email iguales
     *@param <array> Todas las variables del formulario
     *@param <string> Record Actual
     *@return <void>
     */

    function validaemail($form,$record=""){
        global $db;

        	foreach ($form as $key => $value) {
			$pos = strpos($key, 'Accounts0emailAddress');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('Accounts0emailAddress', '', $key);
                        if(is_numeric($id)){
                            if (!empty($form['Accounts0emailAddress'.$id]))
                                $data[$form['Accounts0emailAddress'.$id]]=$form['Accounts0emailAddress'.$id];

                        }
                        
		}

        if(count($data)>0)
           $filtros.= " and em.email_address in ('". implode("','",$data) ."')";

        if(!empty($record))
            $filtros.=" and a.id !='$record'";

        if(count($data)>0){
        if(empty($record)){
            $sql="SELECT a.id ,
                    em.email_address email
                    FROM accounts a
                    LEFT JOIN email_addr_bean_rel h ON a.id = h.bean_id
                    AND h.bean_module = 'Accounts'
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                    where a.deleted=0 ".$filtros;
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal)){
                $this->res->errores['email']="El mail que esta ingresado ya se encuentra registrado";
                return true;// Existe
            }

            return false;
        }else{
            $sql="SELECT a.id ,
                    em.email_address email
                    FROM accounts a
                    LEFT JOIN email_addr_bean_rel h ON a.id = h.bean_id
                    AND h.bean_module = 'Accounts'
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                    where a.deleted=0 ".$filtros;
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $data_principal = $a['id'];
                    if(trim($data_principal)!=trim($record)){
                        $this->res->errores['email']="El mail que esta ingresado ya se encuentra registrado";
                        return true;
                    }
            }


            return false;

        }

        }

    }

    /*
     *Busca todas la coincidencias en tabla de clientes para
     * mostrar mensajes de avisos al usuario final, sera el usuario final el que decida
     *
     *@param <array> Todas las variables del formulario
     *@param <string> Id del record actual
     *@return <void>
     * 
     */
    function buscaCoincidencias($form,$record){
        global $db;
       
        if(!empty($record))
            $filtro =" and id!='$record'";
       
       $busqueda="and ( ";
       if(($form['tipocliente_c']!='Juridico')){//ruc
               if(!empty($form['primernombre'])){
                $busqueda.=" name like '%".$form['primernombre']."%'";
                if(!empty($form['segundonombre'])){
                     $busqueda.=" or ";
                 }else{
                     if(!empty($form['primerapellido'])){
                        $busqueda.=" or ";
                     }else{
                        if(!empty($form['segundoapellido'])){
                            $busqueda.=" or ";
                        }
                     }
                 }
               }

               if(!empty($form['segundonombre'])){
                    $busqueda.=" name like '%".$form['segundonombre']."%'";
                     if(!empty($form['primerapellido'])){
                         $busqueda.=" or ";
                     }else{
                         if(!empty($form['segundoapellido'])){
                            $busqueda.=" or ";
                         }
                     }
               }

               if(!empty($form['primerapellido'])){
                    $busqueda.=" name like '%".$form['primerapellido']."%'";
                     if(!empty($form['segundoapellido'])){
                         $busqueda.=" or ";
                     }
               }

               if(!empty($form['segundoapellido']))
                $busqueda.=" name like '%".$form['segundoapellido']."%'";
       }else{
                $busqueda.=" name like '%".$form['razonsocial']."%'";

       }

       $busqueda.=")";

       $sql="Select name from accounts where deleted =0 ".$busqueda . $filtro;
//        echo $sql;
        $result=$db->query($sql);
        while ($a=$db->fetchByAssoc($result)){
            $this->res->avisos[]=$a;
        }
    }
    /*
     * @var <string> Id del cliente
     * @return <boolean> Verdadero si se envio el dato
     */

    public function banner($id=''){
        if($id){
            try{

              if(file_exists('include/nusoap/nusoap.php')){
                  include_once 'include/nusoap/nusoap.php';

                  $cuenta=new Account();
                  $cuenta->retrieve($id);
                if($cuenta->id){
                        $wsdl = "http://evaluaciones.usfq.edu.ec/webservices/banner/server.php?wsdl";
                        $client = new nusoap_client( $wsdl, 'wsdl' );
                        $username = "SUGARCRM";
                        $password = md5("BannerWS&sugar&290812");
                        $first_name = $cuenta->primernombre;
                        $middle_name =$cuenta->segundonombre;
                        $last_name =$cuenta->primerapellido." " .$cuenta->segundoapellido;
                        $birth_date = "22/12/1981";
                        $sex = "M";
                        $id_number="1716253475";

                        $addresses = array(
                                array(
                                    'code' => 'PR',
                                    'street' => 'Eloy Alfaro E15-227',
                                    'city' => 'Quito',
                                    'state' => 'PICHINCHA',
                                    'country' => 'Ecuador' )
                        );

                        $phones = array(
                        array( 'code' => 'PR', 'area' => '02', 'number' => '6038961' ),
                        array( 'code' => 'CL', 'area' => '09', 'number' => '9038368' ),
                        array( 'code' => 'EM', 'area' => '02', 'number' => '5123645', 'extension' => '1503' )
                        );

                        $emails = array(
                                 array( 'code' => 'USFQ', 'email' => 'test@usfq.edu.ec', 'preferred' => 'Y' ),
                                 array( 'code' => 'PERS', 'email' => 'test@hotmail.com' )
                        );

                $params =
                array(
                    'username'=>$username,
                    'password'=>$password,
                    'id_number'=>$id_number,
                    'first_name'=>$first_name,
                    'middle_name'=>$middle_name,
                    'last_name'=>$last_name,
                    'sex'=>$sex,
                    'birth_date'=>$birth_date,
                    'addresses'=>$addresses,
                    'phones'=>$phones,
                    'emails'=>$emails);
                    $persona = $client->call('PersonCreate',$params);
                }
              }
            }catch(Exception $ex){

                return false;

            }
        }else
            return false;
    }

}
?>
