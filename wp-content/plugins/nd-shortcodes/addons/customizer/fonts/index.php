<?php



add_action('customize_register','nd_options_customizer_fonts');
function nd_options_customizer_fonts( $wp_customize ) {
  

	//ADD panel
	$wp_customize->add_panel( 'nd_options_customizer_fonts_panel', array(
	  'title' => __('Fonts','nd-shortcodes'),
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '',
	  'description' => __('Fonts Settings','nd-shortcodes'), // Include html tags such as <p>.
	  'priority' => 160, // Mixed with top-level-section hierarchy.
	) );


	


	//ADD section 1
	$wp_customize->add_section( 'nd_options_customizer_font_family_section' , array(
	  'title' => __('Font Family','nd-shortcodes'),
	  'priority'    => 1,
	  'panel' => 'nd_options_customizer_fonts_panel',
	) );

	//Font Family H
	$wp_customize->add_setting( 'nd_options_customizer_font_family_h', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_font_family_h', array(
	  'label' => __('Headings Font','nd-shortcodes'),
	  'type' => 'select',
	  'description' => __('Select font family for your Headings, you can also use this font by using the class <strong>.nd_options_first_font</strong> in your code. <a target="_blank" href="https://www.google.com/fonts">Click here</a> to see the fonts.','nd-shortcodes'),
	  'section' => 'nd_options_customizer_font_family_section',
	  'choices' => array(
	        'Montserrat:400,700' => 'Montserrat',
	        'Playfair+Display:400,400italic,700,700italic,900,900italic' => 'Playfair Display',
	        'Lora:400,400italic,700,700italic' => 'Lora',
	        'Varela+Round' => 'Varela Round',
	        'Cinzel:400,700' => 'Cinzel',
	        'Halant:300,400,700' => 'Halant',
	        'Open+Sans:300,400,700' => 'Open Sans',
	        'Great+Vibes' => 'Great Vibes',
	        'Poppins:300,400,700' => 'Poppins',
	        'Gilda+Display' => 'Gilda Display',
	        'Roboto:300,400,700' => 'Roboto',
	        'Lato:300,400,700' => 'Lato',	
	        'Raleway:300,400,700' => 'Raleway', 
	        'Kristi' => 'Kristi', 
	        'Quicksand:300,400,500,700' => 'Quicksand' ,
	        'Oswald:300,400,500,700' => 'Oswald', 
	        'Fredericka+the+Great' => 'Fredericka the Great',
	        'Josefin+Sans:100,300,400,700' => 'Josefin Sans',
	        'Lobster' => 'Lobster',
	        'Old+Standard+TT:400,700' => 'Old Standard TT',
	        'Jost:300,400,500,700' => 'Jost'
	    ),
	) );
	//Font Family P
	$wp_customize->add_setting( 'nd_options_customizer_font_family_p', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_font_family_p', array(
	  'label' => __('Paragraph Font','nd-shortcodes'),
	  'type' => 'select',
	  'description' => __('Select font family for your Paragraph, you can also use this font by using the class <strong>.nd_options_second_font</strong> in your code. <a target="_blank" href="https://www.google.com/fonts">Click here</a> to see the fonts.','nd-shortcodes'),
	  'section' => 'nd_options_customizer_font_family_section',
	  'choices' => array(
	        'Montserrat:400,700' => 'Montserrat',
	        'Playfair+Display:400,400italic,700,700italic,900,900italic' => 'Playfair Display',
	        'Lora:400,400italic,700,700italic' => 'Lora',
	        'Varela+Round' => 'Varela Round',
	        'Cinzel:400,700' => 'Cinzel',
	        'Halant:300,400,700' => 'Halant',
	        'Open+Sans:300,400,700' => 'Open Sans',
	        'Great+Vibes' => 'Great Vibes',
	        'Poppins:300,400,700' => 'Poppins',
	        'Gilda+Display' => 'Gilda Display',
	        'Roboto:300,400,700' => 'Roboto',
	        'Lato:300,400,700' => 'Lato',
	        'Raleway:300,400,700' => 'Raleway',
	        'Kristi' => 'Kristi', 
	        'Quicksand:300,400,500,700' => 'Quicksand',
	        'Oswald:300,400,500,700' => 'Oswald', 
	        'Fredericka+the+Great' => 'Fredericka the Great',
	        'Josefin+Sans:100,300,400,700' => 'Josefin Sans',
	        'Lobster' => 'Lobster',
	        'Old+Standard+TT:400,700' => 'Old Standard TT',
	        'Jost:300,400,500,700' => 'Jost'
	    ),
	) );
	//Font Family Third
	$wp_customize->add_setting( 'nd_options_customizer_font_family_third', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_font_family_third', array(
	  'label' => __('Third Font','nd-shortcodes'),
	  'type' => 'select',
	  'description' => __('Select font family for your third font, you can also use this font by using the class <strong>.nd_options_third_font</strong> in your code. <a target="_blank" href="https://www.google.com/fonts">Click here</a> to see the fonts.','nd-shortcodes'),
	  'section' => 'nd_options_customizer_font_family_section',
	  'choices' => array(
	        'Montserrat:400,700' => 'Montserrat',
	        'Playfair+Display:400,400italic,700,700italic,900,900italic' => 'Playfair Display',
	        'Lora:400,400italic,700,700italic' => 'Lora',
	        'Varela+Round' => 'Varela Round',
	        'Cinzel:400,700' => 'Cinzel',
	        'Halant:300,400,700' => 'Halant',
	        'Open+Sans:300,400,700' => 'Open Sans',
	        'Great+Vibes' => 'Great Vibes',
	        'Poppins:300,400,700' => 'Poppins',
	        'Gilda+Display' => 'Gilda Display',
	        'Roboto:300,400,700' => 'Roboto',
	        'Lato:300,400,700' => 'Lato',
	        'Raleway:300,400,700' => 'Raleway',
	        'Kristi' => 'Kristi', 
	        'Quicksand:300,400,500,700' => 'Quicksand',
	        'Oswald:300,400,500,700' => 'Oswald', 
	        'Fredericka+the+Great' => 'Fredericka the Great',
	        'Josefin+Sans:100,300,400,700' => 'Josefin Sans',
	        'Lobster' => 'Lobster',
	        'Old+Standard+TT:400,700' => 'Old Standard TT',
	        'Jost:300,400,500,700' => 'Jost'
	    ),
	) );

	







	//ADD section2
	$wp_customize->add_section( 'nd_options_customizer_font_color_section' , array(
	  'title' => __('Font Color','nd-shortcodes'),
	  'priority'    => 1,
	  'panel' => 'nd_options_customizer_fonts_panel',
	) );	

	//color H
	$wp_customize->add_setting( 'nd_options_customizer_font_color_h', array(
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
	    'nd_options_customizer_font_color_h', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Headings Color','nd-shortcodes'),
	      'description' => __('Select font color for your Headings','nd-shortcodes'),
	      'section' => 'nd_options_customizer_font_color_section',
	    )
	  )
	);

	//color P
	$wp_customize->add_setting( 'nd_options_customizer_font_color_p', array(
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
	    'nd_options_customizer_font_color_p', // Setting id
	    array( // Args, including any custom ones.
	      'label' => __('Paragraph Color','nd-shortcodes'),
	      'description' => __('Select font color for your Paragraph','nd-shortcodes'),
	      'section' => 'nd_options_customizer_font_color_section',
	    )
	  )
	);


	




}






