let map;
let marker;
const image =
    "https://github.com/Adecas-Eg/Nova_life/blob/main/logo.png?raw=true";

async function initMap() {
    // The location of Uluru
    const position = { lat: 10.39972, lng: -75.51444 };
    // Request needed libraries.
    //@ts-ignore
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerView } = await google.maps.importLibrary("marker");

    // The map, centered at Uluru
    map = new Map(document.getElementById("map"), {
        zoom: 13,
        center: position,
        mapId: "DEMO_MAP_ID",
    });

    // The marker, positioned at Uluru
    // marker = new AdvancedMarkerView({
    //     map: map,
    //     position: position,
    //     title: "Uluru",
    // });
    mostrar();
    marker = new google.maps.Marker({
        map,
        position: position,
        icon: image
    });

}



function mostrar() {

    window.latitud.data.forEach((position) => {
        console.log(position)
        const marker = new google.maps.Marker({
            position: { lat: parseFloat(position.latitud), lng: parseFloat(position.longitud) },
            map,
            label: "C",
            title: "Hello World!",
            icon: image
        });
    });

}
initMap()




