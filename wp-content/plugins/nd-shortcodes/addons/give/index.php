<?php

$nd_options_give_enable = get_option('nd_options_give_enable');

//include all files
if ( $nd_options_give_enable == 1 ) { 

	include "customizer/index.php";

}
