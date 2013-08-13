<?php
 // created: 2012-03-21 16:41:57
$layout_defs["ee_Provincia"]["subpanel_setup"]['ee_provincia_ee_ciudad'] = array (
  'order' => 100,
  'module' => 'ee_Ciudad',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PROVINCIA_EE_CIUDAD_FROM_EE_CIUDAD_TITLE',
  'get_subpanel_data' => 'ee_provincia_ee_ciudad',
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
