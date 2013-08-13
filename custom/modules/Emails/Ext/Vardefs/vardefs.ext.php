<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-22 05:05:53
$dictionary["Email"]["fields"]["ee_ejecucionprograma_activities_emails"] = array (
  'name' => 'ee_ejecucionprograma_activities_emails',
  'type' => 'link',
  'relationship' => 'ee_ejecucionprograma_activities_emails',
  'source' => 'non-db',
  'vname' => 'LBL_EE_EJECUCIONPROGRAMA_ACTIVITIES_EMAILS_FROM_EE_EJECUCIONPROGRAMA_TITLE',
);



  $dictionary["Email"]["fields"]["ee_profesores"] = array (
                        'name'			=> 'ee_profesores',
			'vname'			=> 'LBL_EMAILS_EE_PROFESORES_REL',
			'type'			=> 'link',
			'relationship'	=> 'emails_ee_profesores_rel',
			'module'		=> 'ee_Profesores',
			'bean_name'		=> 'ee_Profesores',
			'source'		=> 'non-db',
);

?>