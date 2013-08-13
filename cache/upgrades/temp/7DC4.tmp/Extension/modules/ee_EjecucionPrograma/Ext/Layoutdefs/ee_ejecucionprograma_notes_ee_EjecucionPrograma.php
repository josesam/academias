<?php
 // created: 2012-03-12 16:43:00
$layout_defs["ee_EjecucionPrograma"]["subpanel_setup"]['ee_ejecucionprograma_notes'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EE_EJECUCIONPROGRAMA_NOTES_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ee_ejecucionprograma_notes',
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
