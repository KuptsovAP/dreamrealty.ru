
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3_b3EhD0YXwMp0q8DObsfavvJTbJ4M7I&callback=initMap"></script>
    <script>
        // Инициализация карты на странице Контакты
        let map;
        function initMap(){
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 55.7725, lng: 37.6227065
                },
                zoom: 15,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#d5f0c9"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b2eafe"
            }
        ]
    }
]
            });
        }

        // Добавление точки
        setTimeout(function(){
            new google.maps.Marker({
                position: { lat: 55.771297, lng: 37.622378 },
                map,
                icon: "/html/assets/svg/map-point2.svg"
            });
        }, 1000);
    </script>