<?php
require_once('custom/modules/Accounts/lib/DataHelper.php');
global $db;
$data4graph = DataHelper::getData($_REQUEST['accounts_id']);
$html = DataHelper::getHTML($data4graph);
$pdfContent = DataHelper::getPdfContent($html);
//Showing PDF for download
ob_clean();
header("Content-type: application/pdf;");
header("Content-Disposition: attachment; filename=clientNetWorthHistory.pdf");
header("Content-Length: " . strlen($pdfContent));

echo $pdfContent;
exit();
?>