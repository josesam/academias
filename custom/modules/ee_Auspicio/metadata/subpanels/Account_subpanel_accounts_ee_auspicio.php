<?php
// created: 2012-05-24 09:25:29
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'monto' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_MONTO',
    'width' => '10%',
  ),
  'fechaauspicio' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_FECHAAUSPICIO',
    'width' => '10%',
    'default' => true,
  ),
  'motivo' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_MOTIVO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_ESTADO',
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
    'module' => 'ee_Auspicio',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'ee_Auspicio',
    'width' => '5%',
    'default' => true,
  ),
);