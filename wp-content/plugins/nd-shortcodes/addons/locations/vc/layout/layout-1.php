<?php
    

$nd_options_str .= '
  <!--ALL STYLE CODE-->
  <style>
    .gm-style-iw{width: 350px !important;}
    .gm-style-iw > div { display:block !important; }
    #nd_options_gmaps_minus{ position: absolute; top: 87px; left: 50px; width: 32px; height: 32px;  cursor: pointer;  z-index: 99; pointer-events: auto;}
    #nd_options_gmaps_plus{ position: absolute; top: 50px; left: 50px; width: 32px; height: 32px;  cursor: pointer;  z-index: 99; pointer-events: auto; }
  </style>
  <!--END ALL STYLE CODE-->


  <script type="text/javascript"> 
    //custom style
    var featureOpts=[{featureType:"landscape",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"poi",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{stylers:[{hue:"#00aaff"},{saturation:-100},{gamma:2.15},{lightness:12}]},{featureType:"road",elementType:"labels.text.fill",stylers:[{visibility:"on"},{lightness:24}]},{featureType:"road",elementType:"geometry",stylers:[{lightness:57}]}];
  </script>
';