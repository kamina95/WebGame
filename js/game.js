//Taking the object from the user logged

var email = sessionStorage.getItem("loggedInUsrEmail");
//initialating all the variables
var score = 0;
var scorePerSecond = 0;

var clickingPower = 1;

var cursorCost = 10;
var cursors = 0;

var grandmaCost = 50;
var grandmas = 0;

var fabricCost = 300;
var fabrics = 0;

var cityCost = 500;
var cities = 0;

var autoPrice = 1000;
var arrClass = [];

var timeOnSite = 0;

var maxScore = 0;

var maxScorePerSecond = 0;


//class created for the upgrade of the auto clicker
class autoclick {
    //the constructor for the class
    constructor(price) {
            this.price = price;
            this.speed = 10;
            this.time = 3000;
            this.interval = 100;
            this.priceSpeed = 1000;
            this.priceInterval = 1000;
            this.counter = 0;
            var arrRecover = [price, 10, 3000, 100, 1000, 1000, 0];

        }
        //function for incremetn when buying
    setPrice() {
        this.price = Math.round(this.price * 1.5);
        return this.price;
    }
    moreTime() {
        var price = this.priceInterval;
        if (score >= price) {
            score = score - price;
            this.priceInterval = Math.round(price * 1.4);
            this.time = this.time + 2000;
            document.getElementById("score").innerHTML = score;
            document.getElementById("intervalPrice").innerHTML = this.priceInterval;
            return this.time;
        }
    }
    moreSpeed() {
            var price = this.priceSpeed;
            if (score >= price) {
                score = score - price;
                this.priceSpeed = Math.round(price * 1.4);
                this.speed = this.speed + 5;
                this.interval = Math.round(this.interval * 0.9);
                document.getElementById("score").innerHTML = score;
                document.getElementById("speedPrice").innerHTML = this.priceSpeed;
                return this.time;
            }
        }
        //function called when reset the game
    restoreStats() {
            document.getElementById("autoClickerPrice").innerHTML = this.price;
            document.getElementById("speedPrice").innerHTML = this.priceSpeed;
            document.getElementById("intervalPrice").innerHTML = this.priceInterval;
        }
        //getters functions

    getPrice() {
        return this.price;
    }
    getSpeed() {
        return this.speed;
    }
    getTime() {
        return this.time / 1000;
    }
    getInterval() {
        return Math.round(1000 / this.interval);
    }
    getPriceSpeed() {
        return this.priceSpeed;
    }
    getPriceInterval() {
        return this.priceInterval;
    }
    getCounter() {
        return this.counter;
    }

    //getter function with a class
    getClass() {
            const arr = [this.price, this.speed, this.time, this.interval, this.priceSpeed, this.priceInterval, this.counter];
            return arr;
        }
        //setter function wiht array
    setClass(arr) {
        this.price = arr[0];
        this.speed = arr[1];
        this.time = arr[2];
        this.interval = arr[3];
        this.priceSpeed = arr[4];
        this.priceInterval = arr[5];
        this.counter = arr[6];
        this.restoreStats();
    }


    abilityCounter() {
            this.counter = this.counter + 1;
        }
        //the power of the ability, what actually does
    autoclick() {
        var interval = this.interval;
        var button = document.getElementById("cookieImg");
        var time = this.time;
        if (score >= this.price) {
            this.abilityCounter();
            score = score - this.price;
            this.setPrice();
            document.getElementById("autoClickerPrice").innerHTML = this.price;
            document.getElementById("score").innerHTML = score;
            var startTime = new Date().getTime();

            var myVar = setInterval(function() {
                button.click()

                if (new Date().getTime() - startTime > time) {
                    clearInterval(myVar);
                    return;
                }
            }, interval)
            this.myVar;

        }
    }

}
//creating the object of the class
var autoclicker = new autoclick(autoPrice);

document.getElementById("score").innerHTML = score;
//every time tha tthe page is refressed or changed
window.onpaint
window.onload = restoreGame();
restorePoints();
addingStats();

//function that display the score
function addToScore(amount) {
    score = score + amount;
    document.getElementById("score").innerHTML = score;
}

//function that display the CPS and set the value of it
function updateScosePerSecond() {
    scorePerSecond = cursors + (grandmas * 5) + (fabrics * 25) + (cities * 50);
    document.getElementById("scorePerSecond").innerHTML = scorePerSecond;
}

