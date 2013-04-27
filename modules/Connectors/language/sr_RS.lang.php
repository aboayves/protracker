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
  'ERROR_EMPTY_RECORD_ID' => 'Greška: Id broj zapisa nije naveden ili je prazan.',
  'ERROR_EMPTY_SOURCE_ID' => 'Greška: Id broj izvora nije naveden ili je prazan.',
  'ERROR_EMPTY_WRAPPER' => 'Greška: Ne možete da preuzimate omotač instance za izvor [{$ source_id}]',
  'ERROR_NO_ADDITIONAL_DETAIL' => 'Greška: Nisu pronađene dodatne informacije za zapis.',
  'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Greška: Ne postoje konektori mapirani na ovaj modulu.',
  'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Greška: Ne postoje polja modula koja su mapirana za prikazivanje rezultata. Molim kontaktirajte sistem administratora.',
  'ERROR_NO_FIELDS_MAPPED' => 'Greška: Morate mapirati bar jedno polje konektora polju modula za svaki upis modula.',
  'ERROR_NO_SEARCHDEFS_DEFINED' => 'Ni jedan modul nije omogućen za ovaj konektor. Izaberite modul za ovaj konektor na stranici Omogući konektore.',
  'ERROR_NO_SEARCHDEFS_MAPPED' => 'Greška: Nema omogućenih konektora koji imaju definisana polja za pretragu.',
  'ERROR_NO_SEARCHDEFS_MAPPING' => 'Greška: Ne postoje polja za pretraživanje definisana za modul i konektor. Molim kontaktirajte sistem administratora.',
  'ERROR_NO_SOURCEDEFS_FILE' => 'Greška: Nije pronađen sourcedefs.php fajl.',
  'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Greška: Nije naveden izvor odakle se preuzimaju podaci.',
  'ERROR_RECORD_NOT_SELECTED' => 'Greška: Molim izaberite zapis iz liste pre nastavljanja.',
  'LBL_ADDRCITY' => 'Grad',
  'LBL_ADDRCOUNTRY' => 'Država',
  'LBL_ADDRCOUNTRY_ID' => 'Id broj države',
  'LBL_ADDRSTATEPROV' => 'Opština:',
  'LBL_ADD_MODULE' => 'Dodaj',
  'LBL_ADMINISTRATION' => 'Administracija konektora',
  'LBL_ADMINISTRATION_MAIN' => 'Podešavanja konektora',
  'LBL_AVAILABLE' => 'Dostupno',
  'LBL_BACK' => '< Nazad',
  'LBL_CLOSE' => 'Zatvori',
  'LBL_COMPANY_ID' => 'Id broj kompanije',
  'LBL_CONFIRM_CONTINUE_SAVE' => 'Neka obavezna polja su ostavljena prazna. Nastavite da bi sačuvali promene?',
  'LBL_CONNECTOR' => 'Konektor',
  'LBL_CONNECTOR_FIELDS' => 'Polja konektora',
  'LBL_DATA' => 'Podaci',
  'LBL_DEFAULT' => 'Podrazumevano',
  'LBL_DELETE_MAPPING_ENTRY' => 'Da li ste sigurni da želite da obrišete ovaj unos?',
  'LBL_DISABLED' => 'Onemoguceno',
  'LBL_DUNS' => 'DUNS',
  'LBL_EMPTY_BEANS' => 'Nema rezultata za vaš kriterijum pretrage.',
  'LBL_ENABLED' => 'Omogućeno',
  'LBL_EXTERNAL' => 'Omogući korisnicima da kreiraju eksterne naloge za ovaj konektor.',
  'LBL_EXTERNAL_SET_PROPERTIES' => 'Da biste koristili ovaj konektor, potrebno je da podesite svojstva na strani Postavke podešavanja konektora.',
  'LBL_FINSALES' => 'Godišnja prodaja',
  'LBL_INFO_INLINE' => 'Informacije',
  'LBL_MARKET_CAP' => 'Tržišna kapitalizacija',
  'LBL_MERGE' => 'Spoji',
  'LBL_MODIFY_DISPLAY_DESC' => 'Izaberite koji moduli su omogućeni za svaki konektor.',
  'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Podešavanja konektora: Omogući konektore',
  'LBL_MODIFY_DISPLAY_TITLE' => 'Omogući konektore',
  'LBL_MODIFY_MAPPING_DESC' => 'Mapiraj polja konektora na polja modula kako bi se utvrdilo koji podaci konektora mogu da se vide i spoje sa zapisima modula.',
  'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Podešavanja konektora: Mapiraj polja konektora',
  'LBL_MODIFY_MAPPING_TITLE' => 'Mapiraj polja modula',
  'LBL_MODIFY_PROPERTIES_DESC' => 'Podesite vrednosti za svaki konektor, uključujući URL-ove i API ključeve.',
  'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Podešavanja konektora: Postavite podešavanja konektora',
  'LBL_MODIFY_PROPERTIES_TITLE' => 'Postavite podešavanja konektora',
  'LBL_MODIFY_SEARCH' => 'Pretraga',
  'LBL_MODIFY_SEARCH_DESC' => 'Odaberite polja konektora koja će se koristiti za pretragu u svakom modulu.',
  'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Podešavanja konektora: Upravljanje pretragom konektora',
  'LBL_MODIFY_SEARCH_TITLE' => 'Upravljanje pretragom konektora',
  'LBL_MODULE_FIELDS' => 'Polja modula',
  'LBL_MODULE_NAME' => 'Konektori',
  'LBL_MODULE_NAME_SINGULAR' => 'Konektor',
  'LBL_NO_PROPERTIES' => 'Ne postoje promenljive vrednosti za ovaj konektor.',
  'LBL_PARENT_DUNS' => 'Matični DUNS',
  'LBL_PREVIOUS' => '< Nazad',
  'LBL_QUOTE' => 'Ponuda',
  'LBL_RECNAME' => 'Naziv kompanije',
  'LBL_RESET_BUTTON_TITLE' => 'Resetuj [Alt+R]',
  'LBL_RESET_TO_DEFAULT' => 'Resetuj na podrazumevano',
  'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Da li ste sigurni da želite da resetujete na podrazumevanu konfiguraciju?',
  'LBL_RESULT_LIST' => 'Lista podataka',
  'LBL_RUN_WIZARD' => 'Pokreni čarobnjaka',
  'LBL_SAVE' => 'Sačuvaj',
  'LBL_SEARCHING_BUTTON_LABEL' => 'Tražim...',
  'LBL_SHOW_IN_LISTVIEW' => 'Prikazi u Spojenom pregledu u vidu liste',
  'LBL_SMART_COPY' => 'Pametno kopiranje',
  'LBL_STEP1' => 'Pretraga i pregled podataka',
  'LBL_STEP2' => 'Spoji zapise sa',
  'LBL_SUMMARY' => 'Sadržaj',
  'LBL_TEST_SOURCE' => 'Testiraj konektor',
  'LBL_TEST_SOURCE_FAILED' => 'Test neuspešan',
  'LBL_TEST_SOURCE_RUNNING' => 'Vršim test...',
  'LBL_TEST_SOURCE_SUCCESS' => 'Test uspešan',
  'LBL_TITLE' => 'Spajanje podataka',
  'LBL_ULTIMATE_PARENT_DUNS' => 'Krajnji matični DUNS',
);

