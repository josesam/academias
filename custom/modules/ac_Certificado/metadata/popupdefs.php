<?php
$popupMeta = array (
    'moduleMain' => 'ac_Certificado',
    'varName' => 'ac_Certificado',
    'orderBy' => 'ac_certificado.name',
    'whereClauses' => array (
  'name' => 'ac_certificado.name',
  'fecha_llegada' => 'ac_certificado.fecha_llegada',
  'ubicacion_certificado' => 'ac_certificado.ubicacion_certificado',
  'fecha_retiro' => 'ac_certificado.fecha_retiro',
  'fecha_examen' => 'ac_certificado.fecha_examen',
  'aprobo_examen' => 'ac_certificado.aprobo_examen',
  'rindio_examen' => 'ac_certificado.rindio_examen',
  'contacts_ac_certificado_name' => 'ac_certificado.contacts_ac_certificado_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'fecha_llegada',
  5 => 'ubicacion_certificado',
  6 => 'fecha_retiro',
  7 => 'fecha_examen',
  8 => 'aprobo_examen',
  9 => 'rindio_examen',
  10 => 'contacts_ac_certificado_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'contacts_ac_certificado_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AC_CERTIFICADOCONTACTS_IDA',
    'width' => '10%',
    'name' => 'contacts_ac_certificado_name',
  ),
  'fecha_llegada' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_LLEGADA',
    'width' => '10%',
    'name' => 'fecha_llegada',
  ),
  'ubicacion_certificado' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_UBICACION_CERTIFICADO',
    'sortable' => false,
    'width' => '10%',
    'name' => 'ubicacion_certificado',
  ),
  'fecha_retiro' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RETIRO',
    'width' => '10%',
    'name' => 'fecha_retiro',
  ),
  'fecha_examen' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXAMEN',
    'width' => '10%',
    'name' => 'fecha_examen',
  ),
  'aprobo_examen' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_APROBO_EXAMEN',
    'width' => '10%',
    'name' => 'aprobo_examen',
  ),
  'rindio_examen' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RINDIO_EXAMEN',
    'width' => '10%',
    'name' => 'rindio_examen',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'CONTACTS_AC_CERTIFICADO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_AC_CERTIFICADOCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'APROBO_EXAMEN' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APROBO_EXAMEN',
    'width' => '10%',
    'name' => 'aprobo_examen',
  ),
  'FECHA_RETIRO' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_RETIRO',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha_retiro',
  ),
  'FECHA_LLEGADA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_LLEGADA',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha_llegada',
  ),
  'FECHA_EXAMEN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_EXAMEN',
    'width' => '10%',
    'default' => true,
    'name' => 'fecha_examen',
  ),
  'UBICACION_CERTIFICADO' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_UBICACION_CERTIFICADO',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'ubicacion_certificado',
  ),
  'RINDIO_EXAMEN' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RINDIO_EXAMEN',
    'width' => '10%',
    'name' => 'rindio_examen',
  ),
),
);
