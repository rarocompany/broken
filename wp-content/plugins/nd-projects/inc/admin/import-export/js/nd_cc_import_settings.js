//START function
function nd_cc_import_settings(){

  //variables
  var nd_cc_value_import_settings = jQuery( "#nd_cc_import_settings").val();

  //empty result div
  jQuery( "#nd_cc_import_settings_result_container").empty();

  //START post method
  jQuery.get(
    
  
    //ajax
    nd_cc_my_vars_import_settings.nd_cc_ajaxurl_import_settings,
    {
      action : 'nd_cc_import_settings_php_function',         
      nd_cc_value_import_settings: nd_cc_value_import_settings,
      nd_cc_import_settings_security : nd_cc_my_vars_import_settings.nd_cc_ajaxnonce_import_settings
    },
    //end ajax


    //START success
    function( nd_cc_import_settings_result ) {
    
      jQuery( "#nd_cc_import_settings").val('');
      jQuery( "#nd_cc_import_settings_result_container").append(nd_cc_import_settings_result);

    }
    //END
  

  );
  //END

  
}
//END function
