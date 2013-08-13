<?php
/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */



$dictionary["ee_Profesores"]["fields"]["etiqueta_principal_ndb"]=array(
    'required' => false,
    'name' => 'etiqueta_principal_ndb',
    'vname' => 'LBL_ETIQUETAPRINCIPAL_NDB',
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
    'source'=>'non-db',


);
$dictionary["ee_Profesores"]["fields"]["etiqueta_secundaria_ndb"]=array(
    'required' => false,
    'name' => 'etiqueta_secundaria_ndb',
    'vname' => 'LBL_CIUDADSECUNDARIA_NDB',
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
    'source'=>'non-db',


);
