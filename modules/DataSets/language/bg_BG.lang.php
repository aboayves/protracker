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
  'LBL_EDIT_LAYOUT' => 'Редактиране на подредби',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Default Output',
  'LBL_PRESPACE_X' => 'Pre-Space Side:',
  'LBL_CHILD_NAME' => 'Sub/Child Query:',
  'LNK_QUERYBUILDER' => 'Query Builder',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Display Type:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'List Order X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'List Order Z:',
  'LBL_MODULE_NAME' => 'Тип данни',
  'LBL_MODULE_TITLE' => 'Тип данни',
  'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Тип данни"',
  'LBL_LIST_FORM_TITLE' => 'Списък с данни',
  'LBL_LIST_NAME' => 'Типове данни:',
  'LBL_LIST_QUERY_NAME' => 'Заявки',
  'LBL_LIST_LIST_ORDER_Y' => 'Подредба по оста Y',
  'LBL_LIST_LIST_ORDER_X' => 'Подредба по оста X',
  'LBL_LIST_VISIBLE' => 'Видимо?',
  'LBL_LIST_EXPORTABLE' => 'Експортируемо?',
  'LBL_LIST_HEADER' => 'Покажи заглавието?',
  'LBL_NAME' => 'Тип данни',
  'LBL_DESCRIPTION' => 'Тип данни',
  'LBL_TYPE' => 'Категория:',
  'LBL_PARENT_DATASET' => 'Източник на данните:',
  'LBL_QUERY_NAME' => 'Име на заявката:',
  'LBL_OUTPUT_DEFAULT' => 'Категория по подразбиране:',
  'LBL_LIST_ORDER_Y' => 'Вертикално разположение',
  'LBL_LIST_ORDER_X' => 'Хоризонтално разположение',
  'LBL_HEADER' => 'Покажи заглавието:',
  'LBL_EXPORTABLE' => 'Импортирай (CSV формат):',
  'LBL_VISIBLE' => 'Достъпни данни',
  'LBL_TABLE_WIDTH' => 'Ширина:',
  'LBL_FONT_SIZE' => 'Размер на шрифта:',
  'LBL_REPORT_NAME' => 'Име на справката',
  'LBL_PRESPACE_Y' => 'Комбинирай с предишни данни:',
  'LBL_TABLE_WIDTH_TYPE' => 'Ширина на таблицата:',
  'LBL_BODY_TEXT_COLOR' => 'Цвят на текста:',
  'LBL_HEADER_TEXT_COLOR' => 'Цвят на текста на заглавието:',
  'LBL_HEADER_BACK_COLOR' => 'Цвят на фона на заглавието:',
  'LBL_BODY_BACK_COLOR' => 'Цвят на фона:',
  'LBL_USE_PREV_HEADER' => 'Групирай с предишното заглавие:',
  'LBL_CUSTOM_LAYOUT' => 'Разпределение на потребителите',
  'LNK_LIST_REPORTMAKER' => 'Списък със справки',
  'LNK_NEW_REPORTMAKER' => 'Създаване на нова справка',
  'LNK_LIST_DATASET' => 'Формат на данните',
  'LNK_NEW_DATASET' => 'Създай формат на данните',
  'LNK_NEW_CUSTOMQUERY' => 'Създай заявка',
  'LNK_CUSTOMQUERIES' => 'Потребителски заявки',
  'LNK_NEW_QUERYBUILDER' => 'Създаване на заявка',
  'LBL_ALL_REPORTS' => 'Всички справки',
  'NTC_DELETE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този запис?',
  'ERR_DELETE_RECORD' => 'Изтриване на заявката.',
  'LBL_LAYOUT_TYPE' => 'Разпределение:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Стойност по подразбиране:',
  'LBL_MODIFY_HEAD' => 'Промяна на атрибутите на заглавието:',
  'LBL_MODIFY_BODY' => 'Промяна на атрибутите на справката:',
  'LBL_BG_COLOR' => 'Цвят на фона:',
  'LBL_WRAP' => 'Пренасяне на текста:',
  'LBL_DISPLAY_TYPE' => 'Визуализация:',
  'LBL_STYLE' => 'Шрифт:',
  'LBL_DISPLAY_NAME' => 'Покажи име:',
  'LBL_FORMAT_TYPE' => 'Тип на формата:',
  'LBL_FORMAT' => 'Формат:',
  'LBL_CELL_SIZE' => 'Широчина:',
  'LBL_HIDE_COLUMN' => 'Скрий колоните в справката:',
  'LBL_FINISHED_BUTTON' => 'Съхрани',
  'CONFIRM_LAYOUT_DISABLE' => 'Прекъсването на оформлението ще премахне всички съществуващи действия по поръчката',
  'LBL_LEFT' => 'Наляво',
  'LBL_RIGHT' => 'Надясно',
);

