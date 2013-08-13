<?php
// created: 2012-05-10 09:17:23
$dictionary["ee_ejecucionprograma_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ee_ejecucionprograma_contacts' => 
    array (
      'lhs_module' => 'ee_EjecucionPrograma',
      'lhs_table' => 'ee_ejecucionprograma',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ee_ejecucionprograma_contacts_c',
      'join_key_lhs' => 'ee_ejecucionprograma_contactsee_ejecucionprograma_ida',
      'join_key_rhs' => 'ee_ejecucionprograma_contactscontacts_idb',
    ),
  ),
  'table' => 'ee_ejecucionprograma_contacts_c',
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
      'name' => 'ee_ejecucionprograma_contactsee_ejecucionprograma_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ee_ejecucionprograma_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ee_ejecucionprograma_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ee_ejecucionprograma_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ee_ejecucionprograma_contactsee_ejecucionprograma_ida',
        1 => 'ee_ejecucionprograma_contactscontacts_idb',
      ),
    ),
  ),
);