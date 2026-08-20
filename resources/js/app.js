<script>
    document.addEventListener('DOMContentLoaded', function () {
        initMap();
    });

    async function initMap() {
        await ymaps3.ready;

        const {YMap, YMapDefaultSchemeLayer} = ymaps3;

        const map = new YMap(
            document.getElementById('map'),
            {
                location: {
                    center: [33.5224, 44.6166],
                    zoom: 10
                }
            }
        );

        map.addChild(new YMapDefaultSchemeLayer());
    }
</script>