<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-07-03 06:30:48
$dictionary["ee_EncuestaITC"]["fields"]["ee_ejecucionprograma_ee_encuestaitc"] = array (
  'name' => 'ee_ejecucionprograma_ee_encuestaitc',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_encuestaitc',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAITC_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'id_name' => 'ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida',
);
$dictionary["ee_EncuestaITC"]["fields"]["ee_ejecucionprograma_ee_encuestaitc_name"] = array (
  'name' => 'ee_ejecucionprograma_ee_encuestaitc_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAITC_FROM_EE_EJECUCIONPROGRAMA_TITLE',
  'save' => true,
  'id_name' => 'ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida',
  'link' => 'ee_ejecucionprograma_ee_encuestaitc',
  'table' => 'ee_ejecucionprograma',
  'module' => 'ee_EjecucionPrograma',
  'rname' => 'name',
);
$dictionary["ee_EncuestaITC"]["fields"]["ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida"] = array (
  'name' => 'ee_ejecucionprograma_ee_encuestaitcee_ejecucionprograma_ida',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_ee_encuestaitc',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_EE_ENCUESTAITC_FROM_EE_ENCUESTAITC_TITLE',
);


/* 
 * 
 */
$dictionary['ee_EncuestaITC']['fields']['encuestas'] = array (
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

$dictionary['ee_EncuestaITC']['fields']['modulo']['required']=true;
$dictionary['ee_EncuestaITC']['fields']['idmodulo']['required']=true;
$dictionary['ee_EncuestaITC']['fields']['participante']['required']=true;
$dictionary['ee_EncuestaITC']['fields']['idparticipante']['required']=true;




?>