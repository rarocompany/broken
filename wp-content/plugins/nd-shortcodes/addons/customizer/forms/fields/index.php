<?php


add_action('customize_register','nd_options_customizer_form_fields');
function nd_options_customizer_form_fields( $wp_customize ) {
  

	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_forms_section' , array(
	  'title' => __('Fields Style','nd-shortcodes'),
	  'priority'    => 2,
	  'panel' => 'nd_options_customizer_forms_panel',
	) );


	//background
	$wp_customize->add_setting( 'nd_options_customizer_forms_bg', array(
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
	    'nd_options_customizer_forms_bg', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Form Fields Background','nd-shortcodes' ),
	      'description' => __('Select form fields background','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_section',
	    )
	  )
	);



	//background
	$wp_customize->add_setting( 'nd_options_customizer_forms_border_color', array(
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
	    'nd_options_customizer_forms_border_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Border Color','nd-shortcodes' ),
	      'description' => __('Select form fields border color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_section',
	    )
	  )
	);


	//text-color
	$wp_customize->add_setting( 'nd_options_customizer_forms_text_color', array(
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
	    'nd_options_customizer_forms_text_color', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __( 'Text Color','nd-shortcodes' ),
	      'description' => __('Select form fields text color','nd-shortcodes'),
	      'section' => 'nd_options_customizer_forms_section',
	    )
	  )
	);


	//border width
	$wp_customize->add_setting( 'nd_options_customizer_forms_border_width', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_border_width', array(
	  'label' => __( 'Border Width','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_section',
	  'choices' => array(
	  		'0px' => 'Border Width 0px',
	        '1px' => 'Border Width 1px',
	        '2px' => 'Border Width 2px',
	        '3px' => 'Border Width 3px',
	        '4px' => 'Border Width 4px',
	    ),
	) );




	//border radius
	$wp_customize->add_setting( 'nd_options_customizer_forms_border_radius', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_border_radius', array(
	  'label' => __( 'Border Radius','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_section',
	  'choices' => array(
	  		'0px' => 'Border Radius 0px',
	        '1px' => 'Border Radius 1px',
	        '2px' => 'Border Radius 2px',
	        '3px' => 'Border Radius 3px',
	        '4px' => 'Border Radius 4px',
	        '30px' => 'Border Radius 30px',
	    ),
	) );


	//checkbox
	$wp_customize->add_setting( 'nd_options_customizer_forms_border_bottom', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_border_bottom', array(
	  'label' => __( 'Check for keep only border bottom','nd-shortcodes' ),
	  'type' => 'checkbox',
	  'section' => 'nd_options_customizer_forms_section',
	) );




	//padding
	$wp_customize->add_setting( 'nd_options_customizer_forms_padding', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_forms_padding', array(
	  'label' => __( 'Fields Padding','nd-shortcodes' ),
	  'type' => 'select',
	  'section' => 'nd_options_customizer_forms_section',
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
function nd_options_add_forms_style_rules() { 
?>

	<?php

	//values
	$nd_options_customizer_forms_bg = get_option( 'nd_options_customizer_forms_bg', '#fff' );
	$nd_options_customizer_forms_border_color = get_option( 'nd_options_customizer_forms_border_color', '#fff' );
	$nd_options_customizer_forms_text_color = get_option( 'nd_options_customizer_forms_text_color', '#a3a3a3' );
	$nd_options_customizer_forms_border_width = get_option( 'nd_options_customizer_forms_border_width', '1px' );
	$nd_options_customizer_forms_border_radius = get_option( 'nd_options_customizer_forms_border_radius', '0px' );
	$nd_options_customizer_forms_border_bottom = get_option( 'nd_options_customizer_forms_border_bottom', 0);
	$nd_options_customizer_forms_padding = get_option( 'nd_options_customizer_forms_padding', '10px 20px' );

	?>

    <style type="text/css">

    	/*START FORMS STYLES*/
    	.nd_options_customizer_forms input[type="text"],
    	.nd_options_customizer_forms input[type="email"],
    	.nd_options_customizer_forms input[type="url"],
    	.nd_options_customizer_forms input[type="tel"],
    	.nd_options_customizer_forms input[type="number"],
    	.nd_options_customizer_forms input[type="date"],
    	.nd_options_customizer_forms input[type="file"],
    	.nd_options_customizer_forms input[type="password"],
    	.nd_options_customizer_forms select,
    	.nd_options_customizer_forms textarea,
    	.StripeElement

    	{ 
    		background-color: <?php echo $nd_options_customizer_forms_bg; ?>; 
    		border-width: <?php echo $nd_options_customizer_forms_border_width; ?>;
    		border-color: <?php echo $nd_options_customizer_forms_border_color; ?>;
    		border-radius: <?php echo $nd_options_customizer_forms_border_radius; ?>;
    		border-style: solid;
    		padding: <?php echo $nd_options_customizer_forms_padding; ?>;
    		-webkit-appearance: none;
    		color: <?php echo $nd_options_customizer_forms_text_color; ?> !important;

    		<?php 

    		if ( $nd_options_customizer_forms_border_bottom == 1 ) { ?> 
    			
    			border-top-width:0px; 
    			border-left-width:0px; 
    			border-right-width:0px; 

    		<?php } ?>
    	}


    	.nd_options_customizer_forms input[type="text"]::-webkit-input-placeholder,
    	.nd_options_customizer_forms input[type="email"]::-webkit-input-placeholder,
    	.nd_options_customizer_forms input[type="url"]::-webkit-input-placeholder, 
    	.nd_options_customizer_forms input[type="tel"]::-webkit-input-placeholder ,
    	.nd_options_customizer_forms input[type="password"]::-webkit-input-placeholder ,
    	.nd_options_customizer_forms input[type="number"]::-webkit-input-placeholder,
    	.nd_options_customizer_forms textarea::-webkit-input-placeholder  {
    		color: <?php echo $nd_options_customizer_forms_text_color; ?> !important;	
    	}


    	.nd_options_customizer_forms select {
    		cursor: pointer;
    	}

    	.nd_options_customizer_forms select option {
    		padding: <?php echo $nd_options_customizer_forms_padding; ?>;	
    	}

       
    </style>
    

<?php
}
add_action('wp_head', 'nd_options_add_forms_style_rules');
