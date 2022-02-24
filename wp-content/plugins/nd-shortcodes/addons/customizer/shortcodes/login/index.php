<?php

//shortcode nd_social
function nd_options_login( $nd_options_atts ) {
    
    $nd_options_login = shortcode_atts( 
    	array(
            'class' => '',
            'float' => '',
            'bg_color' => '',
            'id' => '',
            'href' => '',
    	), 
    $nd_options_atts );


    if (is_user_logged_in() == 1){

        $nd_options_current_user = wp_get_current_user();
        $nd_options_account_avatar_url_args = array( 'size'   => 60 );
        $nd_options_account_avatar_url = get_avatar_url($nd_options_current_user->user_email, $nd_options_account_avatar_url_args);
        $nd_options_log_link = wp_logout_url( get_permalink() );
        $nd_options_log_name = __('LOG OUT','nd-shortcodes');
        $nd_options_link_page = $nd_options_login['href'];

    }else{

        $nd_options_account_avatar_url = esc_url(plugins_url('img/avatar.jpg', __FILE__ ));
        $nd_options_log_link = $nd_options_login['href'];
        $nd_options_link_page = $nd_options_login['href'];
        $nd_options_log_name = __('LOG IN','nd-shortcodes');

    }


    //define
    if ( $nd_options_login['float'] == '' ) { $nd_options_login_float = 'left'; }


    //define
    $nd_options_str = '';
    

   	$nd_options_str .= '

        <div id="'.$nd_options_login['id'].'" style="background-color:'.$nd_options_login['bg_color'].';" class=" '.$nd_options_login['class'].' nd_options_display_table nd_options_float_'.$nd_options_login['float'].' nd_options_padding_10_20 nd_options_margin_right_15">
            <a href="'.$nd_options_link_page.'"><img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle nd_options_border_radius_100_percentage" width="30" src="'.$nd_options_account_avatar_url.'"></a>
            <div class="nd_options_display_table_cell nd_options_vertical_align_middle">
                <p class="nd_options_font_size_12 nd_options_text_align_left"><a class="nd_options_color_white nd_options_first_font" href="'.$nd_options_link_page.'">'.__('My Account','nd-shortcodes').'</a></p>
                <div class="nd_options_section nd_options_height_5"></div>
                <h6 class="nd_options_font_size_10 nd_options_text_align_left nd_options_color_white nd_options_second_font"><a class="nd_options_color_white" href="'.$nd_options_log_link.'">'.$nd_options_log_name.'</a></h6>
            </div>
            
        </div>

    ';


    return $nd_options_str;
}
add_shortcode( 'nd_login', 'nd_options_login' );
