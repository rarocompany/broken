<?php

$nd_options_page_enable = get_option('nd_options_page_enable');
$nd_options_post_enable = get_option('nd_options_post_enable');

//include all files
if ( $nd_options_page_enable == 1 ) { include "page/index.php"; }
if ( $nd_options_post_enable == 1 ) { include "post/index.php"; }