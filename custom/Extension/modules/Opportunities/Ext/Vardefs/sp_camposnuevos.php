<?php
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

?>
