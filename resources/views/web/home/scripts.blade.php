<script>

    function init() {

        const center = new Proj.fromLonLat([{{ $lon }}, {{ $lat }}]);

        const map = new OlMap({
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
            interactions: Interaction.defaults({doubleClickZoom: false})
        });

        // Defineix l'estil amb una icona personalitzada
        var style = new Style({
            image: new Icon({
                src: "{{ asset('storage/img/icon.png') }}",
                scale: 0.8, // Escala de l'icona (opcional)
                // Altres opcions d'estil d'icona, com ara l'opacitat, l'angle, etc.
            })
        });

        // Afegim les coordenades al mapa
        const marks = {!! json_encode($marks) !!};
        console.log(marks);

        var features = [];
        var feature;
        marks.forEach(mark => {

            // Crea una instància de Feature amb la geometria del punt
            feature = new Feature({
                geometry: new Geom.Point(Proj.fromLonLat([mark.longitude, mark.latitude]))
            });

            feature.id = mark.id;

            // Aplica l'estil a la característica
            feature.setStyle(style);

            features.push(feature);
        });

        // Crea una capa vectorial amb la font de vectors i la característica
        var layer = new Layer.Vector({
            source: new Source.Vector({
                features: features
            })
        });

        map.addLayer(layer);

        map.on("click", function(e) {

            map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {

                if(feature.id) {

                    console.log(feature.id);
                    livewire.emit('showCoordinatePhotos', feature.id);

                    @if(Auth::check())

                        livewire.emit('showCoordinateInfo', feature.id);
                        showPhotoScreen();

                    @endif
                }
            })
        });

        map.on("dblclick", function(e) {

            if (e.originalEvent.ctrlKey) {

                console.log(e.coordinate);

                var markers = new Layer.Vector({
                    source: new Source.Vector(),
                    style: new Style({
                        image: new Icon({
                            src: "{{ asset('storage/img/icon.png') }}",
                            scale: 0.8,
                        })
                    })
                });
                map.addLayer(markers);

                var marker = new Feature(new Geom.Point(Proj.fromLonLat([2.2931, 48.8584])));
                markers.getSource().addFeature(marker);
            }
        });
    }

</script>
