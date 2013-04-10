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
  'LBL_BCC' => 'Bcc:',
  'LBL_CC' => 'Cc:',
  'LBL_COLON' => ':',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_SEND_BUTTON_LABEL' => 'Send',
  'LBL_SEND_BUTTON_TITLE' => 'Send [Alt+S]',
  'LBL_SEND' => 'SEND',
  'LBL_LIST_TYPE' => 'Type',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_IMPORT_STATUS_TITLE' => 'Status',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_TYPE' => 'Type:',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_FW' => 'VS:',
  'LBL_RE' => 'SV:',
  'LBL_BUTTON_CREATE' => 'Opret',
  'LBL_BUTTON_EDIT' => 'Rediger',
  'LBL_QS_DISABLED' => 'Hurtig søgning er ikke tilgængelig i dette modul. Brug valgknappen.',
  'LBL_SIGNATURE_PREPEND' => 'Signatur oven over svaret',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Her er det tilbud, du har anmodet om "du kan ændre denne tekst"',
  'LBL_EMAIL_QUOTE_FOR' => 'Tilbud på:',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'tilbudslayoutfilen findes ikke: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'tilbudslayoutet er ikke registreret i moduler/Tilbud/Layout.php',
  'LBL_CONFIRM_DELETE' => 'Er du sikker på, at du vil slette denne mappe?',
  'LBL_ENTER_FOLDER_NAME' => 'Angiv et mappenavn',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Tilbud',
  'LBL_EMAILS_QUOTES_REL' => 'E-mails: Tilbud',
  'LBL_ERROR_SELECT_REPORT' => 'Vælg en rapport',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Vælg et navn ved at klikke på valgknappen ved siden af feltet Relater til',
  'LBL_ERROR_SELECT_MODULE' => 'Vælg et modul til feltet Relater til.',
  'ERR_ARCHIVE_EMAIL' => 'Fejl: Vælg e-mails til arkivering.',
  'ERR_DATE_START' => 'Startdato',
  'ERR_DELETE_RECORD' => 'Fejl: Du skal angive et postnummer for at slette virksomheden.',
  'ERR_NOT_ADDRESSED' => 'Fejl: E-mail skal have en Til-, Cc- eller Bcc-adresse',
  'ERR_TIME_START' => 'Starttidspunkt',
  'ERR_TIME_SENT' => 'Sendt klokkeslæt',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Virksomheder',
  'LBL_ADD_ANOTHER_FILE' => 'Tilføj en ny fil',
  'LBL_ADD_DASHLETS' => 'Tilføj Sugar-dashlets',
  'LBL_ADD_DOCUMENT' => 'Tilføj dokumenter',
  'LBL_ADD_ENTRIES' => 'Tilføj poster',
  'LBL_ADD_FILE' => 'Tilføj filer',
  'LBL_ARCHIVED_EMAIL' => 'Arkiveret e-mail',
  'LBL_ARCHIVED_MODULE_NAME' => 'Opret arkiverede e-mails',
  'LBL_ATTACHMENTS' => 'Vedhæftede filer:',
  'LBL_HAS_ATTACHMENT' => 'Har vedhæftet fil?',
  'LBL_BODY' => 'Brødtekst:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Fejl',
  'LBL_COMPOSE_MODULE_NAME' => 'Opret e-mail',
  'LBL_CONTACT_FIRST_NAME' => 'Kontaktens fornavn',
  'LBL_CONTACT_LAST_NAME' => 'Kontaktens efternavn',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CREATED_BY' => 'Oprettet af',
  'LBL_DATE_AND_TIME' => 'Sendt dato og klokkeslæt:',
  'LBL_DATE_SENT' => 'Sendt den:',
  'LBL_DATE' => 'Sendt den:',
  'LBL_DELETE_FROM_SERVER' => 'Slet besked fra server',
  'LBL_DESCRIPTION' => 'Beskrivelse',
  'LBL_EDIT_ALT_TEXT' => 'Rediger almindelig tekst',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Send som almindelig tekst',
  'LBL_EDIT_MY_SETTINGS' => 'Rediger mine indstillinger',
  'LBL_EMAIL_ATTACHMENT' => 'Vedhæftet fil',
  'LBL_EMAIL_EDITOR_OPTION' => 'Send HTML-e-mail',
  'LBL_EMAIL_SELECTOR' => 'Vælg',
  'LBL_EMAIL' => 'E-mail-adresse:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'E-mails:Virksomheder',
  'LBL_EMAILS_BUGS_REL' => 'E-mails:Fejl',
  'LBL_EMAILS_CASES_REL' => 'E-mails: Sager',
  'LBL_EMAILS_CONTACTS_REL' => 'E-mails: Kontakter',
  'LBL_EMAILS_LEADS_REL' => 'E-mails:Kundeemner',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mails:Salgsmuligheder',
  'LBL_EMAILS_NOTES_REL' => 'E-mails:Noter',
  'LBL_EMAILS_PROJECT_REL' => 'E-mails:Projekt',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mails:Projektopgave',
  'LBL_EMAILS_PROSPECT_REL' => 'E-mails:Potentiel kunde',
  'LBL_EMAILS_TASKS_REL' => 'E-mails:Opgaver',
  'LBL_EMAILS_USERS_REL' => 'E-mails:Brugere',
  'LBL_EMPTY_FOLDER' => 'Ingen e-mails at vise',
  'LBL_ERROR_SENDING_EMAIL' => 'Fejl ved afsendelse af e-mail',
  'LBL_ERROR_SAVING_DRAFT' => 'Fejl under lagring af kladde',
  'LBL_FORWARD_HEADER' => 'Begynd videresendt besked:',
  'LBL_FROM_NAME' => 'Fra navn',
  'LBL_FROM' => 'Fra:',
  'LBL_REPLY_TO' => 'Svar til:',
  'LBL_HTML_BODY' => 'HTML-brødtekst',
  'LBL_INVITEE' => 'Modtagere',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Kundeemner',
  'LBL_MESSAGE_SENT' => 'Beskeden er sendt',
  'LBL_MODIFIED_BY' => 'Ændret af',
  'LBL_MODULE_NAME_NEW' => 'Arkivér e-mail',
  'LBL_MODULE_NAME' => 'Alle e-mails',
  'LBL_MODULE_TITLE' => 'E-mails:',
  'LBL_MY_EMAILS' => 'Mine e-mails',
  'LBL_NEW_FORM_TITLE' => 'Arkivér e-mail',
  'LBL_NONE' => 'Ingen',
  'LBL_NOT_SENT' => 'Send fejl',
  'LBL_NOTE_SEMICOLON' => 'Bemærk! Brug komma eller semikolon som separator ved flere e-mail-adresser.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Vedhæftede filer',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Salgsmuligheder',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektopgaver',
  'LBL_RAW' => 'Rå e-mail',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Gem kladde',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Gem kladde [Alt+R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Søg i Kladder',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Søg i Sendt post',
  'LBL_SEARCH_FORM_TITLE' => 'Søg i e-mail',
  'LBL_SEND_ANYWAYS' => 'Denne e-mail har intet emne. Vil du send/gemme alligevel?',
  'LBL_SENT_MODULE_NAME' => 'Sendt post',
  'LBL_SHOW_ALT_TEXT' => 'Vis almindelig tekst',
  'LBL_SIGNATURE' => 'Signatur',
  'LBL_SUBJECT' => 'Emne:',
  'LBL_TEXT_BODY' => 'Brødtekst',
  'LBL_TIME' => 'Sendt klokkeslæt:',
  'LBL_TO_ADDRS' => 'Til',
  'LBL_USE_TEMPLATE' => 'Brug skabelon:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Brugere',
  'LBL_USERS' => 'Brugere',
  'LNK_ALL_EMAIL_LIST' => 'Alle e-mails',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Arkiverede e-mails',
  'LNK_CALL_LIST' => 'Opkald',
  'LNK_DRAFTS_EMAIL_LIST' => 'Alle kladder',
  'LNK_EMAIL_LIST' => 'E-mails',
  'LBL_EMAIL_RELATE' => 'Relater til',
  'LNK_EMAIL_TEMPLATE_LIST' => 'E-mail-skabeloner',
  'LNK_MEETING_LIST' => 'Møder',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Opret arkiveret e-mail',
  'LNK_NEW_CALL' => 'Planlæg opkald',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Opret e-mail-skabelon',
  'LNK_NEW_EMAIL' => 'Arkivér e-mail',
  'LNK_NEW_MEETING' => 'Planlæg møde',
  'LNK_NEW_NOTE' => 'Opret note eller vedhæftet fil',
  'LNK_NEW_SEND_EMAIL' => 'Meddelelse',
  'LNK_NEW_TASK' => 'Opret opgave',
  'LNK_NOTE_LIST' => 'Noter',
  'LNK_SENT_EMAIL_LIST' => 'Sendt post',
  'LNK_TASK_LIST' => 'Opgaver',
  'LNK_VIEW_CALENDAR' => 'I dag',
  'LBL_LIST_ASSIGNED' => 'Tildelt',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
  'LBL_LIST_CREATED' => 'Oprettet',
  'LBL_LIST_DATE_SENT' => 'Sendt den',
  'LBL_LIST_DATE' => 'Sendt den',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Kladde',
  'LBL_LIST_FORM_SENT_TITLE' => 'Sendt post',
  'LBL_LIST_FORM_TITLE' => 'E-mail-liste',
  'LBL_LIST_FROM_ADDR' => 'Fra',
  'LBL_LIST_RELATED_TO' => 'Modtagertype',
  'LBL_LIST_SUBJECT' => 'Emne',
  'LBL_LIST_TIME' => 'Sendt klokkeslæt',
  'LBL_LIST_TO_ADDR' => 'Til',
  'NTC_REMOVE_INVITEE' => 'Er du sikker på, at du vil fjerne denne modtager fra e-mailen?',
  'WARNING_SETTINGS_NOT_CONF' => 'Advarsel! Dine e-mail-indstillinger er ikke konfigureret til at sende e-mail.',
  'WARNING_NO_UPLOAD_DIR' => '"Vedhæftede filer kan fejle: Ingen værdi for ""upload_tmp_dir"" blev registreret. Ret dette i din php.ini-fil."',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => '"Vedhæftede filer kan fejle: En forkert eller ubrugelig værdi for ""upload_tmp_dir"" blev registreret. Ret dette i din php.ini-fil."',
  'LBL_BUTTON_RAW_TITLE' => 'Vis rå meddelelse [Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => 'Vis rå',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Skjul rå',
  'LBL_BUTTON_CHECK' => 'Tjek e-mail',
  'LBL_BUTTON_CHECK_TITLE' => 'Tjek for nye e-mails [Alt+C]',
  'LBL_BUTTON_FORWARD' => 'Videresend',
  'LBL_BUTTON_FORWARD_TITLE' => 'Videresend denne e-mail [Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => 'Besvar [Alt+R]',
  'LBL_BUTTON_REPLY' => 'Besvar',
  'LBL_CASES_SUBPANEL_TITLE' => 'Sager',
  'LBL_INBOUND_TITLE' => 'Indgående e-mail',
  'LBL_INTENT' => 'Hensigt',
  'LBL_MESSAGE_ID' => 'Meddelelses-id',
  'LBL_REPLY_HEADER_1' => 'På',
  'LBL_REPLY_HEADER_2' => 'skrev:',
  'LBL_REPLY_TO_ADDRESS' => 'Svar til-adresse',
  'LBL_REPLY_TO_NAME' => 'Svar til-navn',
  'LBL_LIST_BUG' => 'Fejl',
  'LBL_LIST_CASE' => 'Sager',
  'LBL_LIST_CONTACT' => 'Kontakter',
  'LBL_LIST_LEAD' => 'Kundeemner',
  'LBL_LIST_TASK' => 'Opgaver',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
  'LBL_ALL' => 'Alle',
  'LBL_ASSIGN_WARN' => 'Kontrollér, at begge indstillinger er valgt.',
  'LBL_BACK_TO_GROUP' => 'Tilbage til gruppeindbakke',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Tildel [Alt+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Tildel',
  'LBL_BUTTON_GRAB_TITLE' => 'Tag fra gruppen [Alt+T]',
  'LBL_BUTTON_GRAB' => 'Tag fra gruppen',
  'LBL_CREATE_BUG' => 'Opret fejl',
  'LBL_CREATE_CASE' => 'Opret sag',
  'LBL_CREATE_CONTACT' => 'Opret kontakt',
  'LBL_CREATE_LEAD' => 'Opret kundeemne',
  'LBL_CREATE_TASK' => 'Opret opgave',
  'LBL_DIST_TITLE' => 'Tildeling',
  'LBL_LOCK_FAIL_DESC' => 'Den valgte post er ikke tilgængelig i øjeblikket.',
  'LBL_LOCK_FAIL_USER' => 'har taget ejerskab.',
  'LBL_MASS_DELETE_ERROR' => 'Ingen kontrollerede poster blev videregivet til sletning.',
  'LBL_NEW' => 'Ny',
  'LBL_NEXT_EMAIL' => 'Næste ledige post',
  'LBL_NO_GRAB_DESC' => 'Der var ingen poster tilgængelige. Prøv igen om et øjeblik.',
  'LBL_QUICK_REPLY' => 'Besvar',
  'LBL_REPLIED' => 'Besvaret',
  'LBL_SELECT_TEAM' => 'Vælg team',
  'LBL_TAKE_ONE_TITLE' => 'Sælgere',
  'LBL_TITLE_SEARCH_RESULTS' => 'Søgeresultater',
  'LBL_TO' => 'Til:',
  'LBL_TOGGLE_ALL' => 'Slå alle til/fra',
  'LBL_UNKNOWN' => 'Ukendt',
  'LBL_UNREAD_HOME' => 'Ulæste e-mails',
  'LBL_UNREAD' => 'Ulæst',
  'LBL_USE_ALL' => 'Alle søgeresultater',
  'LBL_USE_CHECKED' => 'Kun kontrollerede',
  'LBL_USE_MAILBOX_INFO' => 'Brug postkassen fra: Adresse',
  'LBL_USE' => 'Tildel:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Tildel valgte resultater til:',
  'LBL_USER_SELECT' => 'Vælg brugere',
  'LBL_USING_RULES' => 'Bruger regler:',
  'LBL_WARN_NO_DIST' => 'Ingen distributionsmetode er valgt',
  'LBL_WARN_NO_USERS' => 'Ingen brugere er valgt',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Vælg en bruger eller et team til tildeling.',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Gruppeindbakke',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Mine kladder',
  'LBL_LIST_TITLE_MY_INBOX' => 'Min indbakke',
  'LBL_LIST_TITLE_MY_SENT' => 'Min Sendt post',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Mine arkiverede e-mails',
  'LBL_ACTIVITIES_REPORTS' => 'Aktivitetsrapport',
  'LNK_CHECK_MY_INBOX' => 'Tjek min e-mail',
  'LNK_DATE_SENT' => 'Sendt den',
  'LNK_GROUP_INBOX' => 'Gruppeindbakke',
  'LNK_MY_DRAFTS' => 'Mine Kladder',
  'LNK_MY_INBOX' => 'Min E-mail',
  'LNK_VIEW_MY_INBOX' => 'Vis mine e-mails',
  'LNK_QUICK_REPLY' => 'Besvar',
  'LNK_MY_ARCHIVED_LIST' => 'Mine Arkiver',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Intet primært team er angivet',
  'LBL_ASSIGNED_TO' => 'Tildelt til:',
  'LBL_MEMBER_OF' => 'Overordnet',
  'LBL_QUICK_CREATE' => 'Hurtig oprettelse',
  'LBL_STATUS' => 'E-mail-status:',
  'LBL_EMAIL_FLAGGED' => 'Afmærket:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Svar til status:',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Kontrollér dette!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Hvis du vælger denne skabelon, overskrives alle de data, der allerede er indtastet i e-mailens brødtekst. Vil du fortsætte?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => '"Hvis du vælger ""- Ingen -"", ryddes alle de data, der allerede er indtastet i e-mailens brødtekst. Vil du fortsætte?"',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Advarsel:',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Brug af en e-mail skabelon, der indeholder kontaktvariabler såsom kontaktpersonens navn, for at sende e-mails til flere modtagere, kan have uventede resultater. Det anbefales, at du bruger en e-mail kampagne til masseforsendelser.',
  'LBL_CHECK_ATTACHMENTS' => 'Kontrollér de vedhæftede filer!',
  'LBL_HAS_ATTACHMENTS' => 'Denne e-mail har allerede vedhæftede filer. Vil du beholde de vedhæftede filer?',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Et obligatorisk felt mangler',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Ugyldigt obligatorisk felt',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Vis kun modtagere, der er relateret til',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Modtagere er blevet tilføjet.',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Tilføj',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Tilføj',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Egenskaber for e-mail-konto',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Udgående SMTP-e-mail-server',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Udgående SMTP-e-mail-servere',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'E-mail-konti',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Indgående e-mail',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Udgående e-mail',
  'LBL_ADD_CC' => 'Tilføj Cc',
  'LBL_ADD_BCC' => 'Tilføj Bcc',
  'LBL_ADD_TO_ADDR' => 'Føj til',
  'LBL_SELECTED_ADDR' => 'Valgt',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Fejl under afsendelse af e-mail',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'vis',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'mere',
  'LBL_MORE_OPTIONS' => 'Mere',
  'LBL_LESS_OPTIONS' => 'Mindre',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Personlig',
  'LBL_MAILBOX_TYPE_GROUP' => 'Gruppe',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Gruppe - Importér automatisk',
  'LBL_SEARCH_FOR' => 'Søg efter',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personlig</b>: En e-mail-konto, du har adgang til. Kun du kan administrere og importere e-mails fra denne konto.<br><b>Gruppe</b>: En e-mail-konto, som medlemmer af angivne team har adgang til. Teammedlemmer kan administrere og importere e-mails fra denne konto.<br><b>Gruppe - Importér automatisk</b>: En e-mail-konto, som medlemmer af angivne team har adgang til. E-mails importeres automatisk som poster.',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Angiv en e-mail-adresse, et fornavn, et efternavn eller et virksomhedsnavn for at finde modtagere.',
  'LBL_TEST_SETTINGS' => 'Testindstillinger',
  'LBL_EMPTY_EMAIL_BODY' => '"<p><span style=""color: #888888;""><em>Denne meddelelse har intet indhold</em></span></p>"',
  'LBL_TEST_EMAIL_SUBJECT' => 'Test e-mail fra Sugar',
  'LBL_NO_SUBJECT' => '"intet emne"',
  'LBL_CHECKING_ACCOUNT' => 'Kontrollere virksomhed',
  'LBL_OF' => 'af',
  'LBL_TEST_EMAIL_BODY' => 'Denne e-mail er sendt for at teste oplysningerne om den udgående e-mail-server i Sugar-programmet. Hvis denne e-mail modtages korrekt, betyder det, at oplysningerne om den udgående e-mail-server er gyldige.',
  'LBL_MAIL_SMTPUSER' => 'SMTP-brugernavn:',
  'LBL_MAIL_SMTPPASS' => 'SMTP-adgangskode:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP-server:',
  'LBL_SMTP_SERVER_HELP' => 'Denne SMTP-server kan bruges til udgående e-mail. Angiv et brugernavn og en adgangskode til din e-mail-konto, hvis du vil bruge e-mail-serveren.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administratoren har endnu ikke konfigureret den udgående standardkonto. Test-e-mailen kan ikke sendes.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Vil du bruge SMTP-godkendelse?',
  'LBL_MAIL_SMTPPORT' => 'SMTP-port:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP-server-type:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-server specifikation',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vælg din e-mail-udbyder',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail adgangskode',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail id',
  'LBL_GMAIL_SMTPPASS' => 'Gmail adgangskode',
  'LBL_GMAIL_SMTPUSER' => 'Gmail e-mail-adresse',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange adgangskode:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange brugernavn',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange serverport',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange server',
);

