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
  'author' => 'Jose Sambrano',
  'description' => 'Registra los proveedores',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Proveedor',
  'published_date' => '2012-05-10 12:26:14',
  'type' => 'module',
  'version' => 1336652775,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Proveedor',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ee_Proveedor',
      'class' => 'ee_Proveedor',
      'path' => 'modules/ee_Proveedor/ee_Proveedor.php',
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
      'from' => '<basepath>/SugarModules/modules/ee_Proveedor',
      'to' => 'modules/ee_Proveedor',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/bg_BG.lang.php',
      'to_module' => 'application',
      'language' => 'bg_BG',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ca_ES.lang.php',
      'to_module' => 'application',
      'language' => 'ca_ES',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/cs_CZ.lang.php',
      'to_module' => 'application',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/da_DK.lang.php',
      'to_module' => 'application',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/de_DE.lang.php',
      'to_module' => 'application',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_UK.lang.php',
      'to_module' => 'application',
      'language' => 'en_UK',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/et_EE.lang.php',
      'to_module' => 'application',
      'language' => 'et_EE',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/he_IL.lang.php',
      'to_module' => 'application',
      'language' => 'he_IL',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/hu_HU.lang.php',
      'to_module' => 'application',
      'language' => 'hu_HU',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/it_it.lang.php',
      'to_module' => 'application',
      'language' => 'it_it',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ja_JP.lang.php',
      'to_module' => 'application',
      'language' => 'ja_JP',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/lt_LT.lang.php',
      'to_module' => 'application',
      'language' => 'lt_LT',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nb_NO.lang.php',
      'to_module' => 'application',
      'language' => 'nb_NO',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/nl_NL.lang.php',
      'to_module' => 'application',
      'language' => 'nl_NL',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pl_PL.lang.php',
      'to_module' => 'application',
      'language' => 'pl_PL',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/pt_PT.lang.php',
      'to_module' => 'application',
      'language' => 'pt_PT',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ro_RO.lang.php',
      'to_module' => 'application',
      'language' => 'ro_RO',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_RU.lang.php',
      'to_module' => 'application',
      'language' => 'ru_RU',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sr_RS.lang.php',
      'to_module' => 'application',
      'language' => 'sr_RS',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/sv_SE.lang.php',
      'to_module' => 'application',
      'language' => 'sv_SE',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/tr_TR.lang.php',
      'to_module' => 'application',
      'language' => 'tr_TR',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/zh_CN.lang.php',
      'to_module' => 'application',
      'language' => 'zh_CN',
    ),
  ),
);