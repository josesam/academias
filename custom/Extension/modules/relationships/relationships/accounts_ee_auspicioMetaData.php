<?php
// created: 2012-05-21 15:05:03
$dictionary["accounts_ee_auspicio"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_ee_auspicio' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'ee_Auspicio',
      'rhs_table' => 'ee_auspicio',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_ee_auspicio_c',
      'join_key_lhs' => 'accounts_ee_auspicioaccounts_ida',
      'join_key_rhs' => 'accounts_ee_auspicioee_auspicio_idb',
    ),
  ),
  'table' => 'accounts_ee_auspicio_c',
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
      'name' => 'accounts_ee_auspicioaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_ee_auspicioee_auspicio_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_ee_auspiciospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_ee_auspicio_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_ee_auspicioaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_ee_auspicio_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_ee_auspicioee_auspicio_idb',
      ),
    ),
  ),
);