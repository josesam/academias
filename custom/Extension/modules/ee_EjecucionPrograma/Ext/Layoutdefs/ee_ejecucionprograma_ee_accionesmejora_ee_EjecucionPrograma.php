<?php
 // created: 2012-07-03 06:04:25
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_accionesmejora'] = array (
  'order' => 100,
  'module' => 'ee_AccionesMejora',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ACCIONESMEJORA_FROM_EE_ACCIONESMEJORA_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_accionesmejora',
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
