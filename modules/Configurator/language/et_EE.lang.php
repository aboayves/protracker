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
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
  'LBL_MODULE_FAVICON_HELP' => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
  'LBL_SKYPEOUT_ON_DESC' => 'Allows users to click on phone numbers to call using SkypeOut®. The numbers must be formatted properly to make use of this feature. That is, it must be "+" "The Country Code" "The Number", like +1 (555) 555-1234.',
  'LOG_SLOW_QUERIES' => 'Log slow queries',
  'LOCK_HOMEPAGE_HELP' => 'This setting is to prevent<br />1) the addition of new home pages and dashlets in the Home module,<br />2) customization of dashlet placement in the home pages by dragging and dropping.',
  'SLOW_QUERY_TIME_MSEC' => 'Slow query time threshold (msec)',
  'STACK_TRACE_ERRORS' => 'Display stack trace of errors',
  'LOCK_HOMEPAGE' => 'Prevent user customizable Homepage layout',
  'LOCK_SUBPANELS' => 'Prevent user customizable subpanel layout',
  'LBL_OC_STATUS_DESC' => 'Check here if you would like any user to have access to Offline Client. Otherwise you can configure access at the user level.',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the Sugar user. [May need to be fully qualified] It will bind anonymously if not provided.',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: uid',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: memberUid',
  'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.\\nis_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[AD: userPrincipalName] [openLDAP: userPrincipalName] [Mac OS X: uid]',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[AD: userPrincipalName] [openLDAP: dn] [Mac OS X: dn]',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example:ldap.example.com or ldaps://ldap.example.com for SSL',
  'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
  'SHOW_DOWNLOADS_TAB' => 'Kuva allalaadimiste sakk',
  'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to Sugar plug-ins and other available files',
  'LBL_MARK_POINT' => 'Mark Point',
  'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
  'LBL_IGNORE_SELF' => 'Ignore Self:',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
  'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'The aspect ratio of the image must be between 3:1 and 20:1. Upload a new file with this ratio.',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Append after filename',
  'LBL_VCAL_PERIOD' => 'vCal Updates Time Period:',
  'vCAL_HELP' => 'Use this setting to determine the number of months in advance of the current date that Free/Busy information for calls and meetings is published.<br />To turn Free/Busy publishing off, enter "0". The minimum is 1 month; the maximum is 12 months.',
  'PDF_CREATOR_INFO' => 'Defines the creator of the document.<br />This is typically the name of the application that generates the PDF.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Reports Image Width',
  'PDF_HEADER_STRING' => 'Header String',
  'PDF_HEADER_STRING_INFO' => 'Header description string',
  'PDF_HEADER_TITLE_INFO' => 'String to print as title on document header',
  'PDF_KEYWORDS_INFO' => 'Associate Keywords with the document, generally in the form "keyword1 keyword2..."',
  'PDF_COMPRESSION_INFO' => 'Activates or deactivates page compression.<br />When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document.',
  'PDF_JPEG_QUALITY_INFO' => 'Set the default JPEG compression quality (1-100)',
  'K_TITLE_MAGNIFICATION_INFO' => 'Title magnification respect main font size.',
  'K_SMALL_RATIO_INFO' => 'Reduction factor for small font.',
  'HEAD_MAGNIFICATION' => 'Head Magnification',
  'HEAD_MAGNIFICATION_INFO' => 'Magnification factor for titles.',
  'PDF_IMAGE_SCALE_RATIO' => 'Image scale ratio',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ratio used to scale the images',
  'PDF_UNIT' => 'Unit',
  'PDF_UNIT_INFO' => 'document unit of measure',
  'PDF_GD_WARNING' => 'You do not have the GD library installed for PHP. Without the GD library installed, only JPEG logos can be displayed in PDF documents.',
  'ERR_EZPDF_DISABLE' => 'Warning : The EZPDF class is disabled from the config table and it set as the PDF class. Please "Save" this form to set TCPDF as the PDF Class and return in a stable state.',
  'LBL_IMG_RESIZED' => '(resized for display)',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Check to embed the font into the PDF file',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Examples :<br /><br />    * Chinese Traditional :<br /><br />      $enc=\\\'UniCNS-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'CNS1\\\',\\\'Supplement\\\'=>0);<br />      include(\\\'include/tcpdf/fonts/uni2cid_ac15.php\\\');<br /><br />    * Chinese Simplified :<br /><br />      $enc=\\\'UniGB-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'GB1\\\',\\\'Supplement\\\'=>2);<br />      include(\\\'include/tcpdf/fonts/uni2cid_ag15.php\\\');<br /><br />    * Korean :<br /><br />      $enc=\\\'UniKS-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'Korea1\\\',\\\'Supplement\\\'=>0);<br />      include(\\\'include/tcpdf/fonts/uni2cid_ak12.php\\\');<br /><br />    * Japanese :<br /><br />      $enc=\\\'UniJIS-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'Japan1\\\',\\\'Supplement\\\'=>5);<br />      include(\\\'include/tcpdf/fonts/uni2cid_aj16.php\\\');<br /><br />More help : www.tcpdf.org',
  'LBL_PDF_PATCH_INFO' => 'Custom modification of the encoding. Write a PHP array.<br />Example :<br />ISO-8859-1 does not contain the euro symbol. To add it at position 164, write "array(164=>\\\'Euro\\\')".',
  'LBL_PDF_ENCODING_TABLE' => 'Encoding Table',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Name of the encoding table.<br />This option is ignored for TrueType Unicode, OpenType Unicode and symbolic fonts.<br />The encoding defines the association between a code (from 0 to 255) and a character contained in the font.<br />The first 128 are fixed and correspond to ASCII.',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Fonts supported by SugarPDF :<br /><br />    * TrueTypeUnicode (UTF-8 Unicode)<br />    * OpenTypeUnicode<br />    * TrueType<br />    * OpenType<br />    * Type1<br />    * CID-0<br /><br /><br />If you choose to not embed your font in the PDF, the generated PDF file will be lighter but a substitution will be use if the font is not available in the system of your reader.<br /><br />Adding a PDF font to SugarCRM requires to follow steps 1 and 2 of the TCPDF Fonts documentation available in the "DOCS" section of the TCPDF website.<br /><br />The pfm2afm and ttf2ufm utils are available in fonts/utils in the TCPDF package that you can download on the "DOWNLOAD" section of the TCPDF website.<br /><br />Load the metric file generated in step 2 and your font file below.',
  'LBL_ADDFONTRESULT_TITLE' => 'Result of the add font process',
  'LBL_FONT_MOVE_DEFFILE' => 'Font definition file move to :',
  'LBL_FONT_MOVE_FILE' => 'Font file move to :',
  'ERR_DELETE_CORE_FILE' => 'ERROR: It is not possible to delete a core font.',
  'ERR_NO_FONT_PATH' => 'ERROR: No font path available!',
  'ERR_NO_CUSTOM_FONT_PATH' => 'ERROR: No custom font path available!',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'doesn\'t exist or is not a directory.',
  'ERR_FONT_MAKEFONT' => 'ERROR: MakeFont error',
  'ERR_FONT_ALREADY_EXIST' => 'ERROR : This font already exist. Rollback...',
  'ERR_PDF_NO_UPLOAD' => 'Error during the upload of the font or metric file.',
  'LBL_WIZARD_WELCOME' => 'Click Next to brand, localize and configure Sugar now. If you wish to configure Sugar later, click Skip.',
  'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
  'LBL_WIZARD_FINISH' => 'Click Continue to configure your user settings.<br /><br />To configure additional system settings, click here.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your Sugar.',
  'LBL_WIZARD_LOCALE_DESC' => 'Täpsusta, kuidas soovid kuvada andmeid Sugaris, arvestades oma geograafilist asukohta. Siin määratud sätted saavad olema sinu vaikesäteteks. Kasutajatel on võimalik määrata nende end eelistused.',
  'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from Sugar, as sent from the specified email account.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Aruannete moodul on saadaval vaid Sugar Mobile IPhone kliendile.',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Server Type:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
  'LBL_PORTAL_TITLE' => 'Customer Self-Service Portal',
  'LBL_PROXY_HOST' => 'Proxy Host',
  'LBL_PROXY_PORT' => 'Port',
  'SESSION_TIMEOUT' => 'Portal Session Timeout',
  'LBL_LDAP_TITLE' => 'LDAP Authentication Support',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
  'LBL_LDAP_SERVER_PORT' => 'Port Number:',
  'DEVELOPER_MODE' => 'Developer Mode',
  'LBL_LOGGER_FILENAME' => 'Log File Name',
  'PDF_HEADER_LOGO_WIDTH' => 'Quotes Image Width',
  'PDF_ACL_ACCESS' => 'Access Control',
  'PDF_ACL_ACCESS_INFO' => 'Default Access Control for the PDF generation.',
  'K_CELL_HEIGHT_RATIO' => 'Cell Height Ratio',
  'K_TITLE_MAGNIFICATION' => 'Title Magnification',
  'K_SMALL_RATIO' => 'Small Font Factor',
  'LBL_FONTMANAGER_BUTTON' => 'PDF Font Manager',
  'LBL_FONTMANAGER_TITLE' => 'PDF Font Manager',
  'LBL_FONT_BOLD' => 'Bold',
  'LBL_FONT_ITALIC' => 'Italic',
  'LBL_FONT_BOLDITALIC' => 'Bold/Italic',
  'LBL_FONT_REGULAR' => 'Regular',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Core',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_LIST_ENC' => 'Encoding',
  'LBL_FONT_LIST_EMBEDDED' => 'Embedded',
  'LBL_FONT_LIST_CIDINFO' => 'CID Information',
  'LBL_PDF_PATCH' => 'Patch',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm or .ufm file',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
  'ADVANCED' => 'Laiendatud',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valuutakood',
  'DEFAULT_CURRENCY_NAME' => 'Valuuta nimi',
  'DEFAULT_CURRENCY_SYMBOL' => 'Valuuta sümbol',
  'DEFAULT_CURRENCY' => 'Vaike valuuta',
  'DEFAULT_DATE_FORMAT' => 'Vaikekuupäeva formaat',
  'DEFAULT_DECIMAL_SEP' => 'Kümnendkoha sümbol',
  'DEFAULT_LANGUAGE' => 'Vaikekeel',
  'DEFAULT_NUMBER_GROUPING_SEP' => '1000 eraldaja',
  'DEFAULT_SYSTEM_SETTINGS' => 'Kasutaja liides',
  'DEFAULT_THEME' => 'Vaiketeema',
  'DEFAULT_TIME_FORMAT' => 'Vaike ajaformaat',
  'DISPLAY_RESPONSE_TIME' => 'Kuva serveri vasteajad',
  'IMAGES' => 'Logod',
  'LBL_ADMIN_WIZARD' => 'Admini viisard',
  'LBL_ALLOW_USER_TABS' => 'Luba kasutajatel tabeldused peita',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Süsteemi sätted',
  'LBL_ENABLE_MAILMERGE' => 'Lubadae-kirja mestimist?',
  'LBL_LOGVIEW' => 'Konfigureeri logi sätted',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Kasutada SMTP autentimist?',
  'LBL_MAIL_SMTPPASS' => 'SMTP salasõna:',
  'LBL_MAIL_SMTPUSER' => 'SMTP kasutajanimi:',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vali oma e-posti teenusepakkuja:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
  'LBL_GMAIL_SMTPPASS' => 'Gmaili salasõna:',
  'LBL_GMAIL_SMTPUSER' => 'Gmaili e-posti aadress:',
  'LBL_EXCHANGE_SMTPPASS' => 'Vaheta salasõna:',
  'LBL_EXCHANGE_SMTPUSER' => 'Vaheta kasutajanime:',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Luba kasutajatel seda kontot kasutada väljaminevate e-kirjade jaoks:',
  'LBL_MAILMERGE_DESC' => 'Seda lippu peaks kontrolli sel juhul, kui sul on Sugari plugin Microsoft® Word® jaoks.',
  'LBL_MAILMERGE' => 'Kirja mestimine',
  'LBL_MODULE_FAVICON' => 'Kuva mooduli ikooni favikonina.',
  'LBL_MODULE_NAME' => 'Süsteemi sätted',
  'LBL_MODULE_ID' => 'Konfigureerija',
  'LBL_MODULE_TITLE' => 'Kasutajaliides',
  'LBL_NOTIFY_FROMADDRESS' => '"Kellelt" aadress',
  'LBL_NOTIFY_SUBJECT' => 'E-kirja teema:',
  'LBL_PORTAL_ON_DESC' => 'Luba kasutajatel hallata portaal kasutajainfot kontakti kirjete piires. Portaali kasutajatel on ligipääs Juhtumitele, Bugidele, Teadmusbaasi artiklitele ja muule infole läbi Sugari rakenduse.',
  'LBL_PORTAL_ON' => 'Luba Portal User Management',
  'LBL_PROXY_AUTH' => 'Autentimine?',
  'LBL_PROXY_ON_DESC' => 'Konfigureeri proxy serveri aadress ja autentimissätteid',
  'LBL_PROXY_ON' => 'Kasutada proxy serverit?',
  'LBL_PROXY_PASSWORD' => 'Parool',
  'LBL_PROXY_TITLE' => 'Proxi sätted',
  'LBL_PROXY_USERNAME' => 'Kasutajanimi',
  'LBL_RESTORE_BUTTON_LABEL' => 'Taasta',
  'LBL_SYSTEM_SETTINGS' => 'Süsteemi sätted',
  'LBL_SKYPEOUT_ON' => 'Võimalda SkypeOut® integratsioon',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_USE_REAL_NAMES' => 'Näita täisnimesid',
  'LBL_USE_REAL_NAMES_DESC' => 'Kuva kasutajate täisnimed nende kasutajanimede asemel määrangute väljadel.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Loendivaade lehekülje kaupa',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Alampaneeli ühikud lehekülje kaupa',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Loendivaate ühikud lehe kaupa',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Alampaneeli ühikud lehe kaupa',
  'LOG_MEMORY_USAGE' => 'Logi mälu kasutamine',
  'CURRENT_LOGO' => 'Praegune logo:',
  'CURRENT_LOGO_HELP' => 'Seda logo kuvatakse Sugari rakenduse ülal vasakpoolses nurgas.',
  'NEW_LOGO' => 'Vali logo:',
  'NEW_LOGO_HELP' => 'Pildiformaat saab olla kas .png või .jpg.<br />Soovitatav suurus on 212x40 px.',
  'NEW_QUOTE_LOGO' => 'Lae üles uus pakkumiste logo',
  'NEW_QUOTE_LOGO_HELP' => 'Nõutav pildifaili formaat on .jpg.<br />Soovitatav suurus on 867x74 px.',
  'QUOTES_CURRENT_LOGO' => 'Pakkumiste logo',
  'UPLOAD_MAX_SIZE' => 'Maksimaalne üleslaadiminse suurus',
  'VERIFY_CLIENT_IP' => 'Kehtiv kasutaja IP aadress',
  'MAX_DASHLETS' => 'Maksimaalne Sugar Dashletite arv avalehel',
  'SYSTEM_NAME' => 'Süsteemi nimi:',
  'SYSTEM_NAME_WIZARD' => 'Nimi:',
  'SYSTEM_NAME_HELP' => 'See on nimi, mis kuvatakse sinu brauseri tiitelribal.',
  'LBL_OC_STATUS' => 'Offline kliendi olek',
  'DEFAULT_OC_STATUS' => 'Luba Offline Client vaikimisi',
  'SESSION_TIMEOUT_UNITS' => 'sekundeid',
  'LBL_LDAP_ENABLE' => 'Luba LDAP',
  'LBL_LDAP_ADMIN_USER' => 'Kasutajanimi:',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Salasõna:',
  'LBL_LDAP_AUTHENTICATION' => 'Autentimine:',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Automaatselt loodud kasutajad:',
  'LBL_LDAP_USER_DN' => 'Kasutaja DN:',
  'LBL_LDAP_GROUP_DN' => 'Grupi DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Näide: ou=groups,dc=example,dc=com',
  'LBL_LDAP_USER_FILTER' => 'Kasutaja filter:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Grupi liikmelisus:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Kasutajad peavad olema mõne grupi liikmed',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Kasutaja atribuut:',
  'LBL_LDAP_GROUP_ATTR' => 'Grupi atribuut:',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login atribuut:',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Näide: 389 või 636 SSL jaoks',
  'LBL_LDAP_GROUP_NAME' => 'Grupi nimi:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Näide cn=sugarcrm',
  'LBL_LDAP_USER_DN_DESC' => 'Näide: ou=people,dc=example,dc=com',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Kui audentitud kasutajat ei eksisteeri, siis üks luuakse Sugaris.',
  'LBL_LDAP_ENC_KEY_DESC' => 'SOAP autentimise jaoks, kui kasutatakse LDAP.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt laiendus peab olema sinu php.ini failis lubatud.',
  'LBL_ALL' => 'Kõik',
  'LBL_NEXT_' => 'Järgmine>>',
  'LBL_SEARCH' => 'Otsi:',
  'LBL_REG_EXP' => 'Reg. aegunud:',
  'LBL_DISPLAYING_LOG' => 'Logi kuvamine',
  'LBL_YOUR_PROCESS_ID' => 'Sinu protsessi ID',
  'LBL_YOUR_IP_ADDRESS' => 'Sinu IP aadress on',
  'LBL_IT_WILL_BE_IGNORED' => 'seda ignoreeritakse',
  'LBL_LOG_NOT_CHANGED' => 'Logi pole muutunud',
  'LBL_ALERT_JPG_IMAGE' => 'Pildi failiformaat peab olema JEPG. Lae üles uus fail koos faililaiendusega .jpg.',
  'LBL_ALERT_TYPE_IMAGE' => 'Kujutise failiformaat peab olema JPEG või PNG. Lae üles üks fail koos faililaiendusega .jpg või .png.',
  'ERR_ALERT_FILE_UPLOAD' => 'Viga kujutise üleslaadimisel',
  'LBL_LOGGER' => 'Loggeri sätted',
  'LBL_LOGGER_FILE_EXTENSION' => 'Laiendus',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimaalne logi suurus',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Vaikekuupäeva formaat',
  'LBL_LOGGER_LOG_LEVEL' => 'Logi tase',
  'LBL_LOGGER_MAX_LOGS' => 'Maksimum logide arv (enne rollimist)',
  'LBL_PDFMODULE_NAME' => 'PDF sätted',
  'SUGARPDF_BASIC_SETTINGS' => 'Dokumendi omadused',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Laiendatud sätted',
  'SUGARPDF_LOGO_SETTINGS' => 'Kujutised',
  'PDF_CREATOR' => 'PDF looja',
  'PDF_AUTHOR' => 'Autor',
  'PDF_AUTHOR_INFO' => 'Autorit kuvatakse dokumendi omadustes.',
  'PDF_HEADER_LOGO' => 'Pakkumiste PDF dokumentide jaoks',
  'PDF_HEADER_LOGO_INFO' => 'Seda kujutist kuvatakse vaikimisi PDF dokumentide pakkumistes.',
  'PDF_NEW_HEADER_LOGO' => 'Vali pakkumise jaoks uus kujutis',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Failiformaat võib olla kas jpg või .png. (Ainult .jpg EZPDF jaoks)<br />Soovitatav suurus on 867x74 px.',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Muuda üleslaetud kujutise skaalat, mida kuvatakse pakkumiste PDF dokumentides (TCPDF ainult)',
  'PDF_SMALL_HEADER_LOGO' => 'PDF dokumentide aruannete jaoks',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Seda kujutist kuvatakse vaikimisi aruannete PDF dokumentide päises.<br />Seda kujutst kuvatakse Sugaris ka ülal vasakpoolses nurgas',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Vali aruannete jaoks uus kujutis',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Failiformaat võib olla kas jpg või .png. (Ainult .jpg EZPDF jaoks)<br />Soovitatav suurus on 212x40 px.',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Muuda üleslaetud kujutise skaalat, mida kuvatakse pakkumiste PDF dokumentides (TCPDF ainult)',
  'PDF_HEADER_TITLE' => 'Päise pealkiri',
  'PDF_FILENAME' => 'Vaike faili nimi',
  'PDF_FILENAME_INFO' => 'Loodud PDF failide vaikimisi failinimi',
  'PDF_TITLE' => 'Tiitel',
  'PDF_TITLE_INFO' => 'Pealkiri ilmub dokumendi omadustes.',
  'PDF_SUBJECT' => 'Teema',
  'PDF_SUBJECT_INFO' => 'Teema kuvatakse dokumendi omadustes',
  'PDF_KEYWORDS' => 'Võtmesõna (d)',
  'PDF_COMPRESSION' => 'Kokkusurumine',
  'PDF_JPEG_QUALITY' => 'JPEG kvaliteet (1-100)',
  'PDF_PDF_VERSION' => 'PDF versioon',
  'PDF_PDF_VERSION_INFO' => 'Seadista PDF versioon (kontrolli PDF viidet kehtivate väärtuste osas)',
  'PDF_PROTECTION' => 'Dokumendi kaitse',
  'PDF_PROTECTION_INFO' => 'Seadista dokumendi kaitse<br />-kopeeri: kopeeri tekst ja pildid clipboardile<br />-prindi: prindi dokument<br />-muuda: muuda seda (välja arvatud vormid)<br />Märkus: muutmiskaitse on inimeste jaoks, kellel on täielik Acrobat toode.',
  'PDF_USER_PASSWORD' => 'Kasutaja parool',
  'PDF_USER_PASSWORD_INFO' => 'Kui sa ei seadista parooli, siis dokument on tavapäraselt avatav<br />Kui sa seadistad kasutaja parooli, siis PDF kuvamisel küsitakse enne avamist parooli.<br />Omaniku parooli, kui see e rineb kasutaja omast kasutatakse täieliku ligipääsu saamiseks.',
  'PDF_OWNER_PASSWORD' => 'Omanku parool',
  'PDF_OWNER_PASSWORD_INFO' => 'Kui sa ei seadista parooli, siis dokument on tavapäraselt avatav<br />Kui sa seadistad kasutaja parooli, siis PDF kuvamisel küsitakse enne avamist parooli.<br />Omaniku parooli, kui see e rineb kasutaja omast kasutatakse täieliku ligipääsu saamiseks.',
  'K_CELL_HEIGHT_RATIO_INFO' => 'If the height of a cell is smaller than (Font Height x Cell Height Ratio), then (Font Height x Cell Height Ratio) is used as the cell height.<br />(Font Height x Cell Height Ratio) is also used as the height of the cell when no height is define.',
  'LBL_FONT_LIST_NAME' => 'Nimi',
  'LBL_FONT_LIST_FILENAME' => 'Faili nimi',
  'LBL_FONT_LIST_TYPE' => 'Tüüp',
  'LBL_FONT_LIST_STYLE' => 'Stiil',
  'LBL_FONT_LIST_STYLE_INFO' => 'Fondi stiil',
  'LBL_FONT_LIST_FILESIZE' => 'Fondi suurus (KB)',
  'LBL_ADD_FONT' => 'Lisa font',
  'LBL_BACK' => 'Tagasi',
  'LBL_REMOVE' => 'eemalda',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Kas oled kindel, et soovid seda fonti eemaldada?',
  'LBL_ADDFONT_TITLE' => 'Lisa PDF font',
  'LBL_PDF_FONT_FILE' => 'Fondi fail',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf või .otf või .pfb fail',
  'LBL_PDF_METRIC_FILE' => 'Maatriks fail',
  'LBL_ADD_FONT_BUTTON' => 'Lisa',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'See fail ei oma samuti head faililaiendust.',
  'LBL_PDF_INSTRUCTIONS' => 'Instruktsioonid',
  'ERR_MISSING_CIDINFO' => 'CID info väli ei saa olla tühi',
  'LBL_STATUS_FONT_SUCCESS' => 'Korras: font on lisatud SugarCRM-i',
  'LBL_STATUS_FONT_ERROR' => 'Viga: Fonti ei lisatud. Vaata allolevat logi.',
  'ERR_LOADFONTFILE' => 'Viga: LoadFontFile viga!',
  'ERR_FONT_EMPTYFILE' => 'Viga: Tühi failinimi!',
  'ERR_FONT_UNKNOW_TYPE' => 'Viga: Tundmatu fonditüüp:',
  'ERR_FONT_NOT_WRITABLE' => 'pole kirjutatav.',
  'LBL_WIZARD_TITLE' => 'Admini viisard',
  'LBL_WIZARD_WELCOME_TAB' => 'Teretulemast',
  'LBL_WIZARD_WELCOME_TITLE' => 'Teretulemast Sugarisse!',
  'LBL_WIZARD_NEXT_BUTTON' => 'Järgmine >',
  'LBL_WIZARD_BACK_BUTTON' => '< Tagasi',
  'LBL_WIZARD_SKIP_BUTTON' => 'Jäta vahele',
  'LBL_WIZARD_FINISH_BUTTON' => 'Lõpeta',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Jätka',
  'LBL_WIZARD_FINISH_TAB' => 'Lõpeta',
);

