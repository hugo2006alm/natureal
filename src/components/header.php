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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NatuReal</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="min-w-screen min-h-screen bg-base-100" onload = "getLocationConstant()">
    <?php include 'components/top_nav.php';?>
