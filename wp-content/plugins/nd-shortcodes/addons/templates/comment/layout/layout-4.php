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

    /*comment list*/
    .nd_options_comments_ul { margin:0px; padding: 0px; list-style: none; }
    .nd_options_comments_ul li { margin:10px 0px; float: left; width: 100%; }
    .nd_options_comments_ul li .children { margin:0px; padding: 10px 40px; list-style: none; }
    .nd_options_comments_ul li .reply a.comment-reply-link { color: #fff; margin-top: 10px; display: inline-block; line-height: 13px; border-radius: 0px; padding: 8px; font-size: 13px; text-transform: uppercase; }
    .nd_options_comments_ul li .reply a.comment-reply-link { font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif; }
    .nd_options_comments_ul li .comment-author .fn, 
    .nd_options_comments_ul li .comment-author .fn a { font-weight: bold; font-style: normal; }
    .nd_options_comments_ul li .comment-author img { border-radius: 100%; }
    .nd_options_comments_ul li .comment-author { display: table; }
    .nd_options_comments_ul li .comment-author .fn { display: table-cell; vertical-align: middle; padding: 0px 10px; }
    .nd_options_comments_ul li .comment-author .says { display: table-cell; vertical-align: middle; }
    .nd_options_comments_ul li .comment-author img { display: inline; vertical-align: middle; }

    /*comment form*/
    #nd_options_comments_form h3.comment-reply-title, 
    #nd_options_comments_form #respond.comment-respond h3.comment-reply-title { font-weight: bolder; margin-bottom: 10px; }
    #nd_options_comments_form #respond.comment-respond h3.comment-reply-title { margin-top: 20px; }
    #nd_options_comments_form label, 
    #nd_options_comments_form input[type='text'], 
    #nd_options_comments_form textarea { float: left; width: 100%; }
    #nd_options_comments_form input[type='submit'] { border: 0px; color: #fff; border-radius: 25px; margin-top: 10px; }
    #nd_options_comments_form p { margin: 10px 0px; float: left; width: 100%; }
    #nd_options_comments_form #commentform.comment-form label, 
    #nd_options_comments_form #commentform.comment-form input[type='text'], 
    #nd_options_comments_form #commentform.comment-form textarea { float: left; width: 100%; }
    #nd_options_comments_form #commentform.comment-form input[type='submit'] { border: 0px; color: #fff; border-radius: 30px; margin-top: 10px; text-transform: uppercase; }
    #nd_options_comments_form #commentform.comment-form p { margin: 10px 0px; float: left; width: 100%; }

    /*font and color*/
    .nd_options_comments_ul li .comment-author .fn, 
    .nd_options_comments_ul li .comment-author .fn a { color: <?php echo $nd_options_customizer_font_color_h;  ?>; }
    .nd_options_comments_ul li .comment-author .fn, 
    .nd_options_comments_ul li .comment-author .fn a { font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif; }
    .nd_options_comments_ul li .reply a.comment-reply-link { background-color: <?php echo $nd_options_meta_box_post_color; ?>; }
    #nd_options_comments_form input[type='submit'] { background-color: <?php echo $nd_options_meta_box_post_color; ?>; }
    #nd_options_comments_form #commentform.comment-form input[type='submit'] { background-color: <?php echo $nd_options_meta_box_post_color; ?>; }


    /*compatibility for nd-learning*/
    #nd_learning_single_course_comments .nd_options_comments_ul li .comment-author .fn, 
    #nd_learning_single_course_comments .nd_options_comments_ul li .comment-author .fn a { color: <?php echo $nd_options_customizer_font_color_h;  ?>; }
    #nd_learning_single_course_comments .nd_options_comments_ul li .comment-author .fn, 
    #nd_learning_single_course_comments .nd_options_comments_ul li .comment-author .fn a { font-family: '<?php echo $nd_options_font_family_h; ?>', sans-serif; }


</style>
<!--END css for post-->


<?php if ( have_comments() ) : ?>

    <!--START comment-->
    <div id="nd_options_comments" class="nd_options_section nd_options_margin_top_50">

        <h3 class=""><strong><?php comments_number(__('No Comments','nd-shortcodes'),__('One Comment','nd-shortcodes'),__( '% Comments','nd-shortcodes') );?></strong></h3>
        
        <div class="nd_options_section nd_options_height_10"></div>
    
        <ul class="nd_options_comments_ul">
            <?php wp_list_comments(); ?>
        </ul>

        <!--start navigation comment-->
        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
        </div>
        <!--end navigation comment-->

        <?php if ( comments_open() ) : ?>
            
            <!--START comment form-->
            <div id="nd_options_comments_form" class="nd_options_section nd_options_margin_top_20">
                <?php comment_form(); ?>
            </div>
            <!--END comment form-->

        <?php endif; ?>


    </div>
    <!--END comment-->

<?php else : ?>
    
    
    <?php if ( comments_open() ) : ?>

        <!--START comment form-->
        <div id="nd_options_comments_form" class="nd_options_section nd_options_margin_top_20">
            <?php comment_form(); ?>
        </div>
        <!--END comment form-->

    <?php endif;


endif;