//Add google fonts style
function nd_options_add_google_fonts_css() {

	//check if the server is https
	if ( is_ssl() ) {
    	$nd_options_protocol = 'https';
  	}else {
  		$nd_options_protocol = 'http';	
  	}

  	//add style
	wp_enqueue_style( 'nd_options_font_family_h', $nd_options_protocol.'://fonts.googleapis.com/css?family='.get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' ).'', false ); 
	wp_enqueue_style( 'nd_options_font_family_p', $nd_options_protocol.'://fonts.googleapis.com/css?family='.get_option( 'nd_options_customizer_font_family_p', 'Montserrat:400,700' ).'', false ); 
	wp_enqueue_style( 'nd_options_font_family_third', $nd_options_protocol.'://fonts.googleapis.com/css?family='.get_option( 'nd_options_customizer_font_family_third', 'Montserrat:400,700' ).'', false ); 

}
add_action( 'wp_enqueue_scripts', 'nd_options_add_google_fonts_css' );



//css inline
function nd_options_add_google_fonts_rules() { 
?>

	<?php

	//get font family H
	$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
	$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
	$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);

	//get font family P
	$nd_options_customizer_font_family_p = get_option( 'nd_options_customizer_font_family_p', 'Montserrat:400,700' );
	$nd_options_font_family_p_array = explode(":", $nd_options_customizer_font_family_p);
	$nd_options_font_family_p = str_replace("+"," ",$nd_options_font_family_p_array[0]);

	//get font family third
	$nd_options_customizer_font_family_third = get_option( 'nd_options_customizer_font_family_third', 'Montserrat:400,700' );
	$nd_options_font_family_third_array = explode(":", $nd_options_customizer_font_family_third);
	$nd_options_font_family_third = str_replace("+"," ",$nd_options_font_family_third_array[0]);

	//get font color
	$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );
	$nd_options_customizer_font_color_p = get_option( 'nd_options_customizer_font_color_p', '#a3a3a3' );


	?>

    <style type="text/css">

    	/*START FONTS FAMILY*/
    	.nd_options_customizer_fonts .nd_options_first_font,
    	.nd_options_customizer_fonts h1,
    	.nd_options_customizer_fonts h2,
    	.nd_options_customizer_fonts h3,
    	.nd_options_customizer_fonts h4,
    	.nd_options_customizer_fonts h5,
    	.nd_options_customizer_fonts h6
    	{ font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif; }

    	.nd_options_customizer_fonts,
    	.nd_options_customizer_fonts .nd_options_second_font,
    	.nd_options_customizer_fonts p,
    	.nd_options_customizer_fonts a,
    	.nd_options_customizer_fonts select,
    	.nd_options_customizer_fonts textarea,
    	.nd_options_customizer_fonts label,
    	.nd_options_customizer_fonts input,
    	#start_nicdark_framework
    	{ font-family: '<?php echo $nd_options_font_family_p; ?>', sans-serif; }

    	.nd_options_customizer_fonts .nd_options_second_font_important
    	{ font-family: '<?php echo $nd_options_font_family_p; ?>', sans-serif !important; }

    	.nd_options_customizer_fonts .nd_options_third_font
    	{ font-family: '<?php echo $nd_options_font_family_third; ?>', sans-serif; }


    	/*START FONTS COLOR*/
    	.nd_options_customizer_fonts .nd_options_color_greydark,
    	.nd_options_customizer_fonts h1,
    	.nd_options_customizer_fonts h2,
    	.nd_options_customizer_fonts h3,
    	.nd_options_customizer_fonts h4,
    	.nd_options_customizer_fonts h5,
    	.nd_options_customizer_fonts h6
    	{ color: <?php echo $nd_options_customizer_font_color_h;  ?>; }
    	.nd_options_customizer_fonts .nd_options_color_greydark_important
    	{ color: <?php echo $nd_options_customizer_font_color_h;  ?> !important; }

    	/*PLACEHOLDER*/
    	.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important::-webkit-input-placeholder { color: <?php echo $nd_options_customizer_font_color_h;  ?> !important; }
		.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important::-moz-placeholder { color: <?php echo $nd_options_customizer_font_color_h;  ?> !important; }
		.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important:-ms-input-placeholder { color: <?php echo $nd_options_customizer_font_color_h;  ?> !important; }
		.nd_options_customizer_fonts .nd_options_placeholder_color_greydark_important:-moz-placeholder { color: <?php echo $nd_options_customizer_font_color_h;  ?> !important; }

    	.nd_options_customizer_fonts,
    	.nd_options_customizer_fonts .nd_options_color_grey,
    	.nd_options_customizer_fonts p,
    	.nd_options_customizer_fonts a,
    	.nd_options_customizer_fonts select,
    	.nd_options_customizer_fonts textarea,
    	.nd_options_customizer_fonts label,
    	.nd_options_customizer_fonts input
    	{ color: <?php echo $nd_options_customizer_font_color_p;  ?>; }

    	.nd_options_color_grey_important { color: <?php echo $nd_options_customizer_font_color_p;  ?> !important; }


    	/*compatibility with plugin Learning*/
    	#nd_learning_calendar_single_course .ui-datepicker-title {
    		font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;
    		color: <?php echo $nd_options_customizer_font_color_h;  ?>;	
    	}
    	#nd_learning_calendar_single_course .ui-datepicker-calendar th {
    		color: <?php echo $nd_options_customizer_font_color_h;  ?>;	
    	}
       
    </style>
    

<?php
}
add_action('wp_head', 'nd_options_add_google_fonts_rules');



//add body class for customizer font
add_filter('body_class', 'nd_options_customizer_add_body_class_font');
function nd_options_customizer_add_body_class_font($nd_options_body_class_font) {
        $nd_options_body_class_font[] = 'nd_options_customizer_fonts';
        return $nd_options_body_class_font;
}





