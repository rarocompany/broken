//START function
function nd_options_get_ajax_search_results(nd_options_keyword,nd_options_category_slug){

  //variables
  var nd_options_keyword = nd_options_keyword;
  var nd_options_category_slug = nd_options_category_slug;

  jQuery( '#nd_options_autocomplete_search_container' ).prepend('<div class="nd_options_position_absolute" id="nd_options_autocomplete_search_loader"></div>');


  //START post method
  jQuery.get(
    
  
    //ajax
    nd_options_my_vars_get_search_results.nd_options_ajaxurl_get_search_results,
    {
      action : 'nd_options_get_search_results_php_function',         
      nd_options_keyword: nd_options_keyword,
      nd_options_category_slug: nd_options_category_slug,
      nd_options_get_search_results_security : nd_options_my_vars_get_search_results.nd_options_ajaxnonce_get_search_results
    },
    //end ajax


    //START success
    function( nd_options_autocomplete_search_result ) {
    
      jQuery( "#nd_options_autocomplete_search_result" ).empty();
      jQuery( "#nd_options_autocomplete_search_result" ).append(nd_options_autocomplete_search_result);
      jQuery( '#nd_options_autocomplete_search_loader' ).remove(); //remove the loader

    }
    //END

    

  );
  //END

  
}
//END function
