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
  'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da bi obrisali kontakt.',
  'LBL_ACCOUNT_ID' => 'ID broj kompanije:',
  'LBL_ACCOUNT_NAME' => 'Naziv kompanije:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
  'LBL_ADDMORE_BUSINESSCARD' => 'Dodaj još jednu vizit kartu',
  'LBL_ADDRESS_INFORMATION' => 'Informacija o adresi',
  'LBL_ADD_BUSINESSCARD' => 'Dodaj vizit kartu',
  'LBL_ALTERNATE_ADDRESS' => 'Druga adresa:',
  'LBL_ALT_ADDRESS' => 'Druga adresa:',
  'LBL_ALT_ADDRESS_CITY' => 'Grad alternativne adrese:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Država alternativne adrese:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Poštanski broj alternativne adrese:',
  'LBL_ALT_ADDRESS_STATE' => 'Pokrajina alternativne adrese:',
  'LBL_ALT_ADDRESS_STREET' => 'Ulica alternativne adrese:',
  'LBL_ALT_ADDRESS_STREET_2' => 'Ulica br. 2 alternativne adrese:',
  'LBL_ALT_ADDRESS_STREET_3' => 'Ulica br. 3 alternativne adrese:',
  'LBL_ANY_ADDRESS' => 'Bilo koja adresa:',
  'LBL_ANY_EMAIL' => 'Bilo koji Email:',
  'LBL_ANY_PHONE' => 'Bilo koji telefon:',
  'LBL_ASSIGNED_TO_ID' => 'Dodeljeni korisnik',
  'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno',
  'LBL_ASSISTANT' => 'Asistent:',
  'LBL_ASSISTANT_PHONE' => 'Telefon asistenta:',
  'LBL_BIRTHDATE' => 'Datum rođenja:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Defekti',
  'LBL_BUSINESSCARD' => 'Vizit karta',
  'LBL_CAMPAIGN' => 'Kampanja:',
  'LBL_CAMPAIGNS' => 'Kampanje',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanje',
  'LBL_CAMPAIGN_ID' => 'ID kampanje',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanje',
  'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
  'LBL_CHECKOUT_DATE' => 'Datum provere',
  'LBL_CITY' => 'Grad:',
  'LBL_CONFIRM_PORTAL_PASSWORD' => 'Potvrdite portal lozinku',
  'LBL_CONTACT' => 'Kontakt:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
  'LBL_CONTACT_EDIT_PASSWORD' => 'Lozinka',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Email adrese srodnih kontakata',
  'LBL_CONTACT_INFORMATION' => 'Pregled kontakta',
  'LBL_CONTACT_NAME' => 'Ime kontakta:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-Prodajna prilika',
  'LBL_CONTACT_ROLE' => 'Uloga:',
  'LBL_CONTRACTS' => 'Ugovori',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Ugovori',
  'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopiraj u drugu adresu',
  'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopiraj u primarnu adresu',
  'LBL_COUNTRY' => 'Država:',
  'LBL_CREATED_ACCOUNT' => 'Kreirana je nova kompanija',
  'LBL_CREATED_CALL' => 'Evidentiran je novi poziv',
  'LBL_CREATED_CONTACT' => 'Kreiran je novi kontakt',
  'LBL_CREATED_MEETING' => 'Kreiran je novi sastanak',
  'LBL_CREATED_OPPORTUNITY' => 'Kreirana nova prodajna prilika',
  'LBL_DATE_MODIFIED' => 'Datum izmene',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakti',
  'LBL_DEPARTMENT' => 'Odeljenje:',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Opisne informacije',
  'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direktni izveštaj',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenta',
  'LBL_DO_NOT_CALL' => 'Ne zovi:',
  'LBL_DUPLICATE' => 'Mogući dupli kontakti',
  'LBL_EMAIL_ADDRESS' => 'Email adresa:',
  'LBL_EMAIL_OPT_OUT' => 'Email odjava:',
  'LBL_EMPTY_VCARD' => 'Molim odaberite fajl elektronske vizitkarte',
  'LBL_EXISTING_ACCOUNT' => 'Korišćena je postojeća kompanija',
  'LBL_EXISTING_CONTACT' => 'Korišćen je postojeći kontakt',
  'LBL_EXISTING_OPPORTUNITY' => 'Korišćena postojeća prodajna prilika',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID broj dodeljenog korisnika',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ime dodeljenog korisnika',
  'LBL_EXPORT_CREATED_BY' => 'ID broj osobe koja je kreirala',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'ID korisnika koji je promenio',
  'LBL_EXPORT_PHONE_HOME' => 'Kućni telefon:',
  'LBL_EXPORT_PHONE_MOBILE' => 'Mobilni telefon',
  'LBL_FAX_PHONE' => 'Faks:',
  'LBL_FIRST_NAME' => 'Ime:',
  'LBL_FULL_NAME' => 'Puno ime:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
  'LBL_HOMEPAGE_TITLE' => 'Moji kontakti',
  'LBL_HOME_PHONE' => 'Kućni telefon:',
  'LBL_ID' => 'ID broj:',
  'LBL_IMPORT_VCARD' => 'Uvezi digitalnu vizitkartu',
  'LBL_IMPORT_VCARDTEXT' => 'Automatski kreiraj novi kontakt uvoženjem digitalne vizit karte sa vašeg sistema.',
  'LBL_INVALID_EMAIL' => 'Nevažeći Email:',
  'LBL_INVITEE' => 'Direktni izveštaj',
  'LBL_LANG_PREF_TOOLTIP' => 'Korisnički interfejs portala za pordšku je obrađen u odabranom jeziku',
  'LBL_LAST_NAME' => 'Prezime:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
  'LBL_LEAD_SOURCE' => 'Izvor informacije o potencijalnom klijentu:',
  'LBL_LIST_ACCEPT_STATUS' => 'Prihvati status',
  'LBL_LIST_ACCOUNT_NAME' => 'Naziv kompanije',
  'LBL_LIST_CITY' => 'Grad',
  'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
  'LBL_LIST_CONTACT_ROLE' => 'Uloga',
  'LBL_LIST_EMAIL_ADDRESS' => 'Email',
  'LBL_LIST_FIRST_NAME' => 'Ime',
  'LBL_LIST_FORM_TITLE' => 'Lista kontakata',
  'LBL_LIST_LAST_NAME' => 'Prezime',
  'LBL_LIST_NAME' => 'Ime',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Drugi Email',
  'LBL_LIST_PHONE' => 'Poslovni telefon',
  'LBL_LIST_STATE' => 'Opština',
  'LBL_LIST_TITLE' => 'Titula',
  'LBL_MOBILE_PHONE' => 'Mob. telefon:',
  'LBL_MODIFIED' => 'Promenio:',
  'LBL_MODULE_NAME' => 'Kontakti',
  'LBL_MODULE_NAME_SINGULAR' => 'Kontakt',
  'LBL_MODULE_TITLE' => 'Kontakti: Početna strana',
  'LBL_NAME' => 'Ime:',
  'LBL_NEW_FORM_TITLE' => 'Novi kontakt',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nova portal lozinka:',
  'LBL_NOTE_SUBJECT' => 'Naslov beleške',
  'LBL_OFFICE_PHONE' => 'Poslovni telefon:',
  'LBL_OLD_PORTAL_PASSWORD' => 'Stara lozinka na Portalu',
  'LBL_OPPORTUNITIES' => 'Prodajne prilike',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Prodajne prilike',
  'LBL_OPPORTUNITY_ROLE' => 'Uloga prodajne prilike',
  'LBL_OPPORTUNITY_ROLE_ID' => 'ID broj uloge prodajne prilike:',
  'LBL_OPP_NAME' => 'Ime prodajne prilike:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Drugi Email:',
  'LBL_OTHER_PHONE' => 'Drugi telefon:',
  'LBL_PASSWORD_CHANGE_FORM_TITLE' => 'Promena lozinke',
  'LBL_PHONE' => 'Telefon:',
  'LBL_PHONE_FAX' => 'Telefax',
  'LBL_PHONE_HOME' => 'Kućni telefon',
  'LBL_PHONE_MOBILE' => 'Mobilni telefon',
  'LBL_PHONE_OTHER' => 'Drugi telefon',
  'LBL_PHONE_WORK' => 'Poslovni telefon',
  'LBL_PORTAL_ACTIVE' => 'Portal aktiviran:',
  'LBL_PORTAL_APP' => 'Aplikacija portala:',
  'LBL_PORTAL_INFORMATION' => 'Informacija o portalu',
  'LBL_PORTAL_NAME' => 'Korisničko ime na portalu:',
  'LBL_PORTAL_PASSWORD' => 'Portal lozinka',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Portal lozinka je postavljena:',
  'LBL_POSTAL_CODE' => 'Poštanski broj:',
  'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Država primarne adrese:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Pokrajina primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulica br.2 primarne adrese:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulica br.3 primarne adrese:',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Proizvodi',
  'LBL_PRODUCTS_TITLE' => 'Proizvodi',
  'LBL_PROJECTS_RESOURCES' => 'Resursi projekta',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
  'LBL_PROSPECT_LIST' => 'Lista ciljeva',
  'LBL_QUOTES_BILL_TO' => 'Ponude naplatiti',
  'LBL_QUOTES_SHIP_TO' => 'Ponude dostaviti',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Ponude',
  'LBL_RELATED_CONTACTS_TITLE' => 'Povezani konstkti',
  'LBL_REPORTS_TO' => 'Nadređeni:',
  'LBL_REPORTS_TO_ID' => 'ID nadređenog:',
  'LBL_RESOURCE_NAME' => 'Ime resursa',
  'LBL_SALUTATION' => 'Pozdrav',
  'LBL_SAVE_CONTACT' => 'Sačuvaj kontakt',
  'LBL_SEARCH_FORM_TITLE' => 'Pretraga kontakata',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Izaberi označene kontakte',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Izaberi označene kontakte',
  'LBL_STATE' => 'Opština:',
  'LBL_STREET' => 'Ulica',
  'LBL_SYNC_CONTACT' => 'Sinhronizuj sa Outlook&reg;:',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Kampanje (Cilj):',
  'LBL_TEAM_ID' => 'ID broj tima',
  'LBL_TITLE' => 'Titula:',
  'LBL_USER_PASSWORD' => 'Lozinka:',
  'LBL_USER_SYNC' => 'Sinhronizacija korisnika',
  'LBL_VCARD' => 'Digitalna vizitkarta',
  'LBL_VIEW_FORM_TITLE' => 'Pregled kontakta',
  'LNK_CONTACT_LIST' => 'Pregled kontakata',
  'LNK_CONTACT_REPORTS' => 'Pregled izveštaja sa kontaktima',
  'LNK_IMPORT_CONTACTS' => 'Uvezi kontakte',
  'LNK_IMPORT_VCARD' => 'Kreiraj kontakt iz digitalne vizit karte',
  'LNK_NEW_ACCOUNT' => 'Kreiraj kompaniju',
  'LNK_NEW_APPOINTMENT' => 'Zakaži sastanak',
  'LNK_NEW_CALL' => 'Evidentiraj poziv',
  'LNK_NEW_CASE' => 'Kreiraj slučaj',
  'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
  'LNK_NEW_EMAIL' => 'Arhiviraj Email',
  'LNK_NEW_MEETING' => 'Zakaži sastanak',
  'LNK_NEW_NOTE' => 'Kreiraj belešku ili prilog',
  'LNK_NEW_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
  'LNK_NEW_TASK' => 'Kreiraj zadatak',
  'LNK_SELECT_ACCOUNT' => 'Izaberi Kompaniju',
  'MSG_DUPLICATE' => 'Zapis kontakta koji želite da kreirate možda je duplikat zapisa kontakta koji već postoji. Zapisi kontakta koji sadrže slična imena izlistani su ispod.<br>Kliknite Sačuvaj da bi nastavili sa kreiranjem ovog novog kontakta, ili odaberite postojeći kontakt sa liste ispod.',
  'MSG_SHOW_DUPLICATES' => 'Zapis kontakta koji želite da kreirate možda je duplikat zapisa kontakta koji već postoji. Zapisi kontakta koji sadrže slična imena izlistani su ispod.<br>Kliknite Sačuvaj da bi nastavili sa kreiranjem ovog novog kontakta, ili kliknite Otkaži da bi se vratili u modul bez kreiranja kontakta.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopiraj alternativnu adresu u primarnu adresu',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopiraj primarnu u alternativnu adresu',
  'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Za kreiranje prodajne prilike neophodna je kompanija.\\n Molim, kreirajte novu kompaniju ili odaberite neku postojeću.',
  'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovog kontakta iz slučaja?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovaj zapis kao direktni izveštaj?',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
);

