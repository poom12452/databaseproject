
Adding a Google Map with a Marker to Your Website

Introduction

This tutorial shows you how to add a simple Google map with a marker to a web page. It suits people with beginner or intermediate knowledge of HTML and CSS, and a little knowledge of JavaScript. For an advanced guide to creating maps, read the developer's guide.

Below is the map you'll create using this tutorial.


The section below displays the entire code you need to create the map in this tutorial.

function initMap() {
  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}
<h3>My Google Maps Demo</h3>
<div id="map"></div>
#map {
  height: 400px;
  width: 100%;
 }
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkUOdZ5y7hMm0yrcCQoCvLwzdM6M8s5qk&callback=initMap">
</script>
Try it yourself

Hover at top right of the code block to copy the code or open it in JSFiddle.

<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHD7vp_4vHrImu3bpsOqmZQel5ciRMKHY=initMap">
    </script>
  </body>
</html>
