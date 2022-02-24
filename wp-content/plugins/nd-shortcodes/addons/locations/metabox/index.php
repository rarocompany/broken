<?php


//START create metabox function
add_action( 'add_meta_boxes', 'nd_options_metabox_locations' );
function nd_options_metabox_locations() {
    add_meta_box( 'nd-options-meta-box-location-id', __('Location Settings','nd-shortcodes'), 'nd_options_metabox_location', 'locations', 'normal', 'high' );
}
//END create metabox function


//START adding all metabox
function nd_options_metabox_location()
{

    //values
    global $post;
    $nd_options_values = get_post_custom( $post->ID );

    $nd_options_meta_box_location_coordinates = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_coordinates', true );
    $nd_options_meta_box_location_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_title', true );
    $nd_options_meta_box_location_sub_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_sub_title', true );
    $nd_options_meta_box_location_description = get_post_meta( get_the_ID(), 'nd_options_meta_box_location_description', true ); 

    ?>

    <!--******************************COORDINATES******************************-->
    <p><strong><?php _e('Coordinates','nd-shortcodes'); ?></strong></p>
    <p><input class="regular-text" type="text" name="nd_options_meta_box_location_coordinates" id="nd_options_meta_box_location_coordinates" value="<?php echo $nd_options_meta_box_location_coordinates; ?>" /></p>
    <p class="description"><?php _e('Insert the coordinates ( Eg. -37.854861,145.126308 ) - <a target="_blank" href="https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DDesktop&hl=en">View Documentation</a> ','nd-shortcodes'); ?></p>

   	<!--******************************TITLE******************************-->
    <p><strong><?php _e('Title','nd-shortcodes'); ?></strong></p>
    <p><input class="regular-text" type="text" name="nd_options_meta_box_location_title" id="nd_options_meta_box_location_title" value="<?php echo $nd_options_meta_box_location_title; ?>" /></p>
    <p class="description"><?php _e('Insert the title','nd-shortcodes'); ?></p>

    <!--******************************SUB TITLE******************************-->
    <p><strong><?php _e('Sub Title','nd-shortcodes'); ?></strong></p>
    <p><input class="regular-text" type="text" name="nd_options_meta_box_location_sub_title" id="nd_options_meta_box_location_sub_title" value="<?php echo $nd_options_meta_box_location_sub_title; ?>" /></p>
    <p class="description"><?php _e('Insert the sub title','nd-shortcodes'); ?></p>

    <!--******************************DESCRIPTION******************************-->
    <p><strong><?php _e('Description','nd-shortcodes'); ?></strong></p>
    <p><input class="regular-text" type="text" name="nd_options_meta_box_location_description" id="nd_options_meta_box_location_description" value="<?php echo $nd_options_meta_box_location_description; ?>" /></p>
    <p class="description"><?php _e('Insert the description','nd-shortcodes'); ?></p>



    <?php    
}
//END adding all metabox



//START create save metabox
add_action( 'save_post', 'nd_options_meta_box_location_save' );
function nd_options_meta_box_location_save( $post_id )
{
  
    $nd_options_meta_box_location_coordinates = sanitize_meta('nd_options_meta_box_location_coordinates',$_POST['nd_options_meta_box_location_coordinates'],'post');
    if ( isset( $nd_options_meta_box_location_coordinates ) ) { update_post_meta( $post_id, 'nd_options_meta_box_location_coordinates' , $nd_options_meta_box_location_coordinates ); }

    $nd_options_meta_box_location_title = sanitize_meta('nd_options_meta_box_location_title',$_POST['nd_options_meta_box_location_title'],'post');
    if ( isset( $nd_options_meta_box_location_title ) ) { update_post_meta( $post_id, 'nd_options_meta_box_location_title' , $nd_options_meta_box_location_title ); }

    $nd_options_meta_box_location_sub_title = sanitize_meta('nd_options_meta_box_location_sub_title',$_POST['nd_options_meta_box_location_sub_title'],'post');
    if ( isset( $nd_options_meta_box_location_sub_title ) ) { update_post_meta( $post_id, 'nd_options_meta_box_location_sub_title' , $nd_options_meta_box_location_sub_title ); }

    $nd_options_meta_box_location_description = sanitize_meta('nd_options_meta_box_location_description',$_POST['nd_options_meta_box_location_description'],'post');
    if ( isset( $nd_options_meta_box_location_description ) ) { update_post_meta( $post_id, 'nd_options_meta_box_location_description' , $nd_options_meta_box_location_description ); }

}
//END create save metabox





