<?php
$dictionary["ee_Profesores"]["relationships"]['prospect_list_ee_profesores'] = array (
	'lhs_module' => 'ProspectLists',
	'lhs_table' => 'prospect_lists',
	'lhs_key' => 'id',
	'rhs_module' =>'ee_Profesores',
	'rhs_table' => 'ee_profesores',
	'rhs_key' => 'id',
	'relationship_type' => 'many-to-many',
	'join_table' => 'prospect_lists_prospects',
	'join_key_lhs' => 'prospect_list_id',
	'join_key_rhs' => 'related_id',
	'relationship_role_column' => 'related_type',
	'relationship_role_column_value' => 'ee_Profesores'
);


$dictionary["ee_Profesores"]["fields"]["prospect_lists"] = array (
	'name' => 'prospect_lists',
	'type' => 'link',
	'relationship' => 'prospect_list_ee_profesores',
	'source' =>'non-db'
);
?>
