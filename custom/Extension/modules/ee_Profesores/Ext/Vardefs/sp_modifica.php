<?php
/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */
$dictionary["ee_Profesores"]["fields"]["title"]['type']="multienum";
$dictionary["ee_Profesores"]["fields"]["title"]['options']="cargo_dom";
$dictionary["ee_Profesores"]["fields"]["title"]['isMultiSelect']=true;





$dictionary["ee_Profesores"]["fields"]["niveltitulo2"]['type']="enum";
$dictionary["ee_Profesores"]["fields"]["niveltitulo2"]['isMultiSelect']=false;


$dictionary["ee_Profesores"]["fields"]["tipodocumento"]=array(
    'required' => false,
    'name' => 'tipodocumento',
    'vname' => 'LBL_TIPODOCUMENTO',
    'type' => 'enum',
    'massupdate' => 1,
    'comments' => 'Tipo Documento',
    'help' => 'Tipo Documento',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'tipocliente_list',
);


?>
