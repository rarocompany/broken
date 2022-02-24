<?php 


$nd_cc_str .= '
<style>

/*General*/
.nd_cc_section_cc {
   float:left; background-color:#ccc; margin-bottom:20px; padding:20px; box-sizing:border-box;
}

.nd_cc_sub_section_cc {
  float:left; background-color:#f1f1f1; margin-bottom:20px; padding:20px; box-sizing:border-box;
}


/*Price section*/
#nd_cc_section_price_'.$nd_cc_post_id.' {
  float:left; width:100%; background-color:#ccc; margin-bottom:20px; padding:20px; box-sizing:border-box;
}
#nd_cc_section_price_'.$nd_cc_post_id.' .nd_cc_cc_icon_price {
  width:40px;
}


/*Select*/
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_li_icon {
  width:40px; position:absolute; left:20px; top:20px;
}


/*Slider*/
.nd_cc_slider_'.$nd_cc_post_id.' {
  float:left; width:100%; position:relative; height: 2px; background-color:#ccc; margin: 20px 0px;
}
.nd_cc_slider_handle_'.$nd_cc_post_id.' {
  width: 3em;
  height: 1.6em;
  top: 50%;
  margin-top: -.8em;
  text-align: center;
  line-height: 1.6em;
  position:absolute;
  background-color:'.$nd_cc_meta_box_cc_color.';
  color:#fff;
  cursor:pointer;
}


/*switch*/
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_active p { background-color:#fff; }
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_active { cursor:initial !important; }
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_off, 
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_on { cursor:pointer; }
.nd_cc_switch_content_'.$nd_cc_post_id.' {
  float:left; background-color:'.$nd_cc_meta_box_cc_color.'; width:220px; text-align:center; padding:4px;
}


/*tag*/
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_tag_default {
  border:1px solid '.$nd_cc_meta_box_cc_color.';
  padding:10px 20px;
  margin-right:20px;
  cursor:pointer;
}
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_tag_active {
  background-color:'.$nd_cc_meta_box_cc_color.';
}


/*select*/
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_active {
  color:#000;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul {
  margin:0px;
  padding:0px;
  position:relative;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul > li {
  border:1px solid #000;
  padding:20px;
  box-sizing:border-box;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul > li{
  display:none;
}
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul .nd_cc_select_active{
  display:block;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_sub_menu {
  display:none;
  position:absolute;
  top:0px;
  left:0px;
  margin: 0px;
  padding:0px;
  list-style:none;
  background-color:#000;
  cursor:pointer;
  min-width:300px;
  width:100%;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_sub_menu li{
  border-bottom:1px solid #f1f1f1;
  padding: 20px;
  box-sizing:border-box;
  position:relative;
}




</style>
';


