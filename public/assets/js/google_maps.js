function addMyLocationButton(map, marker) 
{
  var controlDiv = document.createElement('div');
  
  var firstChild = document.createElement('button');
  firstChild.style.backgroundColor = '#fff';
  firstChild.style.border = 'none';
  firstChild.style.outline = 'none';
  firstChild.style.width = '28px';
  firstChild.style.height = '28px';
  firstChild.style.borderRadius = '2px';
  firstChild.style.boxShadow = '0 1px 4px rgba(0,0,0,0.3)';
  firstChild.style.cursor = 'pointer';
  firstChild.style.marginRight = '10px';
  firstChild.style.padding = '0px';
  firstChild.title = 'My Location';
  firstChild.type = 'button';
  controlDiv.appendChild(firstChild);
  
  var secondChild = document.createElement('div');
  secondChild.style.margin = '5px';
  secondChild.style.width = '18px';
  secondChild.style.height = '18px';
  secondChild.style.backgroundImage = 'url(https://maps.gstatic.com/tactile/mylocation/mylocation-sprite-1x.png)';
  secondChild.style.backgroundSize = '180px 18px';
  secondChild.style.backgroundPosition = '0px 0px';
  secondChild.style.backgroundRepeat = 'no-repeat';
  secondChild.id = 'you_location_img';
  firstChild.appendChild(secondChild);
  
  google.maps.event.addListener(map, 'dragend', function() {
    $('#you_location_img').css('background-position', '0px 0px');
  });

  firstChild.addEventListener('click', function(event) {
    var imgX = '0';
    event.defaultPrevented;
    var animationInterval = setInterval(function(){
      if(imgX == '-18') imgX = '0';
      else imgX = '-18';
      $('#you_location_img').css('background-position', imgX+'px 0px');
    }, 500);
    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        marker.setPosition(latlng);
        map.setCenter(latlng);
        clearInterval(animationInterval);
        $('#you_location_img').css('background-position', '-144px 0px');
      });
    }
    else{
      clearInterval(animationInterval);
      $('#you_location_img').css('background-position', '0px 0px');
    }
  });
  
  controlDiv.index = 1;
  map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(controlDiv);
}
function initAutocomplete(map) {

  // Create the search box and link it to the UI element.
  var input = document.createElement('input');
  input.type= 'text';
  input.id = 'gmap-search-input';
  input.placeholder= 'Search Google Maps';
  input.class='gmap-search-control';
  input.style.backgroundColor= "#fff";
  input.style.fontFamily= "Roboto";
  input.style.fontSize= "15px";
  input.style.fontWeight = "300";
  input.style.marginLeft = "12px";
  input.style.padding= "0 11px 0 13px";
  input.style.textOverflow= "ellipsis";
  input.style.width= "300px";
  input.style.marginTop= "10px";
  input.style.border = "1px solid transparent";
  input.style.borderRadius = "2px 0 0 2px";
  input.style.boxSizing = "border-box";
  input.style.height= "32px";
  input.style.outline= "none";
  input.style.boxShadow= "0 2px 6px rgba(0, 0, 0, 0.3)";
  // var input = document.getElementById('gmap-search-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
  // [END region_getplaces]
}
