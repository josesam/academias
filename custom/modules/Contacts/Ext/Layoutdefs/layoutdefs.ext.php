<?php 
 //WARNING: The contents of this file are auto-generated


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


/* 
 * Hide subpannel on the Account's detail view
 * @author Jose Sambrano
 */
unset($layout_defs['Contacts']['subpanel_setup']['accounts']);
unset($layout_defs['Contacts']['subpanel_setup']['leads']);
unset($layout_defs['Contacts']['subpanel_setup']['quotes']);
unset($layout_defs['Contacts']['subpanel_setup']['contacts']);



//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['contacts_ac_certificado']['override_subpanel_name'] = 'Contact_subpanel_contacts_ac_certificado';


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['ee_ejecucionprograma_contacts']['override_subpanel_name'] = 'Contact_subpanel_ee_ejecucionprograma_contacts';

?>