<?php
 // created: 2012-05-19 12:05:49
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_ee_cobranzas'] = array (
  'order' => 100,
  'module' => 'ee_Cobranzas',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_EE_COBRANZAS_TITLE',
  'get_subpanel_data' => 'opportunities_ee_cobranzas',
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
