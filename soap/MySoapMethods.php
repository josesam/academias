<?php
$server->register(
    'clientesusfq',
        array(
         'user_auth'=>'tns:user_auth',
         'application_name'=>'xsd:string',
         'email'=>'xsd:string',
         'name_value_list'=>'tns:name_value_list',
         'module_name'=>'xsd:string',
    
    ),
    array(
        'return' => 'xsd:string'
    ),
    $NAMESPACE
);

function clientesusfq($user_auth, $application, $email, $name_value_list, $module_name) {
    // perform your logic here and return a string
    // Comienzo de la logica de login
        global $sugar_config, $system_config;
        global $current_user;
        if ($module_name!='Contacts'){
            
            return "Error , modulo no permitido";
        }
        if (empty($email))    
                    return "El email es un campo requerido";
	$error = new SoapError();
	$user = new User();
	$success = false;
	//rrs
        $system_config = new Administration();
	$system_config->retrieveSettings('system');
	$authController = new AuthenticationController((!empty($sugar_config['authenticationClass'])? $sugar_config['authenticationClass'] : 'SugarAuthenticate'));
	//rrs
	$isLoginSuccess = $authController->login($user_auth['user_name'], $user_auth['password'], array('passwordEncrypted' => true));
	$usr_id=$user->retrieve_user_id($user_auth['user_name']);
	if($usr_id) {
		$user->retrieve($usr_id);
	}

	if ($isLoginSuccess) {
		if ($_SESSION['hasExpiredPassword'] =='1') {
			$error->set_error('password_expired');
			$GLOBALS['log']->fatal('password expired for user ' . $user_auth['user_name']);
			LogicHook::initialize();
			$GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
			//return array('id'=>-1, 'error'=>$error);
                        return "Su sesion ha expirado";

		} // if
		if(!empty($user) && !empty($user->id) && !$user->is_group) {
			$success = true;
			global $current_user;
			$current_user = $user;
		} // if
	} else if($usr_id && isset($user->user_name) && ($user->getPreference('lockout') == '1')) {
			$error->set_error('lockout_reached');
			$GLOBALS['log']->fatal('Lockout reached for user ' . $user_auth['user_name']);
			LogicHook::initialize();
			$GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
			//return array('id'=>-1, 'error'=>$error);
                        return "Error de Autenticación";
	} else if(function_exists('mcrypt_cbc')){
		$password = decrypt_string($user_auth['password']);
		$authController = new AuthenticationController((!empty($sugar_config['authenticationClass'])? $sugar_config['authenticationClass'] : 'SugarAuthenticate'));
		if($authController->login($user_auth['user_name'], $password) && isset($_SESSION['authenticated_user_id'])){
			$success = true;
		} // if
	} // else if

	if($success){

		session_start();
		global $current_user;
		//$current_user = $user;
		login_success();
		$current_user->loadPreferences();
		$_SESSION['is_valid_session']= true;
		$_SESSION['ip_address'] = query_client_ip();
		$_SESSION['user_id'] = $current_user->id;
		$_SESSION['type'] = 'user';
		$_SESSION['avail_modules']= get_user_module_list($current_user);
		$_SESSION['authenticated_user_id'] = $current_user->id;
		$_SESSION['unique_key'] = $sugar_config['unique_key'];

		$current_user->call_custom_logic('after_login');
		//return array('id'=>session_id(), 'error'=>$error);
                $session=session_id();
                
                // Busqueda de la cedula

                    global  $beanList, $beanFiles;
                    $error = new SoapError();
                    if(!validate_authenticated($session)){
                        $error->set_error('invalid_login');
                        //return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
                        return "Sesión invalida";
                    }
                    $using_cp = false;
                    if($module_name == 'CampaignProspects'){
                        $module_name = 'Prospects';
                        $using_cp = true;
                    }
                    if(empty($beanList[$module_name])){
                            $error->set_error('no_module');
                            return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
                            return "No existe el modulo".$module_name;
                    }
                    global $current_user;
                    if(!check_modules_access($current_user, $module_name, 'read')){
                            $error->set_error('no_access');
                            //return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
                            return "No tiene acceso al módulo";
                    }

                    // If the maximum number of entries per page was specified, override the configuration value.
                    if($max_results > 0){
                            global $sugar_config;
                            $sugar_config['list_max_entries_per_page'] = $max_results;
                    }

              // validacionb del email, para su unicidad
                
                global $db;    
                $filtros.= " and em.email_address like '%".$email."%'";
                $sql="SELECT a.id  cliente_id,
                    em.email_address email
                    FROM contacts a
                    LEFT JOIN email_addr_bean_rel h ON a.id = h.bean_id
                    AND h.bean_module = 'Contacts'
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                    where a.deleted=0 ".$filtros;
            $result=$db->query($sql);
        
                $output_list=array();    
                while($a = $db->fetchByAssoc($result)) {
                    $output_list[] = $a;
                    break;
            }
                if(count($output_list)>0){
                    //fin de la busqueda de cédula
                       $cliente_id="";
                       foreach($output_list as $key =>$value){
                           $cliente_id=$value['cliente_id'];
                       }
                       //return $cadena;
                       if(empty($cliente_id)){
                           return "Error no se encontro al contacto";
                       }
                    	global  $beanList, $beanFiles;
                        $error = new SoapError();
                        if(!validate_authenticated($session)){
                                $error->set_error('invalid_login');
                               // return array('id'=>-1, 'error'=>$error->get_soap_array());
                                return "Sesión invalida , proceso de inserción";
                        }
                        if(empty($beanList[$module_name])){
                                $error->set_error('no_module');
                                //return array('id'=>-1, 'error'=>$error->get_soap_array());

                                return "Módulo invalido, proceso de inserción";
                        }
                        global $current_user;
                        if(!check_modules_access($current_user, $module_name, 'write')){
                                $error->set_error('no_access');
                                
                                return "No tiene permisos de inserción";
                        }
                        $cuenta=new Contact();
                        $cuenta->retrieve($cliente_id);
                        if(empty($cuenta->id)){
                            return 'No se encuentra un cliente con ese codigo';
                        }


                        foreach($name_value_list as $value){
                            if($value['name'] == 'cursointeres' && isset($value['value']) && strlen($value['value']) > 0){
                                $c=$value['value'];
                            }
                        }
                         if(empty($c)){
                            return 'Ingrese un programa de interes';
                        }
                        $cursointeres=$cuenta->cursosinteres;
                        if(empty($cursointeres)){
                            $cuenta->cursosinteres=$c;
                            
                        }else{
                            $cuenta->cursosinteres.=";".$c;
                            
                        }
                        $cuenta->assigned_user_id=$current_user->id;
                        $cuenta->save();
                        return "Contacto actualizado";
                    
                }else{
                    
                // inserción de la informacion
                        
                    	global  $beanList, $beanFiles;
                        $error = new SoapError();
                        if(!validate_authenticated($session)){
                                $error->set_error('invalid_login');
                               // return array('id'=>-1, 'error'=>$error->get_soap_array());
                                return "Sesión invalida , proceso de inserción";
                        }
                        if(empty($beanList[$module_name])){
                                $error->set_error('no_module');
                                //return array('id'=>-1, 'error'=>$error->get_soap_array());

                                return "Módulo invalido, proceso de inserción";
                        }
                        global $current_user;
                        if(!check_modules_access($current_user, $module_name, 'write')){
                                $error->set_error('no_access');
                                //return array('id'=>-1, 'error'=>$error->get_soap_array());
                                return "No tiene permisos de inserción";
                        }

                        $class_name = $beanList[$module_name];
                        require_once($beanFiles[$class_name]);
                        $seed = new $class_name();

                        foreach($name_value_list as $value){
                        if($value['name'] == 'id' && isset($value['value']) && strlen($value['value']) > 0){
                                        $result = $seed->retrieve($value['value']);
                            //bug: 44680 - check to ensure the user has access before proceeding.
                            if(is_null($result))
                            {
                                $error->set_error('no_access');
                                        //return array('id'=>-1, 'error'=>$error->get_soap_array());
                                return "No tiene permisos de inserción";
                            }

                            else
                            {
                                break;
                            }

                                }
                        }
                        foreach($name_value_list as $value){
                        $GLOBALS['log']->debug($value['name']." : ".$value['value']);
                                $seed->$value['name'] = $value['value'];
                        }
                        if(! $seed->ACLAccess('Save') || ($seed->deleted == 1  &&  !$seed->ACLAccess('Delete')))
                        {
                                $error->set_error('no_access');
                                //return array('id'=>-1, 'error'=>$error->get_soap_array());
                                return "No tiene permisos de inserción";
                        }
                        $seed->save();
                        if($seed->deleted == 1){
                                        $seed->mark_deleted($seed->id);
                        }
                        return "Se inserto el contacto";
                        //return array('id'=>$seed->id, 'error'=>$error->get_soap_array());

                // fin de la insercion
                }
   	}
	$error->set_error('invalid_login');
	$GLOBALS['log']->fatal('SECURITY: User authentication for '. $user_auth['user_name']. ' failed');
	LogicHook::initialize();
	$GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
	return "Error de Autenticacion";
        // Fin de la funcion de Login
}
?>
