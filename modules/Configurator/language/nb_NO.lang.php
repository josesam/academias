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
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Fonts supported by SugarPDF :<br /><ul><br /><li>TrueTypeUnicode (UTF-8 Unicode)</li><br /><li>OpenTypeUnicode</li><br /><li>TrueType</li><br /><li>OpenType</li><br /><li>Type1</li><br /><li>CID-0</li><br /></ul><br /><br><br />If you choose to not embed your font in the PDF, the generated PDF file will be lighter but a substitution will be use if the font is not available in the system of your reader.<br /><br><br><br />Adding a PDF font to SugarCRM requires to follow steps 1 and 2 of the TCPDF Fonts documentation available in the "DOCS" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>The pfm2afm and ttf2ufm utils are available in fonts/utils in the TCPDF package that you can download on the "DOWNLOAD" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>Load the metric file generated in step 2 and your font file below.',
  'LBL_WIZARD_FINISH' => 'Klikk <b>Continue</b> for å konfigurere brukerinnstillinger.<br/><br /><br />For å konfigurere flere systeminnstillinger, klikk <a href="index.php?module=Administration&action=index" target="_blank">here</a>.',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Server Type:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
  'LBL_PROXY_PORT' => 'Port',
  'LBL_MARK_POINT' => 'Mark Point',
  'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
  'LBL_REG_EXP' => 'Reg Exp:',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
  'LBL_DISPLAYING_LOG' => 'Displaying Log',
  'LBL_YOUR_IP_ADDRESS' => 'Your IP Address is',
  'ERR_ALERT_FILE_UPLOAD' => 'Error during the upload of the image.',
  'LBL_LOGGER_LOG_LEVEL' => 'Log Level',
  'LBL_FONTMANAGER_BUTTON' => 'PDF Font Manager',
  'LBL_FONTMANAGER_TITLE' => 'PDF Font Manager',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_LIST_TYPE' => 'Type',
  'LBL_REMOVE' => 'rem',
  'LBL_PDF_PATCH' => 'Patch',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
  'ADVANCED' => 'Avansert',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217-valutakode',
  'DEFAULT_CURRENCY_NAME' => 'Valutanavn',
  'DEFAULT_CURRENCY_SYMBOL' => 'Valutasymbol',
  'DEFAULT_CURRENCY' => 'Standard valuta',
  'DEFAULT_DATE_FORMAT' => 'Standard datoformat',
  'DEFAULT_DECIMAL_SEP' => 'Desimaltegn',
  'DEFAULT_LANGUAGE' => 'Standardspråk',
  'DEFAULT_NUMBER_GROUPING_SEP' => '1000-skilletegn',
  'DEFAULT_SYSTEM_SETTINGS' => 'Brukergrensesnitt',
  'DEFAULT_THEME' => 'Standard tema',
  'DEFAULT_TIME_FORMAT' => 'Standard tidsformat',
  'DISPLAY_RESPONSE_TIME' => 'Vis svartid',
  'IMAGES' => 'Logoer',
  'LBL_ADMIN_WIZARD' => 'Admin veiviser',
  'LBL_ALLOW_USER_TABS' => 'Tillat brukere å skjule faner',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Systeminnstillinger',
  'LBL_ENABLE_MAILMERGE' => 'Aktivere postfletting?',
  'LBL_LOGVIEW' => 'Kofigurér logginnstillinger',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Bruke SMTP-autentisering?',
  'LBL_MAIL_SMTPPASS' => 'SMTP-passord:',
  'LBL_MAIL_SMTPPORT' => 'SMTP-port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP-tjener:',
  'LBL_MAIL_SMTPUSER' => 'SMTP-brukernavn:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP server spesifikasjon',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Velg din e-postleverandør:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! e-post passord:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! e-post ID:',
  'LBL_GMAIL_SMTPPASS' => 'Gmail passord:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail e-postadresse:',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange passord:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange brukernavn:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Serverport:',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillat brukere å benytte denne kontoen for utgående e-post:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Når dette alternativet velges kan alle brukere sende e-post fra samme utgående e-post konto som brukes til å sende system-meldinger og -varsler. Hvis alternativet ikke velges, kan brukerne fortsatt benytte den utgående e-postserveren etter å ha lagt inn sin egen kontoinformasjon.',
  'LBL_MAILMERGE_DESC' => 'Dette flagget skal kun være markert hvis du har Sugar plug-in for Microsoft® Word®.',
  'LBL_MAILMERGE' => 'Postfletting',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum auto-oppdateringsintervall for Dashlet',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Dette er den laveste verdien man kan velge for at dashlets skal auto-refresh. Innstilling til "Aldri" deaktiverer auto-refreshing av dashlets helt.',
  'LBL_MODULE_FAVICON' => 'Vis modulikon som favorittikon',
  'LBL_MODULE_FAVICON_HELP' => 'Hvis du er i en modul med et ikon, bruk modulikonet som favorittikon i stedet for temaets favorittikon i nettleserfanen.',
  'LBL_MODULE_NAME' => 'Systeminnstillinger',
  'LBL_MODULE_ID' => 'Konfigurator',
  'LBL_MODULE_TITLE' => 'Brukergrensesnitt',
  'LBL_NOTIFY_FROMADDRESS' => 'Fra-adresse:',
  'LBL_NOTIFY_SUBJECT' => 'E-postemne:',
  'LBL_PORTAL_ON_DESC' => 'Tillater at Saker, Bugs, Notater og andre data er tilgjengelig for eksterne kunder gjennom et selvbetjent portalsystem.',
  'LBL_PORTAL_ON' => 'Vil du tillate selvbetjent portalintegrering?',
  'LBL_PORTAL_TITLE' => 'Selvbetjeningsportal for bedrift',
  'LBL_PROXY_AUTH' => 'Attestering?',
  'LBL_PROXY_HOST' => 'Proxyvert',
  'LBL_PROXY_ON_DESC' => 'Tilpass proxyserverens adresse- og attesteringsinnstillinger.',
  'LBL_PROXY_ON' => 'Bruke proxytjener?',
  'LBL_PROXY_PASSWORD' => 'Passord',
  'LBL_PROXY_TITLE' => 'Proxy-innstillinger',
  'LBL_PROXY_USERNAME' => 'Brukernavn',
  'LBL_RESTORE_BUTTON_LABEL' => 'Gjenopprett',
  'LBL_SYSTEM_SETTINGS' => 'Systeminnstillinger',
  'LBL_SKYPEOUT_ON_DESC' => 'Tillat at brukere kan klikke på et telefonnummer for å ringe via SkypeOut®. Telefonnumrene må være korrekt formatert for at dette skal være mulig. Det innebærer at nummeret skrives slik: "+" "landskoden", f.eks. +1 (555) 555-1234. For ytterligere informasjon, sjekk Skype FAQ på <a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">skype® faq</a>',
  'LBL_SKYPEOUT_ON' => 'Aktivér SkypeOut®-integrasjon',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_USE_REAL_NAMES' => 'Vis fullstendig navn (ikke innlogging)',
  'LBL_USE_REAL_NAMES_DESC' => 'Vis brukernes fulle navn i stedet for brukernavnet i tildelt felt.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Antall poster pr side i listevisning',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Antall poster pr side i underpanel',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Antall poster pr side (Trådløs)',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Antall poster pr side i underpanel (trådløs)',
  'LOG_MEMORY_USAGE' => 'Logg minneforbruk',
  'LOG_SLOW_QUERIES' => 'Logg sene forespørsler',
  'LOCK_HOMEPAGE_HELP' => 'This setting is to prevent<BR> 1) the addition of new home pages in the Home module, and <BR>2) customization of dashlet placement in the home pages by dragging and dropping.',
  'CURRENT_LOGO' => 'Logo i bruk',
  'CURRENT_LOGO_HELP' => 'Denne logoen vises øverst i venstre hjørne i Sugar.',
  'NEW_LOGO' => 'Last opp ny logo (212x40)',
  'NEW_LOGO_HELP' => 'The image File format can be either .png or .jpg.<BR>The recommended size is 212x40 px.',
  'NEW_QUOTE_LOGO' => 'Last opp ny Tilbud-logo (867x74)',
  'NEW_QUOTE_LOGO_HELP' => 'The required image File format is .jpg.<BR>The recommended size is 867x74 px.',
  'QUOTES_CURRENT_LOGO' => 'Logo som brukes i Tilbud',
  'SLOW_QUERY_TIME_MSEC' => 'Tidsgrense (msec) for sene forespørsler',
  'STACK_TRACE_ERRORS' => 'Vis stakksporing av feil',
  'UPLOAD_MAX_SIZE' => 'Maksimum størrelse for opplasting',
  'VERIFY_CLIENT_IP' => 'Gjør brukerens IP-adresse gyldig',
  'LOCK_HOMEPAGE' => 'Forhindre brukertilpasset webside-oppsett',
  'LOCK_SUBPANELS' => 'Forhindre brukertilpasset oppsett på undermenyer',
  'MAX_DASHLETS' => 'Høyeste tillatte antall paneler på webside',
  'SYSTEM_NAME' => 'Systemnavn',
  'SYSTEM_NAME_WIZARD' => 'Navn:',
  'SYSTEM_NAME_HELP' => 'Dette er navnet som vises i tittellinjen i nettleseren.',
  'LBL_OC_STATUS' => 'Forhåndsinnstilt status for Offline-klient',
  'DEFAULT_OC_STATUS' => 'Aktivér Offline-klient som innstilt',
  'LBL_OC_STATUS_DESC' => 'Klikk her hvis du vil at alle brukere skal ha tilgang til Offline-klienten. Hvis du velger å ikke gjøre det kan du tilpasse tilgjengeligheten på brukernivå.',
  'SESSION_TIMEOUT' => 'Portalsesjonen ble avbrutt',
  'SESSION_TIMEOUT_UNITS' => 'sekunder',
  'LBL_LDAP_TITLE' => 'LDAP-autentiseringsstøtte',
  'LBL_LDAP_ENABLE' => 'Aktivér LDAP',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Tjener:',
  'LBL_LDAP_SERVER_PORT' => 'Portnummer:',
  'LBL_LDAP_ADMIN_USER' => 'Autentisert bruker:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Brukt for å søke etter sugar-bruker. [Må kanskje være fullt kvalifisert]<br>Det vil forbinde anonymt hvis ikke oppgitt.',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Autentisert passord:',
  'LBL_LDAP_AUTHENTICATION' => 'Godkjenning:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Knyttes til LDAP-serveren ved bruk av en spesifikk brukers påloggingsinformasjon',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Opprett brukere automatisk:',
  'LBL_LDAP_USER_DN' => 'Bruker DN:',
  'LBL_LDAP_GROUP_DN' => 'Gruppe DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Eksempel: ou=groups,dc=example,dc=com',
  'LBL_LDAP_USER_FILTER' => 'Brukerfilter:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppemedlemskap:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Brukere må være medlem av en bestemt gruppe',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Brukeregenskap:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Den unike identikatoren for personen som brukes til å sjekke om de er medlem av gruppen Eksempel: uid',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Guppens egenskap som brukes til å filtrere brukeregenskap Eksempel: memberUid',
  'LBL_LDAP_GROUP_ATTR' => 'Gruppeegenskap:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Eventuelle ekstra filterparametre for godkjenning av brukere for eksempel \\ nis_sugar_user = 1 eller (is_sugar_user = 1) (is_sales = 1):',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Innloggingsattributt:',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind-atttributt:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For å oppbinde LDAP-brukereksempler:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> userPrincipalName] [<b>Mac OS X:</b> uid]',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For å søke etter LDAP-brukereksempler:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> dn] [<b>Mac OS X:</b> dn]',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Eksempel: ldap.example.com',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Eksempel: 389',
  'LBL_LDAP_GROUP_NAME' => 'Gruppenavn:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Eksempel cn=SugarCRM',
  'LBL_LDAP_USER_DN_DESC' => 'Eksempel: ou=people,dc=example,dc=com',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Hvis en akkreditert bruker ikke finnes vil det bli opprettet en ny i Sugar.',
  'LBL_LDAP_ENC_KEY' => 'Krypteringsnøkkel:',
  'DEVELOPER_MODE' => 'Utviklermodus',
  'SHOW_DOWNLOADS_TAB' => 'Vis nedlastinger fanen.',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Når valgt, vil Download kategorien vises i Brukerinnstillinger og gi brukerne tilgang til Sugar plug-ins og andre tilgjengelige filer',
  'LBL_LDAP_ENC_KEY_DESC' => 'For SOA-autentisering ved bruk av ldap.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Php_mcrypt-forlengelsen må være aktivert i din php.ini-fil.',
  'LBL_ALL' => 'Alle',
  'LBL_NEXT_' => 'Neste>>',
  'LBL_SEARCH' => 'Søk:',
  'LBL_IGNORE_SELF' => 'Ignore Selv:',
  'LBL_YOUR_PROCESS_ID' => 'Your process id',
  'LBL_IT_WILL_BE_IGNORED' => 'Det vil bli ignorert',
  'LBL_LOG_NOT_CHANGED' => 'log har ikke blitt endret',
  'LBL_ALERT_JPG_IMAGE' => 'The File format of the image must be JPEG. Upload a new File with the File extension .jpg.',
  'LBL_ALERT_TYPE_IMAGE' => 'The File format of the image must be JPEG or PNG. Upload a new File with the File extension .jpg or .png.',
  'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'The aspect ratio of the image must be between 3:1 and 20:1. Upload a new File with this ratio.',
  'LBL_LOGGER' => 'log innstillinger',
  'LBL_LOGGER_FILENAME' => 'Navn på log fil',
  'LBL_LOGGER_FILE_EXTENSION' => 'Filtype',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimum størrelse på log',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standard dato format',
  'LBL_LOGGER_MAX_LOGS' => 'Maksimum antall log (before rolling)',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Legg til etter filnavn',
  'LBL_VCAL_PERIOD' => 'vCal oppdaterer tidsperiode:',
  'vCAL_HELP' => 'Bruk denne innstillingen til å bestemme antall måneder i forkant av dagens dato som Free / Busy informasjon for samtaler og møter blir publisert.<br />For å slå ledig / opptatt publisering av, skriv "0". Minimum er 1 måned, maksimum er 12 måneder.',
  'LBL_PDFMODULE_NAME' => 'PDF-innstillinger',
  'SUGARPDF_BASIC_SETTINGS' => 'Dokumentegenskaper',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Avanserte innstillinger',
  'SUGARPDF_LOGO_SETTINGS' => 'Bider',
  'PDF_CREATOR' => 'PDF dokumentskaper',
  'PDF_CREATOR_INFO' => 'Definerer skaperen av dokumentet.<br />Dette er typisk navnet på programmet som genererer PDF.',
  'PDF_AUTHOR' => 'Forfatter',
  'PDF_AUTHOR_INFO' => 'Forfatteren vises i dokumentegenskapene.',
  'PDF_HEADER_LOGO' => 'Logotekst for PDF-dokumenter',
  'PDF_HEADER_LOGO_INFO' => 'Dette bildet vises i standard Topptekst i logotekst for PDF-dokumenter.',
  'PDF_NEW_HEADER_LOGO' => 'Velg nytt bilde for logotekst',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Filformatet kan enten være. jpg eller. png. (Kun. jpg for EZPDF)<br />Den anbefalte størrelsen er 867x74 px.',
  'PDF_HEADER_LOGO_WIDTH' => 'Logotekst bildebredde',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Endre skalaen på opplastet bilde som vises i logotekst på PDF-dokumenter. (kun TCPDF)',
  'PDF_SMALL_HEADER_LOGO' => 'For rapporter PDF-dokumenter',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Dette bildet vises i standard Topptekst i rapporter for PDF-dokumenter.<br />Dette bildet vises også i øvre venstre hjørne av Sugar.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Velg nytt bilde for rapporter',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Filformatet kan enten være. jpg eller. png. (Kun. jpg for EZPDF)<br />Den anbefalte størrelsen er 212x40 px.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Rapporter Bildebredde',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Endre skalaen på opplastet bilde som vises i Rapporter for PDF-dokumenter. (kun TCPDF)',
  'PDF_HEADER_STRING' => 'Topptekst streng',
  'PDF_HEADER_STRING_INFO' => 'Topptekst beskrivelsesstreng',
  'PDF_HEADER_TITLE' => 'Topptekst tittel',
  'PDF_HEADER_TITLE_INFO' => 'Streng for utskrift som tittelen på dokumentets topptekst',
  'PDF_FILENAME' => 'Standard filnavn',
  'PDF_FILENAME_INFO' => 'Standard filnavn for genererte PDF-filer',
  'PDF_TITLE' => 'Tittel',
  'PDF_TITLE_INFO' => 'Tittelen vises i dokumentegenskapene.',
  'PDF_SUBJECT' => 'Emne',
  'PDF_SUBJECT_INFO' => 'Emnet vises i dokumentegenskapene.',
  'PDF_KEYWORDS' => 'Nøkkelord',
  'PDF_KEYWORDS_INFO' => 'Knytt Søkeord til dokumentet, vanligvis i form av "nøkkelord1 nøkkelord2 ..."',
  'PDF_COMPRESSION' => 'Komprimering',
  'PDF_COMPRESSION_INFO' => 'Aktiverer eller deaktiverer sidekomprimering.<br />Når aktivert, er den interne representasjon av hver side komprimert, noe som fører til et kompresjonsforhold på omtrent 2 for resultatet.',
  'PDF_JPEG_QUALITY' => 'JPEG-kvalitet (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Sett standard kvalitet for JPEG-komprimering (1-100)',
  'PDF_PDF_VERSION' => 'PDF-versjon',
  'PDF_PDF_VERSION_INFO' => 'Sett PDF versjonen (se PDF referanse for gyldige verdier).',
  'PDF_PROTECTION' => 'Dokument beskyttelse',
  'PDF_PROTECTION_INFO' => 'Sett dokument beskyttelse<br />- kopi: kopier tekst og bilder til utklippstavlen<br />- print: skriv ut dokumentet<br />- endre: endre det (med unntak av merknader og skjemaer)<br />- Kommentar-former: legge til kommentarer og skjemaer<br />Merk: beskyttelse mot endringen er for folk som har det fulle Acrobat produktet.',
  'PDF_USER_PASSWORD' => 'Bruker passord',
  'PDF_USER_PASSWORD_INFO' => 'Hvis du ikke angir noe passord, vil dokumentet åpnes som vanlig.<br />Hvis du angir et passord, vil PDF-viewer be om det før dokumentet vises.<br />Hovedpassordet, dersom det er forskjellig fra brukerens, kan brukes til å få full tilgang.',
  'PDF_OWNER_PASSWORD' => 'Eier passord',
  'PDF_OWNER_PASSWORD_INFO' => 'Hvis du ikke angir noe passord, vil dokumentet åpnes som vanlig.<br />Hvis du angir et passord, vil PDF-viewer be om det før dokumentet vises.<br />Hovedpassordet, dersom det er forskjellig fra brukerens, kan brukes til å få full tilgang.',
  'PDF_ACL_ACCESS' => 'Tilgangskontroll',
  'PDF_ACL_ACCESS_INFO' => 'Standard tilgangskontroll for PDF-produksjon.',
  'K_CELL_HEIGHT_RATIO' => 'Celle høyde forhold',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Dersom høyden på en celle er mindre enn (forholdet skrifthøyde x cellehøyde), blir (forholdet skrifthøyde x cellehøyde) brukt som cellehøyden.<br />(forholdet skrifthøyde x cellehøyde) blir også brukt som høyde på cellen når ingen høyde er angitt.',
  'K_TITLE_MAGNIFICATION' => 'Tittel forstørrelse',
  'K_TITLE_MAGNIFICATION_INFO' => 'Tittel forstørrelse tar hensyn til hoved skriftstørrelse.',
  'K_SMALL_RATIO' => 'Liten skriftfaktor',
  'K_SMALL_RATIO_INFO' => 'Reduksjonfaktor for liten skrift.',
  'HEAD_MAGNIFICATION' => 'Overskrift forstørrelse',
  'HEAD_MAGNIFICATION_INFO' => 'Forstørrelsesfaktor for titler.',
  'PDF_IMAGE_SCALE_RATIO' => 'Bilde skaleringsforhold',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Forhold som brukes til å skalere bildene',
  'PDF_UNIT' => 'Enhet',
  'PDF_UNIT_INFO' => 'dokumenter måleenhet',
  'PDF_GD_WARNING' => 'Du har ikke GD biblioteket installert for PHP. Uten GD biblioteket installert, kan kun JPEG logoer vises i PDF-dokumenter.',
  'ERR_EZPDF_DISABLE' => 'Advarsel: EZPDF klassen er deaktivert fra config tabellen, og er satt som PDF klassen. Vennligst "Lagre" dette skjemaet for å stille TCPDF som PDF klasse og reurner til en stabil tilstand.',
  'LBL_IMG_RESIZED' => '(endret størrelse for visning)',
  'LBL_FONT_BOLD' => 'Fet',
  'LBL_FONT_ITALIC' => 'Kursiv',
  'LBL_FONT_BOLDITALIC' => 'Fet/Kursiv',
  'LBL_FONT_REGULAR' => 'Vanlig',
  'LBL_FONT_TYPE_CORE' => 'Kjerne',
  'LBL_FONT_LIST_NAME' => 'Navn',
  'LBL_FONT_LIST_FILENAME' => 'Filnavn',
  'LBL_FONT_LIST_STYLE' => 'Stil',
  'LBL_FONT_LIST_STYLE_INFO' => 'Skriften stil',
  'LBL_FONT_LIST_ENC' => 'Koding',
  'LBL_FONT_LIST_EMBEDDED' => 'Innebygd',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Sjekk for å legge inn skrifttyper i PDF-filen',
  'LBL_FONT_LIST_CIDINFO' => 'CID informasjon',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Examples :<ul><li>Chinese Traditional :<br><pre>$enc=\\&#39;UniCNS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;CNS1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ac15.php\\&#39;);</pre></li><li>Chinese Simplified :<br><pre>$enc=\\&#39;UniGB-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;GB1\\&#39;,\\&#39;Supplement\\&#39;=>2);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ag15.php\\&#39;);</pre></li><li>Korean :<br><pre>$enc=\\&#39;UniKS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Korea1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ak12.php\\&#39;);</pre></li><li>Japanese :<br><pre>$enc=\\&#39;UniJIS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Japan1\\&#39;,\\&#39;Supplement\\&#39;=>5);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_aj16.php\\&#39;);</pre></li></ul>More help : www.tcpdf.org',
  'LBL_FONT_LIST_FILESIZE' => 'Skrifttype Størrelse (KB)',
  'LBL_ADD_FONT' => 'Legg til skrifttype',
  'LBL_BACK' => 'Tilbake',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Er du sikker på at du vil slette denne skrifttypen?',
  'LBL_ADDFONT_TITLE' => 'Legg til en PDF Skrifttype',
  'LBL_PDF_PATCH_INFO' => 'Tilpasset endring av "encoding". Skriv en PHP array.<br />Eksempel:<br />ISO-8859-1 inneholder ikke euro-symbolet. For å legge den i posisjon 164, skriv "array (164=>\\&#39;Euro\\&#39;)".',
  'LBL_PDF_ENCODING_TABLE' => '"Encoding" Tabell',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Navn på "encoding" tabellen.<br />Dette alternativet ignoreres for TrueType Unicode, OpenType Unicode og symbolske skrifttyper.<br />"Encoding" definerer sammenhengen mellom en kode (fra 0 til 255) og en karakter som finnes i skrifttypen.<br />De første 128 er faste, og svarer til ASCII.',
  'LBL_PDF_FONT_FILE' => 'Skrifttype fil',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf eller .OTF eller .pfb fil',
  'LBL_PDF_METRIC_FILE' => 'Metrisk fil',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm eller .ufm fil',
  'LBL_ADD_FONT_BUTTON' => 'Legg til',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Denne filen er ikke en god filtype.',
  'LBL_PDF_INSTRUCTIONS' => 'Instruksjoner',
  'ERR_MISSING_CIDINFO' => 'Feltet CID Informasjon kan ikke være tom.',
  'LBL_ADDFONTRESULT_TITLE' => 'Resultatet av skrifttypetillegg prosessen',
  'LBL_STATUS_FONT_SUCCESS' => 'SUKSESS: Skrifttypen er lagt til SugarCRM.',
  'LBL_STATUS_FONT_ERROR' => 'SUKSESS: Skrifttypen er lagt til SugarCRM.',
  'LBL_FONT_MOVE_DEFFILE' => 'Skrifttype definisjonsfil flyttes til:',
  'LBL_FONT_MOVE_FILE' => 'Skrifttype definisjonsfil flytte til:',
  'ERR_LOADFONTFILE' => 'FEIL: LoadFontFile feil!',
  'ERR_FONT_EMPTYFILE' => 'FEIL: Tomt filnavn!',
  'ERR_FONT_UNKNOW_TYPE' => 'FEIL: Ukjent skrifttype:',
  'ERR_DELETE_CORE_FILE' => 'FEIL: Det er ikke mulig å slette en sentral skrifttype.',
  'ERR_NO_FONT_PATH' => 'FEIL: Ingen skrifttypebane tilgjengelig!',
  'ERR_NO_CUSTOM_FONT_PATH' => 'FEIL: Ingen bane for egendefinerte skrifttype er tilgjengelig!',
  'ERR_FONT_NOT_WRITABLE' => 'er ikke skrivbar.',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'finnes ikke eller er ikke en katalog.',
  'ERR_FONT_MAKEFONT' => 'FEIL: MakeFont feil',
  'ERR_FONT_ALREADY_EXIST' => 'FEIL: Denne skrifttype eksisterer allerede. Tilbakestilling ...',
  'ERR_PDF_NO_UPLOAD' => 'Feil under opplasting av skrifttypen eller metrisk fil.',
  'LBL_WIZARD_TITLE' => 'Admin veiviser',
  'LBL_WIZARD_WELCOME_TAB' => 'Velkommen',
  'LBL_WIZARD_WELCOME_TITLE' => 'Velkommen til Sugar!',
  'LBL_WIZARD_WELCOME' => 'Klikk Neste for å merke, lokalisere og konfigurere Sugar nå. Hvis du ønsker å konfigurere Sugar senere, klikker du Hopp.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Neste >',
  'LBL_WIZARD_BACK_BUTTON' => '< Tilbake',
  'LBL_WIZARD_SKIP_BUTTON' => 'Hopp',
  'LBL_WIZARD_FINISH_BUTTON' => 'Slutt',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortsett',
  'LBL_WIZARD_FINISH_TAB' => 'Slutt',
  'LBL_WIZARD_FINISH_TITLE' => 'Grunnleggende systemkonfigurasjonen er fullført',
  'LBL_WIZARD_SYSTEM_DESC' => 'Spesifiser organisasjonens navn og logo for å merke din Sugar.',
  'LBL_WIZARD_LOCALE_DESC' => 'Angi hvordan du ønsker data i Sugar skal vises, basert på geografisk beliggenhet. Innstillingene du oppgir her vil være standardinnstillingene. Brukerne vil kunne angi sine egne preferanser.',
  'LBL_WIZARD_SMTP_DESC' => 'Oppgi e-postkonto som skal brukes til å sende e-post, for eksempel varsle oppdrag og passord for ny bruker. Brukerne vil motta epost fra Sugar sendt fra den angitte e-postkontoen.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Rapporter modulen er kun tilgjengelig for Sugar Mobile iPhone-klient.',
);

