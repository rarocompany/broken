<?php


add_action('customize_register','nd_cc_customizer_plugin_colors');
function nd_cc_customizer_plugin_colors( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_cc_customizer_plugin_colors' , array(
	  'title' => 'Plugin Colors',
	  'priority'    => 10,
	  'panel' => 'nd_cc_customizer_donations',
	) );


	//color dark 1
	$wp_customize->add_setting( 'nd_cc_customizer_color_dark_1', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_cc_customizer_color_dark_1', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Dark 1' ),
	      'description' => __('Select color for your dark elements','nd-projects'),
	      'section' => 'nd_cc_customizer_plugin_colors',
	    )
	  )
	);




	//color dark 2
	$wp_customize->add_setting( 'nd_cc_customizer_color_dark_2', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_cc_customizer_color_dark_2', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Dark 2' ),
	      'description' => __('Select color for your dark 2 elements','nd-projects'),
	      'section' => 'nd_cc_customizer_plugin_colors',
	    )
	  )
	);


	//color 1
	$wp_customize->add_setting( 'nd_cc_customizer_color_1', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_cc_customizer_color_1', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color 1' ),
	      'description' => __('Select color for your color 1 elements','nd-projects'),
	      'section' => 'nd_cc_customizer_plugin_colors',
	    )
	  )
	);



	//color 2
	$wp_customize->add_setting( 'nd_cc_customizer_color_2', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control(
	  new WP_Customize_Color_Control(
	    $wp_customize, // WP_Customize_Manager
	    'nd_cc_customizer_color_2', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color 2' ),
	      'description' => __('Select color for your color 2 elements','nd-projects'),
	      'section' => 'nd_cc_customizer_plugin_colors',
	    )
	  )
	);



}





//css inline
function nd_cc_customizer_add_colors() { 
?>

	<?php

	//get colors
	$nd_cc_customizer_color_dark_1 = get_option( 'nd_cc_customizer_color_dark_1', '#2d2d2d' );
	$nd_cc_customizer_color_dark_2 = get_option( 'nd_cc_customizer_color_dark_2', '#191818' );
	$nd_cc_customizer_color_1 = get_option( 'nd_cc_customizer_color_1', '#ebc858' );
	$nd_cc_customizer_color_2 = get_option( 'nd_cc_customizer_color_2', '#eb8958' );

	?>

    <style type="text/css">

    	/*color_dark_1*/
		.nd_cc_bg_greydark, #nd_cc_slider_range .ui-slider-range, #nd_cc_slider_range .ui-slider-handle,
		.ui-tooltip.nd_cc_tooltip_jquery_content { background-color: <?php echo $nd_cc_customizer_color_dark_1;  ?>; }
		#nd_cc_search_filter_options li p { border-bottom: 2px solid <?php echo $nd_cc_customizer_color_dark_1;  ?>;}
		#nd_cc_checkout_payment_tab_list li.ui-state-active { border-bottom: 1px solid <?php echo $nd_cc_customizer_color_dark_1;  ?>;}
		.nd_cc_border_1_solid_greydark_important { border: 1px solid <?php echo $nd_cc_customizer_color_dark_1;  ?> !important;}

		/*color_dark_2*/
		.nd_cc_bg_greydark_2 { background-color: <?php echo $nd_cc_customizer_color_dark_2;  ?>; }
		.nd_cc_bg_greydark_2_important { background-color: <?php echo $nd_cc_customizer_color_dark_2;  ?> !important; }
		
		/*color_1*/
		.nd_cc_bg_yellow, .nd_cc_btn_pagination_active { background-color: <?php echo $nd_cc_customizer_color_1;  ?>; }
		.nd_cc_color_yellow_important { color: <?php echo $nd_cc_customizer_color_1;  ?> !important ; }

		/*color_2*/
		.nd_cc_bg_red { background-color: <?php echo $nd_cc_customizer_color_2;  ?>; }
       
    </style>
    

<?php
}
add_action('wp_head', 'nd_cc_customizer_add_colors');


//for admin
function nd_cc_customizer_add_colors_admin() { 
?>

	<?php

	//get colors
	$nd_cc_customizer_color_dark_1 = get_option( 'nd_cc_customizer_color_dark_1', '#2d2d2d' );
	$nd_cc_customizer_color_dark_2 = get_option( 'nd_cc_customizer_color_dark_2', '#191818' );
	$nd_cc_customizer_color_1 = get_option( 'nd_cc_customizer_color_1', '#ebc858' );
	$nd_cc_customizer_color_2 = get_option( 'nd_cc_customizer_color_2', '#eb8958' );

	?>

   
<?php
}
add_action('admin_head', 'nd_cc_customizer_add_colors_admin');