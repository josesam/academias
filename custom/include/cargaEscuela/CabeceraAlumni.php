<?phpclass Cabecera {    function clientesescuela($lista=array()){        global $db,$current_user;        $user_id=$current_user->id;                for($i=0;$i<count($lista);$i++){            $id=create_guid();           $rr = "INSERT INTO accounts(id,name,date_entered,date_modified,modified_user_id,created_by,description,deleted,phone_office,phone_alternate,website,razonsocial,primernombre,segundonombre,primerapellido,segundoapellido,nombrecomercial,calle_principal,calle2_principal,numero_principal,ciudad_principal,provincia_principal,pais_principal,mediocontacto,detallemedio,ext,cursosinteres,otrodescuento,infobancaria)                  VALUES(";           $ff = "'".$id."',                '".utf8_encode($lista[$i][0])."',                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                '".$user_id."',                '".$user_id."',                'Cliente Migrado',                '0',                '".$lista[$i][11]."',                '".$lista[$i][10]."',                '".$lista[$i][23]."',                '".utf8_encode($lista[$i][7])."',                '".utf8_encode($lista[$i][3])."',                '".utf8_encode($lista[$i][4])."',                '".utf8_encode($lista[$i][5])."',                '".utf8_encode($lista[$i][6])."',                '".utf8_encode($lista[$i][8])."',                '".utf8_encode($lista[$i][16])."',                '".utf8_encode($lista[$i][17])."',                '".$lista[$i][18]."',                '".utf8_encode($lista[$i][14])."',                '".utf8_encode($lista[$i][15])."',                '".$lista[$i][17]."',                '".$lista[$i][25]."',                '".$lista[$i][26]."',                '".$lista[$i][12]."',                '".$lista[$i][24]."',                '".$lista[$i][30]."',                '".$lista[$i][31]."'                )";                      $r=$db->query($rr.$ff);                    $nacionalidad = '';          $sqlNacionalidad=$db->query('SELECT id FROM ee_nacionalidad WHERE name="'.(utf8_decode($lista[$i][14])).'"');           while($a = $db->fetchByAssoc($sqlNacionalidad))              $nacionalidad=$a['id'];                                  $relacion="insert into accounts_cstm                    (                     id_c,                    clienteproblema_c,                    descuento_c,                    ee_nacionalidad_id_c,                    estado_c,                    nrodocumento_c,                    sectoreconomico_c,                    tipocliente_c,                    tipodescuento_c,                    clientepotencial_c                    ) VALUES (                     '$id',                     '".$lista[$i][20]."',                     ".str_replace(",", '.', (string)($lista[$i][28])).",                     '".$nacionalidad."',                     '".$lista[$i][9]."',                     '".$lista[$i][1]."',                     '".$lista[$i][27]."',                     '".utf8_encode($lista[$i][2])."',                     '".$lista[$i][29]."',                     ".$lista[$i][19]."                    )";           $r=$db->query($relacion);                         $idEmail1=create_guid();           $email1="insert into email_addresses                    (                     id,                    email_address,                    email_address_caps,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmail1',                     '".$lista[$i][21]."',                     '".strtoupper($lista[$i][21])."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($email1);                       $idEmail2=create_guid();           $email2="insert into email_addresses                    (                     id,                    email_address,                    email_address_caps,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmail2',                     '".$lista[$i][22]."',                     '".strtoupper($lista[$i][22])."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($email2);                       $idEmailrelacion1=create_guid();           $emailRelacion1="insert into email_addr_bean_rel                    (                     id,                    email_address_id,                    bean_id,                    bean_module,                    primary_address,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmailrelacion1',                     '".$idEmail1."',                     '".$id."',                     'Accounts',                     1,                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($emailRelacion1);                       $idEmailrelacion2=create_guid();           $emailRelacion2="insert into email_addr_bean_rel                    (                     id,                    email_address_id,                    bean_id,                    bean_module,                    primary_address,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmailrelacion2',                     '".$idEmail2."',                     '".$id."',                     'Accounts',                     1,                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($emailRelacion2);                               }    }            /*--------------------------------------------------------------------------------------------------------------------------------------*/        function contactosescuela($lista=array()){        global $db,$current_user;        $user_id=$current_user->id;                for($i=0;$i<count($lista);$i++){            $id=create_guid();            $saludo = '';            if($lista[$i][2] == 'Sr.')                $saludo = 'Mr.';            if($lista[$i][2] == 'Sra.')                $saludo = 'Ms.';            if($lista[$i][2] == 'Srta.')                $saludo = 'Mrs.';                        $nacionalidad = '';            $sqlNacionalidad=$db->query('SELECT id FROM ee_nacionalidad WHERE name="'.(utf8_decode($lista[$i][17])).'"');             while($a = $db->fetchByAssoc($sqlNacionalidad))                $nacionalidad=$a['id'];            $rr = "INSERT INTO contacts(id,date_entered,date_modified,modified_user_id,created_by,description,deleted,salutation,first_name,last_name,title,do_not_call,phone_mobile,phone_work,phone_other,calle_principal,calle2_principal,numero_principal,ciudad_principal,provincia_principal,pais_principal,primernombre,segundonombre,primerapellido,segundoapellido,nacionalidad_c,ee_nacionalidad_id_c,cedula)                  VALUES(";           $ff = "'".$id."',                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                '".$user_id."',                '".$user_id."',                'Contacto Migrado',                '0',                '".$saludo."',                '".$lista[$i][3]." ".$lista[$i][4]."',                '".$lista[$i][5]." ".$lista[$i][6]."',                '".$lista[$i][12]."',                ".$lista[$i][27].",                '".$lista[$i][11]."',                '".$lista[$i][9]."',                '".$lista[$i][10]."',                '".$lista[$i][20]."',                '".$lista[$i][21]."',                '".$lista[$i][22]."',                '".$lista[$i][18]."',                '".utf8_encode($lista[$i][19])."',                '".utf8_encode($lista[$i][17])."',                '".utf8_encode($lista[$i][3])."',                '".utf8_encode($lista[$i][4])."',                '".utf8_encode($lista[$i][5])."',                '".utf8_encode($lista[$i][6])."',                '".utf8_encode($lista[$i][17])."',                '".$nacionalidad."',                '".$lista[$i][1]."'                )";                      $r=$db->query($rr.$ff);                    $relacion="insert into contacts_cstm                    (                     id_c,                     area_c ,                    cobranzas22_c,                    estadocivil_c,                    genero_c,                    niveleducativo_c,                    participante_c,                    situacionlaboral_c,                    tomadordecision_c                    ) VALUES (                     '$id',                     '".$lista[$i][13]."',                     ".$lista[$i][26].",                     '".$lista[$i][8]."',                     '".$lista[$i][7]."',                     '".$lista[$i][15]."',                     '".$lista[$i][25]."',                     '".$lista[$i][14]."',                     '".$lista[$i][28]."'                    )";           $r=$db->query($relacion);                         $idEmail1=create_guid();           $email1="insert into email_addresses                    (                     id,                    email_address,                    email_address_caps,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmail1',                     '".$lista[$i][22]."',                     '".strtoupper($lista[$i][22])."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($email1);                       $idEmail2=create_guid();           $email2="insert into email_addresses                    (                     id,                    email_address,                    email_address_caps,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmail2',                     '".$lista[$i][23]."',                     '".strtoupper($lista[$i][23])."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($email2);                       $idEmailrelacion1=create_guid();           $emailRelacion1="insert into email_addr_bean_rel                    (                     id,                    email_address_id,                    bean_id,                    bean_module,                    primary_address,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmailrelacion1',                     '".$idEmail1."',                     '".$id."',                     'Contacts',                     1,                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($emailRelacion1);                       $idEmailrelacion2=create_guid();           $emailRelacion2="insert into email_addr_bean_rel                    (                     id,                    email_address_id,                    bean_id,                    bean_module,                    primary_address,                    date_created,                    date_modified,                    deleted                    ) VALUES (                     '$idEmailrelacion2',                     '".$idEmail2."',                     '".$id."',                     'Contacts',                     1,                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                     '0'                    )";           $r=$db->query($emailRelacion2);                       $idCliente = '';           $sqlCliente=$db->query('SELECT id FROM accounts WHERE name="'.$lista[$i][0].'" and deleted=0 ');            while($a = $db->fetchByAssoc($sqlCliente))               $idCliente=$a['id'];                      if($idCliente!=''){               $idRelacion=create_guid();               $relacion="insert into accounts_contacts                        (                         id,                         contact_id ,                        account_id,                        date_modified,                        deleted                        ) VALUES (                         '$idRelacion',                         '".$id."',                         '".$idCliente."',                         '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',                         0                        )";               $r=$db->query($relacion);              }                              }    }}?>