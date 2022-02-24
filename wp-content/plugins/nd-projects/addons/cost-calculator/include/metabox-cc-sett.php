<?php


function nd_cc_metabox_cost_calc_settigns()
{

    global $post;

    //create nonce
    wp_nonce_field( 'nd_cc_mb_sett_nonc', 'nd_cc_mb_sett_nonce' );

    //iris color picker
    wp_enqueue_script('iris');

    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    // $post is already set, and contains an object: the WordPress post
    $nd_cc_values = get_post_custom( $post->ID );
     
    //main settings
    $nd_cc_meta_box_cc_color = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_color', true );
    $nd_cc_meta_box_cc_layout = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_layout', true );
    $nd_cc_meta_box_cc_section_number = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_section_number', true );
    $nd_cc_meta_box_cc_subsection_number = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_subsection_number', true );
    $nd_cc_meta_box_cc_repeater_number = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_repeater_number', true );
  
    //price settings
    $nd_cc_meta_box_cc_price_title = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_price_title', true );
    $nd_cc_meta_box_cc_price_descr = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_price_descr', true );
    $nd_cc_meta_box_cc_price_price = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_price_price', true );
    $nd_cc_meta_box_cc_price_icon = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_price_icon', true );
    $nd_cc_meta_box_cc_price_currency = get_post_meta( get_the_ID(), 'nd_cc_meta_box_cc_price_currency', true );
    
    ?>



    <div id="nd_cc_id_metabox_cpt">
        <ul>
            <li><a href="#nd_cc_tab_main"><span class="dashicons-before dashicons-admin-settings nd_cc_line_height_20 nd_cc_margin_right_10 nd_cc_color_444444"></span><?php _e('Main Settings','nd-projects'); ?></a></li>
            <li><a href="#nd_cc_tab_price"><span class="dashicons-before dashicons-edit nd_cc_line_height_20 nd_cc_margin_right_10 nd_cc_color_444444"></span><?php _e('Price Settings','nd-projects'); ?></a></li>
        </ul>
        
        <div class="nd_cc_id_metabox_cpt_content">
            <div id="nd_cc_tab_main">
                
                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Main Color','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_cc_color" id="nd_cc_meta_box_cc_color" value="<?php echo esc_attr($nd_cc_meta_box_cc_color); ?>" /></p>
                    <p><?php _e('Set the main color of your cost calculator','nd-projects'); ?></p>


                    <script type="text/javascript">
                      //<![CDATA[
                      
                      jQuery(document).ready(function($){
                          $('#nd_cc_meta_box_cc_color').iris();
                      });

                      //]]>
                    </script>


                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Layout','nd-projects'); ?></strong></p>
                    
                    <select class="nd_cc_width_100_percentage" name="nd_cc_meta_box_cc_layout" id="nd_cc_meta_box_cc_layout">
        
                      <option <?php if( $nd_cc_meta_box_cc_layout == 1 ) { echo esc_html('selected="selected"'); } ?> value="1"><?php _e('Layout 1','nd-projects'); ?></option>
                      <option <?php if( $nd_cc_meta_box_cc_layout == 2 ) { echo esc_html('selected="selected"'); } ?> value="2"><?php _e('Layout 2','nd-projects'); ?></option>
                       
                    </select>


                    <p><?php _e('Set the layout that you want to use','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('LIMIT : Sections','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="number" name="nd_cc_meta_box_cc_section_number" id="nd_cc_meta_box_cc_section_number" value="<?php echo esc_attr($nd_cc_meta_box_cc_section_number); ?>" /></p>
                    <p><?php _e('Set how many sections you would like to create','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('LIMIT : Sub Sections','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="number" name="nd_cc_meta_box_cc_subsection_number" id="nd_cc_meta_box_cc_subsection_number" value="<?php echo esc_attr($nd_cc_meta_box_cc_subsection_number); ?>" /></p>
                    <p><?php _e('Set how many sub sections you would like to create','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('LIMIT : Repeater Fields','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="number" name="nd_cc_meta_box_cc_repeater_number" id="nd_cc_meta_box_cc_repeater_number" value="<?php echo esc_attr($nd_cc_meta_box_cc_repeater_number); ?>" /></p>
                    <p><?php _e('Set how many repeater fields you would like to create','nd-projects'); ?></p>
                </div>
            
            </div>
            <div id="nd_cc_tab_price">
                
                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Title','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_cc_price_title" id="nd_cc_meta_box_cc_price_title" value="<?php echo esc_attr($nd_cc_meta_box_cc_price_title); ?>" /></p>
                    <p><?php _e('Set the tile for your price section','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Description','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_cc_price_descr" id="nd_cc_meta_box_cc_price_descr" value="<?php echo esc_attr($nd_cc_meta_box_cc_price_descr); ?>" /></p>
                    <p><?php _e('Set the description for your price section','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Start Price','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_cc_price_price" id="nd_cc_meta_box_cc_price_price" value="<?php echo esc_attr($nd_cc_meta_box_cc_price_price); ?>" /></p>
                    <p><?php _e('Set the starting price of your cost calculator','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Currency','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_cc_price_currency" id="nd_cc_meta_box_cc_price_currency" value="<?php echo esc_attr($nd_cc_meta_box_cc_price_currency); ?>" /></p>
                    <p><?php _e('Insert the currency of your cost calculator','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Icon','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_cc_price_icon" id="nd_cc_meta_box_cc_price_icon" value="<?php echo esc_url($nd_cc_meta_box_cc_price_icon); ?>" /></p>
                    <p><?php _e('Insert the url of your icon/image that you want to show at the end of the cost calculator','nd-projects'); ?></p>
                </div>
                
            </div>
            
        </div>

    </div>

    <script type="text/javascript">
      //<![CDATA[
      
      jQuery(document).ready(function($){
        $( "#nd_cc_id_metabox_cpt" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#nd_cc_id_metabox_cpt li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
      });

      //]]>
    </script>


    <?php   

}