<?php
if ($_REQUEST['value']=='1') {
	$name="../themes/ProTracker/images/".$_REQUEST['name'].".gif";
} else {
	$name="../themes/ProTracker/images/blank.gif";
}
$fp = fopen($name, 'rb');
header("Content-Type: image/gif");
header("Content-Length: " . filesize($name));
fpassthru($fp);
exit;
?>