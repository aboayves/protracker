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
												5 => array(
													'customCode' => "
<input type='hidden' value='pt' name='query'>
<input type='hidden' value='false' name='to_pdf'>
<input onclick=\"this.form.to_pdf.value='true';this.form.action.value='CsvExport';SUGAR.ajaxUI.submitForm(this.form);this.form.to_pdf.value='false';\" type='button' name='csv_export' value='Export to CSV' />",
												),
                                                  ); 
                                                        parent::display(); 
                                                            } 
} 
?>
