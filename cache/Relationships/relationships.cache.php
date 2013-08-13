<?php 
 $relationships=array (
  'accounts_bugs' => 
  array (
    'name' => 'accounts_bugs',
    'table' => 'accounts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acc_bug_acc',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acc_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_account_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_bugs' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_bugs',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_bugs',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'bug_id',
  ),
  'accounts_contacts' => 
  array (
    'name' => 'accounts_contacts',
    'table' => 'accounts_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'required' => false,
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_contid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_contacts' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_contacts',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_contacts',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'contact_id',
  ),
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'calls_contacts' => 
  array (
    'name' => 'calls_contacts',
    'table' => 'calls_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_call_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_contacts' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_contacts',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_contacts',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'contact_id',
  ),
  'calls_users' => 
  array (
    'name' => 'calls_users',
    'table' => 'calls_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_call_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_users' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_users',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_users',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'user_id',
  ),
  'calls_leads' => 
  array (
    'name' => 'calls_leads',
    'table' => 'calls_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'call_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'calls_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_call_call',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'call_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_call_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_call_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'call_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'calls_leads' => 
      array (
        'lhs_module' => 'Calls',
        'lhs_table' => 'calls',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'calls_leads',
        'join_key_lhs' => 'call_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'calls_leads',
    'join_key_lhs' => 'call_id',
    'join_key_rhs' => 'lead_id',
  ),
  'cases_bugs' => 
  array (
    'name' => 'cases_bugs',
    'table' => 'cases_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'cases_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_cas_bug_cas',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cas_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_case_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'cases_bugs' => 
      array (
        'lhs_module' => 'Cases',
        'lhs_table' => 'cases',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'cases_bugs',
        'join_key_lhs' => 'case_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'cases_bugs',
    'join_key_lhs' => 'case_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_bugs' => 
  array (
    'name' => 'contacts_bugs',
    'table' => 'contacts_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_bugspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_bug_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contact_bug',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_bugs' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_bugs',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_bugs',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'bug_id',
  ),
  'contacts_cases' => 
  array (
    'name' => 'contacts_cases',
    'table' => 'contacts_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_casespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_case_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_cases',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_cases' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_cases',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_cases',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'case_id',
  ),
  'contacts_users' => 
  array (
    'name' => 'contacts_users',
    'table' => 'contacts_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_users_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_users_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_contacts_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contacts_users' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_users',
        'join_key_lhs' => 'contact_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_users',
    'join_key_lhs' => 'contact_id',
    'join_key_rhs' => 'user_id',
  ),
  'emails_accounts_rel' => 
  array (
    'name' => 'emails_accounts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_bugs_rel' => 
  array (
    'name' => 'emails_bugs_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_cases_rel' => 
  array (
    'name' => 'emails_cases_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_contacts_rel' => 
  array (
    'name' => 'emails_contacts_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_leads_rel' => 
  array (
    'name' => 'emails_leads_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_opportunities_rel' => 
  array (
    'name' => 'emails_opportunities_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_tasks_rel' => 
  array (
    'name' => 'emails_tasks_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Tasks',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_users_rel' => 
  array (
    'name' => 'emails_users_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_project_task_rel' => 
  array (
    'name' => 'emails_project_task_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ProjectTask',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_projects_rel' => 
  array (
    'name' => 'emails_projects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Project',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_prospects_rel' => 
  array (
    'name' => 'emails_prospects_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'emails_quotes' => 
  array (
    'name' => 'emails_quotes',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'email_id',
        'type' => 'varchar',
        'dbType' => 'id',
        'len' => '36',
        'comment' => 'FK to emails table',
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'dbType' => 'id',
        'type' => 'varchar',
        'len' => '36',
        'comment' => 'FK to various beans\'s tables',
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => '100',
        'comment' => 'bean\'s Module',
      ),
      4 => 
      array (
        'name' => 'campaign_data',
        'type' => 'text',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'meetings_contacts' => 
  array (
    'name' => 'meetings_contacts',
    'table' => 'meetings_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_mtg_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_contact',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_contacts' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_contacts',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_contacts',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'contact_id',
  ),
  'meetings_users' => 
  array (
    'name' => 'meetings_users',
    'table' => 'meetings_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_usr_mtg_mtg',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_usr_mtg_usr',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_users',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_users' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_users',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_users',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'user_id',
  ),
  'meetings_leads' => 
  array (
    'name' => 'meetings_leads',
    'table' => 'meetings_leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'meeting_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'lead_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'required',
        'type' => 'varchar',
        'len' => '1',
        'default' => '1',
      ),
      4 => 
      array (
        'name' => 'accept_status',
        'type' => 'varchar',
        'len' => '25',
        'default' => 'none',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'meetings_leadspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_lead_meeting_meeting',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'meeting_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_lead_meeting_lead',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'lead_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_meeting_lead',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'meeting_id',
          1 => 'lead_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'meetings_leads' => 
      array (
        'lhs_module' => 'Meetings',
        'lhs_table' => 'meetings',
        'lhs_key' => 'id',
        'rhs_module' => 'Leads',
        'rhs_table' => 'leads',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'meetings_leads',
        'join_key_lhs' => 'meeting_id',
        'join_key_rhs' => 'lead_id',
      ),
    ),
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'meetings_leads',
    'join_key_lhs' => 'meeting_id',
    'join_key_rhs' => 'lead_id',
  ),
  'opportunities_contacts' => 
  array (
    'name' => 'opportunities_contacts',
    'table' => 'opportunities_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_opp_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_con_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_opportunities_contacts',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'opportunities_contacts' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_contacts',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_contacts',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contact_id',
  ),
  'team_sets_teams' => 
  array (
    'name' => 'team_sets_teams',
    'table' => 'team_sets_teams',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_ud_id',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ud_set_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_set_id',
          1 => 'team_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ud_team_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_ud_team_set_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'team_set_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'team_sets_teams' => 
      array (
        'lhs_module' => 'TeamSets',
        'lhs_table' => 'team_sets',
        'lhs_key' => 'id',
        'rhs_module' => 'Teams',
        'rhs_table' => 'teams',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'team_sets_teams',
        'join_key_lhs' => 'team_set_id',
        'join_key_rhs' => 'team_id',
      ),
    ),
    'lhs_module' => 'TeamSets',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
  ),
  'tracker_user_id' => 
  array (
    'name' => 'tracker_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'TrackerSessions',
    'rhs_table' => 'tracker',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_tracker_queries' => 
  array (
    'name' => 'tracker_tracker_queries',
    'table' => 'tracker_tracker_queries',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'int',
        'len' => '11',
        'isnull' => 'false',
        'auto_increment' => true,
        'reportable' => false,
      ),
      'monitor_id' => 
      array (
        'name' => 'monitor_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      'query_id' => 
      array (
        'name' => 'query_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'tracker_tracker_queriespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_tracker_tq_monitor',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'monitor_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_tracker_tq_query',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'query_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'tracker_tracker_queries' => 
      array (
        'lhs_module' => 'Trackers',
        'lhs_table' => 'tracker',
        'lhs_key' => 'monitor_id',
        'rhs_module' => 'TrackerQueries',
        'rhs_table' => 'tracker_queries',
        'rhs_key' => 'query_id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'tracker_tracker_queries',
        'join_key_lhs' => 'monitor_id',
        'join_key_rhs' => 'query_id',
      ),
    ),
    'lhs_module' => 'Trackers',
    'lhs_table' => 'tracker',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'TrackerQueries',
    'rhs_table' => 'tracker_queries',
    'rhs_key' => 'query_id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'tracker_tracker_queries',
    'join_key_lhs' => 'monitor_id',
    'join_key_rhs' => 'query_id',
  ),
  'prospect_list_campaigns' => 
  array (
    'name' => 'prospect_list_campaigns',
    'table' => 'prospect_list_campaigns',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'campaign_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prospect_list_campaignspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pro_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'prospect_list_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_cam_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'campaign_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_prospect_list_campaigns',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'prospect_list_id',
          1 => 'campaign_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'prospect_list_campaigns' => 
      array (
        'lhs_module' => 'ProspectLists',
        'lhs_table' => 'prospect_lists',
        'lhs_key' => 'id',
        'rhs_module' => 'Campaigns',
        'rhs_table' => 'campaigns',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'prospect_list_campaigns',
        'join_key_lhs' => 'prospect_list_id',
        'join_key_rhs' => 'campaign_id',
      ),
    ),
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_list_campaigns',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'campaign_id',
  ),
  'prospect_list_contacts' => 
  array (
    'name' => 'prospect_list_contacts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_prospects' => 
  array (
    'name' => 'prospect_list_prospects',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_leads' => 
  array (
    'name' => 'prospect_list_leads',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_users' => 
  array (
    'name' => 'prospect_list_users',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'prospect_list_accounts' => 
  array (
    'name' => 'prospect_list_accounts',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'roles_users' => 
  array (
    'name' => 'roles_users',
    'table' => 'roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_ru_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_ru_user_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'roles_users' => 
      array (
        'lhs_module' => 'Roles',
        'lhs_table' => 'roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'Roles',
    'lhs_table' => 'roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'projects_bugs' => 
  array (
    'name' => 'projects_bugs',
    'table' => 'projects_bugs',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_bugs_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_bug_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_bug_bug',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bug_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_bugs_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_bugs' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_bugs',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_bugs',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'bug_id',
  ),
  'projects_cases' => 
  array (
    'name' => 'projects_cases',
    'table' => 'projects_cases',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_cases_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_case_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_case_case',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'case_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_cases_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'case_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_cases' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_cases',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_cases',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'case_id',
  ),
  'projects_products' => 
  array (
    'name' => 'projects_products',
    'table' => 'projects_products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_products_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_prod_project',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_prod_product',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_products_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_products' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_products',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_products',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'product_id',
  ),
  'projects_accounts' => 
  array (
    'name' => 'projects_accounts',
    'table' => 'projects_accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_accounts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_acct_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_acct_acct',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'account_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_accounts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_accounts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_accounts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_accounts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'account_id',
  ),
  'projects_contacts' => 
  array (
    'name' => 'projects_contacts',
    'table' => 'projects_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_con_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_con_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_contacts' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_contacts',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_contacts',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'contact_id',
  ),
  'projects_opportunities' => 
  array (
    'name' => 'projects_opportunities',
    'table' => 'projects_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_opportunities_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_opp_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_opportunities' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_opportunities',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_opportunities',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'product_bundle_note' => 
  array (
    'name' => 'product_bundle_note',
    'table' => 'product_bundle_note',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
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
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'bundle_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'note_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'note_index',
        'type' => 'int',
        'len' => '11',
        'default' => '0',
        'required' => true,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_notepk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbn_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbn_note',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'note_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbn_pb_nb',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'note_id',
          1 => 'bundle_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_note' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'ProductBundleNotes',
        'rhs_table' => 'product_bundle_note',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_note',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'note_id',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundleNotes',
    'rhs_table' => 'product_bundle_note',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_note',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'note_id',
  ),
  'product_bundle_product' => 
  array (
    'name' => 'product_bundle_product',
    'table' => 'product_bundle_product',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
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
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'bundle_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'product_index',
        'type' => 'int',
        'len' => '11',
        'default' => '0',
        'required' => true,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_prodpk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbp_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbp_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'product_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbp_bq',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'product_id',
          1 => 'bundle_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_product' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_product',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_product',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'product_id',
  ),
  'product_bundle_quote' => 
  array (
    'name' => 'product_bundle_quote',
    'table' => 'product_bundle_quote',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
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
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'bundle_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'bundle_index',
        'type' => 'int',
        'len' => '11',
        'default' => '0',
        'required' => true,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_bundl_quotepk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pbq_bundle',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'bundle_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pbq_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_pbq_bq',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
          1 => 'bundle_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_bundle_quote' => 
      array (
        'lhs_module' => 'ProductBundles',
        'lhs_table' => 'product_bundles',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_bundle_quote',
        'join_key_lhs' => 'bundle_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_bundle_quote',
    'join_key_lhs' => 'bundle_id',
    'join_key_rhs' => 'quote_id',
  ),
  'product_product' => 
  array (
    'name' => 'product_product',
    'table' => 'product_product',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
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
        'required' => false,
      ),
      3 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'child_id',
        'type' => 'varchar',
        'len' => '36',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'prod_prodpk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_pp_parent',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'parent_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_pp_child',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'child_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'product_product' => 
      array (
        'lhs_module' => 'Products',
        'lhs_table' => 'products',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'product_product',
        'join_key_lhs' => 'parent_id',
        'join_key_rhs' => 'child_id',
        'reverse' => '1',
      ),
    ),
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'product_product',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'child_id',
    'reverse' => '1',
  ),
  'quotes_billto_accounts' => 
  array (
    'name' => 'quotes_billto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Bill To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_shipto_accounts' => 
  array (
    'name' => 'quotes_shipto_accounts',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_accounts',
    'join_key_rhs' => 'quote_id',
    'join_key_lhs' => 'account_id',
    'relationship_role_column' => 'account_role',
    'relationship_role_column_value' => 'Ship To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'account_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_contacts_shipto' => 
  array (
    'name' => 'quotes_contacts_shipto',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'quotes_contacts',
    'join_key_lhs' => 'quote_id',
    'join_key_rhs' => 'contact_id',
    'relationship_role_column' => 'contact_role',
    'relationship_role_column_value' => 'Ship To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_contacts_billto' => 
  array (
    'name' => 'quotes_contacts_billto',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'quotes_contacts',
    'join_key_lhs' => 'quote_id',
    'join_key_rhs' => 'contact_id',
    'relationship_role_column' => 'contact_role',
    'relationship_role_column_value' => 'Bill To',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '20',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'quotes_opportunities' => 
  array (
    'name' => 'quotes_opportunities',
    'table' => 'quotes_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'quotes_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_opp_qte_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_quote_oportunities',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'quotes_opportunities' => 
      array (
        'lhs_module' => 'Quotes',
        'lhs_table' => 'quotes',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'quotes_opportunities',
        'join_key_lhs' => 'quote_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'quotes_opportunities',
    'join_key_lhs' => 'quote_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'contracts_opportunities' => 
  array (
    'name' => 'contracts_opportunities',
    'table' => 'contracts_opportunities',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_opp_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_opp_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_opportunities' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_opportunities',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_opportunities',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'contracts_contacts' => 
  array (
    'name' => 'contracts_contacts',
    'table' => 'contracts_contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_contacts_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_contacts_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'contract_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_contacts' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_contacts',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_contacts',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'contact_id',
  ),
  'contracts_quotes' => 
  array (
    'name' => 'contracts_quotes',
    'table' => 'contracts_quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_quot_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_quot_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_quotes' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_quotes',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_quotes',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'quote_id',
  ),
  'contracts_products' => 
  array (
    'name' => 'contracts_products',
    'table' => 'contracts_products',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'contract_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_prod_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_prod_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
          1 => 'product_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_products' => 
      array (
        'lhs_module' => 'Contracts',
        'lhs_table' => 'contracts',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contracts_products',
        'join_key_lhs' => 'contract_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contracts_products',
    'join_key_lhs' => 'contract_id',
    'join_key_rhs' => 'product_id',
  ),
  'projects_quotes' => 
  array (
    'name' => 'projects_quotes',
    'table' => 'projects_quotes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'project_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_quotes_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_quote_proj',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'project_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_proj_quote_quote',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
      3 => 
      array (
        'name' => 'projects_quotes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_quotes' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_quotes',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_quotes',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'quote_id',
  ),
  'users_holidays' => 
  array (
    'name' => 'users_holidays',
    'table' => 'users_holidays',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'holiday_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'users_holidays_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_user_holi_user',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_user_holi_holi',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'holiday_id',
        ),
      ),
      3 => 
      array (
        'name' => 'users_quotes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'user_id',
          1 => 'holiday_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'users_holidays' => 
      array (
        'lhs_module' => 'Users',
        'lhs_table' => 'users',
        'lhs_key' => 'id',
        'rhs_module' => 'Holidays',
        'rhs_table' => 'holidays',
        'rhs_key' => 'person_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'related_module',
        'relationship_role_column_value' => NULL,
      ),
    ),
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Holidays',
    'rhs_table' => 'holidays',
    'rhs_key' => 'person_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'related_module',
    'relationship_role_column_value' => NULL,
  ),
  'acl_roles_actions' => 
  array (
    'name' => 'acl_roles_actions',
    'table' => 'acl_roles_actions',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'action_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'access_override',
        'type' => 'int',
        'len' => '3',
        'required' => false,
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_actionspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_acl_role_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acl_action_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'action_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_action',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'action_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_actions' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'ACLActions',
        'rhs_table' => 'acl_actions',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_actions',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'action_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'ACLActions',
    'rhs_table' => 'acl_actions',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_actions',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'action_id',
  ),
  'acl_roles_users' => 
  array (
    'name' => 'acl_roles_users',
    'table' => 'acl_roles_users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'role_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'user_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'acl_roles_userspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_aclrole_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'role_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_acluser_id',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'user_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_aclrole_user',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'role_id',
          1 => 'user_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'acl_roles_users' => 
      array (
        'lhs_module' => 'ACLRoles',
        'lhs_table' => 'acl_roles',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'acl_roles_users',
        'join_key_lhs' => 'role_id',
        'join_key_rhs' => 'user_id',
      ),
    ),
    'lhs_module' => 'ACLRoles',
    'lhs_table' => 'acl_roles',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'acl_roles_users',
    'join_key_lhs' => 'role_id',
    'join_key_rhs' => 'user_id',
  ),
  'email_marketing_prospect_lists' => 
  array (
    'name' => 'email_marketing_prospect_lists',
    'table' => 'email_marketing_prospect_lists',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'email_marketing_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      4 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'email_mp_listspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'email_mp_prospects',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'email_marketing_id',
          1 => 'prospect_list_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'email_marketing_prospect_lists' => 
      array (
        'lhs_module' => 'EmailMarketing',
        'lhs_table' => 'email_marketing',
        'lhs_key' => 'id',
        'rhs_module' => 'ProspectLists',
        'rhs_table' => 'prospect_lists',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'email_marketing_prospect_lists',
        'join_key_lhs' => 'email_marketing_id',
        'join_key_rhs' => 'prospect_list_id',
      ),
    ),
    'lhs_module' => 'EmailMarketing',
    'lhs_table' => 'email_marketing',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_marketing_prospect_lists',
    'join_key_lhs' => 'email_marketing_id',
    'join_key_rhs' => 'prospect_list_id',
  ),
  'contracts_documents' => 
  array (
    'name' => 'contracts_documents',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'leads_documents' => 
  array (
    'name' => 'leads_documents',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'contracttype_documents' => 
  array (
    'name' => 'contracttype_documents',
    'lhs_module' => 'ContractTypes',
    'lhs_table' => 'contract_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'linked_documents',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'document_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ContracTemplates',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'parent_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      3 => 
      array (
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      4 => 
      array (
        'name' => 'document_revision_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      5 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      6 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
  ),
  'documents_accounts' => 
  array (
    'name' => 'documents_accounts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_accounts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_accounts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'account_id',
      ),
    ),
    'table' => 'documents_accounts',
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
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'account_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_accountsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_accounts_account_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_accounts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'account_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_accounts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'account_id',
  ),
  'documents_contacts' => 
  array (
    'name' => 'documents_contacts',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_contacts' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_contacts',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'table' => 'documents_contacts',
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
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contact_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_contactsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_contacts_contact_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contact_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_contacts_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'contact_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_contacts',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'contact_id',
  ),
  'documents_opportunities' => 
  array (
    'name' => 'documents_opportunities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_opportunities' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_opportunities',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'table' => 'documents_opportunities',
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
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunity_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_docu_opps_oppo_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_docu_oppo_docu_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_opportunities',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'opportunity_id',
  ),
  'documents_cases' => 
  array (
    'name' => 'documents_cases',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_cases' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Cases',
        'rhs_table' => 'cases',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_cases',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'case_id',
      ),
    ),
    'table' => 'documents_cases',
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
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'case_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_casesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_cases_case_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'case_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_cases_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'case_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_cases',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'case_id',
  ),
  'documents_bugs' => 
  array (
    'name' => 'documents_bugs',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_bugs' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Bugs',
        'rhs_table' => 'bugs',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_bugs',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'bug_id',
      ),
    ),
    'table' => 'documents_bugs',
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
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'bug_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_bugsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_bugs_bug_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'bug_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_bugs_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'bug_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_bugs',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'bug_id',
  ),
  'documents_products' => 
  array (
    'name' => 'documents_products',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_products' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_products',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'product_id',
      ),
    ),
    'table' => 'documents_products',
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
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'product_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_productsspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_products_product_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'product_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_products_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'product_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_products',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'product_id',
  ),
  'documents_quotes' => 
  array (
    'name' => 'documents_quotes',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_quotes' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_quotes',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'table' => 'documents_quotes',
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
        'name' => 'document_id',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'quote_id',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_quotesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'documents_quotes_quote_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'documents_quotes_document_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'quote_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_quotes',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'quote_id',
  ),
  'accounts_ee_auspicio' => 
  array (
    'name' => 'accounts_ee_auspicio',
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
  'accounts_ee_fidelizacion' => 
  array (
    'name' => 'accounts_ee_fidelizacion',
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
  'contacts_ac_certificado' => 
  array (
    'name' => 'contacts_ac_certificado',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'contacts_ac_certificado' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'ac_Certificado',
        'rhs_table' => 'ac_certificado',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_ac_certificado_c',
        'join_key_lhs' => 'contacts_ac_certificadocontacts_ida',
        'join_key_rhs' => 'contacts_ac_certificadoac_certificado_idb',
      ),
    ),
    'table' => 'contacts_ac_certificado_c',
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
        'name' => 'contacts_ac_certificadocontacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'contacts_ac_certificadoac_certificado_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_ac_certificadospk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contacts_ac_certificado_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contacts_ac_certificadocontacts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'contacts_ac_certificado_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contacts_ac_certificadoac_certificado_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'ac_Certificado',
    'rhs_table' => 'ac_certificado',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'contacts_ac_certificado_c',
    'join_key_lhs' => 'contacts_ac_certificadocontacts_ida',
    'join_key_rhs' => 'contacts_ac_certificadoac_certificado_idb',
  ),
  'ee_ejecucionprograma_activities_calls' => 
  array (
    'name' => 'ee_ejecucionprograma_activities_calls',
    'relationships' => 
    array (
      'ee_ejecucionprograma_activities_calls' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'Calls',
        'rhs_table' => 'calls',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'ee_EjecucionPrograma',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ee_EjecucionPrograma',
  ),
  'ee_ejecucionprograma_activities_emails' => 
  array (
    'name' => 'ee_ejecucionprograma_activities_emails',
    'relationships' => 
    array (
      'ee_ejecucionprograma_activities_emails' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'Emails',
        'rhs_table' => 'emails',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'ee_EjecucionPrograma',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ee_EjecucionPrograma',
  ),
  'ee_ejecucionprograma_activities_meetings' => 
  array (
    'name' => 'ee_ejecucionprograma_activities_meetings',
    'relationships' => 
    array (
      'ee_ejecucionprograma_activities_meetings' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'Meetings',
        'rhs_table' => 'meetings',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'ee_EjecucionPrograma',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ee_EjecucionPrograma',
  ),
  'ee_ejecucionprograma_activities_notes' => 
  array (
    'name' => 'ee_ejecucionprograma_activities_notes',
    'relationships' => 
    array (
      'ee_ejecucionprograma_activities_notes' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'Notes',
        'rhs_table' => 'notes',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'ee_EjecucionPrograma',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ee_EjecucionPrograma',
  ),
  'ee_ejecucionprograma_activities_tasks' => 
  array (
    'name' => 'ee_ejecucionprograma_activities_tasks',
    'relationships' => 
    array (
      'ee_ejecucionprograma_activities_tasks' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'Tasks',
        'rhs_table' => 'tasks',
        'rhs_key' => 'parent_id',
        'relationship_type' => 'one-to-many',
        'relationship_role_column' => 'parent_type',
        'relationship_role_column_value' => 'ee_EjecucionPrograma',
      ),
    ),
    'fields' => '',
    'indices' => '',
    'table' => '',
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ee_EjecucionPrograma',
  ),
  'ee_ejecucionprograma_contacts' => 
  array (
    'name' => 'ee_ejecucionprograma_contacts',
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
  'ee_ejecucionprograma_ee_accionesmejora' => 
  array (
    'name' => 'ee_ejecucionprograma_ee_accionesmejora',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'ee_ejecucionprograma_ee_accionesmejora' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_AccionesMejora',
        'rhs_table' => 'ee_accionesmejora',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_ee_accionesmejora_c',
        'join_key_lhs' => 'ee_ejecucionprograma_ee_accionesmejoraee_ejecucionprograma_ida',
        'join_key_rhs' => 'ee_ejecucionprograma_ee_accionesmejoraee_accionesmejora_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_ee_accionesmejora_c',
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
        'name' => 'ee_ejecucionprograma_ee_accionesmejoraee_ejecucionprograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_accionesmejoraee_accionesmejora_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_accionesmejoraspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_accionesmejora_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_accionesmejoraee_ejecucionprograma_ida',
          1 => 'ee_ejecucionprograma_ee_accionesmejoraee_accionesmejora_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_AccionesMejora',
    'rhs_table' => 'ee_accionesmejora',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_ee_accionesmejora_c',
    'join_key_lhs' => 'ee_ejecucionprograma_ee_accionesmejoraee_ejecucionprograma_ida',
    'join_key_rhs' => 'ee_ejecucionprograma_ee_accionesmejoraee_accionesmejora_idb',
  ),
  'ee_ejecucionprograma_ee_encuestainstructor' => 
  array (
    'name' => 'ee_ejecucionprograma_ee_encuestainstructor',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'ee_ejecucionprograma_ee_encuestainstructor' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_EncuestaInstructor',
        'rhs_table' => 'ee_encuestainstructor',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_ee_encuestainstructor_c',
        'join_key_lhs' => 'ee_ejecuci54adrograma_ida',
        'join_key_rhs' => 'ee_ejecucic277tructor_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_ee_encuestainstructor_c',
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
        'name' => 'ee_ejecuci54adrograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucic277tructor_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_encuestainstructorspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_encuestainstructor_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_ejecuci54adrograma_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_encuestainstructor_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucic277tructor_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaInstructor',
    'rhs_table' => 'ee_encuestainstructor',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_ee_encuestainstructor_c',
    'join_key_lhs' => 'ee_ejecuci54adrograma_ida',
    'join_key_rhs' => 'ee_ejecucic277tructor_idb',
  ),
  'ee_ejecucionprograma_ee_encuestaitc' => 
  array (
    'name' => 'ee_ejecucionprograma_ee_encuestaitc',
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
  'ee_ejecucionprograma_ee_evaluacionglobal' => 
  array (
    'name' => 'ee_ejecucionprograma_ee_evaluacionglobal',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'ee_ejecucionprograma_ee_evaluacionglobal' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_EvaluacionGlobal',
        'rhs_table' => 'ee_evaluacionglobal',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_ee_evaluacionglobal_c',
        'join_key_lhs' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
        'join_key_rhs' => 'ee_ejecucionprograma_ee_evaluacionglobalee_evaluacionglobal_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_ee_evaluacionglobal_c',
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
        'name' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionglobalee_evaluacionglobal_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionglobalspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionglobal_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionglobal_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_evaluacionglobalee_evaluacionglobal_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionGlobal',
    'rhs_table' => 'ee_evaluacionglobal',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_ee_evaluacionglobal_c',
    'join_key_lhs' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
    'join_key_rhs' => 'ee_ejecucionprograma_ee_evaluacionglobalee_evaluacionglobal_idb',
  ),
  'ee_ejecucionprograma_ee_evaluacionsci' => 
  array (
    'name' => 'ee_ejecucionprograma_ee_evaluacionsci',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'ee_ejecucionprograma_ee_evaluacionsci' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_EvaluacionSCI',
        'rhs_table' => 'ee_evaluacionsci',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_ee_evaluacionsci_c',
        'join_key_lhs' => 'ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida',
        'join_key_rhs' => 'ee_ejecucionprograma_ee_evaluacionsciee_evaluacionsci_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_ee_evaluacionsci_c',
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
        'name' => 'ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionsciee_evaluacionsci_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionscispk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionsci_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_evaluacionsci_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_evaluacionsciee_evaluacionsci_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionSCI',
    'rhs_table' => 'ee_evaluacionsci',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_ee_evaluacionsci_c',
    'join_key_lhs' => 'ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida',
    'join_key_rhs' => 'ee_ejecucionprograma_ee_evaluacionsciee_evaluacionsci_idb',
  ),
  'ee_ejecucionprograma_ee_logistica' => 
  array (
    'name' => 'ee_ejecucionprograma_ee_logistica',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'ee_ejecucionprograma_ee_logistica' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_Logistica',
        'rhs_table' => 'ee_logistica',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_ee_logistica_c',
        'join_key_lhs' => 'ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida',
        'join_key_rhs' => 'ee_ejecucionprograma_ee_logisticaee_logistica_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_ee_logistica_c',
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
        'name' => 'ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_logisticaee_logistica_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_logisticaspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_logistica_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_logistica_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_logisticaee_logistica_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Logistica',
    'rhs_table' => 'ee_logistica',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_ee_logistica_c',
    'join_key_lhs' => 'ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida',
    'join_key_rhs' => 'ee_ejecucionprograma_ee_logisticaee_logistica_idb',
  ),
  'ee_ejecucionprograma_ee_participantes' => 
  array (
    'name' => 'ee_ejecucionprograma_ee_participantes',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'ee_ejecucionprograma_ee_participantes' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_Participantes',
        'rhs_table' => 'ee_participantes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_ee_participantes_c',
        'join_key_lhs' => 'ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida',
        'join_key_rhs' => 'ee_ejecucionprograma_ee_participantesee_participantes_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_ee_participantes_c',
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
        'name' => 'ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_participantesee_participantes_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_participantesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_participantes_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_ejecucionprograma_ee_participantes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_ee_participantesee_participantes_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Participantes',
    'rhs_table' => 'ee_participantes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_ee_participantes_c',
    'join_key_lhs' => 'ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida',
    'join_key_rhs' => 'ee_ejecucionprograma_ee_participantesee_participantes_idb',
  ),
  'ee_ejecucionprograma_notes' => 
  array (
    'name' => 'ee_ejecucionprograma_notes',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'ee_ejecucionprograma_notes' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'Notes',
        'rhs_table' => 'notes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_notes_c',
        'join_key_lhs' => 'ee_ejecucionprograma_notesee_ejecucionprograma_ida',
        'join_key_rhs' => 'ee_ejecucionprograma_notesnotes_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_notes_c',
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
        'name' => 'ee_ejecucionprograma_notesee_ejecucionprograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucionprograma_notesnotes_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_notesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_notes_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_notesee_ejecucionprograma_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_ejecucionprograma_notes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_notesnotes_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_notes_c',
    'join_key_lhs' => 'ee_ejecucionprograma_notesee_ejecucionprograma_ida',
    'join_key_rhs' => 'ee_ejecucionprograma_notesnotes_idb',
  ),
  'ee_ejecucionprograma_opportunities' => 
  array (
    'name' => 'ee_ejecucionprograma_opportunities',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'ee_ejecucionprograma_opportunities' => 
      array (
        'lhs_module' => 'ee_EjecucionPrograma',
        'lhs_table' => 'ee_ejecucionprograma',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_ejecucionprograma_opportunities_c',
        'join_key_lhs' => 'ee_ejecucionprograma_opportunitiesee_ejecucionprograma_ida',
        'join_key_rhs' => 'ee_ejecucionprograma_opportunitiesopportunities_idb',
      ),
    ),
    'table' => 'ee_ejecucionprograma_opportunities_c',
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
        'name' => 'ee_ejecucionprograma_opportunitiesee_ejecucionprograma_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_ejecucionprograma_opportunitiesopportunities_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_ejecucionprograma_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_ejecucionprograma_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_ejecucionprograma_opportunitiesee_ejecucionprograma_ida',
          1 => 'ee_ejecucionprograma_opportunitiesopportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_ejecucionprograma_opportunities_c',
    'join_key_lhs' => 'ee_ejecucionprograma_opportunitiesee_ejecucionprograma_ida',
    'join_key_rhs' => 'ee_ejecucionprograma_opportunitiesopportunities_idb',
  ),
  'ee_mediocontacto_ee_detallemedio' => 
  array (
    'name' => 'ee_mediocontacto_ee_detallemedio',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'ee_mediocontacto_ee_detallemedio' => 
      array (
        'lhs_module' => 'EE_MedioContacto',
        'lhs_table' => 'ee_mediocontacto',
        'lhs_key' => 'id',
        'rhs_module' => 'EE_DetalleMedio',
        'rhs_table' => 'ee_detallemedio',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_mediocontacto_ee_detallemedio_c',
        'join_key_lhs' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
        'join_key_rhs' => 'ee_mediocontacto_ee_detallemedioee_detallemedio_idb',
      ),
    ),
    'table' => 'ee_mediocontacto_ee_detallemedio_c',
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
        'name' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_mediocontacto_ee_detallemedioee_detallemedio_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_mediocontacto_ee_detallemediospk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_mediocontacto_ee_detallemedio_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_mediocontacto_ee_detallemedio_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_mediocontacto_ee_detallemedioee_detallemedio_idb',
        ),
      ),
    ),
    'lhs_module' => 'EE_MedioContacto',
    'lhs_table' => 'ee_mediocontacto',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_DetalleMedio',
    'rhs_table' => 'ee_detallemedio',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_mediocontacto_ee_detallemedio_c',
    'join_key_lhs' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
    'join_key_rhs' => 'ee_mediocontacto_ee_detallemedioee_detallemedio_idb',
  ),
  'ee_pais_ee_provincia' => 
  array (
    'name' => 'ee_pais_ee_provincia',
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
  'ee_profesores_ee_accionesmejora' => 
  array (
    'name' => 'ee_profesores_ee_accionesmejora',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'ee_profesores_ee_accionesmejora' => 
      array (
        'lhs_module' => 'ee_Profesores',
        'lhs_table' => 'ee_profesores',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_AccionesMejora',
        'rhs_table' => 'ee_accionesmejora',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_profesores_ee_accionesmejora_c',
        'join_key_lhs' => 'ee_profesores_ee_accionesmejoraee_profesores_ida',
        'join_key_rhs' => 'ee_profesores_ee_accionesmejoraee_accionesmejora_idb',
      ),
    ),
    'table' => 'ee_profesores_ee_accionesmejora_c',
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
        'name' => 'ee_profesores_ee_accionesmejoraee_profesores_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_profesores_ee_accionesmejoraee_accionesmejora_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_profesores_ee_accionesmejoraspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_profesores_ee_accionesmejora_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_profesores_ee_accionesmejoraee_profesores_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_profesores_ee_accionesmejora_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_profesores_ee_accionesmejoraee_accionesmejora_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_Profesores',
    'lhs_table' => 'ee_profesores',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_AccionesMejora',
    'rhs_table' => 'ee_accionesmejora',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_profesores_ee_accionesmejora_c',
    'join_key_lhs' => 'ee_profesores_ee_accionesmejoraee_profesores_ida',
    'join_key_rhs' => 'ee_profesores_ee_accionesmejoraee_accionesmejora_idb',
  ),
  'ee_profesores_ee_cursos' => 
  array (
    'name' => 'ee_profesores_ee_cursos',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'ee_profesores_ee_cursos' => 
      array (
        'lhs_module' => 'ee_Profesores',
        'lhs_table' => 'ee_profesores',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_Cursos',
        'rhs_table' => 'ee_cursos',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_profesores_ee_cursos_c',
        'join_key_lhs' => 'ee_profesores_ee_cursosee_profesores_ida',
        'join_key_rhs' => 'ee_profesores_ee_cursosee_cursos_idb',
      ),
    ),
    'table' => 'ee_profesores_ee_cursos_c',
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
        'name' => 'ee_profesores_ee_cursosee_profesores_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_profesores_ee_cursosee_cursos_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_profesores_ee_cursosspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_profesores_ee_cursos_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_profesores_ee_cursosee_profesores_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_profesores_ee_cursos_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_profesores_ee_cursosee_cursos_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_Profesores',
    'lhs_table' => 'ee_profesores',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cursos',
    'rhs_table' => 'ee_cursos',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_profesores_ee_cursos_c',
    'join_key_lhs' => 'ee_profesores_ee_cursosee_profesores_ida',
    'join_key_rhs' => 'ee_profesores_ee_cursosee_cursos_idb',
  ),
  'ee_profesores_notes' => 
  array (
    'name' => 'ee_profesores_notes',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'ee_profesores_notes' => 
      array (
        'lhs_module' => 'ee_Profesores',
        'lhs_table' => 'ee_profesores',
        'lhs_key' => 'id',
        'rhs_module' => 'Notes',
        'rhs_table' => 'notes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ee_profesores_notes_c',
        'join_key_lhs' => 'ee_profesores_notesee_profesores_ida',
        'join_key_rhs' => 'ee_profesores_notesnotes_idb',
      ),
    ),
    'table' => 'ee_profesores_notes_c',
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
        'name' => 'ee_profesores_notesee_profesores_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'ee_profesores_notesnotes_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ee_profesores_notesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ee_profesores_notes_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'ee_profesores_notesee_profesores_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'ee_profesores_notes_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ee_profesores_notesnotes_idb',
        ),
      ),
    ),
    'lhs_module' => 'ee_Profesores',
    'lhs_table' => 'ee_profesores',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ee_profesores_notes_c',
    'join_key_lhs' => 'ee_profesores_notesee_profesores_ida',
    'join_key_rhs' => 'ee_profesores_notesnotes_idb',
  ),
  'ee_provincia_ee_ciudad' => 
  array (
    'name' => 'ee_provincia_ee_ciudad',
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
  'opportunities_ee_cobranzas' => 
  array (
    'name' => 'opportunities_ee_cobranzas',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_ee_cobranzas' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'ee_Cobranzas',
        'rhs_table' => 'ee_cobranzas',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_ee_cobranzas_c',
        'join_key_lhs' => 'opportunities_ee_cobranzasopportunities_ida',
        'join_key_rhs' => 'opportunities_ee_cobranzasee_cobranzas_idb',
      ),
    ),
    'table' => 'opportunities_ee_cobranzas_c',
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
        'name' => 'opportunities_ee_cobranzasopportunities_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      4 => 
      array (
        'name' => 'opportunities_ee_cobranzasee_cobranzas_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_ee_cobranzasspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'opportunities_ee_cobranzas_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_ee_cobranzasopportunities_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'opportunities_ee_cobranzas_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_ee_cobranzasee_cobranzas_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cobranzas',
    'rhs_table' => 'ee_cobranzas',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_ee_cobranzas_c',
    'join_key_lhs' => 'opportunities_ee_cobranzasopportunities_ida',
    'join_key_rhs' => 'opportunities_ee_cobranzasee_cobranzas_idb',
  ),
  'user_direct_reports' => 
  array (
    'name' => 'user_direct_reports',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_users_signatures' => 
  array (
    'name' => 'users_users_signatures',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'UserSignature',
    'rhs_table' => 'users_signatures',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_email_addresses' => 
  array (
    'name' => 'users_email_addresses',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Users',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_email_addresses_primary' => 
  array (
    'name' => 'users_email_addresses_primary',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'users_team_count_relationship' => 
  array (
    'name' => 'users_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'users',
    'rhs_table' => 'users',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'users_teams' => 
  array (
    'name' => 'users_teams',
    'lhs_module' => 'users',
    'lhs_table' => 'users',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'users_team' => 
  array (
    'name' => 'users_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'users',
    'rhs_table' => 'users',
    'rhs_key' => 'default_team',
    'relationship_type' => 'one-to-many',
  ),
  'leads_modified_user' => 
  array (
    'name' => 'leads_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_created_by' => 
  array (
    'name' => 'leads_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'leads_assigned_user' => 
  array (
    'name' => 'leads_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_team_count_relationship' => 
  array (
    'name' => 'leads_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_teams' => 
  array (
    'name' => 'leads_teams',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'leads_team' => 
  array (
    'name' => 'leads_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'leads_email_addresses' => 
  array (
    'name' => 'leads_email_addresses',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Leads',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'leads_email_addresses_primary' => 
  array (
    'name' => 'leads_email_addresses_primary',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'lead_direct_reports' => 
  array (
    'name' => 'lead_direct_reports',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'lead_tasks' => 
  array (
    'name' => 'lead_tasks',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_notes' => 
  array (
    'name' => 'lead_notes',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_meetings' => 
  array (
    'name' => 'lead_meetings',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_calls' => 
  array (
    'name' => 'lead_calls',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_emails' => 
  array (
    'name' => 'lead_emails',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Leads',
  ),
  'lead_campaign_log' => 
  array (
    'name' => 'lead_campaign_log',
    'lhs_module' => 'Leads',
    'lhs_table' => 'leads',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_modified_user' => 
  array (
    'name' => 'cases_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_created_by' => 
  array (
    'name' => 'cases_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'cases_assigned_user' => 
  array (
    'name' => 'cases_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_team_count_relationship' => 
  array (
    'name' => 'cases_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'cases_teams' => 
  array (
    'name' => 'cases_teams',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'cases_team' => 
  array (
    'name' => 'cases_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_calls' => 
  array (
    'name' => 'case_calls',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_tasks' => 
  array (
    'name' => 'case_tasks',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_notes' => 
  array (
    'name' => 'case_notes',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_meetings' => 
  array (
    'name' => 'case_meetings',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'case_emails' => 
  array (
    'name' => 'case_emails',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'documents_modified_user' => 
  array (
    'name' => 'documents_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_created_by' => 
  array (
    'name' => 'documents_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'documents_assigned_user' => 
  array (
    'name' => 'documents_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_team_count_relationship' => 
  array (
    'name' => 'documents_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'documents_teams' => 
  array (
    'name' => 'documents_teams',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'documents_team' => 
  array (
    'name' => 'documents_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Documents',
    'rhs_table' => 'documents',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'document_revisions' => 
  array (
    'name' => 'document_revisions',
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'document_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_modified_user' => 
  array (
    'name' => 'bugs_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_created_by' => 
  array (
    'name' => 'bugs_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_assigned_user' => 
  array (
    'name' => 'bugs_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_team_count_relationship' => 
  array (
    'name' => 'bugs_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_teams' => 
  array (
    'name' => 'bugs_teams',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'bugs_team' => 
  array (
    'name' => 'bugs_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'bug_tasks' => 
  array (
    'name' => 'bug_tasks',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_meetings' => 
  array (
    'name' => 'bug_meetings',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_calls' => 
  array (
    'name' => 'bug_calls',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_emails' => 
  array (
    'name' => 'bug_emails',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bug_notes' => 
  array (
    'name' => 'bug_notes',
    'lhs_module' => 'Bugs',
    'lhs_table' => 'bugs',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bugs',
  ),
  'bugs_release' => 
  array (
    'name' => 'bugs_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'found_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'bugs_fixed_in_release' => 
  array (
    'name' => 'bugs_fixed_in_release',
    'lhs_module' => 'Releases',
    'lhs_table' => 'releases',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'fixed_in_release',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_modified_user' => 
  array (
    'name' => 'contacts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_created_by' => 
  array (
    'name' => 'contacts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_assigned_user' => 
  array (
    'name' => 'contacts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_team_count_relationship' => 
  array (
    'name' => 'contacts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_teams' => 
  array (
    'name' => 'contacts_teams',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'contacts_team' => 
  array (
    'name' => 'contacts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'contacts_email_addresses' => 
  array (
    'name' => 'contacts_email_addresses',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Contacts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contacts_email_addresses_primary' => 
  array (
    'name' => 'contacts_email_addresses_primary',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'contact_direct_reports' => 
  array (
    'name' => 'contact_direct_reports',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'reports_to_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_leads' => 
  array (
    'name' => 'contact_leads',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_notes' => 
  array (
    'name' => 'contact_notes',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks' => 
  array (
    'name' => 'contact_tasks',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_tasks_parent' => 
  array (
    'name' => 'contact_tasks_parent',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'contact_products' => 
  array (
    'name' => 'contact_products',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'contact_id',
    'relationship_type' => 'one-to-many',
  ),
  'contact_campaign_log' => 
  array (
    'name' => 'contact_campaign_log',
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_team_count_relationship' => 
  array (
    'name' => 'project_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_teams' => 
  array (
    'name' => 'project_teams',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'project_team' => 
  array (
    'name' => 'project_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_notes' => 
  array (
    'name' => 'projects_notes',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_tasks' => 
  array (
    'name' => 'projects_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_meetings' => 
  array (
    'name' => 'projects_meetings',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_calls' => 
  array (
    'name' => 'projects_calls',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_emails' => 
  array (
    'name' => 'projects_emails',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Project',
  ),
  'projects_project_tasks' => 
  array (
    'name' => 'projects_project_tasks',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'project_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_assigned_user' => 
  array (
    'name' => 'projects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_modified_user' => 
  array (
    'name' => 'projects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'projects_created_by' => 
  array (
    'name' => 'projects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Project',
    'rhs_table' => 'project',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'projects_users_resources' => 
  array (
    'name' => 'projects_users_resources',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_resources',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'resource_id',
    'relationship_role_column' => 'resource_type',
    'relationship_role_column_value' => 'Users',
  ),
  'projects_contacts_resources' => 
  array (
    'name' => 'projects_contacts_resources',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'project_resources',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'resource_id',
    'relationship_role_column' => 'resource_type',
    'relationship_role_column_value' => 'Contacts',
  ),
  'projects_holidays' => 
  array (
    'name' => 'projects_holidays',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Holidays',
    'rhs_table' => 'holidays',
    'rhs_key' => 'related_module_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_assigned_user' => 
  array (
    'name' => 'prospectlists_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'prospectlists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_team_count_relationship' => 
  array (
    'name' => 'prospectlists_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospectlists_teams' => 
  array (
    'name' => 'prospectlists_teams',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'prospectlists_team' => 
  array (
    'name' => 'prospectlists_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProspectLists',
    'rhs_table' => 'prospect_lists',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_modified_user' => 
  array (
    'name' => 'prospects_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_created_by' => 
  array (
    'name' => 'prospects_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_assigned_user' => 
  array (
    'name' => 'prospects_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_team_count_relationship' => 
  array (
    'name' => 'prospects_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_teams' => 
  array (
    'name' => 'prospects_teams',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'prospects_team' => 
  array (
    'name' => 'prospects_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'prospects_email_addresses' => 
  array (
    'name' => 'prospects_email_addresses',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Prospects',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospects_email_addresses_primary' => 
  array (
    'name' => 'prospects_email_addresses_primary',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospect_tasks' => 
  array (
    'name' => 'prospect_tasks',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_notes' => 
  array (
    'name' => 'prospect_notes',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_meetings' => 
  array (
    'name' => 'prospect_meetings',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_calls' => 
  array (
    'name' => 'prospect_calls',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_emails' => 
  array (
    'name' => 'prospect_emails',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Prospects',
  ),
  'prospect_campaign_log' => 
  array (
    'name' => 'prospect_campaign_log',
    'lhs_module' => 'Prospects',
    'lhs_table' => 'prospects',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'projecttask_team_count_relationship' => 
  array (
    'name' => 'projecttask_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'projecttask_teams' => 
  array (
    'name' => 'projecttask_teams',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'projecttask_team' => 
  array (
    'name' => 'projecttask_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_notes' => 
  array (
    'name' => 'project_tasks_notes',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_tasks' => 
  array (
    'name' => 'project_tasks_tasks',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_meetings' => 
  array (
    'name' => 'project_tasks_meetings',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_calls' => 
  array (
    'name' => 'project_tasks_calls',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_emails' => 
  array (
    'name' => 'project_tasks_emails',
    'lhs_module' => 'ProjectTask',
    'lhs_table' => 'project_task',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ProjectTask',
  ),
  'project_tasks_assigned_user' => 
  array (
    'name' => 'project_tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_modified_user' => 
  array (
    'name' => 'project_tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'project_tasks_created_by' => 
  array (
    'name' => 'project_tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProjectTask',
    'rhs_table' => 'project_task',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_modified_user' => 
  array (
    'name' => 'campaigns_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_created_by' => 
  array (
    'name' => 'campaigns_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_assigned_user' => 
  array (
    'name' => 'campaigns_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_team_count_relationship' => 
  array (
    'name' => 'campaigns_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaigns_teams' => 
  array (
    'name' => 'campaigns_teams',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'campaigns_team' => 
  array (
    'name' => 'campaigns_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_accounts' => 
  array (
    'name' => 'campaign_accounts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_contacts' => 
  array (
    'name' => 'campaign_contacts',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_leads' => 
  array (
    'name' => 'campaign_leads',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_prospects' => 
  array (
    'name' => 'campaign_prospects',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Prospects',
    'rhs_table' => 'prospects',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_opportunities' => 
  array (
    'name' => 'campaign_opportunities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_email_marketing' => 
  array (
    'name' => 'campaign_email_marketing',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_emailman' => 
  array (
    'name' => 'campaign_emailman',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMan',
    'rhs_table' => 'emailman',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaignlog' => 
  array (
    'name' => 'campaign_campaignlog',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_assigned_user' => 
  array (
    'name' => 'campaign_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_modified_user' => 
  array (
    'name' => 'campaign_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'email_template_email_marketings' => 
  array (
    'name' => 'email_template_email_marketings',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailMarketing',
    'rhs_table' => 'email_marketing',
    'rhs_key' => 'template_id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_contact' => 
  array (
    'name' => 'campaignlog_contact',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaignlog_lead' => 
  array (
    'name' => 'campaignlog_lead',
    'lhs_module' => 'CampaignLog',
    'lhs_table' => 'campaign_log',
    'lhs_key' => 'related_id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'campaign_campaigntrakers' => 
  array (
    'name' => 'campaign_campaigntrakers',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignTrackers',
    'rhs_table' => 'campaign_trkrs',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_created_by_rel' => 
  array (
    'name' => 'schedulers_created_by_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'schedulers_modified_user_id_rel' => 
  array (
    'name' => 'schedulers_modified_user_id_rel',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Schedulers',
    'rhs_table' => 'schedulers',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'schedulers_jobs_rel' => 
  array (
    'name' => 'schedulers_jobs_rel',
    'lhs_module' => 'Schedulers',
    'lhs_table' => 'schedulers',
    'lhs_key' => 'id',
    'rhs_module' => 'SchedulersJobs',
    'rhs_table' => 'schedulers_times',
    'rhs_key' => 'scheduler_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_modified_user' => 
  array (
    'name' => 'accounts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_created_by' => 
  array (
    'name' => 'accounts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_assigned_user' => 
  array (
    'name' => 'accounts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_team_count_relationship' => 
  array (
    'name' => 'accounts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_teams' => 
  array (
    'name' => 'accounts_teams',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'accounts_team' => 
  array (
    'name' => 'accounts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'accounts_email_addresses' => 
  array (
    'name' => 'accounts_email_addresses',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'Accounts',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'accounts_email_addresses_primary' => 
  array (
    'name' => 'accounts_email_addresses_primary',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'member_accounts' => 
  array (
    'name' => 'member_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_cases' => 
  array (
    'name' => 'account_cases',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_tasks' => 
  array (
    'name' => 'account_tasks',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_notes' => 
  array (
    'name' => 'account_notes',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_meetings' => 
  array (
    'name' => 'account_meetings',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_calls' => 
  array (
    'name' => 'account_calls',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_emails' => 
  array (
    'name' => 'account_emails',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Accounts',
  ),
  'account_leads' => 
  array (
    'name' => 'account_leads',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'account_campaign_log' => 
  array (
    'name' => 'account_campaign_log',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'CampaignLog',
    'rhs_table' => 'campaign_log',
    'rhs_key' => 'target_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_modified_user' => 
  array (
    'name' => 'opportunities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_created_by' => 
  array (
    'name' => 'opportunities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_assigned_user' => 
  array (
    'name' => 'opportunities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_team_count_relationship' => 
  array (
    'name' => 'opportunities_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_teams' => 
  array (
    'name' => 'opportunities_teams',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'opportunities_team' => 
  array (
    'name' => 'opportunities_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_calls' => 
  array (
    'name' => 'opportunity_calls',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_meetings' => 
  array (
    'name' => 'opportunity_meetings',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_tasks' => 
  array (
    'name' => 'opportunity_tasks',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_notes' => 
  array (
    'name' => 'opportunity_notes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_emails' => 
  array (
    'name' => 'opportunity_emails',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
  ),
  'opportunity_leads' => 
  array (
    'name' => 'opportunity_leads',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunity_currencies' => 
  array (
    'name' => 'opportunity_currencies',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'currency_id',
    'rhs_module' => 'Currencies',
    'rhs_table' => 'currencies',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'opportunities_campaign' => 
  array (
    'name' => 'opportunities_campaign',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_team_count_relationship' => 
  array (
    'name' => 'emailtemplates_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_teams' => 
  array (
    'name' => 'emailtemplates_teams',
    'lhs_module' => 'EmailTemplates',
    'lhs_table' => 'email_templates',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'emailtemplates_team' => 
  array (
    'name' => 'emailtemplates_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'emailtemplates_assigned_user' => 
  array (
    'name' => 'emailtemplates_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailTemplates',
    'rhs_table' => 'email_templates',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_assigned_user' => 
  array (
    'name' => 'notes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_team_count_relationship' => 
  array (
    'name' => 'notes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_teams' => 
  array (
    'name' => 'notes_teams',
    'lhs_module' => 'Notes',
    'lhs_table' => 'notes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'notes_team' => 
  array (
    'name' => 'notes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_modified_user' => 
  array (
    'name' => 'notes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notes_created_by' => 
  array (
    'name' => 'notes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_modified_user' => 
  array (
    'name' => 'calls_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_created_by' => 
  array (
    'name' => 'calls_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'calls_assigned_user' => 
  array (
    'name' => 'calls_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_team_count_relationship' => 
  array (
    'name' => 'calls_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_teams' => 
  array (
    'name' => 'calls_teams',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'calls_team' => 
  array (
    'name' => 'calls_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'calls_notes' => 
  array (
    'name' => 'calls_notes',
    'lhs_module' => 'Calls',
    'lhs_table' => 'calls',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Calls',
  ),
  'emails_team_count_relationship' => 
  array (
    'name' => 'emails_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_teams' => 
  array (
    'name' => 'emails_teams',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'emails_team' => 
  array (
    'name' => 'emails_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_assigned_user' => 
  array (
    'name' => 'emails_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_modified_user' => 
  array (
    'name' => 'emails_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_created_by' => 
  array (
    'name' => 'emails_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'emails_notes_rel' => 
  array (
    'name' => 'emails_notes_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'emails_meetings_rel' => 
  array (
    'name' => 'emails_meetings_rel',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_modified_user' => 
  array (
    'name' => 'meetings_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_created_by' => 
  array (
    'name' => 'meetings_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_assigned_user' => 
  array (
    'name' => 'meetings_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_team_count_relationship' => 
  array (
    'name' => 'meetings_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_teams' => 
  array (
    'name' => 'meetings_teams',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'meetings_team' => 
  array (
    'name' => 'meetings_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'meetings_notes' => 
  array (
    'name' => 'meetings_notes',
    'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Meetings',
  ),
  'tasks_modified_user' => 
  array (
    'name' => 'tasks_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_created_by' => 
  array (
    'name' => 'tasks_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_assigned_user' => 
  array (
    'name' => 'tasks_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_team_count_relationship' => 
  array (
    'name' => 'tasks_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_teams' => 
  array (
    'name' => 'tasks_teams',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'tasks_team' => 
  array (
    'name' => 'tasks_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'tasks_notes' => 
  array (
    'name' => 'tasks_notes',
    'lhs_module' => 'Tasks',
    'lhs_table' => 'tasks',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'tracker_monitor_id' => 
  array (
    'name' => 'tracker_monitor_id',
    'lhs_module' => 'TrackerPerfs',
    'lhs_table' => 'tracker_perf',
    'lhs_key' => 'monitor_id',
    'rhs_module' => 'Trackers',
    'rhs_table' => 'tracker',
    'rhs_key' => 'monitor_id',
    'relationship_type' => 'one-to-one',
  ),
  'revisions_created_by' => 
  array (
    'name' => 'revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'DocumentRevisions',
    'rhs_table' => 'document_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'inboundemail_team_count_relationship' => 
  array (
    'name' => 'inboundemail_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'inboundemail_teams' => 
  array (
    'name' => 'inboundemail_teams',
    'lhs_module' => 'InboundEmail',
    'lhs_table' => 'inbound_email',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'inboundemail_team' => 
  array (
    'name' => 'inboundemail_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'inbound_email_created_by' => 
  array (
    'name' => 'inbound_email_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-one',
  ),
  'inbound_email_modified_user_id' => 
  array (
    'name' => 'inbound_email_modified_user_id',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'InboundEmail',
    'rhs_table' => 'inbound_email',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-one',
  ),
  'savedsearch_team_count_relationship' => 
  array (
    'name' => 'savedsearch_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'savedsearch_teams' => 
  array (
    'name' => 'savedsearch_teams',
    'lhs_module' => 'SavedSearch',
    'lhs_table' => 'saved_search',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'savedsearch_team' => 
  array (
    'name' => 'savedsearch_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'saved_search_assigned_user' => 
  array (
    'name' => 'saved_search_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SavedSearch',
    'rhs_table' => 'saved_search',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_team_count_relationship' => 
  array (
    'name' => 'reports_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'reports_teams' => 
  array (
    'name' => 'reports_teams',
    'lhs_module' => 'Reports',
    'lhs_table' => 'saved_reports',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'reports_team' => 
  array (
    'name' => 'reports_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'report_assigned_user' => 
  array (
    'name' => 'report_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reports',
    'rhs_table' => 'saved_reports',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'team_memberships' => 
  array (
    'name' => 'team_memberships',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_memberships',
    'join_key_lhs' => 'team_id',
    'join_key_rhs' => 'user_id',
  ),
  'quotes_modified_user' => 
  array (
    'name' => 'quotes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_created_by' => 
  array (
    'name' => 'quotes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_assigned_user' => 
  array (
    'name' => 'quotes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_team_count_relationship' => 
  array (
    'name' => 'quotes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'quotes_teams' => 
  array (
    'name' => 'quotes_teams',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'quotes_team' => 
  array (
    'name' => 'quotes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'quote_tasks' => 
  array (
    'name' => 'quote_tasks',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_notes' => 
  array (
    'name' => 'quote_notes',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_meetings' => 
  array (
    'name' => 'quote_meetings',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_calls' => 
  array (
    'name' => 'quote_calls',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_emails' => 
  array (
    'name' => 'quote_emails',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'emails',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Quotes',
  ),
  'quote_products' => 
  array (
    'name' => 'quote_products',
    'lhs_module' => 'Quotes',
    'lhs_table' => 'quotes',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'quote_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_modified_user' => 
  array (
    'name' => 'products_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_created_by' => 
  array (
    'name' => 'products_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'products_team_count_relationship' => 
  array (
    'name' => 'products_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'products_teams' => 
  array (
    'name' => 'products_teams',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'products_team' => 
  array (
    'name' => 'products_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_notes' => 
  array (
    'name' => 'product_notes',
    'lhs_module' => 'Products',
    'lhs_table' => 'products',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Products',
  ),
  'products_accounts' => 
  array (
    'name' => 'products_accounts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_categories' => 
  array (
    'name' => 'product_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_types' => 
  array (
    'name' => 'product_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'productbundles_team_count_relationship' => 
  array (
    'name' => 'productbundles_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'productbundles_teams' => 
  array (
    'name' => 'productbundles_teams',
    'lhs_module' => 'ProductBundles',
    'lhs_table' => 'product_bundles',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'productbundles_team' => 
  array (
    'name' => 'productbundles_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductBundles',
    'rhs_table' => 'product_bundles',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_product_categories' => 
  array (
    'name' => 'product_templates_product_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'category_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_product_types' => 
  array (
    'name' => 'product_templates_product_types',
    'lhs_module' => 'ProductTypes',
    'lhs_table' => 'product_types',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'type_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_manufacturers' => 
  array (
    'name' => 'product_templates_manufacturers',
    'lhs_module' => 'Manufacturers',
    'lhs_table' => 'manufacturers',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'manufacturer_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_modified_user' => 
  array (
    'name' => 'product_templates_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'product_templates_created_by' => 
  array (
    'name' => 'product_templates_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductTemplates',
    'rhs_table' => 'product_templates',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'member_categories' => 
  array (
    'name' => 'member_categories',
    'lhs_module' => 'ProductCategories',
    'lhs_table' => 'product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'ProductCategories',
    'rhs_table' => 'product_categories',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'shipper_quotes' => 
  array (
    'name' => 'shipper_quotes',
    'lhs_module' => 'Shippers',
    'lhs_table' => 'shippers',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'shipper_id',
    'relationship_type' => 'one-to-many',
  ),
  'teamnotices_team_count_relationship' => 
  array (
    'name' => 'teamnotices_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'TeamNotices',
    'rhs_table' => 'team_notices',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'teamnotices_teams' => 
  array (
    'name' => 'teamnotices_teams',
    'lhs_module' => 'TeamNotices',
    'lhs_table' => 'team_notices',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'teamnotices_team' => 
  array (
    'name' => 'teamnotices_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'TeamNotices',
    'rhs_table' => 'team_notices',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'timeperiod_forecast_schedules' => 
  array (
    'name' => 'timeperiod_forecast_schedules',
    'lhs_module' => 'TimePeriods',
    'lhs_table' => 'timeperiods',
    'lhs_key' => 'id',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecast_schedule',
    'rhs_key' => 'timeperiod_id',
    'relationship_type' => 'one-to-many',
  ),
  'related_timeperiods' => 
  array (
    'name' => 'related_timeperiods',
    'lhs_module' => 'TimePeriods',
    'lhs_table' => 'timeperiods',
    'lhs_key' => 'id',
    'rhs_module' => 'TimePeriods',
    'rhs_table' => 'timeperiods',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'forecasts_created_by' => 
  array (
    'name' => 'forecasts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Forecasts',
    'rhs_table' => 'forecasts',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_triggers' => 
  array (
    'name' => 'workflow_triggers',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowTriggerShells',
    'rhs_table' => 'workflow_triggershells',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'frame_type',
    'relationship_role_column_value' => 'Primary',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_trigger_filters' => 
  array (
    'name' => 'workflow_trigger_filters',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowTriggerShells',
    'rhs_table' => 'workflow_triggershells',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'frame_type',
    'relationship_role_column_value' => 'Secondary',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_alerts' => 
  array (
    'name' => 'workflow_alerts',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowAlertShells',
    'rhs_table' => 'workflow_alertshells',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'workflow_actions' => 
  array (
    'name' => 'workflow_actions',
    'lhs_module' => 'WorkFlow',
    'lhs_table' => 'workflow',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowActionShells',
    'rhs_table' => 'workflow_actionshells',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'past_triggers' => 
  array (
    'name' => 'past_triggers',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'past_trigger',
    'relationship_type' => 'one-to-many',
  ),
  'future_triggers' => 
  array (
    'name' => 'future_triggers',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'future_trigger',
    'relationship_type' => 'one-to-many',
  ),
  'trigger_expressions' => 
  array (
    'name' => 'trigger_expressions',
    'lhs_module' => 'WorkFlowTriggerShells',
    'lhs_table' => 'workflow_triggershells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'expression',
    'relationship_type' => 'one-to-many',
  ),
  'alert_components' => 
  array (
    'name' => 'alert_components',
    'lhs_module' => 'WorkFlowAlertShells',
    'lhs_table' => 'workflow_alertshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowAlerts',
    'rhs_table' => 'workflow_alerts',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'expressions' => 
  array (
    'name' => 'expressions',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'filter',
    'relationship_type' => 'one-to-many',
  ),
  'rel1_alert_fil' => 
  array (
    'name' => 'rel1_alert_fil',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel1_alert_fil',
    'relationship_type' => 'one-to-many',
  ),
  'rel2_alert_fil' => 
  array (
    'name' => 'rel2_alert_fil',
    'lhs_module' => 'WorkFlowAlerts',
    'lhs_table' => 'workflow_alerts',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel2_alert_fil',
    'relationship_type' => 'one-to-many',
  ),
  'actions' => 
  array (
    'name' => 'actions',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlowActions',
    'rhs_table' => 'workflow_actions',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'action_bridge' => 
  array (
    'name' => 'action_bridge',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'WorkFlow',
    'rhs_table' => 'workflow',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
  ),
  'rel1_action_fil' => 
  array (
    'name' => 'rel1_action_fil',
    'lhs_module' => 'WorkFlowActionShells',
    'lhs_table' => 'workflow_actionshells',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'rel1_action_fil',
    'relationship_type' => 'one-to-many',
  ),
  'member_expressions' => 
  array (
    'name' => 'member_expressions',
    'lhs_module' => 'Expressions',
    'lhs_table' => 'expressions',
    'lhs_key' => 'id',
    'rhs_module' => 'Expressions',
    'rhs_table' => 'expressions',
    'rhs_key' => 'parent_exp_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_modified_user' => 
  array (
    'name' => 'contracts_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_created_by' => 
  array (
    'name' => 'contracts_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_assigned_user' => 
  array (
    'name' => 'contracts_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_team_count_relationship' => 
  array (
    'name' => 'contracts_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_teams' => 
  array (
    'name' => 'contracts_teams',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'contracts_team' => 
  array (
    'name' => 'contracts_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'contracts_contract_types' => 
  array (
    'name' => 'contracts_contract_types',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'type',
    'rhs_module' => 'ContractTypes',
    'rhs_table' => 'contract_types',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
  ),
  'contract_notes' => 
  array (
    'name' => 'contract_notes',
    'lhs_module' => 'Contracts',
    'lhs_table' => 'contracts',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Contracts',
    'relationship_type' => 'one-to-many',
  ),
  'account_contracts' => 
  array (
    'name' => 'account_contracts',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'account_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_team_count_relationship' => 
  array (
    'name' => 'kbdocuments_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_teams' => 
  array (
    'name' => 'kbdocuments_teams',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbdocuments_team' => 
  array (
    'name' => 'kbdocuments_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocument_revisions' => 
  array (
    'name' => 'kbdocument_revisions',
    'lhs_module' => 'KBDocuments',
    'lhs_table' => 'kbdocuments',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentRevisions',
    'rhs_table' => 'kbdocument_revisions',
    'rhs_key' => 'kbdocument_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_modified_user' => 
  array (
    'name' => 'kbdocuments_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocuments_created_by' => 
  array (
    'name' => 'kbdocuments_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kb_assigned_user' => 
  array (
    'name' => 'kb_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdoc_approver_user' => 
  array (
    'name' => 'kbdoc_approver_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'kbdoc_approver_id',
    'relationship_type' => 'one-to-many',
  ),
  'case_kbdocuments' => 
  array (
    'name' => 'case_kbdocuments',
    'lhs_module' => 'Cases',
    'lhs_table' => 'cases',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Cases',
  ),
  'email_kbdocuments' => 
  array (
    'name' => 'email_kbdocuments',
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocuments',
    'rhs_table' => 'kbdocuments',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Emails',
  ),
  'kbrev_revisions_created_by' => 
  array (
    'name' => 'kbrev_revisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentRevisions',
    'rhs_table' => 'kbdocument_revisions',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbtags_team_count_relationship' => 
  array (
    'name' => 'kbtags_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBTags',
    'rhs_table' => 'kbtags',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbtags_teams' => 
  array (
    'name' => 'kbtags_teams',
    'lhs_module' => 'KBTags',
    'lhs_table' => 'kbtags',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbtags_team' => 
  array (
    'name' => 'kbtags_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBTags',
    'rhs_table' => 'kbtags',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocumentkbtags_team_count_relationship' => 
  array (
    'name' => 'kbdocumentkbtags_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentKBTags',
    'rhs_table' => 'kbdocuments_kbtags',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbdocumentkbtags_teams' => 
  array (
    'name' => 'kbdocumentkbtags_teams',
    'lhs_module' => 'KBDocumentKBTags',
    'lhs_table' => 'kbdocuments_kbtags',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbdocumentkbtags_team' => 
  array (
    'name' => 'kbdocumentkbtags_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentKBTags',
    'rhs_table' => 'kbdocuments_kbtags',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbrevisions_created_by' => 
  array (
    'name' => 'kbrevisions_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'KBDocumentKBTags',
    'rhs_table' => 'kbdocuments_kbtags',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_team_count_relationship' => 
  array (
    'name' => 'kbcontents_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'kbcontents_teams' => 
  array (
    'name' => 'kbcontents_teams',
    'lhs_module' => 'KBContents',
    'lhs_table' => 'kbcontents',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'kbcontents_team' => 
  array (
    'name' => 'kbcontents_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'KBContents',
    'rhs_table' => 'kbcontents',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_modified_user' => 
  array (
    'name' => 'sugarfeed_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_created_by' => 
  array (
    'name' => 'sugarfeed_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_team_count_relationship' => 
  array (
    'name' => 'sugarfeed_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_teams' => 
  array (
    'name' => 'sugarfeed_teams',
    'lhs_module' => 'SugarFeed',
    'lhs_table' => 'sugarfeed',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'sugarfeed_team' => 
  array (
    'name' => 'sugarfeed_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfeed_assigned_user' => 
  array (
    'name' => 'sugarfeed_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFeed',
    'rhs_table' => 'sugarfeed',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_modified_user' => 
  array (
    'name' => 'notifications_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_created_by' => 
  array (
    'name' => 'notifications_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'notifications_assigned_user' => 
  array (
    'name' => 'notifications_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Notifications',
    'rhs_table' => 'notifications',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_modified_user' => 
  array (
    'name' => 'eapm_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_created_by' => 
  array (
    'name' => 'eapm_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'eapm_assigned_user' => 
  array (
    'name' => 'eapm_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EAPM',
    'rhs_table' => 'eapm',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_modified_user' => 
  array (
    'name' => 'oauthkeys_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_created_by' => 
  array (
    'name' => 'oauthkeys_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'oauthkeys_assigned_user' => 
  array (
    'name' => 'oauthkeys_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthKeys',
    'rhs_table' => 'oauthkeys',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'consumer_tokens' => 
  array (
    'name' => 'consumer_tokens',
    'lhs_module' => 'OAuthKeys',
    'lhs_table' => 'oauth_consumer',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'consumer',
    'relationship_type' => 'one-to-many',
  ),
  'oauthtokens_assigned_user' => 
  array (
    'name' => 'oauthtokens_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'OAuthTokens',
    'rhs_table' => 'oauth_tokens',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_modified_user' => 
  array (
    'name' => 'sugarfavorites_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_created_by' => 
  array (
    'name' => 'sugarfavorites_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'sugarfavorites_assigned_user' => 
  array (
    'name' => 'sugarfavorites_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'SugarFavorites',
    'rhs_table' => 'sugarfavorites',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_auspicio_modified_user' => 
  array (
    'name' => 'ee_auspicio_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Auspicio',
    'rhs_table' => 'ee_auspicio',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_auspicio_created_by' => 
  array (
    'name' => 'ee_auspicio_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Auspicio',
    'rhs_table' => 'ee_auspicio',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_auspicio_team_count_relationship' => 
  array (
    'name' => 'ee_auspicio_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Auspicio',
    'rhs_table' => 'ee_auspicio',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_auspicio_teams' => 
  array (
    'name' => 'ee_auspicio_teams',
    'lhs_module' => 'ee_Auspicio',
    'lhs_table' => 'ee_auspicio',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_auspicio_team' => 
  array (
    'name' => 'ee_auspicio_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Auspicio',
    'rhs_table' => 'ee_auspicio',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_auspicio_assigned_user' => 
  array (
    'name' => 'ee_auspicio_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Auspicio',
    'rhs_table' => 'ee_auspicio',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ac_certificado_modified_user' => 
  array (
    'name' => 'ac_certificado_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ac_Certificado',
    'rhs_table' => 'ac_certificado',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ac_certificado_created_by' => 
  array (
    'name' => 'ac_certificado_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ac_Certificado',
    'rhs_table' => 'ac_certificado',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ac_certificado_team_count_relationship' => 
  array (
    'name' => 'ac_certificado_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ac_Certificado',
    'rhs_table' => 'ac_certificado',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ac_certificado_teams' => 
  array (
    'name' => 'ac_certificado_teams',
    'lhs_module' => 'ac_Certificado',
    'lhs_table' => 'ac_certificado',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ac_certificado_team' => 
  array (
    'name' => 'ac_certificado_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ac_Certificado',
    'rhs_table' => 'ac_certificado',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ac_certificado_assigned_user' => 
  array (
    'name' => 'ac_certificado_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ac_Certificado',
    'rhs_table' => 'ac_certificado',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ciudad_modified_user' => 
  array (
    'name' => 'ee_ciudad_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Ciudad',
    'rhs_table' => 'ee_ciudad',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ciudad_created_by' => 
  array (
    'name' => 'ee_ciudad_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Ciudad',
    'rhs_table' => 'ee_ciudad',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ciudad_team_count_relationship' => 
  array (
    'name' => 'ee_ciudad_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Ciudad',
    'rhs_table' => 'ee_ciudad',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ciudad_teams' => 
  array (
    'name' => 'ee_ciudad_teams',
    'lhs_module' => 'ee_Ciudad',
    'lhs_table' => 'ee_ciudad',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_ciudad_team' => 
  array (
    'name' => 'ee_ciudad_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Ciudad',
    'rhs_table' => 'ee_ciudad',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ciudad_assigned_user' => 
  array (
    'name' => 'ee_ciudad_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Ciudad',
    'rhs_table' => 'ee_ciudad',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_detallemedio_modified_user' => 
  array (
    'name' => 'ee_detallemedio_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_DetalleMedio',
    'rhs_table' => 'ee_detallemedio',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_detallemedio_created_by' => 
  array (
    'name' => 'ee_detallemedio_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_DetalleMedio',
    'rhs_table' => 'ee_detallemedio',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_detallemedio_team_count_relationship' => 
  array (
    'name' => 'ee_detallemedio_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_DetalleMedio',
    'rhs_table' => 'ee_detallemedio',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_detallemedio_teams' => 
  array (
    'name' => 'ee_detallemedio_teams',
    'lhs_module' => 'EE_DetalleMedio',
    'lhs_table' => 'ee_detallemedio',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_detallemedio_team' => 
  array (
    'name' => 'ee_detallemedio_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_DetalleMedio',
    'rhs_table' => 'ee_detallemedio',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_detallemedio_assigned_user' => 
  array (
    'name' => 'ee_detallemedio_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_DetalleMedio',
    'rhs_table' => 'ee_detallemedio',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_fidelizacion_modified_user' => 
  array (
    'name' => 'ee_fidelizacion_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Fidelizacion',
    'rhs_table' => 'ee_fidelizacion',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_fidelizacion_created_by' => 
  array (
    'name' => 'ee_fidelizacion_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Fidelizacion',
    'rhs_table' => 'ee_fidelizacion',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_fidelizacion_team_count_relationship' => 
  array (
    'name' => 'ee_fidelizacion_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Fidelizacion',
    'rhs_table' => 'ee_fidelizacion',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_fidelizacion_teams' => 
  array (
    'name' => 'ee_fidelizacion_teams',
    'lhs_module' => 'ee_Fidelizacion',
    'lhs_table' => 'ee_fidelizacion',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_fidelizacion_team' => 
  array (
    'name' => 'ee_fidelizacion_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Fidelizacion',
    'rhs_table' => 'ee_fidelizacion',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_fidelizacion_assigned_user' => 
  array (
    'name' => 'ee_fidelizacion_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Fidelizacion',
    'rhs_table' => 'ee_fidelizacion',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_nacionalidad_modified_user' => 
  array (
    'name' => 'ee_nacionalidad_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Nacionalidad',
    'rhs_table' => 'ee_nacionalidad',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_nacionalidad_created_by' => 
  array (
    'name' => 'ee_nacionalidad_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Nacionalidad',
    'rhs_table' => 'ee_nacionalidad',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_nacionalidad_team_count_relationship' => 
  array (
    'name' => 'ee_nacionalidad_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Nacionalidad',
    'rhs_table' => 'ee_nacionalidad',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_nacionalidad_teams' => 
  array (
    'name' => 'ee_nacionalidad_teams',
    'lhs_module' => 'ee_Nacionalidad',
    'lhs_table' => 'ee_nacionalidad',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_nacionalidad_team' => 
  array (
    'name' => 'ee_nacionalidad_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Nacionalidad',
    'rhs_table' => 'ee_nacionalidad',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_nacionalidad_assigned_user' => 
  array (
    'name' => 'ee_nacionalidad_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Nacionalidad',
    'rhs_table' => 'ee_nacionalidad',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_accionesmejora_modified_user' => 
  array (
    'name' => 'ee_accionesmejora_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_AccionesMejora',
    'rhs_table' => 'ee_accionesmejora',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_accionesmejora_created_by' => 
  array (
    'name' => 'ee_accionesmejora_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_AccionesMejora',
    'rhs_table' => 'ee_accionesmejora',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_accionesmejora_team_count_relationship' => 
  array (
    'name' => 'ee_accionesmejora_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_AccionesMejora',
    'rhs_table' => 'ee_accionesmejora',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_accionesmejora_teams' => 
  array (
    'name' => 'ee_accionesmejora_teams',
    'lhs_module' => 'ee_AccionesMejora',
    'lhs_table' => 'ee_accionesmejora',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_accionesmejora_team' => 
  array (
    'name' => 'ee_accionesmejora_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_AccionesMejora',
    'rhs_table' => 'ee_accionesmejora',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_accionesmejora_assigned_user' => 
  array (
    'name' => 'ee_accionesmejora_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_AccionesMejora',
    'rhs_table' => 'ee_accionesmejora',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cursos_modified_user' => 
  array (
    'name' => 'ee_cursos_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cursos',
    'rhs_table' => 'ee_cursos',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cursos_created_by' => 
  array (
    'name' => 'ee_cursos_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cursos',
    'rhs_table' => 'ee_cursos',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cursos_team_count_relationship' => 
  array (
    'name' => 'ee_cursos_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cursos',
    'rhs_table' => 'ee_cursos',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cursos_teams' => 
  array (
    'name' => 'ee_cursos_teams',
    'lhs_module' => 'ee_Cursos',
    'lhs_table' => 'ee_cursos',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_cursos_team' => 
  array (
    'name' => 'ee_cursos_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cursos',
    'rhs_table' => 'ee_cursos',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cursos_assigned_user' => 
  array (
    'name' => 'ee_cursos_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cursos',
    'rhs_table' => 'ee_cursos',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_modulos_modified_user' => 
  array (
    'name' => 'ee_modulos_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Modulos',
    'rhs_table' => 'ee_modulos',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_modulos_created_by' => 
  array (
    'name' => 'ee_modulos_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Modulos',
    'rhs_table' => 'ee_modulos',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_modulos_team_count_relationship' => 
  array (
    'name' => 'ee_modulos_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Modulos',
    'rhs_table' => 'ee_modulos',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_modulos_teams' => 
  array (
    'name' => 'ee_modulos_teams',
    'lhs_module' => 'ee_Modulos',
    'lhs_table' => 'ee_modulos',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_modulos_team' => 
  array (
    'name' => 'ee_modulos_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Modulos',
    'rhs_table' => 'ee_modulos',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_modulos_assigned_user' => 
  array (
    'name' => 'ee_modulos_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Modulos',
    'rhs_table' => 'ee_modulos',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pmp_modified_user' => 
  array (
    'name' => 'ee_pmp_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_PMP',
    'rhs_table' => 'ee_pmp',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pmp_created_by' => 
  array (
    'name' => 'ee_pmp_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_PMP',
    'rhs_table' => 'ee_pmp',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pmp_team_count_relationship' => 
  array (
    'name' => 'ee_pmp_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_PMP',
    'rhs_table' => 'ee_pmp',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pmp_teams' => 
  array (
    'name' => 'ee_pmp_teams',
    'lhs_module' => 'ee_PMP',
    'lhs_table' => 'ee_pmp',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_pmp_team' => 
  array (
    'name' => 'ee_pmp_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_PMP',
    'rhs_table' => 'ee_pmp',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pmp_assigned_user' => 
  array (
    'name' => 'ee_pmp_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_PMP',
    'rhs_table' => 'ee_pmp',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_profesores_modified_user' => 
  array (
    'name' => 'ee_profesores_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Profesores',
    'rhs_table' => 'ee_profesores',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_profesores_created_by' => 
  array (
    'name' => 'ee_profesores_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Profesores',
    'rhs_table' => 'ee_profesores',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_profesores_team_count_relationship' => 
  array (
    'name' => 'ee_profesores_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Profesores',
    'rhs_table' => 'ee_profesores',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_profesores_teams' => 
  array (
    'name' => 'ee_profesores_teams',
    'lhs_module' => 'ee_Profesores',
    'lhs_table' => 'ee_profesores',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_profesores_team' => 
  array (
    'name' => 'ee_profesores_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Profesores',
    'rhs_table' => 'ee_profesores',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_profesores_assigned_user' => 
  array (
    'name' => 'ee_profesores_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Profesores',
    'rhs_table' => 'ee_profesores',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_profesores_email_addresses' => 
  array (
    'name' => 'ee_profesores_email_addresses',
    'lhs_module' => 'ee_Profesores',
    'lhs_table' => 'ee_profesores',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ee_Profesores',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'ee_profesores_email_addresses_primary' => 
  array (
    'name' => 'ee_profesores_email_addresses_primary',
    'lhs_module' => 'ee_Profesores',
    'lhs_table' => 'ee_profesores',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'prospect_list_ee_profesores' => 
  array (
    'name' => 'prospect_list_ee_profesores',
    'lhs_module' => 'ProspectLists',
    'lhs_table' => 'prospect_lists',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Profesores',
    'rhs_table' => 'ee_profesores',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'prospect_lists_prospects',
    'join_key_lhs' => 'prospect_list_id',
    'join_key_rhs' => 'related_id',
    'relationship_role_column' => 'related_type',
    'relationship_role_column_value' => 'ee_Profesores',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'varchar',
        'len' => '36',
      ),
      1 => 
      array (
        'name' => 'prospect_list_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      2 => 
      array (
        'name' => 'related_id',
        'type' => 'varchar',
        'len' => '36',
      ),
      3 => 
      array (
        'name' => 'related_type',
        'type' => 'varchar',
        'len' => '25',
      ),
      4 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      5 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '1',
        'default' => '0',
      ),
    ),
  ),
  'ee_programas_modified_user' => 
  array (
    'name' => 'ee_programas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Programas',
    'rhs_table' => 'ee_programas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_programas_created_by' => 
  array (
    'name' => 'ee_programas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Programas',
    'rhs_table' => 'ee_programas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_programas_team_count_relationship' => 
  array (
    'name' => 'ee_programas_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Programas',
    'rhs_table' => 'ee_programas',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_programas_teams' => 
  array (
    'name' => 'ee_programas_teams',
    'lhs_module' => 'ee_Programas',
    'lhs_table' => 'ee_programas',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_programas_team' => 
  array (
    'name' => 'ee_programas_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Programas',
    'rhs_table' => 'ee_programas',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_programas_assigned_user' => 
  array (
    'name' => 'ee_programas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Programas',
    'rhs_table' => 'ee_programas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ejecucionprograma_modified_user' => 
  array (
    'name' => 'ee_ejecucionprograma_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EjecucionPrograma',
    'rhs_table' => 'ee_ejecucionprograma',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ejecucionprograma_created_by' => 
  array (
    'name' => 'ee_ejecucionprograma_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EjecucionPrograma',
    'rhs_table' => 'ee_ejecucionprograma',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ejecucionprograma_team_count_relationship' => 
  array (
    'name' => 'ee_ejecucionprograma_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EjecucionPrograma',
    'rhs_table' => 'ee_ejecucionprograma',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ejecucionprograma_teams' => 
  array (
    'name' => 'ee_ejecucionprograma_teams',
    'lhs_module' => 'ee_EjecucionPrograma',
    'lhs_table' => 'ee_ejecucionprograma',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_ejecucionprograma_team' => 
  array (
    'name' => 'ee_ejecucionprograma_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EjecucionPrograma',
    'rhs_table' => 'ee_ejecucionprograma',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_ejecucionprograma_assigned_user' => 
  array (
    'name' => 'ee_ejecucionprograma_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EjecucionPrograma',
    'rhs_table' => 'ee_ejecucionprograma',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_items_modified_user' => 
  array (
    'name' => 'ee_items_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Items',
    'rhs_table' => 'ee_items',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_items_created_by' => 
  array (
    'name' => 'ee_items_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Items',
    'rhs_table' => 'ee_items',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_items_team_count_relationship' => 
  array (
    'name' => 'ee_items_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Items',
    'rhs_table' => 'ee_items',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_items_teams' => 
  array (
    'name' => 'ee_items_teams',
    'lhs_module' => 'ee_Items',
    'lhs_table' => 'ee_items',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_items_team' => 
  array (
    'name' => 'ee_items_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Items',
    'rhs_table' => 'ee_items',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_items_assigned_user' => 
  array (
    'name' => 'ee_items_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Items',
    'rhs_table' => 'ee_items',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_logistica_modified_user' => 
  array (
    'name' => 'ee_logistica_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Logistica',
    'rhs_table' => 'ee_logistica',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_logistica_created_by' => 
  array (
    'name' => 'ee_logistica_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Logistica',
    'rhs_table' => 'ee_logistica',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_logistica_team_count_relationship' => 
  array (
    'name' => 'ee_logistica_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Logistica',
    'rhs_table' => 'ee_logistica',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_logistica_teams' => 
  array (
    'name' => 'ee_logistica_teams',
    'lhs_module' => 'ee_Logistica',
    'lhs_table' => 'ee_logistica',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_logistica_team' => 
  array (
    'name' => 'ee_logistica_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Logistica',
    'rhs_table' => 'ee_logistica',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_logistica_assigned_user' => 
  array (
    'name' => 'ee_logistica_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Logistica',
    'rhs_table' => 'ee_logistica',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cobranzas_modified_user' => 
  array (
    'name' => 'ee_cobranzas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cobranzas',
    'rhs_table' => 'ee_cobranzas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cobranzas_created_by' => 
  array (
    'name' => 'ee_cobranzas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cobranzas',
    'rhs_table' => 'ee_cobranzas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cobranzas_team_count_relationship' => 
  array (
    'name' => 'ee_cobranzas_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cobranzas',
    'rhs_table' => 'ee_cobranzas',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cobranzas_teams' => 
  array (
    'name' => 'ee_cobranzas_teams',
    'lhs_module' => 'ee_Cobranzas',
    'lhs_table' => 'ee_cobranzas',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_cobranzas_team' => 
  array (
    'name' => 'ee_cobranzas_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cobranzas',
    'rhs_table' => 'ee_cobranzas',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_cobranzas_assigned_user' => 
  array (
    'name' => 'ee_cobranzas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Cobranzas',
    'rhs_table' => 'ee_cobranzas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_contratacion_modified_user' => 
  array (
    'name' => 'ee_contratacion_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Contratacion',
    'rhs_table' => 'ee_contratacion',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_contratacion_created_by' => 
  array (
    'name' => 'ee_contratacion_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Contratacion',
    'rhs_table' => 'ee_contratacion',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_contratacion_team_count_relationship' => 
  array (
    'name' => 'ee_contratacion_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Contratacion',
    'rhs_table' => 'ee_contratacion',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_contratacion_teams' => 
  array (
    'name' => 'ee_contratacion_teams',
    'lhs_module' => 'ee_Contratacion',
    'lhs_table' => 'ee_contratacion',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_contratacion_team' => 
  array (
    'name' => 'ee_contratacion_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Contratacion',
    'rhs_table' => 'ee_contratacion',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_contratacion_assigned_user' => 
  array (
    'name' => 'ee_contratacion_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Contratacion',
    'rhs_table' => 'ee_contratacion',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_documentosparticipantes_modified_user' => 
  array (
    'name' => 'ee_documentosparticipantes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_DocumentosParticipantes',
    'rhs_table' => 'ee_documentosparticipantes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_documentosparticipantes_created_by' => 
  array (
    'name' => 'ee_documentosparticipantes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_DocumentosParticipantes',
    'rhs_table' => 'ee_documentosparticipantes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_documentosparticipantes_team_count_relationship' => 
  array (
    'name' => 'ee_documentosparticipantes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_DocumentosParticipantes',
    'rhs_table' => 'ee_documentosparticipantes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_documentosparticipantes_teams' => 
  array (
    'name' => 'ee_documentosparticipantes_teams',
    'lhs_module' => 'ee_DocumentosParticipantes',
    'lhs_table' => 'ee_documentosparticipantes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_documentosparticipantes_team' => 
  array (
    'name' => 'ee_documentosparticipantes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_DocumentosParticipantes',
    'rhs_table' => 'ee_documentosparticipantes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_documentosparticipantes_assigned_user' => 
  array (
    'name' => 'ee_documentosparticipantes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_DocumentosParticipantes',
    'rhs_table' => 'ee_documentosparticipantes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionglobal_modified_user' => 
  array (
    'name' => 'ee_evaluacionglobal_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionGlobal',
    'rhs_table' => 'ee_evaluacionglobal',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionglobal_created_by' => 
  array (
    'name' => 'ee_evaluacionglobal_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionGlobal',
    'rhs_table' => 'ee_evaluacionglobal',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionglobal_team_count_relationship' => 
  array (
    'name' => 'ee_evaluacionglobal_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionGlobal',
    'rhs_table' => 'ee_evaluacionglobal',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionglobal_teams' => 
  array (
    'name' => 'ee_evaluacionglobal_teams',
    'lhs_module' => 'ee_EvaluacionGlobal',
    'lhs_table' => 'ee_evaluacionglobal',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_evaluacionglobal_team' => 
  array (
    'name' => 'ee_evaluacionglobal_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionGlobal',
    'rhs_table' => 'ee_evaluacionglobal',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionglobal_assigned_user' => 
  array (
    'name' => 'ee_evaluacionglobal_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionGlobal',
    'rhs_table' => 'ee_evaluacionglobal',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_participantes_modified_user' => 
  array (
    'name' => 'ee_participantes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Participantes',
    'rhs_table' => 'ee_participantes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_participantes_created_by' => 
  array (
    'name' => 'ee_participantes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Participantes',
    'rhs_table' => 'ee_participantes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_participantes_team_count_relationship' => 
  array (
    'name' => 'ee_participantes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Participantes',
    'rhs_table' => 'ee_participantes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_participantes_teams' => 
  array (
    'name' => 'ee_participantes_teams',
    'lhs_module' => 'ee_Participantes',
    'lhs_table' => 'ee_participantes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_participantes_team' => 
  array (
    'name' => 'ee_participantes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Participantes',
    'rhs_table' => 'ee_participantes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_participantes_assigned_user' => 
  array (
    'name' => 'ee_participantes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Participantes',
    'rhs_table' => 'ee_participantes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_participantes_email_addresses' => 
  array (
    'name' => 'ee_participantes_email_addresses',
    'lhs_module' => 'ee_Participantes',
    'lhs_table' => 'ee_participantes',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ee_Participantes',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'ee_participantes_email_addresses_primary' => 
  array (
    'name' => 'ee_participantes_email_addresses_primary',
    'lhs_module' => 'ee_Participantes',
    'lhs_table' => 'ee_participantes',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'ee_encuestaitc_modified_user' => 
  array (
    'name' => 'ee_encuestaitc_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaITC',
    'rhs_table' => 'ee_encuestaitc',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestaitc_created_by' => 
  array (
    'name' => 'ee_encuestaitc_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaITC',
    'rhs_table' => 'ee_encuestaitc',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestaitc_team_count_relationship' => 
  array (
    'name' => 'ee_encuestaitc_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaITC',
    'rhs_table' => 'ee_encuestaitc',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestaitc_teams' => 
  array (
    'name' => 'ee_encuestaitc_teams',
    'lhs_module' => 'ee_EncuestaITC',
    'lhs_table' => 'ee_encuestaitc',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_encuestaitc_team' => 
  array (
    'name' => 'ee_encuestaitc_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaITC',
    'rhs_table' => 'ee_encuestaitc',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestaitc_assigned_user' => 
  array (
    'name' => 'ee_encuestaitc_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaITC',
    'rhs_table' => 'ee_encuestaitc',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestainstructor_modified_user' => 
  array (
    'name' => 'ee_encuestainstructor_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaInstructor',
    'rhs_table' => 'ee_encuestainstructor',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestainstructor_created_by' => 
  array (
    'name' => 'ee_encuestainstructor_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaInstructor',
    'rhs_table' => 'ee_encuestainstructor',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestainstructor_team_count_relationship' => 
  array (
    'name' => 'ee_encuestainstructor_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaInstructor',
    'rhs_table' => 'ee_encuestainstructor',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestainstructor_teams' => 
  array (
    'name' => 'ee_encuestainstructor_teams',
    'lhs_module' => 'ee_EncuestaInstructor',
    'lhs_table' => 'ee_encuestainstructor',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_encuestainstructor_team' => 
  array (
    'name' => 'ee_encuestainstructor_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaInstructor',
    'rhs_table' => 'ee_encuestainstructor',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_encuestainstructor_assigned_user' => 
  array (
    'name' => 'ee_encuestainstructor_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EncuestaInstructor',
    'rhs_table' => 'ee_encuestainstructor',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionsci_modified_user' => 
  array (
    'name' => 'ee_evaluacionsci_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionSCI',
    'rhs_table' => 'ee_evaluacionsci',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionsci_created_by' => 
  array (
    'name' => 'ee_evaluacionsci_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionSCI',
    'rhs_table' => 'ee_evaluacionsci',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionsci_team_count_relationship' => 
  array (
    'name' => 'ee_evaluacionsci_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionSCI',
    'rhs_table' => 'ee_evaluacionsci',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionsci_teams' => 
  array (
    'name' => 'ee_evaluacionsci_teams',
    'lhs_module' => 'ee_EvaluacionSCI',
    'lhs_table' => 'ee_evaluacionsci',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_evaluacionsci_team' => 
  array (
    'name' => 'ee_evaluacionsci_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionSCI',
    'rhs_table' => 'ee_evaluacionsci',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_evaluacionsci_assigned_user' => 
  array (
    'name' => 'ee_evaluacionsci_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_EvaluacionSCI',
    'rhs_table' => 'ee_evaluacionsci',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_mediocontacto_modified_user' => 
  array (
    'name' => 'ee_mediocontacto_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_MedioContacto',
    'rhs_table' => 'ee_mediocontacto',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_mediocontacto_created_by' => 
  array (
    'name' => 'ee_mediocontacto_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_MedioContacto',
    'rhs_table' => 'ee_mediocontacto',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_mediocontacto_team_count_relationship' => 
  array (
    'name' => 'ee_mediocontacto_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_MedioContacto',
    'rhs_table' => 'ee_mediocontacto',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_mediocontacto_teams' => 
  array (
    'name' => 'ee_mediocontacto_teams',
    'lhs_module' => 'EE_MedioContacto',
    'lhs_table' => 'ee_mediocontacto',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_mediocontacto_team' => 
  array (
    'name' => 'ee_mediocontacto_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_MedioContacto',
    'rhs_table' => 'ee_mediocontacto',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_mediocontacto_assigned_user' => 
  array (
    'name' => 'ee_mediocontacto_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'EE_MedioContacto',
    'rhs_table' => 'ee_mediocontacto',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pais_modified_user' => 
  array (
    'name' => 'ee_pais_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Pais',
    'rhs_table' => 'ee_pais',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pais_created_by' => 
  array (
    'name' => 'ee_pais_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Pais',
    'rhs_table' => 'ee_pais',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pais_team_count_relationship' => 
  array (
    'name' => 'ee_pais_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Pais',
    'rhs_table' => 'ee_pais',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pais_teams' => 
  array (
    'name' => 'ee_pais_teams',
    'lhs_module' => 'ee_Pais',
    'lhs_table' => 'ee_pais',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_pais_team' => 
  array (
    'name' => 'ee_pais_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Pais',
    'rhs_table' => 'ee_pais',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_pais_assigned_user' => 
  array (
    'name' => 'ee_pais_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Pais',
    'rhs_table' => 'ee_pais',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pro_plantillas_modified_user' => 
  array (
    'name' => 'pro_plantillas_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pro_Plantillas',
    'rhs_table' => 'pro_plantillas',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'pro_plantillas_created_by' => 
  array (
    'name' => 'pro_plantillas_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pro_Plantillas',
    'rhs_table' => 'pro_plantillas',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'pro_plantillas_team_count_relationship' => 
  array (
    'name' => 'pro_plantillas_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'pro_Plantillas',
    'rhs_table' => 'pro_plantillas',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'pro_plantillas_teams' => 
  array (
    'name' => 'pro_plantillas_teams',
    'lhs_module' => 'pro_Plantillas',
    'lhs_table' => 'pro_plantillas',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'pro_plantillas_team' => 
  array (
    'name' => 'pro_plantillas_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'pro_Plantillas',
    'rhs_table' => 'pro_plantillas',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'pro_plantillas_assigned_user' => 
  array (
    'name' => 'pro_plantillas_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'pro_Plantillas',
    'rhs_table' => 'pro_plantillas',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_proveedor_modified_user' => 
  array (
    'name' => 'ee_proveedor_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Proveedor',
    'rhs_table' => 'ee_proveedor',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_proveedor_created_by' => 
  array (
    'name' => 'ee_proveedor_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Proveedor',
    'rhs_table' => 'ee_proveedor',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_proveedor_team_count_relationship' => 
  array (
    'name' => 'ee_proveedor_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Proveedor',
    'rhs_table' => 'ee_proveedor',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_proveedor_teams' => 
  array (
    'name' => 'ee_proveedor_teams',
    'lhs_module' => 'ee_Proveedor',
    'lhs_table' => 'ee_proveedor',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_proveedor_team' => 
  array (
    'name' => 'ee_proveedor_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Proveedor',
    'rhs_table' => 'ee_proveedor',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_proveedor_assigned_user' => 
  array (
    'name' => 'ee_proveedor_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Proveedor',
    'rhs_table' => 'ee_proveedor',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_proveedor_email_addresses' => 
  array (
    'name' => 'ee_proveedor_email_addresses',
    'lhs_module' => 'ee_Proveedor',
    'lhs_table' => 'ee_proveedor',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'ee_Proveedor',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'ee_proveedor_email_addresses_primary' => 
  array (
    'name' => 'ee_proveedor_email_addresses_primary',
    'lhs_module' => 'ee_Proveedor',
    'lhs_table' => 'ee_proveedor',
    'lhs_key' => 'id',
    'rhs_module' => 'EmailAddresses',
    'rhs_table' => 'email_addresses',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'email_addr_bean_rel',
    'join_key_lhs' => 'bean_id',
    'join_key_rhs' => 'email_address_id',
    'relationship_role_column' => 'primary_address',
    'relationship_role_column_value' => '1',
    'fields' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      1 => 
      array (
        'name' => 'email_address_id',
        'type' => 'id',
        'required' => true,
      ),
      2 => 
      array (
        'name' => 'bean_id',
        'type' => 'id',
        'required' => true,
      ),
      3 => 
      array (
        'name' => 'bean_module',
        'type' => 'varchar',
        'len' => 100,
        'required' => true,
      ),
      4 => 
      array (
        'name' => 'primary_address',
        'type' => 'bool',
        'default' => '0',
      ),
      5 => 
      array (
        'name' => 'reply_to_address',
        'type' => 'bool',
        'default' => '0',
      ),
      6 => 
      array (
        'name' => 'date_created',
        'type' => 'datetime',
      ),
      7 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      8 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'default' => 0,
      ),
    ),
  ),
  'ee_provincia_modified_user' => 
  array (
    'name' => 'ee_provincia_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Provincia',
    'rhs_table' => 'ee_provincia',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_provincia_created_by' => 
  array (
    'name' => 'ee_provincia_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Provincia',
    'rhs_table' => 'ee_provincia',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'ee_provincia_team_count_relationship' => 
  array (
    'name' => 'ee_provincia_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Provincia',
    'rhs_table' => 'ee_provincia',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_provincia_teams' => 
  array (
    'name' => 'ee_provincia_teams',
    'lhs_module' => 'ee_Provincia',
    'lhs_table' => 'ee_provincia',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'ee_provincia_team' => 
  array (
    'name' => 'ee_provincia_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Provincia',
    'rhs_table' => 'ee_provincia',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'ee_provincia_assigned_user' => 
  array (
    'name' => 'ee_provincia_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ee_Provincia',
    'rhs_table' => 'ee_provincia',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gm_reportes_modified_user' => 
  array (
    'name' => 'gm_reportes_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gm_Reportes',
    'rhs_table' => 'gm_reportes',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
  ),
  'gm_reportes_created_by' => 
  array (
    'name' => 'gm_reportes_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gm_Reportes',
    'rhs_table' => 'gm_reportes',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
  ),
  'gm_reportes_team_count_relationship' => 
  array (
    'name' => 'gm_reportes_team_count_relationship',
    'lhs_module' => 'Teams',
    'lhs_table' => 'team_sets',
    'lhs_key' => 'id',
    'rhs_module' => 'gm_Reportes',
    'rhs_table' => 'gm_reportes',
    'rhs_key' => 'team_set_id',
    'relationship_type' => 'one-to-many',
  ),
  'gm_reportes_teams' => 
  array (
    'name' => 'gm_reportes_teams',
    'lhs_module' => 'gm_Reportes',
    'lhs_table' => 'gm_reportes',
    'lhs_key' => 'team_set_id',
    'rhs_module' => 'Teams',
    'rhs_table' => 'teams',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'team_sets_teams',
    'join_key_lhs' => 'team_set_id',
    'join_key_rhs' => 'team_id',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'vname' => 'LBL_ID',
        'type' => 'id',
        'required' => true,
      ),
      0 => 
      array (
        'name' => 'team_set_id',
        'type' => 'id',
      ),
      1 => 
      array (
        'name' => 'team_id',
        'type' => 'id',
      ),
      2 => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      3 => 
      array (
        'name' => 'deleted',
        'type' => 'bool',
        'len' => '',
        'default' => '0',
      ),
    ),
  ),
  'gm_reportes_team' => 
  array (
    'name' => 'gm_reportes_team',
    'lhs_module' => 'Teams',
    'lhs_table' => 'teams',
    'lhs_key' => 'id',
    'rhs_module' => 'gm_Reportes',
    'rhs_table' => 'gm_reportes',
    'rhs_key' => 'team_id',
    'relationship_type' => 'one-to-many',
  ),
  'gm_reportes_assigned_user' => 
  array (
    'name' => 'gm_reportes_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'gm_Reportes',
    'rhs_table' => 'gm_reportes',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
  ),
);