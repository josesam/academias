<?php
// created: 2013-08-12 19:06:06
$dictionary["ac_Certificado"]["fields"]["contacts_ac_certificado"] = array (
  'name' => 'contacts_ac_certificado',
  'type' => 'link',
  'relationship' => 'contacts_ac_certificado',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_ac_certificadocontacts_ida',
);
$dictionary["ac_Certificado"]["fields"]["contacts_ac_certificado_name"] = array (
  'name' => 'contacts_ac_certificado_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_ac_certificadocontacts_ida',
  'link' => 'contacts_ac_certificado',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ac_Certificado"]["fields"]["contacts_ac_certificadocontacts_ida"] = array (
  'name' => 'contacts_ac_certificadocontacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_ac_certificado',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_AC_CERTIFICADO_FROM_AC_CERTIFICADO_TITLE',
);
