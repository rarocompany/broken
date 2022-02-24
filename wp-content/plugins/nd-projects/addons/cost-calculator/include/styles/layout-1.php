<?php 


$nd_cc_str .= '
<style>

/*General*/
.nd_cc_section_cc {
   float:left; margin-bottom:20px; padding:0px; box-sizing:border-box;
}

.nd_cc_section_name,
.nd_cc_section_description{
  padding-left:15px;
}

.nd_cc_sub_section_cc {
  float:left; margin-bottom:20px; padding:15px; box-sizing:border-box;
}
.nd_cc_sub_section_name { margin-bottom:10px; }


/*Price section*/
#nd_cc_section_price_'.$nd_cc_post_id.' {
  float:left; width:100%; margin-bottom:20px; padding:15px; box-sizing:border-box; position:relative; text-align:right;
}
#nd_cc_section_price_'.$nd_cc_post_id.' .nd_cc_cc_icon_price {
  width:80px;
  position:absolute;
  left:15px;
  top:10px;
}

#nd_cc_section_price_'.$nd_cc_post_id.' h1 {
  font-size:50px;
  line-height:50px;
  color:'.$nd_cc_meta_box_cc_color.';
}
#nd_cc_section_price_'.$nd_cc_post_id.' p {
  font-size:14px;
  line-height:14px;
  margin-top:10px;
}





/*Slider*/
.nd_cc_slider_'.$nd_cc_post_id.' {
  float:left; width:100%; position:relative; height: 5px; background-color:#f1f1f1; margin: 20px 0px;
}
.nd_cc_slider_handle_'.$nd_cc_post_id.' {
  width: 52px;
  height: 30px;
  top: 0px;
  margin-top: -13px;
  text-align: center;
  line-height: 31px;
  position: absolute;
  background-color:'.$nd_cc_meta_box_cc_color.';
  color: #fff;
  cursor: pointer;
  font-size: 13px;
}


/*switch*/
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_active p { background-color:#fff; }
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_active { cursor:initial !important; }
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_off, 
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_switch_on { cursor:pointer; }

.nd_cc_switch_content_'.$nd_cc_post_id.'.nd_cc_switch_content_active .nd_cc_switch_off p {
  color:#fff;
}

.nd_cc_switch_content_'.$nd_cc_post_id.' {
  float:left; background-color:#f1f1f1; width:220px; text-align:center; padding:5px;
}
.nd_cc_switch_content_'.$nd_cc_post_id.' p {
  font-size:14px; line-height:14px; padding:10px;
}
.nd_cc_switch_content_'.$nd_cc_post_id.'.nd_cc_switch_content_active {
  background-color:'.$nd_cc_meta_box_cc_color.';
}


/*tag*/
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_tag_default {
  border:1px solid #f1f1f1;
  padding:14px 20px;
  margin-right:20px;
  cursor:pointer;
  font-size:14px;
  line-height:14px;
  display:inline-block;
}
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_tag_active {
  background-color:'.$nd_cc_meta_box_cc_color.';
  border:1px solid '.$nd_cc_meta_box_cc_color.';
  color:#fff;
}
.nd_cc_tag_price {
  display:none;
}


/*select*/
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_active {
  
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_li_icon {
  width:40px; position:absolute; left:20px; top:14px;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul {
  margin:0px;
  padding:0px;
  position:relative;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul > li {
  border:1px solid #f1f1f1;
  padding:14px 20px;
  box-sizing:border-box;
  position:relative;
}
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul > li p {
  font-size:14px; line-height:14px;
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
  background-color:#fff;
  cursor:pointer;
  min-width:300px;
  width:100%;
  z-index:9;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_sub_menu li{
  border:1px solid #f1f1f1;
  border-top-width:0px;
  padding: 14px 20px;
  box-sizing:border-box;
  position:relative;
}
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_sub_menu li:first-child{
  border-top:1px solid #f1f1f1;
}
#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_sub_menu li p{
  font-size:14px; line-height:14px;  
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_arrow {
  width: 15px;
  right: 20px;
  position: absolute;
  top: 15px;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul h5{
  font-size: 12px;
    line-height: 12px;
    margin-top: 10px;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_ul p.nd_cc_select_name{
  margin-top:3px;
}

#nd_cc_cc_'.$nd_cc_post_id.' .nd_cc_select_price {
  display:none;
}





</style>
';


