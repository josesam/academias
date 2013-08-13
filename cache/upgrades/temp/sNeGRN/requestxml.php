<?php //
//	  $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : 'http://evaluaciones.usfq.edu.ec/webservices/banner/server.php?wsdl';
//	  
//        $f = fopen("./soap-request.xml", "w");
////	  fwrite($f, $HTTP_RAW_POST_DATA);
//          
//	  fre
//          fclose($f);

// Pull in the NuSOAP code
if (!defined('sugarEntry'))define('sugarEntry', true);
            require_once('include/entryPoint.php');
            ob_start();
            require_once('include/MVC/SugarApplication.php');   
            
            function explodeTelefono($var,$posicion=2){
                $array=explode(" ",$var);
                if ($posicion==2)
                    return $array[$posicion].$array[$posicion+1];
                else
                    return $array[$posicion];
            }            
            
            global $db;
            
            $codigos=array(
                
            );
            $codigo=array(
                'id'=>'',
                'banner'=>'',
            );
            
            $sql="SELECT c.id,c.primernombre first_name,c.segundonombre middle_name,c.last_name last_name, 
                    c.birthdate, c.calle_principal,c.ciudad_principal,c.provincia_principal,c.pais_principal,
                    c.cedula, em.email_address email,cs.genero_c genero,c.phone_mobile,
                    c.phone_work,c.phone_other,c.ext
                  FROM contacts c
                  INNER JOIN ee_ejecucionprograma_contacts_c r ON c.id = r.ee_ejecucionprograma_contactscontacts_idb
                  INNER JOIN ee_ejecucionprograma e ON e.id = r.ee_ejecucionprograma_contactsee_ejecucionprograma_ida
                  inner join contacts_cstm cs on c.id=cs.id_c
                  LEFT JOIN email_addr_bean_rel h ON c.id = h.bean_id
                  AND h.bean_module = 'Contacts'   and h.primary_address=1
                  AND h.deleted =0
                  LEFT JOIN email_addresses em on em.id=h.email_address_id
                  
                  WHERE c.deleted =0
                  AND r.deleted =0
                  AND e.deleted =0
                  AND cedula IS NOT NULL
                  AND codigobanner IS NULL LIMIT 0,15 ";
            $result=null;
            $result=$db->query($sql);
            $data=array();
	    while ($a=$db->fetchByAssoc($result)){
                $data[]=$a;
            }
            require_once('include/nusoap/nusoap.php');
	
         

            $wsdl = "http://evaluaciones.usfq.edu.ec/webservices/banner/server.php?wsdl";
            $username = "SUGARCRM";
            $password = md5("BannerWS&sugar&290812");
            
            $client = new nusoap_client( $wsdl, 'wsdl' ); 
            if(count($data)>0){
                foreach($data as $key =>$value){
                    $err = $client->getError();
                    $first_name = $value['first_name'];
                    $middle_name = $value['middle_name'];
                    $last_name = $value["last_name"];
                    $birth_date = "";
                    if(!is_null($value["birthdate"])){
                        $array=explode("-",$value["birthdate"]);
                        //$birth_date=$array[2]."/".$array[1]."/".$array[0];
                        $birth_date=$value["birthdate"];
                    }  
                    if($value["genero"]=="Femenino"){
                        $sex = "F";
                    }else{
                        $sex = "M";
                    }
                    $id_number=$value["cedula"];

                    $addresses = array( 
                    array( 'code' => 'PR', 'street' => $value["calle_principal"], 'city' => $value["ciudad_principal"], 'state' => $value['provincia_principal'], 'country' => $value['pais_principal'] )
                    );
                    
                    $phones = array( 
                        array( 'code' => 'PR', 'area' => "0".explodeTelefono($value['phone_other'],1), 'number' => explodeTelefono($value['phone_other'])),
                        array( 'code' => 'CL', 'area' => explodeTelefono($value['phone_mobile'],1), 'number' => explodeTelefono($value['phone_mobile']) ),
                        array( 'code' => 'EM', 'area' => '0'.explodeTelefono($value['phone_work'],1), 'number' => explodeTelefono($value['phone_work']), 'extension' => $value['ext'] )
                    );

                    $emails = array( 
                            array( 'code' => 'PERS', 'email' => $value['email'], 'preferred' => 'Y' ),
                    );

                    $params = array('username'=>$username, 'password'=>$password, 'id_number'=>$id_number, 'first_name'=>$first_name, 'middle_name'=>$middle_name, 'last_name'=>$last_name,
                    'sex'=>$sex,'birth_date'=>$birth_date, 'addresses'=>$addresses, 'phones'=>$phones, 'emails'=>$emails); 


                    $result = $client->call('PersonCreate',$params);



                if ($err) 
                {
                   
                   $GLOBALS['log']->fatal('Constructor error'); 
                   
                }

                // Call the SOAP method
                //$result = $client->call('hello', array('name' => 'Scott'));

                // Check for a fault	
                if ($client->fault){
                        
                        //print_r($result);
                        $GLOBALS['log']->fatal($result); 
                        
                }else{

                        // Check for errors
                        $err = $client->getError();
                        if ($err){
                                // Display the error

                                $GLOBALS['log']->fatal($err); 
                        }else {
                              
                                if($result['banner_id']=="0"){
                                    $GLOBALS['log']->fatal("El participante ".$value["first_name"]."".$value["last_name"] ."  se encuentra registrado"); 
                                }else{
              
                                    $codigo=array(
                                        'id'=>$value["id"],
                                        'banner'=>$result['banner_id'],
                                    ); 
                                    $codigos[]=$codigo;
                                }
                               
                        }
                }
          } 
          
                if (count($codigos)>0){
                    foreach($codigos as $value){
                        $sql="Update contacts set codigobanner='".$value['banner']."' where id='".$value["id"]."'";
                        $db->query($sql);
                    }
                }
         }
?>