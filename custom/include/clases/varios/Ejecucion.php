<?php
class ResultadoEjecucion{
     var $estado=false;
    var $mensaje=array();
    var $id_creado;
    var $modulo_dir;

    }
/* 
 * Convierte una o todas las oportunidades en ganadas y
 * genera la ejecucion  cuando en Incompany no se genera participantes(contactos) a la ejecucion
 * cuando en Abierto , los
 * @author Jose Sambrano
 */
class Ejecucion{
    /*
     * Id de la oportundidad que genero el curso
     */
    public $programa_id;

    public function __construct($var = ''){
        $this->programa_id=$var;
        $this->respuesta=new ResultadoEjecucion();
    }

    public function ejecutar(){
        global $db,$timedate;
        if(empty($this->programa_id)){
                $this->respuesta->estado=true;
                $this->respuesta->error[]="No existe ningún programa relacionado con el id ";
                return $this->respuesta;
        }
         $programa=new ee_Programas();
         $programa->retrieve($this->programa_id);
         if(empty($programa->id)){
                $this->respuesta->estado=true;
                $this->respuesta->error[]="No se encontro ningun programa con ese id ";
                return $this->respuesta;
        }

        if(!empty($programa->ejecucion_id)){
                $ej=new ee_EjecucionPrograma();
                $ej->retrieve($programa->ejecucion_id);

                if($ej->id){
                    $mensaje="El programa se encuentra ".$ej->estado;
                }
                $this->respuesta->estado=true;
                if(!empty($mensaje))
                    $this->respuesta->error[]=$mensaje;
                else
                    $this->respuesta->error[]="Este proceso fue ejecutado anteriormente";
                return $this->respuesta;

        }
        // Verificacion pra progarmas Incompany del total de pax contra el total ingresado 
        // en la  oportunidad
        if ($programa->tipoprograma=="Incompany"){
                    $sql="
                        Select count(idcontacto) total from 
                                                                opportunities o inner join detalle_participante det 
                                                                on  o.id=det.oportunidad_id where o.deleted=0 
                                                                and det.oportunidad_id in (
                                                                                                                            SELECT oportunidad_id
                                    FROM opportunities o
                                    INNER JOIN detalle_cotizacion d ON o.id = d.oportunidad_id
                                    AND o.deleted =0
                                    AND d.deleted =0
                                    WHERE d.idprograma = '".$programa->id."'
                                    AND o.sales_stage LIKE '%Closed Won%'
                                    AND d.ejecucion_id IS NULL
													 
													 ) and det.deleted=0 and det.idcontacto <>'-99'
";
                    $result=$db->query($sql);
                    $a=$db->fetchByAssoc($result);
                    if((int)$programa->numerominimo!=(int)$a['total']){
                        if(empty($programa->description)){
                         $this->respuesta->estado=true;
                         $this->respuesta->error[]="ALERTA : Campo número participante programa no es igual 
                                        al numero de participantes ingresados, Ingrese en el campo 'observaciones del programa ' el justificativo";
                         return $this->respuesta;
                        }
                    }
}
        
        
        
        
       // Trae el id del programa , con este id traigo las fechas de inicio y de fin del programa
        // Selecciona todas las oportunidades ganadas relacionadas al producto
        $data=array();
        $sql=" Select oportunidad_id,d.id from  opportunities o inner join detalle_cotizacion d on o.id=d.oportunidad_id
               and o.deleted=0 and d.deleted=0
               where d.idprograma = '".$programa->id."' and  o.sales_stage like '%Closed Won%'
               and d.ejecucion_id is null ";
        $result=$db->query($sql);
        while ($a = $db->fetchByAssoc($result)){
            $data[]=$a;
        }
        if(is_array($data)){
            $ejecucion=new ee_EjecucionPrograma();
            $ejecucion->name="Ejecución ". $programa->name;
            $fecha=$programa->fechainicio_programa;
            $ejecucion->fechainicio=$programa->fechainicio_programa;
            $ejecucion->fechafin=$programa->fechafinal_programa;
            $ejecucion->assigned_user_id=$programa->assigned_user_id;
            $ejecucion->team_id=$programa->team_id;
            $ejecucion->idprograma=$programa->id;
            $ejecucion->estado="EnEjecucion";
            $ejecucion->save();
            foreach($data as $key =>$ids){         
                if(!empty($ids['oportunidad_id'])){
                    // crear la ejecucion
                    // se pone en ejecutado el programa

                    $id=create_guid();
                    $relacion[]=$id;
                    $insert=" insert into ee_ejecucionprograma_opportunities_c
                             (
                             id,
                             date_modified,
                             deleted,
                             ee_ejecucionprograma_opportunitiesee_ejecucionprograma_ida,
                             ee_ejecucionprograma_opportunitiesopportunities_idb
                             ) values(
                             '".$id."',
                             '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                             '0',
                             '".$ejecucion->id."',
                             '".$ids['oportunidad_id']."')";
                    $info=$db->query($insert);
                    if($info){

                    $oportunidad=new Opportunity();
                    $oportunidad->retrieve($ids['oportunidad_id']);
                        if($oportunidad->convertida==0){
                      $sql_det="Update detalle_cotizacion  set ejecucion_id='".$ejecucion->id."' where oportunidad_id='".$oportunidad->id."' and id='".$ids['id']."'";
                      $db->query($sql_det);

                        $sql1="  update opportunities set convertida=1 ,
                                 idejecucion='$ejecucion->id' where id='".$ids['oportunidad_id']."' ";
                        $op=$db->query($sql1);
                                 if(!$op){
                                     $GLOBALS['log']->fatal($info);
                                     self::reversar($relacion,$ejecucion);
                                     $this->respuesta->estado=true;
                                     $this->respuesta->error[]="Se genero un error al generar la relacion oportunidad y la ejecucion, revise el log  ";
                                     return $this->respuesta;
                                 }else{
                                 $sql_participantes="Select idcontacto from 
                                                     opportunities o inner join detalle_participante det 
                                                     on  o.id=det.oportunidad_id where o.deleted=0 
                                                     and det.oportunidad_id='".$ids['oportunidad_id']."' and det.deleted=0 and det.idcontacto <>'-99' ";
                                 
                                 $result=$db->query($sql_participantes,$ejecucion->id);
                                 $data_participantes=array();
                                 while ($a=$db->fetchByAssoc($result)){
                                     $data_participantes[]=$a;
                                 }

                                 self::atarParticipantes($data_participantes,$ejecucion->id);

                                 }
                        }else{
                            // Se genero la cobranza previamente
                            $sql_det="Update detalle_cotizacion  set ejecucion_id='".$ejecucion->id."' where oportunidad_id='".$oportunidad->id."' and id='".$ids['oportunidad_id']."'";
                            $db->query($sql_det);

                        }
                    }else{
                        $GLOBALS['log']->fatal($info);
                        // Reversamos la ejecucion
                        self::reversar($relacion,$ejecucion);
                        $this->respuesta->estado=true;
                        $this->respuesta->error[]="Se genero un error al generar la relacion oportunidad y la ejecucion, revise el log  ";
                        return $this->respuesta;
                    }

                }else{
                    $this->respuesta->estado=true;
                    $this->respuesta->error[]="No se encontro ninguna oportunidad atada a este programa ";
                    return $this->respuesta;

            }
         }// end for ,
         //  Cambiar de estado del programa
                if($ejecucion instanceof ee_EjecucionPrograma){
                     $programa->estado="EnEjecucion";
                     $programa->ejecucion_id=$ejecucion->id;
                     $programa->save();
                  
                      $this->respuesta->id_creado=$ejecucion->id;
                      $this->respuesta->modulo_dir=$ejecucion->module_dir;

                  }else{
                    $this->respuesta->estado=true;
                    $this->respuesta->error[]="Se produjo un error ";
                    return $this->respuesta;
                  }
           


                 
                  
          return $this->respuesta;
        }else{
               $this->respuesta->estado=true;
                $this->respuesta->error[]="No se encontro ningun programa con ese id ";
                return $this->respuesta;

        }
    }

