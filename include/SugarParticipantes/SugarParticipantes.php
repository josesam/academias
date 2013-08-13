<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");

class SugarParticipantes extends SugarBean {
	var $table_name = ' detalle_participante ';
	var $datos;
        var $campos1;
	/**
	 * Sole constructor
	 */
	function __construct($id='',$module='') {
		parent::SugarBean();
		$this->smarty = new Sugar_Smarty();

         }
         
	function save($cotizacion, $module, $in_workflow=false) {
         global $timedate;
                $ids = array();

		$datos = $_POST;
                $actual=self::getParticipantesByGUID($cotizacion, $module);
		foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prodp_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prodp_', '', $key);
                        if(!empty($datos['idp_' . $id]))
                        $ids[]=$datos['idp_' . $id];
                        $data=array(
                            'id'=>  $datos['idp_' . $id],
                            'idcontacto'=>  $datos['idcontactotxt_' . $id],
                            'nombrecontacto'=>  $datos['nombrecontactotxt_' . $id],
                            'apellidocontacto'=>  $datos['apellidocontactotxt_' . $id],
                            'direccion'=>  $datos['direcciontxt_' . $id],
                            'telefono'=>  $datos['telefonotxt_' . $id],
                            
                            'fuente'=>  $datos['fuentetxt_' . $id],
                            'cedula'=>  $datos['cedulatxt_' . $id],
                            'oportunidad_id'=>$cotizacion,
                            'correo'=>$datos['correotxt_' . $id],
                            'cargo'=>$datos['cargotxt_' . $id],

                        );
                        self::AddUpdateParticipantes($data);

		}
                self::delete($ids,$actual);
		return $productos;

	}



	function AddUpdateParticipantes($data=array()){

           if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           idcontacto='".$data['idcontacto']."',
                           nombrecontacto='".$data['nombrecontacto']."',
                           apellidocontacto='".$data['apellidocontacto']."',
                           direccion='".$data['direccion']."',
                           telefono='".$data['telefono']."',
                           cedula='".$data['cedula']."',
                           fuente='".$data['fuente']."',
                           correo='".$data['correo']."',
                           cargo='".$data['cargo']."',    
                           date_modified='".gmdate($GLOBALS['timedate']->get_db_date_time_format())."'
                           where oportunidad_id='".$data['oportunidad_id']."' and id='".$data['id']."'";
		   $this->db->query($query);
		}else{

		 $guid = create_guid();
		 $query="insert into ".$this->table_name."
                         (
                           id,
                           date_entered,
                           date_modified,
                           deleted,
                           idcontacto,
                           nombrecontacto,
                           apellidocontacto,
                           direccion,
                           telefono,
                           fuente,
                           cedula,
                           correo,
                           oportunidad_id,
                           cargo
                         )
                          values(
                          null,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0',
                          '".$data['idcontacto']."',
                          '".$data['nombrecontacto']."',
                          '".$data['apellidocontacto']."',
                          '".$data['direccion']."',
                          '".$data['telefono']."',
                          '".$data['fuente']."',
                          '".$data['cedula']."',
                          '".$data['correo']."',    
                          '".$data['oportunidad_id']."',
                          '".$data['cargo']."'
                          )";

        	   	 $this->db->query($query);

		  }



          return;

	}         
        function delete($ids=array(),$actual=array()){
            if(is_array($actual)){
                $temp=$actual;
                foreach($actual as $key =>$value){

                    if(in_array($value['id'],$ids)){
                        unset($temp[$key]);
                    }
                }
                if(count($temp)){
                    foreach($temp as $key => $data){
                        $query="Update ".$this->table_name." set deleted=1 where id =".$data['id'];
                        $this->db->query($query);
                    }
                }

            }            
        }   
	/**
	 * Returns all email addresses by parent's GUID
	 * @param string $id Parent's GUID
	 * @param string $module Parent's module
	 * @return array
	 */
	function getParticipantesByGUID($id, $module,$contexto="") {
		$return = array();
                
                $q = "SELECT * FROM ".$this->table_name." where oportunidad_id = '{$id}' and deleted=0
				order by id ";
		//$this->archivo($q);
		$r = $this->db->query($q);
		while($a = $this->db->fetchByAssoc($r)) {
			$return[] = $a;
		}

		return $return;
	}


	/**
	 * Returns the HTML/JS for the EmailAddress widget
	 * @param string $parent_id ID of parent bean, generally $focus
	 * @param string $module $focus' module
	 * @param bool asMetadata Default false
	 * @return string HTML/JS for widget
	 */
	function getParticipantesWidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;
                $prefillDataArr = array();
		if(!empty($id))
			$prefillDataArr = $this->getParticipantesByGUID ($id, $module);
                $temporal=$prefillDataArr;
                if(is_array($temporal)){
                    foreach($temporal as $key => $datos){
                        if($datos['idcontacto']!='-99'){
                            $contacto=new Contact();
                            $contacto->retrieve($datos['idcontacto']);
                            $prefillDataArr[$key]['correo']=$contacto->email1;
                            $prefillDataArr[$key]['cargo']=$contacto->title;
                        }else{
                              $prefillDataArr[$key]['correo']=(!empty($datos['correo'])) ? $datos['correo'] : 'completar';
                              $prefillDataArr[$key]['cargo']=(!empty($datos['cargo'])) ? $datos['cargo'] : '';
                        }
                        
                    }
                }

                if(!empty($prefillDataArr)) {
			$json = new JSON(JSON_LOOSE_TYPE);
			$prefillData = $json->encode($prefillDataArr);
			$prefill = !empty($prefillDataArr) ? 'true' : 'false';
		}
                else{
                        $prefillDataArr[]='';
                    	$json = new JSON(JSON_LOOSE_TYPE);
			$prefillData = $json->encode($prefillDataArr);
			$prefill = !empty($prefillDataArr) ? 'true' : 'false';
                }

                $this->smarty->assign('module', $module);
		$this->smarty->assign('app_strings', $app_strings);
		$this->smarty->assign('prefillAmbientes', $prefill);
		$this->smarty->assign('prefillData', $prefillData);
		$this->smarty->assign('emailView', $this->view);

                
		
		

		
		$template = empty($tpl) ? "include/SugarParticipantes/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getParticipantesWidgetDetailView($focus, $tpl='') {
				
		
                if(empty($focus->id))return '';
                    $prefillData = $this->getParticipantesByGUID($focus->id, $focus->module_dir);

                foreach($prefillData as $key => $ambientes) {
                    
			$assign[] = array('key' => $key,
		           		  'nombre' =>$ambientes['nombrecontacto'],
			        	  'apellido' =>$ambientes['apellidocontacto'],
					  'direccion'=>$ambientes['direccion'],
				          'telefono'=>$ambientes['telefono'],
                                          'cedula'=>$ambientes['cedula'],
                                          'correo'=>$ambientes['correo'],
                                          'cargo'=>$ambientes['cargo']
                                          
			);
		}
                $this->smarty->assign('ambientes', $assign);
                $this->smarty->assign('idOportunidad', $focus->id);

		$templateFile = empty($tpl) ? "include/SugarParticipantes/templates/DetailView.html" : $tpl;
		$return = $this->smarty->fetch($templateFile);
		return $return;
	}

    function setView($view) {
	   $this->view = $view;
	}


} // end class def
/**
 * Convenience function for MVC (Mystique)
 * @param object $focus SugarBean
 * @param string $field unused
 * @param string $value unused
 * @param string $view DetailView or EditView
 * @return string
 */
function getParticipantesWidget($focus, $field, $value, $view) {
	$sea = new SugarParticipantes();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getParticipantesWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}
	return $sea->getParticipantesWidgetDetailView($focus);
}

?>
