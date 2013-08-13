<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-05-19 12:06:14
$dictionary["ee_Cobranzas"]["fields"]["opportunities_ee_cobranzas"] = array (
  'name' => 'opportunities_ee_cobranzas',
  'type' => 'link',
  'relationship' => 'opportunities_ee_cobranzas',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_ee_cobranzasopportunities_ida',
);
$dictionary["ee_Cobranzas"]["fields"]["opportunities_ee_cobranzas_name"] = array (
  'name' => 'opportunities_ee_cobranzas_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_ee_cobranzasopportunities_ida',
  'link' => 'opportunities_ee_cobranzas',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["ee_Cobranzas"]["fields"]["opportunities_ee_cobranzasopportunities_ida"] = array (
  'name' => 'opportunities_ee_cobranzasopportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_ee_cobranzas',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_EE_COBRANZAS_FROM_EE_COBRANZAS_TITLE',
);


/* 
 * 
 */


$dictionary["ee_Cobranzas"]["fields"]["idoportunidad"]=array(
    'required' => false,
    'name' => 'idoportunidad',
    'vname' => 'LBL_IDOPORTUNIDAD',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Id de OPORTUNIDAD',
    'help' => 'Id de OPORTUNIDAD',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);


$dictionary['ee_Cobranzas']['fields']['pagos'] = array (
'name' => 'pagos',
'vname' => 'LBL_PAGOS',
'type' => 'varchar',
'function' =>
    array (
        'name' => 'getCobranzaWidget',
        'returns' => 'html',
        'include' => 'include/SugarCobranza/SugarCobranza.php',
      ),
'source' => 'non-db',
'group' => 'pagos',
'merge_filter' => 'enabled',
);





$dictionary["ee_Cobranzas"]["fields"]["estado"]=array(
    'required' => false,
    'name' => 'estado',
    'vname' => 'LBL_ESTADO',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => 'Estado del Pago',
    'help' => 'Estado del Pago',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '50',
    'options'=>'estadopago_dom',
);




?>