<?php

require_once 'model/LampState.php';
require_once 'model/TrafficLightState.php';

class TrafficLight
{
    public $red;
    public $yellow;
    public $green;
    public $state;

    public function __construct($state)
    {
        $this->setState(TrafficLightState::HS);
    }

    /**
     * Put the light in a specific state, 'stop' if an unexpected value is supplied
     * @param $state
     */
    public function setState($state)
    {
        $this->state = $state;
        switch ($state) {
            case TrafficLightState::STOP:
                $this->red = LampState::ON;
                $this->yellow = LampState::OFF;
                $this->green = LampState::OFF;
                break;
            case TrafficLightState::READY:
                $this->red = LampState::ON;
                $this->yellow = LampState::ON;
                $this->green = LampState::OFF;
                break;
            case TrafficLightState::GO:
                $this->red = LampState::OFF;
                $this->yellow = LampState::OFF;
                $this->green = LampState::ON;
                break;
            case TrafficLightState::SLOW:
                $this->red = LampState::OFF;
                $this->yellow = LampState::ON;
                $this->green = LampState::OFF;
                break;
            case TrafficLightState::HS:
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
            case TrafficLightState::STOP:
                $this->setState(TrafficLightState::READY);
                break;
            case TrafficLightState::READY:
                $this->setState(TrafficLightState::GO);
                break;
            case TrafficLightState::GO:
                $this->setState(TrafficLightState::SLOW);
                break;
            case TrafficLightState::SLOW:
            case TrafficLightState::HS:
                $this->setState(TrafficLightState::STOP);
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
            case TrafficLightState::STOP:
            case TrafficLightState::GO:
                $this->setState(TrafficLightState::HS);
                break;
            default: // don't change
        }
    }

    /**
     * True if the light can be put in HS state
     */
    public function canStop()
    {
        return (array_search($this->state,[TrafficLightState::STOP,TrafficLightState::GO]) !== false);
    }

    /**
     * return the time (in milliseconds) the light is supposed to stay in its current state
     */
    public function stateDuration()
    {
        switch ($this->state) {
            case TrafficLightState::STOP:
                return 10*1000;
                break;
            case TrafficLightState::READY:
                return 1*1000;
                break;
            case TrafficLightState::GO:
                return 5*1000;
                break;
            case TrafficLightState::SLOW:
                return 1*1000;
                break;
            default:
                return null;
        }
    }
}
