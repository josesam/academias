<?php
$module_name = 'ee_Auspicio';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MONTO' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_MONTO',
    'width' => '10%',
  ),
  'FECHAAUSPICIO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAAUSPICIO',
    'width' => '10%',
    'default' => true,
  ),
  'MOTIVO' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_MOTIVO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
