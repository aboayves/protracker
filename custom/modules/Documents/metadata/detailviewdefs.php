<?php
$viewdefs ['Documents'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
        ),
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_document_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'document_name',
            'label' => 'LBL_DOC_NAME',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'displayParams' => 
            array (
              'link' => 'filename',
              'id' => 'document_revision_id',
            ),
          ),
          1 => 
          array (
            'name' => 'status_id',
            'label' => 'LBL_DOC_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'revision',
            'label' => 'LBL_DOC_VERSION',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'template_type',
            'label' => 'LBL_DET_TEMPLATE_TYPE',
          ),
          1 => 
          array (
            'name' => 'is_template',
            'label' => 'LBL_DET_IS_TEMPLATE',
          ),
        ),
        4 => 
        array (
          0 => 'active_date',
          1 => 'exp_date',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'doc_type',
            'comment' => 'Document type (ex: Google, box.net, LotusLive)',
            'studio' => 
            array (
              'wirelesseditview' => false,
              'wirelessdetailview' => false,
              'wirelesslistview' => false,
              'wireless_basic_search' => false,
            ),
            'label' => 'LBL_DOC_TYPE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 'related_doc_name',
          1 => 'related_doc_rev_number',
        ),
        7 => 
        array (
          0 => 'category_id',
          1 => 
          array (
            'name' => 'document_number',
            'comment' => '',
            'label' => 'LBL_DOCUMENT_NUMBER',
          ),
        ),
        8 => 
        array (
          0 => 'subcategory_id',
          1 => 
          array (
            'name' => 'keywords',
            'comment' => '',
            'label' => 'LBL_KEYWORDS',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DOC_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'team_name',
            'label' => 'LBL_TEAM',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
