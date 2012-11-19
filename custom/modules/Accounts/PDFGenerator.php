<?php

require_once('include/tcpdf/config/lang/eng.php');
require_once('include/tcpdf/tcpdf.php');

class PDFGenerator extends TCPDF{
	public $client;
	public $coclient;
	public $netWorthDate;
	
	public function __construct($client, $coclient, $netWorthDate){
		$this->client = $client;
		$this->coclient = $coclient;
		$this->netWorthDate = $netWorthDate;
		
		parent::__construct('L', PDF_UNIT,  'letter', true, 'UTF-8', false);
	}
	
	public function Header() {
		global $timedate;
		
		$client_name = $this->client . ", " . $this->coclient;
		$generate_date = date('l, M d, Y', strtotime($timedate->to_db_date($this->netWorthDate, false))); //"Thursday, May 28, 2009";
		
		$style_bold_line = array('width' => 0.5, 'color' => array(0, 0, 0));
		$this->SetFont('helvetica', 'B', 14, '', true);
		$this->Text(10, 18,"Net Worth Statement For {$client_name} ");
		$this->SetFont('helvetica', 'B', 7, '', true);
		$this->Text(10, 23, "As of {$generate_date} ");
		
		$this->Line(10, 26, 270, 26, $style_bold_line);
		$this->SetFont('helvetica', 'B', 5, '', true);
		
		$this->Text(10, 31, "Account Type");
		$this->Text(38, 31, "Institution");
		$this->Text(66, 31, "Account Name");
		$this->Text(94, 31, "Account #");
		$this->Text(122, 31, "Client");
		$this->Text(150, 31, "Client Trust");
		$this->Text(178, 31, "Co Client");
		$this->Text(206, 31, "Co Client Trust");
		$this->Text(234, 31, "Joint or CP");
		$this->Text(262, 31, "Total");
		
		$this->Line(10, 32, 270, 32, $style_bold_line);
	}

	public function Footer() {
		$this->SetY(-15);
		$this->SetX(253);
		$this->SetFont('helvetica', '', 8);
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().' of '.$this->getAliasNbPages(), 0, false, '', 0, '', 0, false, 'T', 'M');
		
		$this->SetY(-15);
		$this->SetX(7);
		$this->SetFont('helvetica', '', 8);
		$this->Cell(0, 10, date("m/d/y"), 0, false, '', 0, '', 0, false, 'T', 'M');
	}

	function makePDF($data){
		$style_bold_line = array('width' => 0.5, 'color' => array(0, 0, 0));
		$style_simple_line = array('width' => 0.25, 'color' => array(0, 0, 0));
		
		$this->SetCreator("NetWoth Statement");
		$this->SetAuthor('ProTraker');
		$this->SetTitle('Net Worth Statement');
		$this->SetSubject('Net Worth Statement');
		$this->SetKeywords('TCPDF, PDF, example, test, guide');
		
		$this->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		$this->SetFont('helvetica', '', 4, '', true);
		$this->AddPage();
		
		$line_space = 32;
		$left_start = 10;
		$Categories = $data['Categories'];
		foreach($Categories as $asset_type => $asset){		
			$line_space += 6;
			$this->SetFont('helvetica', 'B', 14, '', true);
			$this->Text($left_start, $line_space, $asset_type);
			
			$this->SetFont('helvetica', '', 7, '', true);
			$line_space += 5;
			
			foreach ($asset['data'] as $value){	
				$this->Line($left_start, $line_space, 270, $line_space, $style_simple_line);		
				$line_space += 4;
				$space = 10;
				
				foreach ($value as $value1){
					if($line_space > 270){
						$this->AddPage();
						$line_space = 32;
						$left_start = 10;
						$this->SetFont('helvetica', 'B', 14, '', true);
						$this->Text($left_start, $line_space, $asset_type);
						$this->SetFont('helvetica', '', 5, '', true);
						$line_space += 5;
						$this->Line($left_start, $line_space, 270, $line_space, $style_simple_line);		
						$line_space += 4;
					}
					
					$this->Text($space, $line_space, $value1);
					$space += 28;
				}
				$line_space += 4;
			}
			
			$Subtotal = $asset['Subtotal'];
			$this->Line($left_start, $line_space, 270, $line_space++, $style_simple_line);	
			$line_space += 2;
			$this->SetFont('helvetica', 'B', 5, '', true);
			$this->Text(94, $line_space, "{$asset_type} Subtotals:");
			$this->SetFont('helvetica', '', 5, '', true);
			
			$this->Text(122, $line_space, $Subtotal['Client']);
			$this->Text(150, $line_space, $Subtotal['Client Trust']);
			$this->Text(178, $line_space, $Subtotal['Co Client']);
			$this->Text(206, $line_space, $Subtotal['Co Client Trust']);
			$this->Text(234, $line_space, $Subtotal['Joint or CP']);
			$this->Text(262, $line_space, $Subtotal['Total']);
			
			$line_space += 3;
			$this->Line($left_start, $line_space , 270, $line_space, $style_bold_line);
		}
		
		$Net_worth = $data['Net Worth'];
		$this->SetFont('helvetica', 'B', 5, '', true);
		$line_space += 4;
		
		$this->Text(94, $line_space, "Net Worth:");
		$this->SetFont('helvetica', '', 5, '', true);
		$this->Text(122, $line_space, $Net_worth['Client']);
		$this->Text(150, $line_space,  $Net_worth['Client Trust']);
		$this->Text(178, $line_space, $Net_worth['Co Client']);
		$this->Text(206, $line_space, $Net_worth['Co Client Trust']);
		$this->Text(234, $line_space, $Net_worth['Joint or CP']);
		$this->Text(262, $line_space, $Net_worth['Total']);
		
		$line_space += 2;
		$this->Line(90, $line_space, 270, $line_space, $style_simple_line);
		$this->Line(90, floatval($line_space)+ 0.6, 270, floatval($line_space)+ 0.6, $style_simple_line);	
		
		$this->Output("Networth Statement ".date("m-d-y"), 'D');
	}
}
?>