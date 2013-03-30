<?php
/*********************************************************************************
 *  
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * You may copy and distribute this program :
 *  You give the recipient a copy of this License.
 * You give credit to all Contributors 
 *
 * CARRENET  - 2009-2012
 * http://www.carrenet.com/sugarcrm
 * info@carrenet.com
 ********************************************************************************/
$dictionary['Tags'] = array(
	'table'=>'tags',
	'audited'=>true,
	'fields'=>array (
  'count' => 
  array (
    'required' => false,
    'name' => 'count',
    'vname' => 'LBL_COUNT',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '11',
    'disable_num_format' => '',
  ),
),
	'relationships'=>array (
),
	'optimistic_lock'=>true,
);
require_once('include/SugarObjects/VardefManager.php');
VardefManager::createVardef('Tags','Tags', array('basic','assignable'));
