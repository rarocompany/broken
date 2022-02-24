/**
 * @fileoverview This demo is used for MarkerClusterer. It will show 100 markers
 * using MarkerClusterer and count the time to show the difference between using
 * MarkerClusterer and without MarkerClusterer.
 * @author Luke Mahe (v2 author: Xiaoxi Wu)
 */

function $(element) {
  return document.getElementById(element);
}

var speedTest = {};

/*var MY_MAPTYPE_ID = 'custom_style';
var nd_options_center_map = new google.maps.LatLng(34.263079, 16.993682);*/

speedTest.pics = null;
speedTest.map = null;
speedTest.markerClusterer = null;
speedTest.markers = [];
speedTest.infoWindow = null;

speedTest.init = function() {
  var latlng = new google.maps.LatLng(39.91, 116.38);
  
  /*var options = {
    'zoom': 2,
    'center': nd_options_center_map,
    'mapTypeId': MY_MAPTYPE_ID
  };*/

  speedTest.map = new google.maps.Map($('map'), options);



  //custom zoom map
  if(  document.getElementById("nd_options_gmaps_plus") ){
       google.maps.event.addDomListener(document.getElementById("nd_options_gmaps_plus"), "click", function () {      
         var current= parseInt( speedTest.map.getZoom(),10);
         current++;
         if(current>20){
             current=20;
         }
         speedTest.map.setZoom(current);
      });  
  }
      
      
  if(  document.getElementById("nd_options_gmaps_minus") ){
       google.maps.event.addDomListener(document.getElementById("nd_options_gmaps_minus"), "click", function () {      
         var current= parseInt( speedTest.map.getZoom(),10);
         current--;
         if(current<0){
             current=0;
         }
         speedTest.map.setZoom(current);
      });  
  }
  //end custom zoom map




  //custom style
//start snazzy options
    
    //end snazzy options


  var styledMapOptions = { name: 'Custom Style'};
  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
  speedTest.map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
  //end custom style





  speedTest.pics = data.photos;
  
  var useGmm = document.getElementById('usegmm');
  google.maps.event.addDomListener(useGmm, 'click', speedTest.change);
  
  var numMarkers = document.getElementById('nummarkers');
  google.maps.event.addDomListener(numMarkers, 'change', speedTest.change);

  speedTest.infoWindow = new google.maps.InfoWindow();




  speedTest.showMarkers();
};

speedTest.showMarkers = function() {
  speedTest.markers = [];

  var type = 1;
  if ($('usegmm').checked) {
    type = 0;
  }

  if (speedTest.markerClusterer) {
    speedTest.markerClusterer.clearMarkers();
  }

  var panel = $('markerlist');
  panel.innerHTML = '';
  var numMarkers = $('nummarkers').value;

  for (var i = 0; i < numMarkers; i++) {
    var titleText = speedTest.pics[i].photo_title;
    if (titleText == '') {
      titleText = 'No title';
    }

    var item = document.createElement('DIV');
    var title = document.createElement('A');
    title.href = '#';
    title.className = 'title';
    title.innerHTML = titleText;

    item.appendChild(title);
    panel.appendChild(item);


    var latLng = new google.maps.LatLng(speedTest.pics[i].latitude,
        speedTest.pics[i].longitude);

    //var markerImage = new google.maps.MarkerImage("http://localhost/themeforest/love-travel/wp-content/themes/weddingindustry/img/gmaps/marker.png", null, null, null, new google.maps.Size(45,45));

    var marker = new google.maps.Marker({
      'position': latLng,
      'icon': markerImage
    });

    var fn = speedTest.markerClickFunction(speedTest.pics[i], latLng);
    google.maps.event.addListener(marker, 'click', fn);
    google.maps.event.addDomListener(title, 'click', fn);
    speedTest.markers.push(marker);
  }

  window.setTimeout(speedTest.time, 0);
};

speedTest.markerClickFunction = function(pic, latlng) {
  return function(e) {
    e.cancelBubble = true;
    e.returnValue = false;
    if (e.stopPropagation) {
      e.stopPropagation();
      e.preventDefault();
    }

    //parameter from json
    var title = pic.photo_title;
    var url = pic.photo_url;

    var location_title = pic.locations_title;
    var location_subtitle = pic.locations_subtitle;
    var location_description = pic.locations_description;

    /*var infoHtml_old = '<div class="info"><h3>' + title +
      '</h3><div class="info-body">' +
      '<a href="' + url + '" target="_blank"><img src="' +
      fileurl + '" class="info-img"/></a></div>' +
      '<br/>' +
      '</div></div>';*/

    //var infoHtml = '<div style="width:300px; min-height:200px;" class="nd_options_focus"><div style="float:left; width:100%; padding:0px; box-sizing:border-box;" class="nd_options_center"><img class="nd_options_focus" src="'+ url +'"><div class="nd_options_space20"></div><h4 class="center">'+ title +'</h4><div class="nd_options_space20"></div><a href="http://localhost/themeforest/love-travel/index.php/locations/venice/" class="nd_options_border_grey grey nd_options_btn nd_options_outline medium ">DETAILS</a><div class="nd_options_space10"></div></div></div>';

    var infoHtml = '<div class="nd_options_section"><div class="nd_options_float_left nd_options_width_50_percentage nd_options_box_sizing_border_box"><img style="" class="nd_options_section" src="'+ url +'"></div><div style="padding-left:45px; float:right !important;" class="nd_options_box_sizing_border_box nd_options_width_50_percentage nd_options_text_align_center"><div class="nd_options_section nd_options_height_15"></div><h4><strong>'+ location_title +'</strong></h4><div class="nd_options_section nd_options_height_20"></div><h5>'+ location_subtitle +'</h5><div class="nd_options_section nd_options_height_20"></div><div class="nd_options_section nd_options_line_height_0"><span class="nd_options_height_2 nd_options_width_30 nd_options_display_inline_block nd_options_bg_grey"></span></div><div class="nd_options_section nd_options_height_20"></div><p>'+ location_description +'</p></div></div>';

    speedTest.infoWindow.setContent(infoHtml);
    speedTest.infoWindow.setPosition(latlng);
    speedTest.infoWindow.open(speedTest.map);


  };
};

speedTest.clear = function() {
  $('timetaken').innerHTML = 'cleaning...';
  for (var i = 0, marker; marker = speedTest.markers[i]; i++) {
    marker.setMap(null);
  }
};

speedTest.change = function() {
  speedTest.clear();
  speedTest.showMarkers();
};

speedTest.time = function() {
  $('timetaken').innerHTML = 'timing...';
  var start = new Date();
  if ($('usegmm').checked) {
    speedTest.markerClusterer = new MarkerClusterer(speedTest.map, speedTest.markers);
  } else {
    for (var i = 0, marker; marker = speedTest.markers[i]; i++) {
      marker.setMap(speedTest.map);
    }
  }

  var end = new Date();
  $('timetaken').innerHTML = end - start;
};
