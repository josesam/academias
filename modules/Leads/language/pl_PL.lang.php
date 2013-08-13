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
  'LBL_CONVERTLEAD_WARNING' => 'Ostrzeżenie: Status Leada, który chcesz skonwertować jest "Skonwertowany". Rekordy Kontaktu i/lub Klienta mogły zostać już utworzone z Leada. Jeśli chcesz kontynuować konwertowanie Leada, kliknij Zapisz. Aby wrócić do Leada i anulować konwertowanie, kliknij Anuluj.',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Zawiadomienie: Obecny ekran "Konwertuj lead" zawiera niestandardowe pola. Kiedy dostosowujesz ekran "Konwertuj lead" w Studio po raz pierwszy, w razie potrzeby będziesz musiał/a dodać do układu niestandardowe pola. Pola niestandardowe nie będą od tej pory automatycznie pojawiać się w układzie.',
  'LBL_SELECTION_TIP' => 'Moduły z powiązanym polem w Kontaktach mogą być wybierane zamiast tworzenia nowych podczas procesu konwertowania leadów.',
  'LBL_EDIT_TIP' => 'Modyfikuj układ konwertowania dla tego modułu.',
  'LBL_DELETE_TIP' => 'Usuń ten moduł z układu konwertowania.',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'LBL_CONTACT' => 'Lead:',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_VCARD' => 'vCard',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_STATUS' => 'Status:',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Are you sure you want to remove this record as a direct report?',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'ERR_DELETE_RECORD' => 'pl_pl Numer rekordu musi być określony, aby usunąć tę wizytówkę.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Opis klienta',
  'LBL_ACCOUNT_ID' => 'ID klienta',
  'LBL_ACCOUNT_NAME' => 'Nazwa klienta:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
  'LBL_ADD_BUSINESSCARD' => 'Dodaj wizytówkę',
  'LBL_ADDRESS_INFORMATION' => 'Informacje adresowe',
  'LBL_ALT_ADDRESS_CITY' => 'Inne miasto',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Inny kraj',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Inny kod pocztowy',
  'LBL_ALT_ADDRESS_STATE' => 'Inne województwo',
  'LBL_ALT_ADDRESS_STREET_2' => 'Ulica 2',
  'LBL_ALT_ADDRESS_STREET_3' => 'Ulica 3',
  'LBL_ALT_ADDRESS_STREET' => 'Ulica',
  'LBL_ALTERNATE_ADDRESS' => 'Inny adres:',
  'LBL_ALT_ADDRESS' => 'Inny adres:',
  'LBL_ANY_ADDRESS' => 'Adres dowolny:',
  'LBL_ANY_EMAIL' => 'Dowolny e-mail:',
  'LBL_ANY_PHONE' => 'Dowolny numer telefonu:',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielone do:',
  'LBL_ASSIGNED_TO_ID' => 'Przydzielony użytkownik:',
  'LBL_BACKTOLEADS' => 'Wróć do leadów',
  'LBL_BUSINESSCARD' => 'Konwertuj lead',
  'LBL_CITY' => 'Miejscowość:',
  'LBL_CONTACT_ID' => 'ID Kontaktu',
  'LBL_CONTACT_INFORMATION' => 'Informacje o leadzie',
  'LBL_CONTACT_NAME' => 'Nazwa leadu:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Lead-szansa sprzedaży',
  'LBL_CONTACT_ROLE' => 'Rola:',
  'LBL_CONVERTED_ACCOUNT' => 'Skonwertowany klient:',
  'LBL_CONVERTED_CONTACT' => 'Skonwertowany kontakt:',
  'LBL_CONVERTED_OPP' => 'Skonwertowana szansa sprzedaży:',
  'LBL_CONVERTED' => 'Skonwertowany',
  'LBL_CONVERTLEAD_TITLE' => 'Konwertuj lead [Alt+V]',
  'LBL_CONVERTLEAD' => 'Konwertuj lead',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Możliwy kontakt:',
  'LBL_COUNTRY' => 'Kraj:',
  'LBL_CREATED_NEW' => 'Utwórz nowy',
  'LBL_CREATED_ACCOUNT' => 'Utworzono nowego klienta',
  'LBL_CREATED_CALL' => 'Utworzono nową rozmowę tel.',
  'LBL_CREATED_CONTACT' => 'Utworzono nowy kontakt',
  'LBL_CREATED_MEETING' => 'Utworzono nowe spotkanie',
  'LBL_CREATED_OPPORTUNITY' => 'Utworzono nową szansę sprzedaży',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leady',
  'LBL_DEPARTMENT' => 'Departament:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacje opisowe',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DO_NOT_CALL' => 'Nie dzwonić:',
  'LBL_DUPLICATE' => 'Podobne wizytówki',
  'LBL_EMAIL_ADDRESS' => 'E-mail:',
  'LBL_EMAIL_OPT_OUT' => 'Rezygnacja z mailingu:',
  'LBL_EXISTING_ACCOUNT' => 'Użyto istniejącego klienta',
  'LBL_EXISTING_CONTACT' => 'Użyto istniejący kontakt',
  'LBL_EXISTING_OPPORTUNITY' => 'Użyto istniejącą szansę sprzedaży',
  'LBL_FIRST_NAME' => 'Imię:',
  'LBL_FULL_NAME' => 'Pełna nazwa:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_HOME_PHONE' => 'Telefon domowy:',
  'LBL_IMPORT_VCARD' => 'Importuj vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Automatycznie tworzy nowy lead, poprzez import pliku vCard z pliku.',
  'LBL_INVALID_EMAIL' => 'Niepoprawny e-mail:',
  'LBL_INVITEE' => 'Raportowanie bezpośrednie',
  'LBL_LAST_NAME' => 'Nazwisko:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Opis źródła leadu:',
  'LBL_LEAD_SOURCE' => 'Źródło leadu:',
  'LBL_LIST_ACCEPT_STATUS' => 'Zaakceptuj status',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa klienta',
  'LBL_LIST_CONTACT_NAME' => 'Nazwa leadu',
  'LBL_LIST_CONTACT_ROLE' => 'Rola',
  'LBL_LIST_DATE_ENTERED' => 'Data utworzenia',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
  'LBL_LIST_FIRST_NAME' => 'Imię',
  'LBL_VIEW_FORM_TITLE' => 'Widok leadu',
  'LBL_LIST_FORM_TITLE' => 'Lista leadów',
  'LBL_LIST_LAST_NAME' => 'Nazwisko',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Opis źródła leadu',
  'LBL_LIST_LEAD_SOURCE' => 'Źródło leadu',
  'LBL_LIST_MY_LEADS' => 'Moje leady',
  'LBL_LIST_NAME' => 'Nazwa',
  'LBL_LIST_PHONE' => 'Telefon do biura',
  'LBL_LIST_REFERED_BY' => 'Polecone przez',
  'LBL_LIST_TITLE' => 'Tytuł',
  'LBL_MOBILE_PHONE' => 'Telefon komórkowy:',
  'LBL_MODULE_NAME' => 'Leady',
  'LBL_MODULE_TITLE' => 'Leady: Strona główna',
  'LBL_NAME' => 'Nazwa:',
  'LBL_NEW_FORM_TITLE' => 'Nowy lead',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nowe hasło portalu:',
  'LBL_OFFICE_PHONE' => 'Telefon do biura:',
  'LBL_OPP_NAME' => 'Nazwa szansy sprzedaży:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Kwota szansy sprzedaży:',
  'LBL_OPPORTUNITY_ID' => 'ID szansy sprzedaży',
  'LBL_OPPORTUNITY_NAME' => 'Nazwa szansy sprzedaży:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Inny e-mail:',
  'LBL_OTHER_PHONE' => 'Inny telefon:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_PORTAL_ACTIVE' => 'Portal aktywny:',
  'LBL_PORTAL_APP' => 'Aplikacje portalu',
  'LBL_PORTAL_INFORMATION' => 'Informacje portalu',
  'LBL_PORTAL_NAME' => 'Nazwa portalu:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Hasło portalu jest ustawione:',
  'LBL_POSTAL_CODE' => 'Kod pocztowy:',
  'LBL_STREET' => 'Ulica',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Adres podstawowy - miasto',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adres podstawowy - kraj',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adres podstawowy - kod pocztowy',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Adres podstawowy - województwo',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adres podstawowy - ulica 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adres podstawowy - ulica 3',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Adres podstawowy - ulica',
  'LBL_PRIMARY_ADDRESS' => 'Adres podstawowy:',
  'LBL_REFERED_BY' => 'Polecone przez:',
  'LBL_REPORTS_TO_ID' => 'Raportuje do ID',
  'LBL_REPORTS_TO' => 'Raportuje do:',
  'LBL_SALUTATION' => 'Tytuł',
  'LBL_MODIFIED' => 'Zmodyfikowane przez',
  'LBL_MODIFIED_ID' => 'Zmodyfikowane przez (Id)',
  'LBL_CREATED' => 'Utworzone przez',
  'LBL_CREATED_ID' => 'Utworzone przez (Id)',
  'LBL_SEARCH_FORM_TITLE' => 'Szukaj leadu',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Wybierz zaznaczone leady',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Wybierz zaznaczone leady',
  'LBL_STATE' => 'Województwo:',
  'LBL_STATUS_DESCRIPTION' => 'Opis statusu:',
  'LBL_TITLE' => 'Stanowisko:',
  'LNK_IMPORT_VCARD' => 'Utwórz z vCard',
  'LNK_LEAD_LIST' => 'Leady',
  'LNK_NEW_ACCOUNT' => 'Utwórz klienta',
  'LNK_NEW_APPOINTMENT' => 'Utwórz termin',
  'LNK_NEW_CONTACT' => 'Utwórz kontakt',
  'LNK_NEW_LEAD' => 'Utwórz lead',
  'LNK_NEW_NOTE' => 'Utwórz notatkę',
  'LNK_NEW_TASK' => 'Utwórz zadanie',
  'LNK_NEW_CASE' => 'Utwórz sprawę',
  'LNK_NEW_CALL' => 'Zarejestruj rozmowę telefoniczną',
  'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
  'LNK_NEW_OPPORTUNITY' => 'Utwórz szansę sprzedaży',
  'LNK_SELECT_ACCOUNT' => 'Wybierz klienta',
  'LNK_SELECT_ACCOUNTS' => 'LUB wybierz klienta',
  'MSG_DUPLICATE' => 'Znaleziono podobne wizytówki. Sprawdź czy wybrane do konwersji wizytówki nie istnieją w systemie. Możesz kontynuować konwersję klikając [Dalej].',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopiuj adres alternatywny do podstawowego',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopiuj adres podstawowy do alternatywnego',
  'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Dodanie zadania wymaga posiadania klienta.\\n Utwórz nowego klienta, lub wykorzystaj już istniejącego.',
  'NTC_REMOVE_CONFIRMATION' => 'Czy na pewno chcesz usunąć tę wizytówkę  z tej sprawy?',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanie',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Udane kampanie:',
  'LBL_TARGET_BUTTON_LABEL' => 'Docelowi',
  'LBL_TARGET_BUTTON_TITLE' => 'Docelowi',
  'LBL_CAMPAIGN_ID' => 'Id Kampanii',
  'LBL_CAMPAIGN' => 'Kampanie:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
  'LBL_PROSPECT_LIST' => 'Lista prospektów',
  'LBL_CAMPAIGN_LEAD' => 'Lead',
  'LNK_LEAD_REPORTS' => 'Zobacz raporty leadów',
  'LBL_BIRTHDATE' => 'Data urodzenia:',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Dziękujemy za Twoją propozycję..',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Przepraszamy, ale serwer jest niedostępny w tej chwili. Spróbuj później.',
  'LBL_ASSISTANT_PHONE' => 'Telefon asystenta',
  'LBL_ASSISTANT' => 'Asystent',
  'LBL_REGISTRATION' => 'Rejestracja',
  'LBL_MESSAGE' => 'Wprowadź poniżej informacje o sobie. Informacje i/lub konta klienta będą oczekiwać przed wprowadzeniem na Twoją akceptację.',
  'LBL_SAVED' => 'Dziękujemy za rejestrację. Twoje konto zostanie utworzone i ktoś skontaktuje się z Tobą niezwłocznie.',
  'LBL_CLICK_TO_RETURN' => 'Powrót do portalu',
  'LBL_CREATED_USER' => 'Użytkownik tworzący',
  'LBL_MODIFIED_USER' => 'Użytkownik modyfikujący',
  'LBL_CAMPAIGNS' => 'Kampanie',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanie',
  'LBL_CONVERT_MODULE_NAME' => 'Moduł',
  'LBL_CONVERT_REQUIRED' => 'Wymagane',
  'LBL_CONVERT_SELECT' => 'Zezwól selekcję',
  'LBL_CONVERT_COPY' => 'Kopiuj dane',
  'LBL_CONVERT_EDIT' => 'Edytuj',
  'LBL_CONVERT_DELETE' => 'Usuń',
  'LBL_CONVERT_ADD_MODULE' => 'Dodaj moduł',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Edytuj układ',
  'LBL_CREATE' => 'Utwórz',
  'LBL_SELECT' => 'LUB wybierz',
  'LBL_WEBSITE' => 'Strona www',
  'LNK_IMPORT_LEADS' => 'Importuj leady',
  'LBL_MODULE_TIP' => 'Moduł do tworzenia nowego rekordu w',
  'LBL_REQUIRED_TIP' => 'Wymagane moduły muszą być stworzone zanim lead może być skonwetowany.',
  'LBL_COPY_TIP' => 'Jeśli zaznaczono, pola z leadu będą skopiowane z tą samą nazwą w nowo utworzonych rekordach.',
);

