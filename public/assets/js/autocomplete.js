let autoComplete;
const auto = document.getElementById('ubicacion');
let place;
let ubicacion;

async function initMap() {
    // Request needed libraries.
    //@ts-ignore

    initAutoComplete();


}
function initAutoComplete() {
    autoComplete = new google.maps.places.Autocomplete(auto)
    autoComplete.addListener('place_changed', async function () {
        // para cambiar los marcadores ocn un imput map.setCenter(place.geometry.location);
        // marker.position = (place.geometry.location);}
        //objeto place y ubicacion
        place = autoComplete.getPlace();
        let ubicacion = {};
        ubicacion['latitud'] = await place.geometry.location.lat();
        ubicacion['longitud'] = await place.geometry.location.lng();
        ubicacion['dirrecion'] = await place.formatted_address;
        // mandamos los valores en formato json a input geometry
        document.getElementsByName('geometry')[0].setAttribute('value', JSON.stringify(ubicacion));
        document.getElementsByName('geometry')[0].value = JSON.stringify(ubicacion);
        console.log(document.getElementsByName('geometry')[0].value);
        auto.value = place.formatted_address;
    });

}
initMap();
