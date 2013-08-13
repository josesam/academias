<?php
// created: 2013-01-06 18:00:37
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
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
  'estado' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButtonCustom',
    'module' => 'ee_EjecucionPrograma',
    'width' => '4%',
    'default' => true,
  ),
);