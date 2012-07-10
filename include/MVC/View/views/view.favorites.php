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

require_once('include/MVC/View/SugarView.php');
require_once('modules/SugarFavorites/SugarFavorites.php');

class ViewFavorites extends SugarView
{
 	public function __construct()
 	{
 		$this->options['show_title'] = false;
		$this->options['show_header'] = false;
		$this->options['show_footer'] = false; 	  
		$this->options['show_javascript'] = false; 
		$this->options['show_subpanels'] = false; 
		$this->options['show_search'] = false; 
 		parent::SugarView();
 	}	
 	
 	public function display()
 	{
 		
 		$favorites = new SugarFavorites();
        $favorites_max_viewed = (!empty($GLOBALS['sugar_config']['favorites_max_viewed']))? $GLOBALS['sugar_config']['favorites_max_viewed'] : 10;
 		$results = $favorites->getUserFavoritesByModule($this->module,$GLOBALS['current_user'], "sugarfavorites.date_modified DESC ", $favorites_max_viewed);
 		$items = array();
 		foreach ( $results as $key => $row ) {
 				 $items[$key]['label'] = $row->record_name;
 				 $items[$key]['record_id'] = $row->record_id;
 				 $items[$key]['module'] = $row->module;
 		}
 		$this->ss->assign('FAVORITES',$items);
 		$this->ss->display('include/MVC/View/tpls/favorites.tpl');
 	}
}
?>
