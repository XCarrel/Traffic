<?php
/**
 * File : index.php
 * Author : X. Carrel
 * Created : 2020-08-17
 * Modified last :
 **/

require_once 'TrafficLight.php';

// Make sure state is defined
$state = isset($_GET['state']) ? $_GET['state'] : 0;

$light = new TrafficLight();

$light->setState($state);

// Pick next state
$nextstate = ($state + 1) % 4;
