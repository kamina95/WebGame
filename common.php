<?php

function outputHeader(){
    
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel="stylesheet" type="text/css" href="styles.css">';
 

}

function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    //echo '<div class="banner">My Game Website Logo</div>';
    echo '<div class="navigation">';
    
    //Array of pages to link to
    $linkNames = array("Home", "Game", "Ranking", "Login","Register", "Logout");
    $linkAddresses = array("index.php", "game.php", "ranking.php", "login.php","register.php", "logout.php");
    
    echo '<a id = "navImg" href = "index.php" > <img src ="img/Icon.png"/></a>';
    //Output navigation
    echo '<div class = "navBar">';
    
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a id = "nav"';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo ' href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a> ';
    }
    
    echo '</div>';
    echo '</div>';

    echo '<h1>Boring   Clicker</h1>';
    echo '</head>';
    echo '<body>';

}

function tutorial($columnNumber, $position){
    if($position == "start"){
        echo '<div class = "columnas">';
    }
    echo '<div class = '.$columnNumber .'>';
    echo '<fieldset>';
    echo '<legend>Tutorial</legend>';
    echo '<p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing so</p>';
    echo '</fieldset>';
    echo '</div>';
    if($position == "end"){
        echo '</div>';
    }
}


function outputFooter(){
    echo '<div class = "footer">';
    echo '<div id ="menuFooter">';
    echo '<ul>';
    echo '<li><a href = "index.php">Home</a></li>';
    echo '<li><a href = "game.php">Game</a></li>';
    echo '<li><a href = "ranking.php">Ranking</a></li>';
    echo '<li><a href = "login.php">Login</a></li>';
    echo '<li><a href = "register.php">Register</a></li>';
    echo '<li><a href = "logout.php">Logout</a></li>';
    echo '<li class ="contact"><a href = "mailto:antoniotornero@hotmail.es">Contact us</a></li>';
    echo '<ul>';

    echo '</div>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
}