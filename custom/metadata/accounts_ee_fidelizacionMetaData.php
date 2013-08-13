<?php
// created: 2012-05-21 12:40:50
$dictionary["accounts_ee_fidelizacion"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_ee_fidelizacion' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_Fidelizacion',
      'rhs_table' => 'ee_fidelizacion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_ee_fidelizacion_c',
      'join_key_lhs' => 'accounts_ee_fidelizacionaccounts_ida',
      'join_key_rhs' => 'accounts_ee_fidelizacionee_fidelizacion_idb',
    ),
  ),
  'table' => 'accounts_ee_fidelizacion_c',
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
      'name' => 'accounts_ee_fidelizacionaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_ee_fidelizacionee_fidelizacion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_ee_fidelizacionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_ee_fidelizacion_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_ee_fidelizacionaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_ee_fidelizacion_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_ee_fidelizacionee_fidelizacion_idb',
      ),
    ),
  ),
);