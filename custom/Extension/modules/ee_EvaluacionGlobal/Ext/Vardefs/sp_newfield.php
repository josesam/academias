<?php
/* 
 * 
 */





$dictionary['ee_EvaluacionGlobal']['fields']['encuestas'] = array (
'name' => 'encuestas',
'vname' => 'LBL_ENCUESTAS',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getF3Widget',
        'returns' => 'html',
        'include' => 'include/SugarComentarios/SugarComentarios.php',
      ),
'source' => 'non-db',
'group' => 'encuestas',
'merge_filter' => 'enabled',
);

$dictionary['ee_EvaluacionGlobal']['fields']['encuestas2'] = array (
'name' => 'encuestas2',
'vname' => 'LBL_ENCUESTAS2',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getF2Widget',
        'returns' => 'html',
        'include' => 'include/SugarComentarios/SugarComentarios.php',
      ),
'source' => 'non-db',
'group' => 'encuestas',
'merge_filter' => 'enabled',
);

$dictionary['ee_EvaluacionGlobal']['fields']['encuestas1'] = array (
'name' => 'encuestas1',
'vname' => 'LBL_ENCUESTAS1',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getF1Widget',
        'returns' => 'html',
        'include' => 'include/SugarComentarios/SugarComentarios.php',
      ),
'source' => 'non-db',
'group' => 'encuestas',
'merge_filter' => 'enabled',
);

$dictionary["ee_EvaluacionGlobal"]["fields"]["profesor"]=array(
    'required' => false,
    'name' => 'profesor',
    'vname' => 'LBL_PROFESOR',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Profesor',
    'help' => 'Profesor',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);




$dictionary["ee_EvaluacionGlobal"]["fields"]["modulo"]=array(
    'required' => true,
    'name' => 'modulo',
    'vname' => 'LBL_MODULO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Modulo',
    'help' => 'Modulo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',



);

$dictionary["ee_EvaluacionGlobal"]["fields"]["participante"]=array(
    'required' => true,
    'name' => 'participante',
    'vname' => 'LBL_PARTICIPANTE',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Participante',
    'help' => 'Participante',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',



);

$dictionary["ee_EvaluacionGlobal"]["fields"]["idprofesor"]=array(
    'required' => false,
    'name' => 'idprofesor',
    'vname' => 'LBL_IDPROFESOR',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Id del Profesor',
    'help' => 'Id del Profesor',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
    
);

$dictionary["ee_EvaluacionGlobal"]["fields"]["idmodulo"]=array(
    'required' => true,
    'name' => 'idmodulo',
    'vname' => 'LBL_IDMODULO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Id del Modulo',
    'help' => 'Id del Modulo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',    
);

$dictionary["ee_EvaluacionGlobal"]["fields"]["idparticipante"]=array(
    'required' => true,
    'name' => 'idparticipante',
    'vname' => 'LBL_IDPARTICIPANTE',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Id del Participante',
    'help' => 'Id del Participante',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);


$dictionary["ee_EvaluacionGlobal"]["fields"]["cargo"]=array(
    'required' => false,
    'name' => 'cargo',
    'vname' => 'LBL_CARGO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Cargo',
    'help' => 'Cargo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);

$dictionary["ee_EvaluacionGlobal"]["fields"]["grupo"]=array(
    'required' => false,
    'name' => 'grupo',
    'vname' => 'LBL_GRUPO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Grupo',
    'help' => 'Grupo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '100',    
);


?>

