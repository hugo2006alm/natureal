<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <script>
        const ios = () => {
            if (typeof window === `undefined` || typeof navigator === `undefined`) return false;

            return /iPhone|iPad|iPod/i.test(navigator.userAgent || navigator.vendor || (window.opera && opera.toString() === `[object Opera]`));
        };
    </script>
    <script>
        function updateCountdown() {
            const hoursSpan = document.getElementById('hourspan');
            const minutesSpan = document.getElementById('minspan');
            const secondsSpan = document.getElementById('secspan');

            let now = new Date();
            let eventDate = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1, 0, 0, 0); // Define a data do evento

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
        }

        // Chama a função updateCountdown a cada segundo
        setInterval(updateCountdown, 1000);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NatuReal</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="min-w-screen min-h-screen bg-base-100">
    <?php include 'components/top_nav.php';?>