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
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_TEST_TYPE_NAME' => 'Test',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'CreateWebToLeadForm',
  'LBL_LINK_SUBPANEL_TITLE' => 'Link',
  'LBL_FROM_ADDR' => '"Kimden" Adresi',
  'LBL_REPLY_ADDR' => '"Kime" Adresi:',
  'LBL_REPLY_NAME' => '"Kime" İsmi:',
  'LBL_MODULE_NAME' => 'Kampanyalar',
  'LBL_MODULE_TITLE' => 'Kampanyalar:Ana Sayfa',
  'LBL_NEWSLETTER_TITLE' => 'Kampanyalar: Bültenler',
  'LBL_SEARCH_FORM_TITLE' => 'Kampanya Arama',
  'LBL_LIST_FORM_TITLE' => 'Kampanya Listesi',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Bülten Listesi',
  'LBL_CAMPAIGN_NAME' => 'İsim:',
  'LBL_CAMPAIGN' => 'Kampanya:',
  'LBL_NAME' => 'İsim:',
  'LBL_INVITEE' => 'Kontaklar',
  'LBL_LIST_CAMPAIGN_NAME' => 'Kampanya',
  'LBL_LIST_STATUS' => 'Durum',
  'LBL_LIST_TYPE' => 'Tipi',
  'LBL_LIST_START_DATE' => 'Başlangıç Tarihi',
  'LBL_LIST_END_DATE' => 'Bitiş Tarihi',
  'LBL_DATE_ENTERED' => 'Oluşturulma Tarihi',
  'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
  'LBL_MODIFIED' => 'Düzenleyen Kişi:',
  'LBL_CREATED' => 'Oluşturan Kişi:',
  'LBL_TEAM' => 'Takım:',
  'LBL_ASSIGNED_TO' => 'Atanan Kişi:',
  'LBL_ASSIGNED_TO_ID' => 'Atanan Kullanıcı Id:',
  'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
  'LBL_CAMPAIGN_START_DATE' => 'Başlangıç Tarihi:',
  'LBL_CAMPAIGN_END_DATE' => 'Bitiş Tarihi:',
  'LBL_CAMPAIGN_STATUS' => 'Durum:',
  'LBL_CAMPAIGN_BUDGET' => 'Bütçe:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Tahmini Maliyet:',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Gerçek Maliyet:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Beklenen Gelir:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Etkiler:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Etki Başına Maliyet:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Tıklama Başına Maliyet:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Kazanılan Fırsatlar:',
  'LBL_CAMPAIGN_TYPE' => 'Tipi:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Amaç:',
  'LBL_CAMPAIGN_CONTENT' => 'Tanım:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Kalan Günler',
  'LNK_NEW_CAMPAIGN' => 'Kampanya Oluştur (Klasik)',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Kampanya Yarat (Sihirbaz)',
  'LNK_CAMPAIGN_LIST' => 'Kampanyalar',
  'LNK_NEW_PROSPECT' => 'Hedef Oluştur',
  'LNK_PROSPECT_LIST' => 'Hedefler',
  'LNK_NEW_PROSPECT_LIST' => 'Hedef Liste Oluştur',
  'LNK_PROSPECT_LIST_LIST' => 'Hedef Listeler',
  'LBL_MODIFIED_BY' => 'Değiştiren Kişi:',
  'LBL_CREATED_BY' => 'Oluşturan Kişi:',
  'LBL_DATE_CREATED' => 'Oluşturulma Tarihi:',
  'LBL_DATE_LAST_MODIFIED' => 'Değiştirilme Tarihi:',
  'LBL_TRACKER_KEY' => 'Takip Edici:',
  'LBL_TRACKER_URL' => 'Takip Edici URL:',
  'LBL_TRACKER_TEXT' => 'Takip Edici Link Metni:',
  'LBL_TRACKER_COUNT' => 'Takip Edici Sayısı:',
  'LBL_REFER_URL' => 'Takip Edici Yönlendirme URL\'i:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kampanyalar',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'E-Posta Kampanyaları',
  'LBL_NEW_FORM_TITLE' => 'Yeni Kampanya',
  'LBL_TRACKED_URLS' => 'Takip Edici URL\'leri',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Takip Edici URL\'leri',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Müşteriler',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Hedef Liste',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'E-Posta Pazarlama',
  'LNK_NEW_EMAIL_TEMPLATE' => 'E-Posta Şablonu Oluştur',
  'LNK_EMAIL_TEMPLATE_LIST' => 'E-Posta Şablonları',
  'LBL_TRACK_BUTTON_TITLE' => 'Durumu Göster',
  'LBL_TRACK_BUTTON_LABEL' => 'Durumu Göster',
  'LBL_QUEUE_BUTTON_TITLE' => 'E-Postalar Gönder',
  'LBL_QUEUE_BUTTON_LABEL' => 'E-Postalar Gönder',
  'LBL_TEST_BUTTON_TITLE' => 'Test Gönder',
  'LBL_TEST_BUTTON_LABEL' => 'Test Gönder',
  'LBL_COPY_AND_PASTE_CODE' => 'Veya ekteki HTML kodunu var olan bir sayfaya kopyalayıp yapıştırın',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Detayları Göster',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Detayları Göster',
  'LBL_DEFAULT' => 'Tüm Hedef Listeler',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Mesaj Kuyruğu',
  'LBL_LOG_ENTRIES_TITLE' => 'Yanıtlar',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Gönderilen/Denenen Mesaj',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Geri Dönen Mesajlar, Diğerleri',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Geri Dönen Mesajlar, Geçersiz E-Posta',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Click-thru Link\'i',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Görüntülenmiş Mesaj',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Liste Dışına Çıkan',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Oluşturulan Potansiyeller',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Potansiyeller',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Fırsatlar',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Oluşturulan Kontaklar',
  'LBL_BACK_TO_CAMPAIGNS' => 'Kampanyalara Geri Dönüş',
  'ERR_NO_EMAIL_MARKETING' => 'Kampanya ile ilişkilendirilmiş en az bir adet E-Posta Pazarlama mesajı olmalıdır.',
  'ERR_NO_TARGET_LISTS' => 'Kampanya ile ilişkilendirilmiş en az bir Hedef Liste olmalıdır.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Kampanya ile ilişkilendirilmiş en az bir Test Tipinde Hedef Liste olmalıdır.',
  'ERR_SENDING_NOW' => 'Mesajlar ulaştırıldı, lütfen bunu daha sonra deneyiniz.',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Bu Hedef Liste için E-Posta Pazarlama mesajı bulunamadı',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Bu Hedef Liste için, birden fazla E-Posta Pazarlama mesajı tanımlandı',
  'ERR_FIX_MESSAGES' => 'Lütfen devam etmeden önce aşağıdaki hataları düzeltiniz',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'ROI Görüntüle',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Test Kayıtlarını Sil',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Test Kayıtlarını Sil',
  'LBL_TRACK_DELETE_CONFIRM' => 'Bu opsiyon test sırasında üretilmiş tarihçeleri silecek. Devam?',
  'ERR_NO_MAILBOX' => 'Ekteki pazarlama mesajları için ilişkilendirilmiş posta hesabı yok.<BR>Lütfen devam etmeden önce düzeltin.',
  'LBL_LIST_TO_ACTIVITY' => 'Durum Göster',
  'LBL_CURRENCY_ID' => 'Para Birimi ID',
  'LBL_CURRENCY' => 'Para Birimi:',
  'LBL_ROLLOVER_VIEW' => 'Detayları görmek için bir bar çubuğunun üzerine geliniz.',
  'LBL_TARGETED' => 'Hedeflenen',
  'LBL_TOTAL_TARGETED' => 'Toplam Hedeflenen',
  'LBL_CAMPAIGN_FREQUENCY' => 'Sıklık:',
  'LBL_NEWSLETTERS' => 'Bültenleri Görüntüle',
  'LBL_NEWSLETTER' => 'Bülten',
  'LBL_NEWSLETTER_FORENTRY' => 'Bülten',
  'LBL_MORE_DETAILS' => 'Daha Fazla Detay',
  'LBL_CREATE_NEWSLETTER' => 'Bülten Oluştur',
  'LBL_LIST_NAME' => 'İsim',
  'LBL_STATUS_TEXT' => 'Durum:',
  'LBL_FROM_MAILBOX_NAME' => 'Kullanılacak Posta Hesabı:',
  'LBL_FROM_NAME' => '"Kimden" İsmi:',
  'LBL_START_DATE_TIME' => 'Başlangıç Tarih & Saat:',
  'LBL_DATE_START' => 'Başlangıç Tarihi',
  'LBL_TIME_START' => 'Başlangıç Saati',
  'LBL_TEMPLATE' => 'E-Posta Şablonu:',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Oluştur',
  'LBL_MESSAGE_FOR' => 'Bu Mesajı Şunlara Gönder:',
  'LBL_FINISH' => 'Bitir',
  'LBL_ALL_PROSPECT_LISTS' => 'Kampanyadaki tüm Hedef Listeler',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Düzenle',
  'LBL_EMAIL_SETUP_WIZARD' => 'E-Posta Kurulumu',
  'LBL_DIAGNOSTIC_WIZARD' => 'Tanı Görüntüle',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Abone olunan Bültenler',
  'LBL_UNSUBSCRIBED_HEADER' => 'Abonelikten Çıkılacak Mevcut Bültenler',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Bu Bülteni "Abonelikten Çıkılacak Mevcut Bültenler" listesine taşımak, kontağı bu bülten için "Abonelikten Çıkanlar" listesine ekleyecek. Kontağı orjinal Abonelik Listesinden veya Hedef Listesinden çıkarmayacak.',
  'LBL_FILTER_CHART_BY' => 'Grafikleri Filtreleme Koşulu:',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Abonelikleri Yönet',
  'LBL_MARK_AS_SENT' => 'Gönderildi Olarak İşaretle',
  'LBL_DEFAULT_LIST_NOT_FOUND' => '"default" tipte Hedef Liste bulunamadı',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Hiç kayıt bulunamadı',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Girişler İşlendi.',
  'LBL_EDIT_TRACKER_NAME' => 'Takip Edici Adı:',
  'LBL_EDIT_TRACKER_URL' => 'Takip Edici URL:',
  'LBL_EDIT_OPT_OUT_' => 'Listeden Çıkış Link\'i?',
  'LBL_EDIT_OPT_OUT' => 'Listeden Çıkış Link\'i:',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Abonelikten Çıkanlar Listesi Adı:',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Abonenelik Liste Adı:',
  'LBL_TEST_LIST_NAME' => 'Test Liste Adı:',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Abonelikten Ayrılma',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Abonelik',
  'LBL_UNSUBSCRIPTION_LIST' => 'Abonelikten Çıkanlar Listesi',
  'LBL_SUBSCRIPTION_LIST' => 'Abonelik Listesi',
  'LBL_MRKT_NAME' => 'İsim',
  'LBL_TEST_LIST' => 'Test Listesi',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Kampanyanın belirlenebilmesi için gerekli alanları doldurunuz.',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'ROI hesaplayabilmek için bütçeyi giriniz.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Her bültenin üç Hedef Listesi olması gerekir (Abonelik, Abonelikten Ayrılma, ve Test). Var olan hedef listeyi kullanabilirsiniz. Aksi taktirde, bir adet boş Hedef Liste bülteni kaydettiğinizde yaratılacak.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Kampanyanızda kullanılmak üzere Hedef Liste seçin veya yaratın.  Bu liste, pazarlama mesajınızı içeren E-Posta\'lar gönderilirken kullanılacak.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Ya da aşağıdaki formu kullanarak yeni bir tane oluşturun:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Bu kampanya ile kullanılmak üzere Takip Edici URL tanımlayınız. Takip Edici yaratmak için isim ve URL\'i girmek zorundasınız.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Bülteninize ait E-Posta örneği oluşturmak için aşağıdaki formu doldurunuz. Bülteninizin ne zaman ve nasıl dağıtılması gerektiğine dair bilgi tanımlamanız mümkün olacak.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'İşlemde son adımdasınız.  Bir test E-Postası gönderip göndermemeye karar verin, Bülteninizi planlayın, veya değişiklikleri kaydedip özet sayfasına geçin.',
  'LBL_HOME_START_MESSAGE' => 'Oluşturmak istediğiniz Kampanya tipini seçin',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Zaten son adımdasınız.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Zaten ilk adımdasınız.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Kampanya Başlığı',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Kampanya Bütçesi',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Kampanya Takip Edici URL\'leri',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Abonelik Bilgisi',
  'LBL_WIZ_MARKETING_TITLE' => 'Pazarlama E-Postası',
  'LBL_WIZ_SENDMAIL_TITLE' => 'E-Posta Gönder',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'E-Posta Test Et',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Özet',
  'LBL_NAVIGATION_MENU_GEN1' => 'Kampanya Başlığı',
  'LBL_NAVIGATION_MENU_GEN2' => 'Bütçe',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Takip Ediciler',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Pazarlama',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'E-Posta Gönder',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Abonelikler',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Özet',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Bu kampanya için Abonelik tipinde hedef liste yaratılacak.<br>  Hedef liste, bu kampanya için E-Posta göndermek amacıyla kullanılacak.  <br>Halen hazır bir listeniz yoksa, boş bir liste yaratılacak.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Bu kampanya için Abonelikten Çıkış tipinde hedef liste yaratılacak.  <br>Bu hedef liste kampanyanızdan çıkan ve E-Posta üzerinden ulaşılmaması gereken kişileri içerecek.  <br>Halen hazır bir listeniz yoksa, boş bir liste yaratılacak.',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Bu kampanya için Test tipinde hedef liste yaratılacak.  <br>Bu hedef liste kampanyanıza ait test E-Posta\'larını içerecek.  <br>Halen hazır bir listeniz yoksa, boş bir liste yaratılacak.',
  'LBL_TRACKERS' => 'Takip Ediciler',
  'LBL_ADD_TRACKER' => 'Takip Edici Oluştur',
  'LBL_ADD_TARGET' => 'Ekle',
  'LBL_CREATE_TARGET' => 'Oluştur',
  'LBL_SELECT_TARGET' => 'Var olan Hedef Listeyi kullan',
  'LBL_REMOVE' => 'Sil',
  'LBL_CONFIRM' => 'Başla',
  'LBL_START' => 'Başla',
  'LBL_TOTAL_ENTRIES' => 'Kayıtlar',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Yapılanları kaydet ve Pazarlama E-Postasına ilerle',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Opsiyonları Kaydet',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Bilgileri kaydetmek ve çıkmak istiyor musunuz?',
  'LBL_CONFIRM_SEND_SAVE' => 'Bu sayfadan çıkıp, Kampanya E-Postası Gönderme sayfasına ulaşacaksınız.  Kaydedip devam etmek istiyor musunuz?',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Bülten:',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Bülten Düzenle:',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Kampanya Düzenle:',
  'LBL_SEND_AS_TEST' => 'Pazarlama E-Postasını Test Amaçlı Gönder',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Bitir',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Kaydet ve Devam Et',
  'LBL_TARGET_LISTS' => 'Hedef Listeler',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Abonelik listenizde en az bir kayıt olmadığı taktirde Pazarlama E-Postası gönderemezsiniz.  Listenizi işiniz bittikten sonra doldurabilirsiniz.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Hedef listenizde en az bir kayıt olmadığı taktirde Pazarlama E-Postası gönderemezsiniz.  Listenizi işiniz bittikten sonra doldurabilirsiniz.',
  'LBL_NO_TARGETS_WARNING' => 'Kampanyanızda en az bir Hedef Listesi olmadığı taktirde Pazarlama E-Postası gönderemezsiniz.',
  'LBL_NONE' => 'hiç yaratılmadı',
  'LBL_CAMPAIGN_WIZARD' => 'Kampanya Sihirbazı',
  'LBL_EMAIL' => 'E-Posta',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'E-Posta temelli olmayan Kampanya',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Kampanya Tipi',
  'LBL_TARGET_LIST' => 'Hedef Liste',
  'LBL_TARGET_TYPE' => 'Hedef Liste Tipi',
  'LBL_TARGET_NAME' => 'Hedef Liste Adı',
  'LBL_EMAILS_SCHEDULED' => 'Planlamış E-Postalar',
  'LBL_TEST_EMAILS_SENT' => 'Test E-Postaları Gönderildi',
  'LBL_USERS_CANNOT_OPTOUT' => 'Sistem Kullanıcıları Gelen E-Posta listesinden çıkamazlar.',
  'LBL_ELECTED_TO_OPTOUT' => 'E-Posta Listesinden Çıkmak için belirlendiniz.',
  'LBL_COPY_OF' => 'Kopyası',
  'LBL_SAVED_SEARCH' => 'Kayıtlı  Arama & Görünüm',
  'LBL_WIZ_FROM_NAME' => '"Kimden" İsmi:',
  'LBL_WIZ_FROM_ADDRESS' => '"Kimden" Adresi:',
  'LBL_EMAILS_PER_RUN' => 'Her partide gönderilen E-Posta sayısı:',
  'LBL_CUSTOM_LOCATION' => 'Kullanıcı Tanımlı',
  'LBL_DEFAULT_LOCATION' => 'Varsayılan',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Her partide gönderilecek E-Posta sayısı için yalnızca sayısal değer girilebilir',
  'LBL_LOCATION_TRACK' => 'Kampanya Takip Etme Dosyaları Lokasyonu (campaign_tracker.php gibi):',
  'LBL_MAIL_SENDTYPE' => 'Posta Transfer Agent',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Kimlik Doğrulaması Kullanılsın mı?',
  'LBL_MAIL_SMTPPASS' => 'SMTP Şifresi:',
  'LBL_MAIL_SMTPPORT' => 'SMTP Portu',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Sunucusu',
  'LBL_MAIL_SMTPUSER' => 'SMTP Kullanıcı Adı',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Kampanyalar için E-Posta Kurulumu',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php içindeki site_url değeri',
  'LBL_NOTIFY_TITLE' => 'E-Posta Uyarı Seçenekleri',
  'LBL_MASS_MAILING_TITLE' => 'Hacimli Postalama Opsiyonları',
  'LBL_SERVER_TYPE' => 'Posta Sunucusu Protokolü',
  'LBL_SERVER_URL' => 'Posta Sunucusu Adresi',
  'LBL_LOGIN' => 'Kullanıcı Adı',
  'LBL_PORT' => 'Posta Sunucusu Portu',
  'LBL_MAILBOX_NAME' => 'Posta Hesabı Adı:',
  'LBL_PASSWORD' => 'Şifre',
  'LBL_MAILBOX_DEFAULT' => 'Gelen Kutusu',
  'LBL_MAILBOX' => 'İzlenen Dosya',
  'LBL_NAVIGATION_MENU_SETUP' => 'E-Posta Kurulumu',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Yeni Posta Kutusu',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Geri Dönen E-Posta (bounce) yönetimi yapılan posta kutu(ları) bulundu. Yeni bir tane yaratmak zorunda değilsiniz, fakat aşağıdaki şekilde yaratabilirsiniz.',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Geri Dönen E-posta (bounce) yönetimi yapan posta kutusu bulunamadı, lütfen aşağıda bir tane yaratınız.',
  'LBL_CAMP_MESSAGE_COPY' => 'Kampanya mesajlarının kopyalarını tut:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Bütün kampanyalar sırasında gönderilen <bold>HER</bold> E-Postanın tam kopyasını tutmak istiyor musunuz?  <bold>Varsayılan ve önerilen değer HAYIR\'dır</bold>.  Hayır şeçilmesi durumunda gönderilen şablon ve her mesajın tekrar yaratılabilmesi için gerekli parametreler kaydedilecek.',
  'LBL_YES' => 'Evet',
  'LBL_NO' => 'Hayır',
  'LBL_DEFAULT_FROM_ADDR' => 'Varsayılan:',
  'LBL_EMAIL_SETUP_DESC' => 'Aşağıdaki formu dolurarak sistem tanımlamalarını değiştiriniz, bu sayede kampanya E-Postaları gönderilebilecek.',
  'LBL_CREATE_MAILBOX' => 'Yeni Posta Hesabı Oluştur',
  'LBL_SSL_DESC' => 'Eğer E-Posta sunucunuz güvenli "socket" bağlantısını destekliyorsa, bu seçenek E-Postaların içeri alınması sırasında SSL bağlantısını zorunlu kılacak.',
  'LBL_SSL' => 'SSL Kullanılsın',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Listelenen nedenlerden dolayı kampanyalar isteğiniz gibi çalışmayabilir ve E-Postalarınız gönderilemeyebilir:',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Kampanya Tanıları',
  'LBL_DIAGNOSTIC' => 'Tanı',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Geri Dönen E-Posta (bounce) yönetimi için tespit edilen E-Posta Hesapları:',
  'LBL_MAILBOX_CHECK1_BAD' => 'Hiç bir posta hesabı için Geri Dönen E-Posta (bounce) yönetimi tespit edilemedi.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'E-Posta Ayarları gerçekleştirildi.:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Sistem E-Posta adresinizi ayarlayın. E-Posta ayarları henüz yapılmadı.',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Planlayıcı bulundu',
  'LBL_SCHEDULER_CHECK_BAD' => 'Planlayıcı bulunamadı',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Planlayıcı Geri Dönen (bounced) Kampanya E-Postaları için ayarlanmadı.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Kampanya E-Postaları için Planlayıcı ayarlanmadı.',
  'LBL_SCHEDULER_NAME' => 'Planlayıcı',
  'LBL_SCHEDULER_STATUS' => 'Durum',
  'LBL_MARKETING_CHECK1_GOOD' => 'E-Posta pazarlama bileşenleri tespit edildi.',
  'LBL_MARKETING_CHECK1_BAD' => 'E-Posta pazarlama bileşenleri tespit edilmedi, kampanyayı E-Posta ile gönderebilmek için bir tane yaratmanız gerekiyor.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Hedef Listeler tespit edildi.',
  'LBL_MARKETING_CHECK2_BAD' => 'Hedef Liste bulunamadı, istenen kampanya ekranında bir adet yaratmanız gerekiyor.',
  'LBL_EMAIL_SETUP_WIZ' => 'E-Posta Ayarlarını Başlat',
  'LBL_SCHEDULER_LINK' => 'planlayıcı yönetim ekranına git.',
  'LBL_TO_WIZARD' => 'başlat',
  'LBL_TO_WIZARD_TITLE' => 'Sihirbazı Başlat',
  'LBL_EDIT_EXISTING' => 'Kampanya Düzenle',
  'LBL_EDIT_TARGET_LIST' => 'Hedef Liste Düzenle',
  'LBL_SEND_EMAIL' => 'E-Posta Planla',
  'LBL_USE_EXISTING' => 'Mevcutu Kullan',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Yeni bir pazarlama E-Postası Oluştur',
  'LBL_CHOOSE_NEXT_STEP' => 'Sonraki adımınızı seçin',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Lütfen Sistem Yöneticisine bilgi veriniz, bu sayede problem düzeltilebilir.',
  'LBL_EMAIL_COMPONENTS' => 'E-Posta Bileşenleri',
  'LBL_SCHEDULER_COMPONENTS' => 'Planlayıcı Bileşenleri',
  'LBL_RECHECK_BTN' => 'Tekrar-Kontrol',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Potansiyel Formu Oluşturma: Alan Seç',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Potansiyel Formu Oluşturma: Form Özellikleri',
  'LBL_DRAG_DROP_COLUMNS' => 'Kolon 1 ve 2\'deki Potansiyel alanlarına sürükle ve bırak',
  'LBL_DEFINE_LEAD_HEADER' => 'Form Başlığı:',
  'LBL_LEAD_DEFAULT_HEADER' => 'Kampanyalar için Web\'den Potansiyel Formu',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Yolla Tuşu Başlığı:',
  'LBL_DEFINE_LEAD_POST_URL' => 'Yolla URL\'i :',
  'LBL_EDIT_LEAD_POST_URL' => 'Yolla URL\'ini Değiştir?',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Yönlendirme URL\'i:',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'İlişkili Kampanya:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Gönder',
  'LBL_WEB_TO_LEAD' => 'Potansiyel Formu Oluşturma',
  'LBL_LEAD_FOOTER' => 'Form Sayfa Altlığı:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Seç ve bir kampanya ile ilişkilendir:',
  'NTC_NO_LEGENDS' => 'Boş',
  'LBL_SELECT_LEAD_FIELDS' => 'Lütfen mevcut alanlardan seçin',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Form Tanımı:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Bu formu gönderdiğinizde bir potansiyel yaratıp kampanya ile ilişkilendirecek',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Lütfen Web\'den Potansiyel Formunu indirin',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Web\'den Potansiyel Formu',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Lütfen tüm gerekli alanları giriniz',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Geçersiz E-Posta Adresi',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Mevcut Alanlar',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Potansiyel Formu (Birinci Kolon)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Potansiyel Formu (İkinci Kolon)',
  'LBL_LEAD_MODULE' => 'Potansiyel',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Lütfen zorunlu alanları seçiniz:',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Kampanya Yatırım Dönüşüm Oranı (ROI)',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Alıcı Aktivitesine göre Kampanya Geri Dönüşü',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'E-Posta Adresi veya domain tarafından engellendi',
  'LBL_AMOUNT_IN' => 'Miktar',
  'LBL_ROI_CHART_REVENUE' => 'Ciro',
  'LBL_ROI_CHART_INVESTMENT' => 'Yatırım',
  'LBL_ROI_CHART_BUDGET' => 'Bütçe',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Beklenen Gelir',
  'LBL_TOP_CAMPAIGNS' => 'En Üst Kampanyalar',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Kampanya Adı',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Ciro',
  'LBL_LEADS' => 'Potansiyeller',
  'LBL_CONTACTS' => 'Kontaklar',
  'LBL_ACCOUNTS' => 'Müşteriler',
  'LBL_OPPORTUNITIES' => 'Fırsatlar',
  'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
  'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
  'LBL_LOG_ENTRIES' => 'Tarihçe Kayıtları',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Aday Müşteri Listesi',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'E-Posta Pazarlama',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Takip Kuyruğu',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Hedeflendi',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Görüldü',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Potansiyel',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontak',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Geçersiz E-Posta',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Gönderim Hatası',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Silindi',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Bloklandı',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Müşteriler',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
  'LBL_IMPORT_PROSPECTS' => 'Hedef Verilerini Yükle',
  'LBL_LEAD_FORM_WIZARD' => 'Potansiyel Form Sihirbazı',
  'LBL_CAMPAIGN_INFORMATION' => 'Kampanya Özeti',
  'LBL_MONTH' => 'Ay',
  'LBL_YEAR' => 'Yıl',
  'LBL_DAY' => 'Gün',
);

