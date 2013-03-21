<?php

require_once('include/SugarFields/Fields/Relate/SugarFieldRelate.php');
class SugarFieldRelate_cstm extends SugarFieldRelate {


    /**
     * @see SugarFieldBase::getEditViewSmarty()
     */
    public function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex)
    {
        if(!empty($vardef['function']['returns']) && $vardef['function']['returns'] == 'html'){
            return parent::getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
        }
		
		
        $call_back_function = 'set_return';
        if(isset($displayParams['call_back_function'])) {
            $call_back_function = $displayParams['call_back_function'];
        }
        $form_name = 'EditView';
        if(isset($displayParams['formName'])) {
            $form_name = $displayParams['formName'];
        }

		
		
        if (isset($displayParams['idName']))
        {
            $rpos = strrpos($displayParams['idName'], $vardef['name']);
            $displayParams['idNameHidden'] = substr($displayParams['idName'], 0, $rpos);
        }
        //Special Case for accounts; use the displayParams array and retrieve
        //the key and copy indexes.  'key' is the suffix of the field we are searching
        //the Account's address with.  'copy' is the suffix we are copying the addresses
        //form fields into.
        if(isset($vardef['module']) && preg_match('/Accounts/si',$vardef['module'])
           && isset($displayParams['key']) && isset($displayParams['copy'])) {

            if(isset($displayParams['key']) && is_array($displayParams['key'])) {
              $database_key = $displayParams['key'];
            } else {
              $database_key[] = $displayParams['key'];
            }
			
            if(isset($displayParams['copy']) && is_array($displayParams['copy'])) {
                $form = $displayParams['copy'];
            } else {
                $form[] = $displayParams['copy'];
            }

            if(count($database_key) != count($form)) {
              global $app_list_strings;
              $this->ss->trigger_error($app_list_strings['ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS']);
            } //if

            $copy_phone = isset($displayParams['copyPhone']) ? $displayParams['copyPhone'] : true;
			
            $field_to_name = array();
            $field_to_name['id'] = $vardef['id_name'];
            $address_fields = array('_address_street', '_address_city', '_address_state', '_address_postalcode', '_address_country');
            $count = 0;
            foreach($form as $f) {
                foreach($address_fields as $afield) {
                    $field_to_name[$database_key[$count] . $afield] = $f . $afield;
                }
                $count++;
            }

            $popup_request_data = array(
                'call_back_function' => $call_back_function,
                'form_name' => $form_name,
                'field_to_name_array' => $field_to_name,
            );

            if($copy_phone) {
              $popup_request_data['field_to_name_array']['phone_office'] = 'phone_work';
            }
        } elseif(isset($displayParams['field_to_name_array'])) {
            $popup_request_data = array(
                'call_back_function' => $call_back_function,
                'form_name' => $form_name,
                'field_to_name_array' => $displayParams['field_to_name_array'],
            );
        } else {
            $popup_request_data = array(
                'call_back_function' => $call_back_function,
                'form_name' => $form_name,
                'field_to_name_array' => array(
                          //'id' => (empty($displayParams['idName']) ? $vardef['id_name'] : ($displayParams['idName'] . '_' . $vardef['id_name'])) ,
                          //bug 43770: Assigned to value could not be saved during lead conversion
                          'id' => (empty($displayParams['idNameHidden']) ? $vardef['id_name'] : ($displayParams['idNameHidden'] . $vardef['id_name'])) ,
                          ((empty($vardef['rname'])) ? 'name' : $vardef['rname']) => (empty($displayParams['idName']) ? $vardef['name'] : $displayParams['idName']),
                    ),
                );
			
        }
        $json = getJSONobj();
        $displayParams['popupData'] = '{literal}'.$json->encode($popup_request_data). '{/literal}';
        if(!isset($displayParams['readOnly'])) {
           $displayParams['readOnly'] = '';
        } else {
           $displayParams['readOnly'] = $displayParams['readOnly'] == false ? '' : 'READONLY';
        }

        $keys = $this->getAccessKey($vardef,'RELATE',$vardef['module']);
        $displayParams['accessKeySelect'] = $keys['accessKeySelect'];
        $displayParams['accessKeySelectLabel'] = $keys['accessKeySelectLabel'];
        $displayParams['accessKeySelectTitle'] = $keys['accessKeySelectTitle'];
        $displayParams['accessKeyClear'] = $keys['accessKeyClear'];
        $displayParams['accessKeyClearLabel'] = $keys['accessKeyClearLabel'];
        $displayParams['accessKeyClearTitle'] = $keys['accessKeyClearTitle'];
		
		//$sql = "SELECT "$vardef['rname']." FROM ".$vardef['table']." WHERE ";
		$vardef['value'] = "abc";
		$this->ss->assign('quickSearchCode', $this->createQuickSearchCode($form_name, $vardef));
		//echo $vardef['module'];
		$this->ss->assign("obj",$this);

        $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        return $this->fetch($this->findTemplate('EditView'));
    }

	
	
/*	function createQuickSearchCode($vardef, $vardef, $formName = 'EditView', $module){
	
		require_once('include/TemplateHandler/TemplateHandler.php');
		$tph = new TemplateHandler();
		$javascript = $tph->createQuickSearchCode($vardef, $vardef, $formName = 'EditView', $module);

	}
	*/
    function createQuickSearchCode($formName = 'EditView', $vardef){
        
        $json = getJSONobj();
        $dynamicParentTypePlaceHolder = "**@**"; //Placeholder for dynamic parent so smarty tags are not escaped in json encoding.
      
        $sqsFieldArray = array(
                    'form' => $formName,
                    'method' => 'query',
                    'modules' => array($vardef['module']),
                    'group' => 'or',
                    'field_list' => array('name', 'id'),
                    'populate_list' => array($vardef['name'], $vardef['id_name']),
                    'required_list' => array($vardef['id_name']),
                    'conditions' => array(array('name'=>'name','op'=>'like_custom','end'=>'%','value'=>'')),
                    'order' => 'name',
                    'limit' => '30',
					'post_onblur_function' => 'set_sqs_contractor_data'
                  );
		$qsFieldName = $formName . "_" . $vardef['name'];
        
        //Build the javascript
        $quicksearch_js = '<script language="javascript">';
        $quicksearch_js.= "if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}";
        $quicksearch_js .= "sqs_objects['$qsFieldName']=" . str_replace($dynamicParentTypePlaceHolder, $vardef['module'],$json->encode($sqsFieldArray)) .';';

        return $quicksearch_js .= '</script>';

    }

}
