<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");

class SugarCobranza extends SugarBean {
	var $table_name = ' detalle_pagos ';
	
	/**
	 * Sole constructor
	 */
	function __construct() {
		parent::SugarBean();
		$this->smarty = new Sugar_Smarty();
         }
	
	
	function save($cotizacion, $module,$monto=0, $in_workflow=false) {
                $ids = array();
		$datos = $_POST;
                $abonos=0;
                $actual=self::getCobranzaByGUID($cotizacion, $module);
		foreach ($datos as $key => $value) {
			$pos = strpos($key, 'prod_');
			if ($pos === false || $pos > 0)
				continue;
			$id = str_replace('prod_', '', $key);
                        if(!empty($datos['id_' . $id]))
                        $ids[]=$datos['id_' . $id];
                        $data=array(
                            'id'=>  $datos['id_' . $id],
                            'persona'=>  $datos['personatxt_' . $id],
                            'valor'=>  $datos['valortxt_' . $id],
                            'fecha'=>  $datos['fechapagotxt_' . $id],
                            'forma'=>  $datos['formatxt_' . $id],
                            'tarjeta'=>  $datos['tarjetatxt_' . $id],
                            'tipo'=>  $datos['tipotxt_' . $id],
                            'observaciones'=>  $datos['observacionestxt_' . $id],
                            'factura'=>  $datos['facturatxt_' . $id],
                            'programa_id'=>$cotizacion
                           
                        );
                        $abonos+=(float)$datos['valortxt_' . $id];
                        self::AddUpdateCobranza($data);
			//$productos[$key] = $data;
		}
              
                   self::delete($ids,$actual);
                   if((float)$abonos>=(float)$monto){
                       self::update_estado($cotizacion,"Cancelado");
                   }else{
                       self::update_estado($cotizacion);
                   }
                   $GLOBALS['log']->fatal("Abonos=".$abonos.' Monto= '.$monto);
		return $productos;


	}

        function update_estado($id="",$estado="Pendiente"){
            $query=" Update ee_cobranzas set estado='$estado' where id='$id'";
            	   $this->db->query($query);

        }

	function AddUpdateCobranza($data=array()){

                if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           persona='".$data['persona']."',
                           valor='".$data['valor']."',
                           fechapago='".$data['fecha']."',
                           formapago='".$data['forma']."',
                           tarjeta='".$data['tarjeta']."',
                           tipo='".$data['tipo']."',
                           observaciones='".$data['observaciones']."',
                           factura='".$data['factura']."',    
                           date_modified='".gmdate($GLOBALS['timedate']->get_db_date_time_format())."'
                           where cobranza_id='".$data['programa_id']."' and id='".$data['id']."'";
		   $this->db->query($query);
		}else{


		 $guid = create_guid();
		 $query="insert into ".$this->table_name."
                         (
                           id,
                           date_entered,
                           date_modified,
                           deleted,
                           persona,
                           valor,
                           fechapago,
                           formapago,
                           tarjeta,
                           tipo,
                           observaciones,
                           factura,
                           cobranza_id                           
                         )
                          values(
                          null,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0',
                          '".$data['persona']."',
                          '".$data['valor']."',
                          '".$data['fecha']."',
                          '".$data['forma']."',
                          '".$data['tarjeta']."',
                          '".$data['tipo']."',
                          '".$data['observaciones']."',
                          '".$data['factura']."',    
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
	function getCobranzaByGUID($id, $module) {
		$return = array();
		$q = "SELECT * FROM ".$this->table_name." where cobranza_id = '{$id}'
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
	function getCobranzaWidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;

                 $prefillDataArr = array();
		if(!empty($id)) 
			$prefillDataArr = $this->getCobranzaByGUID($id, $module);
	
		

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

		
		$template = empty($tpl) ? "include/SugarCobranza/templates/EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getCobranzaWidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                if(empty($focus->id))return '';
                    $prefillData = $this->getCobranzaByGUID($focus->id, $focus->module_dir);

                foreach($prefillData as $key => $ambientes) {
			$assign[] = array('key' => $key,
		           		  'persona' =>$ambientes['persona'],
			        	  'fechapago' =>$ambientes['fechapago'],
					  'valor'=>$ambientes['valor'],
                            'forma'=>$ambientes['formapago'],
                            'factura'=>$ambientes['factura'],
                            
                            'observaciones'=>$ambientes['observaciones'],
				          

			);
		}
                $this->smarty->assign('ambientes', $assign);
                $this->smarty->assign('idOportunidad', $focus->id);
		$templateFile = empty($tpl) ? "include/SugarCobranza/templates/DetailView.html" : $tpl;
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
function getCobranzaWidget($focus, $field, $value, $view) {
	$sea = new SugarCobranza();
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getCobranzaWidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

	return $sea->getCobranzaWidgetDetailView($focus);
}

?>
