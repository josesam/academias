<?php
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

