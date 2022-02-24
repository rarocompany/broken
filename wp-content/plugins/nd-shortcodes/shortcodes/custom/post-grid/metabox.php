<?php


add_action( 'add_meta_boxes', 'nd_options_box_add' );
function nd_options_box_add() {
    add_meta_box( 'my-meta-box-id', 'ND Options Post', 'nd_options_meta_box_post', 'post', 'normal', 'high' );
}

function nd_options_meta_box_post()
{


    //iris color picker
    wp_enqueue_script('iris');

    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_options_values = get_post_custom( $post->ID );
    $nd_options_meta_box_post_color = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_color', true ); 

    ?>


    <p><strong>Color</strong></p>
    <p><input id="nd_options_colorpicker" type="text" name="nd_options_meta_box_post_color" id="nd_options_meta_box_post_color" value="<?php echo esc_html($nd_options_meta_box_post_color); ?>" /></p>
    
    <script type="text/javascript">
      //<![CDATA[
      
      jQuery(document).ready(function($){
          $('#nd_options_colorpicker').iris();
      });

      //]]>
    </script>


    <?php    
}

add_action( 'save_post', 'nd_options_meta_box_post_save' );
function nd_options_meta_box_post_save( $post_id )
{


    //sanitize and validate
    $nd_options_meta_box_post_color = sanitize_hex_color( $_POST['nd_options_meta_box_post_color'] );
    if ( isset( $nd_options_meta_box_post_color ) ) {
    update_post_meta( $post_id, 'nd_options_meta_box_post_color' , $nd_options_meta_box_post_color );
    }
         
}