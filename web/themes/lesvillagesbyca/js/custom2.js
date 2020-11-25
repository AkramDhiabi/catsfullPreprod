(function($) {
    $(document).ready(function() {
        /**  Afficher la fiche correspondante au village cliqué */
        $("#block-views-block-recherche-villages-principal-block")
          .on("click", ".views-field-view-node", function(e) {
              e.preventDefault();
              /* réinitialiser les icones de marquers  */
              $(".leaflet-marker-icon").attr('src', "../../themes/lesvillagesbyca/images/village-icon.svg");

              var selected_fiche = $(this).parent().find('.fiche');
              $(".fiche-arrow-container").css('display','block');
              //selected_fiche.css("display", "block");
              selected_fiche.attr('id', 'displayed-fiche');
              selected_fiche.removeAttr("style");
              /* changer le marqueur ,en click  */
              $(".leaflet-marker-icon").each(function( ) {
                  if ($(this).attr('title') === selected_fiche.find("span[class='fiche-title']").text()) {
                      $(this).attr('src', "../../themes/lesvillagesbyca/images/village-icon-selected.png")
                  }
              });
          });

        $("#block-views-block-recherche-villages-principal-block")
          .on("click", ".fiche-arrow-container", function(e) {
            $('.fiche').removeAttr("id");
            $('.fiche').removeAttr("style");
            $(this).removeAttr("style");
            $(".leaflet-marker-icon").attr('src', "../../themes/lesvillagesbyca/images/village-icon.svg");
        });

        /* gestion d'évenement sur le marquer cliqué */
        $(".leaflet-marker-icon").click(function() {

            if ($(this).attr('src').indexOf('selected') != -1) {
                /**Si le pins est bleu*/
                /**  deuxième action : remise à zero de tous les marquers */
                $(".leaflet-marker-icon").attr('src', "../../themes/lesvillagesbyca/images/village-icon.svg");
                /**  première action : remise à zero de toutes les fiches villages */
                //$('.fiche').css("display", "none");
                $('.fiche').removeAttr("id");
                $('.fiche').removeAttr("style");
                $(".fiche-arrow-container").removeAttr("style");
            } else {
                /**  première action : remise à zero de toutes les fiches villages */
                //$('.fiche').css("display", "none");
                $('.fiche').removeAttr("id");
                $('.fiche').removeAttr("style");
                /** remise à zero de tous les marqueurs **/
                $(".leaflet-marker-icon").attr('src', "../../themes/lesvillagesbyca/images/village-icon.svg");
                /**  deuxième action : comparer le nom du village (marqueur village) 
                 /* avec les élements de la liste village */
                /* afficher la fiche correspondante si ça match */
                var mapVillageName = $(this).attr('title');
                var global_fiche;
                $("span[class='fiche-title']").each(function( ) {
                    if ($(this).text() === mapVillageName) {
                        var fiche = $(this).closest('div[class="fiche"]');
                        fiche.toggle();
                        $(".fiche-arrow-container").toggle();
                        global_fiche = fiche;
                    }
                });

                if (global_fiche.is(":visible")) {
                    $(this).attr('src', "../../themes/lesvillagesbyca/images/village-icon-selected.png");
                }
            }
        });
    });
})(jQuery);