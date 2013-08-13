<?php
// created: 2012-03-22 05:03:25
$dictionary["Note"]["fields"]["ee_profesores_notes"] = array (
  'name' => 'ee_profesores_notes',
  'type' => 'link',
  'relationship' => 'ee_profesores_notes',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROFESORES_NOTES_FROM_EE_PROFESORES_TITLE',
  'id_name' => 'ee_profesores_notesee_profesores_ida',
);
$dictionary["Note"]["fields"]["ee_profesores_notes_name"] = array (
  'name' => 'ee_profesores_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROFESORES_NOTES_FROM_EE_PROFESORES_TITLE',
  'save' => true,
  'id_name' => 'ee_profesores_notesee_profesores_ida',
  'link' => 'ee_profesores_notes',
  'table' => 'ee_profesores',
  'module' => 'ee_Profesores',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Note"]["fields"]["ee_profesores_notesee_profesores_ida"] = array (
  'name' => 'ee_profesores_notesee_profesores_ida',
  'type' => 'link',
  'relationship' => 'ee_profesores_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_PROFESORES_NOTES_FROM_NOTES_TITLE',
);
