<?php
/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["ee_Profesores"]["fields"]["colaboraen"]=array(
    'required' => false,
    'name' => 'colaboraen',
    'vname' => 'LBL_COLABORAEN',
    'type' => 'multienum',
    'massupdate' => 1,
    'comments' => 'Curso de Interes',
    'help' => 'Curso de interes',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'colabora_dom',
    'isMultiSelect'=>true
);


$dictionary["ee_Profesores"]["fields"]["fechainduccion"]=array(
    'required' => false,
    'name' => 'fechainduccion',
    'vname' => 'LBL_FECHAINDUCCION',
    'type' => 'date',
    'massupdate' => 1,
    'comments' => 'Fecha Inducción',
    'help' => 'Fecha Inducción',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    
);

$dictionary["ee_Profesores"]["fields"]["otros"]=array(
    'required' => false,
    'name' => 'otros',
    'vname' => 'LBL_OTROS',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Otro',
    'help' => 'Otro',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,

);

$dictionary["ee_Profesores"]["fields"]["cargoactual"]=array(
    'required' => false,
    'name' => 'cargoactual',
    'vname' => 'LBL_CARGOACTUAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Cargo Actual',
    'help' => 'Cargo Actual',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,

);
$dictionary["ee_Profesores"]["fields"]["lugartrabajo"]=array(
    'required' => false,
    'name' => 'lugartrabajo',
    'vname' => 'LBL_LUGARTRABAJO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Lugar Trabajo',
    'help' => 'Lugar Trabajo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
);

$dictionary["ee_Profesores"]["fields"]["tituloprofesional"]=array(
    'required' => false,
    'name' => 'tituloprofesional',
    'vname' => 'LBL_TITULOPROFESIONAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Titulo Profesional',
    'help' => 'Titulo Profesional',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
);


$dictionary["ee_Profesores"]["fields"]["codigobanner"]=array(
    'required' => false,
    'name' => 'codigobanner',
    'vname' => 'LBL_CODIGOBANNER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Codigo Banner',
    'help' => 'Código Banner',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len'=>50,



);

?>
