<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
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
