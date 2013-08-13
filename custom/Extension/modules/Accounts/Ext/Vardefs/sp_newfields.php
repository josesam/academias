<?php
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


?>
