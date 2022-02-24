<?php


//START adding all metabox
function nd_cc_metabox_cost_calc()
{

    wp_enqueue_script('jquery-ui-tabs');

    //get limit datas
    $nd_cc_max_sections = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_section_number', true );
    if ( $nd_cc_max_sections == '' ) { $nd_cc_max_sections = 2; }

    $nd_cc_max_sub_sections = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_subsection_number', true );
    if ( $nd_cc_max_sub_sections == '' ) { $nd_cc_max_sub_sections = 3; }

    $nd_cc_max_repeater_options = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_repeater_number', true );
    if ( $nd_cc_max_repeater_options == '' ) { $nd_cc_max_repeater_options = 4; }

    $nd_cc_sub_section_options = 4;



    //INSERT FUNCTION
    

    //values
    global $post;
    $nd_cc_values = get_post_custom( $post->ID );


    //page style
    $nd_cc_page_style = "
    <style>

    #nd-cc-meta-box-cost-id h2.ui-sortable-handle,
    #nd-cc-meta-box-cost-id button.handlediv { display:none; }
    #nd-cc-meta-box-cost-id-settings h2.ui-sortable-handle,
    #nd-cc-meta-box-cost-id-settings button.handlediv,
    #nd-cc-meta-box-cost-shortcode h2.ui-sortable-handle,
    #nd-cc-meta-box-cost-shortcode button.handlediv { display:none; }

    #post-body-content { margin-bottom:10px; }

    #nd-cc-meta-box-cost-shortcode {
      border: 0px;
      background: none;
      box-shadow: none;
    }

    #nd-cc-meta-box-cost-shortcode .inside {
      background: none;
      margin: 0px;
      padding: 0px;
      margin-left:10px;
    }

    #nd-cc-meta-box-cost-id-settings .inside {
      padding: 0px;
      margin:0px;
    }


    #nd_cc_all_page_content { margin-top:12px; }

    .nd_cc_section_content { 
      background-color: #f5f5f5;
      border:1px solid #e6e6e6;
      box-sizing:border-box;
      margin-top: 38px;
      margin-bottom:13px;
      padding:13px;
      position:relative;
    }

    .nd_cc_section_content p { 
      margin:0px;
    }

    .nd_cc_section_content .nd_cc_section_fields_content p { 
      margin-top:10px;
    }

    .nd_cc_section_content .nd_cc_sub_section_fields_content p { 
      margin-top:0px;
    }
    .nd_cc_section_content .nd_cc_sub_section_fields_content p input { 
      margin-top:10px;
    }

    .nd_cc_sub_section_content {
      background-color: #fff; 
      margin-top:38px;
      padding:20px;
      position:relative;
      border: 1px solid #fff;
    }

    .nd_cc_sub_sections_tabs ul {
      margin:0px;
      padding:0px;
      margin-bottom:20px;
      margin-top:20px;
    }
    .nd_cc_sub_sections_tabs ul li {
      display: inline;
    }
    .nd_cc_sub_sections_tabs ul li.ui-state-active a {
      background-color: #0173AA;
      color: #fff;
      border: 1px solid #0173AA;
    }
    .nd_cc_sub_sections_tabs ul li a {
      background-color: #f5f5f5;
      color: #444;
      padding: 8px 16px;
      display: inline-block;
      margin-right: 13px;
      border: 1px solid #f1f1f1;
      border-radius: 3px;
      text-decoration: none;
    }




    .nd_cc_background_color_red {
       /*background-color:#b98686;*/
       display:none;
    }
    .nd_cc_background_color_grey {
       /*background-color:#999;*/
       display:block;
    }

    .nd_cc_sub_section_remove_btn {
      position: absolute;
      top: -26px;
      right: -1px;
      cursor: pointer;
      background-color: #e6e6e6;
      width: 40px;
      height: 25px;
      border-radius: 3px 3px 0px 0px;
    }
    .nd_cc_sub_section_remove_btn span {
      height: 25px;
      width: 40px;
      font-size: 20px;
      line-height: 25px;
      color: #8d8d8d;
    }

    .nd_cc_section_remove_btn {
      position: absolute;
      top: -25px;
      right: -1px;
      cursor: pointer;
      background-color: #e6e6e6;
      width: 40px;
      height: 25px;
      border-radius: 3px 3px 0px 0px;
    }
    .nd_cc_section_remove_btn span {
      height: 25px;
      width: 40px;
      font-size: 20px;
      line-height: 25px;
      color: #8d8d8d;
    }

    .nd_cc_add_section_btn {
      background-color: #fff;
      width: 100%;
      text-align: center;
      display: inline-block;
      padding: 20px;
      box-sizing: border-box;
      cursor: pointer;
      border: 1px dashed #cacaca;
    }
    .nd_cc_add_section_btn span {
      line-height: 40px;
      color: #fff;
      font-size: 20px;
      background-color: #c9c9c9;
      border-radius: 5px;
      width: 40px;
      height: 40px;
    }
    .nd_cc_add_section_btn:hover span {
      background-color: #0173AA;
    }


    .nd_cc_add_sub_section_btn {
      cursor: pointer;
      border: 1px dashed #e6e6e6;
      display: block;
      padding: 20px;
      box-sizing: border-box;
      text-align: center;
      margin-top:13px;
    }
    .nd_cc_add_sub_section_btn span {
      color:#848c92;
    }

    .nd_cc_sub_section_option_tag_open_btn,
    .nd_cc_sub_section_option_tag_remove_btn { cursor:pointer; }



    /*CLASS*/
    .nd_cc_margin_right_10 { margin-right:10px; }
    .nd_cc_border_bottom_1_solid_eee { border-bottom:1px solid #eee; }
    .nd_cc_padding_10 { padding:10px; }


    /****************************CUSTOM STYLE FOR METABOX VERTICAL TABS****************************/

    #nd_cc_metabox_cpt_1,#nd_cc_metabox_cpt_2,#nd_cc_metabox_cpt_3,#nd_cc_metabox_cpt_4,#nd_cc_metabox_cpt_5 { border: 0px; }
    #nd_cc_metabox_cpt_1 h2.hndle.ui-sortable-handle, #nd_cc_metabox_cpt_1 > button,
    #nd_cc_metabox_cpt_2 h2.hndle.ui-sortable-handle, #nd_cc_metabox_cpt_2 > button,
    #nd_cc_metabox_cpt_3 h2.hndle.ui-sortable-handle, #nd_cc_metabox_cpt_3 > button,
    #nd_cc_metabox_cpt_4 h2.hndle.ui-sortable-handle, #nd_cc_metabox_cpt_4 > button,
    #nd_cc_metabox_cpt_5 h2.hndle.ui-sortable-handle, #nd_cc_metabox_cpt_5 > button { display: none; }
    #nd_cc_metabox_cpt_1  .inside, #nd_cc_metabox_cpt_2 .inside, #nd_cc_metabox_cpt_3 .inside, #nd_cc_metabox_cpt_4 .inside, #nd_cc_metabox_cpt_5 .inside { padding: 0px; }

    #nd_cc_id_metabox_cpt { display: inline-block; width: 100%; }
    #nd_cc_id_metabox_cpt ul { margin:0px; padding: 0px; background-color: #fff; width: 25%; float: left; height: 100%; position: absolute; top: 0px; left: 0px; border-right: 1px solid #eeeeee; }
    #nd_cc_id_metabox_cpt ul li { margin:0px; padding: 0px; outline: 0; border-bottom: 1px solid #eeeeee; }
    #nd_cc_id_metabox_cpt ul li:hover {  background-color: #f7f7f7; }
    #nd_cc_id_metabox_cpt ul li.ui-tabs-active.ui-state-active{ background-color: #0073aa; color:#fff;}
    #nd_cc_id_metabox_cpt ul li.ui-tabs-active.ui-state-active a { color:#fff;}
    #nd_cc_id_metabox_cpt ul li.ui-tabs-active.ui-state-active a span{ color:#fff;}
    #nd_cc_id_metabox_cpt ul li a {  margin:0px; padding: 0px; text-decoration: none; outline: 0; display: inline-block; color: #444; padding: 15px; font-size: 14px; }
    #nd_cc_id_metabox_cpt ul li a:focus { box-shadow: 0px 0px 0px #000; }
    .nd_cc_id_metabox_cpt_content{ width: 75%; float: right; background-color: #fff; padding: 20px; box-sizing: border-box; padding-top: 0px; min-height: 400px; }



    



    </style>";



    //page script
    $nd_cc_page_script = "
    <script>


    function nd_cc_add_section(){

      var nd_cc_max_sections = 0;

      for (nd_cc_index_section = 1; nd_cc_index_section <= ".$nd_cc_max_sections."; nd_cc_index_section++) { 

        var nd_cc_section_id = '#nd_cc_section_'.concat(nd_cc_index_section);
        var nd_cc_sect_res = jQuery(nd_cc_section_id).hasClass('nd_cc_background_color_red');

        if (nd_cc_sect_res == true) {

          jQuery(nd_cc_section_id).removeClass('nd_cc_background_color_red');
          jQuery(nd_cc_section_id).addClass('nd_cc_background_color_grey');
          break;

        }else{
          nd_cc_max_sections = nd_cc_max_sections+1;  
        }

      } 

      if ( nd_cc_max_sections == ".$nd_cc_max_sections.") {
        alert('Already added the max sections number : ".$nd_cc_max_sections."');
      } 

    }     


    function nd_cc_add_sub_section(nd_cc_section_id){

      var nd_cc_max_sub_sections = 0;

      for (nd_cc_index_sub = 1; nd_cc_index_sub <= ".$nd_cc_max_sub_sections."; nd_cc_index_sub++) { 

        var nd_cc_sub_section_id = '#nd_cc_sub_section_'.concat(nd_cc_section_id,'_',nd_cc_index_sub);

        var nd_cc_sub_sect_res = jQuery(nd_cc_sub_section_id).hasClass('nd_cc_background_color_red');

        if (nd_cc_sub_sect_res == true){

          jQuery(nd_cc_sub_section_id).removeClass('nd_cc_background_color_red');
          jQuery(nd_cc_sub_section_id).addClass('nd_cc_background_color_grey');

          break;

        }else{
          nd_cc_max_sub_sections = nd_cc_max_sub_sections+1;  
        }

        
      }

      if ( nd_cc_max_sub_sections == ".$nd_cc_max_sub_sections.") {
        alert('Already added the max sub sections number : ".$nd_cc_max_sub_sections."');
      }

    }


    function nd_cc_remove_sub_section(nd_cc_section_id,nd_cc_sub_section_id){
      
      var nd_cc_sub_section_id_name = '#nd_cc_sub_section_'.concat(nd_cc_section_id,'_',nd_cc_sub_section_id);  
      jQuery(nd_cc_sub_section_id_name).removeClass('nd_cc_background_color_grey');
      jQuery(nd_cc_sub_section_id_name).addClass('nd_cc_background_color_red');

      var nd_cc_price_name = '#nd_cc_sub_section_price_'.concat(nd_cc_section_id,'_',nd_cc_sub_section_id,'_0'); 
      jQuery(nd_cc_price_name).val('');

      var nd_cc_active_name = '#nd_cc_sub_section_active_'.concat(nd_cc_section_id,'_',nd_cc_sub_section_id); 
      jQuery(nd_cc_active_name).val(0);

    }



    function nd_cc_remove_section(nd_cc_section_id){
      
      var nd_cc_section_id_name = '#nd_cc_section_'.concat(nd_cc_section_id);  
      jQuery(nd_cc_section_id_name).removeClass('nd_cc_background_color_grey');
      jQuery(nd_cc_section_id_name).addClass('nd_cc_background_color_red');

      var nd_cc_section_name = '#nd_cc_section_name_'.concat(nd_cc_section_id); 
      jQuery(nd_cc_section_name).val('');

      for (nd_cc_index_sub = 1; nd_cc_index_sub <= ".$nd_cc_max_sub_sections."; nd_cc_index_sub++) { 
        nd_cc_remove_sub_section(nd_cc_section_id,nd_cc_index_sub);   
      }

    }






    function nd_cc_add_more_tag_options(nd_cc_section_id,nd_cc_sub_section_id){

      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_content').removeClass('nd_cc_background_color_red');
      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_content').addClass('nd_cc_background_color_grey');

      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_open_btn').removeClass('nd_cc_background_color_grey');
      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_open_btn').addClass('nd_cc_background_color_red');

      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_remove_btn').removeClass('nd_cc_background_color_red');
      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_remove_btn').addClass('nd_cc_background_color_grey');


    }

    function nd_cc_remove_more_tag_options(nd_cc_section_id,nd_cc_sub_section_id){

      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_remove_btn').removeClass('nd_cc_background_color_grey');
      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_remove_btn').addClass('nd_cc_background_color_red');

      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_open_btn').removeClass('nd_cc_background_color_red');
      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_open_btn').addClass('nd_cc_background_color_grey');

      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_content').removeClass('nd_cc_background_color_grey');
      jQuery('#nd_cc_sub_section_'+nd_cc_section_id+'_'+nd_cc_sub_section_id+' .nd_cc_sub_section_option_tag_content').addClass('nd_cc_background_color_red');

    }
 



    </script>
    ";
    




    $nd_cc_section_i = 1; 
    $nd_cc_sections = '';

    $nd_cc_sections_e = '';
    $nd_cc_sections_d = '';
    
    //START SECTION WHILE
    while ( $nd_cc_section_i <= $nd_cc_max_sections ) {
      
      //section fields
      $nd_cc_section_var_name = "nd_cc_section_name_".$nd_cc_section_i;
      $nd_cc_section_name = get_post_meta( get_the_ID(), $nd_cc_section_var_name, true );

      $nd_cc_section_var_descr = "nd_cc_section_descr_".$nd_cc_section_i;
      $nd_cc_section_descr = get_post_meta( get_the_ID(), $nd_cc_section_var_descr, true );

      $nd_cc_section_var_width = "nd_cc_section_width_".$nd_cc_section_i;
      $nd_cc_section_width = get_post_meta( get_the_ID(), $nd_cc_section_var_width, true );


      //add class if the section is disable
      if ( nd_cc_is_section_used($nd_cc_section_i,$nd_cc_max_sub_sections,get_the_ID()) == 0 ) {
        $nd_cc_section_style_class = ' nd_cc_background_color_red ';
      }else{
        $nd_cc_section_style_class = '';  
      }


      $nd_cc_sections .= '

      <!--START section-->
      <div id="nd_cc_section_'.$nd_cc_section_i.'" class="nd_cc_section_content '.$nd_cc_section_style_class.' ">
        
        <!--<h3>Section '.$nd_cc_section_i.'</h3>-->
        <a title="Remove Section" onclick="nd_cc_remove_section('.$nd_cc_section_i.')" class="nd_cc_section_remove_btn"><span class="dashicons dashicons-no-alt"></span></a>


        <div class="nd_cc_section_fields_content">

          <div style="width:33%; display: inline-block;">
            <p><strong>Name :</strong></p>
            <p><input class="regular-text" type="text" name="'.$nd_cc_section_var_name.'" id="'.$nd_cc_section_var_name.'" value="'.esc_attr($nd_cc_section_name).'" /></p>
          </div>

          <div style="width:33%; display: inline-block;">
            <p><strong>Description :</strong></p>
            <p><input class="regular-text" type="text" name="'.$nd_cc_section_var_descr.'" id="'.$nd_cc_section_var_descr.'" value="'.esc_attr($nd_cc_section_descr).'" /></p>
          </div>

          <div style="width:33%; display: inline-block;">
            <p><strong>Width :</strong></p>

            <p><select class="regular-text" name="'.$nd_cc_section_var_width.'" id="'.$nd_cc_section_var_width.'">
    
              <option '; if( $nd_cc_section_width == 100 ) { $nd_cc_sections .= 'selected="selected"'; } $nd_cc_sections .= ' value="100">Width 100 %</option>
              <option '; if( $nd_cc_section_width == 50 ) { $nd_cc_sections .= 'selected="selected"'; } $nd_cc_sections .= ' value="50">Width 50 %</option>
               
            </select></p>

          </div>

        </div>

        

        

        

        <!--START sub sections content-->
        <div class="nd_cc_sub_sections_content">
        ';
      

        //START SUB SECTION WHILE
        $nd_cc_sub_section_i = 1; 
        $nd_cc_sub_sections_e = '';
        $nd_cc_sub_sections_d = '';
        
        while ( $nd_cc_sub_section_i <= $nd_cc_max_sub_sections ) {

          //fields subsection
          $nd_cc_sub_section_var_name = "nd_cc_sub_section_name_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_name = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_name, true );

          $nd_cc_sub_section_var_width = "nd_cc_sub_section_width_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_width = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_width, true );

          $nd_cc_sub_section_var_active = "nd_cc_sub_section_active_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_active = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_active, true );
          if ( $nd_cc_sub_section_active == '' ) { $nd_cc_sub_section_active = 0; }

          //slider options
          $nd_cc_sub_section_var_slide_min = "nd_cc_sub_section_slide_min_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_slide_min = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_slide_min, true );

          $nd_cc_sub_section_var_slide_max = "nd_cc_sub_section_slide_max_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_slide_max = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_slide_max, true );

          $nd_cc_sub_section_var_slide_default = "nd_cc_sub_section_slide_default_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_slide_default = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_slide_default, true );

          //switch options
          $nd_cc_sub_section_var_switch_on = "nd_cc_sub_section_switch_on_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_switch_on = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_switch_on, true );

          $nd_cc_sub_section_var_switch_off = "nd_cc_sub_section_switch_off_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_switch_off = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_switch_off, true );

          //tag options
          $nd_cc_sub_section_var_tag_type = "nd_cc_sub_section_tag_type_".$nd_cc_section_i."_".$nd_cc_sub_section_i;
          $nd_cc_sub_section_tag_type = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_tag_type, true );

          //set price option
          $nd_cc_tab_option_i = 0;
          while ( $nd_cc_tab_option_i <= $nd_cc_sub_section_options-1 ) {

            $nd_cc_sub_section_var_price = "nd_cc_sub_section_price_".$nd_cc_section_i."_".$nd_cc_sub_section_i."_".$nd_cc_tab_option_i;
            $nd_cc_sub_section_price = get_post_meta( get_the_ID(), $nd_cc_sub_section_var_price, true );

            $nd_cc_tab_option_i++;
          }


          //add class if the sub section is disable
          if ( nd_cc_is_sub_section_used($nd_cc_section_i,$nd_cc_sub_section_i,$nd_cc_sub_section_active,get_the_ID()) == 0 ) {
            $nd_cc_sub_section_style_class = ' nd_cc_background_color_red ';
          }else{
            $nd_cc_sub_section_style_class = '';  
          }

          $nd_cc_section = '

          <script>
          jQuery( function() {

            jQuery( "#nd_cc_sub_section_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" ).tabs({
              active: '.$nd_cc_sub_section_active.'
            });

            jQuery( "#nd_cc_sub_section_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.' li a" ).click(function() {

              var active = jQuery("#nd_cc_sub_section_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'").tabs("option","active");
              jQuery("#nd_cc_sub_section_active_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'").val(active);

            });

          } );
          </script>

          <!--START sub section-->
          <div id="nd_cc_sub_section_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" class="nd_cc_sub_section_content '.$nd_cc_sub_section_style_class.' ">

          <!--<h3>ID : '.$nd_cc_section_i.' '.$nd_cc_sub_section_i.'</h3>-->
          <a title="Remove Sub Section" onclick="nd_cc_remove_sub_section('.$nd_cc_section_i.','.$nd_cc_sub_section_i.')" class="nd_cc_sub_section_remove_btn"><span class="dashicons dashicons-no-alt"></span></a>




          <div class="nd_cc_sub_section_fields_content">

            <div style="width:33%; display: inline-block;">
              <p><strong>Name :</strong></p>
              <p><input class="regular-text" type="text" name="'.$nd_cc_sub_section_var_name.'" id="'.$nd_cc_sub_section_var_name.'" value="'.esc_attr($nd_cc_sub_section_name).'" /></p>
            </div>

            <div style="width:33%; display: inline-block;">
              <p><strong>Width :</strong></p>

              <p><select class="regular-text" name="'.$nd_cc_sub_section_var_width.'" id="'.$nd_cc_sub_section_var_width.'">
    
                <option '; if( $nd_cc_sub_section_width == 100 ) { $nd_cc_section .= 'selected="selected"'; } $nd_cc_section .= ' value="100">Width 100 %</option>
                <option '; if( $nd_cc_sub_section_width == 66 ) { $nd_cc_section .= 'selected="selected"'; } $nd_cc_section .= ' value="66">Width 66 %</option>
                <option '; if( $nd_cc_sub_section_width == 50 ) { $nd_cc_section .= 'selected="selected"'; } $nd_cc_section .= ' value="50">Width 50 %</option>
                <option '; if( $nd_cc_sub_section_width == 33 ) { $nd_cc_section .= 'selected="selected"'; } $nd_cc_section .= ' value="33">Width 33 %</option>
               
              </select></p>


            </div>

          </div>


          <div id="nd_cc_sub_sections_tabs_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'" class="nd_cc_sub_sections_tabs">
            
            <ul>
              <li><a href="#tab-1">Slider</a></li>
              <li><a href="#tab-2">Switch</a></li>
              <li><a href="#tab-3">Tags</a></li>
              <li><a href="#tab-4">Select</a></li>
            </ul>
            
            <div id="tab-1">

              <div style="width:33%; display: inline-block;">
                <p><strong>Min :</strong></p>
                <p style="margin-top:10px;"><input class="regular-text" type="text" name="'.$nd_cc_sub_section_var_slide_min.'" id="'.$nd_cc_sub_section_var_slide_min.'" value="'.esc_attr($nd_cc_sub_section_slide_min).'" /></p>
              </div>

              <div style="width:33%; display: inline-block;">
                <p><strong>Max :</strong></p>
                <p style="margin-top:10px;"><input class="regular-text" type="text" name="'.$nd_cc_sub_section_var_slide_max.'" id="'.$nd_cc_sub_section_var_slide_max.'" value="'.esc_attr($nd_cc_sub_section_slide_max).'" /></p>
              </div>

              <div style="width:33%; display: inline-block;">
                <p><strong>Default :</strong></p>
                <p style="margin-top:10px;"><input class="regular-text" type="text" name="'.$nd_cc_sub_section_var_slide_default.'" id="'.$nd_cc_sub_section_var_slide_default.'" value="'.esc_attr($nd_cc_sub_section_slide_default).'" /></p>
              </div>

              <div style="width:33%; display: inline-block;">
                <p style="margin-top:20px;"><strong>Price</strong></p>
                <p style="margin-top:10px;"><input class="regular-text" type="number" name="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.esc_attr($nd_cc_sub_section_i).'_0" id="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_0" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_0', true ).'" /></p>
              </div>
              
            </div>
            
            <div id="tab-2">

              <div style="width:33%; display: inline-block;">
                <p><strong>Name On :</strong></p>
                <p style="margin-top:10px;"><input class="regular-text" type="text" name="'.$nd_cc_sub_section_var_switch_on.'" id="'.$nd_cc_sub_section_var_switch_on.'" value="'.esc_attr($nd_cc_sub_section_switch_on).'" /></p>
              </div>

              <div style="width:33%; display: inline-block;">
                <p><strong>Name Off :</strong></p>
                <p style="margin-top:10px;"><input class="regular-text" type="text" name="'.$nd_cc_sub_section_var_switch_off.'" id="'.$nd_cc_sub_section_var_switch_off.'" value="'.esc_attr($nd_cc_sub_section_switch_off).'" /></p>
              </div>

              <div style="width:33%; display: inline-block;">
                <p><strong>Price</strong></p>
                <p style="margin-top:10px;"><input class="regular-text" type="number" name="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.esc_attr($nd_cc_sub_section_i).'_1" id="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_1" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_1', true ).'" /></p>
              </div>

            </div>

            <div id="tab-3">

              <p><strong>Type :</strong></p>

              <p style="margin-top:10px;"><select class="regular-text" name="'.$nd_cc_sub_section_var_tag_type.'" id="'.$nd_cc_sub_section_var_tag_type.'">
    
                <option '; if( $nd_cc_sub_section_tag_type == 0 ) { $nd_cc_section .= 'selected="selected"'; } $nd_cc_section .= ' value="0">One Select</option>
                <option '; if( $nd_cc_sub_section_tag_type == 1 ) { $nd_cc_section .= 'selected="selected"'; } $nd_cc_section .= ' value="1">Multi Select</option>
               
              </select></p>
              <div style="border-bottom: 1px solid #eee; height: 2px; margin-top: 30px; margin-bottom: 20px;"></div>';


              

              $nd_cc_repeater_i = 1;
              while ( $nd_cc_repeater_i <= $nd_cc_max_repeater_options ) {

                  if ( $nd_cc_repeater_i == 1 ) {

                    $nd_cc_section .= '

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Name</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_name_tag_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2_'.$nd_cc_repeater_i.'" id="" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_name_tag_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>


                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Price</strong></p>
                      <input class="regular-text" type="number" name="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2" id="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2', true ).'" />
                    </div>

                    <div style="width:33%; display: inline-block;">
                      <a onclick="nd_cc_add_more_tag_options('.$nd_cc_section_i.','.$nd_cc_sub_section_i.')" class="nd_cc_sub_section_option_tag_open_btn nd_cc_background_color_grey"><span class="dashicons dashicons-arrow-down-alt2"></span> Open</a>
                      <a onclick="nd_cc_remove_more_tag_options('.$nd_cc_section_i.','.$nd_cc_sub_section_i.')" class="nd_cc_sub_section_option_tag_remove_btn nd_cc_background_color_red"><span class="dashicons dashicons-arrow-up-alt2"></span> Close</a>
                    </div>

                    ';

                  }else{

                    if ( $nd_cc_repeater_i == 2 ) {
                      $nd_cc_section .= '<div class="nd_cc_sub_section_option_tag_content nd_cc_background_color_red">';
                    }

                    $nd_cc_section .= '


                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Name</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_name_tag_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2_'.$nd_cc_repeater_i.'" id="" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_name_tag_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Price</strong></p>
                      <input class="regular-text" type="number" name="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2_'.$nd_cc_repeater_i.'" id="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2_'.$nd_cc_repeater_i.'" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_2_'.$nd_cc_repeater_i.'', true ).'" />
                    </div>

                    <div style="width:33%; display: inline-block;">
                    
                    </div>

                    ';


                    if ( $nd_cc_repeater_i == $nd_cc_max_repeater_options ) {
                      $nd_cc_section .= '</div>';
                    }
                  
                  }


                $nd_cc_repeater_i++;
              }


            $nd_cc_section .= '
            </div>

            <div id="tab-4">';

            



            $nd_cc_repeater_i = 1;
              while ( $nd_cc_repeater_i <= $nd_cc_max_repeater_options ) {

                  if ( $nd_cc_repeater_i == 1 ) {

                    $nd_cc_section .= '

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Name</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_name_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" id="" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_name_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>


                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Price</strong></p>
                      <input class="regular-text" type="number" name="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3" id="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3', true ).'" />
                    </div>


                    <div style="width:33%; display: inline-block;">
                      <a onclick="nd_cc_add_more_tag_options('.$nd_cc_section_i.','.$nd_cc_sub_section_i.')" class="nd_cc_sub_section_option_tag_open_btn nd_cc_background_color_grey"><span class="dashicons dashicons-arrow-down-alt2"></span> Open</a>
                      <a onclick="nd_cc_remove_more_tag_options('.$nd_cc_section_i.','.$nd_cc_sub_section_i.')" class="nd_cc_sub_section_option_tag_remove_btn nd_cc_background_color_red"><span class="dashicons dashicons-arrow-up-alt2"></span> Close</a>
                    </div>

                    
                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Description</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_descr_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" id="" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_descr_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Icon</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_icon_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" id="nd_cc_sub_section_icon_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_icon_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>

                    <div style="width:33%; display: inline-block;">
                  
                    </div>

                    ';

                  }else{

                    if ( $nd_cc_repeater_i == 2 ) {
                      $nd_cc_section .= '<div class="nd_cc_sub_section_option_tag_content nd_cc_background_color_red">';
                    }

                    $nd_cc_section .= '

                    <div style="margin-top: 30px; margin-bottom: 20px;" class="nd_cc_border_bottom_1_solid_eee"></div>

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Name</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_name_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" id="" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_name_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Price</strong></p>
                      <input class="regular-text" type="number" name="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" id="nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_price_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'', true ).'" />
                    </div>

                    <div style="width:33%; display: inline-block;">
                  
                    </div>

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Description</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_descr_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" id="" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_descr_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>

                    <div style="width:33%; display: inline-block;">
                      <p style="margin-top:10px;"><strong>Icon</strong></p>
                      <p style="margin-top:10px;"><input class="regular-text" type="text" name="nd_cc_sub_section_icon_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i.'" id="" value="'.get_post_meta( get_the_ID(), 'nd_cc_sub_section_icon_select_'.$nd_cc_section_i.'_'.$nd_cc_sub_section_i.'_3_'.$nd_cc_repeater_i, true ).'" /></p>
                    </div>

                    <div style="width:33%; display: inline-block;">
                  
                    </div>

                    ';


                    if ( $nd_cc_repeater_i == $nd_cc_max_repeater_options ) {
                      $nd_cc_section .= '</div>';
                    }
                  
                  }


                $nd_cc_repeater_i++;
              }





            $nd_cc_section .= '
            </div>

          </div>

          <p><input class="regular-text" readonly type="hidden" name="'.$nd_cc_sub_section_var_active.'" id="'.$nd_cc_sub_section_var_active.'" value="'.esc_attr($nd_cc_sub_section_active).'" /></p>

          </div> 
          <!--END sub section-->';


          if ( nd_cc_is_sub_section_used($nd_cc_section_i,$nd_cc_sub_section_i,$nd_cc_sub_section_active,get_the_ID()) == 0 ) {
            $nd_cc_sub_sections_d .= $nd_cc_section;
          }else{
            $nd_cc_sub_sections_e .= $nd_cc_section; 
          }

          $nd_cc_sub_section_i++;

        }
        //END SUB SECTION WHILE


      $nd_cc_sections .= '

          '.$nd_cc_sub_sections_e.'
          '.$nd_cc_sub_sections_d.'

          <a title="Add Sub Section" class="nd_cc_add_sub_section_btn" onclick="nd_cc_add_sub_section('.$nd_cc_section_i.')" style="cursor:pointer;"><span class="dashicons dashicons-plus"></span></a>

        </div>
        <!--End sub sections content-->

      </div>
      <!--END section-->';

      if ( nd_cc_is_section_used($nd_cc_section_i,$nd_cc_max_sub_sections,get_the_ID()) == 0 ) {
        $nd_cc_sections_d .= $nd_cc_sections;
      }else{
        $nd_cc_sections_e .= $nd_cc_sections; 
      }

      $nd_cc_sections = '';

      $nd_cc_section_i++;
    
    }
    //START SECTION WHILE



    $nd_cc_add_section_btn = '
    <a title="Add Section" class="nd_cc_add_section_btn" onclick="nd_cc_add_section()">
      <span class="dashicons dashicons-plus"></span>
    </a>';



    $nd_cc_all_page_content = '

    <div id="nd_cc_all_page_content">
      '.$nd_cc_sections_e.'
      '.$nd_cc_sections_d.'
      '.$nd_cc_page_style.' '.$nd_cc_page_script.'
      '.$nd_cc_add_section_btn.'
    </div>';
    

    echo $nd_cc_all_page_content;


}