<?php
/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */
$dictionary["Account"]["fields"]["calle_principal"]=array(
    'required' => false,
    'name' => 'calle_principal',
    'vname' => 'LBL_CALLEPRINCIPAL',
    'type' => 'text',
    'massupdate' => 1,
    'comments' => 'Calle Principal',
    'help' => 'Calle Principal',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    
);

$dictionary["Account"]["fields"]["calle2_principal"]=array(
    'required' => false,
    'name' => 'calle2_principal',
    'vname' => 'LBL_CALLE2PRINCIPAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Calle Secundaria',
    'help' => 'Calle Secundaria',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);


$dictionary["Account"]["fields"]["numero_principal"]=array(
    'required' => false,
    'name' => 'numero_principal',
    'vname' => 'LBL_NUMEROPRINCIPAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Número',
    'help' => 'Número',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '60',


);


$dictionary["Account"]["fields"]["sector_principal"]=array(
    'required' => false,
    'name' => 'sector_principal',
    'vname' => 'LBL_SECTORPRINCIPAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Número',
    'help' => 'Número',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '150',


);

$dictionary["Account"]["fields"]["ciudad_principal"]=array(
    'required' => false,
    'name' => 'ciudad_principal',
    'vname' => 'LBL_CIUDADPRINCIPAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Ciudad',
    'help' => 'Ciudad',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '150',


);

$dictionary["Account"]["fields"]["provincia_principal"]=array(
    'required' => false,
    'name' => 'provincia_principal',
    'vname' => 'LBL_PROVINCIAPRINCIPAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Provincia',
    'help' => 'Provincia',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '150',
);




$dictionary["Account"]["fields"]["pais_principal"]=array(
    'required' => false,
    'name' => 'pais_principal',
    'vname' => 'LBL_PAISPRINCIPAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Pais',
    'help' => 'Pais',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '200',
);



/*
 * Definicion de direccion envio
 */
$dictionary["Account"]["fields"]["calle_envio"]=array(
    'required' => false,
    'name' => 'calle_envio',
    'vname' => 'LBL_CALLESENVIO',
    'type' => 'text',
    'massupdate' => 1,
    'comments' => 'Calle Principal Envio',
    'help' => 'Calle Principal Envio',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
);

$dictionary["Account"]["fields"]["calle2_envio"]=array(
    'required' => false,
    'name' => 'calle2_envio',
    'vname' => 'LBL_CALLE2ENVIO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Calle Envio',
    'help' => 'Calle Envio',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);


$dictionary["Account"]["fields"]["numero_envio"]=array(
    'required' => false,
    'name' => 'numero_envio',
    'vname' => 'LBL_NUMEROENVIO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Número',
    'help' => 'Número',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '60',


);


$dictionary["Account"]["fields"]["sector_envio"]=array(
    'required' => false,
    'name' => 'sector_envio',
    'vname' => 'LBL_SECTORENVIO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Número',
    'help' => 'Número',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '150',


);

$dictionary["Account"]["fields"]["ciudad_envio"]=array(
    'required' => false,
    'name' => 'ciudad_envio',
    'vname' => 'LBL_CIUDADENVIO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Ciudad',
    'help' => 'Ciudad',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '150',


);

$dictionary["Account"]["fields"]["provincia_envio"]=array(
    'required' => false,
    'name' => 'provincia_envio',
    'vname' => 'LBL_PROVINCIAENVIO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Provincia',
    'help' => 'Provincia',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '150',
);




$dictionary["Account"]["fields"]["pais_envio"]=array(
    'required' => false,
    'name' => 'pais_envio',
    'vname' => 'LBL_PAISENVIO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Pais',
    'help' => 'Pais',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '200',
);
?>
