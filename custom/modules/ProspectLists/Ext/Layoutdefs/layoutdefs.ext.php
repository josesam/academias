<?php 
 //WARNING: The contents of this file are auto-generated


/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$layout_defs["ProspectLists"]["subpanel_setup"]["ee_profesores"] = array (
	'order' => 10,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'ee_Profesores',
	'subpanel_name' => 'ForProspectLists',
	'get_subpanel_data' => 'ee_profesores',//lowercase!!
	'title_key' => 'LBL_EE_PROFESORES_SUBPANEL_TITLE',
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopButtonQuickCreate'),
		array('widget_class'=>'SubPanelTopSelectButton','mode'=>'MultiSelect'),
	),
);


?>