<?php
// created: 2012-07-18 15:00:18
$dictionary["ee_EvaluacionSCI"]["fields"]["ee_ejecucionprograma_ee_evaluacionsci"] = array (
  'name' => 'ee_ejecucionprograma_ee_evaluacionsci',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_evaluacionsci',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONSCI_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'id_name' => 'ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida',
);
$dictionary["ee_EvaluacionSCI"]["fields"]["ee_ejecucionprograma_ee_evaluacionsci_name"] = array (
  'name' => 'ee_ejecucionprograma_ee_evaluacionsci_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONSCI_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'save' => true,
  'id_name' => 'ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida',
  'link' => 'ee_ejecucionprograma_ee_evaluacionsci',
  'table' => 'ee_ejecucionprograma',
  'module' => 'ee_EjecucionPrograma',
  'rname' => 'name',
);
$dictionary["ee_EvaluacionSCI"]["fields"]["ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida"] = array (
  'name' => 'ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_evaluacionsci',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_EVALUACIONSCI_FROM_EE_EVALUACIONSCI_TITLE',
);
