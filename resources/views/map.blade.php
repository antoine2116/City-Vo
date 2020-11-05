@extends('layouts.master')

@section('title', '')

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
        integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
        crossorigin="" />

    <div id="map" style="height: 99%"></div>

    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
        integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
        crossorigin=""></script>

    <script type="text/javascript">
        function drawMap(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            var macarte = null;
            macarte = L.map('map').setView([lat, lon], 15);
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(macarte);
            L.marker([lat, lon]).addTo(macarte);
        }
        function initMap() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(drawMap);
            }
        }
        window.onload = function() {
            initMap();
        };
    </script>

@stop