<?php
session_start();
require_once 'src/TrafficLight.php';
require_once 'src/LampState.php';
require_once('src/home.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Traffic</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/traffic.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</head>
<body>
<div class="container text-center">
    <div class="slate">
        <div class="lamp <?= $light->red == LampState::ON ? 'red' : 'off' ?>"></div>
        <div class="lamp <?= $light->yellow == LampState::ON ? 'yellow' : ($light->yellow == LampState::BLINK ? 'blinking' : 'off') ?>"></div>
        <div class="lamp <?= $light->green == LampState::ON ? 'green' : 'off' ?>"></div>
    </div>
    <br>
    <a class="btn btn-primary" href="?next">=></a>
    <a class="btn btn-primary" href="?hs">Suspendre</a>
</div>
</body>
</html>

