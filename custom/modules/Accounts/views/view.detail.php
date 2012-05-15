<?php 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/json_config.php'); 
require_once('include/MVC/View/views/view.detail.php'); 
class AccountsViewDetail extends ViewDetail 
{ 
    function AccountsViewDetail() 
        { 
                parent::ViewDetail(); 
                    } 
                        function display() 
                            { 
                                    $this->dv->defs['templateMeta']['form']['buttons'] = array (
                                                0 => 'EDIT',
                                                1 => 'DUPLICATE',
                                                2 => 'DELETE',
                                                3 => 'FIND_DUPLICATES',
                                                4 => 'CONNECTOR',
                                                5 => array (
//                                                  'customCode' => '<input title="Export to CSV" accesskey="x" class="button" onclick="javascript:window.open('."'".'export_lead.php?record='.$_GET['record']."'".');" name="exportcsv" value="Export to CSV" type="button">'),
                                                  //'customCode' => '<input title="Export" class="button" onclick="this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'CsvExport\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';" type="submit" name="Export" value="Export">')
                                                  //'customCode' => '<input title="Export" class="button" onclick="this.form.action.value=\'CsvExport\'; " type="submit" name="Export" value="Export">')
                                                  'customCode' => '<form action="index.php" method="POST" name="CSV Export" id="csv_export"><input type="hidden" name="action" value="CsvExport" /><input type="hidden" name="module" value="Accounts" /><input type="hidden" name="record" value="{$fields.id.value}" /><input type="hidden" name="query" value="pt"/><input type="hidden" name="to_pdf" value="true" /><button type="submit" name="csv_export" value="Export to CSV">Export to CSV</button></form>'),
                                                  ); 
                                                        parent::display(); 
                                                            } 
} 
?>
