<!-- <style>

@import "compass/css3";

body{
  background-color:#5c4084;
  margin:50px;
}
.container{
  background-color:#fff;
  padding:40px 80px;
  border-radius:8px;
}
h1{
  color: #fff;
  font-size:4rem;
  font-weight:100;
  margin:0 0 35px 0;
  background:-webkit-linear-gradient(#fff, #999);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  text-align:center;
}
h4{
  color:#999;
}

</style>


<script>
<script src="http://maps.googleapis.com/maps/api/js?libraries=places"></script>
<script src="jquery.geocomplete.js"></script>
$("address").geocomplete();
$(document).ready(function(){
  // Call Geo Complete
  $("#address").geocomplete({details:"form#property"});
});

</script>
<h1>Geo Coordinates by Address v2</h1>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4>A BETTER WAY to get the latitude and longitude of an address using jQuery, and the <a href="https://github.com/ubilabs/geocomplete" target="_blank">geocomplete</a> plugin.</h4>
      <hr />
      <form id="property">
        <div class="form-group">
          <input type="text" name="name" class="form-control" id="address" placeholder="Address">
        </div>
        <div class="form-group">
          <input type="text" name="lat" class="form-control" placeholder="Latitude" readonly>
        </div>
        <div class="form-group">
          <input type="text" name="lng" class="form-control" placeholder="Longitude" readonly>

          <button >Ok</button>
        </div>
      </form>
    </div>
  </div>
</div> -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOAZuKBNOsA108GXHzkF_jqMWOQK9H6XM&libraries=places&callback=initAutocomplete"
         async defer></script>
<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div class="container" id="map-canvas" style="height:300px;"></div>
<style>
#map-canvas {
  margin: 0;
  padding: 0;
  height: 100%;
}
</style>
<script>
function init() {
   var map = new google.maps.Map(document.getElementById('map-canvas'), {
     center: {
       lat: 12.9715987,
       lng: 77.59456269999998
     },
     zoom: 12
   });


   var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));
   map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('pac-input'));
   google.maps.event.addListener(searchBox, 'places_changed', function() {
     searchBox.set('map', null);


     var places = searchBox.getPlaces();

     var bounds = new google.maps.LatLngBounds();
    
     var i, place;
     for (i = 0; place = places[i]; i++) {
       (function(place) {
         var marker = new google.maps.Marker({

           position: place.geometry.location
           
         });
        
         marker.bindTo('map', searchBox, 'map');
        //  google.maps.event.addListener(marker, 'map_changed', function() {
        //    if (!this.getMap()) {
        //      this.unbindAll();

             
        //    }
        //  });

         
         bounds.extend(place.geometry.location);
         alert(place.geometry.location);

       }(place));
       
       
     }
     map.fitBounds(bounds);
     searchBox.set('map', map);
     map.setZoom(Math.min(map.getZoom(),12));

   });
 }
 google.maps.event.addDomListener(window, 'load', init);
</script>
