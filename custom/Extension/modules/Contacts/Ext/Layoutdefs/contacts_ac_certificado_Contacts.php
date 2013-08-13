<?php
 // created: 2013-08-12 19:05:59
$layout_defs["Contacts"]["subpanel_setup"]['contacts_ac_certificado'] = array (
  'order' => 100,
  'module' => 'ac_Certificado',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_AC_CERTIFICADO_TITLE',
  'get_subpanel_data' => 'contacts_ac_certificado',
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
