<?php
 // created: 2012-05-10 09:17:23
$layout_defs["Contacts"]["subpanel_setup"]['ee_ejecucionprograma_contacts'] = array (
  'order' => 100,
  'module' => 'ee_EjecucionPrograma',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_CONTACTS_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_contacts',
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
