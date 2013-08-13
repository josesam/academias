<?php 
 //WARNING: The contents of this file are auto-generated

    
/* 
 * 
 */
$dictionary['ee_Programas']['fields']['programas'] = array (
'name' => 'programas',
'vname' => 'LBL_PROGRAMAS',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getProgramasWidget',
        'returns' => 'html',
        'include' => 'include/SugarProgramas/SugarProgramas.php',
      ),
'source' => 'non-db',
'group' => 'programas',
'merge_filter' => 'enabled',
);




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
    'audited' => 0,
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



    
/* 
 * 
 */


$dictionary['ee_Programas']['fields']['logistica'] = array (
'name' => 'logistica',
'vname' => 'LBL_LOGISTICA',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getLogisticaWidget',
        'returns' => 'html',
        'include' => 'include/SugarLogistica/SugarLogistica.php',
      ),
'source' => 'non-db',
'group' => 'logistica',
'merge_filter' => 'enabled',
);



$dictionary['ee_Programas']['fields']['fechainicio_programa'] = array (
    'name' => 'fechainicio_programa',
    'vname' => 'LBL_FECHAINICIOPROGRAMA',
    'type' => 'date',
    'audited'=>true,
    'required' => true,
    'comment' => 'Fecha de inicio del programa',
    'help' => 'Fecha de inicio  del programa  ',
    'importable' => true,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',

);

$dictionary['ee_Programas']['fields']['fechafinal_programa'] = array (
    'name' => 'fechafinal_programa',
    'vname' => 'LBL_FECHAFINALPROGRAMA',
    'type' => 'date',
    'audited'=>true,
    'required' => true,
    'comment' => 'Fecha de cierre del programa',
    'help' => 'Fecha de cierre de programa ',
    'importable' => true,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
);

$dictionary['ee_Programas']['fields']['numerominimo'] = array (
'name' => 'numerominimo',
'vname' => 'LBL_NUMEROMINIMO',
'type' => 'int',
		    'dbType' => 'int',
		    'audited'=>true,
		    'comment' => 'Número minimo de participantes',
		    'merge_filter' => 'enabled',
);




 // created: 2012-03-22 05:20:06

 

 // created: 2012-03-22 05:20:06

 

 // created: 2012-03-22 05:20:06

 

 // created: 2012-03-22 05:20:06

 

 // created: 2012-03-22 05:20:07

 
?>