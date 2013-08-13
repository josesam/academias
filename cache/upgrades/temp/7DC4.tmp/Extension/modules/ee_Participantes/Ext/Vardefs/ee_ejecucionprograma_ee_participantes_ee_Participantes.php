<?php
// created: 2012-03-12 16:43:00
$dictionary["ee_Participantes"]["fields"]["ee_ejecucionprograma_ee_participantes"] = array (
  'name' => 'ee_ejecucionprograma_ee_participantes',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_participantes',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_PARTICIPANTES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'id_name' => 'ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida',
);
$dictionary["ee_Participantes"]["fields"]["ee_ejecucionprograma_ee_participantes_name"] = array (
  'name' => 'ee_ejecucionprograma_ee_participantes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_PARTICIPANTES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'save' => true,
  'id_name' => 'ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida',
  'link' => 'ee_ejecucionprograma_ee_participantes',
  'table' => 'ee_ejecucionprograma',
  'module' => 'ee_EjecucionPrograma',
  'rname' => 'name',
);
$dictionary["ee_Participantes"]["fields"]["ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida"] = array (
  'name' => 'ee_ejecucionprograma_ee_participantesee_ejecucionprograma_ida',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_participantes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_PARTICIPANTES_FROM_EE_PARTICIPANTES_TITLE',
);
