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
  'LBL_PROXY_PORT' => 'Port',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Core',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_LIST_TYPE' => 'Type',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
  'ADVANCED' => 'Avanceret',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217-valutakode',
  'DEFAULT_CURRENCY_NAME' => 'Valutanavn',
  'DEFAULT_CURRENCY_SYMBOL' => 'Valutasymbol',
  'DEFAULT_CURRENCY' => 'Standardvaluta',
  'DEFAULT_DATE_FORMAT' => 'Standarddatoformat',
  'DEFAULT_DECIMAL_SEP' => 'Decimaltegn',
  'DEFAULT_LANGUAGE' => 'Standardsprog',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Tusindtalsseparator',
  'DEFAULT_SYSTEM_SETTINGS' => 'Brugergrænseflade',
  'DEFAULT_THEME' => 'Standardtema',
  'DEFAULT_TIME_FORMAT' => 'Standardklokkeslætsformat',
  'DISPLAY_RESPONSE_TIME' => 'Vis serverens svartider',
  'IMAGES' => 'Logoer',
  'LBL_ADMIN_WIZARD' => 'Administrator guide',
  'LBL_ALLOW_USER_TABS' => 'Tillad, at brugere skjuler faner',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Systemindstillinger',
  'LBL_ENABLE_MAILMERGE' => 'Vil du aktivere brevfletning?',
  'LBL_LOGVIEW' => 'Konfigurer logindstillinger',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Vil du bruge SMTP-godkendelse?',
  'LBL_MAIL_SMTPPASS' => 'SMTP-adgangskode:',
  'LBL_MAIL_SMTPPORT' => 'SMTP-port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
  'LBL_MAIL_SMTPUSER' => 'SMTP-brugernavn:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP-server-type:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-server specifikation',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vælg din e-mail-udbyder:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail adgangskode:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail id:',
  'LBL_GMAIL_SMTPPASS' => 'Gmail adgangskode:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail e-mail-adresse:',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange adgangskode:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange brugernavn:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange serverport:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange server:',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillad at brugerne bruger denne konto til udgående e-mail:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Når denne indstilling er valgt, kan alle brugere sende e-mails ved hjælp af den samme udgående <br>e-mail-konto, som bruges til at sende systemmeddelelser og -beskeder. Hvis indstillingen ikke er valgt,<br> kan brugerne stadig bruge den udgående e-mail-server, når de har angivet deres kontooplysninger.',
  'LBL_MAILMERGE_DESC' => 'Dette flag skal kun markeres, hvis du har Sugar Plug-in til Microsoft® Word®.',
  'LBL_MAILMERGE' => 'Brevfletning',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh interval',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Dette er den mindste værdi, man kan vælge til dashlets auto-refresh. Indstilling til \'Aldrig\' deaktiverer auto-refresh af Dashlets helt.',
  'LBL_MODULE_FAVICON' => 'Vis modulikon som favoritikon',
  'LBL_MODULE_FAVICON_HELP' => 'Hvis du er i et modul, der har et ikon, kan du bruge modulets ikon som favoritikon på browserfanen i stedet for temaets favoritikon.',
  'LBL_MODULE_NAME' => 'Systemindstillinger',
  'LBL_MODULE_ID' => 'Konfigurator',
  'LBL_MODULE_TITLE' => 'Brugergrænseflade',
  'LBL_NOTIFY_FROMADDRESS' => 'Fra adresse:',
  'LBL_NOTIFY_SUBJECT' => 'E-mail-emne:',
  'LBL_PORTAL_ON_DESC' => 'Tillad, at brugerne administrerer oplysninger om portalbrugere i kontaktposter. Portalbrugere kan få adgang til Sager, Fejl, Knowledge Base-artikler og andre data via Sugar Portal-programmet.',
  'LBL_PORTAL_ON' => 'Aktivér Administration af portalbrugere',
  'LBL_PORTAL_TITLE' => 'Selvbetjeningsportal for kunder',
  'LBL_PROXY_AUTH' => 'Godkendelse?',
  'LBL_PROXY_HOST' => 'Proxyvært',
  'LBL_PROXY_ON_DESC' => 'Konfigurer indstillinger for proxyserveradresse og godkendelse',
  'LBL_PROXY_ON' => 'Vil du bruge proxyserver?',
  'LBL_PROXY_PASSWORD' => 'Adgangskode',
  'LBL_PROXY_TITLE' => 'Proxyindstillinger',
  'LBL_PROXY_USERNAME' => 'Brugernavn',
  'LBL_RESTORE_BUTTON_LABEL' => 'Gendan',
  'LBL_SYSTEM_SETTINGS' => 'Systemindstillinger',
  'LBL_SKYPEOUT_ON_DESC' => '"Giv brugerne mulighed for at klikke på telefonnumre for at ringe op via SkypeOut®. Numrene skal formateres korrekt, for at du kan bruge denne funktion. Det vil sige ""+"" ""landekoden"" ""nummeret"", f.eks. +1 "555" 555-1234. Du kan finde flere oplysninger på Skype FAQ på <a href=""http://www.skype.com/help/faq/skypeout.html#calling"" target=""skype"">skype® faq</a>"',
  'LBL_SKYPEOUT_ON' => 'Vil du aktivere SkypeOut®-integration?',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_USE_REAL_NAMES' => 'Vis fulde navn',
  'LBL_USE_REAL_NAMES_DESC' => 'Vis en brugerens fulde navn i stedet for brugernavnet.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Listevisningsposter pr. side',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Underpanelposter pr. side',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Listevisningsposter pr. side "mobil"',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Underpanelposter pr. side "mobil"',
  'LOG_MEMORY_USAGE' => 'Logfør hukommelsesbrug',
  'LOG_SLOW_QUERIES' => 'Logfør langsomme forespørgsler',
  'LOCK_HOMEPAGE_HELP' => 'Brug denne indstilling til at forhindre, at <BR> 1" nye startsider og dashlets tilføjes i modulet Startside, <BR>2" placeringen af en dashlet på startsiderne tilpasses ved at trække og slippe.',
  'CURRENT_LOGO' => 'Aktuelt logo',
  'CURRENT_LOGO_HELP' => 'Dette logo vises i øverste venstre hjørne af Sugar-programmet.',
  'NEW_LOGO' => 'Vælg nyt logo',
  'NEW_LOGO_HELP' => 'Billedfilformatet kan enten være .png eller .jpg.<BR>Den anbefalede størrelse er 212x40 px.',
  'NEW_QUOTE_LOGO' => 'Upload nyt tilbudslogo',
  'NEW_QUOTE_LOGO_HELP' => 'Det obligatoriske billedfilformat er .jpg.<BR>Den anbefalede størrelse er 867x74 px.',
  'QUOTES_CURRENT_LOGO' => 'Tilbudslogo',
  'SLOW_QUERY_TIME_MSEC' => 'Tidsgrænse for langsomme forespørgsler "msek."',
  'STACK_TRACE_ERRORS' => 'Vis staksporing af fejl',
  'UPLOAD_MAX_SIZE' => 'Maksimal uploadstørrelse',
  'VERIFY_CLIENT_IP' => 'Valider brugerens IP-adresse',
  'LOCK_HOMEPAGE' => 'Forhindre brugerdefinerbart startsidelayout',
  'LOCK_SUBPANELS' => 'Forhindre brugerdefinerbart underpanellayout',
  'MAX_DASHLETS' => 'Maksimumantal Sugar-dashlets på startsiden',
  'SYSTEM_NAME' => 'Systemnavn',
  'SYSTEM_NAME_WIZARD' => 'Navn:',
  'SYSTEM_NAME_HELP' => 'Dette er navnet som vises i titelbaren i din browser.',
  'LBL_OC_STATUS' => 'Status for standardofflineklient',
  'DEFAULT_OC_STATUS' => 'Aktivér offlineklient som standard',
  'LBL_OC_STATUS_DESC' => 'Markér dette felt, hvis alle brugere skal have adgang til offlineklienten. Ellers kan du konfigurere adgang på brugerniveau.',
  'SESSION_TIMEOUT' => 'Timeout for portalsession',
  'SESSION_TIMEOUT_UNITS' => 'sekunder',
  'LBL_LDAP_TITLE' => 'Understøttelse af LDAP-godkendelse',
  'LBL_LDAP_ENABLE' => 'Aktivér LDAP',
  'LBL_LDAP_SERVER_PORT' => 'Portnummer:',
  'LBL_LDAP_ADMIN_USER' => 'Brugernavn:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Bruges til at søge efter Sugar-brugeren. [Skal måske være fuldt kvalificeret] Det forbindes anonymt, hvis det ikke er angivet.',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Adgangskode:',
  'LBL_LDAP_AUTHENTICATION' => 'Godkendelse:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Forbind til LDAP-serveren ved hjælp af specifikke brugerlegitimationsoplysninger',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Opret brugere automatisk:',
  'LBL_LDAP_USER_DN' => 'Bruger-DN:',
  'LBL_LDAP_GROUP_DN' => 'Gruppe-DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Eksempel: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_USER_FILTER' => 'Brugerfilter:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppemedlemskab:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Brugerne skal være medlem af en specifik gruppe',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Brugerattribut:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Personens entydige id, der skal bruges til at kontrollere, om personen er medlem af gruppen. Eksempel: <em>uid</em>',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Gruppens attribut, der skal bruges til at filtrere mod brugerattributeksemplet: <em>memberUid</em>',
  'LBL_LDAP_GROUP_ATTR' => 'Gruppeattribut:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Eventuelle yderligere filterparametre, der skal anvendes til godkendelse af brugere, f.eks. <em>is_sugar_user=1 eller "is_sugar_user=1""is_sales=1"</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Log på attribut:',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Forbind attribut:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Du kan forbinde LDAP-brugereksemplerne her:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> userPrincipalName] [<b>Mac OS X:</b> uid]',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Du kan søge efter LDAP-brugereksemplerne her:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> dn] [<b>Mac OS X:</b> dn]',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Eksempel: ldap.example.com eller ldaps://ldap.example.com for SSL',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Eksempel: <em>389 eller 636 for SSL</em>',
  'LBL_LDAP_GROUP_NAME' => 'Gruppenavn:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Eksempel <em>cn=sugarcrm</em>',
  'LBL_LDAP_USER_DN_DESC' => 'Eksempel: <em>ou=people,dc=example,dc=com</eM>',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Hvis der ikke findes en godkendt bruger, oprettes der én i Sugar.',
  'LBL_LDAP_ENC_KEY' => 'Krypteringsnøgle:',
  'DEVELOPER_MODE' => 'Udviklertilstand',
  'SHOW_DOWNLOADS_TAB' => 'Vis downloadsfane',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Når det er valgt, vil downloadfanen vises i brugerindstillinger, og give brugerne adgang til Sugar plug-ins og andre tilgængelige filer',
  'LBL_LDAP_ENC_KEY_DESC' => 'Til SOAP-godkendelse, når du bruger LDAP.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Udvidelsen php_mcrypt skal være aktiveret i filen php.ini.',
  'LBL_ALL' => 'Alle',
  'LBL_MARK_POINT' => 'Markér point',
  'LBL_NEXT_' => 'Næste>>',
  'LBL_REFRESH_FROM_MARK' => 'Opdater fra markering',
  'LBL_SEARCH' => 'Søg:',
  'LBL_REG_EXP' => 'Reg. eksp.:',
  'LBL_IGNORE_SELF' => 'Ignorer selv:',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Markerer, hvor logføring skal starte',
  'LBL_DISPLAYING_LOG' => 'Viser logfil',
  'LBL_YOUR_PROCESS_ID' => 'Dit proces-id',
  'LBL_YOUR_IP_ADDRESS' => 'Din IP-adresse er',
  'LBL_IT_WILL_BE_IGNORED' => 'Den bliver ignoreret',
  'LBL_LOG_NOT_CHANGED' => 'Logfilen er ikke ændret',
  'LBL_ALERT_JPG_IMAGE' => 'Billedfilformatet skal være JPEG. Upload en ny fil med filtypenavnet .jpg.',
  'LBL_ALERT_TYPE_IMAGE' => 'Billedfilformatet skal være JPEG eller PNG. Upload en ny fil med filtypenavnet .jpg eller .png.',
  'LBL_ALERT_SIZE_RATIO' => 'Højde-bredde-forholdet på billedet skal være mellem 1:1 og 10:1. Størrelsen på billedet tilpasses.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Højde-bredde-forholdet på billedet skal være mellem 3:1 og 20:1. Upload en ny fil med dette højde-bredde-forhold.',
  'ERR_ALERT_FILE_UPLOAD' => 'Fejl under upload af billedet.',
  'LBL_LOGGER' => 'Logføringsindstillinger',
  'LBL_LOGGER_FILENAME' => 'Logfilnavn',
  'LBL_LOGGER_FILE_EXTENSION' => 'Filtype',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maksimal logstørrelse',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standarddatoformat',
  'LBL_LOGGER_LOG_LEVEL' => 'Logføringsniveau',
  'LBL_LOGGER_MAX_LOGS' => 'Maksimalt antal logfiler "før rulning"',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Tilknyt efter filnavn',
  'LBL_VCAL_PERIOD' => 'vCal opdaterer tidsperiode:',
  'vCAL_HELP' => '"Brug denne indstilling til at bestemme, hvor mange måneder før den aktuelle dato oplysninger om ledig/optaget i forbindelse med opkald og møder udgives.<BR>Du kan slå udgivelse af ledig/optaget fra ved at angive ""0"". Minimum er 1 måned. Maksimum er 12 måneder."',
  'LBL_PDFMODULE_NAME' => 'PDF-indstillinger',
  'SUGARPDF_BASIC_SETTINGS' => 'Dokumentegenskaber',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Avancerede indstillinger',
  'SUGARPDF_LOGO_SETTINGS' => 'Billeder',
  'PDF_CREATOR' => 'PDF-opretter:',
  'PDF_CREATOR_INFO' => 'Definerer opretteren af dokumentet. <br>Dette er typisk navnet på det program, der genererer PDF\'en.',
  'PDF_AUTHOR' => 'Forfatter',
  'PDF_AUTHOR_INFO' => 'Forfatteren vises i dokumentegenskaberne.',
  'PDF_HEADER_LOGO' => 'PDF-dokumenter til tilbud',
  'PDF_HEADER_LOGO_INFO' => 'Dette billede vises i standardhovedet i PDF-dokumenter til tilbud.',
  'PDF_NEW_HEADER_LOGO' => 'Vælg et nyt billede til tilbud',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Filformatet kan enten være .jpg eller .png. "kun .jpg til EZPDF"<BR>Den anbefalede størrelse er 867x74 px.',
  'PDF_HEADER_LOGO_WIDTH' => 'Billedbredde til tilbud',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Skift skaleringen af det uploadede billede, der vises i PDF-dokumenter til tilbud. "kun TCPDF"',
  'PDF_SMALL_HEADER_LOGO' => 'PDF-dokumenter til rapporter',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Dette billede vises i standardhovedet i PDF-dokumenter til rapporter.<br> Dette billede vises også i øverste venstre hjørne af Sugar-programmet.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Vælg et nyt billede til rapporter',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Filformatet kan enten være .jpg eller .png. "kun .jpg til EZPDF"<BR>Den anbefalede størrelse er 212x40 px.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Billedbredde til rapporter',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Skift skaleringen af det uploadede billede, der vises i PDF-dokumenter til rapporter. "kun TCPDF"',
  'PDF_HEADER_STRING' => 'Dokumenthovedstreng',
  'PDF_HEADER_STRING_INFO' => 'Streng til beskrivelse af dokumenthoved',
  'PDF_HEADER_TITLE' => 'Dokumenthovedtitel',
  'PDF_HEADER_TITLE_INFO' => 'Streng til udskrivning som titel på dokumenthoved',
  'PDF_FILENAME' => 'Standardfilnavn',
  'PDF_FILENAME_INFO' => 'Standardfilnavn til de genererede PDF-filer',
  'PDF_TITLE' => 'Titel',
  'PDF_TITLE_INFO' => 'Titlen vises i dokumentegenskaberne.',
  'PDF_SUBJECT' => 'Emne',
  'PDF_SUBJECT_INFO' => 'Emnet vises i dokumentegenskaberne.',
  'PDF_KEYWORDS' => 'Nøgleord',
  'PDF_KEYWORDS_INFO' => '"Knyt nøgleord til dokumentet, normalt med formen ""nøgleord1 nøgleord2..."""',
  'PDF_COMPRESSION' => 'Komprimering',
  'PDF_COMPRESSION_INFO' => 'Aktiverer eller deaktiverer sidekomprimering. <br>Når dette felt er aktiveret, komprimeres den interne visning af hver side, hvilket giver en komprimeringsgrad på cirka 2 af det oprettede dokument.',
  'PDF_JPEG_QUALITY' => 'JPEG-kvalitet "1-100"',
  'PDF_JPEG_QUALITY_INFO' => 'Angiv JPEG-komprimeringskvaliteten "1-100" som standard',
  'PDF_PDF_VERSION' => 'PDF-version',
  'PDF_PDF_VERSION_INFO' => 'Angiv PDF-versionen "kontrollér PDF-reference for gyldige værdier".',
  'PDF_PROTECTION' => 'Dokumentbeskyttelse',
  'PDF_PROTECTION_INFO' => 'Angiv dokumentbeskyttelse<br>- kopiér: kopiér tekst og billeder til Udklipsholder<br>- udskriv: udskriv dokumentet<br>- rediger: rediger det "bortset fra anmærkninger og formularer"<br>- anmærkninger og formularer: tilføj anmærkninger og formularer<br>Bemærk! Beskyttelsen mod ændringer er beregnet til brugere, der har det fulde Acrobat-produkt.',
  'PDF_USER_PASSWORD' => 'Brugeradgangskode',
  'PDF_USER_PASSWORD_INFO' => 'Hvis du ikke angiver en adgangskode, åbnes dokumentet som sædvanlig. <br>Hvis du angiver en brugeradgangskode, beder PDF-fremviseren om den, før dokumentet vises. <br>Masteradgangskoden kan bruges til at opnå fuld adgang, hvis den adskiller sig fra brugeradgangskoden.',
  'PDF_OWNER_PASSWORD' => 'Ejeradgangskode',
  'PDF_OWNER_PASSWORD_INFO' => 'Hvis du ikke angiver en adgangskode, åbnes dokumentet som sædvanlig. <br>Hvis du angiver en brugeradgangskode, beder PDF-fremviseren om den, før dokumentet vises. <br>Masteradgangskoden kan bruges til at opnå fuld adgang, hvis den adskiller sig fra brugeradgangskoden.',
  'PDF_ACL_ACCESS' => 'Adgangskontrol',
  'PDF_ACL_ACCESS_INFO' => 'Standardadgangskontrol til PDF-generering.',
  'K_CELL_HEIGHT_RATIO' => 'Cellehøjdeforhold',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Hvis højden på en celle er mindre end "Skrifthøjde x Cellehøjdeforhold", bruges "Skrifthøjde x Cellehøjdeforhold" som cellehøjde.<br>"Skrifthøjde x Cellehøjdeforhold" bruges også som højde på cellen, når der ikke er defineret en højde.',
  'K_TITLE_MAGNIFICATION' => 'Titelforstørrelse',
  'K_TITLE_MAGNIFICATION_INFO' => 'Titelforstørrelse respekterer hovedskrifttypens størrelse.',
  'K_SMALL_RATIO' => 'Lille skrifttype-faktor',
  'K_SMALL_RATIO_INFO' => 'Reduktionsfaktor til lille skrifttype.',
  'HEAD_MAGNIFICATION' => 'Dokumenthovedforstørrelse',
  'HEAD_MAGNIFICATION_INFO' => 'Forstørrelsesfaktor til titler.',
  'PDF_IMAGE_SCALE_RATIO' => 'Billedskaleringsforhold',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Forhold, der bruges til at skalere billederne',
  'PDF_UNIT' => 'Enhed',
  'PDF_UNIT_INFO' => 'dokumentets måleenhed',
  'PDF_GD_WARNING' => 'Du har ikke GD-biblioteket installeret til PHP. Hvis GD-biblioteket ikke er installeret, kan kun JPEG-logoer vises i PDF-dokumenter.',
  'ERR_EZPDF_DISABLE' => '"Advarsel: EZPDF-klassen er deaktiveret i config-tabellen, og den er angivet som PDF-klasse. ""Gem"" denne formular for at angive TCPDF som PDF-klasse, og vend tilbage i stabil tilstand."',
  'LBL_IMG_RESIZED' => '"tilpasset til visning"',
  'LBL_FONTMANAGER_BUTTON' => 'PDF-skrifttypestyring',
  'LBL_FONTMANAGER_TITLE' => 'PDF-skrifttypestyring',
  'LBL_FONT_BOLD' => 'Fed',
  'LBL_FONT_ITALIC' => 'Kursiv',
  'LBL_FONT_BOLDITALIC' => 'Fed/kursiv',
  'LBL_FONT_REGULAR' => 'Normal',
  'LBL_FONT_LIST_NAME' => 'Navn',
  'LBL_FONT_LIST_FILENAME' => 'Filnavn',
  'LBL_FONT_LIST_STYLE' => 'Typografi',
  'LBL_FONT_LIST_STYLE_INFO' => 'Skrifttypetypografi',
  'LBL_FONT_LIST_ENC' => 'Kodning',
  'LBL_FONT_LIST_EMBEDDED' => 'Integreret',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Markér dette felt for at integrere skrifttypen i PDF-filen',
  'LBL_FONT_LIST_CIDINFO' => 'CID-oplysninger',
  'LBL_FONT_LIST_CIDINFO_INFO' => '"Eksempler:<ul><li>Kinesisk, traditionelt:<br><pre>$enc=\'UniCNS-UTF16-H\';<br>$cidinfo=array"\'Registry\'=>\'Adobe\', \'Ordering\'=>\'CNS1\',\'Supplement\'=>0";<br>include"\'include/tcpdf/fonts/uni2cid_ac15.php\'";</pre></li><li>Kinesisk, forenklet:<br><pre>$enc=\'UniGB-UTF16-H\';<br>$cidinfo=array"\'Registry\'=>\'Adobe\', \'Ordering\'=>\'GB1\',\'Supplement\'=>2";<br>include"\'include/tcpdf/fonts/uni2cid_ag15.php\'";</pre></li><li>Koreansk:<br><pre>$enc=\'UniKS-UTF16-H\';<br>$cidinfo=array"\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Korea1\',\'Supplement\'=>0";<br>include"\'include/tcpdf/fonts/uni2cid_ak12.php\'";</pre></li><li>Japansk:<br><pre>$enc=\'UniJIS-UTF16-H\';<br>$cidinfo=array"\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Japan1\',\'Supplement\'=>5";<br>include"\'include/tcpdf/fonts/uni2cid_aj16.php\'";</pre></li></ul>Mere hjælp: www.tcpdf.org"',
  'LBL_FONT_LIST_FILESIZE' => 'Skriftstørrelse "KB"',
  'LBL_ADD_FONT' => 'Tilføj en skrifttype',
  'LBL_BACK' => 'Tilbage',
  'LBL_REMOVE' => 'fjern',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Er du sikker på, at du vil slette denne skrifttype?',
  'LBL_ADDFONT_TITLE' => 'Tilføj en PDF-skrifttype',
  'LBL_PDF_PATCH' => 'Programrettelse',
  'LBL_PDF_PATCH_INFO' => '"Brugerdefineret redigering af kodningen. Skriv en PHP-matrix.<br>Eksempel:<br>ISO-8859-1 indeholder ikke eurosymbolet. Hvis du vil tilføje det på position 164, skal du skrive ""array"164=>\'Euro\'"""."',
  'LBL_PDF_ENCODING_TABLE' => 'Kodningstabel',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Navn på kodningstabellen.<br>Denne indstilling ignoreres ved TrueType Unicode, OpenType Unicode og symbolske skrifttyper.<br>Kodningen definerer tilknytningen mellem en kode "fra 0 til 255" og et tegn i skrifttypen.<br>De første 128 er faste og svarer til ASCII.',
  'LBL_PDF_FONT_FILE' => 'Skrifttypefil',
  'LBL_PDF_FONT_FILE_INFO' => 'filen .ttf, .otf eller .pfb',
  'LBL_PDF_METRIC_FILE' => 'Metrisk fil',
  'LBL_PDF_METRIC_FILE_INFO' => 'filen .afm eller .ufm',
  'LBL_ADD_FONT_BUTTON' => 'Tilføj',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Denne fil har ikke en gyldig filtype.',
  'LBL_PDF_INSTRUCTIONS' => 'Vejledning',
  'PDF_INSTRUCTIONS_ADD_FONT' => '"Skrifttyper understøttet af SugarPDF: <ul> <li>TrueTypeUnicode "UTF-8 Unicode"</li> <li>OpenTypeUnicode</li> <li>TrueType</li> <li>OpenType</li> <li>Type1</li> <li>CID-0</li> </ul> <br> Hvis du vælger ikke at integrere din skrifttype i PDF\'en, fylder den genererede PDF-fil mindre, en erstatning bruges, hvis skrifttypen ikke er tilgængelig på læserens system. <br><br> Når du tilføjer en PDF-skrifttype i SugarCRM, skal du følge trin 1 og 2 i dokumentationen til TCPDF-skrifttyper, som findes i afsnittet ""DOCS"" på <a href=""http://www.tcpdf.org"" target=""_blank"">TCPDF-webstedet</a>. <br><br>Funktionerne pfm2afm og ttf2ufm findes i fonts/utils i den TCPDF-pakke, du kan downloade i afsnittet ""DOWNLOAD"" på <a href=""http://www.tcpdf.org"" target=""_blank"">TCPDF-webstedet</a>. <br><br>Indlæs den metriske fil, der genereres i trin 2, og skrifttypefilen nedenfor."',
  'ERR_MISSING_CIDINFO' => 'Feltet CID-oplysninger må ikke være tomt.',
  'LBL_ADDFONTRESULT_TITLE' => 'Resultat af processen Tilføj skrifttype',
  'LBL_STATUS_FONT_SUCCESS' => 'HANDLINGEN LYKKEDES: Skrifttypen blev tilføjet i SugarCRM.',
  'LBL_STATUS_FONT_ERROR' => 'FEJL: Skrifttypen blev ikke tilføjet. Kig på logfilen nedenfor.',
  'LBL_FONT_MOVE_DEFFILE' => 'Flyt skrifttypedefinitionsfilen til:',
  'LBL_FONT_MOVE_FILE' => 'Flyt skrifttypefilen til:',
  'ERR_LOADFONTFILE' => 'FEJL: Fejl under LoadFontFile!',
  'ERR_FONT_EMPTYFILE' => 'FEJL: Filnavnet er tomt!',
  'ERR_FONT_UNKNOW_TYPE' => 'FEJL: Ukendt skrifttype:',
  'ERR_DELETE_CORE_FILE' => 'FEJL: Det er ikke muligt at slette en kerneskrifttype.',
  'ERR_NO_FONT_PATH' => 'FEJL: Der er ingen tilgængelig skrifttypesti!',
  'ERR_NO_CUSTOM_FONT_PATH' => 'FEJL: Der er ingen brugerdefineret tilgængelig skrifttypesti!',
  'ERR_FONT_NOT_WRITABLE' => 'er ikke skrivbar.',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'findes ikke eller er ikke en mappe.',
  'ERR_FONT_MAKEFONT' => 'FEJL: Fejl under MakeFont',
  'ERR_FONT_ALREADY_EXIST' => 'FEJL: Denne skrifttype findes allerede. Annuller...',
  'ERR_PDF_NO_UPLOAD' => 'Fejl under upload af skrifttypefilen eller den metriske fil.',
  'LBL_WIZARD_TITLE' => 'Administrator guide',
  'LBL_WIZARD_WELCOME_TAB' => 'Velkommen',
  'LBL_WIZARD_WELCOME_TITLE' => 'Velkommen til Sugar!',
  'LBL_WIZARD_WELCOME' => 'Tryk Næste for at brande, lokalisere og konfigurere Sugar nu. Hvis du ønsker at konfigurere Sugar senere, tryk Spring over',
  'LBL_WIZARD_NEXT_BUTTON' => 'Næste >',
  'LBL_WIZARD_BACK_BUTTON' => '< Tilbage',
  'LBL_WIZARD_SKIP_BUTTON' => 'Spring over',
  'LBL_WIZARD_FINISH_BUTTON' => 'Udfør',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortsæt',
  'LBL_WIZARD_FINISH_TAB' => 'Udfør',
  'LBL_WIZARD_FINISH_TITLE' => 'Basis system konfiguration er udført.',
  'LBL_WIZARD_FINISH' => 'For at konfigurere ekstra systemindstillinger klik <a href="index.php?module=Administration&action=index" target="_blank">her</a>.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Opgiv dit firmanavn og logo med henblik på at brande din Sugar.',
  'LBL_WIZARD_LOCALE_DESC' => 'Angive hvordan du gerne vil have data i Sugar til at blive vist baseret på din geografiske placering. De indstillinger, du giver her, vil være standard-indstillingerne. Brugerne vil være i stand til at sætte deres egne præferencer.',
  'LBL_WIZARD_SMTP_DESC' => 'Angiv e-mail-kontoen som vil blive brugt til at sende e-mails såsom opgavepåmindelser og nye brugeradgangskoder. Brugerne vil modtage e-mails fra Sugar, sendt fra den angivne e-mail-konto.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Rapportmodulet er kun tilfængeligt for Sugar Mobile iPhone klienten.',
);

