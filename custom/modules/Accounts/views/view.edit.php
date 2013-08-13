<?php
/*
 * Carga los scripts para telefonos
 * @author Jose Sambrano
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


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

/*********************************************************************************

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Campaigns module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

class AccountsViewEdit extends ViewEdit {

 	function AccountsViewEdit(){
 		parent::ViewEdit();
 		
 	}

 	function display() {
            global $app_list_strings;
            $this->ev->showVCRControl = false ;
		echo '<link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
                  <link rel="stylesheet" type="text/css" href="custom/include/css/tabla/style.css" />
                  <link rel="stylesheet" type="text/css" href="custom/include/css/sistema.css" />
                    ';
 		 if(file_exists('custom/include/clases/popups/VerificarPopup.php')){
                    include_once 'custom/include/clases/popups/VerificarPopup.php';
                 }

               if(file_exists('custom/include/clases/popups/ciudadPopup.php')){
                    include_once 'custom/include/clases/popups/ciudadPopup.php';
               }
                if(file_exists('custom/include/clases/popups/paisPopup.php')){
                    include_once 'custom/include/clases/popups/paisPopup.php';
               }

               if(file_exists('custom/include/clases/popups/popInteres.php')){
                    include_once 'custom/include/clases/popups/popInteres.php';
               }

                if(file_exists('custom/include/clases/popups/nacionalidadPopup.php')){
                    include_once 'custom/include/clases/popups/nacionalidadPopup.php';
               }

              if(file_exists('custom/include/clases/popups/popMedios.php'))
                include_once 'custom/include/clases/popups/popMedios.php';
             if(file_exists('custom/include/clases/popups/popDetalles.php'))
                include_once 'custom/include/clases/popups/popDetalles.php';

             $this->bean->ciudad_principal_ndb=$this->bean->ciudad_principal;
             if(empty($this->bean->id)){
                 $this->bean->nacionalidad_c="Ecuador";
                 $this->ss->assign('valor',"c8061532-b759-a071-d560-4fded9896adb");

                 $this->bean->ciudad_principal_ndb="Quito";
                 $this->bean->provincia_principal="Pichincha";
                 $this->bean->pais_principal="Ecuador";
                 $this->bean->ciudad_principal="Quito";
                 $this->bean->phone_alternate="593 92 000 0000";
                 $this->bean->phone_office="593 2 000 0000";

                 
             }else{
                 $this->ss->assign('valor',$this->bean->ee_nacionalidad_id_c);
             }
             
             unset($app_list_strings['estado_2']['Activo']);
             parent::display();
                          $array=explode(";",$this->bean->cursosinteres);
             if(is_array($array)){
                 $valores=array();
                 foreach($array as $key =>$data){
                     $valores[]['curso']=$data;
                 }
      		$json = new JSON(JSON_LOOSE_TYPE);
                $prefillData = $json->encode($valores);

                $script="<script type=\"text/javascript\" language=\"javascript\" >";
                $script.="cargarCursos('AccountsTable',$prefillData)";
                $script.="</script>";
                echo $script;
             }

 	}


        function  getModuleTitle() {
          global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action,$mod_strings;
        $theTitle = "<div class='moduleTitle'>\n";

        $module = preg_replace("/ /","",$this->module);

        $params = $this->_getModuleTitleParams();

        $count = count($params);
        $index = 0;

		if(SugarThemeRegistry::current()->directionality == "rtl") {
			$params = array_reverse($params);
		}

        $paramString = '';
        
        $puso=false;
        foreach($params as $parm){
            $index++;
            $paramString .= $parm;
            if($index < $count){
                $paramString .= $this->getBreadCrumbSymbol();
                
                if(!$puso){
                 $paramString.=$mod_strings['LBL_MODULE_NAME']."  ";
                 $paramString .= $this->getBreadCrumbSymbol();
                    $puso=true;
                }
            }
        }

        if(!empty($paramString)){
               $theTitle .= "<h2>$paramString </h2>\n";
           }

        if ($show_help) {
            $theTitle .= "<span class='utils'>";

            $createImageURL = SugarThemeRegistry::current()->getImageURL('create-record.gif');
            $url = ajaxLink("index.php?module=$module&action=EditView&return_module=$module&return_action=DetailView");
            $theTitle .= <<<EOHTML
&nbsp;
<a id="create_image" href="{$url}" class="utilsLink">
<img src='{$createImageURL}' alt='{$GLOBALS['app_strings']['LNK_CREATE']}'></a>
<a id="create_link" href="{$url}" class="utilsLink">
{$GLOBALS['app_strings']['LNK_CREATE']}
</a>
EOHTML;
        }

        $theTitle .= "</span></div>\n";
        return $theTitle;
        }
}
?>