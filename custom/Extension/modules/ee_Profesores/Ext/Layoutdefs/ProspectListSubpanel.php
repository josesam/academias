<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$layout_defs["ee_Profesores"]["subpanel_setup"]["prospect_lists"] = array (
		'order' => 10,
			'sort_by' => 'name',
			'sort_order' => 'asc',
			'module' => 'ProspectLists',
			'subpanel_name' => 'default',
			'get_subpanel_data' => 'prospect_lists',
			'title_key' => 'LBL_PROSPECT_LISTS_SUBPANEL_TITLE',
			'top_buttons' => array(
			    array('widget_class' => 'SubPanelTopButtonQuickCreate'),
				array('widget_class'=>'SubPanelTopSelectButton','mode'=>'MultiSelect'),
			),
);
?>
