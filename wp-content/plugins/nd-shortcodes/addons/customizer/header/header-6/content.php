<?php 

//get all datas
$nd_options_customizer_header_6_content = get_option( 'nd_options_customizer_header_6_content' );
if ( $nd_options_customizer_header_6_content == '' ) { $nd_options_customizer_header_6_content = '';  }

?>


<!--START header 6-->
<div id="nd_options_header_6" class="nd_options_section">

    <!--start nd_options_container-->
    <div class="nd_options_container nd_options_clearfix nd_options_position_relative nd_options_z_index_999">

        <?php

            $args = array(
                'post_type' => 'page',
                'p' => $nd_options_customizer_header_6_content,
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
<!--END header 6-->

