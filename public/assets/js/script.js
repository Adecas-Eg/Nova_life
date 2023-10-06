
let map;
const position = { lat: 10.39972, lng: -75.51444 };
let autoComplete;
let marker;
const auto = document.getElementById('pac-input');
let locations = [];


//iniciar maap
async function initMap() {
    //@ts-ignore
    const { Map } = await google.maps.importLibrary("maps")
    const { AdvancedMarkerView } = await google.maps.importLibrary("marker");
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    map = new Map(document.getElementById("map"), {
        zoom: 12,
        center: position,
        mapId: "DEMO_MAP_ID",
        lavel: "C"
    });

    marker = new AdvancedMarkerView({
        map: map,
        position: position,
        title: "Cartagena",
    });
    initAutoComplete()
}

const markerView = new google.maps.marker.AdvancedMarkerView({
    map,
    position: { lat: 37.4239163, lng: -122.0947209 },
});

//autocompletado
function initAutoComplete() {
    autoComplete = new google.maps.places.Autocomplete(auto)
    autoComplete.addListener('place_changed', function () {
        let place = autoComplete.getPlace();
        console.log(place);
        map.setCenter(place.geometry.location);
        marker.position = (place.geometry.location);
        mostrar();
    });

}


//recyperar arrays
function mostrar() {
    let latitud, longitud = new Array();
    latitud = document.querySelectorAll(
        'input[name="lat[]"]'
    );
    longitud = document.querySelectorAll(
        'input[name="lng[]"]'
    );
    latitud.forEach((ele, i) => {
        locations.push({
            lat: (ele.parentNode.parentNode.id,
                parseFloat(ele.value)), lng: (longitud[i].parentNode.parentNode.id,
                    parseFloat(longitud[i].value))
        });
    })
}


initMap();
