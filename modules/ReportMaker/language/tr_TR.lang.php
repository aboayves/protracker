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
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_DETAILS_BUTTON_KEY' => 'D',
  'LBL_EDIT_BUTTON_KEY' => 'N',
  'LBL_RUN_BUTTON_KEY' => 'R',
  'LBL_MODULE_NAME' => 'Şirket Raporları',
  'LBL_MODULE_TITLE' => 'Şirket Raporları',
  'LBL_SEARCH_FORM_TITLE' => 'Şirket Raporları: Arama',
  'LBL_LIST_FORM_TITLE' => 'Tüm Şirket Raporları',
  'LBL_LIST_NAME' => 'İsim',
  'LBL_LIST_QUERY_NAME' => 'Sorgu adı:',
  'LBL_LIST_PUBLISHED' => 'Yayınlanmış',
  'LBL_LIST_SCHEDULED' => 'Planlanmış',
  'LBL_LIST_TYPE' => 'Tipi',
  'LBL_LIST_MODULE_TITLE' => 'Modül',
  'LBL_DESCRIPTION' => 'Tanım:',
  'LBL_PARENT_DATASET' => 'Ana Veri Kümesi:',
  'LBL_QUERY_NAME' => 'Sorgu İsmi:',
  'LBL_TYPE' => 'Rapor Tipi:',
  'LBL_SCHEDULED' => 'Rapor Planla:',
  'LBL_PUBLISHED' => 'Rapor Yayınla:',
  'LBL_NAME' => 'Rapor Adı:',
  'LBL_TITLE' => 'Rapor Başlığı:',
  'LBL_TABLE_WIDTH' => 'Tablo Genişliği %:',
  'LBL_TABLE_HEIGHT' => 'Tablo Yüksekliği %:',
  'LBL_FONT_SIZE' => 'Yazı Tipi Boyutu:',
  'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinizden emin misiniz?',
  'ERR_DELETE_RECORD' => 'Ürünü silmek için bir kayıt numarası belirtmelisiniz.',
  'LBL_CURRENCY' => 'Para Birimi:',
  'LNK_LIST_REPORTMAKER' => 'Şirket Raporlarını Görüntüle',
  'LNK_NEW_REPORTMAKER' => 'Şirket Raporu Oluştur',
  'LNK_LIST_DATASET' => 'Veri Formatlarını Görüntüle',
  'LNK_NEW_DATASET' => 'Veri Formatı Oluştur',
  'LNK_NEW_CUSTOMQUERY' => 'Özel Sorgu Oluştur',
  'LNK_CUSTOMQUERIES' => 'Özel Sorguları Görüntüle',
  'LNK_NEW_QUERYBUILDER' => 'Sorgu Oluştur',
  'LNK_QUERYBUILDER' => 'Sorgu Yaratıcısı',
  'LNK_ADVANCED_REPORTING' => 'Şirket Raporlarını Yönet',
  'LBL_ALL_REPORTS' => 'Raporları Görüntüle',
  'LBL_ADD_DATA_SET' => 'Yeni bir Veri Format Kümesi ekle',
  'LBL_EDIT_DATA_SET' => 'Veri Kümesini Güncelle',
  'LBL_DATA_SET' => 'Veri Kümesi:',
  'LBL_LIST_ORDER_Y' => 'Y-Eksenine göre Sırala:',
  'LBL_LIST_ORDER_X' => 'X-Eksenine göre Sırala:',
  'LBL_REPORT_ALIGN' => 'Rapor Hizalama:',
  'LBL_ADD_BUTTON_TITLE' => 'Seç [Alt+A]',
  'LBL_ADD_BUTTON_LABEL' => 'Seç',
  'LBL_NEW_BUTTON_TITLE' => 'Ekle [Alt+N]',
  'LBL_NEW_BUTTON_LABEL' => 'Yeni Yarat',
  'LBL_DETAILS_BUTTON_TITLE' => 'Rapor Detayları [Alt+D]',
  'LBL_DETAILS_BUTTON_LABEL' => 'Rapor Detayları',
  'LBL_EDIT_BUTTON_TITLE' => 'Raporu Düzenle [Alt+E]',
  'LBL_EDIT_BUTTON_LABEL' => 'düzenle',
  'LBL_RUN_BUTTON_TITLE' => 'Raporu Çalıştır [ALT+R]',
  'LBL_RUN_BUTTON_LABEL' => 'Raporu Çalıştır',
  'LNK_UP' => 'Yukarı',
  'LNK_DOWN' => 'Aşağı',
  'LBL_NONE' => 'Planlanmamış',
  'LBL_SCHEDULE_EMAIL' => 'Planlanmış',
  'LBL_HELLO' => 'Merhaba',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Ekte, Sugar uygulamasının otomatik olarak yaratılmış olduğu raporu görebilirsiniz. Bu raporun yaratılış tarihi',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 've kaydedilmiş adı "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Eğer rapor ayarlarını değiştirmek isterseniz, Sugar uygulamasına giriş yapın ve "Raporlar" sekmesine tıklayın.',
);

