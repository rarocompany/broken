<?php


add_action('customize_register','nd_options_customizer_give_plugin_colors');
function nd_options_customizer_give_plugin_colors( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_give_plugin_colors' , array(
	  'title' => 'Plugin Colors',
	  'priority'    => 10,
	  'panel' => 'nd_options_customizer_give',
	) );


	//color
	$wp_customize->add_setting( 'nd_options_customizer_give_color', array(
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
	    'nd_options_customizer_give_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color' ),
	      'description' => __('Select color for your elements','nd-shortcodes'),
	      'section' => 'nd_options_customizer_give_plugin_colors',
	    )
	  )
	);


	//color
	$wp_customize->add_setting( 'nd_options_customizer_give_color_dark', array(
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
	    'nd_options_customizer_give_color_dark', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Color Dark' ),
	      'description' => __('Select color for your greydark elements','nd-shortcodes'),
	      'section' => 'nd_options_customizer_give_plugin_colors',
	    )
	  )
	);


}



//css inline
function nd_options_customizer_give_add_colors() { 

	//get colors
	$nd_options_customizer_give_color = get_option( 'nd_options_customizer_give_color', '#22B6AF' );
	$nd_options_customizer_give_color_dark = get_option( 'nd_options_customizer_give_color_dark', '#282828' );

	?>

	<style>
	.give-currency-symbol,
	.give-donation-level-btn { background-color: <?php echo $nd_options_customizer_give_color; ?> !important; color:#fff !important; border-color:<?php echo $nd_options_customizer_give_color; ?> !important; }

	.give-donation-total-label { background-color: <?php echo $nd_options_customizer_give_color_dark; ?> !important; color:#fff !important; border-color:<?php echo $nd_options_customizer_give_color_dark; ?> !important; }

	.give-form-wrap legend { color: #2d2d2d !important; }


	</style>


	<?php

}
add_action('wp_head', 'nd_options_customizer_give_add_colors');