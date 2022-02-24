<?php


add_action('customize_register','nd_options_customizer_form_submit');
function nd_options_customizer_form_submit( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_forms_submit_section' , array(
	  'title' => __( 'Submit Style','nd-shortcodes' ),
	  'priority'    => 3,
	  'panel' => 'nd_options_customizer_forms_panel',
	) );


	//background
	$wp_customize->add_setting( 'nd_options_customizer_forms_submit_bg', array(
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
	    'nd_options_customizer_forms_submit_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Submit Background','nd-shortcodes' ),
	      'description' => __('Select submit background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_submit_section',
	    )
	  )
	);



	//border
	$wp_customize->add_setting( 'nd_options_customizer_forms_submit_border_color', array(
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
	    'nd_options_customizer_forms_submit_border_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Border Color','nd-shortcodes' ),
	      'description' => __('Select form submit border color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_submit_section',
	    )
	  )
	);


	//text-color
	$wp_customize->add_setting( 'nd_options_customizer_forms_submit_text_color', array(
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
	    'nd_options_customizer_forms_submit_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Text Color','nd-shortcodes' ),
	      'description' => __('Select form submit text color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_submit_section',
	    )
	  )
	);


	//border width
	$wp_customize->add_setting( 'nd_options_customizer_forms_submit_border_width', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_submit_border_width', array(
	  'label' => __( 'Border Width','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_submit_section',
	  'choices' => array(
	  		'0px' => 'Border Width 0px',
	        '1px' => 'Border Width 1px',
	        '2px' => 'Border Width 2px',
	        '3px' => 'Border Width 3px',
	        '4px' => 'Border Width 4px',
	    ),
	) );




	//border radius
	$wp_customize->add_setting( 'nd_options_customizer_forms_submit_border_radius', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_submit_border_radius', array(
	  'label' => __( 'Border Radius','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_submit_section',
	  'choices' => array(
	  		'0px' => 'Border Radius 0px',
	        '1px' => 'Border Radius 1px',
	        '2px' => 'Border Radius 2px',
	        '3px' => 'Border Radius 3px',
	        '4px' => 'Border Radius 4px',
	        '5px' => 'Border Radius 5px',
	        '10px' => 'Border Radius 10px',
	        '15px' => 'Border Radius 15px',
	        '20px' => 'Border Radius 20px',
	        '25px' => 'Border Radius 25px',
	        '30px' => 'Border Radius 30px',
	    ),
	) );



	//padding
	$wp_customize->add_setting( 'nd_options_customizer_forms_submit_padding', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_submit_padding', array(
	  'label' => __( 'Submit Padding','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_submit_section',
	  'choices' => array(
	  		'5px' => 'Padding 5px',
	        '10px' => 'Padding 10px',
	        '10px 20px' => 'Padding 10px (top/bottom) 20px (left/right)',
	        '15px' => 'Padding 15px',
	        '15px 20px' => 'Padding 15px (top/bottom) 20px (left/right)',
	        '20px' => 'Padding 20px',
	    ),
	) );





}



//css inline
function nd_options_add_forms_submit_style_rules() { 
?>

	<?php

	//values
	$nd_options_customizer_forms_submit_bg = get_option( 'nd_options_customizer_forms_submit_bg', '#444' );
	$nd_options_customizer_forms_submit_border_color = get_option( 'nd_options_customizer_forms_submit_border_color', '#fff' );
	$nd_options_customizer_forms_submit_text_color = get_option( 'nd_options_customizer_forms_submit_text_color', '#ffffff' );
	$nd_options_customizer_forms_submit_border_width = get_option( 'nd_options_customizer_forms_submit_border_width', '0px' );
	$nd_options_customizer_forms_submit_border_radius = get_option( 'nd_options_customizer_forms_submit_border_radius', '3px' );
	$nd_options_customizer_forms_submit_padding = get_option( 'nd_options_customizer_forms_submit_padding', '10px 20px' );


	//get font family H
	$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
	$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
	$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);

	?>

    <style type="text/css">

    	/*START FORMS STYLES*/
    	.nd_options_customizer_forms input[type="submit"],
    	.nd_options_customizer_forms button[type="submit"],
    	.give-btn.give-btn-modal
    	{ 
    		background-color: <?php echo $nd_options_customizer_forms_submit_bg; ?>; 
    		border-width: <?php echo $nd_options_customizer_forms_submit_border_width; ?>;
    		border-color: <?php echo $nd_options_customizer_forms_submit_border_color; ?>;
    		border-radius: <?php echo $nd_options_customizer_forms_submit_border_radius; ?>;
    		border-style: solid;
    		padding: <?php echo $nd_options_customizer_forms_submit_padding; ?>;
    		-webkit-appearance: none;
    		color: <?php echo $nd_options_customizer_forms_submit_text_color; ?>;
    		cursor: pointer;
    		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;

    	}

       
    </style>
    

<?php
}
add_action('wp_head', 'nd_options_add_forms_submit_style_rules');
