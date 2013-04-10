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
  'ERR_REPORT_INVALID_SUBJECT' => 'L&#39;informe no és vàlid',
  'ERR_REPORT_INVALID' => 'La definició de l&#39;informe "{0}" conté camps no vàlids: {1}',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_TOTAL' => 'Total',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_SUM' => 'SUM',
  'LBL_AVG' => 'AVG',
  'LBL_MAX' => 'MAX',
  'LBL_MIN' => 'MIN',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'CHART_COUNT_PATTERN' => '{count} {module} where {group_label} is {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} of {currency_symbol}{numerical_value}{thousands} where {group_label} is {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} is {numerical_value}{thousands} where {group_label} is {group_text}',
  'LBL_1X2' => '1 X 2',
  'LBL_2X1' => '2 X 1',
  'LBL_MODULE_NAME' => 'Informes',
  'LBL_REPORT_MODULES' => 'Mòduls d´Informes',
  'LBL_REPORT_ATT_MODULES' => 'Mòduls',
  'LBL_REPORT_EXPAND_ALL' => 'Expandir Tot',
  'LBL_REPORT_COLLAPSE_ALL' => 'Contraure Tot',
  'LBL_REPORT_SHOW_CHART' => 'Mostrar Gràfic',
  'LBL_REPORT_HIDE_CHART' => 'Amagar Gráfic',
  'LBL_REPORT_SHOW_DETAILS' => 'Mostrar Detalls',
  'LBL_REPORT_HIDE_DETAILS' => 'Amagar Detalls',
  'LNK_NEW_CONTACT' => 'Nou Contacte',
  'LNK_NEW_ACCOUNT' => 'Nou Compte',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunitat',
  'LNK_NEW_CASE' => 'Nou Cas',
  'LNK_NEW_NOTE' => 'Nova Nota o Arxiu Adjunt',
  'LNK_NEW_CALL' => 'Programar Trucada',
  'LNK_NEW_EMAIL' => 'Arxivar Correu',
  'LNK_NEW_MEETING' => 'Programar Reunió',
  'LNK_NEW_TASK' => 'Nova Tasca',
  'LBL_REPORTS' => 'Informes',
  'LBL_TITLE' => 'Títol',
  'LBL_UNTITLED' => 'sense títol',
  'LBL_MODULE' => 'Mòdul',
  'LBL_ACCOUNTS' => 'Comptes',
  'LBL_OPPORTUNITIES' => 'Oportunitats',
  'LBL_CONTACTS' => 'Contactes',
  'LBL_LEADS' => 'Clients Potencials',
  'LBL_ACCOUNT' => 'Compte',
  'LBL_OPPORTUNITY' => 'Oportunitat',
  'LBL_CONTACT' => 'Contacte',
  'LBL_LEAD' => 'Client Potencial',
  'LBL_DELETE_ERROR' => 'Només els propietaris d´un informe o els Administradors poden eliminar informes.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Informe en Files i Columnes',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Crea un informe tabular que conté els valors dels camps de visualització seleccionats per als registres que coincideixen amb els criteris especificats.',
  'LBL_SUMMATION_REPORT' => 'Informe de Totals',
  'LBL_SUMMATION_REPORT_DESC' => 'Crea un informe tabular que proveeix dades calculades per als registres que coincideixen amb els criteris especificats. Les dades també poden ser presentades en forma de gràfic.',
  'LBL_MATRIX_REPORT' => 'Informe Matricial',
  'LBL_MATRIX_REPORT_DESC' => 'Crea un informe de totals que mostra els resultats en format de quadrícula i agrupats per un màxim de tres camps.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Crea un informe de totals que mostra dades addicionals relacionades amb els registres del resultat.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Informe de Totals amb Detalls',
  'LBL_SHOW_QUERY' => 'Mostrar Consulta',
  'LBL_DO_ROUND' => 'Arrodonir Números per sobre de 100.000',
  'LBL_SAVE_AS' => 'Guardar Com',
  'LBL_FILTERS' => 'Filtres',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'No hi ha dades suficients per mostrar el gràfic',
  'LBL_RUNTIME_FILTERS' => 'Filtres en Temps d´execució',
  'LBL_VIEWER_RUNTIME_HELP' => 'Especifiqui els valors per als <b>Filtres en Temps d´execució</b> i faci clic al botó <b>Aplicar Filtros</b> per executar de nou l´informe.',
  'LBL_REPORT_RESULTS' => 'Resultats',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Faci clic en Executar Informe per veure els resultats.',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'El filtres del informe han estat modificats desde l´última execució.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'L´informe ha estat modificat desde l´última execució.',
  'LBL_ADD_NEW_FILTER' => 'Afegir Nou Filtre',
  'LBL_DISPLAY_COLUMNS' => 'Mostrar Columnes',
  'LBL_SUMMARY_COLUMNS' => 'Columnes de Totals',
  'LBL_HIDE_COLUMNS' => 'Amagar Columnes',
  'LBL_SUBMIT_QUERY' => 'Enviar Consulta',
  'LBL_QUERY' => 'Consulta',
  'LBL_CHANGE' => 'Canviar',
  'LBL_REMOVE' => 'Treure',
  'LBL_CREATE_CUSTOM_REPORT' => 'Assistent d´Informes',
  'LBL_CREATE_REPORT' => 'Nou Informe',
  'LBL_MY_SAVED_REPORTS' => 'Els Meus Informes',
  'LBL_MY_TEAMS_REPORTS' => 'Els Informes del meu equip',
  'LBL_REPORT_NAME' => 'Nom d´Informe',
  'LBL_REPORT_ATT_NAME' => 'Nom',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Objectiu de Trimestre Actual',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Tots els Informes Publicats',
  'LBL_DETAILED_FORECAST' => 'Objectiu Detallat',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Llista de Partners',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Llista de Comptes Clients',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Llista de trucades ordenada per l´última data de contacte realitzat',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Oportunitats per Presa de Contacte',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Acords Tancats en el Trimestre Actual',
  'LBL_VIEW' => 'veure',
  'LBL_DELETE' => 'Esborrar',
  'LBL_PUBLISH' => 'publicar',
  'LBL_UN_PUBLISH' => 'retirar',
  'LBL_SCHEDULE_REPORT' => 'Planificar Informe',
  'LBL_START_DATE' => 'Data d´Inici',
  'LBL_END_DATE' => 'Data de Fi',
  'LBL_FILTER_DATE_RANGE_START' => 'Des de',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Fins',
  'LBL_SELECT_RECORD' => 'Seleccionar Registre',
  'LBL_TIME_INTERVAL' => 'Interval de Temps',
  'LBL_SCHEDULE_ACTIVE' => 'Actiu',
  'LBL_SCHEDULE_EMAIL' => 'Planificar Informe',
  'LBL_NEXT_RUN' => 'Correu Següent',
  'LBL_UPDATE_SCHEDULE' => 'Actualitzar Planificació',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'No té informes emmagatzemats.',
  'LBL_MY_REPORTS' => 'Els Meus Informes',
  'LBL_ACCOUNT_REPORTS' => 'Informes de Comptes',
  'LBL_CONTACT_REPORTS' => 'Informes de Contactes',
  'LBL_OPPORTUNITY_REPORTS' => 'Informes d´Oportunitats',
  'LBL_CASE_REPORTS' => 'Informes de Casos',
  'LBL_BUG_REPORTS' => 'Informes d´Incidències',
  'LBL_LEAD_REPORTS' => 'Informes de Clients Potencials',
  'LBL_QUOTE_REPORTS' => 'Informes de Pressuposts',
  'LBL_CALL_REPORTS' => 'Informes de Trucades',
  'LBL_MEETING_REPORTS' => 'Informes de Reunions',
  'LBL_TASK_REPORTS' => 'Informes de Tasques',
  'LBL_EMAIL_REPORTS' => 'Informes de Correu',
  'LBL_ALL_REPORTS' => 'Tots els Informes',
  'LBL_ACTIVITIES_REPORTS' => 'Inforne d&#39;Activitat',
  'LBL_CHART_TYPE' => 'Tipus de Gràfic',
  'LBL_NO_REPORTS' => 'Sense resultats.',
  'LBL_SAVED_SEARCH' => 'Recercas i Dissenys Guardats',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Informes de Comptes del Meu Equip',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Informes d´Oportunitats del Meu Equip',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Informes de Contactes del Meu Equip',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Informes de Casos del Meu Equip',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Informes d´Incidències del Meu Equip',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Informes de Clients Potencials del Meu Equip',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Informes de Pressuposts del Meu Equip',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Informes de Trucades del Meu Equip',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Informes de Reunions del Meu Equip',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Informes de Tasques del Meu Equip',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Informes de Correus del Meu Equip',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Informes de Predicciones del Meu Equip',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Informes de Públic Objectiu del Meu Equip',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Informes de Contractes del Meu Equip',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Informes de Tasques de Projecte del Meu Equip',
  'LBL_MY_ACCOUNT_REPORTS' => 'Informes dels Meus Comptes',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Informes de Les Meves Oportunitas',
  'LBL_MY_CONTACT_REPORTS' => 'Informes dels Meus Contactes',
  'LBL_MY_CASE_REPORTS' => 'Informes dels Meu Casos',
  'LBL_MY_BUG_REPORTS' => 'Informes de Les Meves Incidències',
  'LBL_MY_LEAD_REPORTS' => 'Informes dels Meus Clients Potencials',
  'LBL_MY_QUOTE_REPORTS' => 'Informes dels Meus Pressuposts',
  'LBL_MY_CALL_REPORTS' => 'Informes de Les Meves Trucades',
  'LBL_MY_MEETING_REPORTS' => 'Informes de Les Meves Reunions',
  'LBL_MY_TASK_REPORTS' => 'Informes de Les Meves Tasques',
  'LBL_MY_EMAIL_REPORTS' => 'Informes dels Meus Correus',
  'LBL_MY_FORECAST_REPORTS' => 'Informes dels Meus Objectius',
  'LBL_EXPORT' => 'Exportar',
  'LBL_OF' => 'de',
  'LBL_SUCCESS_REPORT' => 'ÈXIT: L´informe',
  'LBL_MY_PROSPECT_REPORTS' => 'Els Meus informes de Públic Objectiu',
  'LBL_WAS_SAVED' => 'ha estat guardat',
  'LBL_FAILURE_REPORT' => 'ERROR: L´informe',
  'LBL_WAS_NOT_SAVED' => 'no ha estat guardat',
  'LBL_EQUALS' => 'Igual a',
  'LBL_LESS_THAN' => 'Menor Que',
  'LBL_GREATER_THAN' => 'Major Que',
  'LBL_DOES_NOT_EQUAL' => 'Diferent De',
  'LBL_ON' => 'En',
  'LBL_BEFORE' => 'Abans',
  'LBL_AFTER' => 'Desprès',
  'LBL_IS_BETWEEN' => 'Està Entre',
  'LBL_NOT_ON' => 'No Està A',
  'LBL_CONTAINS' => 'Conté',
  'LBL_DOES_NOT_CONTAIN' => 'No conté',
  'LBL_STARTS_WITH' => 'Comença Amb',
  'LBL_ENDS_WITH' => 'Acaba Amb',
  'LBL_TO_PDF' => 'Guardar com PDF',
  'LBL_IS' => 'Es',
  'LBL_IS_NOT' => 'No és',
  'LBL_ONE_OF' => 'Un De',
  'LBL_IS_NOT_ONE_OF' => 'No és un',
  'LBL_ANY' => 'Qaulsevol',
  'LBL_ALL' => 'Al menys',
  'LBL_EXACT' => 'Exacte',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Impossible realitzar la publicació. Ja hi ha un altre Informe publicat amb el mateix nom.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Impossible retirar un Informe propietat d´un altre usuari. Vostè posseeix un altre Informe amb el mateix nom.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Informes de Comptes Publicats',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Informes de Contactes Publicats',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Informes d´Oportunitats Publicats',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Informes de Casos Publicats',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Informes d´Incidències Publicades',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Informes de Clients Potencials Publicats',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Informes de Pressuposts Publicats',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Informes de Trucades Publicades',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Informes de Reunions Publicades',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Informes de Tasques Publicades',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Informes de Correus Publicats',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Informes d´Objectius Publicats',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Informes de Públic Objectiu Publicats',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'No hi ha informes d´aquest tipus.',
  'LBL_AND' => 'i',
  'LBL_MISSING_FIELDS' => 'Camps Requerits',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Seleccioni lmenys una columna de visualització.',
  'LBL_MISSING_INPUT_VALUE' => 'valor d´entrada requerit.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'Falta un segon valor d´entrada requerit.',
  'LBL_NOTHING_WAS_SELECTED' => 'no hi ha rés seleccionat.',
  'LBL_MODULE_NAME_SAVED' => 'Nom de Mòdul',
  'LBL_REPORT_TYPE' => 'Tipus d´Informe',
  'LBL_REPORT_LAST_RUN_DATE' => 'Accedit En',
  'LBL_REPORT__ATT_TYPE' => 'Tipus',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Aplicar Filtres',
  'LBL_REPORT_RESET_FILTER' => 'Restablir',
  'LBL_DISPLAY_SUMMARIES' => 'Mostrar Resumen',
  'LBL_HIDE_SUMMARIES' => 'Amagar Resumen',
  'LBL_RUN_BUTTON_TITLE' => 'Executar Informe [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Executar Informe',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Com el Tipus Original',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Com Files i Columnes',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Com Totals',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Com Totals amb Detalls',
  'LBL_SUMMATION_WITH_DETAILS' => 'Totals amb Detalls',
  'LBL_DUPLICATE_AS_MATRIX' => 'Matricial',
  'LBL_SAVE_RUN' => 'Guardar i Executar',
  'LBL_WITH_DETAILS' => 'Amb detalls',
  'LBL_CHOOSE_COLUMNS' => 'Seleccioni columnes a visualitzar',
  'LBL_CHOOSE_SUMMARIES' => 'Seleccioni resúmens a visualitzar',
  'LBL_GROUP_BY' => 'Agrupar Per',
  'LBL_ADD_COLUMN' => 'Agregar Columna',
  'LBL_GRAND_TOTAL' => 'Totals',
  'LBL_SEARCH_FORM_TITLE' => 'Llista d´Informes',
  'LBL_FORECAST_REPORTS' => 'Informes d´Objectius',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Informes de Tasques dels Meus Projectes',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Informes de Tasques de Projectes Publicats',
  'LBL_PROJECT_TASK_REPORTS' => 'Informes de Tasques de Projectes',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Quantitat Mitja Ponderada',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Quantitat Total Ponderada',
  'ERR_SELECT_COLUMN' => 'Si us plau, seleccioni primer una columna de visualització.',
  'LBL_BY_MONTH' => 'Per Mes',
  'LBL_BY_YEAR' => 'Per Any',
  'LBL_BY_QUARTER' => 'Per Trimestre',
  'LBL_COUNT' => 'Compte',
  'LBL_MONTH' => 'Mes',
  'LBL_YEAR' => 'Any',
  'LBL_QUARTER' => 'Trimestre',
  'LBL_YESTERDAY' => 'Ahir',
  'LBL_TODAY' => 'Avui',
  'LBL_TOMORROW' => 'Demà',
  'LBL_LAST_WEEK' => 'Última Setmana',
  'LBL_NEXT_WEEK' => 'Setmana Següent',
  'LBL_LAST_7_DAYS' => '7 Dies Anteriors',
  'LBL_NEXT_7_DAYS' => '7 Dies Següents',
  'LBL_LAST_MONTH' => 'Últim Mes',
  'LBL_NEXT_MONTH' => 'Mes Següent',
  'LBL_LAST_QUARTER' => 'Últim Trimestre',
  'LBL_THIS_QUARTER' => 'Aquest Trimestre',
  'LBL_LAST_YEAR' => 'Últim Any',
  'LBL_NEXT_YEAR' => 'Any Següent',
  'LBL_SELECT' => 'Seleccionar',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Almenys una columna de resum.',
  'LBL_SHOW_DETAILS' => 'Mostrar Detalls',
  'LBL_1_REPORT_ON' => '1. Informe Sobre',
  'LBL_2_FILTER' => '2. Filtres',
  'LBL_3_GROUP' => '3. Agrupacions',
  'LBL_3_CHOOSE' => '3. Seleccioni les Columnes de Visualització',
  'LBL_4_CHOOSE' => '4. Seleccioni les Columnes de Visualització',
  'LBL_5_CHART_OPTIONS' => '5. Opcions de Gràfics',
  'LBL_LABEL' => 'Etiqueta',
  'LBL_THIS_MONTH' => 'Aquest Mes',
  'LBL_LAST_30_DAYS' => 'Últims 30 Dies',
  'LBL_NEXT_30_DAYS' => '30 Dies Següents',
  'LBL_THIS_YEAR' => 'Aquest Any',
  'LBL_LIST_FORM_TITLE' => 'Informes',
  'LBL_PROSPECT_REPORTS' => 'Informes de Públic Objectiu',
  'LBL_IS_EMPTY' => 'Està Buit',
  'LBL_IS_NOT_EMPTY' => 'No està Buit',
  'LBL_CHART_DESCRIPTION' => 'Descripció',
  'LBL_USE_COLUMN_FOR' => 'Series de Dades',
  'LBL_RELATED' => 'Relacionat:',
  'LBL_OWNER' => 'Assignat a',
  'LBL_TEAM' => 'Equip',
  'LBL_TOTAL_IS' => 'El total es',
  'LBL_WITH_A_TOTAL' => 'amb un total de',
  'LBL_WITH_AN_AVERAGE' => 'amb una mitja de',
  'LBL_WHOSE_MAXIMUM' => 'el màxim del qual',
  'LBL_WHOSE_MINIMUM' => 'el mínim del qual',
  'LBL_ROLLOVER' => 'Mogui el cursor damunt una barra per a més detall.',
  'LBL_ROLLOVER_WEDGE' => 'Mogui el cursor damunt una secció per a més detall.',
  'LBL_ROLLOVER_SQUARE' => 'Mueva el cursor damunt un recuadre per més detall.',
  'LBL_NO_CHART' => 'Sense Gràfic',
  'LBL_HORIZ_BAR' => 'Barra Horizontal',
  'LBL_VERT_BAR' => 'Barra Vertical',
  'LBL_PIE' => 'Cercle',
  'LBL_LINE' => 'Línia',
  'LBL_FUNNEL' => 'Embut',
  'LBL_GROUP_BY_REQUIRED' => 'Per dibuixar el gràfic es requereix un informe d´agregació amb una columna d´agrupació (group by) i una altra de totalització (summary)',
  'MSG_NO_PERMISSIONS' => 'No té permisos per editar aquest informe',
  'LBL_NONE' => '-- cap --',
  'LBL_NONE_STRING' => 'Cap',
  'LBL_DATE_BASED_FILTERS' => '<i>Els filtres de dates són relatius a la zona horària de l´usuari <b>Assignat a</b> al informe</i>',
  'LBL_CONTRACT_REPORTS' => 'Informes de Contractes',
  'LBL_MY_CONTRACT_REPORTS' => 'Els Meus Informes de Contractes',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Informes de Contractes Publicats',
  'LBL_HELLO' => 'Hola',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Adjunt es troba un informe autogenerat enviat a vostè des de l´aplicació Sugar. Aquest informe es va crear el',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'i es va guardar amb el nom "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Si desitja canviar la configuració dels seus informes, iniciï la sessió en l´aplicació Sugar i faci clic a la pestanya "Informes".nn',
  'LBL_LIST_PUBLISHED' => 'Publicat',
  'LBL_THIS_WEEK' => 'Aquesta Setmana',
  'LBL_NEXT_QUARTER' => 'Següent Trimestre',
  'LBL_ADD_RELATE' => 'Afegir Relacionat',
  'LBL_DEL_THIS' => 'Treure',
  'LBL_ALERT_CANT_ADD' => 'No pot afegir un mòdul relacionat fins que no seleccioni una taula sobre la qual relacionar-lo.n﻿Seleccioni un mòdul de la llista desplegable situada a l´esquerra del botó &#39;Afegir Relacionat&#39; que acaba de prémer.',
  'LBL_BY_DAY' => 'Al Dia',
  'LBL_DAY' => 'Dia',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Mòduls Relacionats Opcionals',
  'LBL_ANY_ONE_OF' => 'Qualsevol De',
  'LBL_RELATED_TABLE_BLANK' => 'Si us plau, seleccioni un mòdul al qual relacionar-lo.',
  'LBL_FILTER_CONDITIONS' => 'Seleccioni Operador',
  'LBL_FILTER_OR' => 'O',
  'LBL_FILTER_AND' => 'I',
  'LBL_FILTERS_END' => 'dels següents filtres.',
  'LBL_FAVORITE_REPORTS' => 'Veure Els Meus Informes Favorits',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Els Meus Informes Favorits',
  'LBL_ADDED_FAVORITES' => 'informes afegits a Els Meus Informes Favorits.',
  'LBL_REMOVED_FAVORITES' => 'informes trets de Els Meus Informes Favorits.',
  'LBL_MODULE_TITLE' => 'Informes: Inici',
  'LBL_MODULE_VIEWER_TITLE' => 'Visor d´Informes: Inici',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Visor d´Informes',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Planificar',
  'LBL_FAVORITES_TITLE' => 'Informes: Els Meus Informes Favorits',
  'LBL_TABLE_CHANGED' => 'La llista de mòduls ha estat modificada, si us plau comprovi els criteris introduïts a la pestanya de Grup.',
  'LBL_OPTIONAL_HELP' => 'Seleccioni aquest quadre per mostrar els registres del mòdul principal fins i tot si el mòdul relacionat no existeix. Quan aquesta opció no estigui seleccionada, els registres del mòdul principal només es mostraran quan hi hagi un o més registres del mòdul relacionat.',
  'LBL_RUNTIME_HELP' => 'Seleccioni aquesta opció per permetre que els usuaris puguin canviar el valor del filtre abans d´executar l´informe.',
  'LBL_USER_EMPTY_HELP' => 'Per tal de veure els registres que no estan assignats a cap usuari, marqui la casella del &#39;Mòduls opcionals relacionats&#39; en el pas de &#39;Detalls Informes&#39;, a més d&#39;utilitzar el &#39;està buit&#39; opció pel filtre d&#39;usuari assignat. Això mostrarà tots els registres que no estan relacionats amb cap usuari.',
  'DEFAULT_REPORT_TITLE_1' => 'Objectiu Trimestre Actual',
  'DEFAULT_REPORT_TITLE_2' => 'Objectiu Detallado',
  'DEFAULT_REPORT_TITLE_3' => 'Llista de Comptes Partner',
  'DEFAULT_REPORT_TITLE_4' => 'Llista de Comptes Client',
  'DEFAULT_REPORT_TITLE_5' => 'Llista de Trucades Ordenades per Última Data de Contacte',
  'DEFAULT_REPORT_TITLE_6' => 'Oportunitats per Presa de Contacte',
  'DEFAULT_REPORT_TITLE_7' => 'Casos Oberts per Usuari per Estat',
  'DEFAULT_REPORT_TITLE_8' => 'Casos Oberts per Mes per Usuari',
  'DEFAULT_REPORT_TITLE_9' => 'Casos Oberts per Prioritat per Usuari',
  'DEFAULT_REPORT_TITLE_10' => 'Nous Casos per Mes',
  'DEFAULT_REPORT_TITLE_11' => 'Gràfic per Tipus per Equip',
  'DEFAULT_REPORT_TITLE_12' => 'Gràfic per Equip per Usuari',
  'DEFAULT_REPORT_TITLE_17' => 'Oportunitats Guanyades per Presa de Contacte',
  'DEFAULT_REPORT_TITLE_13' => 'Tasques per Equip per Usuari',
  'DEFAULT_REPORT_TITLE_14' => 'Trucades per Equip per Usuari',
  'DEFAULT_REPORT_TITLE_15' => 'Reunions per Equip per Usuari',
  'DEFAULT_REPORT_TITLE_16' => 'Comptes per Tipus per Industria',
  'DEFAULT_REPORT_TITLE_18' => 'Clients Potencials per Presa de Contacte',
  'DEFAULT_REPORT_TITLE_19' => 'Les Meves Mètriques d´Us (Avui)',
  'DEFAULT_REPORT_TITLE_20' => 'Les Meves Mètriques d´Us (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_21' => 'Les Meves Mètriques d´Us (Últims 30 Dies)',
  'DEFAULT_REPORT_TITLE_22' => 'El Meu Us de Mòduls (Avui)',
  'DEFAULT_REPORT_TITLE_23' => 'El Meu Us de Mòduls (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_24' => 'El Meu Us de Mòduls (Últims 30 Dies)',
  'DEFAULT_REPORT_TITLE_25' => 'Métriques d´Us d´Usuaris (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_26' => 'Métriques d´Us d´Usuaris (Últims 30 Dies)',
  'DEFAULT_REPORT_TITLE_27' => 'Mòduls Usats Per els Meus Informes Directes (Últims 30 Dies)',
  'DEFAULT_REPORT_TITLE_28' => 'Consultes Lentes',
  'DEFAULT_REPORT_TITLE_29' => 'Els Meus Registres Modificats (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_31' => 'Els Meus Registres Recenment Modificats (Últims 30 Dies)',
  'DEFAULT_REPORT_TITLE_32' => 'Registres Modificats Per els Meus Informes Directes (Últims 30 Dies)',
  'DEFAULT_REPORT_TITLE_41' => 'Sesions d´Usuari Actives (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_42' => 'Resumen de Sesions d´Usuari (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_43' => 'Propietaris de Comptes Clients',
  'DEFAULT_REPORT_TITLE_44' => 'Els meus nous Comptes Clients',
  'DEFAULT_REPORT_TITLE_45' => 'Oportunitats Per Etapa de Vendes',
  'DEFAULT_REPORT_TITLE_46' => 'Oportunitats Per Tipus',
  'DEFAULT_REPORT_TITLE_47' => 'Trucades Obertes',
  'DEFAULT_REPORT_TITLE_48' => 'Reunions Obertes',
  'DEFAULT_REPORT_TITLE_49' => 'Tasques Obertes',
  'DEFAULT_REPORT_TITLE_50' => 'Oportunitats Guanyades Per Compte',
  'DEFAULT_REPORT_TITLE_51' => 'Oportunitats Guanyades Per Usuari',
  'DEFAULT_REPORT_TITLE_52' => 'Totes les Oportunitats Obertes',
  'DEFAULT_REPORT_TITLE_53' => 'Totes les Oportunitats Tancades',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat A:',
  'LBL_CONTENT' => 'Contingut',
  'LBL_IS_PUBLISHED' => 'Está Publicat',
  'LBL_FAVORITE' => 'Favorit',
  'LBL_SCHEDULE_TYPE' => 'Tipus de Planificació',
  'LBL_NO_ACCESS' => 'No pot accedir a aquest informe perquè no té els permisos adequats.',
  'LBL_SELECT_REPORT_TYPE' => 'Faci clic en una icona per seleccionar un Tipus d´Informe.',
  'LBL_SELECT_MODULE' => 'Seleccioni el Mòdul',
  'LBL_NEXT' => 'Següent >',
  'LBL_PREVIOUS' => '< Enrera',
  'LBL_CANCEL' => 'Cancelar',
  'LBL_AVAILABLE_FIELDS' => 'Camps Disponibles',
  'LBL_RELATED_MODULES' => 'Mòdulos Relacionats',
  'LBL_FIELD_NAME' => 'Nom del Cam',
  'LBL_RUN_TIME_LABEL' => 'Temps d´execució',
  'LBL_NO_IMAGE' => 'Sense Imatge',
  'LBL_BASIC_FILTERS' => 'Filtres Bàsics',
  'LBL_ADVANCED_FILTERS' => 'Filtres Avançats',
  'LBL_ADD_GROUP' => 'Afegir Grup de Filtres',
  'LBL_REMOVE_GROUP' => 'Treure Grup de Filtres',
  'LBL_FILTER' => 'Filtre',
  'LBL_ADD_FILTER_TO' => 'Afegir Filtre A',
  'LBL_COLUMN_NAME' => 'Nom de Columna',
  'LBL_OPTIONAL_MODULES' => 'Mòdulos Opcionals',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Seleccioni el Tipus d´Informe',
  'LBL_SELECT_MODULE_BUTTON' => 'Faci clic en una icona per seleccionar un Mòdul.',
  'LBL_DEFINE_FILTERS' => 'Definir Filtres',
  'LBL_SELECT_GROUP_BY' => 'Definir Agrupacions',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Seleccionar Columnes de Visualització',
  'LBL_REPORT_DETAILS' => 'Detalls del Informe',
  'LBL_REPORT_GROUP_BY' => 'Agrupació',
  'LBL_CLEAR' => 'Esborrar',
  'LBL_CHART_OPTIONS' => 'Opcions de Gràfics',
  'LBL_CHART_DATA_HELP' => 'Mostri la Totalització que es mostrarà en el gràfic',
  'LBL_DO_ROUND_HELP' => 'Els números per sobre de 100.000 apareixeeran arrodonits amb els gràfics. Per exemple: 350.000 figurarà com 350K.',
  'LBL_COMBO_TYPE_AHEAD' => 'Cercar un Nom de Camp',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Un Informe Matricial no pot tenir més de tres agrupacions.',
  'LBL_MINIMUM_2_GROUP_BY' => 'Un Informe Matricial te que tenir almenys dos agrupacions.',
  'LBL_MATRIX_LAYOUT' => 'Opcions de Presentació:',
  'LBL_REMOVE_BTN_HELP' => 'Faci clic per treure aquest Grup de Filtres.',
  'LBL_ADD_BTN_HELP' => 'Faci clic per afegir un nou Grup de Filtres.  Empri els grups per aplicar lògica I/O a conjunts de filtres.',
  'LBL_ORDER_BY' => 'Ordenació',
  'LBL_ASCENDING' => 'Ascendent',
  'LBL_DESCENDING' => 'Descendent',
  'LBL_TYPE' => 'Tipus',
  'LBL_SUBJECT' => 'Assumpte',
  'LBL_STATUS' => 'Estat',
  'LBL_DATE' => 'Data d&#39;Inici',
  'LBL_NO_FILTERS' => 'no te filtres.',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'El següent camp en aquest informe ja no és vàlida:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Si us plau, editar l&#39;informe i assegureu-vos que els altres paràmetres segueixen sent pertinents.',
  'LBL_CURRENT_USER' => 'Usuari Actual',
  'LBL_MODULE_CHANGE_PROMPT' => 'El canvi del mòdul seleccionat tindrà com a resultat la pèrdua de filtres, columnes de visualització, etc. Està segur que desitja continuar?',
  'LBL_CANNOT_BE_EMPTY' => 'no pot estar buit.',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Tots els camps usables en un informe del mòdul seleccionat en <B>Mòduls Relacionats</B> apareixen aquí. Seleccioni un camp.',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'El mòdul principal i tots els seus mòduls relacionats apareixen aquí. Seleccioni un mòdul.',
  'LBL_PREVIEW_REPORT' => 'Vista Preliminar',
  'LBL_FILTERS_HELP_DESC' => '<b>Passos per a la Definició de Filtres:</b><br/><br/>1) Faci clic en un Mòdul del plafó <b>Mòduls Relacionats</b> que desitja utilitzar per definir el filtre. Per defecte, el mòdul principal (el node arrel en l&#39;arbre) està seleccionat. <Br/><br/> Pot seleccionar un mòdul relacionat (node fill en l&#39;arbre) fent clic en el mòdul. Pot expandir el node per veure mòduls addicionals relacionats amb el mòdul. El mòdul que seleccioni determina els camps utilitzables en un informe que apareixen al plafó <b>Camps Disponibles</b>.<br/><br/> 2) Faci clic en un Camp del plafó <b>Camps Disponibles</b> per agregar-lo als filtres. També pot buscar un camp usant el quadre de text del panel.<br/><br/> Després de seleccionar un conjunt de camps del mòdul seleccionat al plafó <b>Mòdulos Relacionats</b>, pot seleccionar un mòdul diferent del qual vulgui seleccionar camps addicionals per ser utilitzats com a filtre.<br/><br/> 3) Seleccioni <b>Y</b> o <b>O</b> per establir si tots els filtres o qualsevol d&#39;ells, respectivament, s&#39;utilitzaran per obtenir els resultats del informe.<br/><br/> 4) [Opcional] Faci clic en <b>Afegir Grup de Filtres</b> per crear grups de filtres. Pot tenir tants grups de filtres i tants filtres en un grup com desitgi per crear filtres anidats.<br/><br/> 5) [Opcional] Seleccioni l&#39;opció de Temps d&#39;execució d&#39;un Filtre per permetre que els usuaris utilitzin el filtre per personalitzar els resultats dels informes mentre veuen l&#39;informe.',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Pasos per a la Definició d´Agrupacions:</b><br></br>1) Faci clic en un Mòdul del plafó <b>Mòduls Relacionats</b> que desitja utilitzar per agrupar registres al seu informe. Per defecte, el mòdul principal (el node arrel en l&#39;arbre) està seleccionat. <Br/><br/> Pot seleccionar un mòdul relacionat (node fill en l&#39;arbre) fent clic en el mòdul. Pot expandir el node per veure mòduls addicionals relacionats amb el mòdul. El mòdul que seleccioni determina els camps utilitzables en un informe que apareixen al plafó <b>Camps Disponibles</b>.<br/><br/> 2) Faci clic en un Camp del plafó <b>Camps Disponibles</b> per agrupar els registres del seu informe per aquest camp. També pot buscar un camp usant el quadre de text del panel.<br/><br/> Després de seleccionar un conjunt de camps del mòdul seleccionat al plafó <b>Mòduls Relacionats</b>, pot seleccionar un mòdul diferent del qual vulgui seleccionar camps addicionals per ser utilitzats com a agrupació de registres. Tanmateix, l&#39;informe es tornarà menys llegible segons vagi utilitzant més camps per a l&#39;agrupación.<br/><br/> Pot canviar l&#39;ordre dels camps arrossegant-los i deixant-los anar sobre la posició desitjada. Els canvis d&#39;ordre afectaran a la manera en la qual els resultats són mostrats.<br/><br/> Per Informes Matriciales, pot utilitzar un màxim de tres camps per agrupar els registres.',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Pasos per a la Selecció de Columnes de Visualització:</b><br/><br/>1) Faci clic en un Mòdul del plafó <b>Mòduls Relacionats</b> que desitja utilitzar per mostrar dades al seu informe. Per defecte, el mòdul principal (el node arrel en l&#39;arbre) que va escollir al pas &#39;Seleccionar Mòdul&#39; està seleccionat. <Br/><br/> Pot seleccionar un mòdul relacionat (node fill en l&#39;arbre) fent clic en el mòdul. Pot expandir el node per veure mòduls addicionals relacionats amb el mòdul. El mòdul que seleccioni determina els camps utilitzables en un informe que apareixen al plafó <b>Camps Disponibles</b>.<br/><br/> 2) Faci clic en un Camp del plafó <b>Camps Disponibles</b> per mostrar el camp de dades en els registres del seu informe. També pot buscar un camp usant el quadre de text del panel.<br/><br/> Després de seleccionar un conjunt de camps del mòdul seleccionat al plafó <b>Mòduls Relacionats</b>, pot seleccionar un mòdul diferent del qual vulgui seleccionar camps addicionals. Pot seleccionar tants camps com desitgi, però tingui en compte que el temps de generació de l&#39;informe i la seva llegibilitat poden degradar-se si afegeix més camps dels necessaris en el informe.<br/><br/> Pot canviar l&#39;ordre dels camps arrossegant-los i deixant-los anar sobre la posició desitjada. Els canvis d&#39;ordre afectaran a l&#39;ordre en el qual les columnes apareixen en els resultats de l&#39;informe.',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Pasos per a la Selecció de Totals de Visualització:</b><br/><br/>1) Faci clic en un Mòdul del plafó <b>Mòduls Relacionats</b> que desitja utilitzar per als totals del seu informe. Per defecte, el mòdul principal (el node arrel en l&#39;arbre) està seleccionat. <Br/><br/> Pot seleccionar un mòdul relacionat (node fill en l&#39;arbre) fent clic en el mòdul. Pot expandir el node per veure mòduls addicionals relacionats amb el mòdul. El mòdul que seleccioni determina els camps utilitzables en un informe que apareixen al plafó < b>Campos Disponibles</b>.<br/><br/ > 2) Faci clic en un Camp del plafó <b>Camps Disponibles</b> per seleccionar els totals del seu informe. També pot buscar un camp usant el quadre de text del panel.<br/><br/> Després de seleccionar un conjunt de camps del mòdul seleccionat al plafó <b>Mòduls Relacionats</b>, pot seleccionar un mòdul diferent del qual vulgui seleccionar camps addicionals per als totals del seu informe.<br/><br/> Als Informes Matricials, pot seleccionar més d&#39;un camp per mostrar múltiples valors en una sóla cel·la del seu informe.',
  'LBL_DCE_LICENSING_REPORT' => 'Informe de Llicència',
  'DEFAULT_REPORT_TITLE_33' => 'Us de Plantilles',
  'DEFAULT_REPORT_TITLE_34' => 'Sesions Màximes Per Dia (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_35' => 'Peticions Per Dia (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_36' => 'Inicis de sessió Per Dia (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_37' => 'Consultes Per Dia (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_38' => 'Arxius Per Dia (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_39' => 'Usuaris Per Dia (Últims 7 Dies)',
  'DEFAULT_REPORT_TITLE_40' => 'Us de Memòria Per Dia (Últims 7 Dies)',
  'LBL_ALT_SHOW' => 'Mostrar',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Aquest informe conté les dades de les columna amb el següents ordres:',
  'LBL_HELP' => 'Ajuda',
  'LBL_EDITLAYOUT' => 'Editar disseny',
  'LBL_SORT' => 'Ordenar',
  'LBL_EDIT' => 'Editar',
  'LBL_SHOW' => 'Mostrar',
  'LBL_MORE' => 'més',
  'LBL_LEFT' => 'Esquerra',
  'LBL_RIGHT' => 'Dreta',
  'LBL_DOWN' => 'Abaix',
  'LBL_UP' => 'Adalt',
  'LBL_ALT_INFORMATION' => 'Informació',
  'LBL_REPORT_GRAND_TOTAL' => 'Totals',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Cada hora',
    21600 => 'Cada 6 hores',
    43200 => 'Cada 12 hores',
    86400 => 'Diari',
    604800 => 'Setmanal',
    1209600 => 'Cada 2 setmanes',
    2419200 => 'Cada 4 setmanes',
  ),
);

