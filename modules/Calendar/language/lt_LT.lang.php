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
  'LBL_EDIT_USERLIST' => 'Vartotojų sąrašas',
  'LBL_CREATE_MEETING' => 'Suplanuoti susitikimą',
  'LBL_CREATE_CALL' => 'Suplanuoti skambutį',
  'LBL_HOURS_ABBREV' => 'v',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_YES' => 'Taip',
  'LBL_NO' => 'Ne',
  'LBL_SETTINGS' => 'Nustatymai ( defined in ./include/language/lt_LT.lang.php )',
  'LBL_CREATE_NEW_RECORD' => 'Sukurti priminimą',
  'LBL_LOADING' => 'Kraunama ... ( defined in ./portal/include/language/lt_LT.lang.php )',
  'LBL_SAVING' => 'Saugoma...',
  'LBL_SENDING_INVITES' => 'Siunčiami pakvietimai...',
  'LBL_CONFIRM_REMOVE' => 'Ar tikrai norite ištrinti įrašą?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ar tikrai norite ištrinti pasikartojančius įrašus?',
  'LBL_EDIT_RECORD' => 'Redaguoti priminimą',
  'LBL_ERROR_SAVING' => 'Klaida saugant',
  'LBL_ERROR_LOADING' => 'Klaida kraunantis',
  'LBL_GOTO_DATE' => 'Eiti į datą',
  'NOTICE_DURATION_TIME' => 'Trukmės periodas turi būti daugiau už 0',
  'LBL_STYLE_BASIC' => 'Numatytasis',
  'LBL_STYLE_ADVANCED' => 'Išplėstinis',
  'LBL_INFO_TITLE' => 'Papildomos detalės',
  'LBL_INFO_DESC' => 'Aprašymas',
  'LBL_INFO_START_DT' => 'Pradžios data:',
  'LBL_INFO_DUE_DT' => 'Atlikimo data',
  'LBL_INFO_DURATION' => 'Trukmė',
  'LBL_INFO_NAME' => 'Tema',
  'LBL_INFO_RELATED_TO' => 'Susijęs su',
  'LBL_NO_USER' => 'Nėra atitikmens laukui: Atsakingas',
  'LBL_SUBJECT' => 'Tema',
  'LBL_DURATION' => 'Trukmė',
  'LBL_STATUS' => 'Statusas',
  'LBL_DATE_TIME' => 'Pradžios data ir laikas',
  'LBL_SETTINGS_TITLE' => 'Nustatymai ( defined in ./include/language/lt_LT.lang.php )',
  'LBL_SETTINGS_CALENDAR_STYLE' => 'Kalendoriaus stilius:',
  'LBL_SETTINGS_TIME_STARTS' => 'Pradžios laikas:',
  'LBL_SETTINGS_TIME_ENDS' => 'Pabaigos laikas:',
  'LBL_SETTINGS_CALLS_SHOW' => 'Rodyti skambučius',
  'LBL_SETTINGS_TASKS_SHOW' => 'Rodyti užduotis:',
  'LBL_SAVE_BUTTON' => 'Saugoti',
  'LBL_DELETE_BUTTON' => 'Ištrinti',
  'LBL_APPLY_BUTTON' => 'Pritaikyti',
  'LBL_SEND_INVITES' => 'Siųsti pakvietimus',
  'LBL_CANCEL_BUTTON' => 'Atšaukti',
  'LBL_CLOSE_BUTTON' => 'Uždaryti:',
  'LBL_GENERAL_TAB' => 'Išsamiau',
  'LBL_PARTICIPANTS_TAB' => 'Dalyviai',
  'LBL_REPEAT_TAB' => 'Pasikartojimai',
  'LBL_REPEAT_TYPE' => 'Pasikartojimo tipas',
  'LBL_REPEAT_INTERVAL' => 'Intervalas',
  'LBL_REPEAT_END' => 'Pabaiga',
  'LBL_REPEAT_END_AFTER' => 'Po',
  'LBL_REPEAT_OCCURRENCES' => 'Įvykiai',
  'LBL_REPEAT_END_BY' => 'Pagal',
  'LBL_REPEAT_DOW' => 'Ant',
  'LBL_REPEAT_UNTIL' => 'Kartoti iki',
  'LBL_REPEAT_COUNT' => 'Įvykių skaičius',
  'LBL_REPEAT_LIMIT_ERROR' => 'Jūsų prašymas buvo sukurti daugiau nei $limit susitikimus.',
  'LBL_EDIT_ALL_RECURRENCES' => 'Redaguoti visus pasikartojimus',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Ištrinti visus pasikartojimus',
  'LBL_AM' => 'AM',
  'LBL_PM' => 'PM',
  'LBL_MODULE_NAME' => 'Kalendorius',
  'LBL_MODULE_TITLE' => 'Kalendorius',
  'LNK_NEW_CALL' => 'Suplanuoti skambutį',
  'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
  'LNK_NEW_APPOINTMENT' => 'Sukurti paskyrimą',
  'LNK_NEW_TASK' => 'Sukurti užduotį',
  'LNK_CALL_LIST' => 'Skambučiai',
  'LNK_MEETING_LIST' => 'Susitikimai',
  'LNK_TASK_LIST' => 'Užduotys',
  'LNK_VIEW_CALENDAR' => 'Šiandien',
  'LNK_IMPORT_CALLS' => 'Importuoti skambučius',
  'LNK_IMPORT_MEETINGS' => 'Importuoti susitikimus',
  'LNK_IMPORT_TASKS' => 'Importuoti užduotis',
  'LBL_MONTH' => 'Mėnesis',
  'LBL_DAY' => 'Diena',
  'LBL_YEAR' => 'Metai',
  'LBL_WEEK' => 'Savaitė',
  'LBL_PREVIOUS_MONTH' => 'Ankstesnis mėnuo',
  'LBL_PREVIOUS_DAY' => 'Ankstesnė diena',
  'LBL_PREVIOUS_YEAR' => 'Ankstesni metai',
  'LBL_PREVIOUS_WEEK' => 'Ankstesnė savaitė',
  'LBL_NEXT_MONTH' => 'Kitas mėnuo',
  'LBL_NEXT_DAY' => 'Kita diena',
  'LBL_NEXT_YEAR' => 'Kiti metai',
  'LBL_NEXT_WEEK' => 'Kita savaitė',
  'LBL_SCHEDULED' => 'Suplanuota',
  'LBL_BUSY' => 'Užimta',
  'LBL_CONFLICT' => 'Konfliktas',
  'LBL_USER_CALENDARS' => 'Vartotojo kalendoriai',
  'LBL_SHARED' => 'Bendras',
  'LBL_PREVIOUS_SHARED' => 'Atgal',
  'LBL_NEXT_SHARED' => 'Toliau',
  'LBL_SHARED_CAL_TITLE' => 'Bendras kalendorius',
  'LBL_USERS' => 'Vartotojas',
  'LBL_REFRESH' => 'Atnaujinti',
  'LBL_SELECT_USERS' => 'Pasirinkti vartotojus, kuriuos rodyti kalendoriuje',
  'LBL_FILTER_BY_TEAM' => 'Filtruoti vartotojų sąrašą pagal komandą:',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas',
  'LBL_DATE' => 'Pradžios data ir laikas',
);

