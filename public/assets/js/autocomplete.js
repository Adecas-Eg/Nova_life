
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
        // map.setCenter(place.geometry.location);
        // marker.position = (place.geometry.location);}
        place = autoComplete.getPlace();
        console.log(place);
        
        let ubicacion = {};
        ubicacion['latitud'] = await place.geometry.location.lat();
        ubicacion['longitud'] = await place.geometry.location.lng();
        ubicacion['dirrecion'] = await place.formatted_address;
        console.log(ubicacion);
        document.getElementsByName('geometry')[0].setAttribute('value', JSON.stringify(ubicacion));
        document.getElementsByName('geometry')[0].value = JSON.stringify(ubicacion);
        console.log(document.getElementsByName('geometry')[0].value);
    });

}



initMap()




// let formdata = new FormData(document.getElementById('form'));
// console.log(formdata);
// return await fetch(document.getElementById(idForm).action, {
//     method: 'POST',
//     body: formdata
// }).then(response => response.json).then(data => { return data; }).catch();


//     // Inject HTML UI.
//     const selectedPlaceTitle = document.createElement("p");

//     selectedPlaceTitle.textContent = "";
//     document.body.appendChild(selectedPlaceTitle);

//     const selectedPlaceInfo = document.createElement("pre");

//     selectedPlaceInfo.textContent = "";
//     document.body.appendChild(selectedPlaceInfo);
//     // Add the gmp-placeselect listener, and display the results.
//     pac.addListener("gmp-placeselect", async ({ place }) => {
//         await place.fetchFields({
//             fields: ["displayName", "formattedAddress", "location"],
//         });
//         selectedPlaceTitle.textContent = "Selected Place:";
//         selectedPlaceInfo.textContent = JSON.stringify(
//             place.toJSON(),
//       /* replacer */ null,
//       /* space */ 2,
//         );
//     });
// }


