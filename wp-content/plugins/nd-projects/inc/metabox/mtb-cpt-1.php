<?php

///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////

//add image size
if ( function_exists( 'add_image_size' ) ) {  
    add_image_size( 'nd_cc_image_size_1110_570', 1110, 570, true ); 
    add_image_size( 'nd_cc_image_size_720_720', 720, 720, true ); 
}


add_action( 'add_meta_boxes', 'nd_cc_box_add' );
function nd_cc_box_add() {
    add_meta_box( 'nd_cc_metabox_cpt_1', __('Metabox','nd-projects'), 'nd_cc_meta_box', 'nd_cc_cpt_1', 'normal', 'high' );
}

function nd_cc_meta_box()
{

    global $post;

    //create nonce
    wp_nonce_field( 'nd_cc_mb_project_nonc', 'nd_cc_mb_project_nonce' );


    //iris color picker
    wp_enqueue_script('iris');

    //jquery-ui-tabs
    wp_enqueue_script('jquery-ui-tabs');

    //jquery-ui-autocomplete
    wp_enqueue_script('jquery-ui-autocomplete');


    // $post is already set, and contains an object: the WordPress post
    $nd_cc_values = get_post_custom( $post->ID );
     

    //main settings
    $nd_cc_meta_box_color = get_post_meta( get_the_ID(), 'nd_cc_meta_box_color', true );
    $nd_cc_meta_box_text_preview = get_post_meta( get_the_ID(), 'nd_cc_meta_box_text_preview', true );
    $nd_cc_meta_box_btn_text = get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_text', true );
    $nd_cc_meta_box_btn_link = get_post_meta( get_the_ID(), 'nd_cc_meta_box_btn_link', true );
    $nd_cc_meta_box_related_projects = get_post_meta( get_the_ID(), 'nd_cc_meta_box_related_projects', true );
    $nd_cc_meta_box_authors = get_post_meta( get_the_ID(), 'nd_cc_meta_box_authors', true );



    //project settings
    $nd_cc_meta_box_budget = get_post_meta( get_the_ID(), 'nd_cc_meta_box_budget', true );
    $nd_cc_meta_box_customer = get_post_meta( get_the_ID(), 'nd_cc_meta_box_customer', true );
    $nd_cc_meta_box_location = get_post_meta( get_the_ID(), 'nd_cc_meta_box_location', true );
    $nd_cc_meta_box_start_date = get_post_meta( get_the_ID(), 'nd_cc_meta_box_start_date', true );
    $nd_cc_meta_box_duration = get_post_meta( get_the_ID(), 'nd_cc_meta_box_duration', true );
    $nd_cc_meta_box_size = get_post_meta( get_the_ID(), 'nd_cc_meta_box_size', true );
    $nd_cc_meta_box_image_box = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_box', true );

    //page settings
    $nd_cc_meta_box_image_position = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_position', true );
    $nd_cc_meta_box_image = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image', true );
    $nd_cc_meta_box_image_title = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_title', true );
    $nd_cc_meta_box_page_layout = get_post_meta( get_the_ID(), 'nd_cc_meta_box_page_layout', true );
    $nd_cc_meta_box_featured_image_size = get_post_meta( get_the_ID(), 'nd_cc_meta_box_featured_image_size', true );
    $nd_cc_meta_box_featured_image_replace = get_post_meta( get_the_ID(), 'nd_cc_meta_box_featured_image_replace', true );
    $nd_cc_meta_box_image_page = get_post_meta( get_the_ID(), 'nd_cc_meta_box_image_page', true );

    ?>



    <div id="nd_cc_id_metabox_cpt">
        <ul>
            <li><a href="#nd_cc_tab_main"><span class="dashicons-before dashicons-admin-settings nd_cc_line_height_20 nd_cc_margin_right_10 nd_cc_color_444444"></span><?php _e('Main Settings','nd-projects'); ?></a></li>
            <li><a href="#nd_cc_tab_project"><span class="dashicons-before dashicons-index-card nd_cc_line_height_20 nd_cc_margin_right_10 nd_cc_color_444444"></span><?php _e('Project Settings','nd-projects'); ?></a></li>
            <li><a href="#nd_cc_tab_page"><span class="dashicons-before dashicons-format-aside nd_cc_line_height_20 nd_cc_margin_right_10 nd_cc_color_444444"></span><?php _e('Page Settings','nd-projects'); ?></a></li>
            
            <?php do_action("nd_cc_single_cpt_1_tab_list"); ?>

        </ul>
        
        <div class="nd_cc_id_metabox_cpt_content">
            <div id="nd_cc_tab_main">
                
                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Color','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" id="nd_cc_colorpicker" type="text" name="nd_cc_meta_box_color" value="<?php echo esc_attr($nd_cc_meta_box_color); ?>" /></p>
                    <p><?php _e('Set project color','nd-projects'); ?></p>
                </div>
                <script type="text/javascript">
                  //<![CDATA[
                  
                  jQuery(document).ready(function($){
                      $('#nd_cc_colorpicker').iris();
                  });

                  //]]>
                </script>
                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Text Preview','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_text_preview" id="nd_cc_meta_box_text_preview" value="<?php echo esc_attr($nd_cc_meta_box_text_preview); ?>" /></p>
                    <p><?php _e('Insert the text preview which will be visible on the post grid preview','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Button Text','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_btn_text" id="nd_cc_meta_box_btn_text" value="<?php echo esc_attr($nd_cc_meta_box_btn_text); ?>" /></p>
                    <p><?php _e('Description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Button Url Link','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_btn_link" id="nd_cc_meta_box_btn_link" value="<?php echo esc_attr($nd_cc_meta_box_btn_link); ?>" /></p>
                    <p><?php _e('Description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Related Projects','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_related_projects" id="nd_cc_meta_box_related_projects" value="<?php echo esc_attr($nd_cc_meta_box_related_projects); ?>" /></p>
                    <p><?php _e('This is an intuitive field, enter the projects previously created in the projects section ( separated by comma )','nd-projects'); ?></p>
                </div>

                <script type="text/javascript">
                //<![CDATA[

                jQuery(document).ready(function($){
                  var nd_cc_available_services = [ 

                    //start all documents list
                    <?php 

                      $nd_cc_services_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_cc_cpt_1' );
                      $nd_cc_services = get_posts($nd_cc_services_args); 

                      foreach ($nd_cc_services as $nd_cc_service) :
                        echo '"'.$nd_cc_service->post_name.'",'; 
                      endforeach;
                      
                    ?>
                    //end all documents list

                  ];
                  function split( val ) {
                    return val.split( /,\s*/ );
                  }
                  function extractLast( term ) {
                    return split( term ).pop();
                  }

                  $( "#nd_cc_meta_box_related_projects" )
                    // don't navigate away from the field on tab when selecting an item
                    .on( "keydown", function( event ) {
                      if ( event.keyCode === $.ui.keyCode.TAB &&
                          $( this ).autocomplete( "instance" ).menu.active ) {
                        event.preventDefault();
                      }
                    })
                    .autocomplete({
                      minLength: 0,
                      source: function( request, response ) {
                        // delegate back to autocomplete, but extract the last term
                        response( $.ui.autocomplete.filter(
                          nd_cc_available_services, extractLast( request.term ) ) );
                      },
                      focus: function() {
                        // prevent value inserted on focus
                        return false;
                      },
                      select: function( event, ui ) {
                        var terms = split( this.value );
                        // remove the current input
                        terms.pop();
                        // add the selected item
                        terms.push( ui.item.value );
                        // add placeholder to get the comma-and-space at the end
                        terms.push( "" );
                        this.value = terms.join( "," );
                        return false;
                      }
                    });
                } );

                //]]>
                </script>


                <div class="nd_cc_section nd_cc_padding_10 nd_cc_box_sizing_border_box">
                  <p><strong><?php _e('Author','nd-projects'); ?></strong></p>
                  <p>
                    <select class="nd_cc_width_100_percentage" name="nd_cc_meta_box_authors" id="nd_cc_meta_box_authors">
                      
                      <?php 

                      $nd_cc_meta_box_authors = get_post_meta( get_the_ID(), 'nd_cc_meta_box_authors', true );
                      $nd_cc_authors_args = array( 'posts_per_page' => -1, 'post_type'=> 'nd_cc_cpt_2' );
                      $nd_cc_authors = get_posts($nd_cc_authors_args); 

                      ?>

                      <option <?php if ( $nd_cc_meta_box_authors == 0 ) { echo 'selected="selected"'; } ?> value="0"><?php _e('Not Set','nd-projects'); ?></option>

                      <?php foreach ($nd_cc_authors as $nd_cc_meta_box_author) : ?>
                          <option 

                          <?php 
                            if( $nd_cc_meta_box_authors == $nd_cc_meta_box_author->ID ) { 
                              echo 'selected="selected"';
                            } 
                          ?>

                          value="<?php echo esc_attr($nd_cc_meta_box_author->ID); ?>">
                              <?php echo $nd_cc_meta_box_author->post_title; ?>
                          </option>
                      <?php endforeach; ?>
                    </select>
                  </p>
                  <p><?php _e('Select the author of your project','nd-projects'); ?></p>
                </div>


            </div>


            <div id="nd_cc_tab_project">
                
                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Budget','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_budget" id="nd_cc_meta_box_budget" value="<?php echo esc_attr($nd_cc_meta_box_budget); ?>" /></p>
                    <p><?php _e('description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Customer','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_customer" id="nd_cc_meta_box_customer" value="<?php echo esc_attr($nd_cc_meta_box_customer); ?>" /></p>
                    <p><?php _e('description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Location','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_location" id="nd_cc_meta_box_location" value="<?php echo esc_attr($nd_cc_meta_box_location); ?>" /></p>
                    <p><?php _e('description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Start Date','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_start_date" id="nd_cc_meta_box_start_date" value="<?php echo esc_attr($nd_cc_meta_box_start_date); ?>" /></p>
                    <p><?php _e('description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Duration','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_duration" id="nd_cc_meta_box_duration" value="<?php echo esc_attr($nd_cc_meta_box_duration); ?>" /></p>
                    <p><?php _e('description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Project Size','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_size" id="nd_cc_meta_box_size" value="<?php echo esc_attr($nd_cc_meta_box_size); ?>" /></p>
                    <p><?php _e('description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section  nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Image Box','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_image_box" id="nd_cc_meta_box_image_box" value="<?php echo esc_attr($nd_cc_meta_box_image_box); ?>" /></p>
                    <input class="button nd_cc_meta_box_image_box_button" type="button" name="nd_cc_meta_box_image_box_button" id="nd_cc_meta_box_image_box_button" value="<?php _e('Upload','nd-projects'); ?>" />
                    <p><?php _e('Insert the image box url','nd-projects'); ?></p>

                    <script type="text/javascript">
                      //<![CDATA[
                          
                      jQuery(document).ready(function() {

                        jQuery( function ( $ ) {

                          var file_frame = [],
                          $button = $( '.nd_cc_meta_box_image_box_button' );


                          $('#nd_cc_meta_box_image_box_button').click( function () {


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

                              $('#nd_cc_meta_box_image_box').val(attachment.url);

                            } );

                            // Finally, open the modal
                            file_frame[ id ].open();


                          } );

                        });

                      });

                        //]]>
                      </script>

                </div>

            </div>
            

            <div id="nd_cc_tab_page">

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Header Image','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_image" id="nd_cc_meta_box_image" value="<?php echo esc_attr($nd_cc_meta_box_image); ?>" /></p>
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

                              $('#nd_cc_meta_box_image').val(attachment.url);

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
                      <select class="nd_cc_width_100_percentage" name="nd_cc_meta_box_image_position" id="nd_cc_meta_box_image_position">
    
                        <option <?php if( $nd_cc_meta_box_image_position == 'nd_cc_background_position_center' ) { echo 'selected="selected"'; } ?> value="nd_cc_background_position_center"><?php _e('Center','nd-projects'); ?></option>
                        <option <?php if( $nd_cc_meta_box_image_position == 'nd_cc_background_position_center_top' ) { echo 'selected="selected"'; } ?> value="nd_cc_background_position_center_top"><?php _e('Top','nd-projects'); ?></option>
                        <option <?php if( $nd_cc_meta_box_image_position == 'nd_cc_background_position_center_bottom' ) { echo 'selected="selected"'; } ?> value="nd_cc_background_position_center_bottom"><?php _e('Bottom','nd-projects'); ?></option>
                         
                      </select>
                    </p>
                    <p><?php _e('Select the image position for your header image','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Image Title','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_image_title" id="nd_cc_meta_box_image_title" value="<?php echo esc_attr($nd_cc_meta_box_image_title); ?>" /></p>
                    <p><?php _e('description','nd-projects'); ?></p>
                </div>

                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee  nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Page Layout','nd-projects'); ?></strong></p>
                    <p>
                        
                        <select class="nd_cc_width_100_percentage" name="nd_cc_meta_box_page_layout" id="nd_cc_meta_box_page_layout">
    
                            <option <?php if( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_full_width' ) { echo 'selected="selected"'; } ?> value="nd_cc_meta_box_page_layout_full_width"><?php _e('Full Width','nd-projects'); ?></option>
                            <option <?php if( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_right_sidebar' ) { echo 'selected="selected"'; } ?> value="nd_cc_meta_box_page_layout_right_sidebar"><?php _e('Right Sidebar','nd-projects'); ?></option>
                            <option <?php if( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_left_sidebar' ) { echo 'selected="selected"'; } ?> value="nd_cc_meta_box_page_layout_left_sidebar"><?php _e('Left Sidebar','nd-projects'); ?></option>
                            <option <?php if( $nd_cc_meta_box_page_layout == 'nd_cc_meta_box_page_layout_free_content' ) { echo 'selected="selected"'; } ?> value="nd_cc_meta_box_page_layout_free_content"><?php _e('Free Content','nd-projects'); ?></option>

                        </select>

                    </p>
                    <p><?php _e('Select the layout for your project page','nd-projects'); ?></p>
                </div>


                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Featured Image size','nd-projects'); ?></strong></p>
                    <p>
                        
                        <select class="nd_cc_width_100_percentage" name="nd_cc_meta_box_featured_image_size" id="nd_cc_meta_box_featured_image_size">
                            <option <?php if( $nd_cc_meta_box_featured_image_size == 'large' ) { echo 'selected="selected"'; } ?> value="large"><?php _e('Large','nd-projects'); ?></option>
                        <?php

                            $nd_cc_image_sizes = get_intermediate_image_sizes();
                            for ($nd_cc_image_sizes_i = 0; $nd_cc_image_sizes_i < count($nd_cc_image_sizes); $nd_cc_image_sizes_i++) {
                                
                                $nd_cc_image_size = $nd_cc_image_sizes[$nd_cc_image_sizes_i]; ?>

                                <option <?php if( $nd_cc_meta_box_featured_image_size == $nd_cc_image_size ) { echo 'selected="selected"'; } ?> value="<?php echo esc_attr($nd_cc_image_size); ?>"><?php echo $nd_cc_image_size; ?></option>
                         
                        <?php        
                        }
                        ?>
                        </select>

                    </p>
                    <p><?php _e('Select the image size that you want to use for your featured image','nd-projects'); ?></p>
                </div>


                <div class="nd_cc_section nd_cc_border_bottom_1_solid_eee nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Featured Image Replace','nd-projects'); ?></strong></p>
                    <p><textarea rows="5" class="nd_cc_width_100_percentage" name="nd_cc_meta_box_featured_image_replace" id="nd_cc_meta_box_featured_image_replace"><?php echo $nd_cc_meta_box_featured_image_replace ?></textarea></p>
                    <p><?php _e('Replace the featured image with your custom content','nd-projects'); ?></p>
                </div>


                <div class="nd_cc_section nd_cc_padding_10 nd_cc_box_sizing_border_box">
                    <p><strong><?php _e('Page Background Image','nd-projects'); ?></strong></p>
                    <p><input class="nd_cc_width_100_percentage" type="text" name="nd_cc_meta_box_image_page" id="nd_cc_meta_box_image_page" value="<?php echo esc_attr($nd_cc_meta_box_image_page); ?>" /></p>
                    <input class="button nd_cc_meta_box_image_page_btn" type="button" name="nd_cc_meta_box_image_page_btn" id="nd_cc_meta_box_image_page_btn" value="<?php _e('Upload','nd-projects'); ?>" />
                    <p><?php _e('Insert the page background image url','nd-projects'); ?></p>

                    <script type="text/javascript">
                      //<![CDATA[
                          
                      jQuery(document).ready(function() {

                        jQuery( function ( $ ) {

                          var file_frame = [],
                          $button = $( '.nd_cc_meta_box_image_page_btn' );


                          $('#nd_cc_meta_box_image_page_btn').click( function () {


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

                              $('#nd_cc_meta_box_image_page').val(attachment.url);

                            } );

                            // Finally, open the modal
                            file_frame[ id ].open();


                          } );

                        });

                      });

                        //]]>
                      </script>

                </div>

            </div>


            <?php do_action("nd_cc_single_cpt_1_tab_content"); ?>



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


add_action( 'save_post', 'nd_cc_meta_box_save' );
function nd_cc_meta_box_save( $post_id )
{

    // Check if nonce is set and its validation
    if ( ! isset( $_POST['nd_cc_mb_project_nonce'] ) ) { return $post_id; }
    $nd_cc_mb_setsave_projects_nonce = $_POST['nd_cc_mb_project_nonce'];
    if ( ! wp_verify_nonce( $nd_cc_mb_setsave_projects_nonce, 'nd_cc_mb_project_nonc' ) ) { return $post_id; }


    //main settings : sanitaze and validate
    $nd_cc_meta_box_color = sanitize_hex_color( $_POST['nd_cc_meta_box_color'] );
    
    if ( isset( $nd_cc_meta_box_color ) ) { 

      if ( $nd_cc_meta_box_color != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_color' , $nd_cc_meta_box_color );   
      }else{
        delete_post_meta( $post_id, 'nd_cc_meta_box_color' );
      }

    }

    $nd_cc_meta_box_text_preview = sanitize_text_field($_POST['nd_cc_meta_box_text_preview']);
    
    if ( isset( $nd_cc_meta_box_text_preview ) ) { 

      if ( $nd_cc_meta_box_text_preview != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_text_preview' , $nd_cc_meta_box_text_preview );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_text_preview');
      }
      
    }

    $nd_cc_meta_box_btn_text = sanitize_text_field($_POST['nd_cc_meta_box_btn_text']);
    
    if ( isset( $nd_cc_meta_box_btn_text ) ) { 

      if ( $nd_cc_meta_box_btn_text != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_btn_text' , $nd_cc_meta_box_btn_text ); 
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_btn_text');
      }
       
    }

    $nd_cc_meta_box_btn_link = esc_url_raw( $_POST['nd_cc_meta_box_btn_link'] );
    
    if ( isset( $nd_cc_meta_box_btn_link ) ) { 

      if ( $nd_cc_meta_box_btn_link != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_btn_link' , $nd_cc_meta_box_btn_link );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_btn_link');
      }
      
    }

    $nd_cc_meta_box_related_projects = sanitize_text_field($_POST['nd_cc_meta_box_related_projects']);
    
    if ( isset( $nd_cc_meta_box_related_projects ) ) { 

      if ( $nd_cc_meta_box_related_projects != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_related_projects' , $nd_cc_meta_box_related_projects );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_related_projects');
      }
      
    }

    $nd_cc_meta_box_authors = sanitize_text_field($_POST['nd_cc_meta_box_authors']);
    
    if ( isset( $nd_cc_meta_box_authors ) ) { 

      if ( $nd_cc_meta_box_authors != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_authors' , $nd_cc_meta_box_authors );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_authors');
      }
      
    }

    
    //project settings : sanitaze and validate
    $nd_cc_meta_box_budget = sanitize_text_field($_POST['nd_cc_meta_box_budget']);
    
    if ( isset( $nd_cc_meta_box_budget ) ) { 

      if ( $nd_cc_meta_box_budget != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_budget' , $nd_cc_meta_box_budget );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_budget');
      }
      
    }

    $nd_cc_meta_box_customer = sanitize_text_field($_POST['nd_cc_meta_box_customer']);
    
    if ( isset( $nd_cc_meta_box_customer ) ) { 

      if ( $nd_cc_meta_box_customer != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_customer' , $nd_cc_meta_box_customer );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_customer');
      }
      
    }

    $nd_cc_meta_box_location = sanitize_text_field($_POST['nd_cc_meta_box_location']);
    
    if ( isset( $nd_cc_meta_box_location ) ) { 

      if ( $nd_cc_meta_box_location != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_location' , $nd_cc_meta_box_location );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_location');
      }
      
    }

    $nd_cc_meta_box_start_date = sanitize_text_field($_POST['nd_cc_meta_box_start_date']);
    
    if ( isset( $nd_cc_meta_box_start_date ) ) { 

      if ( $nd_cc_meta_box_start_date != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_start_date' , $nd_cc_meta_box_start_date );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_start_date');
      }
      
    }

    $nd_cc_meta_box_duration = sanitize_text_field($_POST['nd_cc_meta_box_duration']);
    
    if ( isset( $nd_cc_meta_box_duration ) ) { 

      if ( $nd_cc_meta_box_duration != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_duration' , $nd_cc_meta_box_duration );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_duration');
      }
      
    }

    $nd_cc_meta_box_size = sanitize_text_field($_POST['nd_cc_meta_box_size']);
    
    if ( isset( $nd_cc_meta_box_size ) ) { 

      if ( $nd_cc_meta_box_size != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_size' , $nd_cc_meta_box_size );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_size');
      }
      
    }

    $nd_cc_meta_box_image_box = esc_url_raw( $_POST['nd_cc_meta_box_image_box'] );
    
    if ( isset( $nd_cc_meta_box_image_box ) ) { 

      if ( $nd_cc_meta_box_image_box != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_image_box' , $nd_cc_meta_box_image_box );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_image_box');
      }
      
    }

    


    //page settings : sanitaze and validate
    $nd_cc_meta_box_image = esc_url_raw( $_POST['nd_cc_meta_box_image'] );
    
    if ( isset( $nd_cc_meta_box_image ) ) { 

      if ( $nd_cc_meta_box_image != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_image' , $nd_cc_meta_box_image ); 
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_image');
      }
       
    }

    $nd_cc_meta_box_image_page = esc_url_raw( $_POST['nd_cc_meta_box_image_page'] );
    
    if ( isset( $nd_cc_meta_box_image_page ) ) { 

      if ( $nd_cc_meta_box_image_page != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_image_page' , $nd_cc_meta_box_image_page );   
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_image_page');
      }
      
    }

    $nd_cc_meta_box_image_title = sanitize_text_field($_POST['nd_cc_meta_box_image_title']);
    
    if ( isset( $nd_cc_meta_box_image_title ) ) { 

      if ( $nd_cc_meta_box_image_title != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_image_title' , $nd_cc_meta_box_image_title ); 
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_image_title');
      }

    }

    $nd_cc_meta_box_image_position = sanitize_text_field( $_POST['nd_cc_meta_box_image_position'] );
    
    if ( isset( $nd_cc_meta_box_image_position ) ) { 

      if ( $nd_cc_meta_box_image_position != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_image_position' , $nd_cc_meta_box_image_position );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_image_position');
      }
      
    }

    $nd_cc_meta_box_page_layout = sanitize_text_field( $_POST['nd_cc_meta_box_page_layout'] );
    
    if ( isset( $nd_cc_meta_box_page_layout ) ) { 

      if ( $nd_cc_meta_box_page_layout != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_page_layout' , $nd_cc_meta_box_page_layout );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_page_layout');
      }

    }

    $nd_cc_meta_box_featured_image_size = sanitize_text_field($_POST['nd_cc_meta_box_featured_image_size']);
    
    if ( isset( $nd_cc_meta_box_featured_image_size ) ) { 

      if ( $nd_cc_meta_box_featured_image_size != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_featured_image_size' , $nd_cc_meta_box_featured_image_size );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_featured_image_size');
      }

    }

    $nd_cc_allowed_html = array(
    
      'iframe' => array(
          'src' => array(),
          'width' => array(),
          'height' => array(),
          'frameborder' => array(),
          'style' => array(),
          'allowfullscreen' => array()
      ),

    );

    $nd_cc_meta_box_featured_image_replace = wp_kses( $_POST['nd_cc_meta_box_featured_image_replace'], $nd_cc_allowed_html );
    
    if ( isset( $nd_cc_meta_box_featured_image_replace ) ) { 

      if ( $nd_cc_meta_box_featured_image_replace != '' ) {
        update_post_meta( $post_id, 'nd_cc_meta_box_featured_image_replace' , $nd_cc_meta_box_featured_image_replace );  
      }else{
        delete_post_meta( $post_id,'nd_cc_meta_box_featured_image_replace');
      }

    }


}