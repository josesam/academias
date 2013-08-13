<?php
// created: 2013-08-12 19:09:19
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'rindio_examen' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_RINDIO_EXAMEN',
    'width' => '10%',
  ),
  'aprobo_examen' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_APROBO_EXAMEN',
    'width' => '10%',
  ),
  'fecha_examen' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHA_EXAMEN',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_llegada' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHA_LLEGADA',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_retiro' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHA_RETIRO',
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
    'widget_class' => 'SubPanelEditButton',
    'module' => 'ac_Certificado',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ac_Certificado',
    'width' => '5%',
    'default' => true,
  ),
);