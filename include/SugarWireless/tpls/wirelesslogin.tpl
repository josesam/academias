
{*
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

*}
{if $login_error}<br /><div class="error"><small>{$error_message}</small></div><br />{/if}
<!-- LOGIN FORM -->
<div class="sec">
<form method="post" action="index.php">
	<small>{$LBL_USER_NAME}:</small><br />
	<input type="text" name="user_name" value="" autocorrect="off" autocapitalize="off" /><br/>
	<small>{$LBL_PASSWORD}:</small><br />
	<input type="password" value="" name="user_password" /><br/>
	<input type="submit" value="{$LBL_LOGIN_BUTTON_LABEL}" />
	<input type="hidden" value="Users" name="module" />
	<input type="hidden" value="Authenticate" name="action" />
	<input type="hidden" value="Users" name="return_module" />
    <input type="hidden" name="login_module" value="{if isset($smarty.request.login_module)}{$smarty.request.login_module}{else}Users{/if}">
    <input type="hidden" name="login_action" value="{if isset($smarty.request.login_action)}{$smarty.request.login_action}{else}wirelessmain{/if}">
    <input type="hidden" name="login_record" value="{if isset($smarty.request.login_record)}{$smarty.request.login_record}{/if}">
</form>
<p>
<a href="index.php?module=Users&action=Login&mobile=0">{$LBL_NORMAL_LOGIN}</a>
</p>
</div>