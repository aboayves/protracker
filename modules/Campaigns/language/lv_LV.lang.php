<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'ERR_FIX_MESSAGES' => 'Lūdzu, izlabojiet šīs kļūdas, pirms turpināt tālākas darbības',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Tikai veseli skaitļi atļauti,  norādot e-pastu skaitu vienā sūtīšanas reizē',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Šim mērķu sarakstam ir definēti vairāki e-pasta mārketinga ziņojumi',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Šim mērķu sarakstam nav atrasti e-pasta mārketinga ziņojumi',
  'ERR_NO_EMAIL_MARKETING' => 'Jābūt vismaz vienam aktīvam e-pasta marketinga ziņojumam, saistībā ar šo kampaņu.',
  'ERR_NO_MAILBOX' => 'Sekojošiem mārketinga ziņojumiem nav piesaistīts pasta konts.<BR>Lūdzu, izlabojiet to, pirms turpināt.',
  'ERR_NO_OPTS_SAVED' => 'Ienākošo e-pastu konti nav saglabāti ar optimāliem iestatījumiem.',
  'ERR_NO_TARGET_LISTS' => 'Jābūt vismaz vienam Mērķu sarakstam, kas ir piesaistīts šai kampaņai.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Jābūt vismaz vienam Mērķu sarakstam ar tipu &#39;Tests&#39;, kas piesaistīts šai kampaņai.',
  'ERR_REVIEW_EMAIL_SETTINGS' => 'Pārbaudiet ienākošo e-pastu iestatījumus.',
  'ERR_SENDING_NOW' => 'Tiek sūtītas ziņas, lūdzu mēģiniet atkārtot šo darbību vēlāk.',
  'LBL_ACCOUNTS' => 'Uzņēmumi',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Uzņēmumi',
  'LBL_ADD_TARGET' => 'Pievienot',
  'LBL_ADD_TRACKER' => 'Izveidot sekotāju',
  'LBL_ALERT' => 'Brīdinājums',
  'LBL_ALL_PROSPECT_LISTS' => 'Visi kampaņas Mērķu saraksti.',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Abonētie biļeteni',
  'LBL_AMOUNT_IN' => 'Daudzums',
  'LBL_ASSIGNED_TO' => 'Piešķirts lietotājam:',
  'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam:',
  'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam:',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Pieejamie lauki',
  'LBL_BACK_TO_CAMPAIGNS' => 'Atpakaļ pie kampaņām',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Bloķēts',
  'LBL_CAMPAIGN' => 'Kampaņa:',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Uzņēmumi',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Faktiskās izmaksas:',
  'LBL_CAMPAIGN_BUDGET' => 'Budžets:',
  'LBL_CAMPAIGN_CONTENT' => 'Apraksts:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Viena klikšķa izmaksas:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Metiena izmaksas:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Atlikušās dienas',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Kampaņas diagnostika',
  'LBL_CAMPAIGN_END_DATE' => 'Beigu datums:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Paredzamās izmaksas:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Paredzamie ieņēmumi:',
  'LBL_CAMPAIGN_FREQUENCY' => 'Biežums',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Metieni:',
  'LBL_CAMPAIGN_INFORMATION' => 'Apraksts',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Interesenti',
  'LBL_CAMPAIGN_NAME' => 'Nosaukums:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Atlasīt un piesaisti kampaņu:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Mērķis:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Iegūtās iespējas:',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Kampaņas atbilde pēc saņēmēja darbības',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Kampaņas ieguldījumu atdeve',
  'LBL_CAMPAIGN_START_DATE' => 'Sākuma datums:',
  'LBL_CAMPAIGN_STATUS' => 'Statuss:',
  'LBL_CAMPAIGN_TYPE' => 'Tips:',
  'LBL_CAMPAIGN_WIZARD' => 'Kampaņu vednis',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Rediģēt kampaņu:',
  'LBL_CAMP_MESSAGE_COPY' => 'Saglabāt kampaņas ziņu kopijas:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Vai vēlaties saglabāt pilnu kopiju KATRAM e-pasta ziņojumam, kas nosūtīts kampaņas laikā?  Ieteicams un pēc noklusējuma ir uzstādīts Nē.. Izvēloties Nē tiek saglabāta e-pasta sagatave un mainīgo vērtības ka vajadzīgas, lai sagatavotu e-pastu.',
  'LBL_CHARSET_NOTICE' => 'PIEZĪME: Pārliecinies, ka lapa, kura satur web-to-lead formu satur sekojošas rindas &lt;head&gt; daļā:',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Kampaņas tips',
  'LBL_CHOOSE_NEXT_STEP' => 'Norādiet nākamo soli',
  'LBL_CONFIRM' => 'Sākt',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Saglabāt izmaiņas un turpināt ar mārketinga e-pastiem',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Vai vēlaties saglabāt informāciju un iziet?',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Saglabāt iespējas',
  'LBL_CONFIRM_SEND_SAVE' => 'Jūs mēģināt atstāt un doties uz Kampaņas e-pastu sūtīšanas lapu . Vai saglabāt un turpināt?',
  'LBL_CONTACTS' => 'Kontaktpersonas',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontaktpersonas',
  'LBL_COPY_AND_PASTE_CODE' => 'Vai kopē un ielīmē html zemāk esošā lapā',
  'LBL_COPY_OF' => 'Kopija no',
  'LBL_CREATED' => 'Izveidoja:',
  'LBL_CREATED_BY' => 'Izveidoja:',
  'LBL_CREATED_USER' => 'Izveidoja',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Izveidot',
  'LBL_CREATE_MAILBOX' => 'Izveidot jaunu pasta kontu',
  'LBL_CREATE_NEWSLETTER' => 'Izveidot biļetenu',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Izveidot jaunu mārketinga e-pastu',
  'LBL_CREATE_TARGET' => 'Izveidot',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'Izveidot web-to-lead formu',
  'LBL_CURRENCY' => 'Valūta:',
  'LBL_CURRENCY_ID' => 'Valūtas ID',
  'LBL_CUSTOM_LOCATION' => 'Lietotāja definēta',
  'LBL_DATE_CREATED' => 'Izveidošanas datums:',
  'LBL_DATE_ENTERED' => 'Izveidots',
  'LBL_DATE_LAST_MODIFIED' => 'Modificēts:',
  'LBL_DATE_MODIFIED' => 'Modificēts',
  'LBL_DATE_START' => 'Sākuma datums',
  'LBL_DAY' => 'Diena',
  'LBL_DEFAULT' => 'Visi mērķu sarakstu',
  'LBL_DEFAULT_FROM_ADDR' => 'Noklusēts:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Apstiprināt',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Nav atrasts neviens ieraksts',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Ieraksti tika apstrādāti',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Noklusētā tipa Mērķu saraksti netika atrasti',
  'LBL_DEFAULT_LOCATION' => 'Noklusētā',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mārketings',
  'LBL_DEFINE_LEAD_HEADER' => 'Formas Galvene:',
  'LBL_DEFINE_LEAD_POST_URL' => 'Post URL:',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Redirect URL:',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Apstiprināšanas pogas iezīme:',
  'LBL_DELETE' => 'Noņemt',
  'LBL_DELETE_INLINE' => 'Dzēst',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Formas apraksts:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Apstiprinot šo formu, tiks izveidots interesents un saite ar kampaņu',
  'LBL_DIAGNOSTIC' => 'Diagnostika',
  'LBL_DIAGNOSTIC_WIZARD' => 'Aplūkot diagnostikas',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Lūdzu lejuplādējiet savu Web To Lead formu',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Web to Lead forma',
  'LBL_DRAG_DROP_COLUMNS' => 'Vilkt un nomest interesentu laukus kolonnā 1 & 2',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Rediģēt',
  'LBL_EDIT_EXISTING' => 'Rediģēt kampaņu',
  'LBL_EDIT_INLINE' => 'Rediģēt',
  'LBL_EDIT_LAYOUT' => 'Rediģēt izkārtojumu',
  'LBL_EDIT_LEAD_POST_URL' => 'Vai vēlaties rediģēt Post URL?',
  'LBL_EDIT_OPT_OUT' => 'Neizmantota saite:',
  'LBL_EDIT_OPT_OUT_' => 'Vai saite netiek lietota?',
  'LBL_EDIT_TARGET_LIST' => 'Rediģēt mērķu sarakstu',
  'LBL_EDIT_TRACKER_NAME' => 'Sekotāja nosaukums:',
  'LBL_EDIT_TRACKER_URL' => 'Sekošanas URL:',
  'LBL_ELECTED_TO_OPTOUT' => 'Esat izvēlējies atteikties no e-pastu saņemšanas.',
  'LBL_EMAIL' => 'E-pasts',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'E-pasta mārketings',
  'LBL_EMAILS_PER_RUN' => 'Vienā reizē sūtāmo e-pastu skaits:',
  'LBL_EMAILS_SCHEDULED' => 'E-pasti ieplānoti',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'E-pasta kampaņas',
  'LBL_EMAIL_COMPONENTS' => 'E-pasta komponentes',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'E-pasta mārketings',
  'LBL_EMAIL_SETUP_DESC' => 'Aizpildi zemāk esošo formu, lai modificētu sistēmas iestatījumus un varētu nosūtīt kampaņu e-pastus.',
  'LBL_EMAIL_SETUP_WIZ' => 'Sākt e-pasta konfigurēšanu',
  'LBL_EMAIL_SETUP_WIZARD' => 'Uzstādīt e-pastu',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Kampaņu e-pasta iestatījumi',
  'LBL_FILTER_CHART_BY' => 'Filtrēt diagrammu pēc:',
  'LBL_FINISH' => 'Pabeigt',
  'LBL_FROM_ADDR' => '"No" Adreses',
  'LBL_FROM_MAILBOX_NAME' => 'Lietot pasta kontu:',
  'LBL_FROM_NAME' => 'Sūtītāja vārds:',
  'LBL_HOME_START_MESSAGE' => 'Norādiet kampaņas veidu kādu vēlaties veidot',
  'LBL_IMPORT_PROSPECTS' => 'Importēt mērķus',
  'LBL_INVALID' => 'Nederīgs',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Nederīgs e-pasts',
  'LBL_INVITEE' => 'Kontaktpersonas',
  'LBL_LEADS' => 'Interesenti',
  'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} interesenti kas tika izveidoti caur šo kampaņu ir izdzēsti kopš izveidošanas.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Interesenti',
  'LBL_LEAD_DEFAULT_HEADER' => 'Kampaņas Web to lead forma',
  'LBL_LEAD_FOOTER' => 'Formas Kājene:',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Interesentu forma(pirmā kolonna)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Interesentu forma(otrā kolonna)',
  'LBL_LEAD_FORM_WIZARD' => 'Interesentu formas vednis',
  'LBL_LEAD_MODULE' => 'Interesenti',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Saistītā kampaņa:',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Interesents',
  'LBL_LINK_SUBPANEL_TITLE' => 'Saite',
  'LBL_LIST_CAMPAIGN_NAME' => 'Kampaņa',
  'LBL_LIST_END_DATE' => 'Beigu datums',
  'LBL_LIST_FORM_TITLE' => 'Kampaņu saraksts',
  'LBL_LIST_NAME' => 'Nosaukums',
  'LBL_LIST_START_DATE' => 'Sākuma datums',
  'LBL_LIST_STATUS' => 'Statuss',
  'LBL_LIST_TO_ACTIVITY' => 'Apskatīt statusu',
  'LBL_LIST_TYPE' => 'Tips',
  'LBL_LOCATION_TRACK' => 'Kampaņas atsekošanas failu novietojums (piem. campaign_tracker.php)',
  'LBL_LOGIN' => 'Lietotāja vārds',
  'LBL_LOG_ENTRIES' => 'Žurnāla ieraksti',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Noklusēts pēc e-pasta adreses vai domēna',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Kontaktpersonas izveidotas',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Noraidītie ziņojumi, nederīga e-pasta adrese',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Interesenti izveidoti',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Click-thru saite',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Nelieto',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Noraidītie ziņojumi, cits',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Ziņa nosūtīta/mēģināta nosūtīt',
  'LBL_LOG_ENTRIES_TITLE' => 'Atbildes',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Apskatīta ziņa',
  'LBL_MAILBOX' => 'Kontrolēts katalogs',
  'LBL_MAILBOX_CHECK1_BAD' => 'Nav atrasti pasta konti ar noraidīto ziņojumu apstrādi.',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Pasta konti ar noraidīto ziņojumu apstrādi atrasti:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Iestatiet sistēmas e-pasta adresi. E-pasta iestatījumi nav nokonfigurēti, vai nav derīgi.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'E-pasta iestatījumi nokonfigurēti:',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Netika atklāti e-pasta konti ar noraidīto ziņojumu apstrādi, izveidojiet to zemāk.',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Pasta konti ar noraidīto ziņojumu apstrādi tika atrasti. Jaunu izveidot nav nepieciešams, bet Jūs zemāk to varat izdarīt.',
  'LBL_MAILBOX_DEFAULT' => 'IESŪTNE',
  'LBL_MAILBOX_NAME' => 'Pasta konta nosaukums:',
  'LBL_MAIL_SENDTYPE' => 'Pasta piegādes aģents:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Lietot SMTP autentifikāciju?',
  'LBL_MAIL_SMTPPASS' => 'SMTP parole:',
  'LBL_MAIL_SMTPPORT' => 'SMTP ports',
  'LBL_MAIL_SMTPSERVER' => 'SMTP serveris',
  'LBL_MAIL_SMTPUSER' => 'SMTP lietotāja vārds',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Pārvaldīt abonementus',
  'LBL_MARKETING_CHECK1_BAD' => 'E-pasta mārketinga komponentes netika atrastas, lai izsūtītu kampaņu jums tā jāizveido.',
  'LBL_MARKETING_CHECK1_GOOD' => 'E-pasta mārketinga komponentes atrastas.',
  'LBL_MARKETING_CHECK2_BAD' => 'Mērķu saraksti netika atrasti,  jums nepieciešams izveidot tos no vēlamās kampaņas ekrāna.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Mērķa saraksti atrasti.',
  'LBL_MARK_AS_SENT' => 'Atzīmēt kā nosūtītu',
  'LBL_MASS_MAILING_TITLE' => 'Masveida sūtīšanas iespējas',
  'LBL_MESSAGE_FOR' => 'Nosūtīt šo ziņojumu:',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Ziņojumu rinda',
  'LBL_MODIFIED' => 'Modificēja:',
  'LBL_MODIFIED_BY' => 'Modificēja:',
  'LBL_MODIFIED_USER' => 'Modificēja',
  'LBL_MODULE_NAME' => 'Kampaņas',
  'LBL_MODULE_NAME_SINGULAR' => 'Kampaņa',
  'LBL_MODULE_TITLE' => 'Kampaņas: Sākums',
  'LBL_MONTH' => 'Mēnesis',
  'LBL_MORE_DETAILS' => 'Vairāk informācijas',
  'LBL_MRKT_NAME' => 'Nosaukums',
  'LBL_NAME' => 'Nosaukums:',
  'LBL_NAVIGATION_MENU_GEN1' => 'Kampaņas galvene',
  'LBL_NAVIGATION_MENU_GEN2' => 'Budžets',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Mārketings',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Jauns pasta konts',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Sūtīt e-pastu',
  'LBL_NAVIGATION_MENU_SETUP' => 'Uzstādīt e-pastu',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Abonamenti',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Kopsavilkums',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Sekotāji',
  'LBL_NEWSLETTER' => 'Biļetens',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Biļetens:',
  'LBL_NEWSLETTERS' => 'Aplūkot biļetenus',
  'LBL_NEWSLETTER_FORENTRY' => 'Biļetens',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Biļetenu saraksts',
  'LBL_NEWSLETTER_TITLE' => 'Kampaņas: Biļeteni',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Rediģēt biļetenu:',
  'LBL_NEW_FORM_TITLE' => 'Jauna kampaņa',
  'LBL_NO' => 'Nē',
  'LBL_NONE' => 'neviens nav izveidots',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Informējiet savu sistēmas administratoru lai viņš varētu izlabot šo problēmu',
  'LBL_NOTIFY_TITLE' => 'E-pasta paziņojumu iespējas',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Nederīga e-pasta adrese',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Mārketinga e-pastus nevar nosūtīt kamēr parakstīšanās sarakstā nav kaut viens ieraksts. Sarakstu varat aizpildīt arī vēlāk.',
  'LBL_NO_TARGETS_WARNING' => 'Mārketinga e-pastus nevar nosūtīt kamēr kampaņai nav pievienots kaut viens mērķu saraksts.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Mārketinga e-pastus nevar nosūtīt kamēr mērķu sarakstā nav kaut viens ieraksts. Sarakstu varat aizpildīt arī vēlāk.',
  'LBL_OPPORTUNITIES' => 'Iespējas',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Iespējas',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Iespējas',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Kampaņa bez e-pastiem',
  'LBL_PASSWORD' => 'Parole',
  'LBL_PORT' => 'Pasta servera ports',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Mērķu saraksts',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Mērķu saraksts',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Lūdzu aizpildiet visus obligātos laukus',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_QUEUE_BUTTON_LABEL' => 'Nosūtīt E-pastus',
  'LBL_QUEUE_BUTTON_TITLE' => 'Nosūtīt E-pastus',
  'LBL_RECHECK_BTN' => 'Pārbaudīt',
  'LBL_REFER_URL' => 'Sekotāja pāradresācijas URL:',
  'LBL_REMOVE' => 'noņemt',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Noņemts',
  'LBL_REPLY_ADDR' => '"Atbildēt-kam" adrese:',
  'LBL_REPLY_NAME' => '"Atbildēt-kam" vārds:',
  'LBL_ROI_CHART_BUDGET' => 'Budžets',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Paredzamie ieņēmumi',
  'LBL_ROI_CHART_INVESTMENT' => 'Investīcija',
  'LBL_ROI_CHART_REVENUE' => 'Ieņēmumi',
  'LBL_ROLLOVER_VIEW' => 'Nostādiet kursoru uz joslas, lai apskatītu detaļas.',
  'LBL_SAVED_SEARCH' => 'Saglabātā meklēšana un izkārtojums',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Saglabāt un turpināt',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Pabeigt',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Plānotājs nav iestatīts, lai apstrādātu noraidītos Kampaņu e-pastus.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Plānotājs nav iestatīts, lai apstrādātu Kampaņas e-pastus.',
  'LBL_SCHEDULER_CHECK_BAD' => 'Plānotāji netika atrasti',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Plānotāji atrasti',
  'LBL_SCHEDULER_COMPONENTS' => 'Plānotāja komponenti',
  'LBL_SCHEDULER_LINK' => 'dodieties uz plānotāja administrēšanas logu.',
  'LBL_SCHEDULER_NAME' => 'Plānotājs',
  'LBL_SCHEDULER_STATUS' => 'Statuss',
  'LBL_SEARCH_FORM_TITLE' => 'Kampaņu meklēšana',
  'LBL_SELECT_LEAD_FIELDS' => 'Lūdzu izvēlieties no pieejamajiem laukiem',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Lūdzu atzīmē nepieciešamos laikus:',
  'LBL_SELECT_TARGET' => 'Lietot kādu no esošiem mērķu sarakstiem',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Nosūtīšanas kļūda',
  'LBL_SEND_AS_TEST' => 'Sūtīt mārketinga e-pastu kā testu',
  'LBL_SEND_EMAIL' => 'Ieplānot e-pastu',
  'LBL_SERVER_TYPE' => 'Pasta servera protokols',
  'LBL_SERVER_URL' => 'Pasta servera adrese',
  'LBL_SSL' => 'Lietot SSL',
  'LBL_SSL_DESC' => 'Ja jūsu pasta serveris atbalsta drošo soketu savienojumus, aktivizējot šo tiks ietekmēti SSL savienojumi importējot e-pastus.',
  'LBL_START' => 'Sākt',
  'LBL_START_DATE_TIME' => 'Sākuma datums un laiks:',
  'LBL_STATUS_TEXT' => 'Statuss:',
  'LBL_SUBSCRIPTION_LIST' => 'Parakstīšanās saraksts',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Pierakstīšanās saraksta nosaukums:',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Šis nodefinēs mērķu sarakstu ar tipu Abonementi, šai kampaņai .<br>  Šis mērķu saraksts tiks izmantots, lai izsūtītu šīs kampaņas e-pastus   <br>Ja Jums nav saraksta, tiks izveidots tukšs saraksts.',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Pierakstīšanās',
  'LBL_TARGETED' => 'Mērķi',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Mērķi',
  'LBL_TARGET_LIST' => 'Mērķu saraksts',
  'LBL_TARGET_LISTS' => 'Mērķu saraksti',
  'LBL_TARGET_NAME' => 'Mērķu saraksta nosaukums',
  'LBL_TARGET_TYPE' => 'Mērķu saraksta tips',
  'LBL_TEAM' => 'Darba grupa:',
  'LBL_TEMPLATE' => 'E-pasta veidne:',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TEST_BUTTON_LABEL' => 'Nosūtīt testu',
  'LBL_TEST_BUTTON_TITLE' => 'Nosūtīt testu',
  'LBL_TEST_EMAILS_SENT' => 'Testa e-pasts nosūtīts',
  'LBL_TEST_LIST' => 'Testa saraksts',
  'LBL_TEST_LIST_NAME' => 'Testa saraksta nosaukums:',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Šis nodefinēs mērķu sarakstu ar tipu Tests, šai kampaņai .<br>  Šis mērķu saraksts tiks izmantots, lai izsūtītu šīs kampaņas testa e-pastus   <br>Ja Jums nav saraksta, tiks izveidots tukšs saraksts.',
  'LBL_TEST_TYPE_NAME' => 'Tests',
  'LBL_TIME_START' => 'Sākuma laiks',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TODETAIL_BUTTON_LABEL' => 'aplūkot papildus informāciju',
  'LBL_TODETAIL_BUTTON_TITLE' => 'aplūkot papildus informāciju',
  'LBL_TOP_CAMPAIGNS' => 'Kampaņu tops',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Kampaņas nosaukums',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Ieņēmumi',
  'LBL_TOTAL_ENTRIES' => 'Ieraksti',
  'LBL_TOTAL_TARGETED' => 'Mērķi kopā',
  'LBL_TO_WIZARD' => 'sākt',
  'LBL_TO_WIZARD_TITLE' => 'Sākt vedni',
  'LBL_TRACKED_URLS' => 'Sekošanas URLs',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Sekošanas URLs',
  'LBL_TRACKERS' => 'Sekotāji',
  'LBL_TRACKER_COUNT' => 'Sekotāju skaits:',
  'LBL_TRACKER_KEY' => 'Sekotājs:',
  'LBL_TRACKER_TEXT' => 'Atsekošanas saites teksts:',
  'LBL_TRACKER_URL' => 'Sekotāja URL:',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_TRACK_BUTTON_LABEL' => 'Apskatīt statusu',
  'LBL_TRACK_BUTTON_TITLE' => 'Apskatīt statusu',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Dzēst testa ierakstus',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Dzēst testa ierakstus',
  'LBL_TRACK_DELETE_CONFIRM' => 'Šīs darbības rezultātā tiks dzēsti visi žurnāla ieraksti, kas izveidoti testa  laikā. Turpināt?',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Izsekot rindu',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Aplūkot ROI',
  'LBL_UNSUBSCRIBED_HEADER' => 'Atceltie biļetenu abonementi',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Pārvietojot biļetenu uz atceto abonementu sarakstu, pievienos kontaktpersonu beļetena abonementa atrakstīšanās sarakstam. Kontaktpersona netiks izņemta no oriģinālā abonementu saraksta vai mērķu saraksta.',
  'LBL_UNSUBSCRIPTION_LIST' => 'Atrakstīšanās saraksts',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Atrakstīšanās saraksta nosaukums:',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Šis nodefinēs mērķu sarakstu ar tipu Atrakstīšanās, šai kampaņai .<br>  Šis mērķu saraksts saturēs cilvēku vārdus kuri ir atteikušies no jūsu kampaņas un ar kuriem nevajadzētu sazināties caur e-pastu  <br>Ja Jums nav saraksta, tiks izveidots tukšs saraksts.',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Atrakstīšanās',
  'LBL_USERS_CANNOT_OPTOUT' => 'Sistēmas lietotāji nevar atteikties no e-pastu saņemšanas.',
  'LBL_USE_EXISTING' => 'Lietot esošo',
  'LBL_VALID' => 'Derīgs',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Aplūkoti',
  'LBL_VIEW_INLINE' => 'Skatījums',
  'LBL_WEB_TO_LEAD' => 'Izveidot Interesenta formu',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Interesenta formas veidošana: Atzīmēt laukus',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Interesenta formas veidošana: Formas īpašības',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Ievadiet budžetu, lai varētu aprēķināt ROI.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'jūs jau esat pirmajā solī.',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Aizpildiet obligātos laukus, lai palīdzētu identificēt kampaņu.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Jūs  jau esiet pēdējā solī',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Aizpildiet formu zemāk, lai izveidotu e-pasta instanci jūsu biļetenam.  Tas dos iespēju norādīt informāciju par to, kad un kā jūsu biļeteni tiks izsūtīti.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Šis ir pēdējais procesa solis. Izvēlies vai izsūtīt testa e-pastu, ieplānot biļetenu izplatīšanu, vai saglabāt izmaiņas un doties uz kopsavilkumu lapu.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Katram biļetenam jābūt  3 mērķu sarakstiem (Pierakstīšanās, atrakstīšanās un testa). Jūs varat piesaistīt jau esošos sarakstus. Ja nē, tiks izveidots tukšs saraksts, kad jūs saglabāsiet ziņu vēstuli.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Izvēlaties vai veidojiet jaunu mērķu sarakstu, kuru lietot kampaņā.  Šis saraksts tiks lietots, lai sūtītu e-pastus ar jūsu mārketinga ziņojumiem.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Vai veidojiet jaunu, izmantojot zemāk esošo formu:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Definējiet sekošanas URL, ko lietot šajā kampaņā. Jums jāievada gan nosaukums, gan URL, lai izveidotu sekotāju.',
  'LBL_WIZ_FROM_ADDRESS' => 'No adreses:',
  'LBL_WIZ_FROM_NAME' => 'No:',
  'LBL_WIZ_MARKETING_TITLE' => 'Mārketinga e-pasts',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Kampaņas galvene',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Kampaņas budžets',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Kampaņas sekošanas URLs',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Parakstīšanās informācija',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Kopsavilkums',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Sūtīt e-pastu',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Testa e-pasts',
  'LBL_YEAR' => 'Gads',
  'LBL_YES' => 'Jā',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Kampaņas iespējams nefunkcionē kā plānots un Jūsu e-pasti iespējams nav nosūtīti sekojošu iemeslu dēļ:',
  'LNK_CAMPAIGN_LIST' => 'Aplūkot kampaņas',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Aplūkot E-pasta veidnes',
  'LNK_NEW_CAMPAIGN' => 'Izveidot kampaņu (Klasisko)',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Jauna E-pasta veidne',
  'LNK_NEW_PROSPECT' => 'Pievienot mērķi',
  'LNK_NEW_PROSPECT_LIST' => 'Izveidot Mērķu sarakstu',
  'LNK_PROSPECT_LIST' => 'Aplūkot mērķus',
  'LNK_PROSPECT_LIST_LIST' => 'Aplūkot Mērķu sarakstus',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Izveidot kampaņu (Vednis)',
  'NTC_DELETE_CONFIRMATION' => 'Vai tiešām vēlaties dzēst šo ierakstu?',
  'NTC_NO_LEGENDS' => 'Neviens',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'site_url vērtība Config.php uzstādījumos',
);

