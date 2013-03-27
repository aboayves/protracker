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
  'LBL_EDIT_LAYOUT' => 'Editar Diseño',
  'LBL_MODULE_NAME' => 'Formato de Datos',
  'LBL_MODULE_TITLE' => 'Formatos de Datos: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Formatos de Datos',
  'LBL_LIST_FORM_TITLE' => 'Lista de Formatos de Datos',
  'LBL_LIST_NAME' => 'Nombre del Formato de Datos',
  'LBL_LIST_QUERY_NAME' => 'Nombre de Consulta',
  'LBL_LIST_OUTPUT_DEFAULT' => 'Salida por Defecto',
  'LBL_LIST_LIST_ORDER_Y' => 'Orden Y',
  'LBL_LIST_LIST_ORDER_X' => 'Orden X',
  'LBL_LIST_VISIBLE' => '¿Visible?',
  'LBL_LIST_EXPORTABLE' => '¿Exportable?',
  'LBL_LIST_HEADER' => '¿Mostrar Cabecera?',
  'LBL_NAME' => 'Nombre del Formato de Datos:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_PARENT_DATASET' => 'Formato de Datos Padre:',
  'LBL_QUERY_NAME' => 'Nombre de Consulta:',
  'LBL_OUTPUT_DEFAULT' => 'Tipo de Salida por Defecto:',
  'LBL_LIST_ORDER_Y' => 'Orden en Eje Y:',
  'LBL_LIST_ORDER_X' => 'Orden en Eje X:',
  'LBL_HEADER' => 'Mostrar Cabecera:',
  'LBL_EXPORTABLE' => 'Exportable (Sólo Archivo CSV):',
  'LBL_VISIBLE' => 'Formato de Datos Visible:',
  'LBL_TABLE_WIDTH' => 'Anchura de la Tabla %:',
  'LBL_FONT_SIZE' => 'Tamaño de la Fuente:',
  'LBL_REPORT_NAME' => 'Nombre de Informe:',
  'LBL_PRESPACE_X' => 'Margen lateral:',
  'LBL_PRESPACE_Y' => 'Combinar con el Formato de Datos previo:',
  'LBL_TABLE_WIDTH_TYPE' => 'Tipo de Ancho de Tabla:',
  'LBL_BODY_TEXT_COLOR' => 'Color de Texto del Cuerpo:',
  'LBL_HEADER_TEXT_COLOR' => 'Color de Texto de la Cabecera:',
  'LBL_HEADER_BACK_COLOR' => 'Color de Fondo de la Cabecera:',
  'LBL_BODY_BACK_COLOR' => 'Color de Fondo del Cuerpo:',
  'LBL_USE_PREV_HEADER' => 'Agrupar con Cabecera previa:',
  'LBL_CHILD_NAME' => 'Subconsulta/Consulta hija:',
  'LBL_CUSTOM_LAYOUT' => 'Diseño Personalizado:',
  'LNK_LIST_REPORTMAKER' => 'Lista de Informes Empresariales',
  'LNK_NEW_REPORTMAKER' => 'Crear Informe',
  'LNK_LIST_DATASET' => 'Lista de Formatos de Datos',
  'LNK_NEW_DATASET' => 'Crear Formato de Datos',
  'LNK_NEW_CUSTOMQUERY' => 'Crear Consulta Personalizada',
  'LNK_CUSTOMQUERIES' => 'Consultas Personalizadas',
  'LNK_NEW_QUERYBUILDER' => 'Crear Consulta',
  'LNK_QUERYBUILDER' => 'Diseñador de Consultas',
  'LBL_ALL_REPORTS' => 'Todos los Informes',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el producto.',
  'LBL_LAYOUT_TYPE' => 'Tipo de Diseño:',
  'LBL_LAYOUT_PARENT_VALUE' => 'Valor por Defecto:',
  'LBL_LAYOUT_DISPLAY_TYPE' => 'Tipo de Visualización:',
  'LBL_LAYOUT_LIST_ORDER_X' => 'Orden de Lista en Eje X:',
  'LBL_LAYOUT_LIST_ORDER_Z' => 'Orden de Lista en Eje Z:',
  'LBL_MODIFY_HEAD' => 'Modificar Atributos de la Cabecera:',
  'LBL_MODIFY_BODY' => 'Modificar Atributos del Cuerpo:',
  'LBL_BG_COLOR' => 'Color de Fondo:',
  'LBL_WRAP' => 'Ajustar Texto:',
  'LBL_DISPLAY_TYPE' => 'Tipo de Visualización:',
  'LBL_STYLE' => 'Estilo de Fuente:',
  'LBL_DISPLAY_NAME' => 'Nombre de Visualización:',
  'LBL_FORMAT_TYPE' => 'Tipo de Formato:',
  'LBL_FORMAT' => 'Formato:',
  'LBL_CELL_SIZE' => 'Anchura de Celda:',
  'LBL_HIDE_COLUMN' => 'Ocultar Columna en Informe:',
  'LBL_FINISHED_BUTTON' => 'Terminado',
  'CONFIRM_LAYOUT_DISABLE' => 'Al deshabilitar el diseño por defecto se perderán todas las propiedades actuales del diseño personalizado',
  'LBL_LEFT' => 'Izquierda',
  'LBL_RIGHT' => 'Derecha',
);

