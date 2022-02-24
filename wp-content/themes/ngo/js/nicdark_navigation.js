/*
	Author: nicdark
	Author URI: http://www.nicdark.com/
*/

(function($) {
	"use strict";

	//navigation
	$('.nicdark_open_navigation_1_sidebar_content').on("click",function(event){ $('.nicdark_navigation_1_sidebar_content').css({ 'right': '0px', }); });
    $('.nicdark_close_navigation_1_sidebar_content').on("click",function(event){ $('.nicdark_navigation_1_sidebar_content').css({ 'right': '-300px' }); });


})(jQuery);