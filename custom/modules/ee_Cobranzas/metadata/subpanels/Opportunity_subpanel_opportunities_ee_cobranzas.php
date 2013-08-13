<?php
// created: 2012-07-03 01:12:58
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'montopago' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_MONTOPAGO',
    'width' => '10%',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
  'fechaprevistapago' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHAPREVISTAPAGO',
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
    'module' => 'ee_Cobranzas',
    'width' => '4%',
    'default' => true,
  ),
);