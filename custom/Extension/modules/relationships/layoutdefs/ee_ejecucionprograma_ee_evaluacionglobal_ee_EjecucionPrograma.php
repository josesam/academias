<?php
 // created: 2012-05-21 08:03:46
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_ee_evaluacionglobal'] = array (
  'order' => 100,
  'module' => 'ee_EvaluacionGlobal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONGLOBAL_FROM_EE_EVALUACIONGLOBAL_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_ee_evaluacionglobal',
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
