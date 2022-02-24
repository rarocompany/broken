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
    #nd_options_tags_list { margin-top: 30px;  }
    #nd_options_tags_list a { padding: 8px; border: 1px solid #f1f1f1; font-size: 12px; line-height: 12px; display: inline-block; margin: 5px 10px; border-radius: 0px;  }

    #nd_options_link_pages{ letter-spacing: 10px; }

    /*font and color*/
    #nd_options_tags_list { color: <?php echo $nd_options_customizer_font_color_h;  ?>;  }
    #nd_options_tags_list { font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif;  }
    
    #nd_options_link_pages a{ font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif; }
    
</style>
<!--END css for post-->


<?php include "sidebar/layout-9.php"; ?>


<!--start nd_options_container-->
<div class="nd_options_container nd_options_clearfix">

    <?php if(have_posts()) :
        while(have_posts()) : the_post(); ?>

            <!--START all content-->
            <div class="">

                <!--post-->
                <div style="float:left; width:100%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!--start content-->
                    <?php the_content(); ?>
                    <!--end content-->
                </div>
                <!--post-->



                <div class="nd_options_section nd_options_padding_0_15 nd_options_box_sizing_border_box">

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

        <?php endwhile; ?>
    <?php endif; ?>


</div>
<!--end container-->
<div class="nd_options_section nd_options_height_50"></div>