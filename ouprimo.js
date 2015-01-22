
/**
 *  primo form submit, required for some reason
 *
 */

(function ($) {
  Drupal.behaviors.oublocks = {
    attach: function (context, settings) {
      console.log("Attaching!");
      $(context, 'form.searchPrimo').submit(function(event) {
        $(event.target).find('[name="query"]').val("any,contains," + $(event.target).find('[name="queryTemp"]').val());
        return true;
      });
    }
  };
}(jQuery));
