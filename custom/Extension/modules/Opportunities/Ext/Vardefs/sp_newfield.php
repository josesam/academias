    <?php
/* 
 * 
 */
$dictionary['Opportunity']['fields']['programas'] = array (
'name' => 'programas',
'vname' => 'LBL_PROGRAMAS',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getCotizacionWidget',
        'returns' => 'html',
        'include' => 'include/SugarCotizacion/SugarCotizacion.php',
      ),
'source' => 'non-db',
'group' => 'programas',
'merge_filter' => 'enabled',
);



$dictionary["Opportunity"]["fields"]["convertida"]=array(
    'name' => 'convertida',
    'vname' => 'LBL_CONVERTIDA',
    'type' => 'bool',
    'massupdate' => 1,
    'comments' => 'Convertida',
    'help' => 'Convertida',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => 0,

);

$dictionary["Opportunity"]["fields"]["idejecucion"]=array(
    'required' => false,
    'name' => 'idejecucion',
    'vname' => 'LBL_IDEJECUCION',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Id del Ejecucion',
    'help' => 'Id del Ejecucion ',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);


$dictionary["Opportunity"]["fields"]["idcobranza"]=array(
    'required' => false,
    'name' => 'idcobranza',
    'vname' => 'LBL_IDCOBRANZA',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Id de Cobranza',
    'help' => 'Id de Cobranza',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);


$dictionary["Opportunity"]["fields"]["otroin"]=array(
    'required' => false,
    'name' => 'otroin',
    'vname' => 'LBL_OTROIN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Otra toma de contacto in',
    'help' => 'Otra toma de contacto in',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);
$dictionary["Opportunity"]["fields"]["otroout"]=array(
    'required' => false,
    'name' => 'otroout',
    'vname' => 'LBL_OTROOUT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Otra toma de contacto out',
    'help' => 'Otra toma de contacto out',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);


$dictionary["Opportunity"]["fields"]["numeroparticipantes"]=array(
    'required' => false,
    'name' => 'numeroparticipantes',
    'vname' => 'LBL_NUMEROPARTICIPANTES',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => 'Número de Participantes',
    'help' => 'Número de Participantes',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '18',
    'default'=>'1'
);


$dictionary['Opportunity']['fields']['participante'] = array (
'name' => 'participante',
'vname' => 'LBL_PARTICIPANTE',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getParticipantesWidget',
        'returns' => 'html',
        'include' => 'include/SugarParticipantes/SugarParticipantes.php',
      ),
'source' => 'non-db',
'group' => 'participantes',
'merge_filter' => 'enabled',
);



$dictionary['Opportunity']['fields']['files'] = array (
'name' => 'files',
'vname' => 'LBL_FILES',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getFilesWidget',
        'returns' => 'html',
        'include' => 'include/SugarFiles/SugarFiles.php',
      ),
'source' => 'non-db',
'group' => 'files',
'merge_filter' => 'enabled',
);


?>
