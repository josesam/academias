<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-03 06:04:25
$dictionary["ee_AccionesMejora"]["fields"]["ee_ejecucionprograma_ee_accionesmejora"] = array (
  'name' => 'ee_ejecucionprograma_ee_accionesmejora',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_accionesmejora',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ACCIONESMEJORA_FROM_EE_EJECUCIONPROGRAMA_TITLE',
);


// created: 2012-03-12 10:14:36
$dictionary["ee_AccionesMejora"]["fields"]["ee_profesores_ee_accionesmejora"] = array (
  'name' => 'ee_profesores_ee_accionesmejora',
  'type' => 'link',
  'relationship' => 'ee_profesores_ee_accionesmejora',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROFESORES_EE_ACCIONESMEJORA_FROM_EE_PROFESORES_TITLE',
  'id_name' => 'ee_profesores_ee_accionesmejoraee_profesores_ida',
);
$dictionary["ee_AccionesMejora"]["fields"]["ee_profesores_ee_accionesmejora_name"] = array (
  'name' => 'ee_profesores_ee_accionesmejora_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_PROFESORES_EE_ACCIONESMEJORA_FROM_EE_PROFESORES_TITLE',
  'save' => true,
  'id_name' => 'ee_profesores_ee_accionesmejoraee_profesores_ida',
  'link' => 'ee_profesores_ee_accionesmejora',
  'table' => 'ee_profesores',
  'module' => 'ee_Profesores',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ee_AccionesMejora"]["fields"]["ee_profesores_ee_accionesmejoraee_profesores_ida"] = array (
  'name' => 'ee_profesores_ee_accionesmejoraee_profesores_ida',
  'type' => 'link',
  'relationship' => 'ee_profesores_ee_accionesmejora',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_PROFESORES_EE_ACCIONESMEJORA_FROM_EE_ACCIONESMEJORA_TITLE',
);

?>