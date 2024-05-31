<script>
//Inisialisasi Peta
var map = L.map('map').setView([0.0000, 109.34437], 12);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

//Search Bar Peta
L.Control.geocoder().addTo(map);

//Ketika Peta diklik
var popup = L.popup()
function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Kamu Menekan Peta " + e.latlng.toString())
        .openOn(map);
}
map.on('click', onMapClick);

//Membuat Icon Marker
var mapPointer = L.icon({
    iconUrl: '{{asset('img')}}/map-pointer.png',

    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});

//Pointer map
//var marker = L.marker([0.0000, 109.34437]).addTo(map); Kode untuk pointer biasa
var mapPointer1 = L.marker([0.031661, 109.330616], {icon: mapPointer}).addTo(map);
mapPointer1.bindPopup("<b>Bakso Bakar</b><br>Pak Abu");

var mapPointer2 = L.marker([0.036317, 109.443226], {icon: mapPointer}).addTo(map);
mapPointer2.bindPopup("<b>Nasi Goreng</b><br>Pak Budi");

var mapPointer3 = L.marker([0.05829, 109.296284], {icon: mapPointer}).addTo(map);
mapPointer3.bindPopup("<b>Wonton Spicy</b><br>Kak Mina");

var mapPointer4 = L.marker([-0.025138, 109.337482], {icon: mapPointer}).addTo(map);
mapPointer4.bindPopup("<b>Burger Bangor</b><br>Pak Dimas");

var mapPointer5 = L.marker([-0.034751, 109.290104], {icon: mapPointer}).addTo(map);
mapPointer5.bindPopup("<b>Kebab Habib</b><br>Habib Jafar");

var mapPointer6 = L.marker([-0.05123, 109.326496], {icon: mapPointer}).addTo(map);
mapPointer6.bindPopup("<b>Kue Pancong Lumer</b><br>Kak Dika");

var mapPointer = L.marker([0.007821, 109.256115], {icon: mapPointer}).addTo(map);
mapPointer.bindPopup("<b>Roti Bakar Bandung</b><br>Mas Teguh");

var mapPointer = L.marker([-0.014838, 109.229336], {icon: mapPointer}).addTo(map);
mapPointer.bindPopup("<b>Es Doger</b><br>Bang Min");

var mapPointer = L.marker([-0.031317, 109.29388], {icon: mapPointer}).addTo(map);
mapPointer.bindPopup("<b>Alpukat Kocok</b><br>Bude Santi");

var mapPointer = L.marker([-0.053633, 109.310703], {icon: mapPointer}).addTo(map);
mapPointer.bindPopup("<b>Corndog</b><br>Tante Leha");

</script>
