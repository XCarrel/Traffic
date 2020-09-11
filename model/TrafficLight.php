<?php

require_once 'model/LampState.php';

class TrafficLight
{
    public $red;
    public $yellow;
    public $green;
    public $state;

    public function __construct($state)
    {
        $this->setState(0);
    }

    /**
     * Put the light in a specific state, 'stop' if an unexpected value is supplied
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
        switch ($state) {
            case 0: // Stop
                $this->red = LampState::ON;
                $this->yellow = LampState::OFF;
                $this->green = LampState::OFF;
                break;
            case 1: // Get ready
                $this->red = LampState::ON;
                $this->yellow = LampState::ON;
                $this->green = LampState::OFF;
                break;
            case 2: // Go
                $this->red = LampState::OFF;
                $this->yellow = LampState::OFF;
                $this->green = LampState::ON;
                break;
            case 3: // Slow down
                $this->red = LampState::OFF;
                $this->yellow = LampState::ON;
                $this->green = LampState::OFF;
                break;
            case 4: // HS
                $this->red = LampState::OFF;
                $this->yellow = LampState::BLINK;
                $this->green = LampState::OFF;
                break;
            default: // same as stop
                $this->red = LampState::ON;
                $this->yellow = LampState::OFF;
                $this->green = LampState::OFF;
        }
    }

    /**
     * Put the light in the next state according to the normal operation cycle
     */
    public function nextState()
    {
        switch ($this->state) {
            case 0: // Stop
                $this->setState(1);
                break;
            case 1: // Get ready
                $this->setState(2);
                break;
            case 2: // Go
                $this->setState(3);
                break;
            case 3: // Slow down
            case 4: // HS
                $this->setState(0);
                break;
            default: // don't change
        }
    }

    /**
     * Put the light in HS state
     */
    public function stop()
    {
        switch ($this->state) {
            case 0: // Stop
            case 2: // Go
                $this->setState(4);
                break;
            default: // don't change
        }
    }
}
