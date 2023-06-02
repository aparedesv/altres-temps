<script>

    function init() {

        const center = new OLProj.fromLonLat([2.25179, 41.76863]);

        const map = new OLMap({
            layers: [
                new OLTileLayer({
                source: new OLOsm(),
                }),
            ],
            target: 'map',
            view: new OLView({
                center: center,
                zoom: 14,
            }),
        });
    }

</script>
