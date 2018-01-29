(function($, Drupal, drupalSettings) {

    Drupal.behaviors.externalLink = {
        attach: function (context, settings) {
           $("a[href^='http']", context).attr('target', '_BLANK');
           $(".node a[href^='http']").addClass('ext_link'); 
        }
    }
    Drupal.behaviors.blockCollapsable = {
        attach: function (context, settings) {
           $(".sidebar .block h2", context).click(function() {
                $(this).siblings('.content').slideToggle('fast');
            }); 
        }
    }
    //$(document).ready(function() {
       // console.log);
        //$("a[href^='http']").attr('target', '_BLANK');
        //$(".node a[href^='http']").addClass('ext_link');
        //$(".sidebar .block h2").click(function() {
           //$(this).siblings('.content').slideToggle('fast');
        //});
    //});
})(jQuery, Drupal, drupalSettings);

