<?php
 
//get font family H
$nd_options_customizer_font_family_h = get_option( 'nd_options_customizer_font_family_h', 'Montserrat:400,700' );
$nd_options_font_family_h_array = explode(":", $nd_options_customizer_font_family_h);
$nd_options_font_family_h = str_replace("+"," ",$nd_options_font_family_h_array[0]);

//get font family P
$nd_options_customizer_font_family_p = get_option( 'nd_options_customizer_font_family_p', 'Montserrat:400,700' );
$nd_options_font_family_p_array = explode(":", $nd_options_customizer_font_family_p);
$nd_options_font_family_p = str_replace("+"," ",$nd_options_font_family_p_array[0]);

//get colors
$nd_options_customizer_font_color_h = get_option( 'nd_options_customizer_font_color_h', '#727475' );
$nd_options_customizer_font_color_p = get_option( 'nd_options_customizer_font_color_p', '#a3a3a3' );
$nd_options_customizer_forms_submit_bg = get_option( 'nd_options_customizer_forms_submit_bg', '#444' );

//events calendar customizer
$nd_options_customizer_tribe_accent_color = get_option( 'nd_options_customizer_forms_submit_bg', '#000' );


?>

<style>

/*HEADER IMAGE*/
#nd_options_eventscalendar_header_img h1 { font-size: 60px; font-weight: bold; text-align: center; }

/*CALENDAR PAGE*/
.post-type-archive-tribe_events .tribe-events-view--month,
.post-type-archive-tribe_events .tribe-events-view--day,
.post-type-archive-tribe_events .tribe-events-view--list { float: left; width:100%; }

/*SINGLE EVENT*/
.tribe-events-single .tribe-events-back a {background-color: <?php echo $nd_options_customizer_font_color_h; ?>;color: #fff;font-size: 13px;font-weight: 700;letter-spacing: 1px;padding: 10px 20px;line-height: 13px;text-transform: uppercase;display: inline-block;}
.tribe-events-single .tribe-events-single-event-title {font-size: 40px;font-weight: 700;}
.tribe-events-single .tribe-events-schedule h2 {font-size: 17px;font-weight: normal;color: <?php echo $nd_options_customizer_font_color_p; ?>; letter-spacing: 1px;text-transform: uppercase;}
.tribe-events-single .tribe-events-schedule span.tribe-events-cost { letter-spacing: 1px; }
.tribe-events-single .tribe-events-single-event-description p { line-height: 2em; }
.tribe-events-single .tribe-events-single-section .tribe-events-venue-map { padding: 0px;border-width: 0px;border-radius: 0px;background-color: #fff; }
#tribe-events-footer { border-top-width: 0px !important;padding-top: 0px !important; }
#tribe-events-footer .tribe-events-nav-pagination a { background-color: <?php echo $nd_options_customizer_font_color_h; ?>;color: #fff;font-size: 13px;font-weight: 700;letter-spacing: 1px;padding: 10px 20px;line-height: 13px;text-transform: uppercase;display: inline-block; }
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group h2 { font-size: 23px; }
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group dl dt { font-size: 17px;margin-top: 20px; }
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-events-start-date,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-events-start-time,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-events-event-cost,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-events-event-categories a,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group   .tribe-organizer-tel,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group  .tribe-organizer-email,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group  .tribe-organizer-url,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-organizer,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-venue-tel,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-venue-url,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-venue,
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group .tribe-venue-location {font-size: 15px;color: #5c5c5c;margin-top: 10px !important;letter-spacing: 1px;display: inline-block;text-decoration: none;}
.tribe-events-single .tribe-events-single-section .tribe-events-meta-group { padding: 0px; }
.tribe-events-single .tribe-events-single-section .tribe-events-venue-map { margin: 20px 0px 0px 0px; }
.tribe-events-single .tribe-events-single-section { border-width:0px; }

/*ARCHIVE EVENTS*/
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row.tribe-events-calendar-list__event-row{box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1); padding: 20px 0px;box-sizing: border-box;}
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row time.tribe-events-calendar-list__event-date-tag-datetime{background-color: <?php echo $nd_options_customizer_font_color_h; ?>; height: auto;padding: 10px 0px;}
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row time .tribe-events-calendar-list__event-date-tag-weekday,
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row time .tribe-events-calendar-list__event-date-tag-daynum { color: #fff; }
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row header time { font-size: 13px;line-height: 13px;text-transform: uppercase;letter-spacing: 1px;color: <?php echo $nd_options_customizer_font_color_p; ?>; }
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row header h3 a{font-size: 23px;line-height: 23px;}
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row header address { display: none; }
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row .tribe-events-calendar-list__event-description p {font-size: 15px;line-height: 2em;}
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row .tribe-events-calendar-list__event-cost {font-size: 13px;line-height: 13px;font-weight: bold;letter-spacing: 1px;background-color: <?php echo $nd_options_customizer_tribe_accent_color; ?>;color: #fff;padding: 10px 20px;display: inline-block;}
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row .tribe-events-calendar-list__event-details { width: 70%; }
.post-type-archive-tribe_events .tribe-events-calendar-list .tribe-common-g-row .tribe-events-calendar-list__event-featured-image-wrapper { width: 30%; }
.post-type-archive-tribe_events .tribe-events-view--month header .tribe-events-header__breadcrumbs { display: none; }

</style>
