<?php
 // created: 2012-03-12 16:43:00
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_logistica'] = array (
  'order' => 100,
  'module' => 'ee_Logistica',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_LOGISTICA_FROM_EE_LOGISTICA_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_logistica',
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
