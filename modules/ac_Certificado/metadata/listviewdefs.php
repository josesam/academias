<?php
$module_name = 'ac_Certificado';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'RINDIO_EXAMEN' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RINDIO_EXAMEN',
    'width' => '10%',
  ),
  'APROBO_EXAMEN' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APROBO_EXAMEN',
    'width' => '10%',
  ),
  'FECHA_EXAMEN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXAMEN',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_LLEGADA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_LLEGADA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_RETIRO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RETIRO',
    'width' => '10%',
    'default' => true,
  ),
  'UBICACION_CERTIFICADO' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_UBICACION_CERTIFICADO',
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
