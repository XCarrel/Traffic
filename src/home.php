<?php
/**
 * File : index.php
 * Author : X. Carrel
 * Created : 2020-08-17
 * Modified last :
 **/

// Make sure state is defined
$state = isset($_GET['state']) ? $_GET['state'] : 0;

// Define lamps states
switch ($state) {
    case 0: // stop
        $lamps = [
            'red' => true,
            'yellow' => false,
            'green' => false
        ];
        break;

    case 1: // ready
        $lamps = [
            'red' => true,
            'yellow' => true,
            'green' => false
        ];
        break;

    case 2: // go
        $lamps = [
            'red' => false,
            'yellow' => false,
            'green' => true
        ];
        break;

    case 3: // slow down
        $lamps = [
            'red' => false,
            'yellow' => true,
            'green' => false
        ];
        break;

    default: // same as stop
        $lamps = [
            'red' => true,
            'yellow' => false,
            'green' => false
        ];
        break;
}

// Pick next state
$nextstate = ($state + 1) % 4;
