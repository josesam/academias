<?php
class RespuestaActividad{
    var $id=null;
    var $nombreModulo;
    var $estado=false;
    var $mensaje=array();
}

/* 
 * Genera todas las Actividades a partir de la frecuencia en la orden de instalacion
 * @author josesam
 * @package custom.include.clases.varios
 */
class Actividad{

    private $db;
    private $instalacion_id;
    private $sql;
    private $call;
    private $res;
    private $assigned_user_id;
    private $path='custom/include/clases/parametros/parametros.php';

    public function __construct(){
    $this->db =DBManagerFactory::getInstance();
    $this->res=new RespuestaActividad();
    if(file_exists($this->path)){
        $data=include_once $this->path;
        $this->assigned_user_id=$data['actividades'][0];
    }

    }
    /*Setea el id de Instalacion*/
    public function setInstalacionId($var){
        $this->instalacion_id=$var;
    }
    public function setSql(){
        $this->sql="Select id,cotizacion_id,frecuenciaRegeneracion,item,codigo from det_materiales where instalacion_id='".$this->instalacion_id."' and deleted=0  and actividad_id is null";
    }
    /*
     * Genera las llamadas a partir de la frecuencia de la orden de instalacion
     * cuando esta se cierra.
     */
    public function generaActividades(){
        global $beanList,$beanFiles,$current_language,$app_list_strings,$timedate;
        $result=$this->db->query($this->sql);

        while($a = $this->db->fetchByAssoc($result)) {
            $data[] = $a;
            
        }
       if(file_exists($beanFiles["bos_OrdenInstalacionDomestica"])){
                 require_once($beanFiles["bos_OrdenInstalacionDomestica"]);
                 $instalacion=new bos_OrdenInstalacionDomestica();
                 $instalacion->retrieve($this->instalacion_id);
                 if(empty($instalacion->id)){
                     $this->res->mensaje[]=" No existe el registro de la orden de trabajo";
                                        return '';
                 }

                 if($instalacion->estado!='Instalado'){
                   $this->res->mensaje[]=" La orden de trabajo debe estar en estado instalada";
                   $this->res->mensaje[]='<a href="?module=bos_OrdenInstalacionDomestica&return_module=bos_OrdenInstalacionDomestica&action=DetailView&record='.$this->instalacion_id.'">Haga click aqui para regresar</a>';
                   return '';

                 }
                 
       }

        // Recorrer el la lista de materiales
        if(is_array($data)){
            foreach($data as $key =>$value){
               if(file_exists($beanFiles["Opportunity"])){
                 require_once($beanFiles["Opportunity"]);

                  $oportunidad = new Opportunity();
                  $oportunidad->retrieve($value['cotizacion_id']);
                  if(!empty($oportunidad->id)){
                        // cargar la oportunidad para extraer al cliente
                         if(file_exists($beanFiles["Call"])){
                            require_once($beanFiles["Call"]);
                            $val=(int)$value['frecuenciaRegeneracion'];
                            if((!empty($val)) && (is_numeric($val)) && ($val>0)){
                                $this->call=new Call();
                                $this->call->parent_id=$oportunidad->account_id;
                                $this->call->parent_type='Accounts';
                                $this->call->status='Planned';
                                $this->call->direction='Outbound';
          
                                $this->call->date_start=$this->generarFecha($val) ;
                                $this->call->date_end=$this->generarFecha($val);
                                $this->call->name="Llamar por servicio por el item ".$value['item'];
                                $this->call->description="El item ".$value['item'].' con codigo '.$value['codigo'].' necesita cambio ';
                                $this->call->assigned_user_id=$this->assigned_user_id;
                                $this->call->duration_hours=0;
                                $this->call->duration_minutes=5;
          
                                
                                $this->call->save();
                                if(!empty($this->call->id)){
                                    $sql=" Update det_materiales set actividad_id='".$this->call->id."' where id=".$value['id'];
                                    $resultado=$this->db->query($sql);
                                    if($resultado==true){
                                        $this->res->mensaje[]=" El item ".$value['item'].' con codigo '.$value['codigo'].' genero una llamada ';
                                    }else{
                                        $this->call->deleted=1;
                                        $this->call->save();
                                        $this->res->mensaje[]=" El item ".$value['item'].' con codigo '.$value['codigo'].' no se pudo generar la llamada ';

                                    }

                                }else{
                                  $this->res->mensaje[]="El item ".$value['item'].' con codigo '.$value['codigo'].' no se pudo generar la llamada ';
                                }
                            }else{
                                 $this->res->mensaje[]="El item ".$value['item'].' con codigo '.$value['codigo'].' no es tipo de dato númerico ';


                            }

                        // crear la actividad
                        //actualizar el detalle de materiales
                         }else{

                          $this->res->mensaje[]="Existio un error al crear la actividad. Por favor comuniquese con Administrador";
                              
                         }

                  }else{
                     $this->res->mensaje[]="El item ".$value['item'].' con codigo '.$value['codigo'].' no existe una cotizacion atada a esta linea ';
     
                  }
               }
            }
           $this->res->mensaje[]='<a href="?module=bos_OrdenInstalacionDomestica&return_module=bos_OrdenInstalacionDomestica&action=DetailView&record='.$this->instalacion_id.'">Haga click aqui para regresar</a>';
        }else{
                     $this->res->mensaje[]="Todas las actividades fueron generadas anteriormente ";
                     $this->res->mensaje[]='<a href="?module=bos_OrdenInstalacionDomestica&return_module=bos_OrdenInstalacionDomestica&action=DetailView&record='.$this->instalacion_id.'">Haga click aqui para regresar</a>';
        }
    }

    function generarFecha($valor,$format = 'Y-m-d H:i:s'){
        global $timedate;
        
        
        $fecha_futuro=new DateTime();
        $fecha_ahora=new DateTime();
        $fecha_ahora->format($format);
        $fecha_ahora->modify("+".$valor.' month');
        return  $fecha_ahora->format($timedate->get_date_time_format(true, $current_user));
    }

    /* Muestra el resultado del acccion solicidatda por el usuarios */

    public function mostrarRespuesta(){

        $cadena.="<div id='menuv'><ul>";
        foreach($this->res->mensaje as $value){
            $cadena.="<li>".$value."</li>";
        }
        $cadena.="</ul></div>";

        return $cadena;
    }
}
?>
