<?php
	require_once("include/MVC/Controller/SugarController.php");
	
	class AccountsController extends SugarController{
		function action_printnetworth(){
			global $db, $timedate;
			
			require_once('custom/modules/Accounts/PDFGenerator.php');
			
			$netWorthDate = !empty($_REQUEST['net_worth_date']) ? $_REQUEST['net_worth_date'] : $timedate->nowDate();
			$netWorthDate = $timedate->to_db_date($netWorthDate, false);
			
//----------------------------------------------------------------------------------
//							Getting Client Info
//----------------------------------------------------------------------------------

			$client = "";
			$coClient = "";
			
			$sql = "SELECT ".
						"IFNULL(contacts.salutation,'') as 'salutation', ".
						"IFNULL(contacts.first_name,'') as 'first_name', ".
						"IFNULL(contacts.last_name,'') as 'last_name', ".
						"contacts.contact_priority ".
					"FROM ".
						"contacts ".
					"INNER JOIN ".
						"accounts_contacts_1_c ".
					"ON ".
						"contacts.id = accounts_contacts_1_c.accounts_contacts_1contacts_idb AND ".
						"accounts_contacts_1_c.deleted = '0' AND ".
						"accounts_contacts_1_c.accounts_contacts_1accounts_ida = '" . $this->bean->id . "' ".
					"WHERE ".
						"contacts.contact_priority IN ('Primary','Secondary') AND ".
						"contacts.deleted='0'";
			$res = $db->query($sql);
			while($row = $db->fetchByAssoc($res)){
				$name = trim($row['salutation'] . ' ' . $row['first_name'] . ' ' . $row['last_name']);
				
				$client = $row['contact_priority'] == 'Primary' ? $name : $client;
				$coClient = $row['contact_priority'] == 'Secondary' ? $name : $coClient;
			}
			
//----------------------------------------------------------------------------------
//						Populating PDF Data
//----------------------------------------------------------------------------------
			
			$data = array(
				'Categories' => array(),
				'Net Worth' => 
				array(
					'Client' => 0,
					'Client Trust' => 0,
					'Co Client' => 0,
					'Co Client Trust' => 0,
					'Joint or CP' => 0,
					'Total' => 0,
				),
			);
			
//------------ Getting old values from history according to date selected ------------
			$oldValues = array();
			$sql = "SELECT ".
						"aa.id, ".
						"ah.value ".
					"FROM ".
						"accounts_av_accounts_c aaa ".
					"INNER JOIN ".
						"av_accounts aa ".
					"ON ".
						"aaa.accounts_av_accountsav_accounts_idb=aa.id AND ".
						"aa.deleted=0 AND ".
						"aa.is_closed='0' ".
					"INNER JOIN ".
						"av_accounts_av_account_histories_c aah ".
					"ON ".
						"aa.id=aah.av_accounts_av_account_historiesav_accounts_ida AND ".
						"aah.deleted='0' ".
					"INNER JOIN ".
						"av_account_histories ah ".
					"ON ".
						"aah.av_accounts_av_account_historiesav_account_histories_idb=ah.id AND ".
						"ah.deleted='0' AND ".
						"ah.value_date <= '" . $netWorthDate . "' ".
					"WHERE ".
						"aaa.deleted=0 AND ".
						"aaa.accounts_av_accountsaccounts_ida='" . $this->bean->id . "' ".
					"GROUP BY ".
						"aa.id ".
					"ORDER BY ".
						"aa.id ASC, ".
						"ah.value_date DESC";
			$res = $db->query($sql);
			while($row = $db->fetchByAssoc($res)){
				$oldValues[$row['id']] = $row['value'];
			}
			
//---------------------- Getting actual data from DB ---------------------------------
			
			$sql = "SELECT ".
						"at.name as 'Account Type', ".
						"comp.name as 'Institution', ".
						"aa.name as 'Account Name', ".
						"aa.account_number as 'Account #', ".
						"aa.id, ".
						"aa.ownership_type, ".
						"aa.value, ".
						"ac.name as 'Category', ".
						"ac.is_liability ".
					"FROM ".
						"accounts_av_accounts_c aaa ".
					"INNER JOIN ".
						"av_accounts aa ".
					"ON ".
						"aaa.accounts_av_accountsav_accounts_idb=aa.id AND aa.deleted=0 AND aa.is_closed='0' ".
					"LEFT JOIN ".
						"av_accounts_av_companies_1_c aaac ".
					"ON ".
						"aaac.av_accounts_av_companies_1av_accounts_ida=aa.id AND aaac.deleted=0 ".
					"LEFT JOIN ".
						"av_companies comp ".
					"ON ".
						"comp.id=aaac.av_accounts_av_companies_1av_companies_idb AND comp.deleted=0 ".
					"LEFT JOIN ".
						"av_account_types_av_accounts_1_c ata ".
					"ON ".
						"aa.id=ata.av_account_types_av_accounts_1av_accounts_idb AND ata.deleted=0 ".
					"LEFT JOIN ".
						"av_account_types at ".
					"ON	".
						"ata.av_account_types_av_accounts_1av_account_types_ida=at.id AND at.deleted=0 ".
					"LEFT JOIN ".
						"av_account_categories_av_account_types_1_c acat ".
					"ON ".
						"at.id=acat.av_account_categories_av_account_types_1av_account_types_idb AND acat.deleted=0 ".
					"LEFT JOIN ".
						"av_account_categories ac ".
					"ON ".
						"acat.av_account296eegories_ida=ac.id AND ac.deleted=0 ".
					"WHERE ".
						"aaa.deleted=0 AND aaa.accounts_av_accountsaccounts_ida='" . $this->bean->id . "' ".
					"ORDER BY ".
						"ac.report_sort ASC, ac.name ASC, at.report_sort ASC, at.name ASC, aa.name ASC";
			
			$res = $db->query($sql);
			while($row = $db->fetchByAssoc($res)){
				if(!isset($data['Categories'][$row['Category']])){
					$data['Categories'][$row['Category']] = array(
						'data' => array(),
						'is_liability' => $row['is_liability'],
						'Subtotal' =>
						array(
							'Client' => 0,
							'Client Trust' => 0,
							'Co Client' => 0,
							'Co Client Trust' => 0,
							'Joint or CP' => 0,
							'Total' => 0,
						),
					);
				}
				
				//Loading appropriate value
				$row['value'] = isset($oldValues[$row['id']]) && !empty($oldValues[$row['id']]) ? $oldValues[$row['id']] : $row['value'];
				
				$data['Categories'][$row['Category']]['data'][] = array(
					'Account Type' => $row['Account Type'],
					'Institution' => $row['Institution'],
					'Account Name' => $row['Account Name'],
					'Account #' => $row['Account #'],
					'Client' => $row['ownership_type'] == 'Client' ? $row['value'] : '',
					'Client Trust' => $row['ownership_type'] == 'Client_Trust' ? $row['value'] : '',
					'Co Client' => $row['ownership_type'] == 'Co_Client' ? $row['value'] : '',
					'Co Client Trust' => $row['ownership_type'] == 'Co_Client_Trust' ? $row['value'] : '',
					'Joint or CP' => $row['ownership_type'] == 'Joint_CP' ? $row['value'] : '',
					'Total' => $row['value'],
				);
			}
			
//----------------------------------------------------------------------------------
//						Filling Subtotals and Totals
//----------------------------------------------------------------------------------
			
			if(!empty($data['Categories'])){
				foreach($data['Categories'] as $catName => &$cat){
					foreach($cat['data'] as &$row){
						//Calculating subtotal
						$cat['Subtotal']['Client'] += intval($row['Client']);
						$cat['Subtotal']['Client Trust'] += intval($row['Client Trust']);
						$cat['Subtotal']['Co Client'] += intval($row['Co Client']);
						$cat['Subtotal']['Co Client Trust'] += intval($row['Co Client Trust']);
						$cat['Subtotal']['Joint or CP'] += intval($row['Joint or CP']);
						$cat['Subtotal']['Total'] += intval($row['Total']);
						
						//Formatting numbers
						$row['Client'] = number_format(intval($row['Client']), 2, '.', ',');
						$row['Client Trust'] = number_format(intval($row['Client Trust']), 2, '.', ',');
						$row['Co Client'] = number_format(intval($row['Co Client']), 2, '.', ',');
						$row['Co Client Trust'] = number_format(intval($row['Co Client Trust']), 2, '.', ',');
						$row['Joint or CP'] = number_format(intval($row['Joint or CP']), 2, '.', ',');
						$row['Total'] = number_format(intval($row['Total']), 2, '.', ',');
					}
					
					//Calculating total
					if($cat['is_liability'] == '1'){
						$data['Net Worth']['Client'] -= intval($data['Categories'][$catName]['Subtotal']['Client']);
						$data['Net Worth']['Client Trust'] -= intval($data['Categories'][$catName]['Subtotal']['Client Trust']);
						$data['Net Worth']['Co Client'] -= intval($data['Categories'][$catName]['Subtotal']['Co Client']);
						$data['Net Worth']['Co Client Trust'] -= intval($data['Categories'][$catName]['Subtotal']['Co Client Trust']);
						$data['Net Worth']['Joint or CP'] -= intval($data['Categories'][$catName]['Subtotal']['Joint or CP']);
						$data['Net Worth']['Total'] -= intval($data['Categories'][$catName]['Subtotal']['Total']);
					}else{
						$data['Net Worth']['Client'] += intval($data['Categories'][$catName]['Subtotal']['Client']);
						$data['Net Worth']['Client Trust'] += intval($data['Categories'][$catName]['Subtotal']['Client Trust']);
						$data['Net Worth']['Co Client'] += intval($data['Categories'][$catName]['Subtotal']['Co Client']);
						$data['Net Worth']['Co Client Trust'] += intval($data['Categories'][$catName]['Subtotal']['Co Client Trust']);
						$data['Net Worth']['Joint or CP'] += intval($data['Categories'][$catName]['Subtotal']['Joint or CP']);
						$data['Net Worth']['Total'] += intval($data['Categories'][$catName]['Subtotal']['Total']);
					}
					
					//Formatting numbers
					$cat['Subtotal']['Client'] = number_format($cat['Subtotal']['Client'], 2, '.', ',');
					$cat['Subtotal']['Client Trust'] = number_format($cat['Subtotal']['Client Trust'], 2, '.', ',');
					$cat['Subtotal']['Co Client'] = number_format($cat['Subtotal']['Co Client'], 2, '.', ',');
					$cat['Subtotal']['Co Client Trust'] = number_format($cat['Subtotal']['Co Client Trust'], 2, '.', ',');
					$cat['Subtotal']['Joint or CP'] = number_format($cat['Subtotal']['Joint or CP'], 2, '.', ',');
					$cat['Subtotal']['Total'] = number_format($cat['Subtotal']['Total'], 2, '.', ',');
				}
			}
			
			//Formatting numbers
			$data['Net Worth']['Client'] = number_format($data['Net Worth']['Client'], 2, '.', ',');
			$data['Net Worth']['Client Trust'] = number_format($data['Net Worth']['Client Trust'], 2, '.', ',');
			$data['Net Worth']['Co Client'] = number_format($data['Net Worth']['Co Client'], 2, '.', ',');
			$data['Net Worth']['Co Client Trust'] = number_format($data['Net Worth']['Co Client Trust'], 2, '.', ',');
			$data['Net Worth']['Joint or CP'] = number_format($data['Net Worth']['Joint or CP'], 2, '.', ',');
			$data['Net Worth']['Total'] = number_format($data['Net Worth']['Total'], 2, '.', ',');
			
//----------------------------------------------------------------------------------
//						Prinitng PDF
//----------------------------------------------------------------------------------
			
			$pdf = new PDFGenerator($data, $client, $coClient, date('l, M d, Y', strtotime($netWorthDate)));
			$pdf->makePDF();
		}
	}
?>