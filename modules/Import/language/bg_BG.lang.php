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
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Import cache directory is not writable.',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'The User Names of the newly created users will be the Full Names of the Google Contact by default. The User Names can be changed after the user records are created.',
  'LBL_GOOD_FILE' => 'Import File Read Successfully',
  'LBL_CREATE_BUTTON_HELP' => 'Use this option to create new records. Note: Rows in the import file containing values that match the IDs of existing records will not be imported if the values are mapped to the ID field.',
  'LBL_UPDATE_BUTTON_HELP' => 'Use this option to update existing records. The data in the import file will be matched to existing records based on the record ID in the import file.',
  'LBL_PRE_CHECK_SKIPPED' => 'Pre-Check skipped',
  'LBL_NOLOCALE_NEEDED' => 'No locale conversion needed',
  'LBL_NONE' => 'None',
  'LBL_NO_PRECHECK' => 'Native Format mode',
  'LBL_DEBUG_MODE' => 'Enable debugging mode',
  'LBL_ERROR_INVALID_RELATE' => 'Invalid relational field',
  'LBL_ERROR_INVALID_FLOAT' => 'Invalid floating point number',
  'LBL_NOT_MULTIENUM' => 'Not a MultiEnum',
  'LBL_START_OVER' => 'Start Over',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'The import file contains {0} rows. The optimal number of rows is {1}. More rows may slow the import process. Click OK to continue importing. Click Cancel to revise and re-upload the import file.',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'You cannot import a system administrator user',
  'LBL_EXTERNAL_SOURCE' => 'an external application or service',
  'LBL_STEP_MODULE' => 'Which module do you want to import data into?',
  'LBL_CONFIRM_TITLE' => 'Step {0}: Confirm Import File Properties',
  'LBL_CONFIRM_EXT_TITLE' => 'Step {0}: Confirm External Source Properties',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'The custom mappings for Microsoft Outlook rely on the import file being comma-delimited (.csv). If your import file is tab-delimited, the mappings will not be applied as expected.',
  'LBL_ACT' => 'Act!',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_OUTLOOK_NUM_1' => 'Start <b>Outlook</b>',
  'LBL_ACT_NUM_1' => 'Launch <b>ACT!</b>',
  'LBL_STEP_DUP_TITLE' => 'Step {0}: Check for Possible Duplicates',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Select if the top row of the import file is a Header Row containing field labels.',
  'LBL_' => '',
  'LBL_SUCCESS' => 'Success:',
  'LBL_FAIL' => 'Fail:',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Any Text',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Any Text',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Any Text',
  'LBL_SHOW_NOTES' => 'View Notes',
  'LBL_HIDE_NOTES' => 'Hide Notes',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Show Preview Columns',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Hide Preview Columns',
  'LBL_OPTION_ENCLOSURE_NONE' => 'None',
  'LBL_IMPORT_COMPLETED' => 'Import Completed',
  'LBL_IMPORT_RECORDS_OF' => 'of',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Use this option to apply your pre-set import settings, including import properties, mappings, and any duplicate check settings, to this import.<br><br>Click <b>Publish</b> to make the mapping available to other users.<br>Click <b>Un-Publish</b> to make the mapping unavailable to other users.<br>Click <b>Delete</b> to delete a mapping for all users.',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'The record could not be updated due to a permissions issue',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'If the import file data was exported from any of the following sources, select which one.',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Select the source to automatically apply custom mappings in order to simplify the mapping process (next step).',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Use this option to import data directly from an external application or service, such as Gmail.',
  'LBL_EXAMPLE_FILE' => 'Download Import File Template',
  'LBL_CONFIRM_IMPORT' => 'You have selected to update records during the import process. Updates made to existing records cannot be undone. However, records created during the import process can be undone (deleted), if desired. Click Cancel to select to create new records only, or click OK to continue.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Warning: You have already selected a custom mapping for this import, do you want to continue?',
  'LBL_EXTERNAL_FIELD' => 'External Field',
  'LBL_SAMPLE_URL_HELP' => 'Download a sample import file containing a header row of the module fields. The file can be used as a template to create an import file containing the data that you would like to import.',
  'LBL_AUTO_DETECT_ERROR' => 'The field delimiter and qualifier in the import file could not be detected. Please verify the settings in the Import File Properties.',
  'LBL_MIME_TYPE_ERROR_1' => 'The selected file does not appear to contain a delimited list. Please check the file type. We recommend comma-delimited files (.csv).',
  'LBL_MIME_TYPE_ERROR_2' => 'To proceed with importing the selected file, click OK. To upload a new file, click Try Again',
  'LBL_FIELD_DELIMETED_HELP' => 'The field delimiter specifies the character used to separate the field columns.',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Select a file containing data that is separated by a delimiter, such as a comma- or tab- delimited file.  Files of the type .csv are recommended.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Unable to retrieve source adapter, please try again later.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Unable to retrieve external feed, please try again later.',
  'LBL_ADD_FIELD_HELP' => 'Use this option to add a value to a field in all records created and/or updated. Select the field and then enter or select a value for that field in the Default Value column.',
  'LBL_MISSING_HEADER_ROW' => 'No Header Row Found',
  'LBL_SELECT_DS_INSTRUCTION' => 'Ready to start importing? Select the source of the data that you would like to import.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Select a file on your computer that contains the data that you would like to import, or download the template to get a head start on creating the import file.',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Here is how the the first several rows of the import file appear with the detected file properties. If a header row was detected, it is displayed in the top row of the table. View the import file properties to make changes to the detected properties and to set additional properties. Updating the settings will update the data appearing in the table.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'To avoid creating duplicate records, select which of the mapped fields you would like to use to perform a duplicate check while data is being imported. Values within existing records in the selected fields will be checked against the data in the import file. If matching data is found, the rows in the import file containing the data will be displayed along with the import results (next page). You will then be able to select which of these rows to continue importing.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Sign In',
  'LBL_DUP_HELP' => 'Here are the rows in the import file that were not imported because they contain data that matches values in existing records based on the duplicate check. The data that matches is highlighted. To re-import these rows, download the list, make changes and click <b>Import Again</b>.',
  'LBL_DESELECT' => 'deselect',
  'LBL_OK' => 'OK',
  'LBL_ERROR_HELP' => 'Here are the rows in the import file that were not imported due to errors. To re-import these rows, download the list, make changes and click <b>Import Again</b>',
  'LBL_EXTERNAL_MAP_HELP' => 'The table below contains the fields in the external source and the module fields to which they are mapped. Check the mappings to make sure that they are what you expect, and make changes, as necessary. Be sure to map to all of the required fields (noted by an asterisk).',
  'LBL_EXTERNAL_MAP_NOTE' => 'The import will be attempted for contacts within all Google Contacts groups.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => 'Click <b>Import Now</b> to begin the import. Records will only be created for entries that include last names. Records will not be created for data identified as duplicate based on names and/or email addresses matching existing records.',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'This column displays the fields in the external source containing data that will be used to create new records.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indicate a value to use for the field in the created record if the field in the external source contains no data.',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'To assign the new records to a user other than yourself, use the Default Value column to select a different user.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'To assign the new records to teams other than your default team(s), use the Default Value column to select different teams.',
  'LBL_SIGN_IN_HELP' => 'To enable this service, please sign in under the External Accounts tab within your user settings page.',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Пропуснати записи поради възникнала грешка',
  'LBL_UPDATE_SUCCESSFULLY' => 'Записите създадени или актуализирани успешно',
  'LBL_SUCCESSFULLY_IMPORTED' => 'успешно създадени запис(а)',
  'LBL_STEP_4_TITLE' => 'Стъпка 4: Импортиране на файл',
  'LBL_STEP_5_TITLE' => 'Стъпка 5: Преглед на резултатите',
  'LBL_CUSTOM_ENCLOSURE' => 'Полета, разграничени със символ:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Грешка при публикуване на критериите. Налични са публикувани критерии с аналогично название.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Грешка при премахване на критериите, публикувани от друг потребител. Разполагате с критерии с аналогично название.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Импортирането не е настроено за даден тип модул',
  'LBL_IMPORT_TYPE' => 'Действие за изпълнение',
  'LBL_IMPORT_BUTTON' => 'Създаване на записи',
  'LBL_UPDATE_BUTTON' => 'Създаване и актуализиране на записи',
  'LBL_ERROR_INVALID_BOOL' => 'Невалидна стойност (следва да бъде 1 или 0)',
  'LBL_NO_ID' => 'Задължително ID',
  'LBL_IMPORT_ERROR' => 'Открити грешки при импортиране',
  'LBL_ERROR' => 'Грешка:',
  'LBL_FIELD_NAME' => 'Име на полето',
  'LBL_VALUE' => 'Стойност',
  'LBL_ROW_NUMBER' => 'Номер на ред',
  'LBL_REQUIRED_VALUE' => 'Липсва задължителна стойност',
  'LBL_ID_EXISTS_ALREADY' => 'ID вече съществува в тази таблица',
  'LBL_ASSIGNED_USER' => 'В случай че потребителят не съществува, използвайте текущия потребител',
  'LBL_SHOW_HIDDEN' => 'Показване на полета с проблем при импортирането',
  'LBL_UPDATE_RECORDS' => 'Актуализация на съществуващи записи (Не подлежи на отмяна)',
  'LBL_TEST' => 'Тестване на импортирането (без запазване и промяна на данни)',
  'LBL_TRUNCATE_TABLE' => 'Изчистване на таблицата преди импортиране (изтриване на всички записи)',
  'LBL_RELATED_ACCOUNTS' => 'Да не се създават свързани записи',
  'LBL_NO_DATECHECK' => 'Без сверяване на дати (води до ускоряване на процеса, но с възможност за грешка при невалидни дати)',
  'LBL_NO_WORKFLOW' => 'Да не се извършват автоматизирани дейности по време на импортирането',
  'LBL_NO_EMAILS' => 'Да не се изпращат уведомления за присвоен запис по време на импорирането',
  'LBL_STRICT_CHECKS' => 'Стриктна проверка (със сверяване на адреси и телефонни номера)',
  'LBL_ERROR_SELECTING_RECORD' => 'Грешка при избиране на записи:',
  'LBL_ERROR_DELETING_RECORD' => 'Грешка при изтриване на записи:',
  'LBL_NOT_SET_UP' => 'Импортирането е невъзможно за този тип модул',
  'LBL_ARE_YOU_SURE' => 'Сигурни ли сте? Всички данни в този модул ще бъдат изтрити.',
  'LBL_NO_RECORD' => 'Не бяха намерени записи с такова ID за актуализиране',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Импортирането е невъзможно за този тип модул',
  'LBL_ERROR_INVALID_ID' => 'Посоченото ID надхвърля символите валидни за полето (максимална дължина 36 символа)',
  'LBL_ERROR_INVALID_PHONE' => 'Невалиден телефонен номер',
  'LBL_ERROR_INVALID_NAME' => 'String надхвърля допустимите стойности за полето',
  'LBL_ERROR_INVALID_VARCHAR' => 'String надхвърля допустимите стойности за полето',
  'LBL_ERROR_INVALID_DATE' => 'Невалидна стойност за дата',
  'LBL_ERROR_INVALID_DATETIME' => 'Невалидна стойност за дата/час',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Невалидна стойност за дата/час',
  'LBL_ERROR_INVALID_TIME' => 'Невалидна стойност за час',
  'LBL_ERROR_INVALID_INT' => 'Невалидна стойност за цели числа',
  'LBL_ERROR_INVALID_NUM' => 'Невалидна стойност за числа',
  'LBL_ERROR_INVALID_EMAIL' => 'Невалиден адрес на електронна поща',
  'LBL_ERROR_INVALID_USER' => 'Невалидно потребителско име или ID',
  'LBL_ERROR_INVALID_TEAM' => 'Невалидно име на екип или ID',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Невалидно име на организация или ID',
  'LBL_ERROR_INVALID_CURRENCY' => 'Невалидна стойност на валута',
  'LBL_ERROR_NOT_IN_ENUM' => 'Стойността не е в списъка с падащо меню. Налични стойности са:',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Импортирането е невъзможно за този тип модул',
  'LBL_IMPORT_MODULE_NO_USERS' => 'Внимание: Не са намерени дефинирани потребители за тази система.    При импортиране без добавяне на нов потребител, всички записи ще бъдат присвоени към Администратор.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Грешка при публикуване на критериите. Налични са публикувани критерии с аналогично название.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Грешка при премахване на критериите, публикувани от друг потребител. Разполагате с критерии с аналогично название.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Директорията',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'не съществува или е недостъпна за запис',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Неправилно зареден файл. Възможно е настройките на &#39;upload_max_filesize&#39; във файл php.ini да са с малка стойност',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Файлът е твърде голям. Max:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'байта. Променете $sugar_config[&#39;upload_maxsize&#39;] във файл config.php',
  'LBL_MODULE_NAME' => 'Импортиране',
  'LBL_TRY_AGAIN' => 'Ново импортиране',
  'ERR_MULTIPLE' => 'Няколко колони са дефинирани с еднакво име на поле.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Пропуснати задължителни полета:',
  'ERR_MISSING_MAP_NAME' => 'Липса на заглавие за критериите',
  'ERR_SELECT_FULL_NAME' => 'Не можете да избирате Пълно име, когато Име и Фамилия са вече избрани.',
  'ERR_SELECT_FILE' => 'Избиране на файл за зареждане.',
  'LBL_SELECT_FILE' => 'Избиране на файл:',
  'LBL_CUSTOM' => 'Собствен',
  'LBL_CUSTOM_CSV' => 'CSV файл с разделител запетая, зададен от потребителя',
  'LBL_CSV' => 'CSV файл с разделител запетая',
  'LBL_TAB' => 'TSV файл с разделител табулатор',
  'LBL_CUSTOM_DELIMITED' => 'Файл с разделител, зададен от потребителя',
  'LBL_CUSTOM_DELIMITER' => 'Полета, с разделител:',
  'LBL_FILE_OPTIONS' => 'Опции на файла',
  'LBL_CUSTOM_TAB' => 'CSV файл с разделител табулатор, зададен от потребителя',
  'LBL_DONT_MAP' => '-- Да не се изобразява това поле --',
  'LBL_STEP_1_TITLE' => 'Стъпка 1: Избор на източник на данните',
  'LBL_WHAT_IS' => 'Кой е източникът на данни?',
  'LBL_MY_SAVED' => 'Моите съхранени критерии за импортиране:',
  'LBL_PUBLISH' => 'Публикуване',
  'LBL_DELETE' => 'Изтриване',
  'LBL_PUBLISHED_SOURCES' => 'Публикувани източници:',
  'LBL_UNPUBLISH' => 'Отмяна на публикуване',
  'LBL_NEXT' => 'Продължи >',
  'LBL_BACK' => '< Върни',
  'LBL_STEP_2_TITLE' => 'Стъпка 2: Зареждане на файла за експортиране',
  'LBL_HAS_HEADER' => 'Със заглавие:',
  'LBL_NOTES' => 'Бележки:',
  'LBL_NOW_CHOOSE' => 'Изберете файл за импортиране:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 and 2000 могат да експортират данни в <b>Comma Separated Values</b> формат, който може да бъде използван за импортиране на данни в тази система. За експортиране на данни от Outlook, следвайте приведените по-долу стъпки:',
  'LBL_OUTLOOK_NUM_2' => 'Изберете меню <b>File</b>, след което опцията <b>Import and Export ...</b>',
  'LBL_OUTLOOK_NUM_3' => 'Изберете <b>Export to a file</b> и натиснете Next',
  'LBL_OUTLOOK_NUM_4' => 'Изберете <b>Comma Separated Values (Windows)</b> и натиснете <b>Next</b>.<br>  Бележка: Възможно е да бъдете уведомени за необходимостта от инсталация на компоненти на експортиране',
  'LBL_OUTLOOK_NUM_5' => 'Изберете папка <b>Контакти</b> и натиснете <b>Next</b>. Можете да избирате различни папки, ако Вашите контакти са разположени в повече от една',
  'LBL_OUTLOOK_NUM_6' => 'Изберете име на файла и натиснете <b>Next</b>',
  'LBL_OUTLOOK_NUM_7' => 'Натиснете <b>Финализиране</b>',
  'LBL_IMPORT_SF_TITLE' => 'Система Salesforce.com може да експортира данни в <b>Comma Separated Values</b> формат, който може да бъде използван за импортиране на данни в тази система. За експортиране на данни от Salesforce.com, следвайте приведените по-долу стъпки:',
  'LBL_SF_NUM_1' => 'Стартирайте браузъра си и отидете на http://www.salesforce.com, след което влезте с адреса си и парола в системата',
  'LBL_SF_NUM_2' => 'Натиснете <b>Справки</b> в менюто горе',
  'LBL_SF_NUM_3' => '<b>За експортиране на Accounts:</b> използвайте връзката <b>Active Accounts</b> <br><b>За експортиране на контакти:</b> натиснете върху <b>Mailing List</b>',
  'LBL_SF_NUM_4' => 'On <b>Стъпка 1: Използвайте предпочитания от вас тип доклад</b>, изберете <b>Tabular Report</b>натиснете <b>Next</b>',
  'LBL_SF_NUM_5' => 'On <b>Стъпка 2: Изберете колонките на доклада</b>, изберете колонките, които искате да експортирате и натиснете <b>Next</b>',
  'LBL_SF_NUM_6' => 'On <b>Стъпка 3: Изберете информацията за обобщаване</b>, натиснете <b>Next</b>',
  'LBL_SF_NUM_7' => 'On <b>Стъпка 4: Подредете колонките на доклада</b>, натиснете <b>Next</b>',
  'LBL_SF_NUM_8' => 'On <b>Стъпка 5: Изберете Вашите критерии за доклада</b>, под <b>Start Date</b>, изберете дата, достатъчно назад във времето, така че да обхване всички Ваши Accounts. Можете също така да експортирате подмножеството на Вашите Accounts като използвате разширени критерии. След приключване натиснете <b>Run Report</b>',
  'LBL_SF_NUM_9' => 'Ще бъде генериран доклад, с последващо изписване на страницата <b>Report Generation Status: Complete.</b> След това натиснете <b>Export to Excel</b>',
  'LBL_SF_NUM_10' => 'В <b>Export Report:</b>, за <b>Export File Format:</b>, изберете <b>Comma Delimited .csv</b>. Натиснете <b>Export</b>.',
  'LBL_SF_NUM_11' => 'Появилият се диалогов прозорец ще Ви позволи да съхраните експортния файл на вашия компютър.',
  'LBL_IMPORT_ACT_TITLE' => 'Act! can export data in the <b>Comma Separated Values</b> format, which can be used to import data into the system. To export your data from Act!, следвайте приведените по-долу стъпки:',
  'LBL_ACT_NUM_2' => 'Изберете <b>File</b> menu, the <b>Data Exchange</b> menu option, then the <b>Export...</b> menu option',
  'LBL_ACT_NUM_3' => 'Изберете видът на файл <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Изберете име на файл и път за експортиране на данните и натиснете <b>Next</b>',
  'LBL_ACT_NUM_5' => 'Изберете <b>Contacts records only</b>',
  'LBL_ACT_NUM_6' => 'Натиснете бутон <b>Опции...</b>',
  'LBL_ACT_NUM_7' => 'Изберете <b>Запетая</b> за разделител на полета',
  'LBL_ACT_NUM_8' => 'Check the <b>Yes, export field names</b> checkbox и натиснете <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Натиснете <b>Продължи</b>',
  'LBL_ACT_NUM_10' => 'Изберете <b>Всички записи</b> и натиснете <b>Финализирай</b>',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Много приложения могат да Ви дадат възможност за експортиране на данни във формат <b>Comma Delimited text file (.csv)</b>. За голяма част от приложенията важат следните общи стъпки:',
  'LBL_CUSTOM_NUM_1' => 'Стартиране на приложението и зареждане на файла с данни',
  'LBL_CUSTOM_NUM_2' => 'Избиране на опции <b>Запазване като...</b> или <b>Експортиране...</b>',
  'LBL_CUSTOM_NUM_3' => 'Запазване на файла в <b>CSV</b> или <b>Comma Separated Values</b> формат',
  'LBL_IMPORT_TAB_TITLE' => 'Много приложения могат да Ви дадат възможност за експортиране на данни във формат <b>Tab Delimited text file (.tsv или .tab)</b>. За голяма част от приложенията важат следните общи стъпки:',
  'LBL_TAB_NUM_1' => 'Стартиране на приложението и зареждане на файла с данни',
  'LBL_TAB_NUM_2' => 'Избиране на опции <b>Запазване като...</b> или <b>Експортиране...</b>',
  'LBL_TAB_NUM_3' => 'Запазване на файла в <b>TSV</b> или <b>Tab Separated Values</b> формат',
  'LBL_STEP_3_TITLE' => 'Стъпка 3: Потвърждение на полетата и импортиране',
  'LBL_SELECT_FIELDS_TO_MAP' => 'От списъка долу изберете тези полета от файла, които да се импортират в системата. След приключване натиснете <b>Импортирай сега</b>:',
  'LBL_DATABASE_FIELD' => 'Полета от базата',
  'LBL_HEADER_ROW' => 'Заглавен ред',
  'LBL_ROW' => 'Ред',
  'LBL_SAVE_AS_CUSTOM' => 'Запазете като собствени критерии за импортиране:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Заглавие на потребителските критерии за импортиране:',
  'LBL_CONTACTS_NOTE_1' => 'Трябва да са въведени или Пълно име или Фамилия.',
  'LBL_CONTACTS_NOTE_2' => 'Ако бъде въведено Пълно име, то Име и Фамилия ще бъдат игнорирани.',
  'LBL_CONTACTS_NOTE_3' => 'Ако бъде въведено Пълно име, то данните вътре ще бъдат разделени на Име и Фамилия при вкарването в базата данни.',
  'LBL_CONTACTS_NOTE_4' => 'Полетата Улица 2 и Улица 3 ще бъдат обединени с основните адресни полета при вкарването в базата данни.',
  'LBL_ACCOUNTS_NOTE_1' => 'Полетата Улица 2 и Улица 3 ще бъдат обединени с основните адресни полета при вкарването в базата данни.',
  'LBL_REQUIRED_NOTE' => 'Задължителни полета:',
  'LBL_IMPORT_NOW' => 'Импортирай сега',
  'LBL_CANNOT_OPEN' => 'Не може да бъде отворен импортния файл',
  'LBL_NOT_SAME_NUMBER' => 'Във Вашия файл няма същия брой полета на ред',
  'LBL_NO_LINES' => 'Не бяха открити редове във вашия импортен файл',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Този импортен файл е бил вече обработен или не съществува',
  'LBL_FAILURE' => 'Импортът неуспешен:',
  'LBL_SUCCESSFULLY' => 'успешно импортирани записа',
  'LBL_LAST_IMPORT_UNDONE' => 'Вашето последно импортиране беше отменено',
  'LBL_NO_IMPORT_TO_UNDO' => 'Няма импортиране, което да бъде отменено.',
  'LBL_RECORDS_SKIPPED' => 'записа бяха пропуснати поради липса на едно или няколко задължителни полета',
  'LBL_IDS_EXISTED_OR_LONGER' => 'записа бяха пропуснати, защото ID-тата или съществуват или са по-дълги от 36 знака',
  'LBL_RESULTS' => 'Резултати:',
  'LBL_CREATED_TAB' => 'Създадени записи',
  'LBL_DUPLICATE_TAB' => 'Дублирани записи',
  'LBL_ERROR_TAB' => 'Грешки',
  'LBL_IMPORT_MORE' => 'Ново импортиране',
  'LBL_FINISHED' => 'Връщане към модул',
  'LBL_UNDO_LAST_IMPORT' => 'Отмяна на последното импортиране',
  'LBL_LAST_IMPORTED' => 'Последно импортиране',
  'ERR_MULTIPLE_PARENTS' => 'Можете да определите само едно родителско ID',
  'LBL_DUPLICATES' => 'Намерени дублиращи записи',
  'LNK_DUPLICATE_LIST' => 'Зареждане на списък с дублиращи се записи',
  'LNK_ERROR_LIST' => 'Зареждане на списък с грешки',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Зареждане на неимпортирани записи.',
  'LBL_UNIQUE_INDEX' => 'Изберете индекс за сравнение при дублиране',
  'LBL_VERIFY_DUPS' => 'Проверка за дублиране на записи в маркираните индекси',
  'LBL_INDEX_USED' => 'Използвани индекси',
  'LBL_INDEX_NOT_USED' => 'Неизползвани индекси',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Зареждането е неуспешно.  Проверете файловите права за достъп в кеш-паметта за инсталацията на Sugar.',
  'LBL_IMPORT_FIELDDEF_ID' => 'Уникален ID номер',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Име или ID',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Телефонен номер',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Име на екипа или ID',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Час',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Дата',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Дата/Час',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Потребителско име или ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; или &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Списък',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'Електронна поща',
  'LBL_IMPORT_FIELDDEF_INT' => 'Цифра (No Decimal)',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Цифра (No Decimal)',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Цифра (No Decimal)',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Цифра (Decimal Allowed)',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Цифра (Decimal Allowed)',
  'LBL_DATE_FORMAT' => 'Формат на датата:',
  'LBL_TIME_FORMAT' => 'Формат на часа:',
  'LBL_TIMEZONE' => 'Времева зона:',
  'LBL_ADD_ROW' => 'Добавяне на поле',
  'LBL_REMOVE_ROW' => 'Изтриване на поле',
  'LBL_DEFAULT_VALUE' => 'Стойност по подразбиране',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Показване на допълнителни настройки',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Скриване на допълнителни настройки',
  'LBL_SAVE_MAPPING_AS' => 'Запазване на текущи критериите като',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Кавичка (&#39;)',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Кавички (")',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Алтернативен телефон:',
  'LBL_IMPORT_COMPLETE' => 'Финализиране на импортирането',
  'LBL_IMPORT_RECORDS' => 'Импортиране на записи',
  'LBL_IMPORT_RECORDS_TO' => '-',
  'LBL_CURRENCY' => 'Валута',
  'LBL_CURRENCY_SIG_DIGITS' => 'Цифри след десетичния знак за валута',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Пример',
  'LBL_NUMBER_GROUPING_SEP' => 'Разделител за хилядите',
  'LBL_DECIMAL_SEP' => 'Десетичен знак',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Формат на имена',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"о" Обръщение, "и" Име, "ф" Фамилия</i>',
  'LBL_CHARSET' => 'Знаков набор',
  'LBL_MY_SAVED_HELP' => 'Съхранените критерии за импортиране включват по-рано използвани правила за импортиране на данни, както и набор от полета от базата, в които се записват данните от импортирания файл.<br>Натиснете <b>Публикувай</b> за достъп до критериите за импортиране от другите потребители.<br>Натиснете <b>Отмяна на публикуване</b> за отмяна на достъп до критериите от потребителите.',
  'LBL_MY_PUBLISHED_HELP' => 'Публикуваните критерии за импортиране включват по-рано използвани правила за импортиране на данни, както и набор от полета от базата, в които се записват данните от импортирания файл.',
  'LBL_ENCLOSURE_HELP' => '<p> <b>Ограничаващият символ</b> се използва за разграничаване на съдържанието на полетата, включително и на символи, използвани за разделители.<br><br>Пример: При използван символ за разделител запетая (,) и за разграничител кавички ("),<br><b>"Своге, Софийска област"</b> се импортира в едно поле и се визуализира като <b>Своге, Софийска област</b>.<br>При липса на разграничители, или при използване на различни символи за такива,<br><b>"Своге, Софийска област"</b> се импортира в две прилежащи полета като <b>"Своге</b> и <b>Софийска област"</b>.<br><br>Внимание: Възможно е импортирания файл да не съдържа символи за разграничители.<br> За създадените в Excel файлове, с разделители запетая или табулатор, разграничаващият символ по подразбиране е кавички.</p>',
  'LBL_DELIMITER_COMMA_HELP' => 'Изберете тази опция, в случай че разделителя за полетата в импортирания файл е <b>запетая</b>, или разширението на файла е .csv.',
  'LBL_DELIMITER_TAB_HELP' => 'Изберете тази опция, в случай че разделителя за полетата в импортирания файл е <b>табулатор</b>, или разширението на файла е .txt.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Изберете тази опция, в случай че разделителя за полетата в импортирания файл не е нито запетая, нито табулатор, и въведете знака в прилежащото поле.',
  'LBL_DATABASE_FIELD_HELP' => 'Изберете полета от списъка с всички налични полета за този модул.',
  'LBL_HEADER_ROW_HELP' => 'В първия ред на импортирания файл се съдържат заглавия на полетата.',
  'LBL_DEFAULT_VALUE_HELP' => 'Определете стойност по подразбиране за полета в създадения или актуализирания запис, в случай че полетата в импортирания файл не съдържат данни.',
  'LBL_ROW_HELP' => 'Това са данни от първия незаглавен ред на импортирания файл.',
  'LBL_SAVE_MAPPING_HELP' => 'Въведете заглавие за текущия набор на полета от базата, в които се записват данните от импортирания файл.<br>Наборът от полетата, в това число тяхната поредност и източникът на данни, зададени при изпълнение на Стъпка 1, ще бъдат съхранени в процеса на импортиране на данните в системата.<br>Съхранените критерии ще могат да бъдат избрани при следващи импортирания при преминаване на Стъпка 1 от процеса.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Задайте параметри на файла с цел безпроблемното му импортиране.<br>  Зададените параметри няма да влязат в конфликт с потребителските Ви настройки. Т.е. при създаване<br> или актуализиране на вече съществуващи записи ще се отчитат настройките зададени в раздел Персонални настройки.',
  'LBL_IMPORT_FILE_SETTINGS' => 'Настройки на импортирания файл',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Изберете полета в импортирания файл за проверка при дублиране на записи.<br>При дублиране на данни в маркираните полета с полетата на вече съществуващ файл, няма да бъдат създадени нови записи за редове, съдържащи дублирани данни.<br>Редовете, включващи полета с дублирани данни ще бъдат представени в отчет за резултатите от импортирането.',
  'LBL_IMPORT_STARTED' => 'Импортирането започнато:',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Сигурни ли сте, че искате да изтриете дефинираното съоветсввие между полетата?',
  'LBL_CANCEL' => 'Отмени',
  'LBL_SUMMARY' => 'Резюме',
);

