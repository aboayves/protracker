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
  'ERR_FORECAST_AMOUNT' => 'Comite suma este necesar si trebuie introdus un numar.',
  'LBL_ACTIONS' => 'Actiuni',
  'LBL_AMOUNT' => 'Suma:',
  'LBL_BASE_RATE' => 'Rata de bază a',
  'LBL_BEST_CASE' => 'Cel mai bun caz:',
  'LBL_BEST_CASE_BASE_CURRENCY' => 'cel mai bun caz, cea mai buna moneda de schimb',
  'LBL_BEST_CASE_VALUE' => 'Cel mai bun',
  'LBL_CANCEL' => 'Anulare',
  'LBL_CHANGES_BY' => 'Modificări de {0}',
  'LBL_CHART_ADJUSTED' => '(Adaptată)',
  'LBL_CHART_AMOUNT' => 'Suma:',
  'LBL_CHART_FOOTER' => 'Istoric previziuni<br />Contingente vs Suma Previziuni vs Valoare oportunitati inchise',
  'LBL_CHART_FORECAST_FOR' => 'Previziuni pentru',
  'LBL_CHART_INCLUDED' => 'Incluse',
  'LBL_CHART_NOT_INCLUDED' => 'nu sunt incluse',
  'LBL_CHART_OPTIONS' => 'Optiuni Diagrama',
  'LBL_CHART_TITLE' => 'Intrebare vs. Comise vs. Actual',
  'LBL_CHART_TYPE' => 'Tip',
  'LBL_CLOSED' => 'Inchis',
  'LBL_COMMITTED_HISTORY_1_SHOWN' => '{0} {1}',
  'LBL_COMMITTED_HISTORY_2_SHOWN' => '{0} {1}, {2}',
  'LBL_COMMITTED_HISTORY_3_SHOWN' => '{0} {1}, {2}, and {3}',
  'LBL_COMMITTED_HISTORY_BEST_CHANGED' => 'best {0} {1} to {2}',
  'LBL_COMMITTED_HISTORY_BEST_SAME' => 'cel mai bun a rămas aceeași',
  'LBL_COMMITTED_HISTORY_LIKELY_CHANGED' => 'likely {0} {1} to {2}',
  'LBL_COMMITTED_HISTORY_LIKELY_SAME' => 'probabil a rămas aceeași',
  'LBL_COMMITTED_HISTORY_SETUP_FORECAST' => 'Setari previziuni',
  'LBL_COMMITTED_HISTORY_UPDATED_FORECAST' => 'actualizare prognoza',
  'LBL_COMMITTED_HISTORY_WORST_CHANGED' => 'worst {0} {1} to {2}',
  'LBL_COMMITTED_HISTORY_WORST_SAME' => 'cel mai rau a rămas aceeași',
  'LBL_COMMITTED_MONTHS_AGO' => '{0} luni în urmă de la {1}',
  'LBL_COMMITTED_THIS_MONTH' => 'Aceasta luna pe {0}',
  'LBL_COMMIT_AMOUNT' => 'Suma Valorilor comise',
  'LBL_COMMIT_HEADER' => 'Comite previziunie',
  'LBL_COMMIT_MESSAGE' => 'Vrei sa comiti aceste sume?',
  'LBL_COMMIT_NOTE' => 'Introdu sumele pe care ai vrea sa le comiti pentru perioada de timp selectata:',
  'LBL_COMMIT_STAGE' => 'Consemna Etapa',
  'LBL_COPY' => 'Copie valori',
  'LBL_COPY_AMOUNT' => 'Suma totala:',
  'LBL_COPY_FROM' => 'Copie valoare din:',
  'LBL_COPY_WEIGH_AMOUNT' => 'Suma total cantarita',
  'LBL_CREATED_BY' => 'Creeat de',
  'LBL_CURRENCY' => 'Moneda',
  'LBL_CURRENCY_ID' => 'Moneda Id',
  'LBL_CURRENCY_RATE' => 'rata moneda',
  'LBL_DATA_SET' => 'Set Date:',
  'LBL_DATE_CLOSED' => 'Data la care se asteapta sa se inchida',
  'LBL_DATE_COMMITTED' => 'Data comiterii',
  'LBL_DATE_ENTERED' => 'Data intrarii',
  'LBL_DATE_MODIFIED' => 'Data Modificata',
  'LBL_DELETED' => 'Stearsa',
  'LBL_DISTANCE_ABOVE_BEST_FROM_CLOSED' => 'Best above Closed',
  'LBL_DISTANCE_ABOVE_BEST_FROM_QUOTA' => 'Best above Quota',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_CLOSED' => 'Likely above Closed',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_QUOTA' => 'Probabil cota de mai sus',
  'LBL_DISTANCE_ABOVE_WORST_FROM_CLOSED' => 'Worst above Closed',
  'LBL_DISTANCE_ABOVE_WORST_FROM_QUOTA' => 'Worst above Quota',
  'LBL_DISTANCE_LEFT_BEST_TO_CLOSED' => 'Best below Closed',
  'LBL_DISTANCE_LEFT_BEST_TO_QUOTA' => 'Best below Quota',
  'LBL_DISTANCE_LEFT_LIKELY_TO_CLOSED' => 'Likely below Closed',
  'LBL_DISTANCE_LEFT_LIKELY_TO_QUOTA' => 'Likely below Quota',
  'LBL_DISTANCE_LEFT_WORST_TO_CLOSED' => 'Worst below Closed',
  'LBL_DISTANCE_LEFT_WORST_TO_QUOTA' => 'Worst below Quota',
  'LBL_DOWN' => 'Jos',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunitatile previziunilor',
  'LBL_DV_FORECAST_PERIOD' => 'Durata de timp a previziunii',
  'LBL_DV_FORECAST_ROLLUP' => 'Rollup previziuni',
  'LBL_DV_HEADER' => 'Previziuni: Foaie de lucru',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Ultima suma a comiterii:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Data ultimei comiteri:',
  'LBL_DV_MY_FORECASTS' => 'Previziunile mele',
  'LBL_DV_MY_TEAM' => 'Previziunile echipei mele',
  'LBL_DV_TIMEPERIOD' => 'Perioada de timp:',
  'LBL_DV_TIMEPERIODS' => 'Perioade de timp:',
  'LBL_DV_TIMPERIOD_DATES' => 'Gama de timp:',
  'LBL_EDITABLE_INVALID' => 'Valoare nevalidă pentru {0}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Valoarea trebuie să fie între {0} și {1}',
  'LBL_ERROR_NOT_MANAGER' => 'Eroare: ghidul de {0} nu are acces manager de a solicita prognozele pentru {1}',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Oportunități așteptate',
  'LBL_EXPORT_CSV' => 'Export CSV',
  'LBL_FC_START_DATE' => 'Data Inceput:',
  'LBL_FC_USER' => 'Programeaza pentru:',
  'LBL_FDR_ADJ_AMOUNT' => 'Suma ajustata',
  'LBL_FDR_COMMIT' => 'Suma comisa',
  'LBL_FDR_C_BEST_CASE' => 'Cel mai bun caz',
  'LBL_FDR_C_LIKELY_CASE' => 'Cauza probabilă',
  'LBL_FDR_C_WORST_CASE' => 'Cel mai rau caz',
  'LBL_FDR_DATE_COMMIT' => 'Data comisa',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunitati in previziuni:',
  'LBL_FDR_USER_NAME' => 'Raport Direct',
  'LBL_FDR_WEIGH' => 'Suma ponderata a oportunitatilor:',
  'LBL_FDR_WK_BEST_CASE' => 'Estimativ cel mai bun caz',
  'LBL_FDR_WK_LIKELY_CASE' => 'Estimativ cauza probabila',
  'LBL_FDR_WK_WORST_CASE' => 'Estimativ cel mai rau caz',
  'LBL_FILTERS' => 'Filtre',
  'LBL_FMT_DIRECT_FORECAST' => '(Direct)',
  'LBL_FMT_ROLLUP_FORECAST' => '(Rollup)',
  'LBL_FORECAST' => 'Previziuni',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_1' => 'Bine ati venit la setari previziuni',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_2' => 'Acest asistent vă va ghida prin procesul de setare pas-cu-pas a modulului Prognozele. Valorile implicite sunt furnizate pentru fiecare secțiune, astfel încât veți fi pe cale de dvs. în cel mai scurt timp!',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_3' => 'Puteți face, de asemenea, configurarea manuală făcând clic pe butonul',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES' => 'Ranges',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_SCENARIOS' => 'Scenarios',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => 'Perioade de timp:',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_VARIABLES' => 'Variables',
  'LBL_FORECASTS_CONFIG_RANGES_EXCLUDE_INFO' => 'Toate oportunitatile vor fi excluse',
  'LBL_FORECASTS_CONFIG_SHOW_BINARY_RANGES_DESCRIPTION' => 'Oportunitatile pot fi incluse sau excluse din previziuni',
  'LBL_FORECASTS_CONFIG_START_DATE' => 'Alege data inceperii noului an fiscal',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD' => 'Alege tipul perioadei de timp',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_DESC' => 'Configurați Perioadele de timp utilizat pentru prognoză.',
  'LBL_FORECASTS_CONFIG_TITLE' => 'setari previziuni',
  'LBL_FORECASTS_CONFIG_USER_SPLASH' => 'Prognozarea nu a fost configurat încă. Vă rugăm să contactați administratorul de sistem',
  'LBL_FORECASTS_CONFIG_VARIABLES' => 'Variables',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST' => 'cel mai bun',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY' => 'ca',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST' => 'cel mai rau',
  'LBL_FORECAST_FOR' => 'Foaie de lucru de previziuni pentru:',
  'LBL_FORECAST_HISTORY' => 'Istoric Previziuni',
  'LBL_FORECAST_HISTORY_TITLE' => 'Istoric',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Cel mai bun caz',
  'LBL_FORECAST_OPP_COMMIT' => 'Cauza probabilă',
  'LBL_FORECAST_OPP_COUNT' => 'Oportunitati',
  'LBL_FORECAST_OPP_WEIGH' => 'Suma ponderata',
  'LBL_FORECAST_OPP_WORST' => 'Cel mai rau caz',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Oportunitate Pipeline Numar',
  'LBL_FORECAST_SETTINGS' => 'Setari ( defined in ./include/language/ro_RO.lang.php )',
  'LBL_FORECAST_TIME_ID' => 'ID perioada de timp',
  'LBL_FORECAST_TITLE' => 'Previziuni',
  'LBL_FORECAST_TYPE' => 'Tip previziune',
  'LBL_FORECAST_USER' => 'Utilizator',
  'LBL_FS_CASCADE' => 'Cascada?',
  'LBL_FS_CREATED_BY' => 'Creeat de',
  'LBL_FS_DATE_ENTERED' => 'Data intrarii',
  'LBL_FS_DATE_MODIFIED' => 'Data Modificata',
  'LBL_FS_DELETED' => 'Stearsa',
  'LBL_FS_END_DATE' => 'Data Sfarsit',
  'LBL_FS_FORECAST_FOR' => 'Programeaza pentru:',
  'LBL_FS_FORECAST_START_DATE' => 'Data de inceput a previziunilor',
  'LBL_FS_MODULE_NAME' => 'Program previziuni:',
  'LBL_FS_START_DATE' => 'Data Inceput:',
  'LBL_FS_STATUS' => 'Statut',
  'LBL_FS_TIMEPERIOD' => 'Perioada de timp:',
  'LBL_FS_TIMEPERIOD_ID' => 'ID perioada de timp',
  'LBL_FS_USER_ID' => 'Identitate Utilizator',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Suma comisa pentru %',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Previziuni comise',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Valoarea oportunitatilor inchise in %',
  'LBL_GRAPH_OPPS_LEGEND' => 'Oportunitati inchise',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Contingente pentru %',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Contingente',
  'LBL_GRAPH_TITLE' => 'Istoric Previziuni',
  'LBL_GROUP_BY' => 'Grupat dupa',
  'LBL_INCLUDED_TOTAL' => 'inclus total',
  'LBL_LESS' => 'mai putin',
  'LBL_LIKELY_CASE' => 'Cauza probabila:',
  'LBL_LIKELY_CASE_BASE_CURRENCY' => 'Probabil scenariul de bază valută',
  'LBL_LIKELY_CASE_VALUE' => 'Probabil (adaptată)',
  'LBL_LIST_FORM_TITLE' => 'Previziuni comise:',
  'LBL_LOADING' => 'Incarcare...Va rugam asteptati ( defined in ./modules/Administration/language/ro_RO.lang.php )',
  'LBL_LOADING_COMMIT_HISTORY' => 'Loading Commit History...',
  'LBL_LV_COMMIT' => 'Suma comisa',
  'LBL_LV_COMMIT_DATE' => 'Data comiterii',
  'LBL_LV_OPPORTUNITIES' => 'Oportunitati',
  'LBL_LV_TIMPERIOD' => 'Perioada de timp',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Data Sfarsit',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Data Inceput:',
  'LBL_LV_TYPE' => 'Tip previziune',
  'LBL_LV_WEIGH' => 'Suma ponderata',
  'LBL_MODIFIED_USER_ID' => 'Modificata de',
  'LBL_MODULE_NAME' => 'Previziuni',
  'LBL_MODULE_NAME_SINGULAR' => 'Previziuni',
  'LBL_MODULE_TITLE' => 'Previziuni',
  'LBL_MORE' => 'Mai mult...',
  'LBL_MY_OPPORTUNITIES' => 'Oportunitati',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Perioade de timp non active pentru previziuni',
  'LBL_OVERALL_TOTAL' => 'În general total',
  'LBL_OW_ACCOUNTNAME' => 'Conturi',
  'LBL_OW_DESCRIPTION' => 'Descriere',
  'LBL_OW_MODULE_TITLE' => 'Foaie de lucru a oportunitatii',
  'LBL_OW_NEXT_STEP' => 'Urmatorul Pas:',
  'LBL_OW_OPPORTUNITIES' => 'Oportunitati',
  'LBL_OW_PROBABILITY' => 'Probabilitate',
  'LBL_OW_REVENUE' => 'Cantitatea:',
  'LBL_OW_TYPE' => 'Tip',
  'LBL_OW_WEIGHTED' => 'Suma ponderata',
  'LBL_PIPELINE_SIZE' => 'Dimensiune conductă',
  'LBL_PREVIOUS_COMMIT' => 'Ultimul Commit',
  'LBL_PRODUCT_ID' => 'Identitate produs:',
  'LBL_PROJECTED' => 'proiectat',
  'LBL_QC_COMMIT_BEST_CASE' => 'Suma comisa(cel mai bun caz):',
  'LBL_QC_COMMIT_BUTTON' => 'Creeare',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Suma comisa(caz probabil):',
  'LBL_QC_COMMIT_VALUE' => 'Suma savarsita:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Suma comisa(cel mai rau caz):',
  'LBL_QC_DIRECT_FORECAST' => 'Previziunile mele directe:',
  'LBL_QC_HEADER_DELIM' => 'Spre:',
  'LBL_QC_LAST_BEST_CASE' => 'Suma ultimei comiteri(cel mai bun caz):',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Suma ultimei comiteri:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Data ultimei comiteri:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Suma ultimei comiteri(cazul prbabil):',
  'LBL_QC_LAST_WORST_CASE' => 'Suma ultimei comiteri(cel mai rau caz):',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Numaratoare oportunitati:',
  'LBL_QC_ROLLUP_FORECAST' => 'Previziunile grupului:',
  'LBL_QC_ROLL_BEST_VALUE' => 'Rollup Suma comisa(cel mai bun caz):',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Rollup Suma comisa',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Rollup Suma comisa(caz probabil):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Rollup Suma comisa(cel mai rau caz):',
  'LBL_QC_TIME_PERIOD' => 'Perioada de timp:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Previziunile mele',
  'LBL_QC_WEIGHT_VALUE' => 'Suma ponderata:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Foaie de lucru',
  'LBL_QUOTA' => 'Contingente',
  'LBL_QUOTA_ID' => 'Quota ID',
  'LBL_REPORTS_TO_USER_NAME' => 'Raporteaza lui',
  'LBL_RESET_CHECK' => 'Toate foile de lucru pentru perioada te timp selectata si utilizatorii logati vor fi stersi.Continuati?',
  'LBL_RESET_WOKSHEET' => 'Reseteaza Foaie de lucru',
  'LBL_REVENUE' => 'Venituri',
  'LBL_SALES_STAGE' => 'Stadiu',
  'LBL_SAVE_DRAFT' => 'Salvare schita',
  'LBL_SAVE_WOKSHEET' => 'Salveaza Foaie de lucru',
  'LBL_SEARCH' => 'Selecteaza',
  'LBL_SEARCH_LABEL' => 'Selecteaza',
  'LBL_SHOW_CHART' => 'Vezi diagrama',
  'LBL_SVFS_CASCADE' => 'Cascada pana la rapoarte?',
  'LBL_SVFS_FORECASTDATE' => 'Programeaza data de inceput',
  'LBL_SVFS_HEADER' => 'Program previziuni:',
  'LBL_SVFS_STATUS' => 'Statut',
  'LBL_SVFS_USER' => 'Pentru',
  'LBL_TIMEPERIOD_NAME' => 'Perioada de timp:',
  'LBL_TOTAL' => 'Total',
  'LBL_TOTAL_VALUE' => 'Total:',
  'LBL_TP_QUOTA' => 'Contingente:',
  'LBL_TREE_PARENT' => 'Membru al',
  'LBL_UNAUTH_FORECASTS' => 'Accesul neautorizat la setările de zile.',
  'LBL_UP' => 'sus',
  'LBL_USER_NAME' => 'Nume Utilizator',
  'LBL_VERSION' => 'Versiune',
  'LBL_WK_REVISION' => 'Revizie',
  'LBL_WK_VERSION' => 'Versiune',
  'LBL_WORKSHEET_AMOUNT' => 'Sumele estimate totale',
  'LBL_WORKSHEET_COMMIT_ALERT' => 'V-ați angajat opinia dumneavoastră Rep, dar nu Manager vizualiza, prognoza echipa nu va fi angajate până la punctul dumneavoastră de vedere Manager este angajat.',
  'LBL_WORKSHEET_COMMIT_CONFIRM' => 'Ați salvat modificările care nu au fost comise în vedere rep. Modificările salvate nu vor fi vizibile în vizualizarea Manager până când comite.<br />Apăsați OK pentru a comite modificările și a continua, sau Anulare nu a comite modificările și a continua.',
  'LBL_WORKSHEET_EXPORT_CONFIRM' => 'Vă rugăm să rețineți faptul că numai datele salvate sau angajate pot fi exportate. Faceți clic pe OK pentru a continua exportator, sau faceți clic pe Revocare pentru a reveni la foaia de lucru.',
  'LBL_WORKSHEET_ID' => 'Worksheet ID',
  'LBL_WORKSHEET_SAVE_CONFIRM' => 'Aveți modificări nesalvate în foaia de lucru. Apăsați OK pentru a salva aceste ca un proiect și de a continua sau pe Anulare pentru a renunța aceste schimbări și a continua.',
  'LBL_WORKSHEET_SAVE_CONFIRM_UNLOAD' => 'Aveți modificări nesalvate în foaia de lucru.',
  'LBL_WORST_CASE' => 'Cel mai rau caz:',
  'LBL_WORST_CASE_BASE_CURRENCY' => 'Cel mai rau caz, valuta',
  'LBL_WORST_CASE_VALUE' => 'Cel mai rau(Adaptat)',
  'LB_FS_BEST_CASE' => 'Cel mai bun caz',
  'LB_FS_KEY' => 'ID',
  'LB_FS_LIKELY_CASE' => 'Cauza probabilă',
  'LB_FS_WORST_CASE' => 'Cel mai rau caz',
  'LNK_FORECASTS_CONFIG_ADMIN_SPLASH_HERE' => 'aici',
  'LNK_FORECAST_LIST' => 'Vezi Istoric Previziuni',
  'LNK_NEW_OPPORTUNITY' => 'Creeaza Oportunitate',
  'LNK_NEW_TIMEPERIOD' => 'Creeaza Perioada de timp',
  'LNK_QUOTA' => 'Vezi contingente',
  'LNK_TIMEPERIOD_LIST' => 'Vezi Perioade de timp',
  'LNK_UPD_FORECAST' => 'Foaie de lucru pentru previziuni',
);

