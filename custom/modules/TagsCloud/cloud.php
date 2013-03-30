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
 * CARRENET  - 2010-2012
 * http://www.carrenet.com/sugarcrm
 * info@carrenet.com
 ********************************************************************************/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


global $db, $sugar_config;



//redirect to tags module in full window
if ($_REQUEST['open_tag_id']<>'')
{
	
	$url = $sugar_config['site_url']."/index.php?action=DetailView&module=Tags&record=".$_REQUEST['open_tag_id'];
	
	echo '<script type="text/javascript">
			<!--
			window.top.location = "'.$url.'"
			//-->
			</script>
		  ';	
	
}


$limit_tags_display=50;

$flat_cloud="";
	
//min and max
$sql="SELECT MIN(count) as min_count, MAX(count) AS max_count FROM tags WHERE deleted = '0' ";
$result=$db->query($sql);
$row = $db->fetchByAssoc($result);
$min_count=$row['min_count'];
$max_count=$row['max_count'];	
	
if ($max_count > 0)
{
	$sql="SELECT * FROM tags WHERE deleted = '0' ORDER BY name limit 0,$limit_tags_display";
	$result=$db->query($sql);
		
	while ($row = $db->fetchByAssoc($result) )
	{
			
		$temp_tags_id=$row['id'];	
		$temp_name=$row['name'];		
		$temp_count=$row['count'];			
		$href_flat=$sugar_config['site_url']."/index.php?action=DetailView&module=Tags&record=$temp_tags_id";				
			
			
		$diviseur=($max_count - $min_count);
		if ($diviseur==0)
			$diviseur=1;
				
		$class_tag_num = ($temp_count - $min_count) * 8 / ($diviseur);

		$class_tag_num=ceil($class_tag_num);
			
		$flat_cloud.="<li class='tag$class_tag_num'><a href='$href_flat' target='_parent' title='$temp_name ($temp_count)'>$temp_name</a></li>\n";
						
	}
} //end if ($max_count > 0)
	
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>CARRENET Tags Cloud</title>
		<meta http-equiv="Content-Type" content="text/html" />
	<style>	
		.tags ul{
			margin:1em 0;
			padding:.5em 10px;
			text-align:center;
			background:#ffffff repeat-x;		
			}
		.tags li{
			margin:0;
			padding:0;
			list-style:none;
			display:inline;
			}
		.tags li a{
			text-decoration:none;
			color:#888888;
			padding:0 2px;
			font-family:Calibri, Arial, Verdana, Helvetica, sans-serif;
			font-weight:bold;
			}
		.tags li a:hover{	
			color:#111111;
			}		
		
		.tag1{font-size:60%;}
		.tag2{font-size:80%;}
		.tag3{font-size:100%;}
		.tag4{font-size:120%;}
		.tag5{font-size:140%;}
		.tag6{font-size:160%;}
		.tag7{font-size:180%;}
		.tag8{font-size:200%;}		
	</style>
	</head>
	<body>
	<div class="tags">

		<ul>
			<?php echo $flat_cloud ?>				
			</ul>
		</div>

</body>
</html>

