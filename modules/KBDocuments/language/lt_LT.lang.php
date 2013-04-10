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
  'LBL_KBDOC_ATTACHMENT' => 'Kbdoc_attachment',
  'LBL_ID' => 'ID',
  'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
  'LBL_MODULE_NAME' => 'Žinių bazė',
  'LBL_MODULE_TITLE' => 'Žinių bazės straipsnis',
  'LNK_NEW_ARTICLE' => 'Sukurti straipsnį',
  'LNK_KBDOCUMENT_LIST' => 'Dokumentai',
  'LBL_DOC_REV_HEADER' => 'Dokumento versijos',
  'LBL_SEARCH_FORM_TITLE' => 'Dokumentų paieška',
  'LBL_KBDOC_TAGS' => 'Žymės:',
  'LBL_KBDOC_BODY' => 'Turinys:',
  'LBL_KBDOC_APPROVED_BY' => 'Patvirtino:',
  'LBL_KBDOC_ATTS_TITLE' => 'Prisegtukai:',
  'LBL_SEND_EMAIL' => 'Siųsti laišką',
  'LBL_SELECT_TAG_BUTTON_TITLE' => 'Pasirinkti',
  'LBL_ATTACHMENTS' => 'Prisegtukai:',
  'LBL_EMBEDED_IMAGES' => 'Įterpti paveiksliukai:',
  'LBL_SHOW_ARTICLE_DETAILS' => 'Rodyti išsamiau',
  'LBL_HIDE_ARTICLE_DETAILS' => 'Rodyti bendriau',
  'LBL_TAGS' => 'Žymės:',
  'LBL_NOT_AN_ADMIN_USER' => 'Ne administracinis vartotojas',
  'LBL_NOT_A_VALID_FILE' => 'Neteisingas failas',
  'LBL_SELECT_A_NODE_FROM_TREE' => 'Sukurti naują žymę',
  'LBL_SEARCH' => 'Ieškoti',
  'LBL_NEW_TAG_NAME' => 'Naujos žymės pavadinimas:',
  'LBL_KBDOCUMENT_ID' => 'Dokumento Id',
  'LBL_ARTICLE_TITLE' => 'Pavadinimas:',
  'LBL_ARTICLE_AUTHOR' => 'Autorius:',
  'LBL_ARTICLE_APPROVED_BY' => 'Tvirtintojas:',
  'LBL_ARTICLE_BODY' => 'Straipsnio turinys:',
  'LBL_NAME' => 'Dokumento pavadinimas:',
  'LBL_DESCRIPTION' => 'Aprašymas',
  'LBL_CATEGORY' => 'Kategorija',
  'LBL_SUBCATEGORY' => 'Subkategorija',
  'LBL_STATUS' => 'Statusas',
  'LBL_CREATED_BY' => 'Sukūrė',
  'LBL_DATE_ENTERED' => 'Sukurta',
  'LBL_DATE_MODIFIED' => 'Redaguota',
  'LBL_DELETED' => 'Ištrintas',
  'LBL_MODIFIED' => 'Redaguotojo id',
  'LBL_MODIFIED_USER' => 'Redagavo',
  'LBL_CREATED' => 'Sukūrė',
  'LBL_RELATED_DOCUMENT_ID' => 'Susijusio dokumento Id',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Susijusio dokumento versijos Id',
  'LBL_IS_TEMPLATE' => 'Yra šablonas',
  'LBL_TEMPLATE_TYPE' => 'Dokumento tipas',
  'LBL_PARENT_TYPE' => 'Pirminis tipas',
  'LBL_NUMBER' => 'Numeris',
  'LBL_TEXT_BODY' => 'Teksto turinys',
  'LBL_CREATED_BY_NAME' => 'Sukūrė',
  'LBL_TAG_ID' => 'Žymės id',
  'LBL_REVISION_NAME' => 'Versijos numeris',
  'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBDocument versijos Nr.',
  'LBL_MIME' => 'Mime tipas',
  'LBL_REVISION' => 'Versija',
  'LBL_DOCUMENT' => 'Susijęs dokumentas',
  'LBL_LATEST_REVISION' => 'Naujausios versijos Id',
  'LBL_LATEST_REVISION_NAME' => 'Naujausios versijos pavadinimas',
  'LBL_SELECTED_REVISION_NAME' => 'Pasirinktos versijos pavadinimas:',
  'LBL_CHANGE_LOG' => 'Pakeitimų istorija',
  'LBL_ACTIVE_DATE' => 'Paskelbimo data',
  'LBL_EXPIRATION_DATE' => 'Pasibaigimo data',
  'LBL_FILE_EXTENSION' => 'Failo išplėtimas',
  'LBL_KNOWLEDGE_BASE_SEARCH' => 'Žinių bazė',
  'LBL_KNOWLEDGE_BASE_ADMIN' => 'Žinių bazės administratorius',
  'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Valdyti žinių bazę',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nenustatyta',
  'LBL_DOC_NAME' => 'Dokumento pavadinimas:',
  'LBL_FILENAME' => 'Failo pavadinimas:',
  'LBL_DOC_VERSION' => 'Versija:',
  'LBL_CATEGORY_VALUE' => 'Kategorija:',
  'LBL_SUBCATEGORY_VALUE' => 'Subkategorija:',
  'LBL_DOC_STATUS' => 'Statusas:',
  'LBL_LAST_REV_CREATOR' => 'Versiją sukūrė:',
  'LBL_LAST_REV_DATE' => 'Versijos data:',
  'LBL_DOWNNLOAD_FILE' => 'Prisegtukai:',
  'LBL_DET_RELATED_DOCUMENT' => 'Susijęs dokumentas:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Susijusi dokumento versija:',
  'LBL_DET_IS_TEMPLATE' => 'Šablonas? :',
  'LBL_DET_TEMPLATE_TYPE' => 'Dokumento tipas:',
  'LBL_IS_EXTERNAL_ARTICLE' => 'Išorinis straipsnis?:',
  'LBL_SHOW_TAGS' => 'Rodyti daugiau žymių?',
  'LBL_HIDE_TAGS' => 'Paslėpti žymes',
  'LBL_TEAM' => 'Komanda:',
  'LBL_DOC_DESCRIPTION' => 'Aprašymas:',
  'LBL_KBDOC_SUBJECT' => 'Tema:',
  'LBL_DOC_ACTIVE_DATE' => 'Paskelbimo data:',
  'LBL_DOC_EXP_DATE' => 'Pasibaigimo data:',
  'LBL_LIST_ARTICLES' => 'Žiūrėti straipsnius',
  'LBL_LIST_FORM_TITLE' => 'Dokumentų sąrašas',
  'LBL_LIST_DOCUMENT' => 'Dokumentas',
  'LBL_LIST_CATEGORY' => 'Kategorija',
  'LBL_LIST_SUBCATEGORY' => 'Subkategorija',
  'LBL_LIST_REVISION' => 'Versija:',
  'LBL_LIST_LAST_REV_CREATOR' => 'Paskelbė',
  'LBL_LIST_LAST_REV_DATE' => 'Versijos data:',
  'LBL_LIST_VIEW_DOCUMENT' => 'Rodyti',
  'LBL_LIST_DOWNLOAD' => 'Nusikrauti',
  'LBL_LIST_ACTIVE_DATE' => 'Paskelbimo data',
  'LBL_LIST_EXP_DATE' => 'Pasibaigimo data',
  'LBL_LIST_STATUS' => 'Statusas',
  'LBL_ARTICLE_AUTHOR_LIST' => 'Autorius:',
  'LBL_LIST_MOST_VIEWED' => 'Labiausiai skaitomi straipsniai',
  'LBL_LIST_MOST_RECENT' => 'Patys naujausi straipsniai',
  'LBL_SF_DOCUMENT' => 'Dokumento pavadinimas:',
  'LBL_SF_CATEGORY' => 'Kategorija:',
  'LBL_SF_SUBCATEGORY' => 'Subkategorija:',
  'LBL_SF_ACTIVE_DATE' => 'Paskelbimo data:',
  'LBL_SF_EXP_DATE' => 'Pasibaigimo data:',
  'DEF_CREATE_LOG' => 'Dokumentas sukurtas',
  'LBL_TAB_SEARCH' => 'Ieškoti',
  'LBL_TAB_BROWSE' => 'Naršyti',
  'LBL_TAB_ADVANCED' => 'Detaliau',
  'LBL_MENU_FTS' => 'Pilno teksto paieška',
  'LBL_FTS_EMPTY_STRING' => 'Negali vykdyti pilno teksto paieškos su tuščia eilute',
  'LBL_SEARCH_WITHIN' => 'Ieškoti tarp:',
  'LBL_CONTAINING_THESE_WORDS' => 'Turi šiuos žodžius:',
  'LBL_EXCLUDING_THESE_WORDS' => 'Neįtraukiant šių žodžių:',
  'LBL_UNDER_THIS_TAG' => 'Naudojant šią žymę:',
  'LBL_PUBLISHED' => 'Paskelbtas',
  'LBL_EXPIRES' => 'Baigiasi:',
  'LBL_TIMES_VIEWED' => 'Perskaityta kartų:',
  'LBL_SAVE_SEARCH_AS' => 'Išsaugoti šią paiešką kaip:',
  'LBL_SAVE_SEARCH_AS_HELP' => 'Tai išsaugos Jūsų įvestą paiešką, kaip žinių bazės išsaugotą paiešką.',
  'LBL_PREVIOUS_SAVED_SEARCH' => 'Ankstesnės išsaugotos paieškos:',
  'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Redaguoti arba ištrinti išsaugotas paieškas.',
  'LBL_UPDATE' => 'Atnaujinti',
  'LBL_DELETE' => 'Ištrinti',
  'LBL_SHOW_OPTIONS' => 'Daugiau nustatymų',
  'LBL_AND' => 'ir',
  'LBL_CLEAR' => 'Išvalyti',
  'LBL_LIST_KBDOC_APPROVER_NAME' => 'Tvirtintojas',
  'LBL_LIST_VIEWING_FREQUENCY' => 'Dažnis:',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Peržiūra negalima, nes nerastas dokumento įrašas.',
  'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Peržiūra negalima, nes nors dokumentas yra, tačiau joks turinys nebuvo sukurtas.',
  'LBL_UNTAGGED_ARTICLES_NODE' => 'Straipsniai be žymių',
  'LBL_TOP_TEN_LIST_TITLE' => 'Top 10 labiausiai skaitomų straipsnių',
  'LBL_SHOW_SYNTAX_HELP' => 'Sintaksės pagalba',
  'LBL_MISMATCH_QUOTES_ERR' => 'Jūsų įvesta užklausa neveiks.',
  'LBL_SYNTAX_CHEAT_SHEET' => 'Užklausos sintaksės pagalba:<br />1. Pliuso ženklas (+) reiškia, kad rezultatuose šis žodis privalo būti.<br />2. Minuso ženklas (-) reiškia, kad rezultatuose šio žodžio neturi būti.',
  'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Žemesnio lygio žymė',
  'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Žemesnio lygio žymės',
  'LBL_ARTICLE_IN_TREE_HOVER' => 'Straipsnis',
  'LBL_ARTICLES_IN_TREE_HOVER' => 'Straipsniai',
  'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Ši žymė turi',
  'ERR_DOC_NAME' => 'Dokumento pavadinimas:',
  'ERR_DOC_ACTIVE_DATE' => 'Paskelbimo data',
  'ERR_DOC_EXP_DATE' => 'Pasibaigimo data:',
  'ERR_FILENAME' => 'Failo pavadinimas',
  'ERR_DOC_VERSION' => 'Dokumento versija',
  'ERR_DELETE_CONFIRM' => 'Ar Jūs norite ištrinti šią dokumento versiją?',
  'ERR_DELETE_LATEST_VERSION' => 'Jums neleidžiama trinti naujausios dokumento versijos.',
  'LNK_NEW_MAIL_MERGE' => 'Laiškų apjungimas',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Laiškų apjungimo šablonas:',
  'LBL_TREE_TITLE' => 'Dokumentai',
  'LBL_LIST_DOCUMENT_NAME' => 'Dokumento pavadinimas:',
  'LBL_CONTRACT_NAME' => 'Sutarties pavadinimas:',
  'LBL_LIST_IS_TEMPLATE' => 'Šablonas?',
  'LBL_LIST_TEMPLATE_TYPE' => 'Dokumento tipas',
  'LBL_LIST_SELECTED_REVISION' => 'Pasirinkta versija',
  'LBL_LIST_LATEST_REVISION' => 'Naujausia versija',
  'LBL_CASES_SUBPANEL_TITLE' => 'Susiję aptarnavimai',
  'LBL_EMAILS_SUBPANEL_TITLE' => 'Susiję laiškai',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Susiję pasiūlymai',
  'LBL_LAST_REV_CREATE_DATE' => 'Naujausios versijos sukūrimo data',
  'LBL_KEYWORDS' => 'Raktažodžiai:',
  'LBL_CASES' => 'Aptarnavimai',
  'LBL_EMAILS' => 'Laiškai',
  'LBL_DEFAULT_ADMIN_MESSAGE' => 'Pasirinkite veiksmą iš iššokančio sąrašo',
  'LBL_SELECT_PARENT_TAG_MESSAGE' => 'Pasirinkite pagrindinę žyme',
  'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Pasirinkite žymes kurias norite ištrinti',
  'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' => 'Pasirinkite žymes kurias norite pervadinti',
  'LBL_TAG_ALREADY_EXISTS' => 'Žymė jau egzistuoja',
  'LBL_TYPE_THE_NEW_TAG_NAME' => 'Įveskite naujos žymės pavadinimą',
  'LBL_SAVING_THE_TAG' => 'Žymė saugoma..',
  'LBL_CREATING_NEW_TAG' => 'Kuriama nauja žymė...',
  'LBL_TAGS_ROOT_LABEL' => 'Žymės',
  'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'DUK žymes negalima pervadinti',
  'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Pirma pasirinkite straipsnį',
  'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Pasirinkite straipsnius kuriems pritaikyti žymes',
  'LBL_SELECT_ARTICLES_TO_DELETE' => 'Pirma pasirinkite straipsnį',
  'LBL_SELECT_TAGS_TO_DELETE' => 'Pasirinkite straipsnį kurį ištrinti',
  'LBL_SELECT_A_TAG_FROM_TREE' => 'Pasirinkite žymę',
  'LBL_SELECT_TAGS_FROM_TREE' => 'Pasirinkite žymes',
  'LBL_MOVING_ARTICLES_TO_TAG' => 'Perkeliamas straipsnis į žymę...',
  'LBL_APPLYING_TAGS_TO_ARTICLES' => 'Žymės pritaikomos straipsniams ...',
  'LBL_ROOT_TAG_MESSAGE' => 'Aukščiausio lygio žymė negali būti susieta su straipsniu',
  'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Pagrindinės žymės negalima pervadinti',
  'LBL_TYPE_NEW_NODE_NAME' => 'Prašome įvesti žymės pavadinimą',
  'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Pagrindinė ir žemesnio lygio žymės yra tos pačios',
  'LBL_DELETE_TAG' => 'Ištrinti žymę',
  'LBL_SELECT_TAG' => 'Pasirinkti žymę',
  'LBL_APPLY_TAG' => 'Pritaikyti žymę',
  'LBL_MOVE' => 'Perkelti',
  'LBL_LAUNCHING_TAG_BROWSING' => 'Paleidžiamas žymių naršymas...',
  'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Įvyko klaida vykdant šį žymės užklausimą.',
  'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' => 'Klaida: Ne failas',
  'LBL_CREATE_NEW_TAG' => 'Sukurti naują žymę',
  'LBL_SEARCH_TAG' => 'Ieškoti',
  'LBL_TAG_NAME' => 'Žymės pavadinimas',
  'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Įveskite ieškomos žymės pavadinimą',
  'LBL_KB_NOTIFICATION' => 'Dokumentas paskelbtas',
  'LBL_KB_PUBLISHED_REQUEST' => 'paskyrė Jums dokumentą patvirtinti ir paskelbti.',
  'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Dokumento statusas buvo pakeistas',
  'LBL_CONTRACTS' => 'Sutartys',
  'LBL_SELECT_PARENT_TREE_NOTICE' => 'Pasirinkite pagrindinę žymę',
  'LBL_CLICK_APPLY_TAG' => 'Spauskite Pritaikyti žymę',
  'LBL_HEAD_TAGS' => 'Žymės',
);