//it upload the data to the localStorage for save it
function saveGame() {
    let usrObj = JSON.parse(localStorage[email]); //Convert to object
    usrObj.cookies = score;
    usrObj.cursors = cursors;
    usrObj.grandmas = grandmas;
    usrObj.fabrics = fabrics;
    usrObj.cities = cities;
    usrObj.clickingPower = clickingPower;
    usrObj.initialClass = autoclicker.getClass();
    usrObj.time = timeOnSite;
    if (score > maxScore) {
        usrObj.maxScore = score;
    }
    if (scorePerSecond > usrObj.maxScorePerSecond) {
        usrObj.maxScorePerSecond = scorePerSecond;
    }
    localStorage.setItem(email, JSON.stringify(usrObj));

}

//restart the game to the  first point but keep the stats
function restartGame() {

    let usrObj = JSON.parse(localStorage[email]); //Convert to object
    usrObj.cookies = 0;
    usrObj.cursors = 0;
    usrObj.grandmas = 0;
    usrObj.fabrics = 0;
    usrObj.cities = 0;
    usrObj.clickingPower = 1;
    usrObj.initialClass = [1000, 10, 3000, 100, 1000, 1000, 0];
    localStorage.setItem(email, JSON.stringify(usrObj));
    updateScosePerSecond();
    location.reload();
}
//restore the information from the local storage
function restoreGame() {

    var email = sessionStorage.getItem("loggedInUsrEmail");
    let usrObj = JSON.parse(localStorage[email]);
    arrClass = usrObj.initialClass;

    score = usrObj.cookies;

    time = timeOnSite;

    cursors = usrObj.cursors;
    cursorCost = Math.round(10 + cursors * Math.pow(1.2, cursors));

    grandmas = usrObj.grandmas;
    grandmaCost = Math.round(50 + grandmas * Math.pow(1.2, grandmas));

    fabrics = usrObj.fabrics;
    fabricCost = Math.round(300 + fabrics * Math.pow(1.2, fabrics));

    cities = usrObj.cities;
    cityCost = Math.round(500 + cities * Math.pow(1.2, cities));

    timeOnSite = usrObj.time;

    clickingPower = usrObj.clickingPower;

    autoclicker.setClass(arrClass);

    maxScore = usrObj.maxScore;

    scorePerSecond = scorePerSecond = cursors + (grandmas * 5) + (fabrics * 25) + (cities * 50);

}

//restore all the stats of the ingame menu from localStorage
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

    document.getElementById("cityCost").innerHTML = cityCost;
    document.getElementById("cities").innerHTML = cities;

    document.getElementById("powerClick").innerHTML = clickingPower;

    updateScosePerSecond();

}
//upload the stats from the local storage
function addingStats() {
    var email = sessionStorage.getItem("loggedInUsrEmail");
    let usrObj = JSON.parse(localStorage[email]);
    document.getElementById("usrName").innerHTML = usrObj.userName;
    document.getElementById("maxScore").innerHTML = usrObj.maxScore;
    document.getElementById("maxPerSecond").innerHTML = usrObj.maxScorePerSecond;
    document.getElementById("autoCounter").innerHTML = autoclicker.getCounter();
    document.getElementById("powerClick").innerHTML = clickingPower;
    document.getElementById("timeAB").innerHTML = autoclicker.getTime() + " S";
    document.getElementById("speedAB").innerHTML = autoclicker.getInterval() + " CPS";

}


//funtions for the in-game menu 
//they upload the content and increase the stats in menu and in game
//There are four different buildinggs
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

function buyCity() {
    if (score >= cityCost) {
        score = score - cityCost;
        cities = cities + 1;
        cityCost = Math.round(cityCost * 1.15);
    }
    document.getElementById("cityCost").innerHTML = cityCost;
    document.getElementById("cities").innerHTML = cities;
    document.getElementById("score").innerHTML = score;
    updateScosePerSecond();
}

//Increase te click power in the cookie
function upgradePower(price) {
    if (score >= price) {
        score = score - price;
        clickingPower = clickingPower * 2;
        document.getElementById("upgradeImg").style.visibility = "hidden";
    }
    document.getElementById("powerClick").innerHTML = clickingPower;
    document.getElementById("score").innerHTML = score;

}



//Intercals  for uploading data, saving and 
setInterval(function() {
    score = score + scorePerSecond;
    document.getElementById("score").innerHTML = score;
}, 1000);

setInterval(function() {
    addingStats();
}, 1000);
setInterval(function() {
    saveGame();
}, 1000);



//intercal for count the time

setInterval(function() {
    timeOnSite = timeOnSite + 1000;

    var secondsTotal = timeOnSite / 1000;
    var hours = Math.floor(secondsTotal / 3600);
    var minutes = Math.floor(secondsTotal / 60) % 3600;
    var seconds = Math.floor(secondsTotal) % 60;
    if (minutes > 60) {
        hours += Math.floor(minutes / 60);
        minutes = minutes % 60;
    }

    document.getElementById('counter').innerHTML = hours + ":" + minutes + ":" + seconds;
}, 1000);