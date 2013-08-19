<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-05-21 15:05:11
$dictionary["Account"]["fields"]["accounts_ee_auspicio"] = array (
  'name' => 'accounts_ee_auspicio',
  'type' => 'link',
  'relationship' => 'accounts_ee_auspicio',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_EE_AUSPICIO_TITLE',
);


// created: 2012-05-21 12:41:32
$dictionary["Account"]["fields"]["accounts_ee_fidelizacion"] = array (
  'name' => 'accounts_ee_fidelizacion',
  'type' => 'link',
  'relationship' => 'accounts_ee_fidelizacion',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_EE_FIDELIZACION_FROM_EE_FIDELIZACION_TITLE',
);


/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["Account"]["fields"]["razonsocial"]=array(
    'required' => false,
    'name' => 'razonsocial',
    'vname' => 'LBL_RAZONSOCIAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Razon Social',
    'help' => 'Razon Social',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);

$dictionary["Account"]["fields"]["primernombre"]=array(
    'required' => false,
    'name' => 'primernombre',
    'vname' => 'LBL_PRIMERNOMBRE',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Primer Nombre',
    'help' => 'Primer Nombre',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '50',



);

$dictionary["Account"]["fields"]["segundonombre"]=array(
    'required' => false,
    'name' => 'segundonombre',
    'vname' => 'LBL_SEGUNDONOMBRE',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Segundo Nombre',
    'help' => 'Segundo Nombre',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '30',
  


);
$dictionary["Account"]["fields"]["primerapellido"]=array(
    'required' => false,
    'name' => 'primerapellido',
    'vname' => 'LBL_PRIMERAPELLIDO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Primer Apellido',
    'help' => 'Primer Apellido',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '50',



);

$dictionary["Account"]["fields"]["segundoapellido"]=array(
    'required' => false,
    'name' => 'segundoapellido',
    'vname' => 'LBL_SEGUNDOAPELLIDO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Segundo Apellido',
    'help' => 'Segundo Apellido',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '30',



);
$dictionary["Account"]["fields"]["nombrecomercial"]=array(
    'required' => false,
    'name' => 'nombrecomercial',
     'vname' => 'LBL_NOMBRECOMERCIAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Nombre Comercial',
    'help' => 'Nombre Comercial',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);





$dictionary["Account"]["fields"]["otrodescuento"]=array(
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



/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["Account"]["fields"]["ext"]=array(
    'required' => false,
    'name' => 'ext',
    'vname' => 'LBL_EXT',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Extensión',
    'help' => 'Extensión',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '15',
);





/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["Account"]["fields"]["mediocontacto"]=array(
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

$dictionary["Account"]["fields"]["detallemedio"]=array(
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

$dictionary["Account"]["fields"]["convertida"]=array(
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

$dictionary["Account"]["fields"]["idcontacto"]=array(
    'required' => false,
    'name' => 'idcontacto',
    'vname' => 'LBL_IDCONTACTO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Id del contacto',
    'help' => 'Id del contacto',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);

$dictionary["Account"]["fields"]["infobancaria"]=array(
    'required' => false,
    'name' => 'infobancaria',
    'vname' => 'LBL_INFOBANCARIA',
    'type' => 'text',
    'massupdate' => 1,
    'comments' => 'Información Bancaria',
    'help' => 'Información Bancaria',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    
);

$dictionary['Account']['fields']['cliente_id'] =
  array (
    'required' => false,
    'name' => 'cliente_id',
    'vname' => 'LBL_CLIENTEID',
    'type' => 'int',
    'massupdate' => 0,
    'default' => '',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '11',
    'disable_num_format' => '',
     'auto_increment'=>true

  );
$dictionary["Account"]['indices'] = array (
array('name' =>'cliente_id' , 'type'=>'unique' , 'fields'=>array('cliente_id')),
        );





/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */


$dictionary["Account"]["fields"]["ciudad_principal_ndb"]=array(
    'required' => false,
    'name' => 'ciudad_principal_ndb',
    'vname' => 'LBL_CIUDADPRINCIPAL_NDB',
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

$dictionary["Account"]["fields"]["etiqueta_principal_ndb"]=array(
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
$dictionary["Account"]["fields"]["etiqueta_secundaria_ndb"]=array(
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


/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["Account"]["fields"]["cursosinteres"]=array(
    'required' => false,
    'name' => 'cursosinteres',
    'vname' => 'LBL_CURSOSINTERES',
    'type' => 'text',
    'massupdate' => 1,
    'comments' => 'Curso de Interes',
    'help' => 'Curso de interes',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'rows' => 6,
    'cols' => 80,
    
    
    
);









 // created: 2012-03-22 05:19:54

 

 // created: 2012-05-03 08:07:16
$dictionary['Account']['fields']['clientepotencial_c']['enforced']='false';
$dictionary['Account']['fields']['clientepotencial_c']['dependency']='';

 

 // created: 2012-03-22 05:19:54

 

 // created: 2012-06-18 01:29:30
$dictionary['Account']['fields']['comportamientopago_c']['dependency']='';

 

 // created: 2012-03-22 05:19:54

 

 // created: 2012-03-22 05:19:55

 

 // created: 2012-03-22 05:19:55

 

 // created: 2013-08-19 19:16:27
$dictionary['Account']['fields']['email1']['required']=true;
$dictionary['Account']['fields']['email1']['calculated']=false;

 

 // created: 2012-03-22 05:19:55

 

 // created: 2012-03-22 05:19:55

 

 // created: 2012-03-22 05:19:56

 

 // created: 2012-03-22 05:19:56

 

 // created: 2012-03-22 05:19:56

 

 // created: 2012-03-22 05:19:56

 

 // created: 2012-03-22 05:19:56

 

 // created: 2012-03-22 05:19:57

 

 // created: 2012-03-22 05:19:57

 

 // created: 2012-03-22 05:19:57

 

 // created: 2012-06-11 09:32:45
$dictionary['Account']['fields']['tipodescuento_c']['dependency']='';

 
?>