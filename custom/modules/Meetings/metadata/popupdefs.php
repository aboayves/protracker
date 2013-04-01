<?php
$popupMeta = array (
    'moduleMain' => 'Meetings',
    'varName' => 'Meeting',
    'orderBy' => 'meetings.name',
    'whereClauses' => array (
  'name' => 'meetings.name',
  'date_start' => 'meetings.date_start',
  'parent_name' => 'meetings.parent_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'date_start',
  5 => 'parent_name',
),
    'searchdefs' => array (
  'date_start' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'name' => 'date_start',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'label' => 'LBL_LIST_RELATED_TO',
    'width' => '10%',
    'name' => 'parent_name',
  ),
),
);
