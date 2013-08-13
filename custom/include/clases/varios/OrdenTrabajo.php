<?php
/*
 * Gestiona todas las respuesta de conversion
 * @author josesam
 * @package custom.include.clases.varios
 */
class Respuesta{
    var $id=null;
    var $nombreModulo;
    var $estado=false;
    var $mensaje=array();
}
/* 
 * Gestiona las conversiones de la orden de oportunidad
 * en orden de compra y orden de instalacion
 * @author josesam
 * @package custom.include.clases.varios
 */
class OrdenTrabajo{

    private $db;
    private $res;

    public function __construct(){
        $this->db=DBManagerFactory::getInstance();
        $this->res=new Respuesta();
     }
    /* Convierte la Oportunidad en orden de compra */
    public function convierteAOrdenCompra($idCotizacion){
        global $beanList,$beanFiles,$current_language,$app_list_strings;

        /*Consulta los datos de la oportunidad*/
        if(file_exists($beanFiles["Opportunity"])){
          require_once($beanFiles["Opportunity"]);
              if(!empty($idCotizacion)){
                  $oportunidad = new Opportunity();
                  $oportunidad->retrieve($idCotizacion);

                      if ($oportunidad->tiponegocio=="Domestico")
                        $clonesales_stage=$app_list_strings['sales_stage_dom'];
                    else if($oportunidad->tiponegocio=="Industrial")
                        $clonesales_stage=$app_list_strings['sales_stage1_dom'];
                    else
                        $clonesales_stage=$app_list_strings['sales_stage2_dom'];

                      if($oportunidad->anulado=="Anulado"){
                            $this->res->mensaje[]="La cotizacion se encuentra anulada";
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                      }
                      if($oportunidad->convertida==0){
                        
                        if($oportunidad->sales_stage!='Closed Won') {
                            $this->res->mensaje[]="La cotizacion debe encontrarse como ganada para poder ser convertida";
                            $this->res->mensaje[]="El estado actual de la cotizacion es ".  strtoupper($clonesales_stage[$oportunidad->sales_stage]);
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                        }

                        $sql="Select * from det_materiales where cotizacion_id='$oportunidad->id' and deleted=0";
                        $result=$this->db->query($sql);

                        while($a = $this->db->fetchByAssoc($result)) {
                            $data[]=$a;
                            break;
                        }

                        if(!is_array($data)){
                            $this->res->mensaje[]="La cotizacion no tiene detalle de equipos";
                            $this->res->mensaje[]="El estado actual de la cotizacion es ".  strtoupper($clonesales_stage[$oportunidad->sales_stage]);
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                        }
                        if(($oportunidad->tiponegocio=='Domestico')||($oportunidad->tiponegocio=='Corporativo')){
                            //$compra=
                            if(file_exists($beanFiles["bos_OrdenCompraDomestica"])){
                                $compra=new bos_OrdenCompraDomestica();
                                $compra->name="Orden de Compra: CO:".$oportunidad->oportunidad_id;
                                $compra->opportunit5442unities_ida=$oportunidad->id;
                                $compra->descuento=$oportunidad->descuento;
                            }
                        }else if(($oportunidad->tiponegocio=='Industrial')){
                            
                        }  else {
                            $this->res->mensaje[]="El tipo de negocio no se encuentra registrado en el catalogo";
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                        }
                        if(is_object($compra)){
                            //Crea la orden de compra
                            $compra->assigned_user_id=$oportunidad->assigned_user_id;
                            $compra->save();
                            if(!empty($compra->id)){
                            $sql="Update det_materiales set orden_id='$compra->id' where cotizacion_id='$oportunidad->id' and deleted=0";

                            $det_compra=$this->db->query($sql);
                            if($det_compra){
                                
                                $this->res->mensaje[]="Se creo el detalle de la orden de compra";

                            }else{
                                $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                                $this->res->mensaje[]="Se produjo un error al crear el detalle de la orden de compra";
                                $compra->deleted=1;
                                $compra->save();
                                return '';
                            }
                                  //Actualiza la tabla det_materiales  con el id de la compra
                                 //Actualizar la oportunidad
                                 //setea convertida en 1
                            $sql="Update opportunities set convertida=1,idcompra='$compra->id',nombremodulo='$compra->object_name' where id='$oportunidad->id' and deleted=0";
                            $update_oportunidad=$this->db->query($sql);
                            if($update_oportunidad){

                                $this->res->mensaje[]="Se actualizo la cotizacion";
                                $this->res->mensaje[]='<a href="?module=bos_OrdenCompraDomestica&return_module=bos_OrdenCompraDomestica&action=DetailView&record='.$compra->id.'">Haga click aqui para ir a la orden de compra</a>';

                            }else{

                                $this->res->mensaje[]="Se produjo un error al actualizar la oportunidad ";
                                $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                                $compra->deleted=1;
                                $compra->save();
                                return '';
                            }
                            }else{
                                $this->res->mensaje[]="Se produjo un error al ejecutar la conversion solicitada , favor comuniquese con el administrador";
                                $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                                return '';
                            }
                        }else{
                            $this->res->mensaje[]="No se pudo ejecutar la accion solicitada , favor comuniquese con el administrador";
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                        }
                         
                      }else{
                          $this->res->id=$oportunidad->idcompra;
                          $this->res->nombreModulo=$oportunidad->nombremodulo;
                          $this->res->mensaje[]="La cotizacion fue convertida en orden de compra anteriormente";
                          $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                      }
            }else{

                $this->res->mensaje[]="El codigo de identificacion de la cotizacion no puede estar vacio";
                

            }
            
        }else{
            $this->res->mensaje[]="Ocurrio un error para llamar el modulo de cotizacion por favor comuniquese con el proveedor";

        }
        
        
    }
    /* Convierte la Orden de Compra Domestica  orden de Instalacion */
    public function convierteAOrdenInstalacion($idOrden){
        global $beanList,$beanFiles,$current_language,$app_list_strings;

        /*Consulta los datos de la oportunidad*/
        if(file_exists($beanFiles["bos_OrdenCompraDomestica"])){
          require_once($beanFiles["bos_OrdenCompraDomestica"]);
              if(!empty($idOrden)){
                  $compra = new bos_OrdenCompraDomestica();
                  $compra->retrieve($idOrden);
                      if($compra->convertida==0){
                      

                        
                            //$compra=
                            if(file_exists($beanFiles["bos_OrdenInstalacionDomestica"])){
                                $instalacion=new bos_OrdenInstalacionDomestica();
                                $instalacion->name="Orden de Instalacion: OC: ".$compra->codigo;
                                $instalacion->estado="En Proceso";
                                $instalacion->bos_ordencc43amestica_ida=$compra->id;
                            }
                        
                        if(is_object($instalacion)){
                            //Crea la orden de compra
                            $instalacion->assigned_user_id=$compra->assigned_user_id;
                            $instalacion->save();
                            if(!empty($instalacion->id)){
                            $sql="Update det_materiales set instalacion_id='$instalacion->id' where orden_id='$compra->id' and deleted=0";
                            $det_instalacion=$this->db->query($sql);
                            if($det_instalacion){

                                $this->res->mensaje[]="Se creo el detalle de la orden de instalacion";

                            }else{
                                $this->res->mensaje[]="Se produjo un error al crear el detalle de la orden de instalacion";
                                            $this->res->mensaje[]='<a href="?module=bos_OrdenCompraDomestica&return_module=bos_OrdenCompraDomestica&action=DetailView&record='.$compra->id.'">Haga click aqui para regresar</a>';
                                $instalacion->deleted=1;
                                $instalacion->save();
                                return '';
                            }
                                $sql="Update bos_ordencompradomestica set convertida=1,idinstalacion='$instalacion->id',nombremodulo='$instalacion->object_name' where id='$compra->id' and deleted=0";
                                $update_compra=$this->db->query($sql);
                            if($update_compra){
                                $this->res->estado=true;
                                $this->res->mensaje[]="Se actualizo la orden de compra";
                                $this->res->mensaje[]='<a href="?module=bos_OrdenInstalacionDomestica&return_module=bos_OrdenInstalacionDomestica&action=DetailView&record='.$instalacion->id.'">Haga click aqui para ir a la orden de instalacion</a> ';
                            }else{
                                $this->res->mensaje[]="Se produjo un error al actualizar la orden de compra";
                                $this->res->mensaje[]='<a href="?module=bos_OrdenCompraDomestica&return_module=bos_OrdenCompraDomestica&action=DetailView&record='.$compra->id.'">Haga click aqui para regresar</a>';
                                $instalacion->deleted=1;
                                $instalacion->save();
                                return '';
                            }
                            }else{
                                
                                $this->res->mensaje[]="Se produjo un error al ejecutra la conversion solicitada , favor comuniquese con el administrador";
                                            $this->res->mensaje[]='<a href="?module=bos_OrdenCompraDomestica&return_module=bos_OrdenCompraDomestica&action=DetailView&record='.$compra->id.'">Haga click aqui para regresar</a>';
                                return '';
                            }
                        }else{
                            $this->res->mensaje[]="No se pudo ejecutar la accion solicitada , favor comuniquese con el administrador";
                                        $this->res->mensaje[]='<a href="?module=bos_OrdenCompraDomestica&return_module=bos_OrdenCompraDomestica&action=DetailView&record='.$compra->id.'">Haga click aqui para regresar</a>';
                            return '';
                        }

                      }else{
                          $this->res->id=$oportunidad->idcompra;
                          $this->res->nombreModulo=$oportunidad->nombremodulo;
                          $this->res->mensaje[]="La cotizacion fue convertida en orden de compra anteriormente aqui";
                          $this->res->mensaje[]='<a href="?module=bos_OrdenCompraDomestica&return_module=bos_OrdenCompraDomestica&action=DetailView&record='.$compra->id.'">Haga click aqui para regresar</a>';
                      }
            }else{
                $this->res->mensaje[]="El codigo de identificacion de la orden de compra no puede estar vacio";

            }

        }else{
            $this->res->mensaje[]="Ocurrio un error para llamar el modulo de orden de compra por favor comuniquese con el proveedor";

        }
        
    }


