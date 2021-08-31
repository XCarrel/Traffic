<?php

// All supported states of our traffic light
abstract class TrafficLightState
{
    const STOP = 0;     // red
    const READY = 1;    // red and yellow
    const GO = 2;       // green
    const SLOW = 3;     // yellow
    const HS = 4;       // blinking yellow
}
