<?php 
 //WARNING: The contents of this file are auto-generated


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


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['contacts']['override_subpanel_name'] = 'Opportunity_subpanel_contacts';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['ee_ejecucionprograma_opportunities']['override_subpanel_name'] = 'Opportunity_subpanel_ee_ejecucionprograma_opportunities';


//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['opportunities_ee_cobranzas']['override_subpanel_name'] = 'Opportunity_subpanel_opportunities_ee_cobranzas';

?>