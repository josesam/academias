<?php
// created: 2012-03-22 05:16:48
$dictionary["ee_pais_ee_provincia"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ee_pais_ee_provincia' => 
    array (
      'lhs_module' => 'ee_Pais',
      'lhs_table' => 'ee_pais',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_Provincia',
      'rhs_table' => 'ee_provincia',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_pais_ee_provincia_c',
      'join_key_lhs' => 'ee_pais_ee_provinciaee_pais_ida',
      'join_key_rhs' => 'ee_pais_ee_provinciaee_provincia_idb',
    ),
  ),
  'table' => 'ee_pais_ee_provincia_c',
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
      'name' => 'ee_pais_ee_provinciaee_pais_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_pais_ee_provinciaee_provincia_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_pais_ee_provinciaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_pais_ee_provincia_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ee_pais_ee_provinciaee_pais_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ee_pais_ee_provincia_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_pais_ee_provinciaee_provincia_idb',
      ),
    ),
  ),
);