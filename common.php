<?php
//Function for the header
function outputHeader(){
    echo '<!DOCTYPE html>
            <html>
                <head>
            <!-- Link to external style sheet -->
                    <link rel="stylesheet" type="text/css" href="css/styles.css">';
 

}

function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    //echo '<div class="banner">My Game Website Logo</div>';
    echo '<div class="navigation">';
    
    //Array of pages to link to
    $linkNames = array("Home", "Game", "Ranking", "Login","Register", "Logout");
    $linkAddresses = array("index.php", "game.php", "ranking.php", "login.php","register.php", "logout.php");
    //adding the Logo
    echo '<a class = "navImg" href = "index.php" > <img src ="img/Icon.png"/></a>';
    //Output navigation
    echo '<div class = "navBar">';
    //for loop for the navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a id = "nav"';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo ' href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a> ';
    }
    //Adding the Title
    echo '</div>
            </div class="titleGame">
                <h1>Boring   Clicker</h1>
            </head>
        <body>';

}
//functions for the repetition of columns in index login and logout pages

function tutorial($columnNumber, $position){
    if($position == "start"){
        echo '<div class = "columnas">';
    }
    //adding a number for the style
    echo '<div class = '.$columnNumber .'>';
    echo    '<fieldset>
     <legend>Tutorial</legend>
    <p id = "rules" >The Game is Simple, Just click the cookie.... BUUT also you can buy grandmas or cursors or fabrics ooor cities, and they will do the baking for you, or improve your clicking power do ing your clicks even more poweerfull, or use your autoClick ability, which one you can actually improve, Just With One Click, EVERYTHING FOR THE COOKIES</p>
     </fieldset>
     </div>';
     //if to check see if is the first or last column
    if($position == "end"){
        echo '</div>';
    }
}

//function for the footer
function outputFooter(){
    echo '<div class = "footer">
     <div id ="menuFooter">
        <ul>
            <li><a href = "index.php">Home</a></li>
            <li><a href = "game.php">Game</a></li>
            <li><a href = "ranking.php">Ranking</a></li>
            <li><a href = "login.php">Login</a></li>
            <li><a href = "register.php">Register</a></li>
            <li><a href = "logout.php">Logout</a></li>
            <li class ="contact"><a href = "mailto:antoniotornero@hotmail.es">Contact us</a></li>
        <ul>

        </div>
        </div>
        </body>
     </html>';
}