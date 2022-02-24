<?php get_header(); ?>

<?php  if( function_exists('nicdark_page')){ do_action("nicdark_page_nd"); }else{ ?>

<!--start section-->
<div class="nicdark_section nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_grid_12">

            <div class="nicdark_section nicdark_height_80"></div>

            <h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone nicdark_text_align_center nicdark_font_weight_bolder">
                <?php the_title(); ?>
            </h1>

            <div class="nicdark_section nicdark_height_80"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--end section-->

<div class="nicdark_section nicdark_height_50"></div>

<!--start nicdark_container-->
<div class="nicdark_container nicdark_clearfix">

    
    <!--start all posts previews-->
    <?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
        <div class="nicdark_grid_8"> 
    <?php }else{ ?>

        <div class="nicdark_grid_12">
    <?php } ?>    


    <?php if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            
            <!--#post-->
            <div class="nicdark_section nicdark_container_page_php" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!--start content-->
                <?php the_content(); ?>
                <!--end content-->

            </div>
            <!--#post-->


            <div class="nicdark_section">

                 
                <?php $args = array(
                    'before'           => '<!--link pagination--><div id="nicdark_link_pages" class="nicdark_section"><p class="nicdark_margin_0 nicdark_first_font nicdark_color_greydark nicdark_display_inline nicdark_padding_0">',
                    'after'            => '</p></div><!--end link pagination-->',
                    'link_before'      => '',
                    'link_after'       => '',
                    'next_or_number'   => 'number',
                    'nextpagelink'     => esc_html__('Next page', 'ngo'),
                    'previouspagelink' => esc_html__('Previous page', 'ngo'),
                    'pagelink'         => '%',
                    'echo'             => 1
                ); ?>
                <?php wp_link_pages( $args ); ?>

            
                <?php if(has_tag()) { ?>  
                    <!--tag-->
                    <div id="nicdark_tags_list" class="nicdark_section">
                         <?php the_tags( esc_html__('Tags : ', 'ngo'),'',''); ?>
                    </div>
                    <!--END tag-->
                <?php } ?>
                

                <?php 

                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                     
                ?>
                

            </div>


        
        <?php endwhile; ?>
    <?php endif; ?>



    </div>


    <!--sidebar-->
    <?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
        
        <div class="nicdark_grid_4">
            <?php if ( ! get_sidebar( 'nicdark_sidebar' ) ) : ?><?php endif ?>
            <div class="nicdark_section nicdark_height_50"></div>
        </div>
        
    <?php } ?>
    <!--end sidebar-->



</div>
<!--end container-->


<div class="nicdark_section nicdark_height_60"></div> 

<?php } ?>     

<?php get_footer(); ?>