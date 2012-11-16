<?php
	require_once("include/MVC/Controller/SugarController.php");
	
	class AccountsController extends SugarController{
		function action_printnetworth(){
			require_once('custom/modules/Account/PDFGenerator.php');
			
			$data = array();
			//Make sql query to get data
			
//=======================================================================================================
//									Sample data
//=======================================================================================================
			$client = "John A.Sample";
			$coClient = "Jr. & Mary H. Sample";
			
			$data = array(
				'Liquid Assets' => 
				array(
					'isLiability' => false,
					'data' => 
					array(
						0 => 
						array(
							'Account Type'=>'Bank',
							'Institution'=>'Bank of America',
							'Account Name'=>'',
							'Account #'=>'111-32',
							'Client'=>'',
							'Client Trust'=>'',
							'Co Client'=>'',
							'Co Client Trust'=>'',
							'Joint or CP'=>'1,026',
							'Total'=>'1,026',
						),
						1 => 
						array(
							'Account Type'=>'Credit Union',
							'Institution'=>'Bank of America',
							'Account Name'=>'',
							'Account #'=>'',
							'Client'=>'',
							'Client Trust'=>'',
							'Co Client'=>'10,000',
							'Co Client Trust'=>'',
							'Joint or CP'=>'',
							'Total'=>'10,000',
						),
					),
				),
				'Invested Assets' => 
				array(
					'isLiability' => false,
					'data' => 
					array(
						0 => 
						array(
							'Account Type'=>'Brokerage',
							'Institution'=>'TD Ameritrade',
							'Account Name'=>'',
							'Account #'=>'134-5684566',
							'Client'=>'',
							'Client Trust'=>'',
							'Co Client'=>'',
							'Co Client Trust'=>'375,000',
							'Joint or CP'=>'',
							'Total'=>'375,000',
						),
						1 => 
						array(
							'Account Type'=>'Brokerage',
							'Institution'=>'TD Ameritrade',
							'Account Name'=>'',
							'Account #'=>'432-433-3434',
							'Client'=>'',
							'Client Trust'=>'450,000',
							'Co Client'=>'',
							'Co Client Trust'=>'',
							'Joint or CP'=>'',
							'Total'=>'450,000',
						),
					),
				),
			);
//=======================================================================================================			
			
			$pdf = new PDFGenerator();
			$pdf->makePDF($data, $client, $coClient, $_REQUEST['net_worth_date']);
		}
	}
?>