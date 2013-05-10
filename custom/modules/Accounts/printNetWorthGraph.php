<?php
require_once('custom/modules/Accounts/lib/DataHelper.php');
require_once('include/tcpdf/tcpdf.php');
global $db;
$data4graph = DataHelper::getData($_REQUEST['account_id']);
$html = DataHelper::getHTML($data4graph);
ob_clean();
$pdf = new TCPDF('L', PDF_UNIT, 'A4', true, 'UTF-8', false);		 
		// set font
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('times', '', 16);
 
// add a page
$pdf->AddPage();

// print html formated text
$pdf->writeHtml($html);
$pdf->SetFont('times', 'B', 12);
$pdf->Text(120, 32,"Client Net Worth History Graph");
$pdf->Image('cache/images/clientNetWorthHistory.png', 15, 33, 0, 156);
//Close and output PDF document
$pdf->Output('clientNetWorthHistory.pdf', 'D');
exit();
?>