<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");

class SugarLogistica extends SugarBean {
	var $table_name = ' detalle_logistico ';
	
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
                $actual=self::getLogisticaByGUID($cotizacion, $module);
		foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prodl_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prodl_', '', $key);
                        if(!empty($datos['idl_' . $id]))
                        $ids[]=$datos['idl_' . $id];
                        $data=array(
                            'id'=>  $datos['idl_' . $id],
                            'item'=>  $datos['itemtxt_' . $id],
                            'proveedor'=>  $datos['proveedortxt_' . $id],
                            'precio'=>  $datos['preciotxt_' . $id],
                            
                            'programa_id'=>$cotizacion,
                           'categoria'=>  $datos['categoriatxt_' . $id]
                        );
                        self::AddUpdateLogistica($data);
			//$productos[$key] = $data;
		}
              //  if(count($ids)>0)
                    self::delete($ids,$actual);
		return $productos;


	}



	function AddUpdateLogistica($data=array()){

                if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           item='".$data['item']."',
                           categoria='".$data['categoria']."',
                           proveedor='".$data['proveedor']."',
                           precio=".$data['precio'].",

                           
                           date_modified='".gmdate($GLOBALS['timedate']->get_db_date_time_format())."'
                           where programa_id='".$data['programa_id']."' and id='".$data['id']."'";
		   $this->db->query($query);
		}else{


		 $guid = create_guid();
		 $query="insert into ".$this->table_name."
                         (
                           id,
                           date_entered,
                           date_modified,
                           deleted,
                           item,
                           categoria,
                           proveedor,
                           precio,
                          
                           programa_id
                           
                         )
                          values(
                          null,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0',
                          '".$data['item']."',
                          '".$data['categoria']."',
                          '".$data['proveedor']."',
                          ".$data['precio'].",
                          '".$data['programa_id']."'
                          
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
	function getLogisticaByGUID($id, $module) {
		$return = array();
		$q = "SELECT * FROM ".$this->table_name." where programa_id = '{$id}'
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
	function getLogisticaWidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;

                 $prefillDataArr = array();
		if(!empty($id)) 
			$prefillDataArr = $this->getLogisticaByGUID($id, $module);
	
		

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

		
		$template = empty($tpl) ? "include/SugarLogistica/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getLogisticaWidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                if(empty($focus->id))return '';
                    $prefillData = $this->getLogisticaByGUID($focus->id, $focus->module_dir);

                foreach($prefillData as $key => $ambientes) {
			$assign[] = array('key' => $key,
		           		  'item' =>$ambientes['item'],
			        	  'proveedor' =>$ambientes['proveedor'],
					  'precio'=>$ambientes['precio'],
                                          'categoria'=>$ambientes['categoria'],
				        
                                          

			);
		}
                $this->smarty->assign('ambientes', $assign);
                $this->smarty->assign('idOportunidad', $focus->id);
		$templateFile = empty($tpl) ? "include/SugarLogistica/templates/DetailView.html" : $tpl;
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
function getLogisticaWidget($focus, $field, $value, $view) {
	$sea = new SugarLogistica();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getLogisticaWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

	return $sea->getLogisticaWidgetDetailView($focus);
}

?>
