<?php 
 //WARNING: The contents of this file are auto-generated


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


/* 
 * 
 */

$dictionary['ee_EncuestaInstructor']['fields']['encuestas2'] = array (
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

$dictionary["ee_EncuestaInstructor"]["fields"]["idprofesor"]=array(
    'required' => true,
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

$dictionary["ee_EncuestaInstructor"]["fields"]["idmodulo"]=array(
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

$dictionary["ee_EncuestaInstructor"]["fields"]["modulo"]['required']=true;
$dictionary["ee_EncuestaInstructor"]["fields"]["instructor"]['required']=true;


$dictionary["ee_EncuestaInstructor"]["fields"]["grupo"]=array(
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