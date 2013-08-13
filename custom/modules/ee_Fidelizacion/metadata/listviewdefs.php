<?php
$module_name = 'ee_Fidelizacion';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FECHAOCURRENCIA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAOCURRENCIA',
    'width' => '10%',
    'default' => true,
  ),
  'MOTIVO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MOTIVO',
    'width' => '10%',
  ),
  'QUE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_QUE',
    'width' => '10%',
    'default' => true,
  ),
  'AQUIEN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AQUIEN',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_EE_FIDELIZACION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_EE_FIDELIZACION_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_EE_FIDELIZACIONACCOUNTS_IDA',
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
