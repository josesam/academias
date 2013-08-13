<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-21 16:41:57
$dictionary["ee_Ciudad"]["fields"]["ee_provincia_ee_ciudad"] = array (
  'name' => 'ee_provincia_ee_ciudad',
  'type' => 'link',
  'relationship' => 'ee_provincia_ee_ciudad',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROVINCIA_EE_CIUDAD_FROM_EE_PROVINCIA_TITLE',
  'id_name' => 'ee_provincia_ee_ciudadee_provincia_ida',
);
$dictionary["ee_Ciudad"]["fields"]["ee_provincia_ee_ciudad_name"] = array (
  'name' => 'ee_provincia_ee_ciudad_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROVINCIA_EE_CIUDAD_FROM_EE_PROVINCIA_TITLE',
  'save' => true,
  'id_name' => 'ee_provincia_ee_ciudadee_provincia_ida',
  'link' => 'ee_provincia_ee_ciudad',
  'table' => 'ee_provincia',
  'module' => 'ee_Provincia',
  'rname' => 'name',
);
$dictionary["ee_Ciudad"]["fields"]["ee_provincia_ee_ciudadee_provincia_ida"] = array (
  'name' => 'ee_provincia_ee_ciudadee_provincia_ida',
  'type' => 'link',
  'relationship' => 'ee_provincia_ee_ciudad',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_PROVINCIA_EE_CIUDAD_FROM_EE_CIUDAD_TITLE',
);

?>