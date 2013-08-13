<?php
// created: 2012-05-10 09:55:25
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'fechainicio' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHAINICIO',
    'width' => '10%',
    'default' => true,
  ),
  'fechafin' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHAFIN',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButtonCustom',
    'module' => 'ee_EjecucionPrograma',
    'width' => '4%',
    'default' => true,
  ),
  
);