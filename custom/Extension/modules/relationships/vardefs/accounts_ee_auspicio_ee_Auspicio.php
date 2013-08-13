<?php
// created: 2012-05-21 15:05:11
$dictionary["ee_Auspicio"]["fields"]["accounts_ee_auspicio"] = array (
  'name' => 'accounts_ee_auspicio',
  'type' => 'link',
  'relationship' => 'accounts_ee_auspicio',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ee_auspicioaccounts_ida',
);
$dictionary["ee_Auspicio"]["fields"]["accounts_ee_auspicio_name"] = array (
  'name' => 'accounts_ee_auspicio_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ee_auspicioaccounts_ida',
  'link' => 'accounts_ee_auspicio',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ee_Auspicio"]["fields"]["accounts_ee_auspicioaccounts_ida"] = array (
  'name' => 'accounts_ee_auspicioaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ee_auspicio',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_EE_AUSPICIO_TITLE',
);
