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

    // Crear una marca i afegir-la al mapa
    var marker = L.marker([41.7692525, 2.2517162]).addTo(map);

    marker.bindPopup('<img class="img" src="https://upload.wikimedia.org/wikipedia/commons/1/14/Spain.Aiguafreda.Panoramica.2.jpeg">');

    // var marker = L.marker([41.7692525, 2.2517162]).addTo(map);
    // marker.bindPopup("<form><label>Nom:</label><input type='date'><br><label>foto:</label><input type='file'><br><input type='submit' value='Enviar'></form>").openPopup();

    map.on('click', function(e) {
        console.log(e.latlng);
        document.getElementById('upload-photo').classList.toggle("hidden");
    });

</script>
