<?php
 // created: 2012-03-12 10:14:36
$layout_defs["ee_Profesores"]["subpanel_setup"]['ee_profesores_ee_accionesmejora'] = array (
  'order' => 100,
  'module' => 'ee_AccionesMejora',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PROFESORES_EE_ACCIONESMEJORA_FROM_EE_ACCIONESMEJORA_TITLE',
  'get_subpanel_data' => 'ee_profesores_ee_accionesmejora',
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
