/**
 * Construct a new AndExpression.
 */
SUGAR.AndExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.AndExpression,SUGAR.BooleanExpression,{className:"AndExpression",evaluate:function(){var params=this.getParameters();if(!(params instanceof Array))params=[params];for(var i=0;i<params.length;i++){if(params[i].evaluate()!=SUGAR.expressions.Expression.TRUE)
return SUGAR.expressions.Expression.FALSE;}
return SUGAR.expressions.Expression.TRUE;}});SUGAR.BinaryDependencyExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.BinaryDependencyExpression,SUGAR.BooleanExpression,{className:"BinaryDependencyExpression",evaluate:function(){var params=this.getParameters();var a=params[0].evaluate();var b=params[1].evaluate();if(a!=null&&b!=null&&a!=''&&b!='')
return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 2;},getParameterTypes:function(){return['string','string'];}});SUGAR.EqualExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.EqualExpression,SUGAR.BooleanExpression,{className:"EqualExpression",evaluate:function(){var params=this.getParameters();var a=params[0].evaluate();var b=params[1].evaluate();if(a==b)return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 2;},getParameterTypes:function(){return['generic','generic'];}});SUGAR.GreaterThanExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.GreaterThanExpression,SUGAR.BooleanExpression,{className:"GreaterThanExpression",evaluate:function(){var params=this.getParameters();var a=params[0].evaluate();var b=params[1].evaluate();if(a>b)return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 2;},getParameterTypes:function(){return['number','number'];}});SUGAR.isAfterExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.isAfterExpression,SUGAR.BooleanExpression,{className:"isAfterExpression",evaluate:function(){var params=this.getParameters();var a=SUGAR.util.DateUtils.parse(params[0].evaluate());var b=SUGAR.util.DateUtils.parse(params[1].evaluate());if(a>b)return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 2;},getParameterTypes:function(){return['date','date'];}});SUGAR.IsAlphaExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsAlphaExpression,SUGAR.BooleanExpression,{className:"IsAlphaExpression",evaluate:function(){var params=this.getParameters().evaluate();if(/^[a-zA-Z]+$/.test(params))return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.IsAlphaNumericExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsAlphaNumericExpression,SUGAR.BooleanExpression,{className:"IsAlphaNumericExpression",evaluate:function(){var params=this.getParameters().evaluate();if(/^[a-zA-Z0-9]+$/.test(params))return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.isBeforeExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.isBeforeExpression,SUGAR.BooleanExpression,{className:"isBeforeExpression",evaluate:function(){var params=this.getParameters();var a=params[0].evaluate();var b=params[1].evaluate();if(a<b)return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 2;},getParameterTypes:function(){return['date','date'];}});SUGAR.IsInEnumExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsInEnumExpression,SUGAR.BooleanExpression,{className:"IsInEnumExpression",evaluate:function(){var params=this.getParameters();var haystack=params[1].evaluate();var needle=params[0].evaluate();for(var i=0;i<haystack.length;i++){var value=haystack[i];if(value instanceof SUGAR.expressions.Expression)value=value.evaluate();if(value==needle)return SUGAR.expressions.Expression.TRUE;}
return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 2;},getParameterTypes:function(){return['generic','enum'];}});SUGAR.IsInRangeExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsInRangeExpression,SUGAR.BooleanExpression,{className:"IsInRangeExpression",evaluate:function(){var params=this.getParameters();var number=params[0].evaluate();var min=params[1].evaluate();var max=params[2].evaluate();if(number>=min&&number<=max)
return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 3;},getParameterTypes:function(){return['number','number','number'];}});SUGAR.IsNumericExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsNumericExpression,SUGAR.BooleanExpression,{className:"IsNumericExpression",evaluate:function(){var params=this.getParameters().evaluate();if(/^(\-)?([0-9]+)?(\.[0-9]+)?$/.test(params))return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.IsRequiredCollectionExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsRequiredCollectionExpression,SUGAR.BooleanExpression,{className:"IsRequiredCollectionExpression",evaluate:function(){var params=this.getParameters().evaluate();table=document.getElementById(params);children=YAHOO.util.Dom.getElementsByClassName('sqsEnabled','input',table);for(id in children){if(trim(children[id].value)!=''){return SUGAR.expressions.Expression.TRUE;}}
return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.IsValidDateExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsValidDateExpression,SUGAR.BooleanExpression,{className:"IsValidDateExpression",evaluate:function(){var dtStr=this.getParameters().evaluate();if(typeof dtStr!="string")return SUGAR.expressions.Expression.FALSE;if(dtStr=="")return SUGAR.expressions.Expression.TRUE;var format="Y-m-d";if(SUGAR.expressions.userPrefs)
format=SUGAR.expressions.userPrefs.datef;var date=SUGAR.util.DateUtils.parse(dtStr,format);if(date!=false&&date!="Invalid Date")
return SUGAR.expressions.Expression.TRUE;return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.IsValidDBNameExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsValidDBNameExpression,SUGAR.BooleanExpression,{className:"IsValidDBNameExpression",evaluate:function(){var str=this.getParameters().evaluate();if(str.length==0){return true;}
if(!/^[a-zA-Z][a-zA-Z\_0-9]+$/.test(str))
return SUGAR.expressions.Expression.FALSE;return SUGAR.expressions.Expression.TRUE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.IsValidEmailExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsValidEmailExpression,SUGAR.BooleanExpression,{className:"IsValidEmailExpression",evaluate:function(){var emailStr=this.getParameters().evaluate();if(typeof emailStr!="string")return SUGAR.expressions.Expression.FALSE;if(emailStr=="")return SUGAR.expressions.Expression.TRUE;var lastChar=emailStr.charAt(emailStr.length-1);if(!lastChar.match(/[^\.]/i))return SUGAR.expressions.Expression.FALSE;var emailArr=emailStr.split(/[,;]/);for(var i=0;i<emailArr.length;i++){var emailAddress=emailArr[i];emailAddress=emailAddress.replace(/^\s+|\s+$/g,"");if(emailAddress!=''){if(!/^\s*[\w.%+\-]+@([A-Z0-9-]+\.)*[A-Z0-9-]+\.[A-Z]{2,}\s*$/i.test(emailAddress)&&!/^.*<[A-Z0-9._%+\-]+?@([A-Z0-9-]+\.)*[A-Z0-9-]+\.[A-Z]{2,}>\s*$/i.test(emailAddress))
return SUGAR.expressions.Expression.FALSE;}}
return SUGAR.expressions.Expression.TRUE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.IsValidPhoneExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsValidPhoneExpression,SUGAR.BooleanExpression,{className:"IsValidPhoneExpression",evaluate:function(){var phoneStr=this.getParameters().evaluate();if(phoneStr.length==0)return SUGAR.expressions.Expression.TRUE;if(!/^\+?[0-9\-\(\)\s]+$/.test(phoneStr))
return SUGAR.expressions.Expression.FALSE;return SUGAR.expressions.Expression.TRUE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.IsValidTimeExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IsValidTimeExpression,SUGAR.BooleanExpression,{className:"IsValidTimeExpression",evaluate:function(){var timeStr=this.getParameters().evaluate();var time_reg_format=/^(\d{1,2}):(\d\d)\s*([ap]m)?$/i;if(timeStr.length==0)return SUGAR.expressions.Expression.TRUE;myregexp=new RegExp(time_reg_format)
if(!myregexp.test(timeStr))return SUGAR.expressions.Expression.FALSE;var matches=timeStr.match(time_reg_format);if(matches[1]>23||matches[2]>59){return SUGAR.expressions.Expression.FALSE;}
if(matches[3]&&(matches[1]>12||matches[1]==0)){return SUGAR.expressions.Expression.FALSE;}
return SUGAR.expressions.Expression.TRUE;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.NotExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.NotExpression,SUGAR.BooleanExpression,{className:"NotExpression",evaluate:function(){if(this.getParameters().evaluate()==SUGAR.expressions.Expression.FALSE)
return SUGAR.expressions.Expression.TRUE;else
return SUGAR.expressions.Expression.FALSE;},getParamCount:function(){return 1;}});SUGAR.OrExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.OrExpression,SUGAR.BooleanExpression,{className:"OrExpression",evaluate:function(){var params=this.getParameters();for(var i=0;i<params.length;i++){if(params[i].evaluate()==SUGAR.expressions.Expression.TRUE)
return SUGAR.expressions.Expression.TRUE;}
return SUGAR.expressions.Expression.FALSE;}});SUGAR.AddDaysExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.AddDaysExpression,SUGAR.DateExpression,{className:"AddDaysExpression",evaluate:function(){var params=this.getParameters();var date=SUGAR.util.DateUtils.parse(params[0].evaluate(),'user');var days=params[1].evaluate();var d=new Date(date);d.setDate(d.getDate()+days);return d;},getParamCount:function(){return 2;},getParameterTypes:function(){return['date','number'];}});SUGAR.DayOfWeekExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.DayOfWeekExpression,SUGAR.NumericExpression,{className:"DayOfWeekExpression",evaluate:function(){var time=this.getParameters().evaluate();return new Date(time).getDay();},getParamCount:function(){return 1;},getParameterTypes:function(){return['date'];}});SUGAR.DaysUntilExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.DaysUntilExpression,SUGAR.NumericExpression,{className:"DaysUntilExpression",evaluate:function(){var then=SUGAR.util.DateUtils.parse(this.getParameters().evaluate());var now=new Date();now.setHours(0);now.setMinutes(0);now.setSeconds(0);then.setHours(1);then.setMinutes(0);then.setSeconds(0);var diff=then-now;var days=Math.floor(diff / 86400000);var extrasec=diff%86400000;var extra=new Date();extra.setTime(then.getTime()+extrasec);if(extra.getDate()!=then.getDate())
days++;return days;},getParamCount:function(){return 1;},getParameterTypes:function(){return['date'];}});SUGAR.DefineDateExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.DefineDateExpression,SUGAR.DateExpression,{className:"DefineDateExpression",evaluate:function(){var params=this.getParameters().evaluate();var time=SUGAR.util.DateUtils.parse(params,'user');if(time==false)throw"Incorrect date format";return time;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.MonthOfYearExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.MonthOfYearExpression,SUGAR.NumericExpression,{className:"MonthOfYearExpression",evaluate:function(){var time=this.getParameters().evaluate();return new Date(time).getMonth()+1;},getParamCount:function(){return 1;},getParameterTypes:function(){return['date'];}});SUGAR.NowExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.NowExpression,SUGAR.DateExpression,{className:"NowExpression",evaluate:function(){var d=SUGAR.util.DateUtils.getUserTime();d.setSeconds(0);return d;},getParamCount:function(){return 0;}});SUGAR.TodayExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.TodayExpression,SUGAR.DateExpression,{className:"TodayExpression",evaluate:function(){var d=new Date();d.setHours(0);d.setMinutes(0);d.setSeconds(0);return d;},getParamCount:function(){return 0;}});SUGAR.DefineEnumExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.DefineEnumExpression,SUGAR.EnumExpression,{className:"DefineEnumExpression",evaluate:function(){var params=this.getParameters();var array=[];if(typeof(params.length)!="undefined")
{for(var i=0;i<params.length;i++){array[array.length]=params[i].evaluate();}}else{return[params.evaluate()];}
return array;},getParameterTypes:function(){return'generic';}});SUGAR.SugarDropDownExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SugarDropDownExpression,SUGAR.EnumExpression,{className:"SugarDropDownExpression",evaluate:function(){var dd=this.getParameters().evaluate();var arr=SUGAR.language.get('app_list_strings',dd);var ret=[];if(arr=="undefined")return[];for(var i in arr){if(typeof i=="string")
ret[ret.length]=i;}
return ret;},getParamCount:function(){return 1;},getParameterTypes:function(){return'string';}});SUGAR.SugarTranslatedDropDownExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SugarTranslatedDropDownExpression,SUGAR.EnumExpression,{className:"SugarTranslatedDropDownExpression",evaluate:function(){var dd=this.getParameters().evaluate();var arr=SUGAR.language.get('app_list_strings',dd);var ret=[];if(arr=="undefined")return[];for(var i in arr){if(typeof i=="string")
ret[ret.length]=arr[i];}
return ret;},getParamCount:function(){return 1;},getParameterTypes:function(){return'string';}});SUGAR.ConditionExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.ConditionExpression,SUGAR.GenericExpression,{className:"ConditionExpression",evaluate:function(){var params=this.getParameters();var cond=params[0].evaluate();if(cond==SUGAR.expressions.Expression.TRUE){return params[1].evaluate();}else{return params[2].evaluate();}},getParamCount:function(){return 3;},getParameterTypes:function(){return['boolean','generic','generic'];}});SUGAR.IndexValueExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IndexValueExpression,SUGAR.GenericExpression,{className:"IndexValueExpression",evaluate:function(){var params=this.getParameters();var array=params[1].evaluate();var index=params[0].evaluate();if(index>=array.length||index<0)
throw("value_at: Attempt to access an index out of bounds");return array[index];},getParamCount:function(){return 2;},getParameterTypes:function(){return['number','enum'];}});SUGAR.RelatedFieldExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.RelatedFieldExpression,SUGAR.GenericExpression,{className:"RelatedFieldExpression",evaluate:function(){var params=this.getParameters();var linkField=params[0].evaluate();var relField=params[1].evaluate();if(typeof(linkField)=="string"&&linkField!="")
{var module=SUGAR.forms.AssignmentHandler.getValue("module");var record=SUGAR.forms.AssignmentHandler.getValue("record");var linkDef=SUGAR.forms.AssignmentHandler.getLink(linkField);var linkId=false,url="index.php?";if(linkDef&&linkDef.id_name&&linkDef.module){var idField=document.getElementById(linkDef.id_name);if(idField&&idField.tagName=="INPUT")
{linkId=SUGAR.forms.AssignmentHandler.getValue(linkDef.id_name,false,true);module=linkDef.module;}}
if(!module||(!record&&!linkId))
return"";if(linkId&&linkId!="")
{url+=SUGAR.util.paramsToUrl({module:"ExpressionEngine",action:"getRelatedValue",record_id:linkId,field:relField,tmodule:module});}else{url+=SUGAR.util.paramsToUrl({module:"ExpressionEngine",action:"execFunction",id:record,rel_id:linkId,tmodule:module,"function":"related",params:YAHOO.lang.JSON.stringify(['$'+linkField,'"'+relField+'"'])});}
return YAHOO.lang.JSON.parse(http_fetch_sync(url).responseText);}else if(typeof(rel)=="object"){}
return"";},getParamCount:function(){return 2;},getParameterTypes:function(){return['relate','string'];}});SUGAR.SugarFieldExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SugarFieldExpression,SUGAR.GenericExpression,{className:"SugarFieldExpression",evaluate:function(){var varName=this.getParameters().evaluate();return SUGAR.forms.AssignmentHandler.getValue(varName);},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.AbsoluteValueExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.AbsoluteValueExpression,SUGAR.NumericExpression,{className:"AbsoluteValueExpression",evaluate:function(){return Math.abs(this.getParameters().evaluate());},getParamCount:function(){return 1;}});SUGAR.AddExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.AddExpression,SUGAR.NumericExpression,{className:"AddExpression",evaluate:function(){var params=this.getParameters();var sum=0;for(var i=0;i<params.length;i++)sum+=params[i].evaluate();return sum;}});SUGAR.AverageExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.AverageExpression,SUGAR.NumericExpression,{className:"AverageExpression",evaluate:function(){var sum=0;var count=0;var params=this.getParameters();for(var i=0;i<params.length;i++){sum+=params[i].evaluate();count++;}
return(sum / count);}});SUGAR.AverageRelatedExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.AverageRelatedExpression,SUGAR.NumericExpression,{className:"AverageRelatedExpression",evaluate:function(){var params=this.getParameters();var linkField=params[0].evaluate();var relField=params[1].evaluate();if(typeof(linkField)=="string"&&linkField!="")
{var module=SUGAR.forms.AssignmentHandler.getValue("module");var record=SUGAR.forms.AssignmentHandler.getValue("record");if(!module||!record)
return"";var url="index.php?"+SUGAR.util.paramsToUrl({module:"ExpressionEngine",action:"execFunction",id:record,tmodule:module,"function":"rollupAve",params:YAHOO.lang.JSON.stringify(['$'+linkField,'"'+relField+'"'])});return YAHOO.lang.JSON.parse(http_fetch_sync(url).responseText);}else if(typeof(rel)=="object"){}
return"";},getParamCount:function(){return 2;},getParameterTypes:function(){return['relate','string'];}});SUGAR.CeilingExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.CeilingExpression,SUGAR.NumericExpression,{className:"CeilingExpression",evaluate:function(){return Math.ceil(this.getParameters().evaluate());},getParamCount:function(){return 1;}});SUGAR.CountRelatedExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.CountRelatedExpression,SUGAR.NumericExpression,{className:"CountRelatedExpression",evaluate:function(){var linkField=this.getParameters().evaluate();if(typeof(linkField)=="string"&&linkField!="")
{var module=SUGAR.forms.AssignmentHandler.getValue("module");var record=SUGAR.forms.AssignmentHandler.getValue("record");if(!module||!record)
return"";var url="index.php?"+SUGAR.util.paramsToUrl({module:"ExpressionEngine",action:"execFunction",id:record,tmodule:module,"function":"count",params:YAHOO.lang.JSON.stringify(['$'+linkField])});return YAHOO.lang.JSON.parse(http_fetch_sync(url).responseText);}else if(typeof(rel)=="object"){}
return"";},getParamCount:function(){return 1;},getParameterTypes:function(){return['relate'];}});SUGAR.DivideExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.DivideExpression,SUGAR.NumericExpression,{className:"DivideExpression",evaluate:function(){var params=this.getParameters();var numerator=params[0].evaluate();var denominator=params[1].evaluate();if(denominator==0)
throw"Devision by 0 error";return numerator/denominator;},getParamCount:function(){return 2;}});SUGAR.FloorExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.FloorExpression,SUGAR.NumericExpression,{className:"FloorExpression",evaluate:function(){return Math.floor(this.getParameters().evaluate());},getParamCount:function(){return 1;}});SUGAR.IndexOfExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.IndexOfExpression,SUGAR.NumericExpression,{className:"IndexOfExpression",evaluate:function(){var params=this.getParameters();var arr=params[1].evaluate();var val=params[0].evaluate();for(var i=0;i<arr.length;i++){if(arr[i]==val){return i;}}
return-1;},getParamCount:function(){return 2;},getParameterTypes:function(){return['generic','enum'];}});SUGAR.LogExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.LogExpression,SUGAR.NumericExpression,{className:"LogExpression",evaluate:function(){var params=this.getParameters();var base=params[1].evaluate();var value=params[0].evaluate();return Math.log(value)/ Math.log(base);},getParamCount:function(){return 2;}});SUGAR.MaximumExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.MaximumExpression,SUGAR.NumericExpression,{className:"MaximumExpression",evaluate:function(){var params=this.getParameters();var max=null;for(var i=0;i<params.length;i++)
{var val=params[i].evaluate();if(max==null||val>max)
max=val;}
return max;}});SUGAR.MaxRelatedExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.MaxRelatedExpression,SUGAR.NumericExpression,{className:"MaxRelatedExpression",evaluate:function(){var params=this.getParameters();var linkField=params[0].evaluate();var relField=params[1].evaluate();if(typeof(linkField)=="string"&&linkField!="")
{var module=SUGAR.forms.AssignmentHandler.getValue("module");var record=SUGAR.forms.AssignmentHandler.getValue("record");if(!module||!record)
return"";var url="index.php?"+SUGAR.util.paramsToUrl({module:"ExpressionEngine",action:"execFunction",id:record,tmodule:module,"function":"rollupMax",params:YAHOO.lang.JSON.stringify(['$'+linkField,'"'+relField+'"'])});return YAHOO.lang.JSON.parse(http_fetch_sync(url).responseText);}else if(typeof(rel)=="object"){}
return"";},getParamCount:function(){return 2;},getParameterTypes:function(){return['relate','string'];}});SUGAR.MedianExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.MedianExpression,SUGAR.NumericExpression,{className:"MedianExpression",evaluate:function(){var params=this.getParameters();var values=new Array();for(var i=0;i<params.length;i++)
values[values.length]=parseFloat(params[i].evaluate());values.sort(function(a,b){return a-b;});if(values.length%2==0)
{return(values[values.length/2]+values[values.length/2-1])/ 2;}
return values[Math.round(values.length/2)-1];}});SUGAR.MinimumExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.MinimumExpression,SUGAR.NumericExpression,{className:"MinimumExpression",evaluate:function(){var params=this.getParameters();var min=null;for(var i=0;i<params.length;i++)
{var val=params[i].evaluate();if(min==null||val<min)
min=val;}
return min;}});SUGAR.MinRelatedExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.MinRelatedExpression,SUGAR.NumericExpression,{className:"MinRelatedExpression",evaluate:function(){var params=this.getParameters();var linkField=params[0].evaluate();var relField=params[1].evaluate();if(typeof(linkField)=="string"&&linkField!="")
{var module=SUGAR.forms.AssignmentHandler.getValue("module");var record=SUGAR.forms.AssignmentHandler.getValue("record");if(!module||!record)
return"";var url="index.php?"+SUGAR.util.paramsToUrl({module:"ExpressionEngine",action:"execFunction",id:record,tmodule:module,"function":"rollupMin",params:YAHOO.lang.JSON.stringify(['$'+linkField,'"'+relField+'"'])});return YAHOO.lang.JSON.parse(http_fetch_sync(url).responseText);}else if(typeof(rel)=="object"){}
return"";},getParamCount:function(){return 2;},getParameterTypes:function(){return['relate','string'];}});SUGAR.MultiplyExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.MultiplyExpression,SUGAR.NumericExpression,{className:"MultiplyExpression",evaluate:function(){var params=this.getParameters();var product=1;for(var i=0;i<params.length;i++)product*=params[i].evaluate();return product;}});SUGAR.NaturalLogExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.NaturalLogExpression,SUGAR.NumericExpression,{className:"NaturalLogExpression",evaluate:function(){return Math.log(this.getParameters().evaluate());},getParamCount:function(){return 1;}});SUGAR.NegateExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.NegateExpression,SUGAR.NumericExpression,{className:"NegateExpression",evaluate:function(){return-1*this.getParameters().evaluate();},getParamCount:function(){return 1;}});SUGAR.PowerExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.PowerExpression,SUGAR.NumericExpression,{className:"PowerExpression",evaluate:function(){var params=this.getParameters();var base=params[0].evaluate();var power=params[1].evaluate();return Math.pow(base,power);},getParamCount:function(){return 2;}});SUGAR.StandardDeviationExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.StandardDeviationExpression,SUGAR.NumericExpression,{className:"StandardDeviationExpression",evaluate:function(){var params=this.getParameters();var values=new Array();var sum=0;var count=params.length;for(var i=0;i<params.length;i++){value=params[i].evaluate();values[values.length]=value;sum+=value;}
var mean=sum / count;var deviation_sum=0;for(var i=0;i<values.length;i++)
deviation_sum+=Math.pow(values[i]-mean,2);var variance=(1/count)*deviation_sum;return Math.sqrt(variance);}});SUGAR.StringLengthExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.StringLengthExpression,SUGAR.NumericExpression,{className:"StringLengthExpression",evaluate:function(){var p=this.getParameters().evaluate()+"";return p.length;},getParamCount:function(){return 1;},getParameterTypes:function(){return'string';}});SUGAR.SubtractExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SubtractExpression,SUGAR.NumericExpression,{className:"SubtractExpression",evaluate:function(){var params=this.getParameters();var diff=params[0].evaluate();for(var i=1;i<params.length;i++){diff-=params[i].evaluate();}
return diff;}});SUGAR.SumRelatedExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SumRelatedExpression,SUGAR.NumericExpression,{className:"SumRelatedExpression",evaluate:function(){var params=this.getParameters();var linkField=params[0].evaluate();var relField=params[1].evaluate();if(typeof(linkField)=="string"&&linkField!="")
{var module=SUGAR.forms.AssignmentHandler.getValue("module");var record=SUGAR.forms.AssignmentHandler.getValue("record");if(!module||!record)
return"";var url="index.php?"+SUGAR.util.paramsToUrl({module:"ExpressionEngine",action:"execFunction",id:record,tmodule:module,"function":"rollupSum",params:YAHOO.lang.JSON.stringify(['$'+linkField,'"'+relField+'"'])});return YAHOO.lang.JSON.parse(http_fetch_sync(url).responseText);}else if(typeof(rel)=="object"){}
return"";},getParamCount:function(){return 2;},getParameterTypes:function(){return['relate','string'];}});SUGAR.ValueOfExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.ValueOfExpression,SUGAR.NumericExpression,{className:"ValueOfExpression",evaluate:function(){var val=this.getParameters().evaluate()+"";val=val.replace(/,/g,"");var out=0;if(val.indexOf(".")!=-1)
out=parseFloat(val);else
out=parseInt(val);if(isNaN(out))
throw"Error: '"+val+"' is not a number";return out;},getParamCount:function(){return 1;},getParameterTypes:function(){return'generic';}});SUGAR.CharacterAtExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.CharacterAtExpression,SUGAR.StringExpression,{className:"CharacterAtExpression",evaluate:function(){var params=this.getParameters();var str=params[0].evaluate()+"";var idx=params[1].evaluate();return str.charAt(idx);},getParamCount:function(){return 2;},getParameterTypes:function(){return['string','number'];}});SUGAR.ConcatenateExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.ConcatenateExpression,SUGAR.StringExpression,{className:"ConcatenateExpression",evaluate:function(){var concat="";var params=this.getParameters();for(var i=0;i<params.length;i++){concat+=params[i].evaluate();}
return concat;}});SUGAR.ContainsExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.ContainsExpression,SUGAR.BooleanExpression,{className:"ContainsExpression",evaluate:function(){var params=this.getParameters();var haystack=params[0].evaluate()+"";var needle=params[1].evaluate();return(haystack.indexOf(needle)>-1?SUGAR.expressions.Expression.TRUE:SUGAR.expressions.Expression.FALSE);},getParamCount:function(){return 2;},getParameterTypes:function(){return'string';}});SUGAR.DefineStringExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.DefineStringExpression,SUGAR.StringExpression,{className:"DefineStringExpression",evaluate:function(){return this.getParameters().evaluate()+"";},getParamCount:function(){return 1;},getParameterTypes:function(){return['generic'];}});SUGAR.FormatedNameExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.FormatedNameExpression,SUGAR.StringExpression,{className:"FormatedNameExpression",evaluate:function(){var params=this.getParameters();var comp={s:params[0].evaluate(),f:params[1].evaluate(),l:params[2].evaluate(),t:params[3].evaluate()};var name='';for(i=0;i<name_format.length;i++){if(comp[name_format.substr(i,1)]!=undefined){name+=comp[name_format.substr(i,1)];}else{name+=name_format.substr(i,1);}}
return name;},getParamCount:function(){return 4;}});SUGAR.StrToLowerExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.StrToLowerExpression,SUGAR.StringExpression,{className:"StrToLowerExpression",evaluate:function(){var string=this.getParameters().evaluate()+"";return string.toLowerCase();}});SUGAR.StrToUpperExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.StrToUpperExpression,SUGAR.StringExpression,{className:"StrToUpperExpression",evaluate:function(){var string=this.getParameters().evaluate()+"";return string.toUpperCase();}});SUGAR.SubStrExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SubStrExpression,SUGAR.StringExpression,{className:"SubStrExpression",evaluate:function(){var params=this.getParameters();var str=params[0].evaluate()+"";var fromIdx=params[1].evaluate();var strLength=params[2].evaluate();return str.substr(fromIdx,strLength);},getParamCount:function(){return 3;},getParameterTypes:function(){return['string','number','number'];}});SUGAR.SugarDropDownValueExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SugarDropDownValueExpression,SUGAR.StringExpression,{className:"SugarDropDownValueExpression",evaluate:function(){var params=this.getParameters();var list=params[0].evaluate();var key=params[1].evaluate();var arr=SUGAR.language.get('app_list_strings',list);if(arr=="undefined")return"";for(var i in arr){if(typeof i=="string"&&i==key)
return arr[i];}
return"";},getParamCount:function(){return 2;}});SUGAR.SugarTranslateExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.SugarTranslateExpression,SUGAR.StringExpression,{className:"SugarTranslateExpression",evaluate:function(){var params=this.getParameters();var module=params[1].evaluate();if(module=="")
module="app_strings";var key=params[0].evaluate();return SUGAR.language.get(module,key);},getParamCount:function(){return 2;}});SUGAR.DefineTimeExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.DefineTimeExpression,SUGAR.TimeExpression,{className:"DefineTimeExpression",evaluate:function(){var params=this.getParameters().evaluate();var time=Date.parse(params);if(isNaN(time))throw"Incorrect time format";return time;},getParamCount:function(){return 1;},getParameterTypes:function(){return['string'];}});SUGAR.HourOfDayExpression=function(params){this.init(params);}
SUGAR.util.extend(SUGAR.HourOfDayExpression,SUGAR.TimeExpression,{className:"HourOfDayExpression",evaluate:function(){var time=this.getParameters().evaluate();return new Date(time).getHours();},getParamCount:function(){return 1;}});SUGAR.forms.AssignToUserAction=function(valExpr){this.expr=valExpr;this.target='assigned_user_name';this.dataSource=new YAHOO.util.DataSource('index.php?',{responseType:YAHOO.util.XHRDataSource.TYPE_JSON,responseSchema:{resultsList:'fields',total:'totalCount',metaNode:'fields',metaFields:{total:'totalCount',fields:'fields'}},connMethodPost:true});};SUGAR.util.extend(SUGAR.forms.AssignToUserAction,SUGAR.forms.AbstractAction,{exec:function(context)
{if(typeof(context)=='undefined')
context=this.context;var userName=this.evalExpression(this.expr,context);var params=SUGAR.util.paramsToUrl({to_pdf:'true',module:'Home',action:'quicksearchQuery',data:encodeURIComponent(YAHOO.lang.JSON.stringify(sqs_objects['EditView_'+this.target])),query:userName});this.sqs=sqs_objects['EditView_'+this.target];this.dataSource.sendRequest(params,{success:function(param,resp){if(resp.results.length>0)
{var match=resp.results[0];for(var i=0;i<this.sqs.field_list.length;i++)
{SUGAR.forms.AssignmentHandler.assign(this.sqs.populate_list[i],match[this.sqs.field_list[i]]);}}},scope:this});},targetUrl:'index.php?module=Home&action=TaxRate&to_pdf=1'});SUGAR.forms.PanelVisibilityAction=function(target,expr)
{this.target=target;this.expr='cond('+expr+', "", "none")';}
SUGAR.util.extend(SUGAR.forms.PanelVisibilityAction,SUGAR.forms.AbstractAction,{hideChildren:function(){if(typeof(SUGAR.forms.PanelVisibilityAction.hiddenFields)=="undefined")
{this.createFieldBin();}
var target=document.getElementById(this.target);var field_table=target.getElementsByTagName('table')[0];if(field_table!=null)
{field_table.id=this.target+"_tbl";SUGAR.forms.PanelVisibilityAction.hiddenFields.appendChild(field_table);}},showChildren:function(){var target=document.getElementById(this.target);var field_table=document.getElementById(this.target+"_tbl");if(field_table!=null)
target.appendChild(field_table);},createFieldBin:function(){var tmpElem=document.createElement('div');tmpElem.id='panelHiddenFields';tmpElem.style.display='none';document.body.appendChild(tmpElem);SUGAR.forms.PanelVisibilityAction.hiddenFields=tmpElem;},exec:function(context)
{if(typeof(context)=='undefined')
context=this.context;try{var visibility=this.evalExpression(this.expr,context);var target=document.getElementById(this.target);if(target!=null){if(target.style.display!='none')
SUGAR.forms.animation.sizes[this.target]=target.clientHeight;if(SUGAR.forms.AssignmentHandler.ANIMATE){if(visibility=='none'&&target.style.display!='none'){SUGAR.forms.animation.Collapse(this.target,this.hideChildren,this);return;}
else if(visibility!='none'&&target.style.display=='none')
{this.showChildren();SUGAR.forms.animation.Expand(this.target);return;}}
if(visibility=='none')
this.hideChildren();else
this.showChildren();target.style.display=visibility;}}catch(e){if(console&&console.log)console.log(e);}}});SUGAR.forms.animation.sizes={};SUGAR.forms.animation.Collapse=function(target,callback,scope)
{var t=document.getElementById(target);if(t==null)return;SUGAR.forms.animation.sizes[target]=t.clientHeight;t.style.overflow="hidden";var collapseAnim=new YAHOO.util.Anim(target,{height:{to:0}},0.5,YAHOO.util.Easing.easeBoth);collapseAnim.onComplete.subscribe(function(){t.style.display='none';callback.call(scope);});collapseAnim.animate();};SUGAR.forms.animation.Expand=function(target)
{var t=document.getElementById(target);if(t==null)return;t.style.overflow="hidden";t.style.height="0px";t.style.display="";var expandAnim=new YAHOO.util.Anim(target,{height:{to:SUGAR.forms.animation.sizes[target]}},0.5,YAHOO.util.Easing.easeBoth);expandAnim.onComplete.subscribe(function(){t.style.height='auto';});expandAnim.animate();};SUGAR.forms.ReadOnlyAction=function(target,expr){this.target=target;this.expr=expr;}
SUGAR.util.extend(SUGAR.forms.ReadOnlyAction,SUGAR.forms.AbstractAction,{exec:function(context)
{if(typeof(context)=='undefined')context=this.context;var el=SUGAR.forms.AssignmentHandler.getElement(this.target);if(!el)
return;var val=this.evalExpression(this.expr,context);var set=val==SUGAR.expressions.Expression.TRUE;this.setReadOnly(el,set);this.setDateField(el,set);},setReadOnly:function(el,set)
{var D=YAHOO.util.Dom;var property=el.type=='checkbox'||'select'?'disabled':'readonly';el[property]=set;if(set)
{D.setStyle(el,'background-color','#EEE');if(!SUGAR.isIE)
D.setStyle(el,'color','#22');}else
{D.setStyle(el,'background-color','');if(!SUGAR.isIE)
D.setStyle(el,'color','');}},setDateField:function(el,set)
{var D=YAHOO.util.Dom,id=el.id,trig=D.get(id+'_trigger');if(!trig)return;var fields=[D.get(id+'_date'),D.get(id+'_minutes'),D.get(id+'_meridiem'),D.get(id+'_hours')];for(var i in fields)
if(fields[i]&&fields[i].id)
this.setReadOnly(fields[i],set);if(set)
D.setStyle(trig,'display','none');else
D.setStyle(trig,'display','');}});SUGAR.forms.SetOptionsAction=function(target,keyExpr,labelExpr){this.keyExpr=keyExpr;this.labelExpr=labelExpr;this.target=target;};SUGAR.util.extend(SUGAR.forms.SetOptionsAction,SUGAR.forms.AbstractAction,{exec:function(context){if(typeof(context)=='undefined')
context=this.context;var field=SUGAR.forms.AssignmentHandler.getElement(this.target);if(field==null)return null;var keys=this.evalExpression(this.keyExpr,context);var labels=this.evalExpression(this.labelExpr,context);var selected='';if(keys instanceof Array&&field.options!=null)
{var options=field.options;for(var i=0;i<options.length;i++){if(options[i].selected)
selected=options[i].value;}
while(options.length>0){field.remove(options[0]);}
if(typeof(labels)=='string')
{var fullSet=SUGAR.language.get('app_list_strings',labels);labels=[];for(var i in keys)
{labels[i]=fullSet[keys[i]];}}
var new_opt;for(var i in keys){if(labels instanceof Array)
{if(typeof keys[i]=='string')
{if(typeof labels[i]=='string'){new_opt=options[options.length]=new Option(labels[i],keys[i],keys[i]==selected);}
else
{new_opt=options[options.length]=new Option(keys[i],keys[i],keys[i]==selected);}}}
else
{if(typeof keys[0]=='undefined'){if(typeof(keys[i])=='string'){new_opt=options[options.length]=new Option(keys[i],i);}}else{if(typeof(value[i])=='string'){new_opt=options[options.length]=new Option(keys[i],keys[i]);}}}
if(keys[i]==selected)
new_opt.selected=true;}
if(field.value!=selected)
SUGAR.forms.AssignmentHandler.assign(this.target,field.value);var empty=field.options.length==1&&field.value=='';var visAction=new SUGAR.forms.VisibilityAction(this.target,empty?'false':'true','');visAction.setContext(context);visAction.exec();if(SUGAR.forms.AssignmentHandler.ANIMATE&&!empty)
SUGAR.forms.FlashField(field);}}});SUGAR.forms.SetRequiredAction=function(variable,expr,label){this.variable=variable;this.expr=expr;this.label=label;this._el_lbl=document.getElementById(this.label);this.msg=this._el_lbl.innerText;}
SUGAR.util.extend(SUGAR.forms.SetRequiredAction,SUGAR.forms.AbstractAction,{exec:function(context)
{if(typeof(context)=='undefined')
context=this.context;var el=SUGAR.forms.AssignmentHandler.getElement(this.variable);this.required=this.evalExpression(this.expr,context);if(typeof(SUGAR.forms.FormValidator)!='undefined')
SUGAR.forms.FormValidator.setRequired(el.form.name,el.name,this.required);if(this._el_lbl!=null&&el!=null){var p=this._el_lbl,els=YAHOO.util.Dom.getElementsBy(function(e){return e.className=='req';},"span",p),reqSpan=false,fName=el.name;if(els!=null&&els[0]!=null)
reqSpan=els[0];if((this.required==true||this.required=='true')){if(!reqSpan){var node=document.createElement("span");node.innerHTML="<font color='red'>*</font>";node.className="req";this._el_lbl.appendChild(node);var i=this.findInValidate(this.context.formName,fName)
if(i>-1)
validate[this.context.formName][i][2]=true;else
addToValidate(this.context.formName,fName,'text',true,this.msg);}}else{if(p!=null&&reqSpan!=false){p.removeChild(reqSpan);}
var i=this.findInValidate(this.context.formName,fName)
if(i>-1)
validate[this.context.formName][i][2]=false;}}},findInValidate:function(form,field)
{if(validate&&validate[form]){for(var i in validate[form]){if(typeof(validate[form][i])=='object'&&validate[form][i][0]==field)
return i;}}
return-1;}});SUGAR.forms.SetValueAction=function(target,valExpr){this.expr=valExpr;this.target=target;};SUGAR.util.extend(SUGAR.forms.SetValueAction,SUGAR.forms.AbstractAction,{exec:function(context)
{if(typeof(context)=='undefined')
context=this.context;try{var val=this.evalExpression(this.expr,context);context.setValue(this.target,val);}catch(e){context.setValue(this.target,'');}}});SUGAR.forms.StyleAction=function(target,attrs)
{this.target=target;this.attrs=attrs;}
SUGAR.util.extend(SUGAR.forms.StyleAction,SUGAR.forms.AbstractAction,{exec:function(context)
{if(typeof(context)=='undefined')
context=this.context;try{var temp={};for(var i in this.attrs)
{temp[i]=this.evalExpression(this.attrs[i],context);}
SUGAR.forms.AssignmentHandler.setStyle(this.target,temp);}catch(e){return;}}});SUGAR.forms.VisibilityAction=function(target,expr,view)
{this.target=target;this.expr='cond('+expr+', "", "none")';this.view=view;if(!SUGAR.forms.VisibilityAction.initialized)
{var head=document.getElementsByTagName('head')[0];var cssdef='td.vis_action_hidden * { visibility:hidden}'
var newStyle=document.createElement('style');newStyle.setAttribute('type','text/css');if(newStyle.styleSheet)
newStyle.styleSheet.cssText=cssdef;else
newStyle.innerHTML=cssdef;head.appendChild(newStyle);SUGAR.forms.VisibilityAction.initialized=true;}}
SUGAR.util.extend(SUGAR.forms.VisibilityAction,SUGAR.forms.AbstractAction,{exec:function(context)
{if(typeof(context)=='undefined')
context=this.context;try{var Dom=YAHOO.util.Dom;var exp=this.evalExpression(this.expr,context);var hide=exp=='none'||exp=='hidden';var target=SUGAR.forms.AssignmentHandler.getElement(this.target);if(target!=null){var inv_class='vis_action_hidden';var inputTD=Dom.getAncestorByTagName(target,'TD');var labelTD=Dom.getPreviousSiblingBy(inputTD,function(e){if(e.tagName=='TD')return true;return false;});this.wrapContent(labelTD);this.wrapContent(inputTD);var wasHidden=Dom.hasClass(labelTD,inv_class);if(hide)
{Dom.addClass(labelTD,inv_class);Dom.addClass(inputTD,inv_class);}
else
{Dom.removeClass(labelTD,inv_class);Dom.removeClass(inputTD,inv_class);if(wasHidden&&this.view=='EditView')
SUGAR.forms.FlashField(target);}
this.checkRow(Dom.getAncestorByTagName(inputTD,'TR'),inv_class);}}catch(e){if(console&&console.log)console.log(e);}},wrapContent:function(el)
{if(el&&this.containsPlainText(el))
{var span=document.createElement('SPAN');var nodes=[];for(var i=0;i<el.childNodes.length;i++)
{nodes[i]=el.childNodes[i];}
for(var i=0;i<nodes.length;i++)
{span.appendChild(nodes[i]);}
el.appendChild(span);}},containsPlainText:function(el)
{for(var i=0;i<el.childNodes.length;i++)
{var node=el.childNodes[i];if(node.nodeName=='#text'&&YAHOO.lang.trim(node.textContent)!=''){return true;}}
return false;},checkRow:function(el,inv_class)
{var hide=true;for(var i=0;i<el.children.length;i++)
{var node=el.children[i];if(node.tagName.toLowerCase()=='td'&&!YAHOO.util.Dom.hasClass(node,inv_class)){hide=false;break;}}
el.style.display=hide?'none':'';}});SUGAR.FunctionMap={'and':SUGAR.AndExpression,'doBothExist':SUGAR.BinaryDependencyExpression,'equal':SUGAR.EqualExpression,'greaterThan':SUGAR.GreaterThanExpression,'isAfter':SUGAR.isAfterExpression,'isAlpha':SUGAR.IsAlphaExpression,'isAlphaNumeric':SUGAR.IsAlphaNumericExpression,'isBefore':SUGAR.isBeforeExpression,'isInList':SUGAR.IsInEnumExpression,'isInEnum':SUGAR.IsInEnumExpression,'isWithinRange':SUGAR.IsInRangeExpression,'isNumeric':SUGAR.IsNumericExpression,'isRequiredCollection':SUGAR.IsRequiredCollectionExpression,'isValidDate':SUGAR.IsValidDateExpression,'isValidDBName':SUGAR.IsValidDBNameExpression,'isValidEmail':SUGAR.IsValidEmailExpression,'isValidPhone':SUGAR.IsValidPhoneExpression,'isValidTime':SUGAR.IsValidTimeExpression,'not':SUGAR.NotExpression,'or':SUGAR.OrExpression,'addDays':SUGAR.AddDaysExpression,'dayofweek':SUGAR.DayOfWeekExpression,'daysUntil':SUGAR.DaysUntilExpression,'date':SUGAR.DefineDateExpression,'monthofyear':SUGAR.MonthOfYearExpression,'now':SUGAR.NowExpression,'today':SUGAR.TodayExpression,'createList':SUGAR.DefineEnumExpression,'enum':SUGAR.DefineEnumExpression,'getDropdownKeySet':SUGAR.SugarDropDownExpression,'getDD':SUGAR.SugarDropDownExpression,'getDropdownValueSet':SUGAR.SugarTranslatedDropDownExpression,'getTransDD':SUGAR.SugarTranslatedDropDownExpression,'ifElse':SUGAR.ConditionExpression,'cond':SUGAR.ConditionExpression,'valueAt':SUGAR.IndexValueExpression,'related':SUGAR.RelatedFieldExpression,'sugarField':SUGAR.SugarFieldExpression,'abs':SUGAR.AbsoluteValueExpression,'add':SUGAR.AddExpression,'average':SUGAR.AverageExpression,'rollupAve':SUGAR.AverageRelatedExpression,'ceil':SUGAR.CeilingExpression,'ceiling':SUGAR.CeilingExpression,'count':SUGAR.CountRelatedExpression,'divide':SUGAR.DivideExpression,'floor':SUGAR.FloorExpression,'indexOf':SUGAR.IndexOfExpression,'log':SUGAR.LogExpression,'max':SUGAR.MaximumExpression,'rollupMax':SUGAR.MaxRelatedExpression,'median':SUGAR.MedianExpression,'min':SUGAR.MinimumExpression,'rollupMin':SUGAR.MinRelatedExpression,'multiply':SUGAR.MultiplyExpression,'ln':SUGAR.NaturalLogExpression,'negate':SUGAR.NegateExpression,'pow':SUGAR.PowerExpression,'stddev':SUGAR.StandardDeviationExpression,'strlen':SUGAR.StringLengthExpression,'subtract':SUGAR.SubtractExpression,'rollupSum':SUGAR.SumRelatedExpression,'number':SUGAR.ValueOfExpression,'charAt':SUGAR.CharacterAtExpression,'concat':SUGAR.ConcatenateExpression,'contains':SUGAR.ContainsExpression,'toString':SUGAR.DefineStringExpression,'string':SUGAR.DefineStringExpression,'formatName':SUGAR.FormatedNameExpression,'strToLower':SUGAR.StrToLowerExpression,'strToUpper':SUGAR.StrToUpperExpression,'subStr':SUGAR.SubStrExpression,'getDropdownValue':SUGAR.SugarDropDownValueExpression,'getDDValue':SUGAR.SugarDropDownValueExpression,'translateLabel':SUGAR.SugarTranslateExpression,'translate':SUGAR.SugarTranslateExpression,'time':SUGAR.DefineTimeExpression,'hourOfDay':SUGAR.HourOfDayExpression};SUGAR.NumericConstants={'pi':3.14159265359,'e':2.71828182846};
