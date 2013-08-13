<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");

class SugarEncuesta extends SugarBean {
	var $table_name = ' detalle_encuesta ';
	
	/**
	 * Sole constructor
	 */
	function __construct() {
		parent::SugarBean();
		$this->smarty = new Sugar_Smarty();
         }
	
	
	function save($cotizacion, $module, $in_workflow=false) {
                $ids = array();
		$datos = $_POST;
                $actual=self::getEncuestaByGUID($cotizacion, $module);
		foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prod_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prod_', '', $key);
                        if(!empty($datos['id_' . $id]))
                        $ids[]=$datos['id_' . $id];
                        $data=array(
                            'id'=>  $datos['id_' . $id],
                            'idprograma'=>  $datos['idprogramatxt_' . $id],
                            'programa'=>  $datos['programatxt_' . $id],
                            'horas'=>  $datos['horastxt_' . $id],
                            'coordinador'=>  $datos['coordinadortxt_' . $id],
                            'valor'=>  $datos['valortxt_' . $id],
                         
                            
                            'oportunidad_id'=>$cotizacion
                           
                        );
                        self::AddUpdateEncuesta($data);
			//$productos[$key] = $data;
		}
              //  if(count($ids)>0)
                    self::delete($ids,$actual);
		return $productos;


	}



	function AddUpdateEncuesta($data=array()){

                if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           idprograma='".$data['idprograma']."',
                           programa='".$data['programa']."',
                           coordinador='".$data['coordinador']."',
                           horas='".$data['horas']."',
                           total='".$data['valor']."',
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
                           idprograma,
                           programa,
                           coordinador,
                           horas,
                           total,
                           oportunidad_id
                           
                         )
                          values(
                          null,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0',
                          '".$data['idprograma']."',
                          '".$data['programa']."',
                          '".$data['coordinador']."',
                          '".$data['horas']."',
                          '".$data['valor']."',
                          '".$data['oportunidad_id']."'
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
	function getEncuestaByGUID($id, $module) {
		$return = array();
		$q = "SELECT * FROM ".$this->table_name." where oportunidad_id = '{$id}'
				AND deleted = 0 order by id ";
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
	function getEncuestaWidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;

                 $prefillDataArr = array();
		if(!empty($id)) 
			$prefillDataArr = $this->getEncuestaByGUID($id, $module);
	
		

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
                $this->smarty->assign('convertida', $convertida);

		
		$template = empty($tpl) ? "include/SugarEncuesta/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getEncuestaWidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                if(empty($focus->id))return '';
                    $prefillData = $this->getEncuestaByGUID($focus->id, $focus->module_dir);

                foreach($prefillData as $key => $ambientes) {
			$assign[] = array('key' => $key,
		           		  'programa' =>$ambientes['programa'],
			        	  'coordinador' =>$ambientes['coordinador'],
					  'horas'=>$ambientes['horas'],
				          'total'=>$ambientes['total'],
					  
                                          

			);
		}
                $this->smarty->assign('ambientes', $assign);
                $this->smarty->assign('idOportunidad', $focus->id);
		$templateFile = empty($tpl) ? "include/SugarEncuesta/templates/DetailView.html" : $tpl;
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
function getEncuestaWidget($focus, $field, $value, $view) {
	$sea = new SugarEncuesta();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getEncuestaWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

	return $sea->getEncuestaWidgetDetailView($focus);
}

?>
