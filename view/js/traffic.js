
var timeout = divTrafficLight.dataset.stateduration

if (timeout > 0) {
    setTimeout(function () {
        window.location = "?action=next"
    }, timeout)
}
