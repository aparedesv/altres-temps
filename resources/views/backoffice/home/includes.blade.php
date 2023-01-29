<script>

    // Crear un mapa
    var map = L.map('map').setView([41.7692525, 2.2517162], 13);

    // Afegir una capa de mapa base
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiYXBhcmVkZXN2IiwiYSI6ImNsZGN0Y2p2ZjBkZWkzdnF6N2xtcWk5dGEifQ.N3uTO28R-jxySVpGXNxCXg'
    }).addTo(map);

    var marker;
    @foreach($coordinates as $coordinate)

        marker = L.marker(['{{$coordinate->latitude}}', '{{$coordinate->longitude}}']).addTo(map);

        marker.bindPopup('<div><ul><li>pictures: {{ $coordinate->pictures->count() }}</li></ul><button onclick="showCoordinateInfo({{ $coordinate->id }})" class="bg-indigo-500 hover:bg-indigo-600 w-full text-white font-medium py-2 px-4 rounded-md">details</button></div>');

        // marker.bindPopup('<img class="img" src="{{ url("storage/img/".$userFolder."/".$coordinate->pictures->first()->picture) }}">');

    @endforeach

    map.on('click', function(e) {
        console.log(e);
        document.getElementById('upload-photo-latitude').value = e.latlng.lat;
        document.getElementById('upload-photo-longitude').value = e.latlng.lng;
        document.getElementById('upload-photo').classList.toggle("hidden");
    });

</script>
