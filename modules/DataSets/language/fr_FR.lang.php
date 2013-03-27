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
  'LBL_LIST_VISIBLE' => 'Visible?',
  'LBL_LIST_EXPORTABLE' => 'Exportable?',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_TYPE' => 'Type:',
  'LBL_PRESPACE_X' => 'Pre-Space Side:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'List Order X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'List Order Z:',
  'LBL_FORMAT' => 'Format:',
  'LBL_MODULE_NAME' => 'Format de données',
  'LBL_MODULE_TITLE' => 'Formats de données',
  'LBL_SEARCH_FORM_TITLE' => 'Recherche Format de données',
  'LBL_LIST_FORM_TITLE' => 'Liste des formats de données',
  'LBL_LIST_NAME' => 'Nom Format de données',
  'LBL_LIST_QUERY_NAME' => 'Nom Requête',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Sortie par défaut',
  'LBL_LIST_LIST_ORDER_Y' => 'Position en ordonnées',
  'LBL_LIST_LIST_ORDER_X' => 'Position en abscisses',
  'LBL_LIST_HEADER' => 'Afficher En-tête?',
  'LBL_NAME' => 'Nom du format de données:',
  'LBL_PARENT_DATASET' => 'Format des données parent:',
  'LBL_QUERY_NAME' => 'Nom Requête:',
  'LBL_OUTPUT_DEFAULT' => 'Type de sortie par défaut:',
  'LBL_LIST_ORDER_Y' => 'Ordre de l&#39;Axe Y:',
  'LBL_LIST_ORDER_X' => 'Ordre de l&#39;Axe X:',
  'LBL_HEADER' => 'Afficher En-tête:',
  'LBL_EXPORTABLE' => 'Exportable (fichier CSV uniquement):',
  'LBL_VISIBLE' => 'Format de données visible:',
  'LBL_TABLE_WIDTH' => 'Largeur Table %:',
  'LBL_FONT_SIZE' => 'Taille police:',
  'LBL_REPORT_NAME' => 'Nom Rapport:',
  'LBL_PRESPACE_Y' => 'Combiner avec format de données précédent:',
  'LBL_TABLE_WIDTH_TYPE' => 'Type Largeur Table:',
  'LBL_BODY_TEXT_COLOR' => 'Couleur du corps du texte:',
  'LBL_HEADER_TEXT_COLOR' => 'Couleur text en-tête:',
  'LBL_HEADER_BACK_COLOR' => 'Couleur du fond de l&#39;en-tête:',
  'LBL_BODY_BACK_COLOR' => 'couleur de fond du corps:',
  'LBL_USE_PREV_HEADER' => 'Grouper avec l&#39;en-tête précédent:',
  'LBL_CHILD_NAME' => 'Sous-requête;Requête enfant:',
  'LBL_CUSTOM_LAYOUT' => 'Disposition personnalisée:',
  'LNK_LIST_REPORTMAKER' => 'Liste des Rapports Entreprise',
  'LNK_NEW_REPORTMAKER' => 'Créer Rapport',
  'LNK_LIST_DATASET' => 'Liste des formats de données',
  'LNK_NEW_DATASET' => 'Créer format de données',
  'LNK_NEW_CUSTOMQUERY' => 'Créer Requête personnalisée',
  'LNK_CUSTOMQUERIES' => 'Requêtes personnalisées',
  'LNK_NEW_QUERYBUILDER' => 'Créer Requête',
  'LNK_QUERYBUILDER' => 'Générateur de requêtes',
  'LBL_ALL_REPORTS' => 'Tous les Rapports',
  'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'LBL_LAYOUT_TYPE' => 'Type de disposition:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Valeur par defaut:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Type d&#39;affichage:',
  'LBL_MODIFY_HEAD' => 'Modifier les attributs de l&#39;en-tête:',
  'LBL_MODIFY_BODY' => 'Modifier les attributs du corps:',
  'LBL_BG_COLOR' => 'couleur de fond:',
  'LBL_WRAP' => 'Renvoi à la ligne:',
  'LBL_DISPLAY_TYPE' => 'Type d&#39;affichage:',
  'LBL_STYLE' => 'Style de police:',
  'LBL_DISPLAY_NAME' => 'Nom d&#39;affichage:',
  'LBL_FORMAT_TYPE' => 'Type de Format:',
  'LBL_CELL_SIZE' => 'Lageur Cellule:',
  'LBL_HIDE_COLUMN' => 'Masquer les colonnes dans le rapport:',
  'LBL_FINISHED_BUTTON' => 'Terminé',
  'CONFIRM_LAYOUT_DISABLE' => 'La désactivation de la disposition personnalisée va modifier toutes les propriétés des personnalisations existantes',
  'LBL_LEFT' => 'Gauche',
  'LBL_RIGHT' => 'Droite',
  'LBL_EDIT_LAYOUT' => 'Editer la mise en page',
);

