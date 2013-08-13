<?php
// created: 2012-03-22 05:05:50
$dictionary["ee_Logistica"]["fields"]["ee_ejecucionprograma_ee_logistica"] = array (
  'name' => 'ee_ejecucionprograma_ee_logistica',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_logistica',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_LOGISTICA_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'id_name' => 'ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida',
);
$dictionary["ee_Logistica"]["fields"]["ee_ejecucionprograma_ee_logistica_name"] = array (
  'name' => 'ee_ejecucionprograma_ee_logistica_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_LOGISTICA_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'save' => true,
  'id_name' => 'ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida',
  'link' => 'ee_ejecucionprograma_ee_logistica',
  'table' => 'ee_ejecucionprograma',
  'module' => 'ee_EjecucionPrograma',
  'rname' => 'name',
);
$dictionary["ee_Logistica"]["fields"]["ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida"] = array (
  'name' => 'ee_ejecucionprograma_ee_logisticaee_ejecucionprograma_ida',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_logistica',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_LOGISTICA_FROM_EE_LOGISTICA_TITLE',
);
