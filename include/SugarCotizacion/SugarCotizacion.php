<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");

class SugarCotizacion extends SugarBean {
	var $table_name = 'detalle_cotizacion ';
	
	/**
	 * Sole constructor
	 */
	function __construct() {
		parent::SugarBean();
		$this->smarty = new Sugar_Smarty();
         }
	
	
	function save($cotizacion, $module, $in_workflow=false,$cliente_id='') {
                global $timedate;
                $ids = array();

		$datos = $_POST;
                $actual=self::getCotizacionByGUID($cotizacion, $module);
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
                            'fechaprograma'=>  $timedate->to_db($datos['fechaprogramatxt_' . $id]),
                            'fechavalidez'=>  $timedate->to_db($datos['fechavalideztxt_' . $id]),
                            'fuente'=>  $datos['tipoprogramatxt_' . $id],
                            'tipoprograma'=>$datos['presencialtxt_'.$id],
                            'cliente_id'=>$cliente_id,
                            'oportunidad_id'=>$cotizacion
                           
                        );
                        self::AddUpdateProgramas($data);
			
		}
              
                self::delete($ids,$actual);
		return $productos;


	}



	function AddUpdateProgramas($data=array()){

                if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           idprograma='".$data['idprograma']."',
                           programa='".$data['programa']."',
                           coordinador='".$data['coordinador']."',
                           horas='".$data['horas']."',
                           total='".$data['valor']."',
                           fuente='".$data['fuente']."',
                           cliente_id='".$data['cliente_id']."',
                           tipoprograma='".$data['tipoprograma']."',
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
                           fecha_programa,
                           fecha_validez,
                           fuente,
                           tipoprograma,
                           oportunidad_id,
                           cliente_id
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
                          '".$data['fechaprograma']."',
                          '".$data['fechavalidez']."',
                          '".$data['fuente']."',
                          '".$data['tipoprograma']."',
                          '".$data['oportunidad_id']."',
                          '".$data['cliente_id']."'
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
	function getCotizacionByGUID($id, $module) {
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
	function getCotizacionWidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;

                 $prefillDataArr = array();
		if(!empty($id)) 
			$prefillDataArr = $this->getCotizacionByGUID($id, $module);
	
		

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
                $oportunidad=new Opportunity();
                $oportunidad->retrieve($id);
                $convertida=0;
                if(($oportunidad->sales_stage=="Closed Won") || ($oportunidad->sales_stage=="Closed Lost"))
                        $convertida=1;

		$this->smarty->assign('module', $module);
		$this->smarty->assign('app_strings', $app_strings);
		$this->smarty->assign('prefillAmbientes', $prefill);
		$this->smarty->assign('prefillData', $prefillData);
		$this->smarty->assign('emailView', $this->view);
                $this->smarty->assign('convertida', $convertida);

		
		$template = empty($tpl) ? "include/SugarCotizacion/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getCotizacionWidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                if(empty($focus->id))return '';
                    $prefillData = $this->getCotizacionByGUID($focus->id, $focus->module_dir);

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
		$templateFile = empty($tpl) ? "include/SugarCotizacion/templates/DetailView.html" : $tpl;
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
function getCotizacionWidget($focus, $field, $value, $view) {
	$sea = new SugarCotizacion();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getCotizacionWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

	return $sea->getCotizacionWidgetDetailView($focus);
}

?>
