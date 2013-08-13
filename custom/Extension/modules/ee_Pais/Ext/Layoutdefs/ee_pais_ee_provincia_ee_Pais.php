<?php
 // created: 2012-03-21 16:42:26
$layout_defs["ee_Pais"]["subpanel_setup"]['ee_pais_ee_provincia'] = array (
  'order' => 100,
  'module' => 'ee_Provincia',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PAIS_EE_PROVINCIA_FROM_EE_PROVINCIA_TITLE',
  'get_subpanel_data' => 'ee_pais_ee_provincia',
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
