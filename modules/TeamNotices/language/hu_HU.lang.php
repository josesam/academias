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
  'LBL_MORE_DETAIL' => 'Részletek',
  'LBL_URL' => 'URL',
  'LBL_MODULE_NAME' => 'Csoport közlemények',
  'LBL_MODULE_TITLE' => 'Csoport közlemények: Főoldal',
  'LBL_SEARCH_FORM_TITLE' => 'Csoport közlemény Keresés',
  'LBL_LIST_FORM_TITLE' => 'Csoport közlemény listája',
  'LBL_PRODUCTTYPE' => 'Csoport közlemény',
  'LBL_NOTICES' => 'Csoport közlemények',
  'LBL_LIST_NAME' => 'Beosztás',
  'LBL_URL_TITLE' => 'URL cím',
  'LBL_LIST_DESCRIPTION' => 'Leírás',
  'LBL_NAME' => 'Beosztás',
  'LBL_DESCRIPTION' => 'Leírás',
  'LBL_LIST_LIST_ORDER' => 'Sorrend',
  'LBL_LIST_ORDER' => 'Sorrend',
  'LBL_DATE_START' => 'Kezdés dátuma',
  'LBL_DATE_END' => 'Befejezés dátuma',
  'LBL_STATUS' => 'Állapot',
  'LNK_NEW_TEAM' => 'Csoport létrehozása',
  'LNK_NEW_TEAM_NOTICE' => 'Új csoport közlemény létrehozása',
  'LNK_LIST_TEAM' => 'Csoportok',
  'LNK_LIST_TEAMNOTICE' => 'Csoport közlemények',
  'LNK_PRODUCT_LIST' => 'Termékkatalógus',
  'LNK_NEW_PRODUCT' => 'Új termék létrehozása',
  'LNK_NEW_MANUFACTURER' => 'Gyártók',
  'LNK_NEW_SHIPPER' => 'Szállítási szolgáltatók',
  'LNK_NEW_PRODUCT_CATEGORY' => 'Termékkategória',
  'LNK_NEW_PRODUCT_TYPE' => 'Terméktípus lista',
  'NTC_DELETE_CONFIRMATION' => 'Biztosan törölni akarja ezt a rekordot?',
  'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót a termék típus törléséhez!',
  'NTC_LIST_ORDER' => 'Állítsa be a sorrendet, ahogy a típus meg fog jelenni a terméktípus legördülő listában',
  'LBL_TEAM_NOTICE_FEATURES' => 'Jellemzők: * A továbbfejlesztett felhasználói felület és az új varázsló egy egyszerű, könnyen kezelhető, intuitív megjelenítéssel segíti a kimutatások létrehozását lépésről lépésre. * A komplex lekérdezések kezelőfelülete több modul egyidejű áttekintésével készít jelentéseket komplex logikával. * A mátrix jelentés egyszerre több jellemző megadásával táblázatos kimutatás létrehozását teszi lehetővé. A felhasználók olyan adatok alapján készíthetnek kimutatást, mint az összegek, átlagok, darabszámok vagy százalékarányok. * A valós idejű szűrőkön keresztül a felhasználók módosíthatják az aktuális jelentések attribútumait.',
  'LBL_TEAM_NOTICE_WIRELESS' => 'A SugarCRM alkalmazás új mobil megjelenítése egyensúlyt teremt a kezelhetőség és a helyfüggetlen használat között. Jellemzők: * A továbbfejlesztett felhasználói felület betekintést nyújt a szerkesztési módba, a részletekbe, a listanézetekbe és a kapcsolódó nyilvántartásokba, továbbá lehetőséget biztosít a munkavállalói könyvtár eléréséhez, a preferenciák tárolásához és az utoljára használt tételek megtekintéséhez. * A SugarCRM adataihoz való készülékfüggetlen hozzáférés biztosított minden PDA-n és okostelefonon, így Blackberry és iPhone készülékek esetén is. * A Rich HTML kliens minden szabványos böngészőben világos megjelenést kölcsönöz a SugarCRM adatoknak . * Az új keresési funkciók lehetővé teszik a felhasználók számára a kérdéses információk gyors megtalálását.',
  'LBL_TEAM_NOTICE_DATA_IMPORT' => 'Az adatok importálása bővítmény könnyed adatmozgást tesz lehetővé a SugarCRM és az Excel, Act!, Microsoft Outlook és Salesforce.com alkalmazások között. Fejlesztések: * A továbbfejlesztett felhasználói felület több lehetőséget biztosít a zökkenőmentes adatátvitel kivitelezésére. * Az adatok ellenőrzése funkciónak köszönhetően az adminisztrátor egyszerűen meghatározhatja, hogy az importált adatok új rekordokba kerüljenek vagy beépüljenek a meglévőkbe, csökkentve ezzel a duplikáció valószínűségét. * A valamennyi modul számára való importálás lehetővé teszi az adatok átvételét egyéb CRM alkalmazásokból, kiküszöbölve ezzel a megismételt adatbevitelt.',
  'LBL_TEAM_NOTICE_MODULE_BUILDER' => 'A Module Builder a SugarCRM innovatív továbbfejlesztésének eszköze. Fejlesztések: * Az új kapcsolatok segítségével könnyen összefűzhetővé válnak a meglévő és az új modulok. * Az audit funkció naplózza az új modulok létrehozását és a meglévők módosításait annak érdekében, hogy nyomon követhetővé váljon a testreszabás folyamata. * A dashlet támogatás lehetővé teszi az egyéni objektumok és modulfunkciók megjelenítését AJAX-konténeren keresztül a weblapon. * Az új sablonok új utakat nyitnak meg a fájlok és lehetőségek ellenőrzése terén.',
  'LBL_TEAM_NOTICE_TRACKER' => 'A Tracker mélyreható betekintést enged a SugarCRM használatára és teljesítményére vonatkozó információkba. Jellemzők: * A Tracker jelentések pillanatfelvétellel szolgálnak a rendszer használatáról, megkönnyítve ezzel a felhasználók hozzáadását és kezelhetőségét a CRM rendszeren belül. A felhasználók hozzáférhetnek minden heti CRM aktivitásra, rekordok és modulok megtekintésére, összesített bejelentkezési időre és a többi felhasználó elérhetőségére vonatkozó kimutatáshoz.* A rendszerfigyelő eszköz a rendszergazdák számára ad tájékoztatást a CRM használatáról, illetve potenciális problémáiról az alkalmazásokra nézve.',
  'dom_status' => 
  array (
    'Visible' => 'Látható',
    'Hidden' => 'Rejtett',
  ),
);