    /*
     *
     * Proceso de anulacion de Cotizacion
     */

       /* Convierte la Oportunidad en orden de compra */
    public function anularCotizacion($idCotizacion){
        global $beanList,$beanFiles,$current_language,$app_list_strings;

        /*Consulta los datos de la oportunidad*/
        if(file_exists($beanFiles["Opportunity"])){
          require_once($beanFiles["Opportunity"]);
              if(!empty($idCotizacion)){
                  $oportunidad = new Opportunity();
                  $oportunidad->retrieve($idCotizacion);

                    if ($oportunidad->tiponegocio=="Domestico")
                        $clonesales_stage=$app_list_strings['sales_stage_dom'];
                    else if($oportunidad->tiponegocio=="Industrial")
                        $clonesales_stage=$app_list_strings['sales_stage1_dom'];
                    else
                        $clonesales_stage=$app_list_strings['sales_stage2_dom'];

                      if($oportunidad->anulado=="Anulado"){
                            $this->res->mensaje[]="La cotizacion se encuentra anulada";
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                      }
                      if($oportunidad->convertida==1){

                        if($oportunidad->sales_stage!='Closed Won') {
                            $this->res->mensaje[]="La cotizacion debe encontrarse como ganada para poder anularla";
                            $this->res->mensaje[]="El estado actual de la cotizacion es ".  strtoupper($clonesales_stage[$oportunidad->sales_stage]);
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                        }

                        $sql="Update det_materiales set anulado='Anulado' where cotizacion_id='$oportunidad->id' and deleted=0";
                        $valor=$this->db->query($sql);

                        $oportunidad->anulado='Anulado';
                        $oportunidad->save();
                        //actualizar el  campo anulado de la orden de compra

                        $modulo=$oportunidad->nombremodulo;
                        if(($oportunidad->tiponegocio=='Domestico')||($oportunidad->tiponegocio=='Corporativo')){
                                if(file_exists($beanFiles[$modulo])){
                                    $compra=new $modulo;
                                    $compra->retrieve($oportunidad->idcompra);
                                    if (!empty($compra->id)){
                                            $compra->anulado='Anulado';
                                            $compra->save();

                                            if(!empty($compra->idinstalacion)){
                                                if(file_exists($beanFiles[$compra->nombremodulo])){
                                                    $instalacion=new $compra->nombremodulo;
                                                    $instalacion->retrive($compra->idinstalacion);
                                                    $instalacion->anulado='Anulado';
                                                    $instalacion->save();
                                                }else{
                                                    $this->res->mensaje[]="Ocurrio un error para llamar el modulo de orden de trabajo domestico por favor comuniquese con el proveedor";
                                                    $oportunidad->anulado='Activo';
                                                    $oportunidad->save();
                                                    $compra->anulado='Activo';
                                                    $compra->save();

                                                    return '';
                                                }
                                            }else{
                                               $this->res->mensaje[]="Se anulo la cotizacion No.".$oportunidad->oportunidad_id ." y la orden de compra No. ".$compra->codigo ;
                                               $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                                            }
                                    }else{

                                        $this->res->mensaje[]="Registro inexistente de la orden de compra";
                                        $oportunidad->anulado='Activo';
                                        $oportunidad->save();
                                        $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                                        return '';


                                    }
                                }else{
                                    $this->res->mensaje[]="Ocurrio un error para llamar el modulo de orden de compra domestico por favor comuniquese con el proveedor";
                                    $oportunidad->anulado='Activo';
                                    $oportunidad->save();
                                    return '';
                                }
                      }else if(($oportunidad->tiponegocio=='Industrial')){

                            // falta el proceso de industrial
                      }else {
                            $this->res->mensaje[]="El tipo de negocio no se encuentra registrado en el catalogo";
                            $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                            return '';
                     }
                 }else{
                   $this->res->mensaje[]="La cotizacion debe encontrarse atada a una orden de compra para anularse";
                   $this->res->mensaje[]='<a href="?module=Opportunities&return_module=Opportunities&action=DetailView&record='.$oportunidad->id.'">Haga click aqui para regresar</a>';
                 }
           }else{
                 $this->res->mensaje[]="El codigo de identificacion de la cotizacion no puede estar vacio";
           }
        }else{
            $this->res->mensaje[]="Ocurrio un error para llamar el modulo de cotizacion por favor comuniquese con el proveedor";

        }


    }






    /* Muestra el resultado del acccion solicidatda por el usuarios */

    public function mostrarRespuesta(){

        if($this->res->estado){
           $exito=" <div id='respuesta'>La conversion se realizo con exito</div> <br>";
        }else{
            $error="<div id='respuesta'> Corrija los errores </div><br>";
        }
        $cadena.="<div id='menuv'><ul>";
        foreach($this->res->mensaje as $value){
            $cadena.="<li>".$value."</li>";
        }
        $cadena.="</ul></div>";

        return $exito.$error.$cadena;
    }
}
?>
