<?php
class fillEmptyName{
	function fillEmptyNames($bean){
		if(empty($bean->name))$bean->name='&lt;NONAME&gt;';
	}
}