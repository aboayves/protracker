<?php
$module_name = 'av_Fact_Finder';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
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
	  'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/include/js/inherit_parent_team.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accounts_name',
            'label' => 'LBL_ACCOUNTS_NAME',
			'displayParams' => 
            array (
              'call_back_function' => 'call_back_account_team',
            ),
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'fact_finder_date',
            'comment' => '',
            'label' => 'LBL_FACT_FINDER_DATE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        3 => 
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
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'question01',
            'comment' => '',
            'label' => 'LBL_QUESTION01',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'answer01',
            'comment' => '',
            'label' => 'LBL_ANSWER01',
          ),
          1 => 
          array (
            'name' => 'score01',
            'comment' => '',
            'label' => 'LBL_SCORE01',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'question02',
            'comment' => '',
            'label' => 'LBL_QUESTION02',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'answer02',
            'comment' => '',
            'label' => 'LBL_ANSWER02',
          ),
          1 => 
          array (
            'name' => 'score02',
            'comment' => '',
            'label' => 'LBL_SCORE02',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'question03',
            'comment' => '',
            'label' => 'LBL_QUESTION03',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'answer03',
            'comment' => '',
            'label' => 'LBL_ANSWER03',
          ),
          1 => 
          array (
            'name' => 'score03',
            'comment' => '',
            'label' => 'LBL_SCORE03',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'question04',
            'comment' => '',
            'label' => 'LBL_QUESTION04',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'answer04',
            'comment' => '',
            'label' => 'LBL_ANSWER04',
          ),
          1 => 
          array (
            'name' => 'score04',
            'comment' => '',
            'label' => 'LBL_SCORE04',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'question05',
            'comment' => '',
            'label' => 'LBL_QUESTION05',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'answer05',
            'comment' => '',
            'label' => 'LBL_ANSWER05',
          ),
          1 => 
          array (
            'name' => 'score05',
            'comment' => '',
            'label' => 'LBL_SCORE05',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'question06',
            'comment' => '',
            'label' => 'LBL_QUESTION06',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'answer06',
            'comment' => '',
            'label' => 'LBL_ANSWER06',
          ),
          1 => 
          array (
            'name' => 'score06',
            'comment' => '',
            'label' => 'LBL_SCORE06',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'question07',
            'comment' => '',
            'label' => 'LBL_QUESTION07',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'answer07',
            'comment' => '',
            'label' => 'LBL_ANSWER07',
          ),
          1 => 
          array (
            'name' => 'score07',
            'comment' => '',
            'label' => 'LBL_SCORE07',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'question08',
            'comment' => '',
            'label' => 'LBL_QUESTION08',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'answer08',
            'comment' => '',
            'label' => 'LBL_ANSWER08',
          ),
          1 => 
          array (
            'name' => 'score08',
            'comment' => '',
            'label' => 'LBL_SCORE08',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'question09',
            'comment' => '',
            'label' => 'LBL_QUESTION09',
          ),
        ),
        17 => 
        array (
          0 => 
          array (
            'name' => 'answer09',
            'comment' => '',
            'label' => 'LBL_ANSWER09',
          ),
          1 => 
          array (
            'name' => 'score09',
            'comment' => '',
            'label' => 'LBL_SCORE09',
          ),
        ),
        18 => 
        array (
          0 => 
          array (
            'name' => 'question10',
            'comment' => '',
            'label' => 'LBL_QUESTION10',
          ),
        ),
        19 => 
        array (
          0 => 
          array (
            'name' => 'answer10',
            'comment' => '',
            'label' => 'LBL_ANSWER10',
          ),
          1 => 
          array (
            'name' => 'score10',
            'comment' => '',
            'label' => 'LBL_SCORE10',
          ),
        ),
      ),
    ),
  ),
);
?>
