<?php
 // created: 2012-07-03 05:35:53
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_encuestainstructor'] = array (
  'order' => 100,
  'module' => 'ee_EncuestaInstructor',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAINSTRUCTOR_FROM_EE_ENCUESTAINSTRUCTOR_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_encuestainstructor',
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
