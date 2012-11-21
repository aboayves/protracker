<?php

require_once('include/tcpdf/tcpdf.php');
	
class PDFGenerator extends TCPDF{
	private $data;
	private $client;
	private $coClient;
	private $netWorthDate;
	private $text_font;
	
	private $hasCoClient = false;
	private $x_offset = 100;
	
	private $style_bold_line = array('width' => 0.5, 'color' => array(0, 0, 0));
	private $style_simple_line = array('width' => 0.25, 'color' => array(0, 0, 0));
	
	private $columnHeaders = array('Account Type', 'Institution', 'Account Name', 'Account #', 'Client', 'Client Trust', 'Co Client', 'Co Client Trust', 'Joint or CP', 'Total');
	
	function __construct($data, $client, $coClient, $net_worth_date) {
		$this->data = $data;
		$this->client = $client;
		$this->coClient = $coClient;
		$this->netWorthDate = $net_worth_date;
		$this->text_font= 'helvetica';
		$this->hasCoClient = !(
								  empty($coClient) &&
								  $data['Net Worth']['Co Client'] == 0 &&
								  $data['Net Worth']['Co Client Trust'] == 0 &&
								  $data['Net Worth']['Joint or CP'] == 0
							 );
		
		if($this->hasCoClient){
			$this->x_offset = 73;
		};
		
		parent::__construct('L', PDF_UNIT,  'letter', true, 'UTF-8', false);
	}
		
	public function Header() {
		global $timedate;
	
		$client_name = $this->client;
		if($this->hasCoClient){
			$client_name .= ", " . $this->coClient;
		}
		
		$this->SetFont($this->text_font, 'B', 14, '', true);
		$this->Text(10, 18,"Net Worth Statement For ". $client_name);
		$this->SetFont($this->text_font, 'B', 10, '', true);
		$this->Text(10, 23, "As of " . date('l, M d, Y', strtotime($timedate->to_db_date($this->netWorthDate, false))));
		$this->Line(10, 26, 270, 26, $this->style_bold_line);
		
		$y_pos = 28;
		$tmp = array();
		foreach($this->columnHeaders as $header){
			$tmp[$header] = $header;
		}
		
		$this->SetFont($this->text_font, 'B', 8, '', true);
		$this->addRow($tmp, $y_pos, true);
		
		$y_pos += 1;
		$this->Line(10, $y_pos, 270, 32, $this->style_bold_line);
	}

	public function Footer() {
		$this->SetY(-15);
		$this->SetX(253);
		$this->SetFont($this->text_font, '', 8);
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().' of '.$this->getAliasNbPages(), 0, false, '', 0, '', 0, false, 'T', 'M');
		
		$this->SetY(-15);
		$this->SetX(7);
		$this->SetFont($this->text_font, '', 8);
		$this->Cell(0, 10, date("m/d/y"), 0, false, '', 0, '', 0, false, 'T', 'M');
	}
	
	function addCategoryHeading($catName, &$y_pos){
		$y_pos += 6;
		$this->SetFont($this->text_font, 'B', 12, '', true);
		$this->Text(10, $y_pos, empty($catName) ? "--Blank--" : $catName);
		
		$y_pos += 2;
		$this->Line(10, $y_pos, 270, $y_pos, $this->style_simple_line);
		
		$this->SetFont($this->text_font, '', 8, '', true);
	}
	
	function addRow($data, &$y_pos, $headers=false){
		$this->y = $y_pos;
		$this->x = 10;
		
		$html = "<table><tr>";
		foreach($data as $colName => $value)	{	
			if(!$this->hasCoClient  && ($colName == 'Co Client' || $colName == 'Co Client Trust' || $colName == 'Joint or CP')){
				continue;
			}
			
			$width = $this->x_offset;
			
			$extraStyle = '';
			if($headers){
				$extraStyle = 'text-align:center;';
			}
			
			if(
				$colName == 'Client' || 
				$colName == 'Client Trust' ||
				$colName == 'Co Client' || 
				$colName == 'Co Client Trust' ||  
				$colName == 'Joint or CP' || 
				$colName == 'Total' || 
				$colName == 'subtotal'
			){
				$extraStyle = 'text-align:right;';
				
				$width -= 10;
			}else if($colName == 'Institution'){
				$width += 20;
			}else if($colName == 'Account Name'){
				$width += 40;
			}
			
			if($colName == 'subtotal'){
				$width = (4 * $this->x_offset) + 60;
				$extraStyle .= 'font-weight:bold;';
			}
			
			$html .= '<td style="width:' . $width . 'px;' . $extraStyle . '">' . $value  . '</td>';
		}
		
	 	$html .= "</tr></table>";
		$this->writeHTML($html, false, false, false, true, '');
		
		$y_pos = $this->y;
	}

	function makePDF(){
		$this->SetCreator("NetWoth Statement");
		$this->SetAuthor('ProTraker');
		$this->SetTitle('Net Worth Statement');
		$this->SetSubject('Net Worth Statement');
		
		$this->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		$this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$this->SetHeaderMargin(PDF_MARGIN_HEADER);
		$this->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		$this->AddPage();
		
		$y_pos = 32;		
		foreach($this->data['Categories'] as $catName => $catData)	{		
			$this->addCategoryHeading($catName, $y_pos);
			
			$lineWidth = 0;
			foreach ($catData['data'] as $row){
				if(ceil($y_pos + $lineWidth) >= 185){
					$y_pos = 32;					
					
					$this->AddPage();
					$this->addCategoryHeading($catName, $y_pos);
				}
				
				$lineWidth = $y_pos += 2;
				$this->addRow($row, $y_pos);
				$lineWidth = $y_pos - $lineWidth;
				
				$y_pos += 2;
				$this->Line(10, $y_pos, 270, $y_pos, $this->style_simple_line);
			}
		
			$y_pos += 1;
			$this->SetFont($this->text_font, '', 8, '', true);
			$this->addRow(array_merge(array('subtotal'=> "{$catName} Subtotals:"), $catData['Subtotal']), $y_pos);
			
			$y_pos += 1;
			$this->Line(10, $y_pos , 270, $y_pos, $this->style_bold_line);
		}
			
		$y_pos += 3;
		$this->SetFont($this->text_font, '', 8, '', true);
		$this->addRow(array_merge(array('subtotal'=> "Net Worth:"), $this->data['Net Worth']), $y_pos);
		
		$line_offset = 157;
		if($this->hasCoClient){
			$line_offset = 117;
		}
		
		$y_pos += 1;
		$this->Line($line_offset, $y_pos, 270, $y_pos, $this->style_simple_line);
		
		$y_pos += 0.6;
		$this->Line($line_offset, $y_pos, 270, $y_pos, $this->style_simple_line);
		
		$this->Output("Networth Statement ".date("m-d-y"), 'I');
	}
}
?>