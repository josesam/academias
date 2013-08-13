<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-12 16:43:00
$dictionary["Note"]["fields"]["ee_ejecucionprograma_activities_notes"] = array (
  'name' => 'ee_ejecucionprograma_activities_notes',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_activities_notes',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_ACTIVITIES_NOTES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
);


// created: 2012-03-12 16:43:00
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


// created: 2012-03-12 10:14:36
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

?>