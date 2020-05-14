## Todo

# 1
* Historie van gps locaties.
# 2
* wat als het verkeerd getyped is.




<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css">
<script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
<script src="https://nlmaps.nl/dist/nlmaps.iife.js"></script>
<script>
    var nlMapsHolder = document.getElementById('nlmaps-holder');
    nlMapsHolder.style.height = '300px'; // Change to required height

    var opts = {
        style: 'standaard',
        target: 'nlmaps-holder',
        center: {
            longitude: 5.293532,
            latitude: 52.121896
        },
        overlay: 'false',
        marker: false,
        search: true,
        zoom: 9
    };
    var map = nlmaps.createMap(opts);
</script>