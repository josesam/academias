<?php
$module_name = 'ee_AccionesMejora';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FECHAEVALUACION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAEVALUACION',
    'width' => '10%',
    'default' => true,
  ),
  'CONOCIMIENTOS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONOCIMIENTOS',
    'width' => '10%',
  ),
  'ACTITUDES' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACTITUDES',
    'width' => '10%',
  ),
  'DESTREZAS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DESTREZAS',
    'width' => '10%',
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
