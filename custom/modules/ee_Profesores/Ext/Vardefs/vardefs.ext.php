<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-12 10:14:36
$dictionary["ee_Profesores"]["fields"]["ee_profesores_ee_accionesmejora"] = array (
  'name' => 'ee_profesores_ee_accionesmejora',
  'type' => 'link',
  'relationship' => 'ee_profesores_ee_accionesmejora',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_EE_PROFESORES_EE_ACCIONESMEJORA_FROM_EE_ACCIONESMEJORA_TITLE',
);


// created: 2012-03-12 10:14:37
$dictionary["ee_Profesores"]["fields"]["ee_profesores_ee_cursos"] = array (
  'name' => 'ee_profesores_ee_cursos',
  'type' => 'link',
  'relationship' => 'ee_profesores_ee_cursos',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_EE_PROFESORES_EE_CURSOS_FROM_EE_CURSOS_TITLE',
);


// created: 2012-03-12 10:14:36
$dictionary["ee_Profesores"]["fields"]["ee_profesores_notes"] = array (
  'name' => 'ee_profesores_notes',
  'type' => 'link',
  'relationship' => 'ee_profesores_notes',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_EE_PROFESORES_NOTES_FROM_NOTES_TITLE',
);


$dictionary["ee_Profesores"]["relationships"]['prospect_list_ee_profesores'] = array (
	'lhs_module' => 'ProspectLists',
	'lhs_table' => 'prospect_lists',
	'lhs_key' => 'id',
	'rhs_module' =>'ee_Profesores',
	'rhs_table' => 'ee_profesores',
	'rhs_key' => 'id',
	'relationship_type' => 'many-to-many',
	'join_table' => 'prospect_lists_prospects',
	'join_key_lhs' => 'prospect_list_id',
	'join_key_rhs' => 'related_id',
	'relationship_role_column' => 'related_type',
	'relationship_role_column_value' => 'ee_Profesores'
);


$dictionary["ee_Profesores"]["fields"]["prospect_lists"] = array (
	'name' => 'prospect_lists',
	'type' => 'link',
	'relationship' => 'prospect_list_ee_profesores',
	'source' =>'non-db'
);




/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//$dictionary["ee_Profesores"]['fields']['emails']=array(
//    'name' => 'emails',
//    'type' => 'link',
//    'relationship' => 'emails_ee_profesores_rel', /* reldef in emails */
//    'module'=>'Emails',
//    'bean_name'=>'Email',
//    'source'=>'non-db',
//    'vname'=>'LBL_EMAILS',
//);
//$dictionary["ee_Profesores"]['fields']['relationships']['account_emails']=array(
//                              'lhs_module'=> 'ee_Profesores',
//                              'lhs_table'=> 'ee_profesores', 
//                              'lhs_key' => 'id',
//                              'rhs_module'=> 'Emails', 
//                              'rhs_table'=> 'emails', 
//                              'rhs_key' => 'parent_id',
//                              'relationship_type'=>'one-to-many', 
//                              'relationship_role_column'=>'parent_type',
//                              'relationship_role_column_value'=>'ee_Profesores'
//    );
//        




