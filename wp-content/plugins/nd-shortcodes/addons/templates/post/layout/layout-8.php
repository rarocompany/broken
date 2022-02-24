<?php

//recover font family and color
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );

//post color
$nd_options_id = get_the_ID(); 
$nd_options_meta_box_post_color = get_post_meta( $nd_options_id, 'nd_options_meta_box_post_color', true );
if ( $nd_options_meta_box_post_color == '' ) { $nd_options_meta_box_post_color = '#000'; }

?>

<!--START  for post-->
<style type="text/css">

    /*SINGLE POST tag link pages*/
    #nd_options_tags_list { margin-top: 50px;  }
    #nd_options_tags_list a { padding: 8px; border: 1px solid #f1f1f1; font-size: 12px; line-height: 12px; display: inline-block; margin: 5px 10px; border-radius: 0px;  }

    #nd_options_link_pages{ letter-spacing: 10px; }

    /*font and color*/
    #nd_options_tags_list { color: <?php echo $nd_options_customizer_font_color_h;  ?>;  }
    #nd_options_tags_list { font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;  }
    
    #nd_options_link_pages a{ font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif; }
    
</style>
<!--END css for post-->


<?php

include "sidebar/layout-8.php";


//metabox header img
$nd_options_meta_box_post_header_img = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_header_img', true );
$nd_options_meta_box_post_header_img_title = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_header_img_title', true );
$nd_options_meta_box_post_header_img_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_header_img_position', true );


//metabox sidebar
$nd_options_meta_box_post_sidebar_position = get_post_meta( get_the_ID(), 'nd_options_meta_box_post_sidebar_position', true );
if ( $nd_options_meta_box_post_sidebar_position == '' ) { $nd_options_meta_box_post_sidebar_position = 'nd_options_full_width'; }


if ( $nd_options_meta_box_post_header_img != '' ) { ?>  


    
    <?php if(have_posts()) :
        while(have_posts()) : the_post(); ?>

            <div class="nd_options_section nd_options_background_size_cover <?php echo $nd_options_meta_box_post_header_img_position ?>" style="background-image:url(<?php echo $nd_options_meta_box_post_header_img; ?>);">

                <div class="nd_options_section nd_options_bg_greydark_alpha_3">

                    <!--start nd_options_container-->
                    <div class="nd_options_container nd_options_clearfix">


                        <div class="nd_options_section nd_options_height_200"></div>

                        <div class="nd_options_section nd_options_padding_15 nd_options_box_sizing_border_box nd_options_text_align_center">

                            <h1 class="nd_options_color_white nd_options_font_size_120 nd_options_line_height_100 nd_options_font_size_40_all_iphone nd_options_line_height_40_all_iphone nd_options_third_font"><?php echo $nd_options_meta_box_post_header_img_title; ?></h1>
                            <div class="nd_options_section nd_options_height_50"></div>


                            <div id="nd_options_post_l8_header_info" class="nd_options_section">
                                <div class="nd_options_display_inline_block">

                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section nd_options_position_relative nd_options_padding_right_40 nd_options_box_sizing_border_box">
                                        <img alt="" class="nd_options_position_absolute nd_options_left_0 nd_options_border_radius_100_percentage" width="23" height="23" src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>">
                                        <div class="nd_options_section nd_options_padding_left_45 nd_options_box_sizing_border_box">
                                            <div class="nd_options_section nd_options_height_5"></div>
                                            <h3 class="nd_options_color_white nd_options_font_size_12 nd_options_letter_spacing_2 nd_options_text_transform_uppercase nd_options_second_font"><?php echo get_the_author(); ?></h3>
                                        </div>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>

                                </div>

                                <div class="nd_options_display_inline_block">

                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section nd_options_position_relative nd_options_padding_right_40 nd_options_box_sizing_border_box">
                                        <img alt="" class="nd_options_position_absolute nd_options_left_0" width="23" height="23" src="<?php echo esc_url(plugins_url('icons/icon-calendar-2-white.svg', __FILE__ )); ?>">
                                        <div class="nd_options_section nd_options_padding_left_45 nd_options_box_sizing_border_box">
                                            <div class="nd_options_section nd_options_height_5"></div>
                                            <h3 class="nd_options_color_white nd_options_font_size_12 nd_options_letter_spacing_2 nd_options_text_transform_uppercase nd_options_second_font"><?php echo the_time('d F Y'); ?></h3>
                                        </div>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>

                                </div>

                                <div class="nd_options_display_inline_block">

                                    <div class="nd_options_section nd_options_height_10"></div>
                                    <div class="nd_options_section nd_options_position_relative">
                                        <img alt="" class="nd_options_position_absolute nd_options_left_0" width="23" height="23" src="<?php echo esc_url(plugins_url('icons/icon-chat-white.svg', __FILE__ )); ?>">
                                        <div class="nd_options_section nd_options_padding_left_45 nd_options_box_sizing_border_box">
                                            <div class="nd_options_section nd_options_height_5"></div>
                                            <h3 class="nd_options_color_white nd_options_font_size_12 nd_options_letter_spacing_2 nd_options_text_transform_uppercase nd_options_second_font"><?php echo comments_number(); ?></h3>
                                        </div>
                                    </div>
                                    <div class="nd_options_section nd_options_height_10"></div>

                                </div>
                            </div>


                        </div>

                    </div>
                    <!--end container-->

                </div>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>


<?php } ?>


