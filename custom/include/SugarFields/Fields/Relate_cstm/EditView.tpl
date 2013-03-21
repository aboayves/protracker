{{capture name=idname assign=idname}}{{sugarvar key='name'}}{{/capture}}
{{if !empty($displayParams.idName)}}
    {{assign var=idname value=$displayParams.idName}}
{{/if}}
<script type='text/javascript'>
var val_{{$idname}} = '';
</script>
<input type="text" name="{{$idname}}" class={{if empty($displayParams.class) }}"cstm_relate_field_validation sqsEnabled sqsNoAutofill"{{else}} "{{$displayParams.class}}" {{/if}} tabindex="{{$tabindex}}" id="{{$idname}}" size="{{$displayParams.size}}" value="{{sugarvar key='value'}}" title='{{$vardef.help}}' autocomplete="off" {{$displayParams.readOnly}} {{$displayParams.field}}	{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}} onblur="val_{{$idname}}=this.value;setTimeout('isNewValue();',50);" onchange="val_{{$idname}}=this.value;setTimeout('isNewValue();',50);" onkeyup="setTimeout('val_{{$idname}}=$(&quot;#{{$idname}}&quot;).val();isNewValue();',1000);" >
<input type="hidden" name="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}" 
	id="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}" 
	{{if !empty($vardef.id_name)}}value="{{sugarvar memberName='vardef.id_name' key='value'}}"{{/if}}>
{{if empty($displayParams.hideButtons) }}
<span class="id-ff multiple">
<button type="button" name="btn_{{$idname}}" id="btn_{{$idname}}" tabindex="{{$tabindex}}" title="{sugar_translate label="{{$displayParams.accessKeySelectTitle}}"}" class="button firstChild" value="{sugar_translate label="{{$displayParams.accessKeySelectLabel}}"}"
onclick='open_popup(
    "{{sugarvar key='module'}}", 
	600, 
	400, 
	"{{$displayParams.initial_filter}}", 
	true, 
	false, 
	{{$displayParams.popupData}}, 
	"single", 
	true
);' {{if isset($displayParams.javascript.btn)}}{{$displayParams.javascript.btn}}{{/if}}><img src="{sugar_getimagepath file="id-ff-select.png"}"></button>{{if empty($displayParams.selectOnly) }}
<button type="button" name="btn_QuickCreate_{{$idname}}" id="btn_QuickCreate_{{$idname}}" title="Quick Create" style="border-radius:0 0 0 0;display:none;"  onclick="quick_create(this.id, '{{sugarvar key='module'}}', '{{sugarvar key='rname'}}', val_{{$idname}}, '{{sugarvar key='id_name'}}', '{{sugarvar key='name'}}');"><img src="themes/default/images/id-ff-add.png">
</button><button type="button" name="btn_clr_{{$idname}}" id="btn_clr_{{$idname}}" tabindex="{{$tabindex}}" title="{sugar_translate label="{{$displayParams.accessKeyClearTitle}}"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{{$idname}}', '{{if !empty($displayParams.idName)}}{{$displayParams.idName}}_{{/if}}{{sugarvar key='id_name'}}');val_{{$idname}}='';setTimeout('isNewValue();',50);"  value="{sugar_translate label="{{$displayParams.accessKeyClearLabel}}"}" {{if isset($displayParams.javascript.btn_clear)}}{{$displayParams.javascript.btn_clear}}{{/if}}><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
{{/if}}
</span>
{{/if}}
{{if !empty($displayParams.allowNewValue) }}
<input type="hidden" name="{{$idname}}_allow_new_value" id="{{$idname}}_allow_new_value" value="true">
{{/if}}
<span class ="show_cstm_relate_errors" style="display:none;color:#FF0000">Please create specific record.</span>
<div id="dialogForURL" style="display:none"><br/><br/></div>

{literal}

{{$quickSearchCode}}
<script type="text/javascript">
{/literal}
{literal}
function isNewValue()
{
{/literal}
	$('#{{$idname}}').val(val_{{$idname}});
	if($("#{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}").val()=='' && $('#{{$idname}}').val()!='')
	{literal}
	{
	{/literal}
		$('#{{$idname}}').css('border-color', 'red');
		$('#btn_QuickCreate_{{$idname}}').show();
	{literal}
	}
	{/literal}
	else
	{literal}
	{
	{/literal}
		$('#{{$idname}}').css('border-color', '');
		$('#btn_QuickCreate_{{$idname}}').hide();
	{literal}
	}
	{/literal}
{literal}
}
</script>

{/literal}

