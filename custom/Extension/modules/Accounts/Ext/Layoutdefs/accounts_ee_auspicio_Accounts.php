<?php
 // created: 2012-05-21 15:05:03
$layout_defs["Accounts"]["subpanel_setup"]['accounts_ee_auspicio'] = array (
  'order' => 100,
  'module' => 'ee_Auspicio',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_EE_AUSPICIO_TITLE',
  'get_subpanel_data' => 'accounts_ee_auspicio',
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
