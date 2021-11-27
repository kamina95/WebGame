//---------------------------------------------------------------

window.onload = createTable();
addingStats();



function createTable() {
    //var items = {...localStorage };

    var arrKey = [];


    for (var i = 0; i < localStorage.length; i++) {
        //console.log(JSON.parse(localStorage.getItem(localStorage.key(i))));
        var usrObj = JSON.parse(localStorage.getItem(localStorage.key(i)))
        arrKey[i] = usrObj;
        //console.log(usrObj.maxScore);
    }

    for (var i = 0; i < arrKey.length; i++) {
        console.log(arrKey[i]);
    }

    for (var i = arrKey.length - 2; i >= 0; i--) {
        for (var j = 0; j < i + 1; j++) {
            if (arrKey[j].maxScore < arrKey[j + 1].maxScore) {
                var provisional = arrKey[j];
                arrKey[j] = arrKey[j + 1];
                arrKey[j + 1] = provisional;
            }
        }
    }

    for (var i = 0; i < arrKey.length; i++) {
        console.log(arrKey[i]);
    }


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




function addingStats() {
    var email = sessionStorage.getItem("loggedInUsrEmail");
    var usrload = JSON.parse(localStorage[email]);
    var scorePerSecond = usrload.cursors + usrload.grandmas * 5 + usrload.fabrics * 20;
    document.getElementById("usrName").innerHTML = usrload.userName;
    document.getElementById("maxScore").innerHTML = usrload.maxScore;
    document.getElementById("maxPerSecond").innerHTML = scorePerSecond;

}