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
  'LBL_EDIT_LAYOUT' => 'Правка расположения',
  'LBL_PRESPACE_X' => 'Pre-Space Side:',
  'LBL_MODULE_NAME' => 'Набор данных',
  'LBL_MODULE_TITLE' => 'Наборы данных: Главная',
  'LBL_SEARCH_FORM_TITLE' => 'Поиск набора данных',
  'LBL_LIST_FORM_TITLE' => 'Список наборов данных',
  'LBL_LIST_NAME' => 'Набор данных',
  'LBL_LIST_QUERY_NAME' => 'Имя запроса',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Выходные данные по умолчанию',
  'LBL_LIST_LIST_ORDER_Y' => 'Расположение по оси Y',
  'LBL_LIST_LIST_ORDER_X' => 'Расположение по оси X',
  'LBL_LIST_VISIBLE' => 'Видимый',
  'LBL_LIST_EXPORTABLE' => 'Экспортируемый',
  'LBL_LIST_HEADER' => 'Отображать заголовок',
  'LBL_NAME' => 'Название набора данных:',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_TYPE' => 'Тип:',
  'LBL_PARENT_DATASET' => 'Источник данных:',
  'LBL_QUERY_NAME' => 'Имя запроса:',
  'LBL_OUTPUT_DEFAULT' => 'Тип выходных данных по умолчанию:',
  'LBL_LIST_ORDER_Y' => 'Вертикальное размещение:',
  'LBL_LIST_ORDER_X' => 'Горизонтальное размещение:',
  'LBL_HEADER' => 'Отображать заголовок:',
  'LBL_EXPORTABLE' => 'Экспортируемый (Только CSV-файл):',
  'LBL_VISIBLE' => 'Набор видимых данных:',
  'LBL_TABLE_WIDTH' => 'Ширина таблицы %:',
  'LBL_FONT_SIZE' => 'Размер шрифта:',
  'LBL_REPORT_NAME' => 'Название отчета:',
  'LBL_PRESPACE_Y' => 'Связать с предыдущим форматом данных:',
  'LBL_TABLE_WIDTH_TYPE' => 'Тип ширины таблицы:',
  'LBL_BODY_TEXT_COLOR' => 'Цвета основного текста:',
  'LBL_HEADER_TEXT_COLOR' => 'Цвета текста заголовка:',
  'LBL_HEADER_BACK_COLOR' => 'Цвет фона заголовка:',
  'LBL_BODY_BACK_COLOR' => 'Цвета фона основного текста:',
  'LBL_USE_PREV_HEADER' => 'Не отрывать от предыдущего заголовка:',
  'LBL_CHILD_NAME' => 'Подчинённый запрос:',
  'LBL_CUSTOM_LAYOUT' => 'Индивидуальный макет:',
  'LNK_LIST_REPORTMAKER' => 'Список отчетов по компании',
  'LNK_NEW_REPORTMAKER' => 'Создать новый отчет',
  'LNK_LIST_DATASET' => 'Список форматов данных',
  'LNK_NEW_DATASET' => 'Создать формат даты',
  'LNK_NEW_CUSTOMQUERY' => 'Создать индивидуальный запрос',
  'LNK_CUSTOMQUERIES' => 'Индивидуальные запросы',
  'LNK_NEW_QUERYBUILDER' => 'Создать запрос',
  'LNK_QUERYBUILDER' => 'Конструктор запросов',
  'LBL_ALL_REPORTS' => 'Просмотр отчетов',
  'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
  'ERR_DELETE_RECORD' => 'Вы должны указать номер записи перед удалением продукта.',
  'LBL_LAYOUT_TYPE' => 'Тип макета:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Значение по умолчанию:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Тип отображения:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Порядок списка X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Порядок списка Z:',
  'LBL_MODIFY_HEAD' => 'Изменить атрибуты заголовка:',
  'LBL_MODIFY_BODY' => 'Изменить атрибуты основного текста',
  'LBL_BG_COLOR' => 'Цвет фона:',
  'LBL_WRAP' => 'Обернуть текст:',
  'LBL_DISPLAY_TYPE' => 'Тип отображения:',
  'LBL_STYLE' => 'Стиль шрифта:',
  'LBL_DISPLAY_NAME' => 'Имя для отображения:',
  'LBL_FORMAT_TYPE' => 'Тип формата:',
  'LBL_FORMAT' => 'Формат:',
  'LBL_CELL_SIZE' => 'Ширина колонки:',
  'LBL_HIDE_COLUMN' => 'Спрятать колонку в отчете:',
  'LBL_FINISHED_BUTTON' => 'Готово',
  'CONFIRM_LAYOUT_DISABLE' => 'При выключении индивидуального макета будут удалены все существующие индивидуальные настройки макета.',
  'LBL_LEFT' => 'Слева',
  'LBL_RIGHT' => 'Справа',
);

