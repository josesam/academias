<?php

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





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_MODULE_NAME' => 'Fırsatlar',
  'LBL_MODULE_TITLE' => 'Fırsatlar: Ana Sayfa',
  'LBL_SEARCH_FORM_TITLE' => 'Fırsat Arama',
  'LBL_VIEW_FORM_TITLE' => 'Fırsat Görüntüleme',
  'LBL_LIST_FORM_TITLE' => 'Fırsat Listesi',
  'LBL_OPPORTUNITY_NAME' => 'Fırsat Adı:',
  'LBL_OPPORTUNITY' => 'Fırsat:',
  'LBL_NAME' => 'Fırsat Adı',
  'LBL_INVITEE' => 'Kontaklar',
  'LBL_CURRENCIES' => 'Para Birimleri',
  'LBL_LIST_OPPORTUNITY_NAME' => 'İsim',
  'LBL_LIST_ACCOUNT_NAME' => 'Müşteri Adı',
  'LBL_LIST_AMOUNT' => 'Fırsat Miktarı',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Tutar',
  'LBL_LIST_DATE_CLOSED' => 'Kapat',
  'LBL_LIST_SALES_STAGE' => 'Satış Aşaması',
  'LBL_ACCOUNT_ID' => 'Müşteri ID',
  'LBL_CURRENCY_ID' => 'Para Birimi ID',
  'LBL_CURRENCY_NAME' => 'Para Birimi Adı',
  'LBL_CURRENCY_SYMBOL' => 'Para Birimi Sembolü',
  'LBL_TEAM_ID' => 'Takım ID',
  'UPDATE' => 'Fırsat - Para Birimi Güncelle',
  'UPDATE_DOLLARAMOUNTS' => 'ABD Doları Tutarını Güncelle',
  'UPDATE_VERIFY' => 'Tutarları Kontrol Et',
  'UPDATE_VERIFY_TXT' => 'Fırsatlardaki miktarların düzgün sayısal değerler olduğunu, yalnızca (0-9) arasında rakam içerdiğini ve (.) ayracını kontrol eder',
  'UPDATE_FIX' => 'Sabit Tutarlar',
  'UPDATE_FIX_TXT' => 'Hatalı miktarlar şu anki değerlerden sayısal değer üretilerek düzeltmeye çalışılıyor. Değiştirilen herhangi bir değer, amount_backup veritabanı alanında yedeklenecek. Eğer bu rutini çalıştırır ve hata ile karşılaşırsanız, bu alanı yedekten dönmeden tekrar çalıştırmayınız, çünkü tekrar çalıştırma yedeklenen değerin bozulmasına neden olacaktır.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Şu anki döviz kurlarına göre fırsatların U.S. Dollar miktarlarını güncelle. Bu değer, Grafik ve Liste Görünümlerinde Para Birimi Miktarlarını hesaplamak için kullanılmaktadır.',
  'UPDATE_CREATE_CURRENCY' => 'Yeni Para Birimi Oluşturma:',
  'UPDATE_VERIFY_FAIL' => 'Hatalı Kontrol Kaydı:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Şu Anki Tutar:',
  'UPDATE_VERIFY_FIX' => 'Düzeltmenin Çalıştırılmasının sonucu şu olacak:',
  'UPDATE_INCLUDE_CLOSE' => 'Kapanmış Kayıtları İçerir',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Yeni Tutar:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Yeni Para Birimi:',
  'UPDATE_DONE' => 'Tamamlandı',
  'UPDATE_BUG_COUNT' => 'Hatalar Bulundu ve Düzeltilmesi Denendi:',
  'UPDATE_BUGFOUND_COUNT' => 'Hatalar Bulundu:',
  'UPDATE_COUNT' => 'Güncellenen Kayıtlar:',
  'UPDATE_RESTORE_COUNT' => 'Yenilenen Kayıt Miktarları:',
  'UPDATE_RESTORE' => 'Yenilenen Tutarlar',
  'UPDATE_RESTORE_TXT' => 'Düzeltme işlemi sırasında yaratılmış yedeklerden tutar değerleri yenilenir.',
  'UPDATE_FAIL' => 'Güncellenemiyor -',
  'UPDATE_NULL_VALUE' => 'Miktar değeri BOŞ, 0 olarak değiştiriliyor-',
  'UPDATE_MERGE' => 'Para Birimlerini Birleştir',
  'UPDATE_MERGE_TXT' => 'Birden fazla para birimini tek bir para birimine birleştir. Aynı para birimi için birden fazla para birimi kayıtları varsa, bunları beraber birleştirirsiniz. Bu işlem ayrıca bütün diğer modüller için para birimlerini de birleştirecektir.',
  'LBL_ACCOUNT_NAME' => 'Müşteri Adı:',
  'LBL_AMOUNT' => 'Fırsat Tutarı:',
  'LBL_AMOUNT_USDOLLAR' => 'Tutar:',
  'LBL_CURRENCY' => 'Para Birimi:',
  'LBL_DATE_CLOSED' => 'Tahmini Kapanış Tarihi:',
  'LBL_TYPE' => 'Tipi:',
  'LBL_CAMPAIGN' => 'Kampanya:',
  'LBL_NEXT_STEP' => 'Bir Sonraki Adım:',
  'LBL_LEAD_SOURCE' => 'Fırsat Kaynağı:',
  'LBL_SALES_STAGE' => 'Satış Aşaması:',
  'LBL_PROBABILITY' => 'Olasılık (%):',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_DUPLICATE' => 'Aynı Fırsat Olasılığı',
  'MSG_DUPLICATE' => 'Şu anda yaratmakta olduğunuz Fırsat kaydı, başka bir Fırsat kaydının aynısı olabilir. Benzer ismi içeren Fırsat kayıtları aşağıda listelenmektedir.<br>Kaydet tuşuna basarak Fırsatı yaratmaya devam edebilir, veya İptal tuşuna basarak Fırsatı yaratmadan modüle geri dönebilirsiniz.',
  'LBL_NEW_FORM_TITLE' => 'Fırsat Oluştur',
  'LNK_NEW_OPPORTUNITY' => 'Fırsat Oluştur',
  'LNK_OPPORTUNITY_REPORTS' => 'Fırsat Raporlarını Görüntüle',
  'LNK_OPPORTUNITY_LIST' => 'Fırsatları Görüntüle',
  'ERR_DELETE_RECORD' => 'Fırsatı silmek için kayıt no\'su belirtilmelidir.',
  'LBL_TOP_OPPORTUNITIES' => 'En Önemli Fırsatlarım',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Bu kontağı fırsat listesinden silmek istediğinizden emin misiniz?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Bu fırsatı projeden silmek istediğinizden emin misiniz?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Fırsatlar',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteler',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarihçe',
  'LBL_RAW_AMOUNT' => 'İşlenmemiş Miktar',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaklar',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Teklifler',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
  'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanan Kullanıcı',
  'LBL_CONTRACTS' => 'Kontratlar',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontratlar',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Kapatılmış Fırsatlarım',
  'LBL_TOTAL_OPPORTUNITIES' => 'Toplam Fırsatlar',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Kapatılan Kazanılmış Fırsatlar',
  'LBL_ASSIGNED_TO_ID' => 'Atanan Kullanıcı:',
  'LBL_CREATED_ID' => 'Oluşturan ID',
  'LBL_MODIFIED_ID' => 'Değiştiren ID',
  'LBL_MODIFIED_NAME' => 'Değiştiren Kullanıcı Adı',
  'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
  'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanyalar',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
  'LABEL_PANEL_ASSIGNMENT' => 'Atama',
  'LNK_IMPORT_OPPORTUNITIES' => 'Sisteme Fırsat Aktar',
);

