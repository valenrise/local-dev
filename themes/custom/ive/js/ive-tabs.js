(function($, Drupal, drupalSettings) {
    //Tabs
    Drupal.behaviors.tabs = {
        attach:function(context, settings){
            $( "#tabs", context ).tabs();
        }
    }
})(jQuery,Drupal, drupalSettings);

/*(function($, Drupal, drupalSettings) {
    $(document).ready(function(){
        $("#tabs").tabs();
    })

})(jQuery,Drupal, drupalSettings);*/
