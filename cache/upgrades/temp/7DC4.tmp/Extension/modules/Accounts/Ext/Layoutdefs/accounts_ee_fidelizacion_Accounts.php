<?php
 // created: 2012-03-12 16:26:24
$layout_defs["Accounts"]["subpanel_setup"]['accounts_ee_fidelizacion'] = array (
  'order' => 100,
  'module' => 'ee_Fidelizacion',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_EE_FIDELIZACION_FROM_EE_FIDELIZACION_TITLE',
  'get_subpanel_data' => 'accounts_ee_fidelizacion',
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