    /*
     * 
     */
    function revesar($ejecucion,$relacion=array(),$cobranza=array()){
        global $db;
                        $ejecucion->deleted=1;
                        $ejecucion->save();
                        // y las relaciones
                        if(is_array($relacion)){
                            foreach($relacion as $key => $value){
                                $reversa=" Update ee_ejecucionprograma_opportunities_c set deleted=1
                                           where id='".$value."'";
                                $op_reversa=$db->query($reversa);
                            }

                        }


                        if(is_array($cobranza)){

                            foreach($cobranza as $key => $data){
                                if($data instanceof ee_Cobranzas){
                                    $data->deleted=0;
                                    $data->save();

                                }
                            }

                        }
    }


    /* proceso de cierre de la ejecucion */

    function cierraEjecucion(){


        if(empty($this->programa_id)){
                $this->respuesta->estado=true;
                $this->respuesta->error[]="No existe ningún programa relacionado con el id ";
                return $this->respuesta;
        }
         $programa=new ee_Programas();
         $programa->retrieve($this->programa_id);
         if(empty($programa->id)){
                $this->respuesta->estado=true;
                $this->respuesta->error[]="No se encontro ningun programa con ese id ";
                return $this->respuesta;
        }

        if(!empty($programa->ejecucion_id)){
            $ejecucion=new ee_EjecucionPrograma();
            $ejecucion->retrieve($programa->ejecucion_id);
            if(!empty($ejecucion->id)){
                $ejecucion->estado="Cerrado";
                $ejecucion->save();
                $programa->estado="Cerrado";
                $programa->save();
                $this->respuesta->modulo_dir=$ejecucion->module_dir;
                $this->respuesta->id_creado=$ejecucion->id;
                return $this->respuesta;
            }else{
                $this->respuesta->estado=true;
                $this->respuesta->error[]="No se encontro ningun registro de ejecucion con ese id ";
                return $this->respuesta;
            }
        }else{
                $this->respuesta->estado=true;
                $this->respuesta->error[]="No se encontra ningun codigo de ejecucion para este programa ";
                return $this->respuesta;
        }


    }


    private function atarParticipantes($data=array(),$id_ejecucion=''){
        global $db;
        

        if(is_array($data)){

            foreach ($data as $key =>$val){
               $id=create_guid();
               $insert=" insert into ee_ejecucionprograma_contacts_c
                             (
                             id,
                             date_modified,
                             deleted,
                             ee_ejecucionprograma_contactsee_ejecucionprograma_ida,
                             ee_ejecucionprograma_contactscontacts_idb
                             ) values(
                             '".$id."',
                             '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                             '0',
                             '".$id_ejecucion."',
                             '".$val['idcontacto']."')";

               $info=$db->query($insert);
         
            }
         
        }else
            $GLOBALS['log']->fatal("no ingreso al array");


    }

}
?>
