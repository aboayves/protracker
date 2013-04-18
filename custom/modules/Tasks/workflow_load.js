function work_flow_popup(){
	open_popup(document.EditView.workflow_parent_type.value, 600, 400, "", true, false, {
		"call_back_function": "set_return",
		"form_name": "EditView",
		"field_to_name_array": {
			"id": "workflow_parent_id",
			"name": "workflow_related_to"
		}
	}, "single", true);

}
    if (typeof (changeParentQS) == "undefined") {
        function changeParentQS(field) {
            if (typeof sqs_objects == "undefined") {
                return;
            }
            field = YAHOO.util.Dom.get(field);
            var form = field.form;
            var sqsId = form.id + "_" + field.id;
            if (sqs_objects[sqsId] == undefined) {
                return;
            }
            var typeField = form.elements.parent_type;
            var new_module = typeField.value;
            if (typeof (disabledModules) != "undefined" && typeof (disabledModules[new_module]) != "undefined") {
                sqs_objects[sqsId]["disable"] = true;
                field.readOnly = true;
            } else {
                sqs_objects[sqsId]["disable"] = false;
                field.readOnly = false;
            }
            //Update the SQS globals to reflect the new module choice
            sqs_objects[sqsId]["modules"] = new Array(new_module);
            if (typeof (QSFieldsArray[sqsId]) != "undefined") {
                QSFieldsArray[sqsId].sqs.modules = new Array(new_module);
            }
            if (typeof QSProcessedFieldsArray != "undefined") {
                QSProcessedFieldsArray[sqsId] = false;
            }
            enableQS(false);
        }
    }
    $(document).ready(function () {
        changeParentQS("parent_name")
    });

    var disabledModules = [];

    if (typeof sqs_objects == "undefined") {
        var sqs_objects = new Array;
    }
    sqs_objects["EditView_workflow_related_to"] = {
        "form": "EditView",
        "method": "query",
        "modules": ["Accounts"],
        "group": "or",
        "field_list": ["name", "id"],
        "populate_list": ["parent_name", "parent_id"],
        "required_list": ["parent_id"],
        "conditions": [{
            "name": "name",
            "op": "like_custom",
            "end": "%",
            "value": ""
        }],
        "order": "name",
        "limit": "30",
        "no_match_text": "No Match"
    };
