<?php


class TrafficLight
{
    public $red;
    public $yellow;
    public $green;

    public function setState($state)
    {
        switch ($state) {
            case 0: // Stop
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
                break;
            case 1: // Get ready
                $this->red = true;
                $this->yellow = true;
                $this->green = false;
                break;
            case 2: // Go
                $this->red = false;
                $this->yellow = false;
                $this->green = true;
                break;
            case 3: // Slow down
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                break;
            default: // same as stop
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
        }
    }

    public function nextState($state)
    {
        return ($state + 1) % 4;
    }
}
