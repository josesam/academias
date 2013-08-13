<?php
/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de estado del contacto
 */



$dictionary["ee_Programas"]["fields"]["estado"]=array(
    'required' => false,
    'name' => 'estado',
    'vname' => 'LBL_ESTADO',
    'type' => 'enum',
    'massupdate' => 1,
    'comments' => 'Estado',
    'help' => 'Estado',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => 0,
    'len' => '255',
    'options'=>'programa_status_dom',
);


$dictionary["ee_Programas"]["fields"]["modalidad"]=array(
    'required' => false,
    'name' => 'modalidad',
    'vname' => 'LBL_MODALIDAD',
    'type' => 'enum',
    'massupdate' => 1,
    'comments' => 'Modalidad',
    'help' => 'Modalidad',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'programa_modalidad_dom',
);

$dictionary["ee_Programas"]["fields"]["aux_c"]['options']="programa_aux_dom";
$dictionary["ee_Programas"]["fields"]["aux_c"]['type']="enum";


$dictionary["ee_Programas"]["fields"]["ejecucion_id"]=array(
    'required' => false,
    'name' => 'ejecucion_id',
    'vname' => 'LBL_IDEJECUCION',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Id de EJECUCION',
    'help' => 'Id de EJECUCION',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);


$dictionary["ee_Programas"]["fields"]["gerenteproyecto"]=array(
    'required' => false,
    'name' => 'gerenteproyecto',
    'vname' => 'LBL_GERENTEPROYECTO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Gerente de Proyecto',
    'help' => 'Gerente de Proyecto',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);

$dictionary["ee_Programas"]["fields"]["asesorcomercial"]=array(
    'required' => false,
    'name' => 'asesorcomercial',
    'vname' => 'LBL_ASESORCOMERCIAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Asesor Comercial',
    'help' => 'Asesor Comercial',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);

$dictionary["ee_Programas"]["fields"]["generadoroportunidad"]=array(
    'required' => false,
    'name' => 'generadoroportunidad',
    'vname' => 'LBL_GENERADOROPORTUNIDAD',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Generador de Oportunidad',
    'help' => 'Generador de oportunidad',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);






$dictionary["ee_Programas"]["fields"]["estado"]=array(
    'required' => false,
    'name' => 'estado',
    'vname' => 'LBL_ESTADO',
    'type' => 'enum',
    'massupdate' => 1,
    'comments' => 'Estado',
    'help' => 'Estado',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => 0,
    'len' => '255',
    'options'=>'programa_status_dom',
);

// Campos nuevos para la instancia de academias
$dictionary["ee_Programas"]["fields"]["ciclo"]=array(
    'required' => false,
    'name' => 'ciclo',
    'vname' => 'LBL_CICLO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Ciclo',
    'help' => 'Ciclo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => 0,
    'len' => '100',
);



$dictionary["ee_Programas"]["fields"]["academias"]=array(
    'required' => false,
    'name' => 'academias',
    'vname' => 'LBL_ACADEMIAS',
    'type' => 'enum',
    'massupdate' => 1,
    'comments' => 'Academias',
    'help' => 'Academias',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => 0,
    'len' => '100',
    'options'=>'academias_dom',
);

$dictionary["ee_Programas"]["fields"]["anio"]=array(
    'required' => true,
    'name' => 'anio',
    'vname' => 'LBL_ANIO',
    'type' => 'int',
    'massupdate' => 1,
    'comments' => 'Anio',
    'help' => 'Anio',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => 0,
    'len' => '11',
    
);


?>
