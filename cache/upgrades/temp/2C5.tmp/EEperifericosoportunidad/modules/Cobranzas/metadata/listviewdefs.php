<?php
$module_name = 'ee_Cobranzas';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MONTOPAGO' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_MONTOPAGO',
    'width' => '10%',
  ),
  'FECHAPREVISTAPAGO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAPREVISTAPAGO',
    'width' => '10%',
    'default' => true,
  ),
  'FECHAREALPAGO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAREALPAGO',
    'width' => '10%',
    'default' => true,
  ),
  'FORMAPAGO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_FORMAPAGO',
    'width' => '10%',
  ),
  'PERSONAPAGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PERSONAPAGO',
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
