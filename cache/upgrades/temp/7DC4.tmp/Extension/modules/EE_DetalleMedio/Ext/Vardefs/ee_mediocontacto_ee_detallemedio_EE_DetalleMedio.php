<?php
// created: 2012-03-19 08:10:39
$dictionary["EE_DetalleMedio"]["fields"]["ee_mediocontacto_ee_detallemedio"] = array (
  'name' => 'ee_mediocontacto_ee_detallemedio',
  'type' => 'link',
  'relationship' => 'ee_mediocontacto_ee_detallemedio',
  'source' => 'non-db',
  'vname' => 'LBL_EE_MEDIOCONTACTO_EE_DETALLEMEDIO_FROM_EE_MEDIOCONTACTO_TITLE',
  'id_name' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
);
$dictionary["EE_DetalleMedio"]["fields"]["ee_mediocontacto_ee_detallemedio_name"] = array (
  'name' => 'ee_mediocontacto_ee_detallemedio_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EE_MEDIOCONTACTO_EE_DETALLEMEDIO_FROM_EE_MEDIOCONTACTO_TITLE',
  'save' => true,
  'id_name' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
  'link' => 'ee_mediocontacto_ee_detallemedio',
  'table' => 'ee_mediocontacto',
  'module' => 'EE_MedioContacto',
  'rname' => 'name',
);
$dictionary["EE_DetalleMedio"]["fields"]["ee_mediocontacto_ee_detallemedioee_mediocontacto_ida"] = array (
  'name' => 'ee_mediocontacto_ee_detallemedioee_mediocontacto_ida',
  'type' => 'link',
  'relationship' => 'ee_mediocontacto_ee_detallemedio',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EE_MEDIOCONTACTO_EE_DETALLEMEDIO_FROM_EE_DETALLEMEDIO_TITLE',
);
