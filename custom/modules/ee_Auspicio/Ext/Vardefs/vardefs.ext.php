<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-05-21 15:05:11
$dictionary["ee_Auspicio"]["fields"]["accounts_ee_auspicio"] = array (
  'name' => 'accounts_ee_auspicio',
  'type' => 'link',
  'relationship' => 'accounts_ee_auspicio',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_ee_auspicioaccounts_ida',
);
$dictionary["ee_Auspicio"]["fields"]["accounts_ee_auspicio_name"] = array (
  'name' => 'accounts_ee_auspicio_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ee_auspicioaccounts_ida',
  'link' => 'accounts_ee_auspicio',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ee_Auspicio"]["fields"]["accounts_ee_auspicioaccounts_ida"] = array (
  'name' => 'accounts_ee_auspicioaccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_ee_auspicio',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_EE_AUSPICIO_FROM_EE_AUSPICIO_TITLE',
);


/*
 * Creacion de nuevos campos, definicion de los vardefs
 * @author Jose Sambrano
 */
/*
 * Definicion de estado del contacto
 */
$dictionary["ee_Auspicio"]["fields"]["estado"]=array(
    'required' => false,
    'name' => 'estado',
    'vname' => 'LBL_ESTADO',
    'type' => 'enum',
    'massupdate' => 1,
    'comments' => 'Estado',
    'help' => 'Estado',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'options'=>'module_status_dom',
);


?>