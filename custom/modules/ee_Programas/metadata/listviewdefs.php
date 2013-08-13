<?php
$module_name = 'ee_Programas';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CODIGO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODIGO',
    'width' => '10%',
    'default' => true,
  ),
  'COORDINADOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COORDINADOR',
    'width' => '10%',
    'default' => true,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'default' => true,
  ),
  'PRECIO_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_PRECIO',
    'width' => '5%',
  ),
  'TIPOPROGRAMA' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOPROGRAMA',
    'width' => '5%',
  ),
  'FECHAINICIO_PROGRAMA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAINICIOPROGRAMA',
    'width' => '5%',
    'default' => true,
  ),
  'FECHAFINAL_PROGRAMA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAFINALPROGRAMA',
    'width' => '5%',
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
    'default' => true,
  ),
);
?>
