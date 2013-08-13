<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cabecera
 *
 * @author BOS
 */
class Cabecera {
    //put your code here
    /*
     * @param <object> Objeto de tipo Encuesta
     */
    function create_ee_EncuestaITC($lista=array(),$id_ejecucion=""){
        global $db,$current_user;
        $user_id=$current_user->id;
        $id=create_guid();
        foreach($lista as $key =>$value){
            
        
        $sql="insert into ee_encuestaitc 
              (
                id,date_entered,date_modified,deleted
                modified_user_id,created_by,team_id,team_set_id,assigned_user_id,
                participante,idparticipante,modulo,idmodulo 
               )
               values
               (
                '$id',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '0',
                '$user_id',
                '$user_id',
                '1',
                '1',
                '$user_id',
                '".$value['nombreparticipante']."',
                '".$value['participante']."',
                '".$value['nombremodulo']."',
                '".$value['modulos']."',    
                )";
          $r=$db->query($sql);
          $relacion="insert into ee_ejecucionprograma_ee_encuestaitc_c 
                    ( 
                      id,date_modified,deleted,
                      ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida,
                      ee_ejecucionprograma_ee_encuestaitcee_encuestaitc_idb
                    ) values (
                     '$id',
                    '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                    0,
                   '$id_ejecucion',
                    '$id'
                    )";
           $r=$db->query($relacion);
           self::detalle($id,$value);
           
          
        }
    }
    
    function create_ee_EncuestaInstructor($lista=array(),$id_ejecucion=""){
        global $db,$current_user;
        $user_id=$current_user->id;
        
        foreach($lista['datos'] as $key =>$value){
        $id=create_guid();    
        
            $sql="insert into  ee_encuestainstructor 
              (
                id,name,date_entered,date_modified,deleted,
                modified_user_id,created_by,team_id,team_set_id,assigned_user_id,
                instructor,idprofesor,modulo,idmodulo 
               )
               values
               (
                '$id',
                'Evaluación -".$value['instructor']."-".$value['nombremodulo']."',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '0',
                '$user_id',
                '$user_id',
                '1',
                '1',
                '$user_id',
                '".$value['instructor']."',
                '".$value['nombreinstructor']."',
                '".$value['nombremodulo']."',
                '".$value['modulos']."'    
                )";
          $res=$db->query($sql);
          $relacion="insert into ee_ejecucionprograma_ee_encuestainstructor_c 
                    ( 
                      id,date_modified,deleted,
                      ee_ejecuci54adrograma_ida,
                      ee_ejecucic277tructor_idb
                    ) values (
                     '$id',
                    '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                    0,
                   '$id_ejecucion',
                    '$id'
                    )";
           $r=$db->query($relacion);
           						

           
                self::detalle($id,"f2","fecha",$value["f2_fecha"]);
                self::detalle($id,"f2","grupo",$value["f2_grupo"]);
                self::detalle($id,"f2","participacionMuy",$value["f2_participacionMuy"]);
                self::detalle($id,"f2","interesMucho",$value["f2_interesMucho"]);
                self::detalle($id,"f2","rendimientoMuyBueno",$value["f2_rendimientoMuyBueno"]);
                self::detalle($id,"f2","actitudMuyBueno",$value["f2_actitudMuyBueno"]);
                self::detalle($id,"f2","comentarios",$value["f2_comentarios"]);
           
           
          
        }
    }
    
    function detalle($id,$contexto,$nombre,$texto){
        global $db;
        
        	 $query="insert into datos_modulo
                         (
                           id,
                           
                           contexto,
                           nombre,
                           texto,
                           
                           oportunidad_id
                           
                         )
                          values(
                          null,
                          
                          '".$contexto."',
                          '".$nombre."',
                          '".$texto."',
                          
                          '$id'
                          )";

	   	 $db->query($query);
        
        
        
    }
}

?>
