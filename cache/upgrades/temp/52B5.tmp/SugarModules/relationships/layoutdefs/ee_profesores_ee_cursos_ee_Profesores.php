<?php
 // created: 2012-03-22 05:03:21
$layout_defs["ee_Profesores"]["subpanel_setup"]['ee_profesores_ee_cursos'] = array (
  'order' => 100,
  'module' => 'ee_Cursos',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PROFESORES_EE_CURSOS_FROM_EE_CURSOS_TITLE',
  'get_subpanel_data' => 'ee_profesores_ee_cursos',
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
