<script>

    function init() {

        const center = new Proj.fromLonLat([{{ $lon }}, {{ $lat }}]);

        const map = new Map({
            layers: [
                new TileLayer({
                    source: new OSM(),
                }),
            ],
            target: 'map',
            view: new View({
                center: center,
                zoom: {{ OSM_ZOOM_DEFAULT }},
            }),
        });

        // Crea una instància de Feature amb la geometria del punt
        var feature = new Feature({
            geometry: new Geom.Point(Proj.fromLonLat([4.35247, 50.84673]))
        });

        // Defineix l'estil amb una icona personalitzada
        var style = new Style({
            image: new Icon({
                src: "{{ asset('storage/img/icon.png') }}",
                scale: 0.8, // Escala de l'icona (opcional)
                // Altres opcions d'estil d'icona, com ara l'opacitat, l'angle, etc.
            })
        });

        // Aplica l'estil a la característica
        feature.setStyle(style);

        // Crea una capa vectorial amb la font de vectors i la característica
        var layer = new Layer.Vector({
            source: new Source.Vector({
                features: [feature]
            })
        });

        map.addLayer(layer);

        /**
         * per obrir un pop-up al clicar a la posició
         * però no és el que es vol...
         */

        var container = document.getElementById('popup');
        var content = document.getElementById('popup-content');
        var closer = document.getElementById('popup-closer');

        var overlay = new Overlay({
            element: container,
            autoPan: true,
            autoPanAnimation: {
                duration: 250
            }
        });
        map.addOverlay(overlay);

        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        };

        map.on('singleclick', function (event) {
            if (map.hasFeatureAtPixel(event.pixel) === true) {
                var coordinate = event.coordinate;

                content.innerHTML = '<b>Hello world!</b><br />I am a popup.';
                overlay.setPosition(coordinate);
            } else {
                overlay.setPosition(undefined);
                closer.blur();
            }
        });
    }

</script>
