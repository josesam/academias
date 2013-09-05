<?php
/**
 * Crea contactos ingresados manual cuando la oportunidad ha sido creada
 *
 * @author BOS
 */
class RespuestaContacto{
    var $estado;
    var $errores=array();
       var $avisos=array();
}

class Contacto {
    
    /*
     * @var <string> Etapa de venta actual
     */
    var $etapa_actual;
    /*
     * @var <string> Id de la oportunidad.
     */
    var $id_oportunidad;
    /*
     * <object> $res Objeto para mostrar los errores al guardar el contacto
     */
    private $res;

    function  __construct($id='',$etapa='') {
        $this->etapa_actual=$etapa;
        $this->id_oportunidad=$id;
        $this->res=new RespuestaContacto();
    }
    /*
     * Ejecuta los controles previos a la creación de
     * contactos
     * 
     */

    function ejecuta($id_cliente=''){
        global $db;
        if(empty($id_cliente))
            return '';
        if(empty($this->id_oportunidad))
            return '';
        if(empty($this->etapa_actual)||($this->etapa_actual!='Closed Won'))
            return '';

        $sql=" Select id,nombrecontacto,apellidocontacto,
               direccion,telefono,cedula,correo,cargo FROM detalle_participante
               WHERE idcontacto = '-99'
               AND deleted =0 and oportunidad_id ='$this->id_oportunidad' and fuente!='database' ";

        $result=$db->query($sql);
        while ($a=$db->fetchByAssoc($result)){
            $data[]=$a;
        }
        $act=self::creaContactos($data,$id_cliente);
        self::actualizaDetalle($act);
    }

    /*
     * Crea los contactos de la oportunidad que fueron ingresados
     * manualmente por el usuario.
     * Los contactos se atan al cliente de la oporutnidad
     */

    private function creaContactos($data=array(),$id_cliente=''){
        $detalle_participantes=array();
        if(is_array($data)){

            foreach($data as $key =>$value){
                if(!empty($value['id'])){
                    if (!empty($value['nombrecontacto']) && (!empty($value['apellidocontacto']))){
                        $contacto=new Contact();
                        $contacto->first_name=$value['nombrecontacto'];
                        $contacto->last_name=$value['apellidocontacto'];
                        $contacto->calle_principal=$value['direccion'];
                        $contacto->phone_work=$value['telefono'];
                        $contacto->account_id=$id_cliente;
                        $contacto->participante_c=1;
                        $contacto->cedula=$value['cedula'];
                        $contacto->email1=$value['correo'];
                        $contacto->title=$value['cargo'];
                        $contacto->save();
                        $detalle_participantes[$key]['id']=$value['id'];
                        $detalle_participantes[$key]['contactoid']=$contacto->id;
                    }
                }

            }
            return $detalle_participantes;
        }
    }
   /*
    * Actualiza la tabla de detalles participantes , para que la siguiente vez
    * que actualizen la oportunidad no se creen duplicados
    */
    private function actualizaDetalle($data){
        global $db;
        if(is_array($data)){
            foreach ($data as $key =>$value){
                $sql=" Update detalle_participante 
                       set idcontacto='".$value['contactoid']."'
                       where id='".$value['id']."'";
                $db->query($sql);
            }
        }
    }
    /*
     * Valida la informacion del formulario de contactos
     */
    function tramitarRequest($form=array()){
        $this->validaFechas($form['birthdate']);
        if($form['tipocontacto']=='Natural')
            $this->validarCedula($form);
        
        $this->buscaCoincidencias($form,$form['record']);
        $this->validaemail($form,$form['record']);
        
        $this->validaCodigoBanner($form,$form['record']);
        
        self::cargaEstado();
        return $this->res;
    }
    /*
     * Carga e
     */
    public function cargaEstado(){
        if(count($this->res->errores)>0){
                $this->res->estado='error';
        }else
              $this->res->estado='exito';
    }


    /*
     * Valida que la fecha ingresada no sea futura
     * ademas valida que no sea menor de 18 y mayor de 100 años
     * <data> fecha_nacimento  Fecha ingresada por el usuario
     * <int> max Edad Maxima
     * <int> min Edad minima
     *
     */
    private function validaFechas($fecha,$min=18,$max=100){
        global $timedate;
        if(empty($fecha))
            return '';
       // si es manual verificar que la fecha no sea anterior
       // fecha validez tres mes a partir de la fecha posible de cierre.
        $fecha_hoy= new DateTime($timedate->to_db(date($timedate->get_date_format())));
        $fecha_ingresada=new DateTime($timedate->to_db($fecha));

       $path1="custom/include/clases/varios/DateUtils.php";

          if(file_exists($path1)){
              include_once $path1;


              }

       $date=DateUtils::dateDiff($fecha_ingresada,$fecha_hoy);


           if($fecha_ingresada>=$fecha_hoy){
               $this->res->errores['fecha_nacimiento_futura']=" La fecha de nacimiento no puede ser  mayor a la fecha actual";
           }else{
                    if(($date['years']<$min) || ($date['years']>$max))
                        $this->res->errores['fecha_nacimiento_rangos']="La fecha de nacimiento no se encuentra entre los rangos ".$min ." y ". $max;
           }



    }



