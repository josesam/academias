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
{if empty({{sugarvar key='value' string=true}})}
{assign var="value" value={{sugarvar key='default_value' string=true}} }
{else}
{assign var="value" value={{sugarvar key='value' string=true}} }
{/if}  

{{capture name=idname assign=idname}}{{sugarvar key='name'}}{{/capture}}
{{if !empty($displayParams.idName)}}
    {{assign var=idname value=$displayParams.idName}}
{{/if}}

{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" id="{{$idname}}_duplicate" name="{{$idname}}_duplicate" value="{$value}"/>
{/if}

<input 
	type="file" id="{{$idname}}" name="{{$idname}}" 
	title="" size="30" maxlength="255" value="" tabindex="0" 
	onchange="SUGAR.image.confirm_imagefile('{{$idname}}');" 
	class="imageUploader"
	{if !empty({{sugarvar key='value' string=true}}) {{if !empty($vardef.calculated)}}|| true{{/if}} }
	style="display:none"
	{/if}  {{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}}
/>

{if empty({{sugarvar key='value' string=true}}) {{if !empty($vardef.calculated)}}&& false{{/if}}}
{else}
<a href="javascript:SUGAR.image.lightbox(Dom.get('img_{{$idname}}').src)">
<img
	id="img_{{$idname}}" 
	name="img_{{$idname}}" 	
	{{if empty($vardef.calculated)}}
	   src='index.php?entryPoint=download&id={{sugarvar key='value'}}&type=SugarFieldImage&isTempFile=1'
	{{else}}
	   src='{{sugarvar key='value'}}'
	{{/if}}
	style='
		{if "{{$vardef.border}}" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "{{$vardef.width}}" eq ""}
			width: auto;
		{else}
			width: {{$vardef.width}}px;
		{/if}
		{if "{{$vardef.height}}" eq ""}
			height: auto;
		{else}
			height: {{$vardef.height}}px;
		{/if}
		{if empty({{sugarvar key='value' string=true}})} 
		  visibility:hidden;
		{/if}
		'	

></a>
{{if empty($vardef.calculated)}}
<img
	id="bt_remove_{{$idname}}" 
	name="bt_remvoe_{{$idname}}" 
	alt="{sugar_translate label='LBL_REMOVE'}"
	title="{sugar_translate label='LBL_REMOVE'}"
	src="{sugar_getimagepath file='delete_inline.gif'}"
	onclick="SUGAR.image.remove_upload_imagefile('{{$idname}}');" 	
	/>

<input 
	id="remove_imagefile_{{$idname}}" name="remove_imagefile_{{$idname}}" 
	type="hidden"  value="" />
{{/if}}
{/if}