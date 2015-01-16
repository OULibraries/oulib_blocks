
/**
 *  primo form submit, required for some reason
 *
 */

(function ($) {
  Drupal.behaviors.oublocks = {
    attach: function (context, settings) {
      console.log("Attaching!");
      $(context, 'form.searchPrimo').submit(function(event) {
        var input = $(event.target).find(":text").first();
        input.val("any,contains," + input.val());
        return true;
      });
    }
  };
}(jQuery));
