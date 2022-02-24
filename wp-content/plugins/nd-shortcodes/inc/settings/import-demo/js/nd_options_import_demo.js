//START function
function nd_options_import_demo(nd_options_demo){

  var nd_options_demo = nd_options_demo;

  jQuery('#nd_options_demo_import_result_content').empty();

  //START post method
  jQuery.get(
    
    //ajax
    nd_options_my_vars_import_demo.nd_options_ajaxurl_import_demo,
    {
      action : 'nd_options_import_demo_php_function',  
      nd_options_demo : nd_options_demo,       
      nd_options_import_demo_security : nd_options_my_vars_import_demo.nd_options_ajaxnonce_import_demo
    },
    //end ajax


    //START success
    function( nd_options_import_demo_result ) {
    
      jQuery( "#nd_options_demo_import_result_content" ).append(nd_options_import_demo_result);

    }
    //END
  

  );
  //END

  
}
//END function
