<?php
// created: 2012-05-19 12:06:14
$dictionary["ee_Cobranzas"]["fields"]["opportunities_ee_cobranzas"] = array (
  'name' => 'opportunities_ee_cobranzas',
  'type' => 'link',
  'relationship' => 'opportunities_ee_cobranzas',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_ee_cobranzasopportunities_ida',
);
$dictionary["ee_Cobranzas"]["fields"]["opportunities_ee_cobranzas_name"] = array (
  'name' => 'opportunities_ee_cobranzas_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_ee_cobranzasopportunities_ida',
  'link' => 'opportunities_ee_cobranzas',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["ee_Cobranzas"]["fields"]["opportunities_ee_cobranzasopportunities_ida"] = array (
  'name' => 'opportunities_ee_cobranzasopportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_ee_cobranzas',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_EE_COBRANZAS_TITLE',
);
