<?php
// created: 2012-03-22 05:14:58
$dictionary["ee_provincia_ee_ciudad"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ee_provincia_ee_ciudad' => 
    array (
      'lhs_module' => 'ee_Provincia',
      'lhs_table' => 'ee_provincia',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_Ciudad',
      'rhs_table' => 'ee_ciudad',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_provincia_ee_ciudad_c',
      'join_key_lhs' => 'ee_provincia_ee_ciudadee_provincia_ida',
      'join_key_rhs' => 'ee_provincia_ee_ciudadee_ciudad_idb',
    ),
  ),
  'table' => 'ee_provincia_ee_ciudad_c',
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
      'name' => 'ee_provincia_ee_ciudadee_provincia_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_provincia_ee_ciudadee_ciudad_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_provincia_ee_ciudadspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_provincia_ee_ciudad_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ee_provincia_ee_ciudadee_provincia_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ee_provincia_ee_ciudad_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_provincia_ee_ciudadee_ciudad_idb',
      ),
    ),
  ),
);