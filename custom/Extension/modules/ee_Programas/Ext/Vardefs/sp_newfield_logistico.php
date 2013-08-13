    <?php
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

?>
