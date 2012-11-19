<?php
$admin_option_defs = array();
$admin_option_defs['UnifiedLogin'] = array(
'themes/default/images/WorkFlow.gif', 'LBL_UNIFIED_LOGIN', 'LBL_REG_UNIFIED_LOGIN', 'javascript:dialogForURL();');
// Loop through the menus and add to the Users group
foreach ($admin_group_header as $key => $values)
{
	if ($values[0] == 'LBL_ADMINISTRATION_HOME_TITLE')
	{
		$admin_group_header[$key][3]['Administration']['UnifiedLogin'] = $admin_option_defs['UnifiedLogin'];
	}
}
echo '<div id="dialogForURL" title="Enter REST URL" style="display:none"><br/><br/>
		  <form name="input" action="index.php?module=Users&action=register_admin" method="POST">
			  Enter URL: <input type="text" id="rest_url" name="rest_url"/> &nbsp;
			  <input type="submit" id="create_admin" name="create_admin" value="Register"/>
		  </form>
	 </div>';
echo '<script type="text/javascript">
		function dialogForURL()
		{
			 $( "#dialogForURL" ).dialog({ width: 400 });
		}
		
      </script>';
?>