     public function validarCedula($form){
        // Solo si esta lleno

            $path="custom/include/clases/varios/ValidacionCedulaRuc.php";
            if(!file_exists($path)){


                $this->res->errores['error_validacion']=" La clase de validación de cédula ha sido borrada ";
                return '';
            }else{
                require_once $path;
            }
           if(!empty($form['cedula'])){
           $respuesta=ValidacionCedulaRuc::procesarDocumento($form['cedula']);
           if($respuesta->tipo!='natural')
                $this->res->errores['tipo_natural']=" Solo permite cédulas de personas naturales ";
                 /*
                 * Verificar que el tipo documento corresponda
                 */
           if($respuesta->valido){
               
               
                   if($this->validaExistencias($form['cedula'],$form['record']))
                               $this->res->errores['cedula']="Nro de Documento Identidad existente";
               

                
              }else{
                   $this->res->errores['cedula']=$respuesta->mensaje;
              }
           }


    }
    /*
     * @param <string> Cedula del Contacto
     * @param <string> Record Actual, id que genera sugarcrm para cada registro de contacto
     * @param <boolean>
     */
    function validaExistencias($cedula="",$record="",$detalle=false){
        // Si es un nuevo registro
        // Buscar en la tabla accounts el numero de cedula
        // Si el busqueda esta vacia
        // No existe
        // Buscar en la tabla detalle
        // Si el busqueda esta vacia
        // No existe
        global $db;
        if(empty($record)){
            $sql="Select c.id from contacts c where  c.cedula='".$cedula."' and c.deleted=0";
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal))
                return true;// Existe

            return false;
        }else{
            $sql="Select c.id id from contacts c where  c.cedula='".$cedula."' and deleted=0";
            $result=$db->query($sql);


            while($a = $db->fetchByAssoc($result)) {
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
			$pos = strpos($key, 'Contacts0emailAddress');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('Contacts0emailAddress', '', $key);
                        if(is_numeric($id)){
                            if (!empty($form['Contacts0emailAddress'.$id]))
                                $data[$form['Contacts0emailAddress'.$id]]=$form['Contacts0emailAddress'.$id];

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
                $this->res->errores['email']="El mail que esta ingresado ya se encuentra registrado";
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

    }
    
    function validaCodigoBanner($form,$record=""){
        global $db;
        
        $filtros='';

        	
        if($form['codigobanner']!='')
            $filtros.= " and c.codigobanner = '". $form['codigobanner'] ."'";
        if(!empty($record))
            $filtros.=" and c.id !='$record'";
        if($form['codigobanner']!=''){
            $sql="SELECT c.codigobanner codigobanner
                  FROM contacts c
                  WHERE c.deleted=0 ".$filtros;
            $result=$db->query($sql);

           // echo $sql;
            while($a = $db->fetchByAssoc($result)) {
                    $data_principal[] = $a;
            }
            if(!empty($data_principal)){
                $this->res->errores['codigobanner']="Código Banner que esta ingresado ya se encuentra registrado";
                return true;// Existe
            }

            return false;
        

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
       
               if(!empty($form['primernombre'])){
                $busqueda.=" first_name like '%".$form['primernombre']."%'";
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
                    $busqueda.=" first_name like '%".$form['segundonombre']."%'";
                     if(!empty($form['primerapellido'])){
                         $busqueda.=" or ";
                     }else{
                         if(!empty($form['segundoapellido'])){
                            $busqueda.=" or ";
                         }
                     }
               }

               if(!empty($form['primerapellido'])){
                    $busqueda.=" last_name like '%".$form['primerapellido']."%'";
                     if(!empty($form['segundoapellido'])){
                         $busqueda.=" or ";
                     }
               }

               if(!empty($form['segundoapellido']))
                $busqueda.=" last_name like '%".$form['segundoapellido']."%'";
       

       $busqueda.=")";

       $sql="Select concat(first_name,' ', last_name) name  from contacts where deleted =0 ".$busqueda . $filtro;
    //   echo $sql;
        $result=$db->query($sql);
        while ($a=$db->fetchByAssoc($result)){
            $this->res->avisos[]=$a;
        }
    }


}
?>
