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


//NOTE: Under the License referenced above, you are required to leave in all copyright statements in both
//the code and end-user application.

global $sugar_config, $mod_strings;
//include('ThirdPartyCredits.php');
?>
<style type="text/css">
ul li {
list-style-type: square;
}
</style>
<?php echo getVersionedScript("modules/Home/about.js"); ?>
<span>
<div class="about" style="padding: 10px 15px 20px 15px;">
<p>
<h1><IMG src="themes/ProTracker/images/company_logo.png" alt="ProTracker Web"></h1>
<br>
<b><?php echo $mod_strings['LBL_VERSION']." 1.3.0" ?></b>&nbsp;&nbsp;<a href="https://protracker.zendesk.com/forums/22009401" target="_blank">Release Notes</a>
</p>

<?php echo "<P>Copyright ".$app_strings['LBL_SUGAR_COPYRIGHT_SUB']."</P>";?>

<P> ProTracker Web&#8482; is a trademark of ProTracker Software, Inc.

<p ><table width="100%" border="0" cellspacing="0" cellpadding="0" class="contentBox">
<tr>
    <td  style="padding-right: 10px;" valign="top" rowspan="2" width="300" >

<IMG src="themes/ProTracker/images/company_hq.jpg" Width=500 >
<br>
<!--
<h3>ProTracker RSS Feeds</h3>
<ul class="noBullet">
	<li class="noBullet" style="margin-bottom: 6px;"><a href="link1" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top">&nbsp;link1</a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="link2" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top">&nbsp;link2</a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="link3" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top">&nbsp;link3</a></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="link4" target="_blank"><img src="include/images/rss_xml.gif" border="0" alt="XML" align="top">&nbsp;link4</a></li>
</ul>
-->
</td>

    <td colspan="2" valign="top" style="padding: 15px 10px 0px 10px;">
		<h3>ProTracker Software, Inc.</h3>
		6 Merrill Drive<BR> 
		Hampton, NH 03842<BR>
		USA<BR>
		+1 (603) 926-8085<BR>
		<a href="http://www.protracker.com" target="_blank">http://www.protracker.com</a>

	<br><br><br>
<h3>ProTracker Help</h3>
<ul class="noBullet">
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://protracker.zendesk.com/forums" target="_blank">Knowledge Base</a>: Search the knowledge base for helpful articles, troubleshooting info, and tips<br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="http://protracker.zendesk.com/anonymous_requests/new" target="_blank">Customer Support</a>: Request assistance, check on the status of a case, or submit enhancement requests<br></li>
	<li class="noBullet" style="margin-bottom: 6px;"><a href="https://protracker.zendesk.com/forums/22001903" target="_blank">Training</a>: Learn about resources, tutorials, and videos that will help you make the most of ProTracker Web.<br></li>
</ul>

</td>
</tr>
</table>

</span>

<br>


</div>
