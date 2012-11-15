<?php

function get_av_Account_Types_Dropdown()
{
    $query = "SELECT id, name FROM av_account_types where deleted=0 order by name asc";
    $result = $GLOBALS['db']->query($query, false);

    $list = array();
    $list['']='';
    while (($row = $GLOBALS['db']->fetchByAssoc($result)) != null) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}
