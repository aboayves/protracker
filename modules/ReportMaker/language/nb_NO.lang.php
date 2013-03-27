<?php

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

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


																					
$mod_strings= array (
'LBL_MODULE_NAME'                                  => 'Virksomhetsrapporter',
'LBL_MODULE_TITLE'                                 => 'Virksomhetsrapporter',
'LBL_SEARCH_FORM_TITLE'                            => 'Virksomhetsrapporter: Søk',
'LBL_LIST_FORM_TITLE'                              => 'Alle virksomhetsrapporter',
'LBL_LIST_NAME'                                    => 'Navn',
'LBL_LIST_QUERY_NAME'                              => 'Forespørsel',
'LBL_LIST_PUBLISHED'                               => 'Publisert',
'LBL_LIST_SCHEDULED'                               => 'Planlagt',
'LBL_LIST_TYPE'                                    => 'Type',
'LBL_LIST_MODULE_TITLE'                            => 'Modul',
'LBL_DESCRIPTION'                                  => 'Beskrivelse:',
'LBL_PARENT_DATASET'                               => 'Opphavsdatasett:',
'LBL_QUERY_NAME'                                   => 'Forespørselsnavn:',
'LBL_TYPE'                                         => 'Rapporttype:',
'LBL_SCHEDULED'                                    => 'Planlegg rapport:',
'LBL_PUBLISHED'                                    => 'Publiser rapport:',
'LBL_NAME'                                         => 'Rapportnavn:',
'LBL_TITLE'                                        => 'Rapporttittel:',
'LBL_TABLE_WIDTH'                                  => 'Tabellbredde %:',
'LBL_TABLE_HEIGHT'                                 => 'Tabellhøyde %:',
'LBL_FONT_SIZE'                                    => 'Skriftstørrelse:',
'NTC_DELETE_CONFIRMATION'                          => 'Er du sikker på at du vil slette denne oppføringen?',
'ERR_DELETE_RECORD'                                => 'Du må oppgi et registreringsnummer for å slette dette produktet.',
'LBL_CURRENCY'                                     => 'Valuta:',
'LNK_LIST_REPORTMAKER'                             => 'Rapportliste for virksomhet:',
'LNK_NEW_REPORTMAKER'                              => 'Opprett rapport:',
'LNK_LIST_DATASET'                                 => 'Dataformatliste',
'LNK_NEW_DATASET'                                  => 'Opprett dataformat',
'LNK_NEW_CUSTOMQUERY'                              => 'Opprett tilpasset forespørsel',
'LNK_CUSTOMQUERIES'                                => 'Tilpassede forespørsler',
'LNK_NEW_QUERYBUILDER'                             => 'Opprett forespørsel',
'LNK_QUERYBUILDER'                                 => 'Verktøy for forespørsler',
'LNK_ADVANCED_REPORTING'                           => 'Virksomhetsrapportering',
'LBL_ALL_REPORTS'                                  => 'Alle rapporter',
'LBL_ADD_DATA_SET'                                 => 'Legg til et nytt datsett',
'LBL_EDIT_DATA_SET'                                => 'Oppdater datasett',
'LBL_DATA_SET'                                     => 'Datasett:',
'LBL_LIST_ORDER_Y'                                 => 'Vertikal plassering:',
'LBL_LIST_ORDER_X'                                 => 'Horisontal plassering:',
'LBL_REPORT_ALIGN'                                 => 'Rapportlinjering:',
'LBL_ADD_BUTTON_TITLE'                             => 'Velg [Alt+A]',
'LBL_ADD_BUTTON_KEY'                               => 'A',
'LBL_ADD_BUTTON_LABEL'                             => 'Velg',
'LBL_NEW_BUTTON_TITLE'                             => 'Legg til [Alt+N]',
'LBL_NEW_BUTTON_KEY'                               => 'N',
'LBL_NEW_BUTTON_LABEL'                             => 'Opprett ny',
'LBL_DETAILS_BUTTON_TITLE'                         => 'Rapportdetaljer [Alt+D]',
'LBL_DETAILS_BUTTON_KEY'                           => 'D',
'LBL_DETAILS_BUTTON_LABEL'                         => 'Rapportdetaljer',
'LBL_EDIT_BUTTON_TITLE'                            => 'Endre rapport [Alt+E]',
'LBL_EDIT_BUTTON_KEY'                              => 'N',
'LBL_EDIT_BUTTON_LABEL'                            => 'endre',
'LBL_RUN_BUTTON_TITLE'                             => 'Kjør rapport [Alt+R]',
'LBL_RUN_BUTTON_KEY'                               => 'R',
'LBL_RUN_BUTTON_LABEL'                             => 'Kjør rapport',
'LNK_UP'                                           => 'Opp',
'LNK_DOWN'                                         => 'Ned',
'LBL_NONE'                                         => 'Ikke planlagt',
'LBL_SCHEDULE_EMAIL'                               => 'Planlagt',
'LBL_HELLO'                                        => 'Hallo',
'LBL_SCHEDULED_REPORT_MSG_INTRO'                   => 'Vedlagt finnes en auto-generert rapport som ble sendt til deg fra Sugar-applikasjonen. Denne rapporten ble opprettet på',
'LBL_SCHEDULED_REPORT_MSG_BODY1'                   => 'og lagret med navnet "',
'LBL_SCHEDULED_REPORT_MSG_BODY2'                   => '". Hvis du ønsker å forandre dine rapportinnstillinger, logg da inn på Sugar-applikasjonen og klikk deg frem til "Rapport"-etiketten.',
);?>
