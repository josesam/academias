<?php
 // created: 2012-03-22 05:05:46
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_participantes'] = array (
  'order' => 100,
  'module' => 'ee_Participantes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_PARTICIPANTES_FROM_EE_PARTICIPANTES_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_participantes',
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
