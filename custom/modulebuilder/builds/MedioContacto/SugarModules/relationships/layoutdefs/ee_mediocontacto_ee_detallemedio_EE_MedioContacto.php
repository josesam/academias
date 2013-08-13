<?php
 // created: 2012-03-22 05:11:41
$layout_defs["EE_MedioContacto"]["subpanel_setup"]['ee_mediocontacto_ee_detallemedio'] = array (
  'order' => 100,
  'module' => 'EE_DetalleMedio',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_MEDIOCONTACTO_EE_DETALLEMEDIO_FROM_EE_DETALLEMEDIO_TITLE',
  'get_subpanel_data' => 'ee_mediocontacto_ee_detallemedio',
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
