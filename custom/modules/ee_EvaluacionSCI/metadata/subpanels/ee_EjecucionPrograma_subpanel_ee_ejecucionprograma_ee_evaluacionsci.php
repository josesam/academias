<?php
// created: 2013-01-06 17:44:51
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'participante' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PARTICIPANTE',
    'width' => '10%',
    'default' => true,
  ),
  'calique' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_CALIQUE',
    'width' => '10%',
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
    'module' => 'ee_EvaluacionSCI',
    'width' => '4%',
    'default' => true,
  ),
);