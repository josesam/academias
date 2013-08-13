<?php
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

?>
