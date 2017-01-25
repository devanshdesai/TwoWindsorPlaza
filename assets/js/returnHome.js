function returnHome() {
    window.location.replace('http://www.twowindsorplaza.com/');
}

function countdown() {
    var current = $("#countdown").text();
    current = parseInt(current, 10);
    if (current > 1) {
        $("#countdown").text(current - 1);
    }
}

setInterval(countdown, 1000);
setTimeout(returnHome, 10000);
