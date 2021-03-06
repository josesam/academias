<?php
// created: 2012-03-12 16:26:24
$dictionary["ee_Fidelizacion"]["fields"]["accounts_ee_fidelizacion"] = array (
  'name' => 'accounts_ee_fidelizacion',
  'type' => 'link',
  'relationship' => 'accounts_ee_fidelizacion',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_EE_FIDELIZACION_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ee_fidelizacionaccounts_ida',
);
$dictionary["ee_Fidelizacion"]["fields"]["accounts_ee_fidelizacion_name"] = array (
  'name' => 'accounts_ee_fidelizacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_EE_FIDELIZACION_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ee_fidelizacionaccounts_ida',
  'link' => 'accounts_ee_fidelizacion',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ee_Fidelizacion"]["fields"]["accounts_ee_fidelizacionaccounts_ida"] = array (
  'name' => 'accounts_ee_fidelizacionaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ee_fidelizacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_EE_FIDELIZACION_FROM_EE_FIDELIZACION_TITLE',
);
