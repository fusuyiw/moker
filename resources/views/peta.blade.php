<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peta Masjid & Musholla</title>


    <!-- Favicon -->
    <link href="img/moker.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    {{-- Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@drustack/leaflet.resetview/dist/L.Control.ResetView.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.81.1/dist/L.Control.Locate.min.css" />
    <link href="css/style-map.css" rel="stylesheet">
    <style>
        #map {
            height: 89vh;
            width: 100%;
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            margin: auto;
            font: 10pt "Montserrat";
            background-color: rgba(255, 255, 255, 0.8);
        }



        .legend {
            padding: 6px 8px;
            font: 20px Nunito, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            line-height: 24px;
            color: #555;
        }

        .legend h4 {
            text-align: center;
            font-size: 16px;
            margin: 2px 12px 8px;
            color: #777;
        }

        .legend span {
            position: relative;
            bottom: 0px;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin: 0 8px 0 0;
            opacity: 0.7;
        }

        .legend i.icon {
            background-size: 18px;
            background-color: rgba(255, 255, 255, 1);
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h5 class="m-0 text-primary"><img src="img/moker.png" height="50px"> Peta Masjid dan Musholla Kec.
                Magersari</h5>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/peta" class="nav-item nav-link active">Peta</a>
                <a href="/#informasi" class="nav-item nav-link">Informasi</a>
                <a href="/#deskripsi" class="nav-item nav-link">Deskripsi</a>
                <a href="/#about" class="nav-item nav-link">About</a>
            </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->

    <div id="map"> </div>

    <!-- Hero End -->


    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.81.1/dist/L.Control.Locate.min.js" charset="utf-8">
    </script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    {{-- Leaflet --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.81.1/dist/L.Control.Locate.min.js" charset="utf-8">
    </script>
    <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@drustack/leaflet.resetview/dist/L.Control.ResetView.min.js"></script>

    <script>
        var map = L.map('map').setView([-7.466809584020928, 112.44937847472777], 13);

        map.attributionControl.setPrefix(false);
        var google = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }).addTo(map);
        var satelit = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });
        var greenIcon = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });
        var blueIcon = new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        var geoJsonData = "kelurahan.geojson";

        function onEachFeature(feature, layer) {
            if (feature.properties) {
                var popupContent = "<h5>" + (feature.properties.namobj || "No Name") + "</h5>";

                if (feature.properties.muslim) {
                    popupContent += "<p><strong>Jumlah Penduduk Muslim:</strong> " + feature.properties.muslim + "</p>";
                }
                if (feature.properties.category) {
                    popupContent += "<p><strong>Category:</strong> " + feature.properties.category + "</p>";
                }
                if (feature.properties.address) {
                    popupContent += "<p><strong>Address:</strong> " + feature.properties.address + "</p>";
                }
                if (feature.properties.image) {
                    popupContent += "<img src='" + feature.properties.image +
                        "' alt='Image' style='width:100px;height:auto;'/><br/>";
                }
                layer.bindPopup(popupContent);
            }
        }

        var polygonLayer = L.geoJson.ajax(geoJsonData, {
            filter: function(feature) {
                return feature.geometry.type === "Polygon";
            },
            onEachFeature: onEachFeature
        }).addTo(map);

        var masjidLayer = L.geoJson.ajax(geoJsonData, {
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: greenIcon
                });
            },
            filter: function(feature) {
                return feature.geometry.type === "Point" && feature.properties.category === 'Masjid';
            },
            onEachFeature: onEachFeature
        }).addTo(map);

        var mushollaLayer = L.geoJson.ajax(geoJsonData, {
            pointToLayer: function(feature, latlng) {
                return L.marker(latlng, {
                    icon: blueIcon
                });
            },
            filter: function(feature) {
                return feature.geometry.type === "Point" && feature.properties.category === 'Musholla';
            },
            onEachFeature: onEachFeature
        }).addTo(map);

        var baseMaps = {
            "Google Map": google,
            "Citra Satelit": satelit
        };

        var overlayMaps = {
            "Masjid": masjidLayer,
            "Musholla": mushollaLayer
        };

        var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);

        var lc = L.control.locate({
            position: "topleft"
        }).addTo(map);


        {{-- // Create a legend control
        var legend = L.control({
            position: 'bottomleft'
        }); --}}

        legend.onAdd = function(map) {
            var div = L.DomUtil.create("div", "legend");

            // Add legend items with images
            div.innerHTML +=
                '<img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png" style="width: 14px; height: 22px;"/> <span>Masjid</span><br>';
            div.innerHTML +=
                '<img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png" style="width: 12px; height: 20px;"/> <span>Musholla</span><br>';

            return div;
        };

        // Add legend to the map
        legend.addTo(map);
    </script>
</body>

</html>
