<?php
/**
 * File : index.php
 * Author : X. Carrel
 * Created : 2020-08-17
 * Modified last :
 **/
require_once 'model/TrafficLight.php';

$light = isset($_SESSION['light']) ? unserialize($_SESSION['light']) : new TrafficLight(0);

if (isset($_GET['next'])) {
    $light->nextState();
}

if (isset($_GET['hs'])) {
    $light->stop();
}

$_SESSION['light'] = serialize($light);

require_once "view/home.php";
