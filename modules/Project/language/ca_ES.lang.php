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

	

$mod_strings = array (
  'LBL_TASK_ID' => 'ID',
  'LBL_TASK_ID_WIDGET' => 'id',
  'LBL_TASK_NAME_WIDGET' => 'description',
  'LBL_DURATION_WIDGET' => 'duration',
  'LBL_START_WIDGET' => 'date_start',
  'LBL_FINISH_WIDGET' => 'date_finish',
  'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
  'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
  'LBL_RESOURCE_NAMES_WIDGET' => 'resource',
  'LBL_GANTT_ONLY' => 'Gantt',
  'LBL_MODULE_NAME' => 'Projecte',
  'LBL_MODULE_TITLE' => 'Projecte Inici',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca de Projectes',
  'LBL_LIST_FORM_TITLE' => 'Llista de Projectes',
  'LBL_HISTORY_TITLE' => 'Històrial',
  'LBL_ID' => 'ID:',
  'LBL_DATE_ENTERED' => 'Data Creació:',
  'LBL_DATE_MODIFIED' => 'Data Modificació:',
  'LBL_ASSIGNED_USER_ID' => 'Assignat a:',
  'LBL_ASSIGNED_USER_NAME' => 'Assignat a:',
  'LBL_MODIFIED_USER_ID' => 'Modificat per:',
  'LBL_CREATED_BY' => 'Creat per:',
  'LBL_TEAM_ID' => 'Equip:',
  'LBL_NAME' => 'Nom:',
  'LBL_PDF_PROJECT_NAME' => 'Nom de Projecte:',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DELETED' => 'Esborrat:',
  'LBL_DATE' => 'Data',
  'LBL_DATE_START' => 'Data Inici:',
  'LBL_DATE_END' => 'Data Fi:',
  'LBL_PRIORITY' => 'Prioritat:',
  'LBL_STATUS' => 'Estat:',
  'LBL_MY_PROJECTS' => 'Els Meus Projectes',
  'LBL_MY_PROJECT_TASKS' => 'Les Meves Tasques de Projecte',
  'LBL_TOTAL_ESTIMATED_EFFORT' => 'Treball Estimat (h):',
  'LBL_TOTAL_ACTUAL_EFFORT' => 'Treball Total Real (h):',
  'LBL_LIST_NAME' => 'Nom',
  'LBL_LIST_DAYS' => 'Dies',
  'LBL_LIST_ASSIGNED_USER_ID' => 'Assignat a',
  'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Treball Total Estimat (h)',
  'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Treball Total Real (h)',
  'LBL_LIST_UPCOMING_TASKS' => 'Tasques de Proper Venciment (1 Setmana)',
  'LBL_LIST_OVERDUE_TASKS' => 'Tasques Vençudes',
  'LBL_LIST_OPEN_CASES' => 'Casos Oberts',
  'LBL_LIST_END_DATE' => 'Data Fi',
  'LBL_LIST_TEAM_ID' => 'Equip',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectes',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tasques de Projecte',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Contactes',
  'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Comptes',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunitats',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Pressupostos',
  'LBL_NEW_FORM_TITLE' => 'Nou Projecte',
  'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Està segur de que vol esborrar aquest contacte d´aquest projecte?',
  'LNK_NEW_PROJECT' => 'Crear Projecte',
  'LNK_PROJECT_LIST' => 'Llista de Projectes',
  'LNK_NEW_PROJECT_TASK' => 'Crear Tasca de Projecte',
  'LNK_PROJECT_TASK_LIST' => 'Tasques de Projecte',
  'LNK_PROJECT_DASHBOARD' => 'El Meu Gràfic de Projecte',
  'LNK_PROJECT_TASKS_DASHBOARD' => 'El Meu Gràfic de Tasques de Projecte',
  'LNK_NEW_PROJECT_TEMPLATES' => 'Crear Plantilla de Projecte',
  'LNK_PROJECT_TEMPLATES_LIST' => 'Plantilles de Projecte',
  'LNK_PROJECT_RESOURCE_REPORT' => 'Informe de Recursos',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proyectes',
  'LBL_ACTIVITIES_TITLE' => 'Activitats',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Històrial',
  'LBL_QUICK_NEW_PROJECT' => 'Nou Projecte',
  'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tasques de Projecte',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunitats',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Incidències',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productes',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Pressupostos',
  'LBL_RESOURCES_SUBPANEL_TITLE' => 'Recursos',
  'LBL_RESOURCE_NAME' => 'Nom',
  'LBL_RESOURCE_TYPE' => 'Tipus',
  'LBL_TASK_NAME' => 'Nom de Tasca',
  'LBL_DURATION' => 'Duració',
  'LBL_ACTUAL_DURATION' => 'Duració Real',
  'LBL_START' => 'Inici',
  'LBL_FINISH' => 'Fi',
  'LBL_PREDECESSORS' => 'Anteriors',
  'LBL_PERCENT_COMPLETE' => '% Completat',
  'LBL_RESOURCE_NAMES' => 'Recurs',
  'LBL_MORE' => 'Més...',
  'LBL_PERCENT_BUSY' => '% Ocupat',
  'LBL_USER_RESOURCE' => 'Recurs d´Usuari',
  'LBL_CONTACTS_RESOURCE' => 'Recurs de Contacte',
  'LBL_PROJECT_HOLIDAYS' => 'Festiu',
  'LBL_LIST_RESOURCE' => 'Recurs:',
  'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Editar Tasques de Projecte',
  'LBL_VIEW_GANTT_TITLE' => 'Veure Diagrama de Gantt',
  'LBL_INSERT_BUTTON' => 'Insertar Files',
  'LBL_INDENT_BUTTON' => 'Indentar',
  'LBL_OUTDENT_BUTTON' => 'Treure Indentació',
  'LBL_SAVE_BUTTON' => 'Guardar',
  'LBL_COPY_BUTTON' => 'Copiar',
  'LBL_PASTE_BUTTON' => 'Pegar',
  'LBL_DELETE_BUTTON' => 'Esborrar',
  'LBL_EXPAND_ALL_BUTTON' => 'Expandir Tot',
  'LBL_COLLAPSE_ALL_BUTTON' => 'Compactar Tot',
  'LBL_MARK_AS_MILESTONE_BUTTON' => 'Marcar com Hito',
  'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Desmarcar com Hito',
  'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Amagar Columnes Opcionals',
  'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Mostrar Columnes Opcionals',
  'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Verure Detalls de Tasques',
  'LBL_RECALCULATE_DATES_BUTTON' => 'Recalcular Dates',
  'LBL_EXPORT_TO_PDF' => 'Exportar a PDF',
  'LBL_FILTER_ALL_TASKS' => 'Totes les Tasques',
  'LBL_FILTER_COMPLETED_TASKS' => 'Tasques Completades',
  'LBL_FILTER_INCOMPLETE_TASKS' => 'Tasques No Completades',
  'LBL_FILTER_MILESTONES' => 'Hitos',
  'LBL_FILTER_RESOURCE' => 'Tasques que Usen Recursos',
  'LBL_FILTER_DATE_RANGE' => 'Tasques en Rang de Dates',
  'LBL_FILTER_VIEW' => 'Veure',
  'LBL_LIST_FILTER_VIEW' => 'Veure:',
  'LBL_FILTER_DATE_RANGE_START' => 'Tasques que Comencen o Acaben Després de',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'I Abans',
  'LBL_FILTER_MY_TASKS' => 'Les Meves Tasques',
  'LBL_FILTER_MY_OVERDUE_TASKS' => 'Les Meves Tasques Vençudes',
  'LBL_FILTER_MY_UPCOMING_TASKS' => 'Les Meves Tasques de Venciment Proper (1 Setmana)',
  'LBL_CUT_BUTTON' => 'Tallar',
  'LBL_WEEK_BUTTON' => 'Setmana',
  'LBL_BIWEEK_BUTTON' => '2 Setmanes',
  'LBL_MONTH_BUTTON' => 'Més',
  'ERR_TASK_NAME_FOR_ROW' => 'Nom de Tasca per la Fila',
  'ERR_IS_EMPTY' => 'no pot estar buit.',
  'ERR_PERCENT_COMPLETE' => 'El % Completat te que ser un valor entre 0 i 100.',
  'ERR_DURATION' => 'La Duració te que ser un número enter.',
  'ERR_DATE' => 'La data especificada es un dia no laboral.',
  'ERR_FINISH_DATE' => 'La data de fi no pot ser anterior a la d´inici.',
  'ERR_PREDECESSORS_INPUT' => 'Els valors introduïts en el camp Anterior te que tenir la forma "1" o "1,2"',
  'ERR_PREDECESSORS_OUT_OF_RANGE' => 'El valor especificat per el camp Predecesor es major que el número de files.',
  'ERR_PREDECESSOR_CYCLE_FAIL' => 'El predecesor especificat causa una dependencia circular.',
  'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'El predecesor especificat es una tasca padre o una subtasca.',
  'NTC_DELETE_TASK_AND_SUBTASKS' => 'Està segur de que vol esborrar aquesta tasca i totes les subtasques?',
  'NTC_NO_ACTIVE_PROJECTS' => 'No té cap projecte o tasques de projecte actives.',
  'NTC_ASSIGN_RIGHT_TEAM' => 'Confirmi de que tots els recursos del projecte son membres d´aquest equip.',
  'LBL_GRID_ONLY' => 'Rejilla',
  'LBL_GRID_GANTT' => 'Rejilla/Gantt',
  'LBL_REPORT' => 'Informe',
  'LBL_DAILY_REPORT' => 'Informe Diari',
  'LBL_PROJECT_HOLIDAYS_TITLE' => 'Festius de Projecte',
  'LBL_HOLIDAYS_TITLE' => 'Festius',
  'LBL_HOLIDAY' => 'Festiu',
  'LBL_PROJECT_TEMPLATE' => 'Plantilla de Projecte',
  'LBL_PROJECT_TEMPLATES_LIST' => 'Llista de Plantilles de Projecte',
  'LBL_PROJECT_TEMPLATES_TITLE' => 'Plantilles de Projecte: Inici',
  'LBL_IS_TEMPLATE' => 'Es una Plantilla',
  'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Guardar com Plantilla',
  'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Guardar com Plantilla',
  'LBL_SAVE_AS_PROJECT' => 'Guardar com Projecte',
  'LBL_SAVE_AS_TEMPLATE' => 'Guardar com Plantilla',
  'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Guardar com Nou Projecte',
  'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Guardar com Nova Plantilla',
  'LBL_TEMPLATE_NAME' => 'Nom de Plantilla:',
  'LBL_PROJECT_NAME' => 'Nom de Projecte:',
  'LBL_PROJECT_TEMPLATE_NAME' => 'Nom de Plantilla:',
  'LBL_EXPORT_TO_MS_PROJECT' => 'Exportar a MS Project',
  'LBL_POPUP_DATE_START' => 'Data d´Inici:',
  'LBL_POPUP_DATE_FINISH' => 'Data Fi:',
  'LBL_POPUP_PERCENT_COMPLETE' => '% Completat:',
  'LBL_POPUP_RESOURCE_NAME' => 'Nom de Recurs:',
  'LBL_MY_PROJECTS_DASHBOARD' => 'El Meu Gràfic de Projectes',
  'LBL_RESOURCE_REPORT' => 'Informe de Recursos',
  'LBL_PERSONAL_HOLIDAY' => '-- Festiu Personal --',
  'LBL_OPPORTUNITIES' => 'Oportunitats',
  'LBL_LAST_WEEK' => 'Anterior',
  'LBL_NEXT_WEEK' => 'Següent',
  'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Recursos del Projecte',
  'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tasca de Projecte',
  'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Festius',
  'LBL_PROJECT_INFORMATION' => 'Visió General',
  'LBL_EDITLAYOUT' => 'Editar disseny',
  'LBL_INSERTROWS' => 'Insertar files',
);
