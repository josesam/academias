<?php
$module_name = 'ee_EjecucionPrograma';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ESTADO' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
  ),
  'FECHAINICIO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAINICIO',
    'width' => '10%',
    'default' => true,
  ),
  'FECHAFIN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHAFIN',
    'width' => '10%',
    'default' => true,
  ),
  'DETALLEPROGRAMA' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DETALLEPROGRAMA',
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
