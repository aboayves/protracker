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
  'ERR_DELETE_RECORD' => 'Per eliminare il lead deve essere specificato il numero del record.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Descrizione Azienda',
  'LBL_ACCOUNT_ID' => 'ID Azienda',
  'LBL_ACCOUNT_NAME' => 'Nome azienda:',
  'LBL_ACTIVITIES_COPY' => 'Copia Attività in',
  'LBL_ACTIVITIES_COPY_HELP' => 'Seleziona il record per il quale creare delle copie delle attività del Lead. Nuovi compiti, chiamate, riunioni, note verranno create per ciascuno dei record selezionati. Le email saranno collegate ai record selezionati.',
  'LBL_ACTIVITIES_MOVE' => 'Sposta Attività in',
  'LBL_ACTIVITIES_MOVE_HELP' => 'Seleziona il record al quale associare le attività del Lead. Compiti, Chiamate, Riunioni, Note e Email verranno associate ai record selezionati.',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
  'LBL_ADDRESS_INFORMATION' => 'Indirizzo',
  'LBL_ADD_BUSINESSCARD' => 'Aggiungi Business Card',
  'LBL_ALTERNATE_ADDRESS' => 'Altro Indirizzo:',
  'LBL_ALT_ADDRESS' => 'Altro Indirizzo:',
  'LBL_ALT_ADDRESS_CITY' => 'Alt Indirizzo, Comune',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Alt Indirizzo, Nazione',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt Indirizzo, CAP',
  'LBL_ALT_ADDRESS_STATE' => 'Alt Indirizzo, Provincia',
  'LBL_ALT_ADDRESS_STREET' => 'Alt Indirizzo, Via',
  'LBL_ALT_ADDRESS_STREET_2' => 'Alt Indirizzo, Via (2)',
  'LBL_ALT_ADDRESS_STREET_3' => 'Alt Indirizzo, Via (3)',
  'LBL_ANY_ADDRESS' => 'Altro Indirizzo:',
  'LBL_ANY_EMAIL' => 'Email alternativa:',
  'LBL_ANY_PHONE' => 'Telefono alternativo:',
  'LBL_ASSIGNED_TO_ID' => 'Utente Assegnato:',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_ASSISTANT' => 'Assistente',
  'LBL_ASSISTANT_PHONE' => 'Telefono Assistente',
  'LBL_BACKTOLEADS' => 'Torna ai Lead',
  'LBL_BIRTHDATE' => 'Data di nascita:',
  'LBL_BUSINESSCARD' => 'Converti Lead',
  'LBL_CAMPAIGN' => 'Campagna:',
  'LBL_CAMPAIGNS' => 'Campagne',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campagne',
  'LBL_CAMPAIGN_ID' => 'ID Campagna',
  'LBL_CAMPAIGN_LEAD' => 'Campagne',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagne',
  'LBL_CITY' => 'Comune:',
  'LBL_CLICK_TO_RETURN' => 'Ritornare al Portale',
  'LBL_CONTACT' => 'Lead:',
  'LBL_CONTACT_ID' => 'ID Contatto',
  'LBL_CONTACT_INFORMATION' => 'Informazioni Lead',
  'LBL_CONTACT_NAME' => 'Nome Lead:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Opportunità-Lead:',
  'LBL_CONTACT_ROLE' => 'Ruolo:',
  'LBL_CONVERTED' => 'Convertito',
  'LBL_CONVERTED_ACCOUNT' => 'Azienda Convertita:',
  'LBL_CONVERTED_CONTACT' => 'Contatto Convertito:',
  'LBL_CONVERTED_OPP' => 'Opportunità Convertita:',
  'LBL_CONVERTLEAD' => 'Converti Lead',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_CONVERTLEAD_TITLE' => 'Converti Lead [Alt+V]',
  'LBL_CONVERTLEAD_WARNING' => 'Attenzione: Lo stato del Lead che si sta per convertire è "Convertito". Il Contatto e/o l´Azienda potrebbe essere già stata creata da un Lead. Se desideri continuare con la conversione del Lead, clicca Salva. Per tornare indietro al Lead senza convertirlo, clicca Annulla.',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Possibile Contatto:',
  'LBL_CONVERT_ADD_MODULE' => 'Aggiungi Modulo',
  'LBL_CONVERT_COPY' => 'Copia Dati',
  'LBL_CONVERT_DELETE' => 'Cancella',
  'LBL_CONVERT_EDIT' => 'Modifica',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Modifica Converti Layout',
  'LBL_CONVERT_MODULE_NAME' => 'Modulo',
  'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Modulo',
  'LBL_CONVERT_REQUIRED' => 'Richiesto',
  'LBL_CONVERT_SELECT' => 'Permetti Selezione',
  'LBL_COPY_TIP' => 'Se selezionati, i campi dal lead saranno copiati in campi con lo stesso nome in record creati recentemente.',
  'LBL_COUNTRY' => 'Nazione:',
  'LBL_CREATE' => 'Crea',
  'LBL_CREATED' => 'Creato Da',
  'LBL_CREATED_ACCOUNT' => 'Creata una nuova azienda',
  'LBL_CREATED_CALL' => 'Creata una nuova chiamata',
  'LBL_CREATED_CONTACT' => 'Creato un nuovo contatto',
  'LBL_CREATED_ID' => 'Creato Da Id',
  'LBL_CREATED_MEETING' => 'Creata una nuova riunione',
  'LBL_CREATED_NEW' => 'Creato un nuovo',
  'LBL_CREATED_OPPORTUNITY' => 'Creata una nuova opportunità',
  'LBL_CREATED_USER' => 'Utente Creato',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lead',
  'LBL_DELETE_TIP' => 'Rimuovi questo modulo dal converti layout.',
  'LBL_DEPARTMENT' => 'Divisione:',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_DESCRIPTION_INFORMATION' => 'Descrizione',
  'LBL_DO_NOT_CALL' => 'Non chiamare:',
  'LBL_DUPLICATE' => 'Lead Simili',
  'LBL_EDITLAYOUT' => 'Modifica Layout',
  'LBL_EDIT_INLINE' => 'Modifica',
  'LBL_EDIT_TIP' => 'Modifica il converti layout per questo modulo.',
  'LBL_EMAIL_ADDRESS' => 'Indirizzo Email:',
  'LBL_EMAIL_OPT_OUT' => 'Non vuole ricevere email:',
  'LBL_ENTERDATE' => 'Inserisci Data',
  'LBL_EXISTING_ACCOUNT' => 'Usata un´azienda esistente',
  'LBL_EXISTING_CONTACT' => 'Usato un contatto esistente',
  'LBL_EXISTING_OPPORTUNITY' => 'Usata un´opportunità esistente',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Utente Assegnato',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome Utente Assegnato',
  'LBL_EXPORT_CREATED_BY' => 'Creato da ID',
  'LBL_EXPORT_EMAIL2' => 'Altro indirizzo email',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificato da ID',
  'LBL_EXPORT_PHONE_MOBILE' => 'Cellulare',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FIRST_NAME' => 'Nome:',
  'LBL_FULL_NAME' => 'Nome Completo:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Cronologia',
  'LBL_HOME_PHONE' => 'Telefono Casa:',
  'LBL_IMPORT_VCARD' => 'Importa vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Crea automaticamente un nuovo lead importando una vCard dal tuo computer.',
  'LBL_INVALID_EMAIL' => 'Email non valida:',
  'LBL_INVITEE' => 'Riporta a',
  'LBL_LAST_NAME' => 'Cognome:',
  'LBL_LEAD_SOURCE' => 'Fonte del lead:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrizione Fonte del Lead:',
  'LBL_LIST_ACCEPT_STATUS' => 'Accetta Stato',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utene Assegnato',
  'LBL_LIST_CONTACT_NAME' => 'Nome Lead',
  'LBL_LIST_CONTACT_ROLE' => 'Ruolo',
  'LBL_LIST_DATE_ENTERED' => 'Data Creazione',
  'LBL_LIST_EMAIL_ADDRESS' => 'Email',
  'LBL_LIST_FIRST_NAME' => 'Nome',
  'LBL_LIST_FORM_TITLE' => 'Elenco Lead',
  'LBL_LIST_LAST_NAME' => 'Cognome',
  'LBL_LIST_LEAD_SOURCE' => 'Fonte del Lead',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrizione Fonte del Lead',
  'LBL_LIST_MY_LEADS' => 'I miei Lead',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_PHONE' => 'Telefono',
  'LBL_LIST_REFERED_BY' => 'Riferito Da',
  'LBL_LIST_STATUS' => 'Stato',
  'LBL_LIST_TITLE' => 'Funzione',
  'LBL_LOADING' => 'Caricamento',
  'LBL_MESSAGE' => 'Si prega di inserire qui sotto le informazioni richieste. L&#39;informazione e/o azienda saranno creati in attesa di una vostra approvazione.',
  'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
  'LBL_MODIFIED' => 'Modificato Da',
  'LBL_MODIFIED_ID' => 'Modificato Da Id',
  'LBL_MODIFIED_USER' => 'Utente Modificato',
  'LBL_MODULE_NAME' => 'Lead',
  'LBL_MODULE_NAME_SINGULAR' => 'Lead',
  'LBL_MODULE_TIP' => 'Il modulo per creare un nuovo record in.',
  'LBL_MODULE_TITLE' => 'Lead: Home',
  'LBL_NAME' => 'Nome completo:',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Lead',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nuova Password del Portale:',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Nota: la pagina corrente Converti lead contiene campi custom. Quando personalizzi la pagina Converti Lead da Studio per la prima volta, dovrai aggiungere i campi custom al layout, a seconda delle necessità. I campi custom non appaiono automaticamente nel layout come accadeva precedentemente.',
  'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Valore Opportunità:',
  'LBL_OPPORTUNITY_ID' => 'ID Opportunità',
  'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità:',
  'LBL_OPP_NAME' => 'Nome Opportunità:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Altra Email:',
  'LBL_OTHER_PHONE' => 'Altro Telefono:',
  'LBL_PHONE' => 'Telefono:',
  'LBL_PHONE_FAX' => 'Fax',
  'LBL_PHONE_HOME' => 'Telefono Abitazione',
  'LBL_PHONE_MOBILE' => 'Cellulare',
  'LBL_PHONE_OTHER' => 'Altro Telefono',
  'LBL_PHONE_WORK' => 'Telefono Ufficio',
  'LBL_PORTAL_ACTIVE' => 'Portale Attivo:',
  'LBL_PORTAL_APP' => 'Applicazione Portale',
  'LBL_PORTAL_INFORMATION' => 'Informazioni Portale',
  'LBL_PORTAL_NAME' => 'Nome Portale:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'La password del portale è impostata:',
  'LBL_POSTAL_CODE' => 'CAP:',
  'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Comune',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Primario, Nazione',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Indirizzo Primario, Via (2)',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Indirizzo Primario, Via (3)',
  'LBL_PROSPECT_LIST' => 'Lista Obiettivo',
  'LBL_REFERED_BY' => 'Riferito Da:',
  'LBL_REGISTRATION' => 'Registrazione',
  'LBL_REPORTS_FROM' => 'Report Da:',
  'LBL_REPORTS_TO' => 'Dipende da:',
  'LBL_REPORTS_TO_ID' => 'Dipende da ID',
  'LBL_REQUIRED_TIP' => 'I moduli richiesti devono essere creati o selezionati prima che il lead possa essere convertito.',
  'LBL_SALUTATION' => 'Titolo',
  'LBL_SAVED' => 'Grazie per esserti registrato. La tua azienda sarà creata e qualcuno la contatterà al più presto.',
  'LBL_SEARCH_FORM_TITLE' => 'Ricerca Lead',
  'LBL_SELECT' => '<b>O</b> Seleziona',
  'LBL_SELECTION_TIP' => 'I moduli che hanno un campo collegato al modulo dei contatti possono essere selezionati piuttosto che creati durante il processo di conversione del lead.',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Scegli i Lead selezionati',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Scegli i Lead selezionati',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Ci scusiamo ma il server al momento non è disponibile, riprovare più tardi.',
  'LBL_STATE' => 'Provincia:',
  'LBL_STATUS' => 'Stato:',
  'LBL_STATUS_DESCRIPTION' => 'Descrizione Stato:',
  'LBL_STREET' => 'Indirizzo',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'LBL_TARGET_BUTTON_LABEL' => 'Obiettivi',
  'LBL_TARGET_BUTTON_TITLE' => 'Obiettivi',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Campagne di Successo',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Grazie per la sottoscrizione.',
  'LBL_TITLE' => 'Funzione:',
  'LBL_VCARD' => 'vCard',
  'LBL_VIEW_FORM_TITLE' => 'Visualizza Lead',
  'LBL_WEBSITE' => 'Sito Web',
  'LNK_IMPORT_LEADS' => 'Importa Lead',
  'LNK_IMPORT_VCARD' => 'Crea Lead da vCard',
  'LNK_LEAD_LIST' => 'Visualizza Lead',
  'LNK_LEAD_REPORTS' => 'Visualizza i Report dei Lead',
  'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
  'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_CASE' => 'Nuovo Reclamo',
  'LNK_NEW_CONTACT' => 'Nuovo Contatto',
  'LNK_NEW_LEAD' => 'Nuovo Lead',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_NOTE' => 'Nuova Nota',
  'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'LNK_SELECT_ACCOUNTS' => '<b>O</b> Seleziona Azienda',
  'LNK_SELECT_CONTACTS' => '<b>O</b> Selezionare Contatto',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copia indirizzo alternativo in quello primario',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copia indirizzo primario in quello alternativo',
  'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record ?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creazione di una opportunità richiede la presenza di un´azienda. Creare un´azienda o selezionarne una già esistente.',
  'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo lead dal reclamo?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record come rapporto diretto?',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
);

