<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Data{

    function __construct(){
        
    }
    // Returns name of 'link' field between two given modules
function get_module_link_field($module_1, $module_2) {
	global $beanList, $beanFiles;

	// check to make sure both modules exist
	if (empty($beanList[$module_1]) || empty($beanList[$module_2])) {
		return FALSE;
	}

	$class_1 = $beanList[$module_1];
	require_once($beanFiles[$class_1]);

	$obj_1 = new $class_1();

	// loop through link fields of $module_1, checking for a link to $module_2
	foreach ($obj_1->get_linked_fields() as $linked_field) {
		$obj_1->load_relationship($linked_field['name']);
		$field = $linked_field['name'];
		if (empty($obj_1->$field)) {
			continue;
		}
		if ($obj_1->$field->getRelatedModuleName() == $module_2) {
			return $field;
		}
	}

	return FALSE;
}

    function get_linked_records($get_module, $from_module, $get_id) {
	global $beanList, $beanFiles;

	// instantiate and retrieve $from_module
	$from_class = $beanList[$from_module];
	require_once($beanFiles[$from_class]);
	$from_mod = new $from_class();
	$from_mod->retrieve($get_id);

	$field = $this->get_module_link_field($from_module, $get_module);
	if ($field === FALSE) {
		return FALSE;
	}

	$from_mod->load_relationship($field);
	$id_arr = $from_mod->$field->get();

	return $id_arr;
}

    function get_relationships($module_name, $module_id, $related_module, $related_module_query, $deleted){

	$ids = array();
	global  $beanList, $beanFiles;


	$class_name = $beanList[$module_name];
	require_once($beanFiles[$class_name]);
	$mod = new $class_name();
	$mod->retrieve($module_id);
	$id_list = $this->get_linked_records($related_module, $module_name, $module_id);
	$list = array();
	$id_list_quoted = array_map("add_squotes", $id_list);

        $in = implode(", ", $id_list_quoted);
	$related_class_name = $beanList[$related_module];
	require_once($beanFiles[$related_class_name]);
	$related_mod = new $related_class_name();

	$sql = "SELECT {$related_mod->table_name}.id FROM {$related_mod->table_name} ";


	$sql .= " WHERE {$related_mod->table_name}.id IN ({$in}) ";

	if (!empty($related_module_query)) {
		$sql .= " AND ( {$related_module_query} )";
	}

	$result = $related_mod->db->query($sql);
	while ($row = $related_mod->db->fetchByAssoc($result)) {
		$list[] = $row['id'];
	}

	$return_list = array();

	foreach($list as $id) {
		$related_class_name = $beanList[$related_module];
		$related_mod = new $related_class_name();
		$related_mod->retrieve($id);

		$return_list[] = array(
			'id' => $id,
                        'data'=>$related_mod,
                        'related_module'=>$related_module,
                        'data_main_module'=>$mod,
                        'main_module'=>$module_name,
			'date_modified' => $related_mod->date_modified,
			'deleted' => $related_mod->deleted
		);
	}

	return array('ids' => $return_list);
}
 public static function number($valor, $decimals = 2) {
		if ($valor == '' || $valor == null)
			return $valor;
		return number_format($valor, $decimals, '.');
	}

}
?>
