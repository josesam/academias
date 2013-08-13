<?php
// created: 2013-01-06 17:26:40
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'fechaevaluacion' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHAEVALUACION',
    'width' => '10%',
    'default' => true,
  ),
  'destrezas' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_DESTREZAS',
    'width' => '10%',
  ),
  'conocimientos' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CONOCIMIENTOS',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButtonCustom',
    'module' => 'ee_AccionesMejora',
    'width' => '4%',
    'default' => true,
  ),
);