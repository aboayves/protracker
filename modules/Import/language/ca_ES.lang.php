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
  'LBL_ERROR_SYNC_USERS' => 'Valor incorrecte per sincronitzar amb Outlook:',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Directori cache d&#39;importació no es pot escriure.',
  'LBL_ERROR' => 'Error:',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_ACT' => 'Act!',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NOTES' => 'Notes:',
  'LBL_' => '',
  'LBL_ERROR_TAB' => 'Errors',
  'LBL_GOOD_FILE' => 'Arxiu d´Importació Llegit amb Èxit',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Registres saltats a causa d´error',
  'LBL_UPDATE_SUCCESSFULLY' => 'Registres creats o actualitzats amb èxit',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Registres creats amb èxit',
  'LBL_STEP_4_TITLE' => 'Pas 4: Importar Arxiu',
  'LBL_STEP_5_TITLE' => 'Pas 5: Veure Resultats',
  'LBL_CUSTOM_ENCLOSURE' => 'Arxius Clasificats Per:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'No ha estat possible realitzar la publicació. Ja hi ha un altre mapa d´Importació publicat amb el mateix nom.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'No ha estat possible treure la publicació d´un mapa el propietari del qual és d´un altre usuari. Vostè posseeix un mapa d´Importació amb el mateix nom.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'No s´ha configurat la Importació per a aquest tipus de mòdul',
  'LBL_IMPORT_TYPE' => 'Acció d´Importació',
  'LBL_IMPORT_BUTTON' => 'Crear Registres',
  'LBL_UPDATE_BUTTON' => 'Crear i Actualitzar Registres',
  'LBL_CREATE_BUTTON_HELP' => 'Utilitzeu aquesta opció per crear nous registres. Nota: Les files a l&#39;arxiu d&#39;importació conté valors que coincideixen els identificadors dels registres existents no s&#39;importaran si els valors s&#39;assignen en el camp ID.',
  'LBL_UPDATE_BUTTON_HELP' => 'Utilitzeu aquesta opció per actualitzar els registres existents. Les dades a l&#39;arxiu d&#39;importació que es compararà amb els registres existents sobre la base del ID de registre a l&#39;arxiu d&#39;importació.',
  'LBL_ERROR_INVALID_BOOL' => 'Valor no vàlid (te que 1 o 0)',
  'LBL_NO_ID' => 'ID Requerit',
  'LBL_PRE_CHECK_SKIPPED' => 'Comprobacions prèvies saltades',
  'LBL_IMPORT_ERROR' => 'Han Ocorregut Errors d´Importació',
  'LBL_NOLOCALE_NEEDED' => 'No és necessària cap conversió de localització',
  'LBL_FIELD_NAME' => 'Nom de Camp',
  'LBL_VALUE' => 'Valor',
  'LBL_ROW_NUMBER' => 'Número de Fila',
  'LBL_NONE' => 'Cap',
  'LBL_REQUIRED_VALUE' => 'Falta un valor requerit',
  'LBL_ID_EXISTS_ALREADY' => 'ID ja existeix aquesta taula',
  'LBL_ASSIGNED_USER' => 'Si l´usuari no existeix, feu servir l´usuari actual',
  'LBL_SHOW_HIDDEN' => 'Mostrar camps que no son normalmente importables',
  'LBL_UPDATE_RECORDS' => 'Actualitzar registres actuals en lloc d´importarlos (No se pot Desfer)',
  'LBL_TEST' => 'Probar Importació (sense guardar ni cambiar dades)',
  'LBL_TRUNCATE_TABLE' => 'Taula buida abans d´importació (borrar tots els registres)',
  'LBL_RELATED_ACCOUNTS' => 'No crear comptes relacionats',
  'LBL_NO_DATECHECK' => 'Saltar comprobació de data (més ràpid però fallarà si la data es incorrecta)',
  'LBL_NO_WORKFLOW' => 'No executar workflows durant la importació',
  'LBL_NO_EMAILS' => 'No enviar notificacions de Correu durant la importació',
  'LBL_NO_PRECHECK' => 'Mode de Format Natiu',
  'LBL_STRICT_CHECKS' => 'Utilitzar conjunt de regles estricte (Comprobar també direccions de Correu i números de telèfon)',
  'LBL_ERROR_SELECTING_RECORD' => 'Error seleccionant registre:',
  'LBL_ERROR_DELETING_RECORD' => 'Error eliminant registre:',
  'LBL_NOT_SET_UP' => 'La importació no s´ha configurat per aquest tipus de mòdul',
  'LBL_ARE_YOU_SURE' => 'Està segur? Això borrarà totes les dades del mòdul.',
  'LBL_NO_RECORD' => 'No existeix cap registre amb aquest ID per actualitzar',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'La importació no s´ha configurat per a aquest tipus de mòdul',
  'LBL_DEBUG_MODE' => 'Habilitar mode de depuració',
  'LBL_ERROR_INVALID_ID' => 'L´ID proporcionat és massa llarg per al camp (la longitud màxima és de 36 caràcters)',
  'LBL_ERROR_INVALID_PHONE' => 'Número de telèfon no vàlid',
  'LBL_ERROR_INVALID_NAME' => 'Cadena massa llarga per el camp',
  'LBL_ERROR_INVALID_VARCHAR' => 'Cadena massa llarga per el camp',
  'LBL_ERROR_INVALID_DATE' => 'Data no vàlida',
  'LBL_ERROR_INVALID_DATETIME' => 'Data i hora no vàlida',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Data i hora no vàlida',
  'LBL_ERROR_INVALID_TIME' => 'Hora no vàlida',
  'LBL_ERROR_INVALID_INT' => 'Valor enter no vàlid',
  'LBL_ERROR_INVALID_NUM' => 'Valor numéric no vàlid',
  'LBL_ERROR_INVALID_EMAIL' => 'Direcció de Correu no vàlida',
  'LBL_ERROR_INVALID_USER' => 'Nom o ID de usuari no vàlid',
  'LBL_ERROR_INVALID_TEAM' => 'Nom o ID d´equip no vàlid',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Nom o ID de compte no vàlid',
  'LBL_ERROR_INVALID_RELATE' => 'Camp relacional no vàlid',
  'LBL_ERROR_INVALID_CURRENCY' => 'Valor de moneda no vàlid',
  'LBL_ERROR_INVALID_FLOAT' => 'Número en coma flotant no vàlid',
  'LBL_ERROR_NOT_IN_ENUM' => 'Valor no pertanyent a la llista desplegable. Els valors permesos són:',
  'LBL_NOT_MULTIENUM' => 'No es una Enumeració Múltiple (MultiEnum)',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'La importació no s´ha configurat per a aquest tipus de mòdul',
  'LBL_IMPORT_MODULE_NO_USERS' => 'AVÍS: No ha definit usuaris en el seu sistema.  Si realitza la importació sense abans afegir usuaris, tots els registres pertanyeran a l´Administrador.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'No ha estat possible realitzar la publicació. Ja hi ha un altre mapa d´Importació publicat amb el mateix nom.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'No ha estat possible treure la publicació d´un mapa el propietari del qual és un altre usuari. Vostè posseeix un mapa d´Importació amb el mateix nom.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'El directori',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'no existeix o no té permisos d´escriptura en el mateix',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'L´arxiu no va poder pujar-se amb èxit. Pot ser que l´opció &#39;upload_max_filesize&#39; del seu arxiu php.ini estigui establerta a un valor massa petit',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'L´arxiu és massa gran. Com a màxim:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Canviï $sugar_config[&#39;upload_maxsize&#39;] a config.php',
  'LBL_MODULE_NAME' => 'Importar',
  'LBL_TRY_AGAIN' => 'Provi de nou',
  'LBL_START_OVER' => 'Començar de nou',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'El fitxer d&#39;importació conté {0} files. El nombre òptim de files és {1}. Més files pot retardar el procés d&#39;importació. Premeu D&#39;acord per continuar important. Feu clic a Cancel·la per revisar i re-pujar l&#39;arxiu d&#39;importació.',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'No pot importar un usuari administtrador del sistema',
  'ERR_MULTIPLE' => 'S´han definit múltiples columnes amb el mateix nom de camp.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Falten camps requerits:',
  'ERR_MISSING_MAP_NAME' => 'Falta el nom del mapeix personalitzat',
  'ERR_SELECT_FULL_NAME' => 'No es pot seleccionar Nom Complert quan Nom i Cognoms están seleccionats.',
  'ERR_SELECT_FILE' => 'Seleccioni l´arxiu a pujar.',
  'LBL_SELECT_FILE' => 'Seleccioni arxiu:',
  'LBL_CUSTOM' => 'Personalitzat',
  'LBL_CUSTOM_CSV' => 'Arxiu Personalitzat Delimitat per Comes',
  'LBL_CSV' => 'Arxiu Delimitat per Comes',
  'LBL_EXTERNAL_SOURCE' => 'una aplicació o servei extern',
  'LBL_TAB' => 'Arxiu Delimitat per Tabulacions',
  'LBL_CUSTOM_DELIMITED' => 'Arxiu amb Delimitador Personalitzat',
  'LBL_CUSTOM_DELIMITER' => 'Delimitador Personalitzat:',
  'LBL_FILE_OPTIONS' => 'Opcions d´arxiu',
  'LBL_CUSTOM_TAB' => 'Arxiu Personalitzat Delimitat per Tabuladors',
  'LBL_DONT_MAP' => '-- No associï aquest camp --',
  'LBL_STEP_MODULE' => 'En què mòdul es vol importar les dades?',
  'LBL_STEP_1_TITLE' => 'Pas 1: Seleccioni l´origen i l´Acció de Importació',
  'LBL_CONFIRM_TITLE' => 'Pas {0}: Confirma propietats d&#39;importació d&#39;arxius',
  'LBL_CONFIRM_EXT_TITLE' => 'Pas {0}: Confirma propietats de font externa',
  'LBL_WHAT_IS' => 'Quin es l´origen de dades?',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Les assignacions personalitzades de Microsoft Outlook es basen en l&#39;arxiu d&#39;importació està delimitat per comes (.csv). Si l&#39;arxiu d&#39;importació està delimitat per tabuladors, les assignacions no s&#39;aplicarà com s&#39;esperava.',
  'LBL_MY_SAVED' => 'Els Meus Orígens Guardats:',
  'LBL_PUBLISH' => 'Publicar',
  'LBL_DELETE' => 'Eliminar',
  'LBL_PUBLISHED_SOURCES' => 'Orígens Publicats:',
  'LBL_UNPUBLISH' => 'Despublicar',
  'LBL_NEXT' => 'Següent >',
  'LBL_BACK' => '< Anterior',
  'LBL_STEP_2_TITLE' => 'Pas 2: Pujada d´arxiu de Importació',
  'LBL_HAS_HEADER' => 'Té capçalera:',
  'LBL_NOW_CHOOSE' => 'Ara triï l´arxiu a importar:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 i 2000 poden exportar dades en el format <b>Valors Separats per Coma (CSV)</b>, que pot ser utilitzat per importar dades en el sistema. Per exportar les seves dades desde Outlook, segueixi els següents passos:',
  'LBL_OUTLOOK_NUM_1' => 'Iniciï <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Seleccioni el menú <b>Arxiu</b>, i llavors l´opció de menú <b>Importar i Exportar ...</b>',
  'LBL_OUTLOOK_NUM_3' => 'Seleccioni <b>Exportar a un arxiu</b> i faci clic a Següent',
  'LBL_OUTLOOK_NUM_4' => 'Seleccioni <b>Valors Separats per Coma (Windows)</b> i faci clic a <b>Següent</b>.<br>  Nota: Es possible que faci falta l´instal·lació d´un component d´exportació',
  'LBL_OUTLOOK_NUM_5' => 'Seleccioni la carpeta <b>Contactes</b> i faci clic a <b>Següent</b>. Pot seleccionar diferentes carpetes de contactes si els seus contactes están guardats en diferents llocs',
  'LBL_OUTLOOK_NUM_6' => 'Triï un nom d´arxiu i faci clic a <b>Següent</b>',
  'LBL_OUTLOOK_NUM_7' => 'Faci clic a <b>Finalitzar</b>',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com pot exportar dades en el format <b>Valors Separats per Coma</b> que es pot utilitzar per importar dades en el sistema. Per exportar les seves dades desde Salesforce.com, faci el següent:',
  'LBL_SF_NUM_1' => 'Obri el navegador i vagi a http://www.salesforce.com, e iniciï la seva sessió amb el seu correu i clau de pas',
  'LBL_SF_NUM_2' => 'Faci clic en la pestanya <b>Reports</b> del menú superior',
  'LBL_SF_NUM_3' => '<b>Per exportar comptes:</b> Faci clic en el enllaç <b>Active Accounts</b><br><b>Per exportar contactes:</b> Faci clic en el enllaç <b>Mailing List</b>',
  'LBL_SF_NUM_4' => 'En <b>Step 1: Select your report type</b>, seleccione <b>Tabular Report</b> i faci clic a <b>Next</b>',
  'LBL_SF_NUM_5' => 'En <b>Step 2: Select the report columns</b>, seleccione las columnas que desee exportar i faci clic a <b>Next</b>',
  'LBL_SF_NUM_6' => 'En <b>Step 3: Select the information to summarize</b>, simplement faci clic en <b>Next</b>',
  'LBL_SF_NUM_7' => 'En <b>Step 4: Order the report columns</b>, simplement faci clic en <b>Next</b>',
  'LBL_SF_NUM_8' => 'En <b>Step 5: Select your report criteria</b>, bajo <b>Start Date</b>, seleccioni una data suficientment llunyana com per incloure tots els comptes. També pot exportar un subconjunt de comptes fent servir criteris més avançats. Quan hagui acabat, faci clic en <b>Run Report</b>',
  'LBL_SF_NUM_9' => 'Es generará un informe, i la pàgina mostrarà <b>Report Generation Status: Complete.</b> Ara faci clic en <b>Export to Excel</b>',
  'LBL_SF_NUM_10' => 'En <b>Export Report:</b>, per <b>Export File Format:</b>, seleccioni <b>Comma Delimited .csv</b>. Faci clic a <b>Export</b>.',
  'LBL_SF_NUM_11' => 'Apareixerà un quadre de diàleg perquè guardi l´arxiu exportat al seu ordinador.',
  'LBL_IMPORT_ACT_TITLE' => 'Act! pot exportar dades en el format <b>Valors Separats per Comes</b>, que pot ser utilitzat per importar dades en el sistema. Per exportar dades desde Act!, segueix els següents passos:',
  'LBL_ACT_NUM_1' => 'Llanci <b>ACT!</b>',
  'LBL_ACT_NUM_2' => 'Seleccioni el menú <b>File</b>, la opció de menú <b>Data Exchange</b>, i a continuació la opció de menú <b>Export...</b>',
  'LBL_ACT_NUM_3' => 'Seleccioni el tipus d´arxiu <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Seleccioni un nom d´arxiu un nom d´arcxiu i una ubicació per les dades exportades i faci clic a <b>Següent</b>',
  'LBL_ACT_NUM_5' => 'Seleccioni <b>Contacts records only</b>',
  'LBL_ACT_NUM_6' => 'Faci clic en el botó <b>Options...</b>',
  'LBL_ACT_NUM_7' => 'Seleccioni <b>Comma</b> com caràcter separador de camps',
  'LBL_ACT_NUM_8' => 'Marqui la casella <b>Yes, export field names</b> i faci clic a <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Faci clic a <b>Següent</b>',
  'LBL_ACT_NUM_10' => 'Seleccioni <b>All Records</b> i faci clic a <b>Finish</b>',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Moltes aplicacions li permeten exportar dades en el format <b>Arxiu de text separat per comes (.csv)</b>. Habitualment, la majoria d´aplicacions segueixen aquests passos genèrics:',
  'LBL_CUSTOM_NUM_1' => 'Llanci l´aplicació i Obri l´arxiu de dades',
  'LBL_CUSTOM_NUM_2' => 'Seleccioni l´opció de menú <b>Guardar com...</b> o <b>Exportar...</b>',
  'LBL_CUSTOM_NUM_3' => 'Guardi l´arxiu en el format <b>CSV</b> o <b>Valors Separats per Comes</b>',
  'LBL_IMPORT_TAB_TITLE' => 'Moltes aplicacions li permeten exportar dades en el format <b>Arxiu de text separat per tabuladors (.tsv o .tab)</b>. Habitualment, la majoria d´aplicacions tenen aquests pasos genérics:',
  'LBL_TAB_NUM_1' => 'Llanci l´aplicació i Obri l´arxiu de dades',
  'LBL_TAB_NUM_2' => 'Seleccioni l´opció de menú <b>Guardar com...</b> o <b>Exportar...</b>',
  'LBL_TAB_NUM_3' => 'Guardi l´arxiu en el format <b>TSV</b> o <b>Valors Separats per Tabuladors</b>',
  'LBL_STEP_3_TITLE' => 'Pas 3: Confirmi els Camps e Importi',
  'LBL_STEP_DUP_TITLE' => 'Pas {0}: Comproveu si hi ha possibles duplicats',
  'LBL_SELECT_FIELDS_TO_MAP' => 'En la següent llista, seleccioni els camps del seu arxiu d´importació que tinguin que ser importats en cada camp del sistema. Quan acabi, faci clic a <b>Importar Ara</b>:',
  'LBL_DATABASE_FIELD' => 'Camp de Base de dades',
  'LBL_HEADER_ROW' => 'Fila de Capçalera',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Seleccioneu si la primera fila de l&#39;arxiu d&#39;importació és una fila de capçalera que conté les etiquetes de camp.',
  'LBL_ROW' => 'Fila',
  'LBL_SAVE_AS_CUSTOM' => 'Guardar com Associació Personalitzada:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Nom de Mapeix Personalitzat:',
  'LBL_CONTACTS_NOTE_1' => 'Té que associar o Cognom o Nom Complert.',
  'LBL_CONTACTS_NOTE_2' => 'Si associa Nom Complert, Nom i Cognom serán ignorats.',
  'LBL_CONTACTS_NOTE_3' => 'Si associa Nom Complert, les dades en Nom Complert es dividirán en Nom i Cognom quan s´inserten en la base de dades.',
  'LBL_CONTACTS_NOTE_4' => 'Els camps que contenen Carrer Direcció 2 i Carrer Direcció 3 es concatenaran en el camp Direcció Principal quan s´insereixin en la base de dades.',
  'LBL_ACCOUNTS_NOTE_1' => 'Els camps que contenen Carrer Direcció 2 i Carrer Direcció 3 es concatenaran en el camp Direcció Principal quan s´insereixin en la base de dades.',
  'LBL_REQUIRED_NOTE' => 'Camps Requerits:',
  'LBL_IMPORT_NOW' => 'Importar Ara',
  'LBL_CANNOT_OPEN' => 'No pot obrir-se l´arxiu d´importació per la lectura',
  'LBL_NOT_SAME_NUMBER' => 'No hi ha el mateix número de camps en cada línia del seu arxiu d´importació',
  'LBL_NO_LINES' => 'No hi ha línies en el seu arxiu d´importació',
  'LBL_FILE_ALREADY_BEEN_OR' => 'L´arxiu d´importació no existeix o ja ha estat processat',
  'LBL_SUCCESS' => 'Èxit:',
  'LBL_FAILURE' => 'Fallada d&#39;importació:',
  'LBL_SUCCESSFULLY' => 'Importat amb Èxit',
  'LBL_LAST_IMPORT_UNDONE' => 'La seva última importació a estat desfeta',
  'LBL_NO_IMPORT_TO_UNDO' => 'No hi ha importació per desfer.',
  'LBL_FAIL' => 'Fallo:',
  'LBL_RECORDS_SKIPPED' => 'Registres saltats per falta d´algun dels camps requerits',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Registres saltats perquè els seus id&#39;s o bé existien o tenien més de 36 caràcters',
  'LBL_RESULTS' => 'Resultats',
  'LBL_CREATED_TAB' => 'Registres creats',
  'LBL_DUPLICATE_TAB' => 'Duplicats',
  'LBL_IMPORT_MORE' => 'Importar Més',
  'LBL_FINISHED' => 'Finalitzat',
  'LBL_UNDO_LAST_IMPORT' => 'Desfer Última Importació',
  'LBL_LAST_IMPORTED' => 'Última Importació',
  'ERR_MULTIPLE_PARENTS' => 'Només pot haver definit un ID pare',
  'LBL_DUPLICATES' => 'S´han Trobat Duplicados',
  'LNK_DUPLICATE_LIST' => 'Descarregar llista de Duplicats',
  'LNK_ERROR_LIST' => 'Descarregar Llista d´Errors',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Descarregar registres que no s´han pogut ser importats.',
  'LBL_UNIQUE_INDEX' => 'Elegeixi l´Índex per a comparació de duplicats',
  'LBL_VERIFY_DUPS' => 'Verificar entrades duplicades contra els índexs seleccionats',
  'LBL_INDEX_USED' => 'Índexs usats',
  'LBL_INDEX_NOT_USED' => 'Índexs no usats',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'L´arxiu no ha estat pujat amb èxit. Comprovi els permisos de fitxers en el directori de caché de la seva instal·lació de Sugar.',
  'LBL_IMPORT_FIELDDEF_ID' => 'Número de ID únic',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Nom o ID',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Número de Telèfon',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'ID o Nom d´Equip',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Qualsevol Text',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Qualsevol Text',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Qualsevol Text',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Hora',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Data i Hora',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nom d´Usuari o ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; o &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Llista',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'Direcció de Correu',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numéric (Sense Decimals)',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numéric (Sense Decimals)',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numéric (Sense Decimals)',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numéric (Decimals Permesos)',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numéric (Decimals Permesos)',
  'LBL_DATE_FORMAT' => 'Format de Data:',
  'LBL_TIME_FORMAT' => 'Format d´Hora:',
  'LBL_TIMEZONE' => 'Zona Horària:',
  'LBL_ADD_ROW' => 'Afegir Camp',
  'LBL_REMOVE_ROW' => 'Treure Camp',
  'LBL_DEFAULT_VALUE' => 'Valor per Defecte',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Mostrar Opcions Avançades',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Ocultar Opcions Avançades',
  'LBL_SHOW_NOTES' => 'Veure notes',
  'LBL_HIDE_NOTES' => 'Amagar notes',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Mostrar Columnes de Vista Preliminar',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Ocultar Columnes de Vista Preliminar',
  'LBL_SAVE_MAPPING_AS' => 'Guardar Mapeix Com',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Comilles Simples (&#39;)',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Comilles Dobles (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Cap',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Altre:',
  'LBL_IMPORT_COMPLETE' => 'Importació Completada',
  'LBL_IMPORT_COMPLETED' => 'Completada la importació',
  'LBL_IMPORT_RECORDS' => 'Important Registres',
  'LBL_IMPORT_RECORDS_OF' => 'de',
  'LBL_IMPORT_RECORDS_TO' => 'a',
  'LBL_CURRENCY' => 'Moneda',
  'LBL_CURRENCY_SIG_DIGITS' => 'Dígits Significatius de la Moneda',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemple',
  'LBL_NUMBER_GROUPING_SEP' => 'Separador de milers',
  'LBL_DECIMAL_SEP' => 'Símbol Decimal',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Nom de Format de Visualització',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Salutació, "f" Nom, "l" Cognom</i>',
  'LBL_CHARSET' => 'Codificació d´Arxiu',
  'LBL_MY_SAVED_HELP' => 'Un mapatge guardat permet especificar una combinació utilitzada anteriorment d´un origen de dades específic i un conjunt de camps de base de dades per a mapear els camps de l´arxiu d´importación.<br>Faci clic a <b>Publicar</b> per deixar disponible el mapatge a altres usuarios.<br>Faci clic en <b>Treure Publicació</b> perquè el mapatge deixi d´estar disponible per a altres usuaris.',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Utilitzeu aquesta opció per aplicar la configuració predefinits d&#39;importació, incloent les propietats d&#39;importació, les assignacions, i la configuració de control duplicat, a la importació.<br /><br><br>Feu clic a <b>Publica</b> per fer la cartografia disponible per altres usuaris.<br /><br>Feu clic a <b>Despublicar</b> per no fer la cartografia disponible per altres usuaris.<br /><br>Feu clic a <b>Eliminar</b> per eliminar una assignació per a tots els usuaris.',
  'LBL_MY_PUBLISHED_HELP' => 'Un mapatge guardat permet especificar una combinació utilitzada anteriorment d´un origen de dades específic i un conjunt de camps de base de dades per a mapear els camps de l´arxiu d´importació.',
  'LBL_ENCLOSURE_HELP' => '<p>El <b>caràcter calificador</b> s´utilitza per tancar el contingut d´un camp, incloent qualsevol caràcter que s´utilitzi com a delimitador.<br><br>Exemple: Si el caràcter delimitador és una coma () i el calificador és una cometa doble ("),<br><b>"Cupertino, California"</b> s´importarà en un només camp de l´aplicació i apareixerà com <b>Cupertino, California</b>.<br>Si no s´estableix cap caràcter calificador, o aquest és un caràcter diferent,<br><b>"Cupertino, California"</b > serà importat en dos camps adjacents com <b>"Cupertino</b> i <b>California"</b>.<br><br>Nota: L´arxiu d´importació pot no contenir caràcters calificadors.<br>El caràcter calificador per defecte per a arxius delimitats per coma o tabulador creats a Excel és la cometa doble.</p>',
  'LBL_DELIMITER_COMMA_HELP' => 'Seleccioni aquesta opció si el caràcter que separa els camps a l´arxiu d´importació és una <b>coma</b>, o si l´extensió de l´arxiu és .csv.',
  'LBL_DELIMITER_TAB_HELP' => 'Seleccioni aquesta opció si el caràcter que separa els camps a l´arxiu d´importació és un <b>TAB</b>, i l´extensió de l´arxiu és .txt.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Seleccioni aquesta opció si el caràcter que separa els camps a l´arxiu d´importació no és ni una coma ni un TAB, i escrigui el caràcter en el camp adjacent.',
  'LBL_DATABASE_FIELD_HELP' => 'Seleccioni un camp de la llista de tots els camps existents en la base de dades per al mòdul .',
  'LBL_HEADER_ROW_HELP' => 'Aquests són els camps de títol de la fila corresponent a la capçalera de l´arxiu d´importació .',
  'LBL_DEFAULT_VALUE_HELP' => 'Indiqui un valor a usar per al camp en el registre creat o actualitzat si el camp a l´arxiu d´importació no conté dades.',
  'LBL_ROW_HELP' => 'Aquestes són les dades de la primera fila de l´arxiu d´importació que no pertany a la capçalera.',
  'LBL_SAVE_MAPPING_HELP' => 'Introdueixi un nom per al conjunt de camps de base de dades utilitzats a dalt perquè siguin mapejats als camps de l´arxiu d´importació.<br>El conjunt de camps, incloent el seu ordre i l´origen de dades seleccionat al Pas 1 d´Importació, seran guardats durant l´intent d´importació.<br>El mapatge guardat podrà llavors ser seleccionat al Pas 1 d´Importació per a una nova importació.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Especifiqui la configuració de l´arxiu d´importació per assegurar-se de la qual les dades són importades <br> correctament. Aquesta configuració no reemplaçarà a les seves preferències. Els registres<br> creats o actualitzats contindran la configuració especificada a la pàgina El Meu Compte.',
  'LBL_IMPORT_FILE_SETTINGS' => 'Configuració d&#39;importació d&#39;arxius',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Seleccioni els camps de l´arxiu d´importació a usar per a la comprovació de duplicats.<br>Si les dades per als camps seleccionats coincideixen les dades en els camps de registres existents, no es generaran nous registres per a aquelles files que continguin les dades duplicados.<br>Les files que continguin dades duplicades seran identificades en els Resultats d´Importació.',
  'LBL_IMPORT_STARTED' => 'Importació Iniciada:',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'El registre no s´ha pogut actualitzar per un problema de permisos',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Esteu segur que voleu eliminar aquest conjunt guardat de la configuració d&#39;importació?',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'Si les dades d&#39;importació d&#39;arxius s&#39;exporta des d&#39;una de les següents fonts, seleccionar quina d&#39;elles.',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Seleccioneu la font per aplicar automàticament les assignacions personalitzades per tal de simplificar el procés d&#39;assignació (següent pas).',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Utilitzeu aquesta opció per importar dades directament des d&#39;una aplicació externa o de serveis, com Gmail.',
  'LBL_EXAMPLE_FILE' => 'Descarregar plantilla d&#39;importació d&#39;arxius',
  'LBL_CONFIRM_IMPORT' => 'Vostè ha seleccionat per actualitzar els registres durant el procés d&#39;importació. Les actualitzacions realitzades en els registres existents no es pot desfer. No obstant això, els registres creats durant el procés d&#39;importació es pot desfer (suprimit), si ho desitja. Feu clic a Cancel·la per seleccionar per crear nous registres només, o feu clic a D&#39;acord per continuar.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Advertència: Vostè ja ha seleccionat una assignació personalitzada per a aquesta importació, vols que segueixi?',
  'LBL_EXTERNAL_FIELD' => 'Camp extern',
  'LBL_SAMPLE_URL_HELP' => 'Baixar un fitxer d&#39;importació mostra que conté una fila de capçalera dels camps del mòdul. L&#39;arxiu es pot utilitzar com a plantilla per crear un arxiu d&#39;importació que conté les dades que voleu importar.',
  'LBL_AUTO_DETECT_ERROR' => 'El delimitador de camp i de classificació a l&#39;arxiu d&#39;importació no podia ser detectat. Si us plau, verifiqui la configuració de les propietats de l&#39;arxiu d&#39;importació.',
  'LBL_MIME_TYPE_ERROR_1' => 'L&#39;arxiu seleccionat no sembla contenir una llista delimitada. Si us plau, comproveu el tipus d&#39;arxiu. Recomanem arxius delimitats per comes (.csv).',
  'LBL_MIME_TYPE_ERROR_2' => 'Per procedir amb la importació de l&#39;arxiu seleccionat, feu clic a D&#39;acord. Per carregar un nou fitxer, feu clic a tratar una altra vegada',
  'LBL_FIELD_DELIMETED_HELP' => 'El delimitador de camp especifica el caràcter utilitzat per separar les columnes de camps.',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Seleccioneu un arxiu que conté dades separades per un delimitador, com un arxiu per comes o tabulacions. Els arxius del tipus .csv es recomanen.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'No es pot recuperar adaptador de font, si us plau intenti més tard.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'No es pot recuperar d&#39;alimentació externa, si us plau intenti més tard.',
  'LBL_ADD_FIELD_HELP' => 'Utilitzeu aquesta opció per afegir un valor a un camp en tots els registres creats i/o actualitzats. Seleccioneu el camp i després escriviu o seleccioneu un valor per a aquest camp a la columna valor predeterminat.',
  'LBL_MISSING_HEADER_ROW' => 'No hi ha fila de capçalera',
  'LBL_CANCEL' => 'Cancel·lar',
  'LBL_SELECT_DS_INSTRUCTION' => 'Llest per començar a importar? Seleccioneu la font de les dades que voleu importar.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Seleccioneu un fitxer a l&#39;ordinador que conté les dades que voleu importar, o descarregar la plantilla per aconseguir un avantatge en la creació del fitxer d&#39;importació.',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Així és com les files dels primers diversos dels arxius d&#39;importació apareixen amb les propietats de l&#39;arxiu detectat. Si una fila de capçalera s&#39;ha detectat, es mostra a la fila superior de la taula. Veure les propietats de l&#39;arxiu d&#39;importació per realitzar canvis en les propietats detectades i per configurar propietats addicionals. Actualització dels valors s&#39;actualitzaran les dades que apareixen a la taula.',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'La següent taula conté tots els camps en el mòdul que es pot assignar a les dades a l&#39;arxiu d&#39;importació. Si l&#39;arxiu conté una fila d&#39;encapçalament, les columnes a l&#39;arxiu s&#39;han assignat als camps de joc. Comproveu les assignacions per a assegurar-se que són el que vostè espera, i fer els canvis, segons sigui necessari. Per ajudar-te a comprovar les assignacions, la fila 1 mostra les dades a l&#39;arxiu. Assegureu-vos d&#39;assignar a tots els camps obligatoris (assenyalats amb un asterisk).',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Per evitar crear registres duplicats, seleccionar quin dels camps assignats que li agradaria utilitzar per realitzar una comprovació de duplicats, mentre que les dades estan sent importats. Els valors dins dels registres existents en els camps seleccionats s&#39;ha de confrontar amb les dades a l&#39;arxiu d&#39;importació. Si les dades es troba coincidència, les files a l&#39;arxiu d&#39;importació que conté les dades es mostraran juntament amb els resultats d&#39;importació (pàgina següent). A continuació podrà seleccionar quina d&#39;aquestes files per seguir important.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Ingressar',
  'LBL_DUP_HELP' => 'Aquí hi ha les files de l&#39;arxiu d&#39;importació que no han estat importats, ja que contenen dades que coincideixen amb els valors en els registres existents sobre la base de la comprovació de duplicats. Les dades que es posa en relleu els partits. Per tornar a importar aquestes files, descarregar la llista, feu els canvis i feu clic a <b>Importar de nou</b>.',
  'LBL_DESELECT' => 'Anul·lar la selecció',
  'LBL_SUMMARY' => 'Resum',
  'LBL_OK' => 'Acceptar',
  'LBL_ERROR_HELP' => 'Aquí hi ha les files de l&#39;arxiu d&#39;importació que no s&#39;han importat a causa dels errors. Per tornar a importar aquestes files, descarregar la llista, feu els canvis i feu clic a <b>Importar nou</b>',
  'LBL_EXTERNAL_MAP_HELP' => 'La següent taula conté els camps de la font externa i els camps del mòdul al qual s&#39;assignen. Comproveu les assignacions per a assegurar-se que són el que vostè espera, i fer els canvis, segons sigui necessari. Assegureu-vos d&#39;assignar a tots els camps obligatoris (assenyalats amb un asterisk).',
  'LBL_EXTERNAL_MAP_NOTE' => 'La importació es va tractar de contactes a tots els grups de contactes de Google.',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Els noms d&#39;usuari dels usuaris de nova creació serà el nom complet del contacte Google per defecte. Els noms d&#39;usuari es pot canviar després dels registres d&#39;usuaris es creen.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => 'Feu clic a <b>Importa ara</b> per iniciar la importació. Registres només es crea per les entrades que inclouen els cognoms. Els registres no es crearà per a les dades identificats com duplicats basats en els noms i/o adreces de correu electrònic coincidents els registres existents.',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Aquesta columna mostra els camps en la font externa que conté les dades que s&#39;utilitzaran per crear nous registres.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indiquen un valor d&#39;ús per al camp en el registre creat si el camp de la font externa no conté dades.',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Per assignar els nous registres d&#39;usuaris normal, no sigui vostè, utilitzeu la columna Valor predeterminat per seleccionar un usuari diferent.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Per assignar els nous registres a altres equips del seu equip per defecte(s), utilitzeu la columna Valor per defecte per seleccionar els diferents equips.',
  'LBL_SIGN_IN_HELP' => 'Per activar aquest servei, si us plau entreu a la pestanya Comptes externes dins de la seva pàgina d&#39;usuari de configuració.',
);

