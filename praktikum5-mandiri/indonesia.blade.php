<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin=""/>
    <style>
        #map { height: 600px; }
    </style>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
</head>
<body>
    <div id="map"></div>
    <script>
        var map = L.map('map').setView([-6.2181, 106.8024], 10);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var loi = {
            "type": "FeatureCollection",
            "features": [
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Kampus A STT Terpadu Nurul Fikri, Provinsi DKI Jakarta"
                    },
                    "geometry": {
                        "coordinates": [106.84434549909524, -6.362397925354038],
                        "type": "Point"
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Kampus B STT Terpadu Nurul Fikri, Provinsi DKI Jakarta"
                    },
                    "geometry": {
                        "coordinates": [106.83271006867824, -6.352869414097242],
                        "type": "Point"
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Gelora Bung Karno, Provinsi DKI Jakarta"
                    },
                    "geometry": {
                        "coordinates": [106.8024, -6.2181],
                        "type": "Point"
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Telkom University, Bandung - Jawa Barat"
                    },
                    "geometry": {
                        "coordinates": [107.6309, -6.9741],
                        "type": "Point"
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Kampus UI, Provinsi DKI Jakarta"
                    },
                    "geometry": {
                        "coordinates": [106.8227, -6.3625],
                        "type": "Point"
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Kampus Univ Pancasila, Provinsi DKI Jakarta"
                    },
                    "geometry": {
                        "coordinates": [106.83321950783134, -6.339668745280789],
                        "type": "Point"
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Kampus Gunadarma, Depok, Provinsi Jawa Barat"
                    },
                    "geometry": {
                        "coordinates": [106.84355005201226, -6.3544776207117515],
                        "type": "Point"
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "nama": "Kampus Polimedia, Provinsi DKI Jakarta Selatan"
                    },
                    "geometry": {
                        "coordinates": [106.82713883527157, -6.347246724038936],
                        "type": "Point"
                    }
                }
            ]
        };

        var geojson = L.geoJSON(loi, {
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.nama);
            }
        }).addTo(map);
    </script>
</body>
</html>