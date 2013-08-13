<?php
$module_name = 'ee_Cursos';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FECHACURSO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHACURSO',
    'width' => '10%',
    'default' => true,
  ),
  'ASISTIO' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ASISTIO',
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
