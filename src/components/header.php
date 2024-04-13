<?php
include 'include/config.inc.php'; 
if (!isset($_SESSION['user_id'])) {
    header('Location: ' . $arrConfig['url_site'] . '/auth/login.php');
    die();
} 
?>
<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        const ios = () => {
            if (typeof window === `undefined` || typeof navigator === `undefined`) return false;

            return /iPhone|iPad|iPod/i.test(navigator.userAgent || navigator.vendor || (window.opera && opera.toString() === `[object Opera]`));
        };
    </script>

    <script>
        function updateCountdown() {
            const hoursSpan = document.getElementById('hourspan');
            const hoursSpan1 = document.getElementById('hourspan1');
            const minutesSpan = document.getElementById('minspan');
            const minutesSpan1 = document.getElementById('minspan1');
            const secondsSpan = document.getElementById('secspan');
            const secondsSpan1 = document.getElementById('secspan1');

            let now = new Date();
            let eventDate = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 0, 0, 0);

            let currentTime = now.getTime();
            let eventTime = eventDate.getTime();

            let remTime = eventTime - currentTime;

            let sec = Math.floor(remTime / 1000);
            let min = Math.floor(sec / 60);
            let hr = Math.floor(min / 60);

            sec = sec % 60;
            min = min % 60;
            hr = hr % 24;

            hoursSpan.style = '--value:' + hr;
            minutesSpan.style = '--value:' + min;
            secondsSpan.style = '--value:' + sec;
            hoursSpan1.style = '--value:' + hr;
            minutesSpan1.style = '--value:' + min;
            secondsSpan1.style = '--value:' + sec;
        }

        // Chama a função updateCountdown a cada segundo
        setInterval(updateCountdown, 1000);
    </script>
    <script>
        if (ios()) {
            var viewport = document.querySelector('meta[name="viewport"]');
            viewport.setAttribute('content', 'width=device-width, initial-scale=1.0, viewport-fit=cover');
        }
    </script>
    <script>
        var totalDistance = 0; // Variável para armazenar a distância total percorrida
        var lastPosition = null; // Última posição conhecida
        function calculateDistance(lat1, lon1, lat2, lon2) {
            const R = 6371; // Raio médio da Terra em quilômetros
            const dLat = (lat2 - lat1) * (Math.PI / 180);
            const dLon = (lon2 - lon1) * (Math.PI / 180); 
            const a = 
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) * 
                Math.sin(dLon / 2) * Math.sin(dLon / 2)
                ; 
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a)); 
            const distance = R * c; // Distância em quilômetros
            return distance;
        }
        function updateDistance(position) {
            if (lastPosition) {
                const distance = calculateDistance(
                    lastPosition.coords.latitude,
                    lastPosition.coords.longitude,
                    position.coords.latitude,
                    position.coords.longitude
                );
                totalDistance += distance;
                console.log(position);
                console.log("Distância percorrida: " + totalDistance.toFixed(2) + " km");
            }
            lastPosition = position;
        }
        function errorCallback(error) {
            console.error('Erro ao obter localização: ' + error.message);
        }
        if (navigator.geolocation) {
            // Atualiza a distância quando uma nova posição é recebida
            navigator.geolocation.watchPosition(updateDistance, errorCallback);
        } else {
            console.error('Geolocalização não é suportada pelo seu navegador.');
        }
    </script>
    <title>NatuReal</title>
    <link rel="stylesheet" href="output.css">
    <script type="text/javascript">
    function getLocationConstant() {

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(onGeoSuccess, onGeoError);
        } else {
            alert("Your browser or device doesn't support Geolocation");
        }
    }

    // If we have a successful location update
    function onGeoSuccess(event) {

        document.getElementById("Posicao").value = event.coords.latitude + ", " + event.coords.longitude;

    }

    // If something has gone wrong with the geolocation request
    function onGeoError(event) {
        alert("Error code " + event.code + ". " + event.message);
    }
</script>
</head>

<body class="min-w-screen min-h-screen bg-base-100" onload = "getLocationConstant()">
    <?php include 'components/top_nav.php'; include 'components/countdown.php'; ?>
