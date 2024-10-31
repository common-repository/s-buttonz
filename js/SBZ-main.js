jQuery(function() {
	// Hide/Show Boxes Based on Stored Value
	jQuery(".SBZ-chx").each(function (i) {
		var a = jQuery(this).attr('target');
		if (jQuery(this).is(":checked")) {
		    jQuery("[id='"+ a +"']").show();
		} else {
		    jQuery("[id='"+ a +"']").hide();
		}
	});
	// Minimize/Maximize Boxes Based on Stored Value
	jQuery(".SBZ-sh").each(function (i) {
		var a = jQuery(this).attr("target");
		if (jQuery("[name='"+ a +"']").val() == "hide") {
		    jQuery("[id='"+ a +"']").hide();
		}
	});
	// Show/Hide API Settings Based on Stored Value
	if (jQuery(".api").is(":selected") && jQuery('[name="digg"]').is(":checked")) {
	    jQuery("#SBZ8-1").show();
	} else {
	    jQuery("#SBZ8-1").hide();
	}
	// Add Cursor to Box Headers
	jQuery(".SBZ-h").css("cursor","pointer");
	// Header Click
	jQuery(".SBZ-h").click(function () {
		var a = jQuery(this).attr('target');
		if (jQuery("[id='"+ a +"']").is(":hidden")) {
		    jQuery("[name='"+ a +"']").val("show");
		    jQuery("[id='"+ a +"']").toggle("fast");
		} else {
		    jQuery("[name='"+ a +"']").val("hide");
		    jQuery("[id='"+ a +"']").toggle("fast");
		}
	});
});
