<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-05-10 09:45:55
$dictionary["Opportunity"]["fields"]["ee_ejecucionprograma_opportunities"] = array (
  'name' => 'ee_ejecucionprograma_opportunities',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_OPPORTUNITIES_FROM_EE_EJECUCIONPROGRAMA_TITLE',
);


// created: 2012-05-19 12:06:14
$dictionary["Opportunity"]["fields"]["opportunities_ee_cobranzas"] = array (
  'name' => 'opportunities_ee_cobranzas',
  'type' => 'link',
  'relationship' => 'opportunities_ee_cobranzas',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_EE_COBRANZAS_TITLE',
);


/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["Opportunity"]["fields"]["motivo_c"]['type']='multienum';
$dictionary["Opportunity"]["fields"]["motivo_c"]['isMultiSelect']=true;
$dictionary["Opportunity"]["fields"]["motivo_c"]['options']='tipodescuento_list';
$dictionary["Opportunity"]["fields"]["mediocontacto"]=array(
    'required' => false,
    'name' => 'mediocontacto',
    'vname' => 'LBL_MEDIOCONTACTO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Medio Contacto',
    'help' => 'Medio Contacto',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);

$dictionary["Opportunity"]["fields"]["detallemedio"]=array(
    'required' => false,
    'name' => 'detallemedio',
    'vname' => 'LBL_DETALLEEMEDIO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Detalle Medio',
    'help' => 'Detalle Medio',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',



);



/* Campos nuevos
 * @
 */


$dictionary["Opportunity"]["fields"]["tomacontactoin"]=array(
    'required' => false,
    'name' => 'tomacontactoin',
    'vname' => 'LBL_TOMACONTACTOIN',
    'type' => 'multienum',
    'massupdate' => 1,
    'comments' => 'Toma de contacto In',
    'help' => 'Toma de contacto In',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'tomacontacto_dom',
    'isMultiSelect'=>true
);


$dictionary["Opportunity"]["fields"]["tomacontactoout"]=array(
    'required' => false,
    'name' => 'tomacontactoout',
    'vname' => 'LBL_TOMACONTACTOOUT',
    'type' => 'multienum',
    'massupdate' => 1,
    'comments' => 'Toma de contacto Out',
    'help' => 'Toma de contacto Out',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'tomacontacto_dom',
    'isMultiSelect'=>true
);


$dictionary["Opportunity"]["fields"]["amountreal"]=array(
    'required' => false,
    'name' => 'amountreal',
    'vname' => 'LBL_AMOUNTREAL',
    'type' => 'float',
    'massupdate' => 1,
    'comments' => 'Valor Real Final',
    'help' => 'Valor Real Final',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '18',
    'precision' => '2',




);

$dictionary["Opportunity"]["fields"]["otrodescuento"]=array(
    'required' => false,
    'name' => 'otrodescuento',
    'vname' => 'LBL_OTRODESCUENTO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Otro Descuento',
    'help' => 'Otro Descuento',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',



);



    
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





 // created: 2012-03-22 05:20:03

 

 // created: 2012-03-22 05:20:03

 

 // created: 2012-03-22 05:20:03

 

 // created: 2012-07-01 21:03:48
$dictionary['Opportunity']['fields']['fechavalidez_c']['enforced']='false';
$dictionary['Opportunity']['fields']['fechavalidez_c']['dependency']='';

 

 // created: 2012-10-19 06:35:09
$dictionary['Opportunity']['fields']['motivoperdida_c']['dependency']='';

 

 // created: 2012-07-11 00:19:13
$dictionary['Opportunity']['fields']['motivo_c']['dependency']='';

 

 // created: 2012-03-22 05:20:04

 

 // created: 2012-03-22 05:20:04

 

 // created: 2012-03-22 05:20:05

 
?>