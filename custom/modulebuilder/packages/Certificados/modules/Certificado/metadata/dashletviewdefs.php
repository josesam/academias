<?php
$dashletData['ac_CertificadoDashlet']['searchFields'] = array (
  'fecha_examen' => 
  array (
    'default' => '',
  ),
  'fecha_llegada' => 
  array (
    'default' => '',
  ),
  'rindio_examen' => 
  array (
    'default' => '',
  ),
  'aprobo_examen' => 
  array (
    'default' => '',
  ),
  'fecha_retiro' => 
  array (
    'default' => '',
  ),
  'ubicacion_certificado' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ac_CertificadoDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'rindio_examen' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RINDIO_EXAMEN',
    'width' => '10%',
  ),
  'aprobo_examen' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APROBO_EXAMEN',
    'width' => '10%',
  ),
  'fecha_retiro' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RETIRO',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_examen' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXAMEN',
    'width' => '10%',
    'default' => true,
  ),
  'fecha_llegada' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_LLEGADA',
    'width' => '10%',
    'default' => true,
  ),
  'ubicacion_certificado' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_UBICACION_CERTIFICADO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
);
