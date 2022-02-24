<?php

///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////

add_action( 'add_meta_boxes', 'nd_cc_box_add_2' );
function nd_cc_box_add_2() {
    add_meta_box( 'nd_cc_metabox_cpt_2', __('Metabox','nd-projects'), 'nd_cc_meta_box_2', 'nd_cc_cpt_2', 'normal', 'high' );
}

function nd_cc_meta_box_2()
{

    global $post;

    //create nonce
    wp_nonce_field( 'nd_cc_mb_authors_nonc', 'nd_cc_mb_authors_nonce' );

    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    // $post is already set, and contains an object: the WordPress post
    $nd_cc_values = get_post_custom( $post->ID );
     
    //main settings
    $nd_cc_meta_box_role = get_post_meta( get_the_ID(), 'nd_cc_meta_box_role', true );
   
    //page settings
    $nd_cc_meta_box_image_position_a = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_position_a', true );
    $nd_cc_meta_box_image_a = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_a', true );
    $nd_cc_meta_box_page_layout_a = get_post_meta( get_the_ID(), 'nd_cc_meta_box_page_layout_a', true );

    ?>



    <div id="nd_cc_id_metabox_cpt">
        <ul>
            <li><a href="#nd_cc_tab_main"><span class="dashicons-before dashicons-admin-settings nd_cc_line_height_20 nd_cc_margin_right_10 nd_cc_color_444444"></span><?php _e('Main Settings','nd-projects'); ?></a></li>
            <li><a href="#nd_cc_tab_page"><span class="dashicons-before dashicons-format-aside nd_cc_line_height_20 nd_cc_margin_right_10 nd_cc_color_444444"></span><?php _e('Page Settings','nd-projects'); ?></a></li>
        </ul>
        
        <div class="nd_cc_id_metabox_cpt_content">
            <div id="nd_cc_tab_main">
                
                <div class="nd_cc_section  nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Role','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_role" id="nd_cc_meta_box_role" value="<?php echo esc_attr($nd_cc_meta_box_role); ?>" /></p>
                    <p><?php _e('Insert the author role','nd-projects'); ?></p>
                </div>

            </div>

            <div id="nd_cc_tab_page">

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Header Image','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_image_a" id="nd_cc_meta_box_image_a" value="<?php echo esc_attr($nd_cc_meta_box_image_a); ?>" /></p>
                    <input class="button nd_cc_meta_box_image_button" type="button" name="nd_cc_meta_box_image_button" id="nd_cc_meta_box_image_button" value="<?php _e('Upload','nd-projects'); ?>" />
                    <p><?php _e('Insert the header image url','nd-projects'); ?></p>

                    <script type="text/javascript">
                      //<![CDATA[
                          
                      jQuery(document).ready(function() {

                        jQuery( function ( $ ) {

                          var file_frame = [],
                          $button = $( '.nd_cc_meta_box_image_button' );


                          $('#nd_cc_meta_box_image_button').click( function () {


                            var $this = $( this ),
                              id = $this.attr( 'id' );

                            // If the media frame already exists, reopen it.
                            if ( file_frame[ id ] ) {
                              file_frame[ id ].open();

                              return;
                            }

                            // Create the media frame.
                            file_frame[ id ] = wp.media.frames.file_frame = wp.media( {
                              title    : $this.data( 'uploader_title' ),
                              button   : {
                                text : $this.data( 'uploader_button_text' )
                              },
                              multiple : false  // Set to true to allow multiple files to be selected
                            } );

                            // When an image is selected, run a callback.
                            file_frame[ id ].on( 'select', function() {

                              // We set multiple to false so only get one image from the uploader
                              var attachment = file_frame[ id ].state().get( 'selection' ).first().toJSON();

                              $('#nd_cc_meta_box_image_a').val(attachment.url);

                            } );

                            // Finally, open the modal
                            file_frame[ id ].open();


                          } );

                        });

                      });

                        //]]>
                      </script>

                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Image Position','nd-projects'); ?></strong></p>
                    <p>
                      <select class="nd_cc_width_100_percentage" name="nd_cc_meta_box_image_position_a" id="nd_cc_meta_box_image_position_a">
    
                        <option <?php if( $nd_cc_meta_box_image_position_a == 'nd_cc_background_position_center' ) { echo 'selected="selected"'; } ?> value="nd_cc_background_position_center"><?php _e('Center','nd-projects'); ?></option>
                        <option <?php if( $nd_cc_meta_box_image_position_a == 'nd_cc_background_position_center_top' ) { echo 'selected="selected"'; } ?> value="nd_cc_background_position_center_top"><?php _e('Top','nd-projects'); ?></option>
                        <option <?php if( $nd_cc_meta_box_image_position_a == 'nd_cc_background_position_center_bottom' ) { echo 'selected="selected"'; } ?> value="nd_cc_background_position_center_bottom"><?php _e('Bottom','nd-projects'); ?></option>
                         
                      </select>
                    </p>
                    <p><?php _e('Select the image position for your header image','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Page Layout','nd-projects'); ?></strong></p>
                    <p>
                        
                        <select class="nd_cc_width_100_percentage" name="nd_cc_meta_box_page_layout_a" id="nd_cc_meta_box_page_layout_a">
    
                            <option <?php if( $nd_cc_meta_box_page_layout_a == 'nd_cc_meta_box_page_layout_a_l1' ) { echo 'selected="selected"'; } ?> value="nd_cc_meta_box_page_layout_a_l1"><?php _e('Layout 1','nd-projects'); ?></option>
                            <option <?php if( $nd_cc_meta_box_page_layout_a == 'nd_cc_meta_box_page_layout_a_l_free' ) { echo 'selected="selected"'; } ?> value="nd_cc_meta_box_page_layout_a_l_free"><?php _e('Free Content','nd-projects'); ?></option>

                        </select>

                    </p>
                    <p><?php _e('Select the layout for your project page','nd-projects'); ?></p>
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


add_action( 'save_post', 'nd_cc_meta_box_save_2' );
function nd_cc_meta_box_save_2( $post_id )
{

    // Check if nonce is set and its validation
    if ( ! isset( $_POST['nd_cc_mb_authors_nonce'] ) ) { return $post_id; }
    $nd_cc_mb_setsave_authors_nonce = $_POST['nd_cc_mb_authors_nonce'];
    if ( ! wp_verify_nonce( $nd_cc_mb_setsave_authors_nonce, 'nd_cc_mb_authors_nonc' ) ) { return $post_id; }


    //main settings : sanitaze and validate
    $nd_cc_meta_box_role = sanitize_text_field( $_POST['nd_cc_meta_box_role'] );
    
    if ( isset( $nd_cc_meta_box_role ) ) { 

      if ( $nd_cc_meta_box_role != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_role' , $nd_cc_meta_box_role ); 
      }else{
        delete_post_meta( $post_id, 'nd_cc_meta_box_role' );
      }

    }

  
    //page settings : sanitaze and validate
    $nd_cc_meta_box_image_a = esc_url_raw( $_POST['nd_cc_meta_box_image_a'] );
    
    if ( isset( $nd_cc_meta_box_image_a ) ) { 

      if ( $nd_cc_meta_box_image_a != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_image_a' , $nd_cc_meta_box_image_a ); 
      }else{
        delete_post_meta( $post_id, 'nd_cc_meta_box_image_a' );
      }

    }

    $nd_cc_meta_box_image_position_a = sanitize_text_field( $_POST['nd_cc_meta_box_image_position_a'] );
    
    if ( isset( $nd_cc_meta_box_image_position_a ) ) { 

      if ( $nd_cc_meta_box_image_position_a != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_image_position_a' , $nd_cc_meta_box_image_position_a );
      }else{
        delete_post_meta( $post_id, 'nd_cc_meta_box_image_position_a' );
      }

    }

    $nd_cc_meta_box_page_layout_a = sanitize_text_field( $_POST['nd_cc_meta_box_page_layout_a'] );

    if ( isset( $nd_cc_meta_box_page_layout_a ) ) { 

      if ( $nd_cc_meta_box_page_layout_a != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_page_layout_a' , $nd_cc_meta_box_page_layout_a ); 
      }else{
        delete_post_meta( $post_id, 'nd_cc_meta_box_page_layout_a' );
      }

    }


}