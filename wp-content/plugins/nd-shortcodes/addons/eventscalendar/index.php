<?php

$nd_options_eventscalendar_enable = get_option('nd_options_eventscalendar_enable');

//include all files
if ( $nd_options_eventscalendar_enable == 1 ) { 
	include "customizer/index.php";
	include "metabox/index.php"; 
	include "template/index.php"; 
	include "vc/index.php"; 
}
