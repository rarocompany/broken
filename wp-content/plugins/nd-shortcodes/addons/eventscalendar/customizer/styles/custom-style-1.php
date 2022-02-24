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


?>


<style>

/*remove*/
#tribe-events {
	/*padding-top: 200px;*/
}
#tribe-events-content {
	/*padding-top: 200px;*/
}
.tribe-events-single .tribe-events-schedule .tribe-events-cost{
	/*display: none;*/
}


/*************************** GENERAL ***************************/
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events p{
	line-height: 29px;
}


/*************************** Single Event ***************************/

/*image*/
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-event-image img {
	width: 100%;
}	



/*title and date and link back events*/
.tribe_events-template-default #tribe-events .tribe-events-single .tribe-events-single-event-title{
	font-size: 40px;
	font-weight: bolder;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe-events-schedule{
	margin-top: 10px;
	margin-bottom: 40px; 
	background-color: initial;
    border: 0px;
    padding: 0px;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe-events-schedule h2{
	font-weight: lighter;
	font-size: 20px;
	color: <?php echo $nd_options_customizer_font_color_p; ?>;
	letter-spacing: 2px;
	text-transform: uppercase;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe-events-back a{
	background-color:#444444;
	color: #fff;
	padding: 5px 10px;
	font-size: 13px;
	text-transform: uppercase;
	font-weight: normal;
}


/*buttons*/
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-gcal.tribe-events-button,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-ical.tribe-events-button{ 
	border-radius: 30px; 
	font-size: 14px;
	padding: 10px 20px;
	line-height: 14px;
	font-weight: normal;
}


/*details and organizer*/
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-single-section.tribe-events-event-meta{
	border-width: 0px;
	color: <?php echo $nd_options_customizer_font_color_p; ?>;
	font-size: 15px;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details{
	padding-right: 15px !important;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer{
	padding-left: 15px !important;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer{
	margin: 0px;
	padding: 0px;
	width: 50%;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details h3,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer h3{
	text-transform: uppercase;
	font-weight: bolder;
	font-size: 20px;
	margin-bottom: 30px;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details dt,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details dd,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer dt,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer dd
{
	width: 50%;
	float: left;
	border-top: 1px solid #f1f1f1;
	padding: 15px;
	box-sizing:border-box;
	margin: 0px;
	line-height: 29px;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details dt,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer dt,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer dd.tribe-organizer
{
	text-transform: uppercase;
	color: <?php echo $nd_options_customizer_font_color_h; ?>;
	font-weight: bolder;
}


/*venue*/
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue{
	margin: 0px;
	padding: 0px;
}

.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue h3{
	text-transform: uppercase;
	font-weight: bolder;
	font-size: 20px;
	margin-bottom: 30px;
}

.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue dt,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue dd
{
	width: 50%;
	float: left;
	border-top: 1px solid #f1f1f1;
	padding: 15px;
	box-sizing:border-box;
	margin: 0px;
	line-height: 29px;
}

.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-venue-map{
	margin: 0px;
	padding: 0px;
	width: 50%;
	box-sizing:border-box;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue{
	padding-right: 15px !important;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-venue-map{
	padding-left: 15px !important;
	background: none;
	border-width: 0px;
}
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue dt,
.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue dd.tribe-venue
{
	text-transform: uppercase;
	color: <?php echo $nd_options_customizer_font_color_h; ?>;
	font-weight: bolder;
}

/*footer*/
.tribe-events-single #tribe-events-footer { border-width: 0px; }
.tribe-events-single #tribe-events-footer ul .tribe-events-nav-next a,
.tribe-events-single #tribe-events-footer ul .tribe-events-nav-previous a {
	background-color: #444444;
    color: #fff;
    padding: 5px 10px;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: normal;
    line-height: 29px;
}


/*mobile*/
@media only screen and (min-width: 320px) and (max-width: 767px) {
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-venue-map,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details dt,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details dd,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer dt,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer dd,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue dt,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue dd{
		width: 100%;
	}	

	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-details,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-venue,
	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-venue-map{
		padding: 0px !important;
	}

	.tribe_events-template-default #tribe-events .tribe-events-single .tribe_events .tribe-events-meta-group.tribe-events-meta-group-organizer{
		margin-top: 30px;
	}
}


/*************************** ARCHIVE ***************************/

/*footer*/
#tribe-events #tribe-events-content-wrapper #tribe-events-content #tribe-events-footer{ margin-top: 40px; }
#tribe-events #tribe-events-content-wrapper #tribe-events-content #tribe-events-footer ul .tribe-events-nav-previous,
#tribe-events #tribe-events-content-wrapper #tribe-events-content #tribe-events-footer ul .tribe-events-nav-next{
	margin: 0px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content #tribe-events-footer ul .tribe-events-nav-previous a,
#tribe-events #tribe-events-content-wrapper #tribe-events-content #tribe-events-footer ul .tribe-events-nav-next a {
	background-color: #444444;
    color: #fff;
    padding: 5px 10px;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: normal;
    line-height: 29px;
}


#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-ical.tribe-events-button{
	border-radius: 30px !important;
	font-size: 14px !important;
	padding: 10px 20px !important;
	line-height: 14px !important;
	font-weight: normal !important;
	height: initial;
}


/*title*/
#tribe-events #tribe-events-content-wrapper #tribe-events-content h2.tribe-events-page-title a{
	display: block;
    font-size: 20px;
    font-weight: 100;
    color: <?php echo $nd_options_customizer_font_color_p; ?>;
    text-transform: uppercase;
    letter-spacing: 2px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content h2.tribe-events-page-title{
	font-size: 40px;
    text-transform: uppercase;
    line-height: 40px;
    margin-bottom: 30px;
}


/*bar filter*/
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form .tribe-bar-filters .tribe-bar-submit input[type="submit"]{
	background-color: <?php echo $nd_options_customizer_forms_submit_bg; ?> ;
	border-radius: 30px;
    font-weight: normal;
    font-size: 16px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form .tribe-bar-filters .tribe-bar-filters-inner label,
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form #tribe-bar-views .tribe-bar-views-inner label {
	font-size: 13px;
    font-weight: lighter;
    letter-spacing: 2px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form .tribe-bar-filters .tribe-bar-filters-inner input[type="text"] {
	border-bottom:1px solid #f1f1f1;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form #tribe-bar-views .tribe-bar-views-inner,
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form #tribe-bar-views .tribe-bar-views-inner ul li a
{
	background-color: #fff;
	color: <?php echo $nd_options_customizer_font_color_p; ?>;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form #tribe-bar-views .tribe-bar-views-inner ul li{
	border-bottom: 1px solid #f1f1f1;
	padding:2px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-bar form #tribe-bar-views .tribe-bar-views-inner ul li a span{
    line-height: 20px;
}


/*table month*/
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-calendar thead tr th{
	font-size: 13px;
	font-weight: normal;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-calendar td{
	border-color: #f1f1f1 !important;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-calendar tbody tr td div{
	font-weight: normal;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-calendar .tribe-events-tooltip .tribe-event-description p{
	font-size: 13px;
	line-height: 23px;
	padding: 7px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-calendar .tribe-events-tooltip .tribe-event-duration .tribe-events-abbr{
	letter-spacing: 2px;
	text-transform: uppercase;
	color: <?php echo $nd_options_customizer_font_color_h; ?>;
}
/*mobile*/
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-calendar td.mobile-active,
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-calendar .mobile-active div[id*=tribe-events-daynum-] {
	background-color: #444444;
}




/*day view*/
.tribe-events-day{ padding: 0px; }
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-day-time-slot h5{
	color: <?php echo $nd_options_customizer_font_color_p; ?>;
    font-size: 15px;
    text-transform: uppercase;
    font-weight: normal;
    padding: 15px;
    background-color: #fff;
    border:1px solid #f1f1f1;
}

#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-day-time-slot .type-tribe_events h2 a{
    color: <?php echo $nd_options_customizer_font_color_h; ?>;
    font-size: 20px;
}

#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-day-time-slot .type-tribe_events .time-details{
	font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: <?php echo $nd_options_customizer_font_color_p; ?>;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-day-time-slot .type-tribe_events .tribe-events-venue-details{
	display: none;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-day-time-slot .type-tribe_events .tribe-events-list-event-description{
	margin-top: 10px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-day-time-slot .type-tribe_events .tribe-events-list-event-description a{
	font-size: 13px;
    background-color: #444;
    color: #fff;
    padding: 5px 20px;
    line-height: 13px;
    border-radius: 30px;
}


/*list view*/
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-list-separator-month{
	color: <?php echo $nd_options_customizer_font_color_p; ?>;
    font-size: 15px;
    text-transform: uppercase;
    font-weight: normal;
    background-color: #fff;
    border:1px solid #f1f1f1;
    margin: 0px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .tribe-events-list-separator-month:after{
	border-width: 0px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events h2.tribe-events-list-event-title a{
    color: <?php echo $nd_options_customizer_font_color_h; ?>;
    font-size: 20px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-event-schedule-details{
	font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: <?php echo $nd_options_customizer_font_color_p; ?>;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-venue-details{
	display: none;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-list-event-description a{
	font-size: 13px;
    background-color: #444;
    color: #fff;
    padding: 5px 20px;
    line-height: 13px;
    border-radius: 30px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-event-image{
	width: 30%;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-list-event-description{
	width: 67%;
	padding: 0px;
	margin-top: 10px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events{
	padding: 35px;
	margin: 0px;
}


/*mobile*/
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-event-meta{
	margin: 0px;
	padding: 0px;
	background-color: initial;
	border: 0px;
	margin-top: 5px;
	margin-bottom: 15px;
}
#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-event-meta > div{
	padding: 0px;
}

@media only screen and (min-width: 320px) and (max-width: 767px) {
	#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-event-image,
	#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-event-image img,
	#tribe-events #tribe-events-content-wrapper #tribe-events-content .tribe-events-loop .type-tribe_events .tribe-events-list-event-description{
		width: 100%;
	}	
}

</style>
