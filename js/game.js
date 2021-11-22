var email = sessionStorage.getItem("loggedInUsrEmail");

var score = 0;
var scorePerSecond = 0;

var clickingPower = 1;

var cursorCost = 10;
var cursors = 0;

var grandmaCost = 50;
var grandmas = 0;

var fabricCost = 300;
var fabrics = 0;

document.getElementById("score").innerHTML = score;

window.onload = restoreGame(), restorePoints(), addingStats();

function addToScore(amount) {
    score = score + amount;
    document.getElementById("score").innerHTML = score;
}

function updateScosePerSecond() {
    scorePerSecond = cursors + (grandmas * 5) + (fabrics * 20);
    document.getElementById("scorePerSecond").innerHTML = scorePerSecond;
}

function saveGame() {
    let usrObj = JSON.parse(localStorage[email]); //Convert to object
    usrObj.cookies = score;
    usrObj.cursors = cursors;
    usrObj.grandmas = grandmas;
    usrObj.fabrics = fabrics;
    localStorage.setItem(email, JSON.stringify(usrObj));
    //localStorage[email] = JSON.stringify(usrObject);

}

function restartGame() {

    let usrObj = JSON.parse(localStorage[email]); //Convert to object
    usrObj.cookies = 0;
    usrObj.cursors = 0;
    usrObj.grandmas = 0;
    usrObj.fabrics = 0;
    localStorage.setItem(email, JSON.stringify(usrObj));
    updateScosePerSecond();

}

function restoreGame() {

    var email = sessionStorage.getItem("loggedInUsrEmail");
    let usrObj = JSON.parse(localStorage[email]);

    score = usrObj.cookies;

    time = timeOnSite;

    cursors = usrObj.cursors;
    cursorCost = cursors * Math.pow(1.2, cursors);

    grandmas = usrObj.grandmas;
    grandmaCost = grandmas * Math.pow(1.2, grandmas);

    fabrics = usrObj.fabrics;
    fabricCost = fabrics * Math.pow(1.2, fabrics);

}

function restorePoints() {
    var email = sessionStorage.getItem("loggedInUsrEmail");
    let usrObj = JSON.parse(localStorage[email]);

    document.getElementById("score").innerHTML = score;

    document.getElementById("counter").innerHTML = timeOnSite;

    document.getElementById("cursorCost").innerHTML = cursorCost;
    document.getElementById("cursors").innerHTML = cursors;

    document.getElementById("grandmaCost").innerHTML = grandmaCost;
    document.getElementById("grandmas").innerHTML = grandmas;

    document.getElementById("fabricCost").innerHTML = fabricCost;
    document.getElementById("fabrics").innerHTML = fabrics;

    updateScosePerSecond();

}

function addingStats() {
    var email = sessionStorage.getItem("loggedInUsrEmail");
    let usrObj = JSON.parse(localStorage[email]);
    document.getElementById("usrName").innerHTML = usrObj.userName;


}

function buyCursor() {

    if (score >= cursorCost) {
        score = score - cursorCost;
        cursors = cursors + 1;
        cursorCost = Math.round(cursorCost * 1.15);
    }
    document.getElementById("cursorCost").innerHTML = cursorCost;
    document.getElementById("cursors").innerHTML = cursors;
    document.getElementById("score").innerHTML = score;
    updateScosePerSecond();
}

function buyGrandma() {

    if (score >= grandmaCost) {
        score = score - grandmaCost;
        grandmas = grandmas + 1;
        grandmaCost = Math.round(grandmaCost * 1.15);
    }
    document.getElementById("grandmaCost").innerHTML = grandmaCost;
    document.getElementById("grandmas").innerHTML = grandmas;
    document.getElementById("score").innerHTML = score;
    updateScosePerSecond();
}

function buyFabric() {

    if (score >= fabricCost) {
        score = score - fabricCost;
        fabrics = fabrics + 1;
        fabricCost = Math.round(fabricCost * 1.15);
    }
    document.getElementById("fabricCost").innerHTML = fabricCost;
    document.getElementById("fabrics").innerHTML = fabrics;
    document.getElementById("score").innerHTML = score;
    updateScosePerSecond();
}

setInterval(function() {
    score = score + cursors;
    score = score + grandmas * 5 + fabrics * 20;
    document.getElementById("score").innerHTML = score;


}, 1000);

setInterval(function() {
    saveGame();
    addingStats();
}, 15000);


var pageVisisted = new Date();

setInterval(function() {
    var timeOnSite = new Date() - pageVisisted;

    var secondsTotal = timeOnSite / 1000;
    var hours = Math.floor(secondsTotal / 3600);
    var minutes = Math.floor(secondsTotal / 60) % 3600;
    var seconds = Math.floor(secondsTotal) % 60;

    document.getElementById('counter').innerHTML = hours + ":" + minutes + ":" + seconds;
}, 1000);