/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */
$dictionary["ee_Profesores"]["fields"]["calle_principal"]=array(
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

$dictionary["ee_Profesores"]["fields"]["calle2_principal"]=array(
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


$dictionary["ee_Profesores"]["fields"]["numero_principal"]=array(
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


$dictionary["ee_Profesores"]["fields"]["sector_principal"]=array(
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

$dictionary["ee_Profesores"]["fields"]["ciudad_principal"]=array(
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

$dictionary["ee_Profesores"]["fields"]["provincia_principal"]=array(
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




$dictionary["ee_Profesores"]["fields"]["pais_principal"]=array(
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
$dictionary["ee_Profesores"]["fields"]["calle_envio"]=array(
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

$dictionary["ee_Profesores"]["fields"]["calle2_envio"]=array(
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


$dictionary["ee_Profesores"]["fields"]["numero_envio"]=array(
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


$dictionary["ee_Profesores"]["fields"]["sector_envio"]=array(
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

$dictionary["ee_Profesores"]["fields"]["ciudad_envio"]=array(
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

$dictionary["ee_Profesores"]["fields"]["provincia_envio"]=array(
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




$dictionary["ee_Profesores"]["fields"]["pais_envio"]=array(
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
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de direccion pri
 */
$dictionary["ee_Profesores"]["fields"]["title"]['type']="multienum";
$dictionary["ee_Profesores"]["fields"]["title"]['options']="cargo_dom";
$dictionary["ee_Profesores"]["fields"]["title"]['isMultiSelect']=true;





$dictionary["ee_Profesores"]["fields"]["niveltitulo2"]['type']="enum";
$dictionary["ee_Profesores"]["fields"]["niveltitulo2"]['isMultiSelect']=false;


$dictionary["ee_Profesores"]["fields"]["tipodocumento"]=array(
    'required' => false,
    'name' => 'tipodocumento',
    'vname' => 'LBL_TIPODOCUMENTO',
    'type' => 'enum',
    'massupdate' => 1,
    'comments' => 'Tipo Documento',
    'help' => 'Tipo Documento',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'tipocliente_list',
);





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


/* 
 * 
 * @author Jose Sambrano
 */
$dictionary["ee_Profesores"]["fields"]["colaboraen"]=array(
    'required' => false,
    'name' => 'colaboraen',
    'vname' => 'LBL_COLABORAEN',
    'type' => 'multienum',
    'massupdate' => 1,
    'comments' => 'Curso de Interes',
    'help' => 'Curso de interes',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'colabora_dom',
    'isMultiSelect'=>true
);


$dictionary["ee_Profesores"]["fields"]["fechainduccion"]=array(
    'required' => false,
    'name' => 'fechainduccion',
    'vname' => 'LBL_FECHAINDUCCION',
    'type' => 'date',
    'massupdate' => 1,
    'comments' => 'Fecha Inducción',
    'help' => 'Fecha Inducción',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    
);

$dictionary["ee_Profesores"]["fields"]["otros"]=array(
    'required' => false,
    'name' => 'otros',
    'vname' => 'LBL_OTROS',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Otro',
    'help' => 'Otro',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,

);

$dictionary["ee_Profesores"]["fields"]["cargoactual"]=array(
    'required' => false,
    'name' => 'cargoactual',
    'vname' => 'LBL_CARGOACTUAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Cargo Actual',
    'help' => 'Cargo Actual',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,

);
$dictionary["ee_Profesores"]["fields"]["lugartrabajo"]=array(
    'required' => false,
    'name' => 'lugartrabajo',
    'vname' => 'LBL_LUGARTRABAJO',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Lugar Trabajo',
    'help' => 'Lugar Trabajo',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
);

$dictionary["ee_Profesores"]["fields"]["tituloprofesional"]=array(
    'required' => false,
    'name' => 'tituloprofesional',
    'vname' => 'LBL_TITULOPROFESIONAL',
    'type' => 'varchar',
    'massupdate' => 1,
    'comments' => 'Titulo Profesional',
    'help' => 'Titulo Profesional',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
);


$dictionary["ee_Profesores"]["fields"]["codigobanner"]=array(
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




 // created: 2012-03-20 12:10:16
//$dictionary['ee_Profesores']['fields']['areasconocimiento']['default']='Administracion';
//$dictionary['ee_Profesores']['fields']['areasconocimiento']['type']='enum';
//$dictionary['ee_Profesores']['fields']['areasconocimiento']['massupdate']=0;
//$dictionary['ee_Profesores']['fields']['areasconocimiento']['options']='areasconocimiento_0';

 

 // created: 2012-03-22 05:20:05

 

 // created: 2012-03-20 12:39:27

 

 // created: 2012-03-22 05:20:05

 

 // created: 2012-03-22 05:20:06

 
?>