<?php
$listViewDefs ['Contacts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => '1',
    'orderBy' => 'last_name',
    'default' => '1',
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TITLE',
    'default' => '1',
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => '',
    'link' => '1',
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => '1',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '15%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => '1',
  ),
  'DO_NOT_CALL' => 
  array (
    'width' => '10',
    'label' => 'LBL_DO_NOT_CALL',
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10',
    'label' => 'LBL_HOME_PHONE',
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10',
    'label' => 'LBL_MOBILE_PHONE',
  ),
  'PHONE_OTHER' => 
  array (
    'width' => '10',
    'label' => 'LBL_WORK_PHONE',
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10',
    'label' => 'LBL_FAX_PHONE',
  ),
  'ADDRESS_STREET' => 
  array (
    'width' => '10',
    'label' => 'LBL_PRIMARY_ADDRESS_STREET',
  ),
  'ADDRESS_CITY' => 
  array (
    'width' => '10',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
  ),
  'ADDRESS_STATE' => 
  array (
    'width' => '10',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
  ),
  'ADDRESS_POSTALCODE' => 
  array (
    'width' => '10',
    'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10',
    'label' => 'LBL_DATE_ENTERED',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10',
    'label' => 'LBL_CREATED',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '10',
    'label' => 'LBL_TEAM',
    'default' => '1',
  ),
);
?>
