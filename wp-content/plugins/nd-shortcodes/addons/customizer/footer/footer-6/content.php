<?php 

//get all datas
$nd_options_customizer_footer_6_content_page = get_option( 'nd_options_customizer_footer_6_content_page' );
if ( $nd_options_customizer_footer_6_content_page == '' ) { $nd_options_customizer_footer_6_content_page = '';  }


?>


<!--START footer-->
<div id="nd_options_footer_6" class="nd_options_section">

    <!--start nd_options_container-->
    <div class="nd_options_container nd_options_clearfix">

        <?php

            $args = array(
                'post_type' => 'page',
                'p' => $nd_options_customizer_footer_6_content_page,
            );
            $the_query = new WP_Query( $args );


            while ( $the_query->have_posts() ) : $the_query->the_post();

                the_content();

            endwhile;

            wp_reset_postdata();

        ?>

    </div>
    <!--end container-->

</div>
<!--END footer-->

