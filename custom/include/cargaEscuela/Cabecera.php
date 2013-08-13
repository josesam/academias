<?php
class Cabecera {

    function clientesescuela($lista=array()){
        global $db,$current_user;
        $user_id=$current_user->id;
        
        for($i=0;$i<count($lista);$i++){
            $id=create_guid();
           $rr = "INSERT INTO accounts(id,name,date_entered,date_modified,modified_user_id,created_by,description,deleted,team_id,team_set_id,assigned_user_id,  
                                       primernombre,segundonombre,primerapellido,segundoapellido,razonsocial,nombrecomercial,ciudad_principal,provincia_principal,
                                       pais_principal,calle_principal,phone_alternate,phone_office,ext,cursosinteres,mediocontacto,detallemedio,
                                       otrodescuento,infobancaria)
                  VALUES(";
           $ff = "'".$id."',
                '".utf8_encode($lista[$i][0])."',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '".$user_id."',
                '".$user_id."',
                '".utf8_encode($lista[$i][25])."',
                '0',
                '1',
                '1',
                '".$user_id."',
                '".$lista[$i][4]."',
                '".$lista[$i][5]."',
                '".$lista[$i][6]."',
                '".$lista[$i][7]."',
                '".$lista[$i][8]."',
                '".$lista[$i][9]."',
                '".$lista[$i][11]."',
                '".$lista[$i][12]."',
                '".$lista[$i][10]."',
                '".$lista[$i][13]."',
                '".$lista[$i][14]."',
                '".$lista[$i][15]."',
                '".$lista[$i][16]."',
                '".$lista[$i][22]."',
                '".$lista[$i][23]."',
                '".$lista[$i][24]."',
                '".$lista[$i][28]."',
                '".$lista[$i][31]."'
                )";
            

          $r=$db->query($rr.$ff);
          
          $nacionalidad = '';
          $sqlNacionalidad=$db->query('SELECT id FROM ee_nacionalidad WHERE name="'.(utf8_decode($lista[$i][10])).'"'); 
          while($a = $db->fetchByAssoc($sqlNacionalidad))
              $nacionalidad=$a['id'];
          
          if($lista[$i][18]=='')
              $potencial = 0;
          else
              $potencial = $lista[$i][18];
          
          if($lista[$i][19]=='')
              $problema = 0;
          else
              $problema = $lista[$i][19];
          
          if($lista[$i][26]=='')
              $descuento = 0;
          else
              $descuento = $lista[$i][26];
          
          if($lista[$i][29]=='')
              $ingreso = 0;
          else
              $ingreso = $lista[$i][29];
          
          if($lista[$i][30]=='')
              $egreso = 0;
          else
              $egreso = $lista[$i][30];
                        
          $relacion="insert into accounts_cstm
                    ( 
                    id_c,
                    estado_c,
                    tipocliente_c,
                    nrodocumento_c,
                    ee_nacionalidad_id_c,
                    sectoreconomico_c,   
                    clientepotencial_c,
                    clienteproblema_c,
                    comportamientopago_c,
                    descuento_c,   
                    tipodescuento_c,
                    ingresospormes_c,
                    egresospormes_c
                    ) VALUES (
                     '$id',
                     '".$lista[$i][1]."',
                     '".$lista[$i][2]."',
                     '".$lista[$i][3]."',
                     '".$nacionalidad."',
                     '".$lista[$i][17]."',
                     ".$potencial.",
                     ".$problema.",
                     '".$lista[$i][20]."',
                     ".$descuento.",
                     '".$lista[$i][27]."',
                     ".$ingreso.",
                     ".$egreso."
                    )";
           $r=$db->query($relacion);   
           
           $idEmail1=create_guid();
           $email1="insert into email_addresses
                    ( 
                    id,
                    email_address,
                    email_address_caps,
                    date_created,
                    date_modified,
                    deleted
                    ) VALUES (

                     '$idEmail1',
                     '".$lista[$i][21]."',
                     '".strtoupper($lista[$i][21])."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '0'
                    )";
           $r=$db->query($email1); 
           
           $idEmailrelacion1=create_guid();
           $emailRelacion1="insert into email_addr_bean_rel
                    ( 
                    id,
                    email_address_id,
                    bean_id,
                    bean_module,
                    primary_address,
                    date_created,
                    date_modified,
                    deleted
                    ) VALUES (

                     '$idEmailrelacion1',
                     '".$idEmail1."',
                     '".$id."',
                     'Accounts',
                     1,
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '0'
                    )";
           $r=$db->query($emailRelacion1); 
        }
    }
    
    
    /*--------------------------------------------------------------------------------------------------------------------------------------*/
    
    function contactosescuela($lista=array()){
        global $db,$current_user;
        $user_id=$current_user->id;
        
        for($i=0;$i<count($lista);$i++){
            $id=create_guid();
            $saludo = '';
            if($lista[$i][1] == 'Sr.')
                $saludo = 'Mr.';
            if($lista[$i][1] == 'Sra.')
                $saludo = 'Ms.';
            if($lista[$i][1] == 'Srta.')
                $saludo = 'Mrs.';
            
            if($lista[$i][29]=='')
                $nollamar = 0;
            else
                $nollamar = $lista[$i][29];
            
            $nacionalidad = '';
            $sqlNacionalidad=$db->query('SELECT id FROM ee_nacionalidad WHERE name="'.(utf8_decode($lista[$i][14])).'"'); 
            while($a = $db->fetchByAssoc($sqlNacionalidad))
                $nacionalidad=$a['id'];
            $rr = "INSERT INTO contacts(id,date_entered,date_modified,modified_user_id,created_by,description,deleted,team_id,team_set_id,assigned_user_id,
                                        salutation,first_name,last_name,
                                        cedula,birthdate,phone_work,ext,phone_mobile,phone_other,nacionalidad_c,pais_principal,ee_nacionalidad_id_c,ciudad_principal,provincia_principal,
                                        calle_principal,title,lugartrabajo,cursosinteres,do_not_call,primernombre,segundonombre,primerapellido,segundoapellido)
                  VALUES(";
           $ff = "'".$id."',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                '".$user_id."',
                '".$user_id."',
                '".$lista[$i][25]."',
                '0',
                '1',
                '1',
                '".$user_id."',
                '".$saludo."',
                '".$lista[$i][2]." ".$lista[$i][3]."',
                '".$lista[$i][4]." ".$lista[$i][5]."',  
                '".$lista[$i][6]."',
                '".$lista[$i][9]."',
                '".$lista[$i][10]."',
                '".$lista[$i][11]."',
                '".$lista[$i][12]."',
                '".$lista[$i][13]."',
                '".$lista[$i][14]."',
                '".$lista[$i][14]."',
                '".$nacionalidad."',
                '".$lista[$i][15]."',
                '".$lista[$i][16]."',
                '".$lista[$i][17]."',
                '".$lista[$i][18]."',
                '".$lista[$i][20]."',
                '".$lista[$i][21]."',
                ".$nollamar.",
                '".$lista[$i][2]."',
                '".$lista[$i][3]."',
                '".$lista[$i][4]."',
                '".$lista[$i][5]."'  
                )";
            

          $r=$db->query($rr.$ff);
          $fsdsdf = $rr.$ff; 
          
          if($lista[$i][26]=='')
              $participante = 0;
          else
              $participante=$lista[$i][26];
          
          if($lista[$i][27]=='')
              $cobranza = 0;
          else
              $cobranza=$lista[$i][27];
          
          if($lista[$i][28]=='')
              $tomador = 0;
          else
              $tomador=$lista[$i][28];
          
          $relacion="insert into contacts_cstm
                    ( 
                    id_c, 
                    genero_c,
                    estadocivil_c,
                    area_c,
                    niveleducativo_c,
                    situacionlaboral_c,
                    participante_c,
                    cobranzas22_c,
                    tomadordecision_c,
                    razones_c,
                    detalle_c,
                    direccionfacebook_c,
                    direccionlinkedin_c,
                    direccionskype_c,
                    direcciontwitter_c,
                    vimeo_c,
                    googleplus_c
                    ) VALUES (
                     '$id',
                     '".$lista[$i][7]."',
                     '".$lista[$i][8]."',
                     '".$lista[$i][19]."',
                     '".$lista[$i][22]."',
                     '".$lista[$i][23]."',
                     ".$participante.",
                     ".$cobranza.",
                     ".$tomador.",
                     '".$lista[$i][30]."',
                     '".$lista[$i][31]."',
                     '".$lista[$i][32]."',
                     '".$lista[$i][33]."',
                     '".$lista[$i][34]."',
                     '".$lista[$i][35]."',
                     '".$lista[$i][36]."',
                     '".$lista[$i][37]."'
                    )";
           $r=$db->query($relacion);   
           
           $idEmail1=create_guid();
           $email1="insert into email_addresses
                    ( 
                    id,
                    email_address,
                    email_address_caps,
                    date_created,
                    date_modified,
                    deleted
                    ) VALUES (

                     '$idEmail1',
                     '".$lista[$i][24]."',
                     '".strtoupper($lista[$i][24])."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '0'
                    )";
           $r=$db->query($email1); 
           
           $idEmailrelacion1=create_guid();
           $emailRelacion1="insert into email_addr_bean_rel
                    ( 
                    id,
                    email_address_id,
                    bean_id,
                    bean_module,
                    primary_address,
                    date_created,
                    date_modified,
                    deleted
                    ) VALUES (

                     '$idEmailrelacion1',
                     '".$idEmail1."',
                     '".$id."',
                     'Contacts',
                     1,
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                     '0'
                    )";
           $r=$db->query($emailRelacion1);           
           
           
           $idCliente = '';
           $sqlCliente=$db->query('SELECT id FROM accounts WHERE name="'.utf8_encode($lista[$i][0]).'" and deleted=0 '); 
           while($a = $db->fetchByAssoc($sqlCliente))
               $idCliente=$a['id'];
           
           if($idCliente!=''){
               $idRelacion=create_guid();
               $relacion="insert into accounts_contacts
                        ( 
                        id, 
                        contact_id ,
                        account_id,
                        date_modified,
                        deleted
                        ) VALUES (
                         '$idRelacion',
                         '".$id."',
                         '".$idCliente."',
                         '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                         0
                        )";
               $r=$db->query($relacion);   
           }
        }
    }
}
?>