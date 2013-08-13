<?php
// created: 2012-03-22 05:05:56
$dictionary["Note"]["fields"]["ee_ejecucionprograma_notes"] = array (
  'name' => 'ee_ejecucionprograma_notes',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_notes',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_NOTES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'id_name' => 'ee_ejecucionprograma_notesee_ejecucionprograma_ida',
);
$dictionary["Note"]["fields"]["ee_ejecucionprograma_notes_name"] = array (
  'name' => 'ee_ejecucionprograma_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_NOTES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'save' => true,
  'id_name' => 'ee_ejecucionprograma_notesee_ejecucionprograma_ida',
  'link' => 'ee_ejecucionprograma_notes',
  'table' => 'ee_ejecucionprograma',
  'module' => 'ee_EjecucionPrograma',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ee_ejecucionprograma_notesee_ejecucionprograma_ida"] = array (
  'name' => 'ee_ejecucionprograma_notesee_ejecucionprograma_ida',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_NOTES_FROM_NOTES_TITLE',
);
