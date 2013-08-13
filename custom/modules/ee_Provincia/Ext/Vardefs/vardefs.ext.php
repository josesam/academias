<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-21 16:42:27
$dictionary["ee_Provincia"]["fields"]["ee_pais_ee_provincia"] = array (
  'name' => 'ee_pais_ee_provincia',
  'type' => 'link',
  'relationship' => 'ee_pais_ee_provincia',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PAIS_EE_PROVINCIA_FROM_EE_PAIS_TITLE',
  'id_name' => 'ee_pais_ee_provinciaee_pais_ida',
);
$dictionary["ee_Provincia"]["fields"]["ee_pais_ee_provincia_name"] = array (
  'name' => 'ee_pais_ee_provincia_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PAIS_EE_PROVINCIA_FROM_EE_PAIS_TITLE',
  'save' => true,
  'id_name' => 'ee_pais_ee_provinciaee_pais_ida',
  'link' => 'ee_pais_ee_provincia',
  'table' => 'ee_pais',
  'module' => 'ee_Pais',
  'rname' => 'name',
);
$dictionary["ee_Provincia"]["fields"]["ee_pais_ee_provinciaee_pais_ida"] = array (
  'name' => 'ee_pais_ee_provinciaee_pais_ida',
  'type' => 'link',
  'relationship' => 'ee_pais_ee_provincia',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_PAIS_EE_PROVINCIA_FROM_EE_PROVINCIA_TITLE',
);


// created: 2012-03-21 16:41:57
$dictionary["ee_Provincia"]["fields"]["ee_provincia_ee_ciudad"] = array (
  'name' => 'ee_provincia_ee_ciudad',
  'type' => 'link',
  'relationship' => 'ee_provincia_ee_ciudad',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_EE_PROVINCIA_EE_CIUDAD_FROM_EE_CIUDAD_TITLE',
);

?>