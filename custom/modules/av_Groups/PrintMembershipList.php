<?php
global $db;

$html="
<h1>{$_REQUEST['name']} Members List</h1>
<table border='1'> 
	<tr>
		<th>Group</th>
		<th>Include</th>
		<th>Opted Out</th>
		<th>Expiration</th>
		<th>Delevery Method</th>
		<th>Comments</th>
	</tr>";

$sql="
SELECT rt_group_membership.name, rt_group_membership.include, rt_group_membership.opted_out, rt_group_membership.expiration_date, rt_group_membership.delivery_method, rt_group_membership.comments
FROM rt_group_membership_av_groups_c
LEFT JOIN rt_group_membership ON (rt_group_membership.deleted=0 AND rt_group_membership.id = rt_group_membership_av_groups_c.rt_group_membership_av_groupsrt_group_membership_idb)
WHERE rt_group_membership_av_groups_c.deleted=0 AND rt_group_membership_av_groups_c.rt_group_membership_av_groupsav_groups_ida='{$_REQUEST['record']}'";

$members = $db->query($sql);

while($member = $db->fetchByAssoc($members))
{
	$include_checked =( $member['include'])? " checked={$member['include']} ": "";
	$opted_checked = ($member['opted_out'])? " checked={$member['include']} ": "";
	
	$html.="
	<tr>
		<td>{$member['name']} </td>
		<td><input type='checkbox' {$include_checked}/> </td>    
		<td><input type='checkbox' {$opted_checked}/> </td>
		<td>{$member['expiration_date']} </td>
		<td>{$member['delivery_method']}</td>
		<td>{$member['comments']}</td>
	</tr>";
}

$html.="
</table>
";

require_once('custom/include/mpdf/mpdf.php');

$mpdf=new mPDF('c','A4','','',32,25,27,25,16,13); 
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;	
$stylesheet = file_get_contents('custom/include/mpdf/mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html);

$mpdf->Output("'".$_REQUEST['name']." Member List'",'I');

?>