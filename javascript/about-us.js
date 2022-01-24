const article = document.querySelector('.catalogo-books');

function initMap() {
  const coordinates = { lat: 19.4480012, lng: -99.1780695 }
  let map = new google.maps.Map(document.getElementById("map"), {
    center: coordinates,
    zoom: 15,
  });

  let marker = new google.maps.Marker({
    position: coordinates,
    map: map
  });

}




    