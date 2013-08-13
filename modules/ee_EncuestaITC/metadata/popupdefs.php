<?php
$popupMeta = array (
    'moduleMain' => 'ee_EncuestaITC',
    'varName' => 'ee_EncuestaITC',
    'orderBy' => 'ee_encuestaitc.name',
    'whereClauses' => array (
  'name' => 'ee_encuestaitc.name',
  'participante' => 'ee_encuestaitc.participante',
  'modulo' => 'ee_encuestaitc.modulo',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'participante',
  5 => 'modulo',
),
    'searchdefs' => array (
  'participante' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARTICIPANTE',
    'width' => '10%',
    'name' => 'participante',
  ),
  'modulo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MODULO',
    'width' => '10%',
    'name' => 'modulo',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
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
  ),
  'MODULO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MODULO',
    'width' => '10%',
    'default' => true,
  ),
  'PARTICIPANTE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARTICIPANTE',
    'width' => '10%',
    'default' => true,
  ),
),
);
