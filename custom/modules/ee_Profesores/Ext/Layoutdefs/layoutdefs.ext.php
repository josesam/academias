<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-03-12 10:14:36
$layout_defs["ee_Profesores"]["subpanel_setup"]['ee_profesores_ee_accionesmejora'] = array (
  'order' => 100,
  'module' => 'ee_AccionesMejora',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PROFESORES_EE_ACCIONESMEJORA_FROM_EE_ACCIONESMEJORA_TITLE',
  'get_subpanel_data' => 'ee_profesores_ee_accionesmejora',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-03-12 10:14:36
$layout_defs["ee_Profesores"]["subpanel_setup"]['ee_profesores_ee_cursos'] = array (
  'order' => 100,
  'module' => 'ee_Cursos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PROFESORES_EE_CURSOS_FROM_EE_CURSOS_TITLE',
  'get_subpanel_data' => 'ee_profesores_ee_cursos',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-03-12 10:14:36
$layout_defs["ee_Profesores"]["subpanel_setup"]['ee_profesores_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PROFESORES_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ee_profesores_notes',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


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