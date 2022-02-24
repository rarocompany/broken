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

            </div>
            <!--END all content-->

        <?php endwhile; ?>
    <?php endif; ?>


</div>
<!--end container-->