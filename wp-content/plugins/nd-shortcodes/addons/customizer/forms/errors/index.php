<?php


add_action('customize_register','nd_options_customizer_form_errors');
function nd_options_customizer_form_errors( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_forms_errors_section' , array(
	  'title' => __('Errors Style','nd-shortcodes'),
	  'priority'    => 4,
	  'panel' => 'nd_options_customizer_forms_panel',
	) );


	//background
	$wp_customize->add_setting( 'nd_options_customizer_forms_errors_bg', array(
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
	    'nd_options_customizer_forms_errors_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Errors Background','nd-shortcodes'),
	      'description' => __('Select errors background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_errors_section',
	    )
	  )
	);


	//background
	$wp_customize->add_setting( 'nd_options_customizer_forms_ok_bg', array(
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
	    'nd_options_customizer_forms_ok_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'OK Alert Background','nd-shortcodes' ),
	      'description' => __('Select ok alert background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_errors_section',
	    )
	  )
	);



	//border
	$wp_customize->add_setting( 'nd_options_customizer_forms_errors_border_color', array(
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
	    'nd_options_customizer_forms_errors_border_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Border Color','nd-shortcodes' ),
	      'description' => __('Select border color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_errors_section',
	    )
	  )
	);


	//text-color
	$wp_customize->add_setting( 'nd_options_customizer_forms_errors_text_color', array(
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
	    'nd_options_customizer_forms_errors_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Text Color','nd-shortcodes' ),
	      'description' => __('Select form text color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_errors_section',
	    )
	  )
	);


	//border width
	$wp_customize->add_setting( 'nd_options_customizer_forms_errors_border_width', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_errors_border_width', array(
	  'label' => __( 'Border Width','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_errors_section',
	  'choices' => array(
	  		'0px' => 'Border Width 0px',
	        '1px' => 'Border Width 1px',
	        '2px' => 'Border Width 2px',
	        '3px' => 'Border Width 3px',
	        '4px' => 'Border Width 4px',
	    ),
	) );




	//border radius
	$wp_customize->add_setting( 'nd_options_customizer_forms_errors_border_radius', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_errors_border_radius', array(
	  'label' => __( 'Border Radius','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_errors_section',
	  'choices' => array(
	  		'0px' => 'Border Radius 0px',
	        '1px' => 'Border Radius 1px',
	        '2px' => 'Border Radius 2px',
	        '3px' => 'Border Radius 3px',
	        '4px' => 'Border Radius 4px',
	    ),
	) );



	//padding
	$wp_customize->add_setting( 'nd_options_customizer_forms_errors_padding', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_errors_padding', array(
	  'label' => __( 'Errors Padding','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_errors_section',
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
function nd_options_add_forms_errors_style_rules() { 
?>

	<?php

	//values
	$nd_options_customizer_forms_errors_bg = get_option( 'nd_options_customizer_forms_errors_bg', '#444' );
	$nd_options_customizer_forms_ok_bg = get_option( 'nd_options_customizer_forms_ok_bg', '#444' );
	$nd_options_customizer_forms_errors_border_color = get_option( 'nd_options_customizer_forms_errors_border_color', '#fff' );
	$nd_options_customizer_forms_errors_text_color = get_option( 'nd_options_customizer_forms_errors_text_color', '#ffffff' );
	$nd_options_customizer_forms_errors_border_width = get_option( 'nd_options_customizer_forms_errors_border_width', '0px' );
	$nd_options_customizer_forms_errors_border_radius = get_option( 'nd_options_customizer_forms_errors_border_radius', '3px' );
	$nd_options_customizer_forms_errors_padding = get_option( 'nd_options_customizer_forms_errors_padding', '10px 20px' );

	?>

    <style type="text/css">

    	/*START FORMS STYLES*/
    	.nd_options_customizer_forms span.wpcf7-not-valid-tip,
    	.nd_options_customizer_forms .wpcf7-response-output.wpcf7-validation-errors,
    	.wpcf7-response-output
    	{ 
    		background-color: <?php echo $nd_options_customizer_forms_errors_bg; ?>; 
    		border-width: <?php echo $nd_options_customizer_forms_errors_border_width; ?> !important;
    		border-color: <?php echo $nd_options_customizer_forms_errors_border_color; ?> !important;
    		border-radius: <?php echo $nd_options_customizer_forms_errors_border_radius; ?>;
    		border-style: solid;
    		padding: <?php echo $nd_options_customizer_forms_errors_padding; ?> !important;
    		color: <?php echo $nd_options_customizer_forms_errors_text_color; ?>;
    		margin: 10px 0px 10px 0px !important;
    		font-size: 13px;
    		line-height: 20px;
    	}
    	.nd_options_customizer_forms .wpcf7-response-output.wpcf7-mail-sent-ok
    	{ 
    		background-color: <?php echo $nd_options_customizer_forms_ok_bg; ?>; 
    		border-width: <?php echo $nd_options_customizer_forms_errors_border_width; ?>;
    		border-color: <?php echo $nd_options_customizer_forms_errors_border_color; ?>;
    		border-radius: <?php echo $nd_options_customizer_forms_errors_border_radius; ?>;
    		border-style: solid;
    		padding: <?php echo $nd_options_customizer_forms_errors_padding; ?>;
    		color: <?php echo $nd_options_customizer_forms_errors_text_color; ?>;
    		margin: 0px;
    		margin-top: 10px;
    		font-size: 13px;
    		line-height: 20px;
    	}


    	/*new compatibility*/
    	.nd_options_customizer_forms .wpcf7 form.sent .wpcf7-response-output {
    		background-color: <?php echo $nd_options_customizer_forms_ok_bg; ?>; 
    		border-width: <?php echo $nd_options_customizer_forms_errors_border_width; ?>;
    		border-color: <?php echo $nd_options_customizer_forms_errors_border_color; ?>;
    		border-radius: <?php echo $nd_options_customizer_forms_errors_border_radius; ?>;
    		border-style: solid;
    		padding: <?php echo $nd_options_customizer_forms_errors_padding; ?>;
    		color: <?php echo $nd_options_customizer_forms_errors_text_color; ?>;
    		margin: 0px;
    		margin-top: 10px;
    		font-size: 13px;
    		line-height: 20px;
    	}



       
    </style>
    

<?php
}
add_action('wp_head', 'nd_options_add_forms_errors_style_rules');
