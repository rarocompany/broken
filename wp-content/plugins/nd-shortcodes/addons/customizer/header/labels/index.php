<?php


add_action('customize_register','nd_options_customizer_labels');
function nd_options_customizer_labels( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_labels_section' , array(
	  'title' => __( 'Labels', 'nd-shortcodes'),
	  'priority'    => 60,
	  'panel' => 'nd_options_customizer_header_panel',
	) );



	//color HOT
	$wp_customize->add_setting( 'nd_options_customizer_labels_color_hot', array(
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
	    'nd_options_customizer_labels_color_hot', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color HOT','nd-shortcodes' ),
	      'description' => __('Select background color for your label, add the class <strong>nd_options_hot_label</strong> in your menu item in css field','nd-shortcodes'),
	      'section' => 'nd_options_customizer_labels_section',
	    )
	  )
	);



	//color NEW
	$wp_customize->add_setting( 'nd_options_customizer_labels_color_new', array(
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
	    'nd_options_customizer_labels_color_new', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color NEW','nd-shortcodes' ),
	      'description' => __('Select background color for your label, add the class <strong>nd_options_new_label</strong> in your menu item in css field','nd-shortcodes'),
	      'section' => 'nd_options_customizer_labels_section',
	    )
	  )
	);



	//color BEST
	$wp_customize->add_setting( 'nd_options_customizer_labels_color_best', array(
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
	    'nd_options_customizer_labels_color_best', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color BEST','nd-shortcodes' ),
	      'description' => __('Select background color for your label, add the class <strong>nd_options_best_label</strong> in your menu item in css field','nd-shortcodes'),
	      'section' => 'nd_options_customizer_labels_section',
	    )
	  )
	);



}





//put style.css on head
function nd_options_customizer_labels_style(){


	//get colors
	$nd_options_customizer_labels_color_hot = get_option( 'nd_options_customizer_labels_color_hot', '#444444' );
	$nd_options_customizer_labels_color_new = get_option( 'nd_options_customizer_labels_color_new', '#444444' );
	$nd_options_customizer_labels_color_best = get_option( 'nd_options_customizer_labels_color_best', '#444444' );

	?>

	<style type="text/css">

		.nd_options_cursor_default_a > a { cursor: default; }
		
		.nd_options_navigation_type .menu li.nd_options_hot_label > a:after,
		#nd_options_header_5 .menu li.nd_options_hot_label > a:after,
		#nd_options_header_6 .menu li.nd_options_hot_label > a:after { content: "<?php esc_html_e('HOT','nd-shortcodes') ?>"; float: right; background-color: <?php echo $nd_options_customizer_labels_color_hot; ?>; border-radius: 3px; color: #fff; font-size: 10px; line-height: 10px; padding: 3px 5px; }
		
		.nd_options_navigation_type .menu li.nd_options_best_label > a:after,
		#nd_options_header_5 .menu li.nd_options_best_label > a:after,
		#nd_options_header_6 .menu li.nd_options_best_label > a:after { content: "<?php esc_html_e('BEST','nd-shortcodes') ?>"; float: right; background-color: <?php echo $nd_options_customizer_labels_color_best; ?>; border-radius: 3px; color: #fff; font-size: 10px; line-height: 10px; padding: 3px 5px; }
		
		.nd_options_navigation_type .menu li.nd_options_new_label > a:after,
		#nd_options_header_5 .menu li.nd_options_new_label > a:after,
		#nd_options_header_6 .menu li.nd_options_new_label > a:after { content: "<?php esc_html_e('NEW','nd-shortcodes') ?>"; float: right; background-color: <?php echo $nd_options_customizer_labels_color_new; ?>; border-radius: 3px; color: #fff; font-size: 10px; line-height: 10px; padding: 3px 5px; }
		
		.nd_options_customizer_labels_color_new { background-color: <?php echo $nd_options_customizer_labels_color_new; ?>; }

		#nd_options_header_6 .menu li.nd_options_hot_label > a:after,
		#nd_options_header_6 .menu li.nd_options_best_label > a:after,
		#nd_options_header_6 .menu li.nd_options_new_label > a:after { padding: 5px 5px 3px 5px; border-radius: 0px; letter-spacing: 1px; }

		.nd_elements_navigation_sidebar_content .menu li.nd_options_new_label > a:after,
		.nd_elements_navigation_sidebar_content .menu li.nd_options_hot_label > a:after,
		.nd_elements_navigation_sidebar_content .menu li.nd_options_best_label > a:after { display: none; }
		
	</style>

	<?php
}
add_action('wp_head','nd_options_customizer_labels_style');
