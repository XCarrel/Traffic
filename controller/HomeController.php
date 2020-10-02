<?php
/**
 * File : index.php
 * Author : X. Carrel
 * Created : 2020-08-17
 * Modified last :
 **/
require_once 'model/TrafficLight.php';

class HomeController {

    public function next(TrafficLight $light)
    {
        $light->nextState();
        require_once "view/home.php";
    }

    public function hs(TrafficLight $light)
    {
        $light->stop();
        require_once "view/home.php";
    }

}
