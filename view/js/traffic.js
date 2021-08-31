// Handling of automatic transitions of the traffic light

var timeout = divTrafficLight.dataset.stateduration // get the expected duration of the current state

if (timeout > 0) {
    setTimeout(function () { // wait
        window.location = "?action=next" // and move forward
    }, timeout)
}
