<?php
// created: 2012-07-03 05:35:55
$dictionary["ee_EncuestaInstructor"]["fields"]["ee_ejecucionprograma_ee_encuestainstructor"] = array (
  'name' => 'ee_ejecucionprograma_ee_encuestainstructor',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_encuestainstructor',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAINSTRUCTOR_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'id_name' => 'ee_ejecuci54adrograma_ida',
);
$dictionary["ee_EncuestaInstructor"]["fields"]["ee_ejecucionprograma_ee_encuestainstructor_name"] = array (
  'name' => 'ee_ejecucionprograma_ee_encuestainstructor_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAINSTRUCTOR_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'save' => true,
  'id_name' => 'ee_ejecuci54adrograma_ida',
  'link' => 'ee_ejecucionprograma_ee_encuestainstructor',
  'table' => 'ee_ejecucionprograma',
  'module' => 'ee_EjecucionPrograma',
  'rname' => 'name',
);
$dictionary["ee_EncuestaInstructor"]["fields"]["ee_ejecuci54adrograma_ida"] = array (
  'name' => 'ee_ejecuci54adrograma_ida',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_encuestainstructor',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAINSTRUCTOR_FROM_EE_ENCUESTAINSTRUCTOR_TITLE',
);
