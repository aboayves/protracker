<?php require_once('modules/Currencies/Currency.php'); ?>
<script type='text/javascript'>
	function new_currency_formater(amount, params = Array()) {
		if(typeof(params['round'])!='undefined' && !isNaN(params['round'])){
			real_round = params['round'];
		}else{
			real_round = <?php echo $GLOBALS['locale']->getPrecedentPreference('default_currency_significant_digits'); ?>;
		}
		if(typeof(params['decimals'])!='undefined' && !isNaN(params['decimals'])){
			real_decimals = params['decimals'];
		}else{
			real_decimals = <?php echo $GLOBALS['locale']->getPrecedentPreference('default_currency_significant_digits'); ?>;
		}
		real_round = real_round == '' ? 0 : real_round;
		real_decimals = real_decimals == '' ? 0 : real_decimals;

		showCurrencySymbol = <?php echo $GLOBALS['locale']->getPrecedentPreference('default_currency_symbol') != '' ? 1 : 0; ?>;
		if(showCurrencySymbol && typeof(params['currency_symbol'])=='undefined') {
		   params["currency_symbol"] = true;
		}
		return format_number(amount, real_round, real_decimals, params);

	}
	function format_number($amount, $round = null, $decimals = null, $params = Array()) {
		$current_users_currency = null;
		$last_override_currency = null;
		$override_currency_id = null;

		seps = get_number_seperators();
		$num_grp_sep = seps[0];
		$dec_sep = seps[1];

/*		// cn: bug 8522 - sig digits not honored in pdfs
		if(is_null($decimals)) {
			$decimals = <?php echo $GLOBALS['locale']->getPrecision(); ?>;
		}
		if(is_null($round)) {
			$round = <?php echo $GLOBALS['locale']->getPrecision(); ?>;
		}
*/
		<?php
		$currency = new Currency();
		if($GLOBALS['current_user']->getPreference('currency')) 
			$currency->retrieve($GLOBALS['current_user']->getPreference('currency'));
		else 
			$currency->retrieve('-99'); // use default if none set
		$symbol='';
		?>

		if(typeof($params['currency_symbol'])!='undefined' && $params['currency_symbol']) {
			if(typeof($params['symbol_override'])!='undefined') {
				$symbol = $params['symbol_override'];
			}
			else if(typeof($params['type'])!='undefined' && $params['type'] == 'pdf') {
				$symbol = '<?php echo $symbol=$currency->getPdfCurrencySymbol(); ?>';
				$symbol_space = false;
			} else {
				$symbol = '<?php echo $symbol = empty($currency->symbol) ? $currency->getDefaultCurrencySymbol() : $currency->symbol; ?>';
				$symbol_space = true;
			}
		} else {
			$symbol = '';
		}

		if(typeof($params['charset_convert'])!='undefined') {
			$symbol = '<?php echo $symbol = $GLOBALS['locale']->translateCharset($symbol, 'UTF-8', $GLOBALS['locale']->getExportCharset()); ?>';
		}

		if(typeof($params['human'])=='undefined') {
		   $amount = number_format($amount, $decimals, $dec_sep, $num_grp_sep);
		}
		$amount = format_place_symbol($amount, $symbol,(typeof($params['symbol_space'])=='undefined' ? false : true));

		if(typeof($params['percentage'])!='undefined' && $params['percentage']) 
			$amount += '%';
		
		return $amount;

	}
	function number_format (number, decimals, dec_point, thousands_sep) {
	  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
	  var n = !isFinite(+number) ? 0 : +number,
		prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
		sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
		dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
		s = '',
		toFixedFix = function (n, prec) {
		  var k = Math.pow(10, prec);
		  return '' + Math.round(n * k) / k;
		};
	  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
	  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
	  if (s[0].length > 3) {
		s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
	  }
	  if ((s[1] || '').length < prec) {
		s[1] = s[1] || '';
		s[1] += new Array(prec - s[1].length + 1).join('0');
	  }
	  return s.join(dec);
	}
	function format_place_symbol(amount, symbol, symbol_space) {
	if(symbol != '') {
		if(symbol_space == true) {
			amount = symbol + ' ' + amount;
		} else {
			amount = symbol + amount;
		}
	}
	return amount;
}
	
	function get_number_seperators()
	{
		dec_sep = '<?php echo $GLOBALS['sugar_config']['default_decimal_seperator']; ?>';
		user_dec_sep = '<?php echo $GLOBALS['current_user']->getPreference('dec_sep'); ?>';
		
		dec_sep = (!user_dec_sep.length) ? dec_sep : user_dec_sep;

		num_grp_sep = '<?php echo $GLOBALS['sugar_config']['default_number_grouping_seperator']; ?>';
		user_num_grp_sep = '<?php echo $GLOBALS['current_user']->getPreference('num_grp_sep'); ?>';
		num_grp_sep = (!user_num_grp_sep.length) ? num_grp_sep : user_num_grp_sep;

		return Array(num_grp_sep, dec_sep);
	}

</script>