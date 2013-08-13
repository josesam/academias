<?php
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

class OpportunitiesViewEdit extends ViewEdit {

 	function OpportunitiesViewEdit(){
 		parent::ViewEdit();
 		$this->useForSubpanel = true;
 	}
 	
 	function display() {
            global $app_list_strings;
            echo '

               <link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
               <link rel="stylesheet" type="text/css" href="custom/include/css/tabla/style.css" />
               ';
             if(file_exists('custom/include/clases/popups/VerificarPopup.php')){
                    include_once 'custom/include/clases/popups/VerificarPopup.php';
                 }

             if(file_exists('custom/include/clases/popups/EtapasPopup.php'))
                include_once 'custom/include/clases/popups/EtapasPopup.php';
                 if(file_exists('custom/include/clases/popups/popMedios.php'))
                include_once 'custom/include/clases/popups/popMedios.php';
if(file_exists('custom/include/clases/popups/popDetalles.php'))
                include_once 'custom/include/clases/popups/popDetalles.php';

            $buttons_to_remove = array('SUBPANELSAVE');

            if(is_array($this->ev->defs['templateMeta']['form']['buttons'])){

                foreach($this->ev->defs['templateMeta']['form']['buttons'] as $id => $button) {
                    if(in_array($button, $buttons_to_remove)) {
                        unset($this->ev->defs['templateMeta']['form']['buttons'][$id]);
                    }
                }
            }
            if(!empty($this->bean->id)){
                if (file_exists('custom/include/clases/varios/ManejoEtapasVenta.php')){
                    include_once('custom/include/clases/varios/ManejoEtapasVenta.php');
                  //  var_dump($this->bean->sales_stage);
                    $manejo=new ManejoEtapasVenta($this->bean->categoria_c);
                    $data=$manejo->prepareEditField($this->bean->sales_stage);
                    $this->bean->sales_stage=$manejo->prepareEditField($this->bean->sales_stage);
                    $app_list_strings['categoria_list']=$manejo->manejoTipoNegocio($this->bean->categoria_c, 'categoria_list');
                    $app_list_strings['tiponegocio_list']==$manejo->manejoTipoNegocio($this->bean->tiponegocio_c, 'tiponegocio_list');

                }


            }


            

            

		$json = getJSONobj();
		$prob_array = $json->encode($app_list_strings['sales_probability_dom']);
		$prePopProb = '';
 		if(empty($this->bean->id) && empty($_REQUEST['probability'])) {
		   $prePopProb = 'document.getElementsByName(\'sales_stage\')[0].onchange();';
		}
		
$probability_script=<<<EOQ
	<script>
	prob_array = $prob_array;
	document.getElementsByName('sales_stage')[0].onchange = function() {
			if(typeof(document.getElementsByName('sales_stage')[0].value) != "undefined" && prob_array[document.getElementsByName('sales_stage')[0].value]
			&& typeof(document.getElementsByName('probability')[0]) != "undefined"
			) {
				document.getElementsByName('probability')[0].value = prob_array[document.getElementsByName('sales_stage')[0].value];
				SUGAR.util.callOnChangeListers(document.getElementsByName('probability')[0]);

			} 
		};
	$prePopProb
	</script>
EOQ;

                if(!empty($this->bean->id)){
                    
                }

	    $this->ss->assign('PROBABILITY_SCRIPT', $probability_script);    
            parent::display();
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