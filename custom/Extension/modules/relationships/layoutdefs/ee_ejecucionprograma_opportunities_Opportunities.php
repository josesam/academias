<?php
 // created: 2012-05-10 09:45:55
$layout_defs["Opportunities"]["subpanel_setup"]['ee_ejecucionprograma_opportunities'] = array (
  'order' => 100,
  'module' => 'ee_EjecucionPrograma',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_OPPORTUNITIES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_opportunities',
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
