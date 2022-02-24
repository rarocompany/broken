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
    var featureOpts=[ { "featureType": "landscape.natural", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#e0efef" } ] }, { "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "hue": "#1900ff" }, { "color": "#c0e8e8" } ] }, { "featureType": "road", "elementType": "geometry", "stylers": [ { "lightness": 100 }, { "visibility": "simplified" } ] }, { "featureType": "road", "elementType": "labels", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit.line", "elementType": "geometry", "stylers": [ { "visibility": "on" }, { "lightness": 700 } ] }, { "featureType": "water", "elementType": "all", "stylers": [ { "color": "#8ac6d0" } ] } ];
  </script>
';