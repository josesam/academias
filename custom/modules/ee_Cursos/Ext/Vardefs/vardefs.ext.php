<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-12 10:14:37
$dictionary["ee_Cursos"]["fields"]["ee_profesores_ee_cursos"] = array (
  'name' => 'ee_profesores_ee_cursos',
  'type' => 'link',
  'relationship' => 'ee_profesores_ee_cursos',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROFESORES_EE_CURSOS_FROM_EE_PROFESORES_TITLE',
  'id_name' => 'ee_profesores_ee_cursosee_profesores_ida',
);
$dictionary["ee_Cursos"]["fields"]["ee_profesores_ee_cursos_name"] = array (
  'name' => 'ee_profesores_ee_cursos_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROFESORES_EE_CURSOS_FROM_EE_PROFESORES_TITLE',
  'save' => true,
  'id_name' => 'ee_profesores_ee_cursosee_profesores_ida',
  'link' => 'ee_profesores_ee_cursos',
  'table' => 'ee_profesores',
  'module' => 'ee_Profesores',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ee_Cursos"]["fields"]["ee_profesores_ee_cursosee_profesores_ida"] = array (
  'name' => 'ee_profesores_ee_cursosee_profesores_ida',
  'type' => 'link',
  'relationship' => 'ee_profesores_ee_cursos',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_PROFESORES_EE_CURSOS_FROM_EE_CURSOS_TITLE',
);

?>