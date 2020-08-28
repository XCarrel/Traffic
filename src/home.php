<?php
/**
 * File : index.php
 * Author : X. Carrel
 * Created : 2020-08-17
 * Modified last :
 **/

if (isset($_GET['state'])) {
    $state = $_GET['state'];
} else {
    $state = 0;
}

switch ($state) {
    case 0: // stop
        $red = true;
        $yellow = false;
        $green = false;
        break;

    case 1: // ready
        $red = true;
        $yellow = true;
        $green = false;
        break;

    case 2: // go
        $red = false;
        $yellow = false;
        $green = true;
        break;

    case 3: // slow down
        $red = false;
        $yellow = true;
        $green = false;
        break;
}
