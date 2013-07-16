<?php
$viewdefs ['Meetings'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '1',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_LIST_RELATED_TO',
        ),
      ),
      1 => 
      array (
        0 => 'assigned_user_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
      ),
      3 => 
      array (
        0 => 
		array (
			'name' => 'date_start',
			'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'required' => true,
              'updateCallback' => 'SugarWidgetScheduler.update_time();',
            ),
		),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'date_end',
          'comment' => 'Date meeting ends',
          'label' => 'LBL_DATE_END',
		  'type' => 'datetimecombo',
          'displayParams' => 
            array (
              'required' => true,
              'updateCallback' => 'SugarWidgetScheduler.update_time();',
            ),
        ),
      ),
	  5 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'customCode' => '
                @@FIELD@@
                <input id="duration_hours" name="duration_hours" type="hidden" value="{$fields.duration_hours.value}">
                <input id="duration_minutes" name="duration_minutes" type="hidden" value="{$fields.duration_minutes.value}">
                {sugar_getscript file="modules/Meetings/duration_dependency.js"}
                <script type="text/javascript">
                    var date_time_format = "{$CALENDAR_FORMAT}";
                    {literal}
                    SUGAR.util.doWhen(function(){return typeof DurationDependency != "undefined" && typeof document.getElementById("duration") != "undefined"}, function(){
                        var duration_dependency = new DurationDependency("date_start","date_end","duration",date_time_format);
                        initEditView($("#duration")[0].form);
                    });
                    {/literal}
                </script>            
            ',
          ),
        ),
      6 => 
      array (
        0 => 'status',
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'location',
          'comment' => 'Meeting location',
          'label' => 'LBL_LOCATION',
        ),
      ),
      8 => 
      array (
        0 => 'description',
      ),
    ),
  ),
);
?>