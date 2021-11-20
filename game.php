<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Game");
?>



<!-- Contents of the page -->
<div class="gamePage">
    <div class="gameLayaout">
        <fieldset>
            <div id = "gameLeft">
                <center>
                <div class = "scoreContainer unselectable">
                    <span id ="score">0 </span>  salsa<br>
                    <span id ="scorePerSecond">0  </span>  Cookies Per Second<br>
                    <br>
                </div>  
                <div class = "cookieContainer unselectable">
                    <img id ="cookieImg" src="img/cookieImg.png" alt="" onclick="addToScore(clickingPower)">
                </div>
                <button onclick = "saveGame()">Save Game</button>
                </center>
            </div>
            <div id ="gameRight">

            <table class ="shopButton unselectable" onclick ="buyCursor()">
                <tr>
                    <td id = imgShop> <img src="img/cursor.png" alt=""></td>
                    <td id ="nameAndCost">
                        <p>Cursor</p>
                        <p><span id ="cursorCost">10</span> cookies</p>
                    </td>
                    <td id ="amount"><span id = "cursors">0</span></td>
                </tr>
            </table>    
            <table class ="shopButton unselectable" onclick ="buyGrandma()">
                <tr>
                    <td id = imgShop> <img src="img/grandma.png" alt=""></td>
                    <td id ="nameAndCost">
                        <p>Grandma</p>
                        <p><span id ="grandmaCost">50</span> cookies</p>
                    </td>
                    <td id ="amount"><span id = "grandmas">0</span></td>
                </tr>
            </table>
            <table class ="shopButton unselectable" onclick ="buyFabric()">
                <tr>
                    <td id = imgShop> <img src="img/fabric.png" alt=""></td>
                    <td id ="nameAndCost">
                        <p>Fabric</p>
                        <p><span id ="fabricCost">300</span> cookies</p>
                    </td>
                    <td id ="amount"><span id = "fabrics">0</span></td>
                </tr>
            </table>
            </div>
        </fieldset>
    </div>

    <div class="gameStats">
    
    <fieldset>
            <legend>Stats</legend>
            <table>
                <tr>
                    <th>User Name</th>                    
                    <td>Kamina</td>
                </tr>
                <tr>
                    <th>Max punctuation</th>
                    <td>10023</td>                    
                </tr>
                <tr>
                    <th>Time Played</th>
                    <td>00:12:45</td>
                    
                </tr>
                <tr>
                    <th>Max Cookies per second</th>
                    <td>12Kps</td>                   
                </tr>
                <tr>
                    <th>Number of abilites used</th>
                    <td>57</td>                    
                </tr>
                <tr>
                    <th>Ability more used</th>
                    <td>Gold Strong</td>                    
                </tr>
                
            </table>
        </fieldset>
        
    
    </div>
</div>


<script src = "js/game.js"></script>
<?php
    //Output the footer
    outputFooter();
?>