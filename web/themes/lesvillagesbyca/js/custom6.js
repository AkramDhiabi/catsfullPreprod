(function ($) {
    $(document).ready(function () {
		$("#edit_field_thematiques_partenaire_target_id_chosen a > span, #edit_field_thematiques_start_up_target_id_chosen a > span").html("SECTEUR D'ACTIVITÉ");
	    $("#edit_field_village_taxonomie_target_id_chosen a > span, #edit_field_partenaire_village_taxonom_target_id_chosen a > span").html("VILLAGE BY CA");
        $("#edit_field_village_vocabulaire_target_id_chosen a > span").html("RECHERCHER UN VILLAGE");

        $('.links a').empty();

        $("#block-languageswitcher .langue-fr").hover(function(){
			$(this).children('.en').css("display", "inline-block");
		}, function() {
    		$(this).children('.en').css("display", "none");
		});
        $("#block-languageswitcher .langue-en").hover(function(){
			$(this).children('.fr').css("display", "inline-block");
		}, function() {
    		$(this).children('.fr').css("display", "none");
		});
    });
})(jQuery);