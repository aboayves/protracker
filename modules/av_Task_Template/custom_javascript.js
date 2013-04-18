YUI().use('event', function (Y) {
    Y.on('domready', function () {
        customHide($('#assign_to').val());

        if (!SUGAR.util.isTouchScreen()) {
            tinyMCE.init({
                "convert_urls": false,
                "height": 600,
                "width": "100%",
                "theme": "advanced",
                "theme_advanced_toolbar_align": "left",
                "theme_advanced_toolbar_location": "top",
                "theme_advanced_buttons1": "code,help,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,                    justifyfull,separator,forecolor,backcolor,separator,styleselect,formatselect,fontselect,fontsizeselect,",
                "theme_advanced_buttons2": "cut,copy,paste,pastetext,pasteword,selectall,separator,search,replace,separator,bullist,numlist,separator,outdent,                    indent,separator,ltr,rtl,separator,undo,redo,separator, link,unlink,anchor,image,separator,sub,sup,separator,charmap,                    visualaid",
                "theme_advanced_buttons3": "tablecontrols,separator,advhr,hr,removeformat,separator,insertdate,inserttime,separator,preview",
                "strict_loading_mode": true,
                "mode": "exact",
                "language": "en",
                "plugins": "advhr,insertdatetime,table,preview,paste,searchreplace,directionality",
                "elements": "description",
                "extended_valid_elements": "style,hr[class|width|size|noshade],@[class|style]",
                "content_css": "include\\/javascript\\/tiny_mce\\/themes\\/advanced\\/skins\\/default\\/content.css",
                "cleanup_on_startup": true,
                "directionality": "ltr"
            });
        } else {
            document.getElementById("description").style.width = "100%";
            document.getElementById("description").style.height = "100px";
        }
    });
});

function customHide(selectedValue) {
    if (selectedValue != 'Specific_User') {
        $('#assigned_user_name, #btn_assigned_user_name, #btn_clr_assigned_user_name').hide();
        $("#assigned_user_name_label > label[for=assigned_user_name]").hide();
    } else {
        $('#assigned_user_name, #btn_assigned_user_name, #btn_clr_assigned_user_name').show();
        $("#assigned_user_name_label > label[for=assigned_user_name]").show();
    }
}