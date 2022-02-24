<?php
  

//START if checkbox field full width
  if ( $nd_options_fields_full_width == 1 ) {

    $str .= '

    <style>

    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="text"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="email"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="url"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="tel"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="number"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="date"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="checkbox"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' input[type="file"],
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' textarea,
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' label,
    #nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].' select
    {

      width: 100%;

    }


    .nd_options_customizer_forms span.wpcf7-not-valid-tip,
    .nd_options_customizer_forms .wpcf7-response-output.wpcf7-validation-errors,
    .nd_options_customizer_forms .wpcf7-response-output.wpcf7-mail-sent-ok
    {

      float: left;
      width: 100%;
      box-sizing: border-box;

    }

    </style>

  ';

  }
  //END if checkbox field full width
 
  
  $str .= '

    <!--start form-->
    <div id="nd_options_shortcode_cf7_'.$atts['nd_options_cf7'].'" class="nd_options_section '.$nd_options_class.'">
      
      <div class="nd_options_section nd_options_box_sizing_border_box">
        '.do_shortcode('[contact-form-7 id="'.$atts['nd_options_cf7'].'"]').' 
      </div>  

    </div>
    <!--end form-->

   ';
