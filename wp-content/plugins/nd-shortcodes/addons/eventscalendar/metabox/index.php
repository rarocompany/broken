<?php


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_ecalendar' );
function nd_options_metabox_ecalendar() {
    add_meta_box( 'nd-options-meta-box-eventscalendar-id', __('ND Options Events Calendar','nd-shortcodes'), 'nd_options_metabox_eventscalendar', 'tribe_events', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_eventscalendar()
{


    //include required js
    wp_enqueue_script('iris');

    //values
    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_eventscalendar_color = get_post_meta( get_the_ID(), 'nd_options_meta_box_eventscalendar_color', true );

    ?>




    <!--******************************COLOR******************************-->
    <p><strong><?php _e('Color','nd-shortcodes'); ?></strong></p>
    <p><input id="nd_options_colorpicker" type="text" name="nd_options_meta_box_eventscalendar_color" id="nd_options_meta_box_eventscalendar_color" value="<?php echo esc_html($nd_options_meta_box_eventscalendar_color); ?>" /></p>
    <p class="description"><?php _e('This color will be used as the background of the button "read more" in the archive page.','nd-shortcodes'); ?></p>

    <script type="text/javascript">
      //<![CDATA[
      
      jQuery(document).ready(function($){
          $('#nd_options_colorpicker').iris();
      });

      //]]>
    </script>


    <?php    
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_eventscalendar_save' );
function nd_options_meta_box_eventscalendar_save( $post_id )
{


    //sanitize and validate
    $nd_options_meta_box_eventscalendar_color = sanitize_hex_color( $_POST['nd_options_meta_box_eventscalendar_color'] );
    if ( isset( $nd_options_meta_box_eventscalendar_color ) ) {
    update_post_meta( $post_id, 'nd_options_meta_box_eventscalendar_color' , $nd_options_meta_box_eventscalendar_color );
    }

         
}
//END create save metabox
