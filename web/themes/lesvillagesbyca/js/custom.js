(function ($) {
    $(document).ready(function () {
   /*            */
        $('.slick__slide').hover(
    function(){
         $(this).find('.village-title-wrapper').hide();
    },
    function(){
        $(this).find('.village-title-wrapper').show();
    }, 
   /*           */
    function () {
        $('.overlay').children().removeClass('hidden');
    },
    function () {
        $('.overlay').children().addClass('hidden');
    }
);
    });

    'use strict';
  Drupal.behaviors.privacyPolicyLinked = {
    attach: function (context) {
      Drupal.Ajax.prototype.setProgressIndicatorFullscreen = function () {
        this.progress.element = $('<div class="ajax-progress ajax-progress-fullscreen test">&nbsp;</div>');
        $('body .pager').before(this.progress.element);
      };
    }
  };
})(jQuery);
