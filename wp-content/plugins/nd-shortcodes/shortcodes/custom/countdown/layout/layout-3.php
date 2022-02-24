<?php


  $str .='
  
  


  <script type="text/javascript">
    //<![CDATA[
    
    jQuery(document).ready(function() {

      //START counter
      jQuery(function ($) {
        
        //variables
        var nd_options_end_date = "'.$nd_options_date.'";
        var nd_options_width = "'.$nd_options_width.'";
        
        //insert the class nd_options_display_none in the var if you wnat to hide the visualization
        var nd_options_display_years = "'.$nd_options_display_years.'";
        var nd_options_display_days = "'.$nd_options_display_days.'";
        var nd_options_display_hours = "'.$nd_options_display_hours.'";
        var nd_options_display_minutes = "'.$nd_options_display_minutes.'";
        var nd_options_display_seconds = "'.$nd_options_display_seconds.'";

        //call
        $(".nd_options_countdown").countdown({
          date: nd_options_end_date,
          render: function(data) {
            $(this.el).html("<div class=\" '.$nd_options_class.' nd_options_countdown_l3 nd_options_section nd_options_text_align_center \"><!--***START 1***--><div style=\" background-color: '.$nd_options_years_bg_color.'; \" class=\" nd_options_width_100_percentage_iphone_port nd_options_countdown_l3_elem  "+ nd_options_width +" "+ nd_options_display_years +"  \"><h1 style=\" color: '.$nd_options_number_color.' \" class=\" nd_options_margin_0 nd_options_margin_top_30 nd_options_margin_bottom_0 nd_options_font_size_35 nd_options_font_weight_normal nd_options_padding_0 \">"+ this.leadingZeros(data.years, 2) +"</h1><h6 style=\" color: '.$nd_options_years_color.'; \" class=\" nd_options_margin_0 nd_options_margin_bottom_30 nd_options_font_weight_normal nd_options_letter_spacing_2 nd_options_display_inline_block nd_options_padding_0 \" >'.$nd_options_text_years.'</h6></div><!--***START 2***--><div style=\" background-color: '.$nd_options_days_bg_color.'; \" class=\" nd_options_width_100_percentage_iphone_port nd_options_countdown_l3_elem  "+ nd_options_width +" "+ nd_options_display_days +"  \"><h1 style=\" color: '.$nd_options_number_color.' \" class=\" nd_options_margin_0 nd_options_margin_top_30 nd_options_margin_bottom_0 nd_options_font_size_35 nd_options_font_weight_normal nd_options_padding_0 \">"+ this.leadingZeros(data.days, 3) +"</h1><h6 style=\" color: '.$nd_options_days_color.'; background-color: '.$nd_options_days_bg_color.' \" class=\" nd_options_margin_0 nd_options_margin_bottom_30 nd_options_font_weight_normal nd_options_letter_spacing_2 nd_options_display_inline_block nd_options_padding_0 \" >'.$nd_options_text_days.'</h6></div><!--***START 3***--><div style=\" background-color: '.$nd_options_hours_bg_color.'; \" class=\" nd_options_width_100_percentage_iphone_port nd_options_countdown_l3_elem  "+ nd_options_width +" "+ nd_options_display_hours +"  \"><h1 style=\" color: '.$nd_options_number_color.' \" class=\" nd_options_margin_0 nd_options_margin_top_30 nd_options_margin_bottom_0 nd_options_font_size_35 nd_options_font_weight_normal nd_options_padding_0 \">"+ this.leadingZeros(data.hours, 2) +"</h1><h6 style=\" color: '.$nd_options_hours_color.'; background-color: '.$nd_options_hours_bg_color.' \" class=\" nd_options_margin_0 nd_options_margin_bottom_30 nd_options_font_weight_normal nd_options_letter_spacing_2 nd_options_display_inline_block nd_options_padding_0 \" >'.$nd_options_text_hours.'</h6></div><!--***START 4***--><div style=\" background-color: '.$nd_options_minutes_bg_color.'; \" class=\" nd_options_width_100_percentage_iphone_port nd_options_countdown_l3_elem  "+ nd_options_width +" "+ nd_options_display_minutes +"  \"><h1 style=\" color: '.$nd_options_number_color.' \" class=\" nd_options_margin_0 nd_options_margin_top_30 nd_options_margin_bottom_0 nd_options_font_size_35 nd_options_font_weight_normal nd_options_padding_0 \">"+ this.leadingZeros(data.min, 2) +"</h1><h6 style=\" color: '.$nd_options_minutes_color.'; background-color: '.$nd_options_minutes_bg_color.' \" class=\" nd_options_margin_0 nd_options_margin_bottom_30 nd_options_font_weight_normal nd_options_letter_spacing_2 nd_options_display_inline_block nd_options_padding_0 \" >'.$nd_options_text_minutes.'</h6></div><!--***START 5***--><div style=\" background-color: '.$nd_options_seconds_bg_color.'; \" class=\" nd_options_width_100_percentage_iphone_port nd_options_countdown_l3_elem  "+ nd_options_width +"  "+ nd_options_display_seconds +"  \"><h1 style=\" color: '.$nd_options_number_color.' \" class=\" nd_options_margin_0 nd_options_margin_top_30 nd_options_margin_bottom_0 nd_options_font_size_35 nd_options_font_weight_normal nd_options_padding_0 \">"+ this.leadingZeros(data.sec, 2) +"</h1><h6 style=\" color: '.$nd_options_seconds_color.'; background-color: '.$nd_options_seconds_bg_color.' \" class=\" nd_options_margin_0 nd_options_margin_bottom_30 nd_options_font_weight_normal nd_options_letter_spacing_2 nd_options_display_inline_block nd_options_padding_0 \" >'.$nd_options_text_seconds.'</h6></div></div>");
          }
        });

      });
      //END counter

    });

    //]]>
  </script>


  <style>

  .nd_options_countdown_l3_elem { position:relative; }
  .nd_options_countdown_l3_elem:after {
    position: absolute;
    content: "/";
    top: 30px;
    right: -12px;
    font-size: 60px;
    color: #000;
    opacity: 0.05;
    font-weight: 100;
    z-index: 9;
    line-height: 60px;
  } 
  .nd_options_countdown_l3 .nd_options_countdown_l3_elem:last-child:after {
    display:none;
  }
  </style>

  ';
