<?php
    

$nd_options_str .= '
  <!--ALL STYLE CODE-->
  <style>
    .gm-style-iw{width: 350px !important;}
    .gm-style-iw > div { display:block !important; }
    #nd_options_gmaps_minus{ border-radius: 3px; position: absolute; top: 87px; left: 50px; width: 32px; height: 32px;  cursor: pointer;  z-index: 99; pointer-events: auto;}
    #nd_options_gmaps_plus{ border-radius: 3px; position: absolute; top: 50px; left: 50px; width: 32px; height: 32px;  cursor: pointer;  z-index: 99; pointer-events: auto; }
  </style>
  <!--END ALL STYLE CODE-->


  <script type="text/javascript"> 
    //custom style
    var featureOpts=[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#85c6bb"},{"visibility":"on"}]}];
  </script>
';