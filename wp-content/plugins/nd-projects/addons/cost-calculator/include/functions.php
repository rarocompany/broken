<?php

function nd_cc_is_sub_section_used($nd_cc_section_id,$nd_cc_sub_section_id,$nd_cc_sub_section_option_active,$nd_cc_id){

  if ( $nd_cc_id == '' ) { $nd_cc_id = get_the_ID(); }

  $nd_cc_price_option_name = "nd_cc_sub_section_price_".$nd_cc_section_id."_".$nd_cc_sub_section_id."_".$nd_cc_sub_section_option_active;
  $nd_cc_price_option = get_post_meta( $nd_cc_id, $nd_cc_price_option_name, true );

  if ( $nd_cc_price_option == '' ) {
    return 0;
  }else{
    return 1;
  }

}


function nd_cc_is_section_used($nd_cc_section_id,$nd_cc_max_sub_sections,$nd_cc_id){

  if ( $nd_cc_id == '' ) { $nd_cc_id = get_the_ID(); }

  $nd_cc_section_option_name = "nd_cc_section_name_".$nd_cc_section_id;
  $nd_cc_section_name = get_post_meta( $nd_cc_id, $nd_cc_section_option_name, true );

  if ( $nd_cc_section_name == '' ) {

    //START check if all subsections are active
    $nd_cc_section_i = 1;
    
    while ( $nd_cc_section_i <= $nd_cc_max_sub_sections ) {

      $nd_cc_sub_section_option_active = "nd_cc_sub_section_active_".$nd_cc_section_id."_".$nd_cc_section_i;
      $nd_cc_section_active = get_post_meta( $nd_cc_id, $nd_cc_sub_section_option_active, true );

      if ( nd_cc_is_sub_section_used($nd_cc_section_id,$nd_cc_section_i,$nd_cc_section_active,$nd_cc_id) == 1 ){
        return 1;
      }

      $nd_cc_section_i++;
    }
    //END check if all subsections are active

    return 0;

  
  }else{
    return 1;
  }

}