<?php
/**
 * File : index.php
 * Author : X. Carrel
 * Created : 2020-08-17
 * Modified last :
 **/
require_once 'model/TrafficLight.php';

$light = isset($_SESSION['light']) ? unserialize($_SESSION['light']) : new TrafficLight(0);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case 'next':
        $light->nextState();
        break;
    case 'hs':
        $light->stop();
        break;
    default:
        $light->stop();
}

$_SESSION['light'] = serialize($light);

require_once "view/home.php";
