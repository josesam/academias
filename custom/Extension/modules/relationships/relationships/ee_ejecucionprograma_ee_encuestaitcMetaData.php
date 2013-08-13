<?php
// created: 2012-07-03 06:30:46
$dictionary["ee_ejecucionprograma_ee_encuestaitc"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ee_ejecucionprograma_ee_encuestaitc' => 
    array (
      'lhs_module' => 'ee_EjecucionPrograma',
      'lhs_table' => 'ee_ejecucionprograma',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_EncuestaITC',
      'rhs_table' => 'ee_encuestaitc',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_ejecucionprograma_ee_encuestaitc_c',
      'join_key_lhs' => 'ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida',
      'join_key_rhs' => 'ee_ejecucionprograma_ee_encuestaitcee_encuestaitc_idb',
    ),
  ),
  'table' => 'ee_ejecucionprograma_ee_encuestaitc_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestaitcee_encuestaitc_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestaitcspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestaitc_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ee_ejecucionprograma_ee_encuestaitc_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_ejecucionprograma_ee_encuestaitcee_encuestaitc_idb',
      ),
    ),
  ),
);