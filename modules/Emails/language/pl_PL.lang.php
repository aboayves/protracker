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
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_OF' => 'z',
  'LBL_FW' => 'FW:',
  'LBL_RE' => 'RE:',
  'LBL_COLON' => ':',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_IMPORT_STATUS_TITLE' => 'Status',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_BUTTON_CREATE' => 'Utwórz',
  'LBL_BUTTON_EDIT' => 'Edytuj',
  'LBL_QS_DISABLED' => '(Szybkie Wyszukiwanie nie jest dostępne w tym module. Użyj określonego klawisza.)',
  'LBL_SIGNATURE_PREPEND' => 'Podpis ponad odpowiedzią?',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Oto odpowiedź na Twoje pytanie (Możesz zmienić ten tekst)',
  'LBL_EMAIL_QUOTE_FOR' => 'Cytat:',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'plik wyglądu nie istnieje: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'plik wyglądu nie jest zarejestrowany w modules/Quotes/Layouts.php',
  'LBL_CONFIRM_DELETE' => 'Czy na pewno chcesz usunąć ten folder?',
  'LBL_ENTER_FOLDER_NAME' => 'Proszę wprowadź nazwę folderu',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Oferty',
  'LBL_EMAILS_QUOTES_REL' => 'Wiadomości pocztowe: oferty',
  'LBL_ERROR_SELECT_REPORT' => 'Wybierz raport',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Wybierz nazwę przez kliknięcie przycisku wyboru, obok pola Powiązany z',
  'LBL_ERROR_SELECT_MODULE' => 'Wybierz moduł w polu Powiązanyy z',
  'ERR_ARCHIVE_EMAIL' => 'Błąd: Wybierz wiadomości do archiwizacji.',
  'ERR_DATE_START' => 'Data rozpoczęcia',
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, aby usunąć klienta.',
  'ERR_NOT_ADDRESSED' => 'Musisz podać adresata wiadomości w polu Do, Do wiadomości lub pozostali odbiorcy',
  'ERR_TIME_START' => 'Czas rozpoczęcia',
  'ERR_TIME_SENT' => 'Czas wysłania',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klienci',
  'LBL_ADD_ANOTHER_FILE' => 'Dodaj inny plik',
  'LBL_ADD_DASHLETS' => 'Dodaj narzędzia Sugar',
  'LBL_ADD_DOCUMENT' => 'Dodaj dokumenty',
  'LBL_ADD_ENTRIES' => 'Dodaj wpisy',
  'LBL_ADD_FILE' => 'Dodaj pliki',
  'LBL_ARCHIVED_EMAIL' => 'Zarchiwizowana wiadomość e-mail',
  'LBL_ARCHIVED_MODULE_NAME' => 'Utwórz archiwum wiadomości',
  'LBL_ATTACHMENTS' => 'Załączniki:',
  'LBL_HAS_ATTACHMENT' => 'Załącznik?:',
  'LBL_BCC' => 'Pozostali odbiorcy:',
  'LBL_BODY' => 'Treść:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Błędy',
  'LBL_CC' => 'Do wiadomości:',
  'LBL_COMPOSE_MODULE_NAME' => 'Zredaguj wiadomość',
  'LBL_CONTACT_FIRST_NAME' => 'Imię kontaktu',
  'LBL_CONTACT_LAST_NAME' => 'Nazwisko kontaktu',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_DATE_AND_TIME' => 'Data i czas wysyłki:',
  'LBL_DATE_SENT' => 'Data wysłania:',
  'LBL_DATE' => 'Data wysłania:',
  'LBL_DELETE_FROM_SERVER' => 'Usuń tę wiadomość z serwera',
  'LBL_DESCRIPTION' => 'Opis',
  'LBL_EDIT_ALT_TEXT' => 'Edytuj tekst komentarza',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Wyślij jako zwykły tekst',
  'LBL_EDIT_MY_SETTINGS' => 'Edytuj moje ustawienia',
  'LBL_EMAIL_ATTACHMENT' => 'Załączniki wiadomości',
  'LBL_EMAIL_EDITOR_OPTION' => 'Wyślij wiadomość w HTML',
  'LBL_EMAIL_SELECTOR' => 'Wybierz',
  'LBL_EMAIL' => 'Wiadomość e-mail:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'Wiadomości e-mail: Klienci',
  'LBL_EMAILS_BUGS_REL' => 'Wiadomości e-mail: Błędy',
  'LBL_EMAILS_CASES_REL' => 'Wiadomości e-mail: Sprawy',
  'LBL_EMAILS_CONTACTS_REL' => 'Wiadomości e-mail: Kontakty',
  'LBL_EMAILS_LEADS_REL' => 'Wiadomości e-mail: Leady',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'Wiadomości e-mail: Okazje',
  'LBL_EMAILS_NOTES_REL' => 'Wiadomości e-mail: Notatki',
  'LBL_EMAILS_PROJECT_REL' => 'Wiadomości e-mail: Projekt',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'Wiadomości e-mail: Zadania projektowe',
  'LBL_EMAILS_PROSPECT_REL' => 'Wiadomości e-mail: Prospekt',
  'LBL_EMAILS_TASKS_REL' => 'Wiadomości e-mail: Zadania',
  'LBL_EMAILS_USERS_REL' => 'Wiadomości e-mail: Użytkownicy',
  'LBL_EMPTY_FOLDER' => 'Brak e-maili do wyświetlenia',
  'LBL_ERROR_SENDING_EMAIL' => 'Błąd podczas wysyłania wiadomości e-mail',
  'LBL_ERROR_SAVING_DRAFT' => 'Błąd podczas zapisywania wersji roboczej',
  'LBL_FORWARD_HEADER' => 'Rozpocznij przekazywanie wiadomości:',
  'LBL_FROM_NAME' => 'Nazwa Od',
  'LBL_FROM' => 'Od:',
  'LBL_REPLY_TO' => 'Odpowiedź do:',
  'LBL_HTML_BODY' => 'Treść HTML',
  'LBL_INVITEE' => 'Odbiorcy',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leady',
  'LBL_MESSAGE_SENT' => 'Wiadomość wysłana',
  'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
  'LBL_MODULE_NAME_NEW' => 'Archiwum wiadomości',
  'LBL_MODULE_NAME' => 'Wszystkie wiadomości e-mail',
  'LBL_MODULE_TITLE' => 'Wiadomości e-mail:',
  'LBL_MY_EMAILS' => 'Moje wiadomości e-mail',
  'LBL_NEW_FORM_TITLE' => 'Archiwum wiadomości',
  'LBL_NONE' => 'Brak',
  'LBL_NOT_SENT' => 'Błąd wysyłania',
  'LBL_NOTE_SEMICOLON' => 'Podpowiedź: Użyj kropki lub średnika, jako separatora dla poszczególnych adresów.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Załączniki',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Okazje',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Zadania projektowe',
  'LBL_RAW' => 'Źródło wiadomości e-mail',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Zapisz wersję roboczą',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Zapisz wersję roboczą [Alt+R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Wyszukaj wersję roboczą',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Wyszukaj wysłane wiadomości e-mail',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie wiadomości e-mail',
  'LBL_SEND_ANYWAYS' => 'Ta wiadomość nie ma tematu. Czy wysłać/zapisać mimo to?',
  'LBL_SEND_BUTTON_LABEL' => 'Wyślij',
  'LBL_SEND_BUTTON_TITLE' => 'Wyślij [Alt+S]',
  'LBL_SEND' => 'Wyślij',
  'LBL_SENT_MODULE_NAME' => 'Wysłane wiadomości e-mail',
  'LBL_SHOW_ALT_TEXT' => 'Pokaż zwykły tekst',
  'LBL_SIGNATURE' => 'Podpis',
  'LBL_SUBJECT' => 'Temat:',
  'LBL_TEXT_BODY' => 'Treść',
  'LBL_TIME' => 'Czas wysyłki:',
  'LBL_TO_ADDRS' => 'Do',
  'LBL_USE_TEMPLATE' => 'Użyj szablonu:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Użytkownicy',
  'LBL_USERS' => 'Użytkownicy',
  'LNK_ALL_EMAIL_LIST' => 'Wszystkie wiadomości',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Zarchiwizowane wiadomości',
  'LNK_CALL_LIST' => 'Rozmowy telefoniczne',
  'LNK_DRAFTS_EMAIL_LIST' => 'Wszystkie wersje robocze',
  'LNK_EMAIL_LIST' => 'Wiadomości e-mail',
  'LBL_EMAIL_RELATE' => 'Powiązane z',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Zobacz szablony wiadomości e-mail',
  'LNK_MEETING_LIST' => 'Spotkania',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Utwórz archiwum wiadomości',
  'LNK_NEW_CALL' => 'Rejestr połączeń',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Utwórz Szablon wiadomości e-mail',
  'LNK_NEW_EMAIL' => 'Wyślij wiadomość e-mail',
  'LNK_NEW_MEETING' => 'Ustal spotkanie',
  'LNK_NEW_NOTE' => 'Utwórz notatkę lub załącznik',
  'LNK_NEW_SEND_EMAIL' => 'Napisz wiadomość',
  'LNK_NEW_TASK' => 'Utwórz zadanie',
  'LNK_NOTE_LIST' => 'Notatki',
  'LNK_SENT_EMAIL_LIST' => 'Wysłane wiadomości e-mail',
  'LNK_TASK_LIST' => 'Zadania',
  'LNK_VIEW_CALENDAR' => 'Dzisiaj',
  'LBL_LIST_ASSIGNED' => 'Przydzielone',
  'LBL_LIST_CONTACT_NAME' => 'Nazwa kontatku',
  'LBL_LIST_CREATED' => 'Utworzone',
  'LBL_LIST_DATE_SENT' => 'Data wysyłki',
  'LBL_LIST_DATE' => 'Data wysyłki',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Wersja robocza',
  'LBL_LIST_FORM_SENT_TITLE' => 'Wysłane wiadomości e-mail',
  'LBL_LIST_FORM_TITLE' => 'Lista wiadomości e-mail',
  'LBL_LIST_FROM_ADDR' => 'Od',
  'LBL_LIST_RELATED_TO' => 'Typ odbiorcy',
  'LBL_LIST_SUBJECT' => 'Temat',
  'LBL_LIST_TIME' => 'Czas wysyłki',
  'LBL_LIST_TO_ADDR' => 'Do',
  'LBL_LIST_TYPE' => 'Typ',
  'NTC_REMOVE_INVITEE' => 'Czy napewno chcesz usunąć tego odbiorcę?',
  'WARNING_SETTINGS_NOT_CONF' => 'Uwaga: Twoje ustawienia wiadomości nie są skonfigurowane do wysłania wiadomości e-mail.',
  'WARNING_NO_UPLOAD_DIR' => 'Załącznik może nie zostać dołączony: Nie znaleziono wartości dla zmiennej "upload_tmp_dir".  Należy poprawić odpowiednią opcję w pliku php.ini.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Załączniki mogą nie zostać załadowane: Została wykryta niepoprawna lub nieużywana wartość dla "upload_tmp_dir".  Należy poprawić odpowiednią opcję w pliku php.ini.',
  'LBL_BUTTON_RAW_TITLE' => 'Pokaż źródło wiadomości [Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => 'Pokaż źródło',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Ukryj źródło',
  'LBL_BUTTON_CHECK' => 'Sprawdź pocztę',
  'LBL_BUTTON_CHECK_TITLE' => 'Sprawdź, czy nie ma nowych wiadomości [Alt+C]',
  'LBL_BUTTON_FORWARD' => 'Przekaż',
  'LBL_BUTTON_FORWARD_TITLE' => 'Przekaż tę wiadomość e-mail [Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => 'Odpowiedz [Alt+R]',
  'LBL_BUTTON_REPLY' => 'Odpowiedź',
  'LBL_CASES_SUBPANEL_TITLE' => 'Sprawy',
  'LBL_INBOUND_TITLE' => 'Wiadomość odebrana',
  'LBL_INTENT' => 'Cel',
  'LBL_MESSAGE_ID' => 'ID wiadomości',
  'LBL_REPLY_HEADER_1' => 'W',
  'LBL_REPLY_HEADER_2' => 'napisano:',
  'LBL_REPLY_TO_ADDRESS' => 'Adres "Odpowiedź do"',
  'LBL_REPLY_TO_NAME' => 'Nazwa "Odpowiedź do"',
  'LBL_LIST_BUG' => 'Błędy',
  'LBL_LIST_CASE' => 'Sprawy',
  'LBL_LIST_CONTACT' => 'Kontakty',
  'LBL_LIST_LEAD' => 'Leady',
  'LBL_LIST_TASK' => 'Zadania',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
  'LBL_ALL' => 'Wszystko',
  'LBL_ASSIGN_WARN' => 'Sprawdź, czy są wybrane wszystkie dwie opcje.',
  'LBL_BACK_TO_GROUP' => 'Wróć do grupowej skrzynki odbiorczej',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Przydziel [Alt+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Przydziel',
  'LBL_BUTTON_GRAB_TITLE' => 'Pobierz z grupy [Alt+T]',
  'LBL_BUTTON_GRAB' => 'Pobierz z grupy',
  'LBL_CREATE_BUG' => 'Utwórz błąd',
  'LBL_CREATE_CASE' => 'Utwórz sprawę',
  'LBL_CREATE_CONTACT' => 'Utwórz kontakt',
  'LBL_CREATE_LEAD' => 'Utwórz lead',
  'LBL_CREATE_TASK' => 'Utwórz zadanie',
  'LBL_DIST_TITLE' => 'Utwórz zadanie',
  'LBL_LOCK_FAIL_DESC' => 'Wybrany element jest obecnie niedostępny.',
  'LBL_LOCK_FAIL_USER' => 'odebrano prawo własności.',
  'LBL_MASS_DELETE_ERROR' => 'Żaden z zaznaczonych elementów nie może być usunięty.',
  'LBL_NEW' => 'Nowy',
  'LBL_NEXT_EMAIL' => 'Następny wolny element',
  'LBL_NO_GRAB_DESC' => 'Żaden element nie jest teraz dostępny. Spróbuj za chwilę.',
  'LBL_QUICK_REPLY' => 'Odpowiedz',
  'LBL_REPLIED' => 'Odpowiedziano',
  'LBL_SELECT_TEAM' => 'Wybierz zespoły',
  'LBL_TAKE_ONE_TITLE' => 'Powtórzenia',
  'LBL_TITLE_SEARCH_RESULTS' => 'Wyszukaj wyniki',
  'LBL_TO' => 'Do:',
  'LBL_TOGGLE_ALL' => 'Zaznacz wszystkie',
  'LBL_UNKNOWN' => 'Nieznany',
  'LBL_UNREAD_HOME' => 'Nieprzeczytane wiadomości',
  'LBL_UNREAD' => 'Nieprzeczytane',
  'LBL_USE_ALL' => 'Wyszukane wyniki',
  'LBL_USE_CHECKED' => 'Tylko zaznaczone',
  'LBL_USE_MAILBOX_INFO' => 'Użyj skrzynki z: Adres',
  'LBL_USE' => 'Przydziel:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Przydziel wybrane rezultaty do:',
  'LBL_USER_SELECT' => 'Wybierz użytkowników',
  'LBL_USING_RULES' => 'Używaj zasad:',
  'LBL_WARN_NO_DIST' => 'Nie wybrano metody dystrybucji',
  'LBL_WARN_NO_USERS' => 'Nie wybrano żadnego użytkownika',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Proszę wybierz użytkownika lub zespół dla tego zadania.',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Skrzynka grupowa',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Moje wersje robocze',
  'LBL_LIST_TITLE_MY_INBOX' => 'Moja skrzynka',
  'LBL_LIST_TITLE_MY_SENT' => 'Moje wysłane wiadomości',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Moje zarchiwizowane wiadomości',
  'LBL_ACTIVITIES_REPORTS' => 'Raport działań',
  'LNK_CHECK_MY_INBOX' => 'Sprawdź moją pocztę',
  'LNK_DATE_SENT' => 'Data wysyłki',
  'LNK_GROUP_INBOX' => 'Grupowa skrzynka',
  'LNK_MY_DRAFTS' => 'Moje wersje robocze',
  'LNK_MY_INBOX' => 'Moja skrzynka e-mail',
  'LNK_VIEW_MY_INBOX' => 'Zobacz mój e-mail',
  'LNK_QUICK_REPLY' => 'Odpowiedź',
  'LNK_MY_ARCHIVED_LIST' => 'Moje archiwum',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Nie określono głównego zespołu',
  'LBL_ASSIGNED_TO' => 'Przydzielone do:',
  'LBL_MEMBER_OF' => 'Nadrzędny',
  'LBL_QUICK_CREATE' => 'Utwórz szybko',
  'LBL_STATUS' => 'Status wiadomości e-mail:',
  'LBL_EMAIL_FLAGGED' => 'Oflagowana:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Status wiadomości Odpowiedz do:',
  'LBL_TYPE' => 'Typ:',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Sprawdź!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Wybór tego wzorca spowoduje nadpisanie wszystkich danych wprowadzonych już do tworzonej wiadomości. Czy na pewno chcesz kontynuować?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Wybór "-- Brak --" wyczyści wszystkie dane wprowadzone już w treści wiadomości. Czy chcesz kontynuować?',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Ostrzeżenie',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Korzystanie z szablonu e-mail zawierającego zmienne kontaktu, takie jak nazwa kontaktu, do wysyłania e-maili do wielu odbiorców może mieć nieoczekiwane efekty. Zaleca się korzystanie z kampanii e-mail do korespondencji masowej.',
  'LBL_CHECK_ATTACHMENTS' => 'Proszę sprawdź załączniki!',
  'LBL_HAS_ATTACHMENTS' => 'Ten e-mail ma już załącznik(i). Czy chcesz zachować załącznik(i)?',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Brak wymaganego pola',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Niepoprawne wymagane pole',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Pokaż tylko odbiorców powiązanych z',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Odbiorcy zostali dodani.',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Dodaj',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Dodaj',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Właściwości konta pocztowego',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Serwer poczty wychodzącej SMTP',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Serwery poczty wychodzącej SMTP',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Konta pocztowe',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Email przychodzący',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Email wychodzący',
  'LBL_ADD_CC' => 'Dodaj Dw',
  'LBL_ADD_BCC' => 'Dodaj Udw',
  'LBL_ADD_TO_ADDR' => 'Dodaj Do',
  'LBL_SELECTED_ADDR' => 'Wybrane:',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Błąd podczas wysyłania wiadomości email',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'pokaż',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'więcej',
  'LBL_MORE_OPTIONS' => 'Więcej',
  'LBL_LESS_OPTIONS' => 'Mniej',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Osobiste',
  'LBL_MAILBOX_TYPE_GROUP' => 'Grupa',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grupa- auto-import',
  'LBL_SEARCH_FOR' => 'Szukaj',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => 'Osobiste: Konto pocztowe dostępne przez Ciebie. Tylko ty możesz zarządzać i importować wiadomości z tego konta.<br />Grupa: Konto e-mail dostępne przez członków określonych zespołów. Członkowie zespołu mogą zarządzać i importować wiadomości z tego konta.<br />Grupa - auto-import: Konto pocztowe dostępne przez członków określonych zespołów. E-maile są automatycznie importowane jako rekordy.',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Wprowadź adres e-mail, imię, nazwisko lub nazwę konta, aby znaleźć odbiorców',
  'LBL_TEST_SETTINGS' => 'Ustawienia testowe',
  'LBL_EMPTY_EMAIL_BODY' => 'Ta wiadomość nie ma treści',
  'LBL_TEST_EMAIL_SUBJECT' => 'E-mail testowy od "Sugar"',
  'LBL_NO_SUBJECT' => '(brak tematu)',
  'LBL_CHECKING_ACCOUNT' => 'Sprawdzanie konta',
  'LBL_TEST_EMAIL_BODY' => 'Ta wiadomość została wysłana w celu przetestowania informacji serwera poczty wychodzącej zawartych w aplikacji Sugar. Pomyślny odbiór tego e-maila wskazuje, że informacje ​​serwera poczty wychodzącej są poprawne.',
  'LBL_MAIL_SMTPUSER' => 'Nazwa użytkonika SMTP:',
  'LBL_MAIL_SMTPPASS' => 'Hasło SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Serwer SMTP:',
  'LBL_SMTP_SERVER_HELP' => 'Ten serwer poczty SMTP może być wykorzystany dla poczty wychodzącej. Podaj nazwę użytkownika i hasło do konta e-mail w celu korzystania z serwera pocztowego.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrator nie skonfigurował domyślnego konta wychodzącego. Nie można wysłać e-maila testowego.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Użyć uwierzytelnienia SMTP?',
  'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Typ serwera SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Specyfikacje serwera SMTP',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wybierz dostawcę e-mail:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Hasło Yahoo! Mail:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail:',
  'LBL_GMAIL_SMTPPASS' => 'Hasło Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Adres e-mail Gmail:',
  'LBL_EXCHANGE_SMTPPASS' => 'Zamień hasło:',
  'LBL_EXCHANGE_SMTPUSER' => 'Zamień nazwę użytkownika:',
  'LBL_EXCHANGE_SMTPPORT' => 'Zamień port serwera:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Zamień serwer:',
);

