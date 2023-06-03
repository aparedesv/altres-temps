<script>

    function init() {

        const center = new OLProj.fromLonLat([{{ $lon }}, {{ $lat }}]);

        const map = new OLMap({
            layers: [
                new OLTileLayer({
                source: new OLOsm(),
                }),
            ],
            target: 'map',
            view: new OLView({
                center: center,
                zoom: {{ OSM_ZOOM_DEFAULT }},
            }),
        });
    }

</script>
