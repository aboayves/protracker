<?php
$dictionary['Task']['fields']['project'] = array (
    'required' => false,
    'name' => 'project',
	'vname' => 'LBL_PROJECT',
    'type' => 'relate',
    'importable' => 'true',
	'module'=>'Project',
    'duplicate_merge' => 'disabled',
    'len' => '255',
    'source' => 'non-db',
    'size' => '20',
    'id_name' => 'project_id',
	'studio' => 'visible',
  );
$dictionary['Task']['fields']['project_id'] = array (
    'required' => false,
    'name' => 'project_id',
	'vname' => 'LBL_PROJECT',
	'type' => 'id',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'len' => 36,
    'size' => '20',
  );
