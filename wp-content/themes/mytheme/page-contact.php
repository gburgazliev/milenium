<?php get_header(); ?>

<main>
<div id="map" style="height: 400px;"></div>
</main>

<?php get_footer(); ?>

<script>
function initMap() {

  const location = { lat: 42.5632079, lng: 27.6384716 }; // your coordinates

  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: location
  });

  const marker = new google.maps.Marker({
    position: location,
    map: map
  });

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIJpOay8jTUC0m2KIIBRBPcn6uqsXVTns&callback=initMap" async defer></script>