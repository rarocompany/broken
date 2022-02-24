<?php 

if( function_exists('nicdark_footers')){ do_action("nicdark_footer_nd"); }else{ ?>

<!--START section-->
<div class="nicdark_section nicdark_bg_greydark nicdark_text_align_center">
    
    <!--start container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_grid_12">

        	<div class="nicdark_section nicdark_height_10"></div>

        	<p class="nicdark_color_white">
        		<?php echo esc_html(get_bloginfo('name')); ?>
        	</p>
        	
            <div class="nicdark_section nicdark_height_10"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--END section-->

<?php } ?>  

</div>
<!--END theme-->

<?php wp_footer(); ?>

	
</body>  
</html>