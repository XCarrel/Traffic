<?php
/**
 * File : index.php
 * Author : X. Carrel
 * Created : 2020-08-17
 * Modified last :
 **/
session_start();
require_once('controller/HomeController.php');
require_once('model/TrafficLight.php');

$light = isset($_SESSION['light']) ? unserialize($_SESSION['light']) : new TrafficLight(0);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

$controller = new HomeController();

switch ($action) {
    case 'next':
        $controller->next($light);
        break;
    case 'hs':
        $controller->hs($light);
        break;
    default:
        $controller->hs($light);
}

$_SESSION['light'] = serialize($light);

?>


