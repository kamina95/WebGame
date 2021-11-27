const items = {...localStorage };
console.log(items);
// var email = items.getItem();
// console.log(email);

// for (var a in localStorage) {
//     console.log(localStorage[a]);
//     //a.getItem
//     //console.log(a.key());
// }
const arrKey = [];
for (var i = 0; i < localStorage.length; i++) {


    console.log(JSON.parse(localStorage.getItem(localStorage.key(i))));
    var usrObj = JSON.parse(localStorage.getItem(localStorage.key(i)))
    arrKey[i] = usrObj;
    console.log(usrObj.maxScore);
}

for (var i = 0; i < arrKey.length; i++) {
    console.log(arrKey[i].userName);
}

for (var i = arrKey.length - 2; i >= 0; i--) {
    for (var j = 0; j < i; j++) {
        if (arrKey[j].maxScore < arrKey[j + 1].maxScore) {
            var provisional = arrKey[j];
            arrKey[j] = arrKey[j + 1];
            arrKey[j + 1] = provisional;
        }
    }
}




//---------------------------------------------------------------

window.onload = createTable();
addingStats();


function createTable() {
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
    let usrObj = JSON.parse(localStorage[email]);
    document.getElementById("usrName").innerHTML = usrObj.userName;
    document.getElementById("maxScore").innerHTML = usrObj.maxScore;
    document.getElementById("maxPerSecond").innerHTML = scorePerSecond

}