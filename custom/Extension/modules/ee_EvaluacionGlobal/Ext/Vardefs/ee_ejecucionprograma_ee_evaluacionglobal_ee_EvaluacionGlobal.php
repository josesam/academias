<?php
// created: 2012-05-21 08:03:53
$dictionary["ee_EvaluacionGlobal"]["fields"]["ee_ejecucionprograma_ee_evaluacionglobal"] = array (
  'name' => 'ee_ejecucionprograma_ee_evaluacionglobal',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_evaluacionglobal',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONGLOBAL_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'id_name' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
);
$dictionary["ee_EvaluacionGlobal"]["fields"]["ee_ejecucionprograma_ee_evaluacionglobal_name"] = array (
  'name' => 'ee_ejecucionprograma_ee_evaluacionglobal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONGLOBAL_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'save' => true,
  'id_name' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
  'link' => 'ee_ejecucionprograma_ee_evaluacionglobal',
  'table' => 'ee_ejecucionprograma',
  'module' => 'ee_EjecucionPrograma',
  'rname' => 'name',
);
$dictionary["ee_EvaluacionGlobal"]["fields"]["ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida"] = array (
  'name' => 'ee_ejecucionprograma_ee_evaluacionglobalee_ejecucionprograma_ida',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_evaluacionglobal',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONGLOBAL_FROM_EE_EVALUACIONGLOBAL_TITLE',
);
