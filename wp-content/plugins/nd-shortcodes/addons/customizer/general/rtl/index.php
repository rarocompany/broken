<?php


add_action('customize_register','nd_options_customizer_rtl');
function nd_options_customizer_rtl( $wp_customize ) {
  


	//ADD section
	$wp_customize->add_section( 'nd_options_customizer_rtl_section' , array(
	  'title' => __( 'Rtl','nd-shortcodes' ),
	  'priority'    => 50,
	  'panel' => 'nd_options_customizer_general_panel',
	) );


	//Enable rtl
	$wp_customize->add_setting( 'nd_options_customizer_rtl_enable', array(
	  'type' => 'option', // or 'option'
	  'capability' => 'edit_theme_options',
	  'theme_supports' => '', // Rarely needed.
	  'default' => '',
	  'transport' => 'refresh', // or postMessage
	  'sanitize_callback' => '',
	  'sanitize_js_callback' => '', // Basically to_json.
	) );
	$wp_customize->add_control( 'nd_options_customizer_rtl_enable', array(
	  'label' => __( 'Enable RTL','nd-shortcodes' ),
	  'type' => 'select',
	  'description' => __('Select yes to enable rtl mode','nd-shortcodes'),
	  'section' => 'nd_options_customizer_rtl_section',
	  'choices' => array(
	        'not' => 'not',
	        'yes' => 'yes',
	    ),
	) );


}



//add rtl.css
$nd_options_customizer_rtl_enable = get_option( 'nd_options_customizer_rtl_enable' );
if ( $nd_options_customizer_rtl_enable == '' ) { $nd_options_customizer_rtl_enable = 'not';  }

if ( $nd_options_customizer_rtl_enable == 'yes' ) { 
	
	//add css
	add_action( 'wp_enqueue_scripts', 'nd_options_load_rtl_style' ); 
	//add script
	add_action('wp_head', 'nd_options_rtl_script');

}





//function to add rtl style
function nd_options_load_rtl_style() {
  
  wp_enqueue_style( 'nd_options_rtl', esc_url( plugins_url( 'rtl.css', __FILE__ ) ), array(), false, false );
  
}


//visual composer parallax rows compatibility
function nd_options_rtl_script() { 

?>


	<script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      jQuery(function ($) {


      	$( ".vc_row" ).each(function( nd_options_index ) {

      		var nd_options_row_margin = ( ($( this ).outerWidth() - $( this ).outerWidth( true ))/2 );

			var nd_options_is_full_width = $( this ).data("vc-full-width");

			if (nd_options_is_full_width == true ) { 

				var nd_options_row_position = $( this ).position();

				var nd_options_new_right_style = (nd_options_row_position.left-nd_options_row_margin)/2;
				$( this ).css("right",nd_options_new_right_style);

			}

		});


      });

    });

    //]]>
  </script>   
    

<?php
}
