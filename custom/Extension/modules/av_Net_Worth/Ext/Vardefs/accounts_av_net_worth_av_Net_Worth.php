<?php
$dictionary['av_Net_Worth']['fields']['accounts_id'] = array (
    'required' => false,
    'name' => 'accounts_id',
	'vname' => 'LBL_ACCOUNTS_ID',
	'type' => 'id',
    'importable' => 'true',
	'module'=>'av_Net_Worth',
    'duplicate_merge' => 'disabled',
    'len' => 36,
    'size' => '20',
  );
$dictionary["av_Net_Worth"]["fields"]["accounts_av_net_worth_name"] = array (
  'name' => 'accounts_av_net_worth_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AV_NET_WORTH_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_id',
  'module' => 'Accounts',
  'studio' => 'visible',
);