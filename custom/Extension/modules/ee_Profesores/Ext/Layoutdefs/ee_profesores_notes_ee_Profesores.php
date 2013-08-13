<?php
 // created: 2012-03-12 10:14:36
$layout_defs["ee_Profesores"]["subpanel_setup"]['ee_profesores_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_PROFESORES_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ee_profesores_notes',
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
