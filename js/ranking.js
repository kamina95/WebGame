//---------------------------------------------------------------

window.onload = createTable();
addingStats();


//function that order in an array all the users
function createTable() {

    var arrKey = [];
    //feed the array with objects
    for (var i = 0; i < localStorage.length; i++) {
        var usrObj = JSON.parse(localStorage.getItem(localStorage.key(i)));
        arrKey[i] = usrObj;
    }
    //bubble sort algorithm
    for (var i = arrKey.length - 2; i >= 0; i--) {
        for (var j = 0; j < i + 1; j++) {
            if (arrKey[j].maxScore < arrKey[j + 1].maxScore) {
                var provisional = arrKey[j];
                arrKey[j] = arrKey[j + 1];
                arrKey[j + 1] = provisional;
            }
        }
    }

    //Taking the table from the page
    table = document.getElementById("tableRan");

    // Create an empty <tr> element and add it to the 1st position of the table:
    var row = table.insertRow(0);

    // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);

    // Add some text to the new cells:
    cell1.innerHTML = "POSITION";
    cell2.innerHTML = "USER NAME";
    cell3.innerHTML = "PUNCTUATION";
    //Itinerating for create up to 5 positions in the table
    for (var i = 0; i < 5 && i < arrKey.length; i++) {
        var row = table.insertRow(i + 1);
        usrObj = arrKey[i];
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);

        cell1.innerHTML = i + 1;
        cell2.innerHTML = usrObj.userName;
        cell3.innerHTML = usrObj.maxScore;
    }
}



//adding stats to the table of the right
function addingStats() {
    //retriving the information from the seasson storage
    var email = sessionStorage.getItem("loggedInUsrEmail");
    var usrload = JSON.parse(localStorage[email]);
    //taking the array of data for the ability of autockick
    var arr = usrload.initialClass;
    var interval = Math.round(1000 / arr[3]);
    var time = arr[2] / 1000;
    document.getElementById("usrName").innerHTML = usrload.userName;
    document.getElementById("maxScore").innerHTML = usrload.maxScore;
    document.getElementById("maxPerSecond").innerHTML = usrload.maxScorePerSecond;
    document.getElementById("maxPerSecond").innerHTML = usrload.maxScorePerSecond;
    document.getElementById("duration").innerHTML = time + " Seconds";
    document.getElementById("speed").innerHTML = interval + " Cookies PS";



    //setting up the timer
    var timeOn = usrload.time;
    var secondsTotal = timeOn / 1000;
    var hours = Math.floor(secondsTotal / 3600);
    var minutes = Math.floor(secondsTotal / 60) % 3600;
    var seconds = Math.floor(secondsTotal) % 60;
    if (minutes > 60) {
        hours += Math.floor(minutes / 60);
        minutes = minutes % 60;
    }
    //printing the timer
    document.getElementById('timer').innerHTML = hours + ":" + minutes + ":" + seconds;

}
//uploading the stats every second
setInterval(function() {
    addingStats();
}, 1000);