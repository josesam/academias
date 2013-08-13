<?php
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
