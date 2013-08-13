<?php

class RespuestaOportunidad{
    var $estado;
    var $errores=array();
}
/**
 * Description of Clientes
 *
 * @author Jose Sambrano
 */

class Oportunidad {
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
        $this->res=new RespuestaOportunidad();
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
        $this->validaPrograma($form);        
        $this->cierreVenta($form);
        $this->validaParticipantes($form);
        $this->validaFechas($form);
        $this->validaCedula($form['account_id'],$form);
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
         

        
        if(empty($form['name']))
                $this->res->errores['name']='El nombre de la oportunidadad no puede estar vacio';
        if(empty($form['account_name']))
                $this->res->errores['account_name']='El nombre cliente no puede estar';
        

        if(empty($form['sales_stage']))
            $this->res->errores['sales_stage']='La etapa de venta no puede estar vacia';
         if(empty($form['probability'])){
             $len=strlen($form['probability']);
            if($len==0)
                $this->res->errores['probability']='La probabilidad no puede estar vacio';
         }
         if(empty($form['amount']))
            $this->res->errores['amount']='El monto no puede estar vacio';
          if(empty($form['numeroparticipantes']))
            $this->res->errores['numeroparticipantes']='El numero de participantes no puede estar vacio';

          if(!is_numeric($form['numeroparticipantes']))
            $this->res->errores['numeroparticipantes']='El numero de participantes debe ser un número';

    }
    // valida que exista programas atados a la oportunidad
    // validad que el programa corresponda a la categoria
    public function validaPrograma($datos=array()){
                $existe=false;
                $cont=0;
                foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prod_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prod_', '', $key);
                        $codigo_programa=$datos['idprogramatxt_' . $id];
                        $existe=true;
                        $cont++;

		}

                if(!$existe){
                    $this->res->errores['existencia_programa']='Debe existir un programa ingresado , manual o del catalogo de programas';
                    return '';
                }
                 if(!$cont>1){
                    $this->res->errores['num_programa']='Solo puede estar ingresado un programa en la oportunidad';
                    return '';
                 }
               // Verifaca estatus del programa y existencia real del programa.
                 


                 
            if($datos['sales_stage']=='Ganado-Cobrado'){
                if($codigo_programa=='-99'){
                    $this->res->errores['validez_programa']='El programa que esta intentando crear es un programa ingresado manualmente , por
                            favor pida la asistencia del Administrador para la creación del programa ';
                    return '';
                }


            }

            
        
    }
    // valida que el numero de participantes sea igual al numero ingresado cuando sea
    // Incompany no se valida
    public function validaParticipantes($datos){
            $path="custom/include/clases/varios/ValidacionCedulaRuc.php";
            if(!file_exists($path)){

            
                $this->res->errores['error_validacion']=" La clase de validación de cédula ha sido borrada ";
                return '';
            }
            $total_participantes=(int)$datos['numeroparticipantes'];
            $cont=0;
            $etapa_venta=$datos['sales_stage'];
            foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prodp_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prodp_', '', $key);

                        if($etapa_venta=="Ganado-Cobrado"){
                            $cedula=$datos['cedulatxt_' . $id];
                            $participante=$datos['nombrecontactotxt_' . $id] ." ".$datos['apellidocontactotxt_' . $id];
                            $idcontacto=$datos['idcontactotxt_' . $id];
                            $correo=$datos['correotxt_' . $id];
                            $respuesta=ValidacionCedulaRuc::procesarDocumento($cedula);
                            $contacto = new Contact();
                            $contacto->retrieve($idcontacto);
                            if (!empty($contacto->id)){
                                if ($contacto->tipocontacto!="Extranjero"){
                                    
                                    if(!$respuesta->valido)
                                        $this->res->errores['cedula_erroneas'.$key]=" El participante $participante tiene un error en la cédula<br> El error generado es:   ".$respuesta->mensaje." . Verificar !";
                                     else{
                                         //verifica existencia
                                         self::existenciaContactos($idcontacto, $cedula, $participante);
                                     }
                                }else{
                                    self::existenciaContactos($idcontacto, $cedula, $participante);
                                }
                            }else{
                                 if(!$respuesta->valido)
                                        $this->res->errores['cedula_erroneas'.$key]=" El participante $participante tiene un error en la cédula<br> El error generado es:   ".$respuesta->mensaje." . Verificar !";
                                 else{
                                         //verifica existencia
                                         self::existenciaContactos($idcontacto, $cedula, $participante);
                                     }  
                            }
                                
//                            $respuesta=ValidacionCedulaRuc::procesarDocumento($cedula);
//                            if(!$respuesta->valido)
//                               $this->res->errores['cedula_erroneas'.$key]=" El participante $participante tiene un error en la cédula<br> El error generado es:   ".$respuesta->mensaje." . Verificar !";
//                            else{
//                                //verifica existencia
//                                self::existenciaContactos($idcontacto, $cedula, $participante);
//                            }
                            // valida Formato
                            if ($idcontacto=="-99")
                                $idcontacto="";
                            self::validaemail($correo,$idcontacto,$participante);
                            self::check_email_address($correo,$key);
                            
                        }

                        $cont++;
            }

       if(trim($form['categoria_c'])!='Incompany'){
            if($cont>$total_participantes){
                $this->res->errores['participantes']=" El número de participantes no coincide con el total ingresado ";
            }

        }
    }
    /*
         * Valida email solo cuando algo escrito en la columna
         *
         */
        function check_email_address($correo,$key) {
              // First, we check that there's one @ symbol,
              // and that the lengths are right.
           if(!empty($correo)){
            if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $correo)) {
                    $this->res->errores['correo_v'.$key]='El correo '.$correo.' no esta correcto';
                    return ;
              }
              // Split it into sections to make life easier
              $email_array = explode("@", $correo);
              $local_array = explode(".", $email_array[0]);
              for ($i = 0; $i < sizeof($local_array); $i++) {
                if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
                           ↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",$local_array[$i])) {
                    $this->res->errores['correo_v'.$key]='El correo '.$correo.' no esta correcto';
                    return ;
                }
              }
              // Check if domain is IP. If not,
              // it should be valid domain name
              if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
                $domain_array = explode(".", $email_array[1]);
                if (sizeof($domain_array) < 2) {
                     $this->res->errores['correo_v'.$key]='El correo '.$correo.' no esta correcto';
                    return ;
                }
                for ($i = 0; $i < sizeof($domain_array); $i++) {
                  if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
                             ↪([A-Za-z0-9]+))$",$domain_array[$i])) {
                     $this->res->errores['correo_v'.$key]='El correo '.$correo.' no esta correcto';
                    return ;
                   }
                  }
                }

              }
              
         }
    
    /*
     * Valida email iguales
     *@param <array> Todas las variables del formulario
     *@param <string> Record Actual
     *@return <void>
     */

    function validaemail($data,$record="",$nombre=""){
        global $db;

     

        
           $filtros.= " and em.email_address in ('".$data ."')";
       if(!empty($record))
            $filtros.=" and a.id !='$record'";
        
        if(empty($record)){
            $sql="SELECT a.id ,
                    em.email_address email
                    FROM contacts a
                    LEFT JOIN email_addr_bean_rel h ON a.id = h.bean_id
                    AND h.bean_module = 'Contacts'
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                    where a.deleted=0 ".$filtros;
            $result=$db->query($sql);

           // echo $sql;
            while($a = $db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal)){
                $this->res->errores['email']="El mail que esta ingresado ya se encuentra registrado para el participante ".$nombre;
                return true;// Existe
            }

            return false;
        }else{
            $sql="SELECT a.id ,
                    em.email_address email
                    FROM contacts a
                    LEFT JOIN email_addr_bean_rel h ON a.id = h.bean_id
                    AND h.bean_module = 'Contacts'
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                    where a.deleted=0 ".$filtros ;
            $result=$db->query($sql);

           // echo $sql;
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
    

    public function validadUploads(){
        //permite cerrar la oportunidad si esta chequeado oferta entregada y subido un archivo
        
    }
    function validaFechas($form){
        global $timedate;
       // si es manual verificar que la fecha no sea anterior
       // fecha validez tres mes a partir de la fecha posible de cierre.
        $fecha_hoy= new DateTime($timedate->to_db(date($timedate->get_date_format())));
        $fecha_futuro=new DateTime($timedate->to_db($form['date_closed']));


          $path1="custom/include/clases/varios/DateUtils.php";

          if(file_exists($path1)){
              include_once $path1;


              }
              
           $date=DateUtils::dateDiff($fecha_hoy,$fecha_futuro);


           if($fecha_futuro<$fecha_hoy){
               $this->res->errores['fecha_cierre']=" La fecha de cierre no puede ser menor a la fecha actual";
           }


    }
    /*
     * Validaciones para cierre de venta
     */
    public function cierreVenta($form){
        // Si es incompany debe existir monto real ingresadi
        if(trim($form['categoria_c'])=='Incompany'){

          if($form['sales_stage']=='Ganado-Cobrado'){
            if(empty($form['amountreal']) || ((float)$form['amountreal']==0)){
                $this->res->errores['amount_real']=" El monto real no puede estar vacio";
            }
          }
        }else{


            if($form['sales_stage']=='Ganado-Cobrado'){
            if($form['motivo_c']=="Otro"){

                if(empty($form['otrodescuento']))
                $this->res->errores['otrodescuento']=" El detalle de otro motivo de descuento no puede estar vacio , si se escogio Motivo 'otro' ";
            }

        }
        

       }

        
        if($form['sales_stage']=='Ganado-Cobrado'){
            if((int)$form['ofertapresentada_c']==0){
                $this->res->errores['ofertapresentada']=" No puede cerrar la venta, aun no se presentó ninguna oferta al cliente ";
            }

        }

        if($form['sales_stage']=='Perdido'){
            if($form['motivoperdida_c']!=''){
                 if(($form['motivoperdida_c']=='Otro') && (empty($form['adicional_c'])))
                     $this->res->errores['otromotivo_c']=" Si el motivo de perdida es 'otro' , el detalle debe estar lleno ";

            }else{
                $this->res->errores['motivo']=" El motivo de perdida no puede estar vacio ";
            }
        }

    }
   /*
    * @param <string>  Id del cliente seleccionado en la oportunidad
    *
    */
  function validaCedula($id_cliente,$form){
      if($form['sales_stage']=='Ganado-Cobrado'){
      $path="custom/include/clases/varios/ValidacionCedulaRuc.php";
      if(!empty($id_cliente)){

          $cuenta=new Account();
          $cuenta->retrieve($id_cliente);
          if ($cuenta->tipocliente_c!=="Extranjero"){
                if(file_exists($path)){
                  $respuesta=ValidacionCedulaRuc::procesarDocumento($cuenta->nrodocumento_c);
                  if(!$respuesta->valido){
                      $this->res->errores['cedulaincorrecta']=" El numero de documento del cliente ".$form['account_name']." esta equivocado <br> para cerrar la oportunidad por favor ingrese el dato correcto desde la ficha del cliente ".$respuesta->mensaje;
                  }
                }
          }
      }else{
                $this->res->errores['cliente_escoger']=" Favor escoja el cliente";
      }
     }
  }
  /*
   * Valida la existencia del contacto
   */
  function existenciaContactos($record, $cedula, $prospecto){
    // Si es un nuevo registro
        // Buscar en la tabla accounts el numero de cedula
        // Si el busqueda esta vacia
        // No existe
        // Buscar en la tabla detalle
        // Si el busqueda esta vacia
        // No existe
        global $db;
        $id=create_guid();
        if($record=="-99"){
            $sql="Select c.id,concat(first_name,' ',last_name) participante from contacts c where  c.cedula='".$cedula."' and c.deleted=0";
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
                    $participante=$a['participante'];
            }
            if(!empty($data_principal)){
                 $this->res->errores[$id]=" El número de cédula $cedula, de  $prospecto  existe y corresponde al participante ".$participante;
                return true;// Existe
            }
            return false;
        }else{
            $sql="Select c.id,concat(first_name,' ',last_name) participante from contacts c where  c.cedula='".$cedula."' and deleted=0";
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $data_principal = $a['id'];
                    if(trim($data_principal)!=trim($record)){
                        $this->res->errores[$id]=" El número de cédula $cedula, de  $prospecto  existe y corresponde a ".$participante;
                        return true;
                    }
            }


            return false;



        }
  }


    

}
?>
