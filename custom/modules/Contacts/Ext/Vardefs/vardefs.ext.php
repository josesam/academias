<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-08-12 19:06:06
$dictionary["Contact"]["fields"]["contacts_ac_certificado"] = array (
  'name' => 'contacts_ac_certificado',
  'type' => 'link',
  'relationship' => 'contacts_ac_certificado',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_AC_CERTIFICADO_TITLE',
);


// created: 2012-05-10 09:17:24
$dictionary["Contact"]["fields"]["ee_ejecucionprograma_contacts"] = array (
  'name' => 'ee_ejecucionprograma_contacts',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_CONTACTS_FROM_EE_EJECUCIONPROGRAMA_TITLE',
);


/* 
 * 
 * @author Jose Sambrano
 */


$dictionary["Contact"]["fields"]["primernombre"]=array(
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

$dictionary["Contact"]["fields"]["segundonombre"]=array(
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
$dictionary["Contact"]["fields"]["primerapellido"]=array(
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

$dictionary["Contact"]["fields"]["segundoapellido"]=array(
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
    'len' => '50',
);





$dictionary["Contact"]["fields"]["nacionalidad_c"]=array(
    'required' => false,
    'name' => 'nacionalidad_c',
    'vname' => 'LBL_NACIONALIDAD_C',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Pais de Nacionalidad',
    'help' => 'Pais de Nacionalidad',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);

$dictionary["Contact"]["fields"]["ee_nacionalidad_id_c"]=array(
    'required' => false,
    'name' => 'ee_nacionalidad_id_c',
    'vname' => 'LBL_NACIONALIDAD_ID',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Id nacionalidad',
    'help' => 'Id Nacionalidad',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);

$dictionary["Contact"]["fields"]["otraarea"]=array(
    'required' => false,
    'name' => 'otraarea',
    'vname' => 'LBL_OTRAAREA',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Otra Área',
    'help' => 'Otra Área',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);


$dictionary["Contact"]["fields"]["lugartrabajo"]=array(
    'required' => false,
    'name' => 'lugartrabajo',
    'vname' => 'LBL_LUGARTRABAJO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Lugar de Trabajo',
    'help' => 'Lugar de Trabajo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
);


$dictionary["Contact"]["fields"]["cedula"]=array(
    'required' => false,
    'name' => 'cedula',
    'vname' => 'LBL_CEDULA',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Cédula',
    'help' => 'Cédula',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '10',
);

$dictionary["Contact"]["fields"]["codigobanner"]=array(
    'required' => false,
    'name' => 'codigobanner',
    'vname' => 'LBL_CODIGOBANNER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => 'Codigo Banner',
    'help' => 'Código Banner',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len'=>50,



);

$dictionary['Contact']['fields']['tipocontacto']=array(
    'name'=>'tipocontacto',
    'vname'=>'LBL_TIPOCONTACTO',
    'type'=>'enum',
    'default'=>'Natural',
    'options'=>'tipocontacto_dom',
    'help'=>'Tipo de contacto',
    'comments'=>'Tipo de Cliente',
    'len'=>'10',
    'massupdate'=>false,
    'required'=>true,
    'reportable'=>true,
    'audited'=>true,
    
);




/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */
$dictionary["Contact"]["fields"]["calle_principal"]=array(
    'required' => false,
    'name' => 'calle_principal',
    'vname' => 'LBL_CALLEPRINCIPAL',
    'type' => 'text',
    'massupdate' => 1,
    'comments' => 'Dirección Principal',
    'help' => 'Dirección Principal',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    
);

$dictionary["Contact"]["fields"]["calle2_principal"]=array(
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


$dictionary["Contact"]["fields"]["numero_principal"]=array(
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


$dictionary["Contact"]["fields"]["sector_principal"]=array(
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

$dictionary["Contact"]["fields"]["ciudad_principal"]=array(
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

$dictionary["Contact"]["fields"]["provincia_principal"]=array(
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




$dictionary["Contact"]["fields"]["pais_principal"]=array(
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
$dictionary["Contact"]["fields"]["calle_envio"]=array(
    'required' => false,
    'name' => 'calle_envio',
    'vname' => 'LBL_CALLESENVIO',
    'type' => 'text',
    'massupdate' => 1,
    'comments' => 'Dirección Secundaria',
    'help' => 'Dirección Secundaria',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    
);

$dictionary["Contact"]["fields"]["calle2_envio"]=array(
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


$dictionary["Contact"]["fields"]["numero_envio"]=array(
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


$dictionary["Contact"]["fields"]["sector_envio"]=array(
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

$dictionary["Contact"]["fields"]["ciudad_envio"]=array(
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

$dictionary["Contact"]["fields"]["provincia_envio"]=array(
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




$dictionary["Contact"]["fields"]["pais_envio"]=array(
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



$dictionary["Contact"]["fields"]["idcliente"]=array(
    'required' => false,
    'name' => 'idcliente',
    'vname' => 'LBL_IDCLIENTE',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Id del cliente',
    'help' => 'Id del cliente',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
);







/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["Contact"]["fields"]["ext"]=array(
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
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */


$dictionary["Contact"]["fields"]["ciudad_principal_ndb"]=array(
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

$dictionary["Contact"]["fields"]["etiqueta_principal_ndb"]=array(
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
$dictionary["Contact"]["fields"]["etiqueta_secundaria_ndb"]=array(
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
$dictionary["Contact"]["fields"]["cursosinteres"]=array(
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



$dictionary["Contact"]["fields"]["fuente"]=array(
    'required' => false,
    'name' => 'fuente',
    'vname' => 'LBL_FUENTE',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Fuente de entrada prospecto',
    'help' => 'Fuente de entrada prospecto',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,




);







 // created: 2012-06-11 11:03:52
$dictionary['Contact']['fields']['area_c']['dependency']='';

 

 // created: 2012-03-22 05:19:58

 

 // created: 2012-03-22 05:19:58

 

 // created: 2012-03-22 05:19:59

 

 // created: 2012-03-22 05:19:59

 

 // created: 2012-03-22 05:19:59

 

 // created: 2012-03-22 05:19:59

 

 // created: 2012-03-22 05:20:00

 

 // created: 2013-08-19 16:21:21
$dictionary['Contact']['fields']['email1']['required']=true;
$dictionary['Contact']['fields']['email1']['calculated']=false;

 

 // created: 2012-09-24 05:03:53
$dictionary['Contact']['fields']['estadocivil_c']['dependency']='';

 

 // created: 2012-03-22 05:20:00

 

 // created: 2012-09-24 05:04:19
$dictionary['Contact']['fields']['genero_c']['dependency']='';

 

 // created: 2012-03-22 05:20:01

 

 // created: 2012-09-24 05:04:54
$dictionary['Contact']['fields']['niveleducativo_c']['dependency']='';

 

 // created: 2012-03-22 05:20:01

 

 // created: 2012-03-22 05:20:01

 

 // created: 2012-09-24 05:04:35
$dictionary['Contact']['fields']['situacionlaboral_c']['dependency']='';

 

 // created: 2012-03-22 05:20:02

 

 // created: 2012-03-22 05:20:02

 

 // created: 2012-03-22 05:20:03

 
?>