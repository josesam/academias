<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");

class SugarCotizacion extends SugarBean {
	var $table_name = 'det_materiales';
	
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
                            'prod'=>  $datos['prod_' . $id],
                            'cantidad'=>  $datos['cant_' . $id],
                            'valorUnitario'=>  $datos['precio_' . $id],
                            'codigo'=>  $datos['clase_codigo_' . $id],
                            'catalogo_clase'=>  $datos['catalogo_clase_' . $id],
                            'item'=>  $datos['valor_catalogo_' . $id],
                            'descripcion'=>  $datos['descripcion_control_' . $id],
                            'valorTotal'=>  $datos['valor_total_' . $id],
                            'caudalDisenio'=>  $datos['caudal_disenio_' . $id],
                            'presionDisenio'=>  $datos['presion_disenio_' . $id],
                            'diametroConexion'=>  $datos['diametro_conexion_' . $id],
                            'potencia'=>  $datos['potencia_' . $id],
                            'dimensiones'=>  $datos['dimensiones_' . $id],
                            'capacidadRata'=>  $datos['capacidad_rata_' . $id],
                            'instalacionTipo'=>  $datos['instalacion_tipo_' . $id],
                            'frecuenciaRegeneracion'=>  $datos['frecuencia_' . $id],
                            'membranTipo'=>  $datos['membran_tipo_' . $id],
                            'inyeccionQuimica'=>  $datos['inyeccion_quimica_' . $id],
                            'procesoTipo'=>  $datos['procesoTipo_' . $id],
                            'proveedor'=>  $datos['proveedor_' . $id],
                            'tipoProveedor'=>  $datos['tipoProveedor_' . $id],
                            'comisionAreaTecnica'=>  $datos['comisionAreaTecnica_' . $id],
                            'comisionVentas'=>  $datos['comisionVentas_' . $id],
                            'utilidad'=>  $datos['utilidad_' . $id],
                            'comisionTarjeta'=>  $datos['comisionTarjetas_' . $id],
                            'cotizacion_id'=>$cotizacion,
                            'texto'=> $datos['texto_' . $id],
                            'retrolavado'=> $datos['retrolavado_' . $id],
                            'rinse'=> $datos['rinse_' . $id],
                            'brine'=> $datos['brine_' . $id],
                            'tds'=> $datos['tds_' . $id],
                        );
                        self::AddUpdateCotizacion($data);
			//$productos[$key] = $data;
		}
              //  if(count($ids)>0)
                    self::delete($ids,$actual);
		return $productos;


	}



	function AddUpdateCotizacion($data=array()){

                if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           item='".$data['item']."',
                           cantidad='".$data['cantidad']."',
                           codigo='".$data['codigo']."',
                           descripcion='".$data['descripcion']."',
                           valorUnitario=".$data['valorUnitario'].",
                           texto='".$data['texto']."',
                           valorTotal='".$data['valorTotal']."',
                           caudalDisenio='".$data['caudalDisenio']."',
                           presionDisenio='".$data['presionDisenio']."',
                           diametroConexion='".$data['diametroConexion']."',
                           potencia='".$data['potencia']."',
                           dimensiones='".$data['dimensiones']."',
                           capacidadRata='".$data['capacidadRata']."',
                           instalacionTipo='".$data['instalacionTipo']."',
                           frecuenciaRegeneracion='".$data['frecuenciaRegeneracion']."',
                           membranTipo='".$data['membranTipo']."',
                           inyeccionQuimica='".$data['inyeccionQuimica']."',
                           procesoTipo='".$data['procesoTipo']."',
                           proveedor='".$data['proveedor']."',
                           tipoProveedor='".$data['tipoProveedor']."',
                           comisionAreaTecnica='".$data['comisionAreaTecnica']."',
                           comisionVentas='".$data['comisionVentas']."',
                           utilidad='".$data['utilidad']."',
                           retrolavado='".$data['retrolavado']."',
                           rinse='".$data['rinse']."',
                           brine='".$data['brine']."',
                           tds='".$data['tds']."',
                           comisionTarjeta='".$data['comisionTarjeta']."',
                           date_modified='".gmdate($GLOBALS['timedate']->get_db_date_time_format())."'
                           where cotizacion_id='".$data['cotizacion_id']."' and id='".$data['id']."'";
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
                           cantidad,
                           codigo,
                           descripcion,
                           valorUnitario,
                           valorTotal,
                           caudalDisenio,
                           presionDisenio,
                           diametroConexion,
                           potencia,
                           dimensiones,
                           capacidadRata,
                           instalacionTipo,
                           frecuenciaRegeneracion,
                           membranTipo,
                           inyeccionQuimica,
                           procesoTipo,
                           proveedor,
                           tipoProveedor,
                           comisionAreaTecnica,
                           comisionVentas,
                           utilidad,
                           comisionTarjeta,
                           cotizacion_id,
                           item_id,
                           texto,
                           retrolavado,
                           rinse,
                           brine,
                           tds
                         )
                          values(
                          null,
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '".gmdate($GLOBALS['timedate']->get_db_date_time_format())."',
                          '0',
                          '".$data['item']."',
                          '".$data['cantidad']."',
                          '".$data['codigo']."',
                          '".$data['descripcion']."',
                          '".$data['valorUnitario']."',
                          '".$data['valorTotal']."',
                          '".$data['caudalDisenio']."',
                          '".$data['presionDisenio']."',
                          '".$data['diametroConexion']."',
                          '".$data['potencia']."',
                          '".$data['dimensiones']."',
                          '".$data['capacidadRata']."',
                          '".$data['instalacionTipo']."',
                          '".$data['frecuenciaRegeneracion']."',
                          '".$data['membranTipo']."',
                         '".$data['inyeccionQuimica']."',
                          '".$data['procesoTipo']."',
                          '".$data['proveedor']."',
                          '".$data['tipoProveedor']."',
                          '".$data['comisionAreaTecnica']."',
                          '".$data['comisionVentas']."',
                          '".$data['utilidad']."',
                          '".$data['comisionTarjeta']."',
                          '".$data['cotizacion_id']."',
                           '".$data['prod']."',
                           '".$data['texto']."',
                           '".$data['retrolavado']."',
                           '".$data['rinse']."',
                           '".$data['brine']."',
                           '".$data['tds']."'
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
		$q = "SELECT * FROM ".$this->table_name." where cotizacion_id = '{$id}'
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
		           		  'item' =>$ambientes['item'],
			        	  'cantidad' =>$ambientes['cantidad'],
					  'codigo'=>$ambientes['codigo'],
				          'descripcion'=>$ambientes['descripcion'],
					  'valorUnitario'=>$ambientes['valorUnitario'],
  					  'valorTotal'=>$ambientes['valorTotal'],
                                          'caudalDisenio'=>$ambientes['caudalDisenio'],
                                          'presionDisenio'=>$ambientes['presionDisenio'],
                                          'diametroConexion'=>$ambientes['diametroConexion'],
                                          'potencia'=>$ambientes['potencia'],
                                          'dimensiones'=>$ambientes['dimensiones'],
                                          'capacidadRata'=>$ambientes['capacidadRata'],
                                          'instalacionTipo'=>$ambientes['instalacionTipo'],
                                          'frecuenciaRegeneracion'=>$ambientes['frecuenciaRegeneracion'],
                                          'membranTipo'=>$ambientes['membranTipo'],
                                          'inyeccionQuimica'=>$ambientes['inyeccionQuimica'],
                                          'procesoTipo'=>$ambientes['procesoTipo'],
                                          'proveedor'=>$ambientes['proveedor'],
                                          'tipoProveedor'=>$ambientes['tipoProveedor'],
                                          'comisionAreaTecnica'=>$ambientes['comisionAreaTecnica'],
                                          'comisionVentas'=>$ambientes['comisionVentas'],
                                          'utilidad'=>$ambientes['utilidad'],
                                          'comisionTarjeta'=>$ambientes['comisionTarjeta'],


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
