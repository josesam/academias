<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");
require_once ('custom/include/clases/varios/FormatUtil.php');

class SugarProgramas extends SugarBean {
	var $table_name = 'detalle_programa ';
	
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
                $actual=self::getProgramasByGUID($cotizacion, $module);
		foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prod_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prod_', '', $key);
                        if(!empty($datos['id_' . $id]))
                        $ids[]=$datos['id_' . $id];
                        $data=array(
                            'id'=>  $datos['id_' . $id],
                            'modulo'=>  $datos['modulotxt_' . $id],
                            'profesor'=>  $datos['profesortxt_' . $id],
                            'horas'=>  $datos['horastxt_' . $id],
                            'fechainicio'=>  $datos['fechainiciotxt_' . $id],
                            'fechafin'=>  $datos['fechafintxt_' . $id],
                            'tipo'=>  $datos['tipotxt_' . $id],
                            'nivel'=>  $datos['niveltxt_' . $id],
                            'lugar'=>  $datos['lugartxt_' . $id],
                            'instalaciones'=>  $datos['instalacionestxt_' . $id],
                            'idmodulo'=>  $datos['idmodulotxt_' . $id],
                            'idprofesor'=>  $datos['idprofesortxt_' . $id],
                            'paralelo'=>  $datos['paralelotxt_' . $id],
                            'programa_id'=>$cotizacion
                           
                        );
                        self::AddUpdateProgramas($data);
			//$productos[$key] = $data;
		}
              //  if(count($ids)>0)
                    self::delete($ids,$actual);
		return $productos;


	}



	function AddUpdateProgramas($data=array()){

                if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           modulo='".$data['modulo']."',
                           profesor='".$data['profesor']."',
                           fechainicio='".$data['fechainicio']."',
                           fechafin='".$data['fechafin']."',
                           tipo='".$data['tipo']."',
                           nivel='".$data['nivel']."',
                           lugar='".$data['lugar']."',
                           horas=".$data['horas'].",
                           instalaciones='".$data['instalaciones']."',
                           idmodulo='".$data['idmodulo']."',
                           idprofesor='".$data['idprofesor']."',
                           paralelo='".$data['paralelo']."',
                           fecha_inicio='".FormatUtil::formatDate($data['fechainicio'],'Y-m-d')."',
                           fecha_fin='".FormatUtil::formatDate($data['fechafin'],'Y-m-d')."',   
                           date_modified='".gmdate($GLOBALS['timedate']->get_db_date_time_format())."'
                           where programa_id='".$data['programa_id']."' and id='".$data['id']."'";
		   $this->db->query($query);
		}else{



		 $query="insert into ".$this->table_name."
                         (
                           id,
                           date_entered,
                           date_modified,
                           deleted,
                           modulo,
                           profesor,
                           fechainicio,
                           fechafin,
                           tipo,
                           nivel,
                           lugar,
                           horas,
                           instalaciones,
                           programa_id,
                           idmodulo,
                           idprofesor,
                           paralelo,
                           fecha_inicio,
                           fecha_fin
                           
                         )
                          values(
                          null,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0',
                          '".$data['modulo']."',
                          '".$data['profesor']."',
                          '".$data['fechainicio']."',
                          '".$data['fechafin']."',
                          '".$data['tipo']."',
                          '".$data['nivel']."',
                          '".$data['lugar']."',
                          '".$data['horas']."',
                          '".$data['instalaciones']."',
                          '".$data['programa_id']."',
                          '".$data['idmodulo']."' ,
                          '".$data['idprofesor']."',
                          '".$data['paralelo']."',
                          '".FormatUtil::formatDate($data['fechainicio'],'Y-m-d')."',
                          '".FormatUtil::formatDate($data['fechafin'],'Y-m-d')."'    
                          
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
	function getProgramasByGUID($id, $module) {
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
	function getProgramasWidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;
                global $timedate;
                $format_date=$timedate->get_date_format();
                 $prefillDataArr = array();
		if(!empty($id)) 
			$prefillDataArr = $this->getProgramasByGUID($id, $module);
	
		

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
                $this->smarty->assign('format_date', $format_date);

		
		$template = empty($tpl) ? "include/SugarProgramas/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getProgramasWidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                if(empty($focus->id))return '';
                    $prefillData = $this->getProgramasByGUID($focus->id, $focus->module_dir);

                foreach($prefillData as $key => $ambientes) {
			$assign[] = array('key' => $key,
		           		  'modulo' =>$ambientes['modulo'],
			        	  'profesor' =>$ambientes['profesor'],
					  'nivel'=>$ambientes['nivel'],
				          'horas'=>$ambientes['horas'],
					  'tipo'=>$ambientes['tipo'],
  					  'fechainicio'=>$ambientes['fechainicio'],
                                          'fechafin'=>$ambientes['fechafin'],
                                          'lugar'=>$ambientes['lugar'],
                                          'instalaciones'=>$ambientes['instalaciones'],
                                          'paralelo'=>$ambientes['paralelo']
                                          

			);
		}
                $this->smarty->assign('ambientes', $assign);
                $this->smarty->assign('idOportunidad', $focus->id);
		$templateFile = empty($tpl) ? "include/SugarProgramas/templates/DetailView.html" : $tpl;
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
function getProgramasWidget($focus, $field, $value, $view) {
	$sea = new SugarProgramas();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getProgramasWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

	return $sea->getProgramasWidgetDetailView($focus);
}

?>
