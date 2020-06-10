<!DOCTYPE html>
<html>
    <?php 
        include "layout.php";
        include "links.php";
    ?>

<body>
    <section id="content">
        <div id="nlmaps-holder"></div>
        <script>
            var nlMapsHolder = document.getElementById('nlmaps-holder');
            nlMapsHolder.style.height = '900px'; // Change to required height
            nlMapsHolder.style.width = '1200px'; // Change to required height


            var opts = {
                style: 'standaard',
                target: 'nlmaps-holder',
                center: {
                    longitude: 5.92052170,
                    latitude: 52.9605613
                },
                overlay: 'false',
                marker: false,
                search: false,
                zoom: 10
            };
            var map = nlmaps.createMap(opts);
        </script>
    </section>
</body>

</html>