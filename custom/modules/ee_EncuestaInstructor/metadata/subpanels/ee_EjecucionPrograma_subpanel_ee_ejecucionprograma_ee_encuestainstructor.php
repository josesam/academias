<?php
// created: 2013-01-06 17:27:05
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'instructor' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_INSTRUCTOR',
    'width' => '10%',
    'default' => true,
  ),
  'modulo' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MODULO',
    'width' => '10%',
    'default' => true,
  ),
   'grupo' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_GRUPO',
    'width' => '10%',
    'default' => true,
  ),  
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButtonCustom',
    'module' => 'ee_EncuestaInstructor',
    'width' => '4%',
    'default' => true,
  ),
);