<!--post margin-->
<?php if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_post_margin', true ) != 1 ) { echo '<div class="nd_options_section nd_options_height_50"></div>'; } ?>


<!--start nd_options_container-->
<div class="nd_options_container nd_options_clearfix">

    <?php if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            
            
            <?php 
            
            if ( $nd_options_meta_box_post_sidebar_position == 'nd_options_full_width' ) {

                $nd_options_left_sidebar = '';
                $nd_options_right_sidebar = '';
                $nd_options_content_class = 'nd_options_section nd_options_box_sizing_border_box nd_options_padding_15';

            }elseif ( $nd_options_meta_box_post_sidebar_position == 'nd_options_left_sidebar') {

                $nd_options_left_sidebar = 'yes';
                $nd_options_right_sidebar = '';
                $nd_options_content_class = 'nd_options_float_left nd_options_box_sizing_border_box nd_options_width_66_percentage nd_options_width_100_percentage_responsive nd_options_padding_15';

            }else{

                $nd_options_left_sidebar = '';
                $nd_options_right_sidebar = 'yes';
                $nd_options_content_class = 'nd_options_float_left nd_options_box_sizing_border_box nd_options_width_66_percentage nd_options_width_100_percentage_responsive nd_options_padding_15';

            }

            ?>




            <?php

            //LEFT SIDEBAR
            if ($nd_options_left_sidebar == 'yes') { ?>


                <div class="nd_options_float_left nd_options_box_sizing_border_box nd_options_width_33_percentage nd_options_width_100_percentage_responsive nd_options_padding_15">
                    
                    <div class="nd_options_section nd_options_sidebar"><?php dynamic_sidebar('nicdark_sidebar'); ?></div>

                </div>


            <?php } ?>



            <!--START all content-->
            <div class="<?php echo $nd_options_content_class; ?>">

                <!--post-->
                <div style="float:left; width:100%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!--automatic title-->
                    <?php if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_post_title', true ) != 1 ) { echo '<h1 class=""><strong>'.get_the_title().'</strong></h1><div class="nd_options_section nd_options_height_20"></div>'; } ?>
                    <!--start content-->
                    <?php the_content(); ?>
                    <!--end content-->
                </div>
                <!--post-->


                <div class="nd_options_section">

                    <?php $args = array(
                        'before'           => '<!--link pagination--><div id="nd_options_link_pages" class="nd_options_section"><p class="nd_options_margin_top_20 nd_options_first_font nd_options_color_greydark">',
                        'after'            => '</p></div><!--end link pagination-->',
                        'link_before'      => '',
                        'link_after'       => '',
                        'next_or_number'   => 'number',
                        'nextpagelink'     => __('Next page', 'nd-shortcodes'),
                        'previouspagelink' => __('Previous page', 'nd-shortcodes'),
                        'pagelink'         => '%',
                        'echo'             => 1
                    ); ?>
                    <?php wp_link_pages( $args ); ?>

                    <?php if(has_tag()) { ?>  
                        <!--tag-->
                        <div id="nd_options_tags_list" class="nd_options_section">
                             <?php the_tags( 'Tags : ','',''); ?>
                        </div>
                        <!--END tag-->
                    <?php } ?>
                    
                    <?php comments_template(); ?>
                    
                </div>

            </div>
            <!--END all content-->



            <?php

            //RIGHT SIDEBAR
            if ($nd_options_right_sidebar == 'yes') { ?>


                <div class="nd_options_float_left nd_options_box_sizing_border_box nd_options_width_33_percentage nd_options_width_100_percentage_responsive nd_options_padding_15">
                    
                    <div class="nd_options_section nd_options_sidebar"><?php dynamic_sidebar('nicdark_sidebar'); ?></div>

                </div>


            <?php } ?>



        <?php endwhile; ?>
    <?php endif; ?>


</div>
<!--end container-->


<!--post margin-->
<?php if ( get_post_meta( get_the_ID(), 'nd_options_meta_box_post_margin', true ) != 1 ) { echo '<div class="nd_options_section nd_options_height_50"></div>'; } ?>