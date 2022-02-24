<?php


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_posts' );
function nd_options_metabox_posts() {
    add_meta_box( 'nd-options-meta-box-post-id', __('ND Options Post','nd-shortcodes'), 'nd_options_metabox_post', 'post', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_post()
{


    //include required js
    wp_enqueue_script('iris');

    //values
    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_post_color = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_color', true );
    $nd_options_meta_box_post_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_title', true ); 
    $nd_options_meta_box_post_margin = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_margin', true ); 

    ?>




    <!--******************************COLOR******************************-->
    <p><strong><?php _e('Color','nd-shortcodes'); ?></strong></p>
    <p><input id="nd_options_colorpicker" type="text" name="nd_options_meta_box_post_color" value="<?php echo esc_html($nd_options_meta_box_post_color); ?>" /></p>
    <p class="description"><?php _e('This color will be used as the background of the button "read more" in the archive page.','nd-shortcodes'); ?></p>

    <script type="text/javascript">
      //<![CDATA[
      
      jQuery(document).ready(function($){
          $('#nd_options_colorpicker').iris();
      });

      //]]>
    </script>


    <!--***********TITLE***********-->
    <p><strong><?php _e('Title','nd-shortcodes'); ?></strong></p>
    <p>
      <select name="nd_options_meta_box_post_title" id="nd_options_meta_box_post_title">
        
        <option <?php if( $nd_options_meta_box_post_title == 1 ) { echo esc_html('selected="selected"'); } ?> value="1"><?php _e('Hide Title','nd-shortcodes'); ?></option>
        <option <?php if( $nd_options_meta_box_post_title == 0 ) { echo esc_html('selected="selected"'); } ?> value="0"><?php _e('Show Title','nd-shortcodes'); ?></option>
         
      </select>
    </p>
    <p class="description"><?php _e('Check if you want to hide the title page.','nd-shortcodes'); ?></p>


    <!--***********MARGIN TOP/BOTTOM***********-->
    <p><strong><?php _e('Margin Top / Bottom','nd-shortcodes'); ?></strong></p>
    <p>
      <select name="nd_options_meta_box_post_margin" id="nd_options_meta_box_post_margin">
        
        <option <?php if( $nd_options_meta_box_post_margin == 1 ) { echo esc_html('selected="selected"'); } ?> value="1"><?php _e('Remove Spaces','nd-shortcodes'); ?></option>
        <option <?php if( $nd_options_meta_box_post_margin == 0 ) { echo esc_html('selected="selected"'); } ?> value="0"><?php _e('Add Spaces','nd-shortcodes'); ?></option>
         
      </select>
    </p>
    <p class="description"><?php _e('Check if you want to remove the automatic page margin on top and bottom of the page.','nd-shortcodes'); ?></p>


    <?php    
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_post_save' );
function nd_options_meta_box_post_save( $post_id )
{

    //sanitize and validate
    $nd_options_meta_box_post_color = sanitize_hex_color( $_POST['nd_options_meta_box_post_color'] );
    if ( isset( $nd_options_meta_box_post_color ) ) {
    update_post_meta( $post_id, 'nd_options_meta_box_post_color' , $nd_options_meta_box_post_color );
    }

    //sanitize and validate
    $nd_options_meta_box_post_title = sanitize_option( 'nd_options_meta_box_post_title', $_POST['nd_options_meta_box_post_title'] );
    if ( isset( $nd_options_meta_box_post_title ) ) {
    update_post_meta( $post_id, 'nd_options_meta_box_post_title' , $nd_options_meta_box_post_title );
    }

    //sanitize and validate
    $nd_options_meta_box_post_margin = sanitize_option( 'nd_options_meta_box_post_margin', $_POST['nd_options_meta_box_post_margin'] );
    if ( isset( $nd_options_meta_box_post_margin ) ) {
    update_post_meta( $post_id, 'nd_options_meta_box_post_margin' , $nd_options_meta_box_post_margin );
    }
         
}
//END create save metabox





/*******************************POST SIDEBAR******************************/


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_posts_sidebar' );
function nd_options_metabox_posts_sidebar() {
    add_meta_box( 'nd-options-meta-box-post-sidebar-id', __('ND Options Sidebar','nd-shortcodes'), 'nd_options_metabox_post_sidebar', 'post', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_post_sidebar()
{

    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_post_sidebar_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_sidebar_position', true );  

    ?>

    <p><strong><?php _e('Sidebar Position','nd-shortcodes'); ?></strong></p>
    <p>
      <select name="nd_options_meta_box_post_sidebar_position" id="nd_options_meta_box_post_sidebar_position">
        
        <option <?php if( $nd_options_meta_box_post_sidebar_position == 'nd_options_full_width' ) { echo esc_html('selected="selected"'); } ?> value="nd_options_full_width"><?php _e('Page Full Width','nd-shortcodes'); ?></option>
        <option <?php if( $nd_options_meta_box_post_sidebar_position == 'nd_options_left_sidebar' ) { echo esc_html('selected="selected"'); } ?> value="nd_options_left_sidebar"><?php _e('Left Sidebar','nd-shortcodes'); ?></option>
        <option <?php if( $nd_options_meta_box_post_sidebar_position == 'nd_options_right_sidebar' ) { echo esc_html('selected="selected"'); } ?> value="nd_options_right_sidebar"><?php _e('Right Sidebar','nd-shortcodes'); ?></option>
         
      </select>
    </p>


    <?php   
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_post_sidebar_save' );
function nd_options_meta_box_post_sidebar_save( $post_id )
{

      //sanitize and validate
      $nd_options_meta_box_post_sidebar_position = sanitize_option( 'nd_options_meta_box_post_sidebar_position', $_POST['nd_options_meta_box_post_sidebar_position'] );
      if ( isset( $nd_options_meta_box_post_sidebar_position ) ) {
      update_post_meta( $post_id, 'nd_options_meta_box_post_sidebar_position' , $nd_options_meta_box_post_sidebar_position );
      }
         
}
//END create save metabox





/*******************************HEADER IMG******************************/

add_action( 'add_meta_boxes', 'nd_options_metabox_posts_header_img' );
function nd_options_metabox_posts_header_img() {
    add_meta_box( 'nd-options-meta-box-post-header-img-id', __('ND Options Header Image','nd-shortcodes'), 'nd_options_metabox_post_header_img', 'post', 'normal', 'high' );
}

function nd_options_metabox_post_header_img()
{


    // $post is already set, and contains an object: the WordPress post
    global $post;
    $nd_options_values = get_post_custom( $post->ID );
     
    $nd_options_meta_box_post_header_img = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_header_img', true );
    $nd_options_meta_box_post_header_img_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_header_img_title', true );
    $nd_options_meta_box_post_header_img_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_header_img_position', true );


    ?>


    <!--******************************IMAGE******************************-->
    <p><strong><?php _e('Header Image','nd-shortcodes'); ?></strong></p>
    <p><input class="regular-text" type="text" name="nd_options_meta_box_post_header_img" id="nd_options_meta_box_post_header_img" value="<?php echo esc_url($nd_options_meta_box_post_header_img); ?>" /></p>
    <p>
      <input class="button nd_options_meta_box_post_header_img_button" type="button" name="nd_options_meta_box_post_header_img_button" id="nd_options_meta_box_post_header_img_button" value="<?php _e('Upload','nd-shortcodes'); ?>" />
    </p>


    <!--******************************POSITION******************************-->
    <p><strong><?php _e('Image Position','nd-shortcodes'); ?></strong></p>
    <p>
      <select name="nd_options_meta_box_post_header_img_position" id="nd_options_meta_box_post_header_img_position">
        
        <option <?php if( $nd_options_meta_box_post_header_img_position == 'nd_options_background_position_center_top' ) { echo esc_html('selected="selected"'); } ?> value="nd_options_background_position_center_top">Position Top</option>
        <option <?php if( $nd_options_meta_box_post_header_img_position == 'nd_options_background_position_center_bottom' ) { echo esc_html('selected="selected"'); } ?> value="nd_options_background_position_center_bottom">Position Bottom</option>
        <option <?php if( $nd_options_meta_box_post_header_img_position == 'nd_options_background_position_center' ) { echo esc_html('selected="selected"'); } ?> value="nd_options_background_position_center">Position Center</option>
         
      </select>
    </p>


    <!--******************************TITLE******************************-->
    <p><strong><?php _e('Title','nd-shortcodes'); ?></strong></p>
    <p><input type="text" name="nd_options_meta_box_post_header_img_title" id="nd_options_meta_box_post_header_img_title" value="<?php echo esc_html($nd_options_meta_box_post_header_img_title); ?>" /></p>
    <p class="description"><?php _e('Insert the title/slogan over the image','nd-shortcodes'); ?></p>




    <script type="text/javascript">
      //<![CDATA[
      
    jQuery(document).ready(function() {

      jQuery( function ( $ ) {

        var file_frame = [],
        $button = $( '.nd_options_meta_box_post_header_img_button' );


        $('#nd_options_meta_box_post_header_img_button').click( function () {


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

            $('#nd_options_meta_box_post_header_img').val(attachment.url);

          } );

          // Finally, open the modal
          file_frame[ id ].open();


        } );

      });

    });

      //]]>
    </script>


    <?php    
}

add_action( 'save_post', 'nd_options_meta_box_post_header_img_save' );
function nd_options_meta_box_post_header_img_save( $post_id )
{

      //sanitize and validate
      $nd_options_meta_box_post_header_img = esc_url_raw( $_POST['nd_options_meta_box_post_header_img'] );
      if ( isset( $nd_options_meta_box_post_header_img ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_header_img' , $nd_options_meta_box_post_header_img );
      }

      //sanitize and validate
      $nd_options_meta_box_post_header_img_title = sanitize_meta('nd_options_meta_box_post_header_img_title',$_POST['nd_options_meta_box_post_header_img_title'],'post');
      if ( isset( $nd_options_meta_box_post_header_img_title ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_header_img_title' , $nd_options_meta_box_post_header_img_title );
      }

      //sanitize and validate
      $nd_options_meta_box_post_header_img_position = sanitize_option( 'nd_options_meta_box_post_header_img_position', $_POST['nd_options_meta_box_post_header_img_position'] );
      if ( isset( $nd_options_meta_box_post_header_img_position ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_header_img_position' , $nd_options_meta_box_post_header_img_position );
      }
}




/*******************************POST FORMAT QUOTE******************************/


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_posts_quote' );
function nd_options_metabox_posts_quote() {
    add_meta_box( 'nd-options-meta-box-post-quote-id', __('Post Format QUOTE','nd-shortcodes'), 'nd_options_metabox_post_quote', 'post', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_post_quote()
{

    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_post_quote = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_quote', true ); 
    $nd_options_meta_box_post_quote_author = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_quote_author', true ); 

    ?>

    <p><strong><?php _e('Quote Text','nd-shortcodes'); ?></strong></p>
    <p><input type="text" name="nd_options_meta_box_post_quote" id="nd_options_meta_box_post_quote" value="<?php echo esc_html($nd_options_meta_box_post_quote); ?>" /></p>
    <p class="description"><?php _e('Insert the text quote, you can see it in the preview of your post.','nd-shortcodes'); ?></p>

    <p><strong><?php _e('Quote Author','nd-shortcodes'); ?></strong></p>
    <p><input type="text" name="nd_options_meta_box_post_quote_author" id="nd_options_meta_box_post_quote_author" value="<?php echo esc_html($nd_options_meta_box_post_quote_author); ?>" /></p>
    <p class="description"><?php _e('Insert the quote author.','nd-shortcodes'); ?></p>

    <?php   
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_post_quote_save' );
function nd_options_meta_box_post_quote_save( $post_id )
{

      //sanitize and validate
      $nd_options_meta_box_post_quote = sanitize_meta('nd_options_meta_box_post_quote',$_POST['nd_options_meta_box_post_quote'],'post');
      if ( isset( $nd_options_meta_box_post_quote ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_quote' , $nd_options_meta_box_post_quote );
      }

      //sanitize and validate
      $nd_options_meta_box_post_quote_author = sanitize_meta('nd_options_meta_box_post_quote_author',$_POST['nd_options_meta_box_post_quote_author'],'post');
      if ( isset( $nd_options_meta_box_post_quote_author ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_quote_author' , $nd_options_meta_box_post_quote_author );
      }
         
}
//END create save metabox




/*******************************POST FORMAT LINK******************************/


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_posts_link' );
function nd_options_metabox_posts_link() {
    add_meta_box( 'nd-options-meta-box-post-link-id', __('Post Format LINK','nd-shortcodes'), 'nd_options_metabox_post_link', 'post', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_post_link()
{

    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_post_link_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_link_title', true ); 
    $nd_options_meta_box_post_link_url = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_link_url', true ); 

    ?>

    <p><strong><?php _e('Title Link','nd-shortcodes'); ?></strong></p>
    <p><input type="text" name="nd_options_meta_box_post_link_title" id="nd_options_meta_box_post_link_title" value="<?php echo esc_html($nd_options_meta_box_post_link_title); ?>" /></p>
    <p class="description"><?php _e('Insert the title link, you can see it in the preview of your post.','nd-shortcodes'); ?></p>

    <p><strong><?php _e('Link Url','nd-shortcodes'); ?></strong></p>
    <p><input type="text" name="nd_options_meta_box_post_link_url" id="nd_options_meta_box_post_link_url" value="<?php echo esc_html($nd_options_meta_box_post_link_url); ?>" /></p>
    <p class="description"><?php _e('Insert the link url ( http://www.nicdark.com ).','nd-shortcodes'); ?></p>

    <?php   
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_post_link_save' );
function nd_options_meta_box_post_link_save( $post_id )
{

      //sanitize and validate
      $nd_options_meta_box_post_link_title = sanitize_meta('nd_options_meta_box_post_link_title',$_POST['nd_options_meta_box_post_link_title'],'post');
      if ( isset( $nd_options_meta_box_post_link_title ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_link_title' , $nd_options_meta_box_post_link_title );
      }

      //sanitize and validate
      $nd_options_meta_box_post_link_url = sanitize_meta('nd_options_meta_box_post_link_url',$_POST['nd_options_meta_box_post_link_url'],'post');
      if ( isset( $nd_options_meta_box_post_link_url ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_link_url' , $nd_options_meta_box_post_link_url );
      }

}
//END create save metabox





/*******************************POST FORMAT MEDIA******************************/


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_posts_media' );
function nd_options_metabox_posts_media() {
    add_meta_box( 'nd-options-meta-box-post-media-id', __('Post Format VIDEO, GALLERY, AUDIO','nd-shortcodes'), 'nd_options_metabox_post_media', 'post', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_post_media()
{

    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_post_media_code = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_media_code', true ); 

    ?>

    <p><strong><?php _e('Iframe / Shortcode','nd-shortcodes'); ?></strong></p>
    <p><textarea rows="4" cols="50" name="nd_options_meta_box_post_media_code" id="nd_options_meta_box_post_media_code" /><?php echo esc_html($nd_options_meta_box_post_media_code); ?></textarea></p>
    <p class="description"><?php _e('Insert the iframe/shortcode , you can see it in the preview of your post.','nd-shortcodes'); ?></p>

    <?php   
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_post_media_save' );
function nd_options_meta_box_post_media_save( $post_id )
{

      //sanitize and validate
      $nd_options_meta_box_post_media_code = $_POST['nd_options_meta_box_post_media_code'];
      if ( isset( $nd_options_meta_box_post_media_code ) ) {
        update_post_meta( $post_id, 'nd_options_meta_box_post_media_code' , $nd_options_meta_box_post_media_code );
      }
         
}
//END create save metabox





