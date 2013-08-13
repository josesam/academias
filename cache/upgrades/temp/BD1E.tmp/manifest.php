<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'PRO',
    ),
  ),
  'readme' => '',
  'key' => 'ee',
  'author' => 'JF',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'EEclientes',
  'published_date' => '2012-03-22 12:11:03',
  'type' => 'module',
  'version' => 1332418264,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'EEclientes',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ee_Fidelizacion',
      'class' => 'ee_Fidelizacion',
      'path' => 'modules/ee_Fidelizacion/ee_Fidelizacion.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ee_Nacionalidad',
      'class' => 'ee_Nacionalidad',
      'path' => 'modules/ee_Nacionalidad/ee_Nacionalidad.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ee_Fidelizacion',
      'to' => 'modules/ee_Fidelizacion',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ee_Nacionalidad',
      'to' => 'modules/ee_Nacionalidad',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
  ),
);