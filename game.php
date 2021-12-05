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
                    <span id ="score">0 </span>  Cookies<br>
                    <span id ="scorePerSecond">0  </span>  Cookies Per Second<br>
                    <br>
                </div>  
                <div class = "cookieContainer unselectable">
                    <img id ="cookieImg" src="img/cookieImg.png" alt="" onclick="addToScore(clickingPower)">
                </div>
                <br>
                <button onclick = "saveGame()">Save Game</button>
                <button onclick = "restartGame(); restorePoints();">Restart</button>
                </center>
            </div>
            <div id ="gameRight">
                <table class ="shopButton unselectable">
                    <tr>
                        <td id = "upgradeImg">
                             <img src="img/cursor.png" alt="" title="Double Power Clicker, 500 cookies" onclick ="upgradePower(500)">
                        </td>
                        <td id = "upgradeImg">
                            <img src="img/cursor.png" alt="" title="Double Power Clicker, 10.000 cookies" onclick ="upgradePower(10000)">
                        </td>
                        <td id = "upgradeImg">
                            <img src="img/cursor.png" alt="" title="Double Power Clicker, 100.000 cookies" onclick ="upgradePower(100000)">
                        </td>
                        <td id = "upgradeImg">
                            <img src="img/cursor.png" alt="" title="Double Power Clicker, 1.000.000 cookies" onclick ="upgradePower(1000000)">
                        </td>
                    </tr>
                </table>

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
                <table class ="shopButton unselectable" onclick ="buyCity()">
                    <tr>
                        <td id = imgShop> <img src="img/city.png" alt=""></td>
                        <td id ="nameAndCost">
                            <p>City</p>
                            <p><span id ="cityCost">500</span> cookies</p>
                        </td>
                        <td id ="amount"><span id = "cities">0</span></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td></td>
                        <td  id ="amount">HABILITIES</td>
                        <td></td>
                    </tr>
                </table>
                <table class ="shopButton unselectable" onclick ="autoclicker.autoclick()">
                    <tr>
                        <td id = imgShop> <img src="img/cursor.png" alt=""></td>
                        <td id ="nameAndCost">
                            <p>AutoClick</p>
                        </td>
                        <td id ="nameAndCost"><p><span id ="autoClickerPrice">1000</span> cookies</p></td>
                    </tr>
                </table>
                <table class ="shopButton unselectable" >
                    <tr onclick ="autoclicker.moreTime()">       
                        
                        <td id ="nameAndCost" ><p>More Time</p></td>
                        
                        <td id ="nameAndCost"><p><span id ="intervalPrice">1000</span></p></td>
                    </tr>
                    <tr onclick ="autoclicker.moreSpeed()">       
                        
                        <td id ="nameAndCost" ><p>More Speed</p></td>
                        
                        <td id ="nameAndCost"><p><span id ="speedPrice">1000</span></p></td>
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
                    <td id = "usrName">Undefined</td>
                </tr>
                <tr>
                    <th>Max punctuation</th>
                    <td id = "maxScore"></td>                    
                </tr>
                <tr>
                    <th>Time Played</th>
                    <td id = "counter">00:00:00</td>
                    
                </tr>
                <tr>
                    <th>Max Cookies per second</th>
                    <td  id ="maxPerSecond">0</td>                   
                </tr>
                <tr>
                    <th>Number of abilites used</th>
                    <td>0</td>                    
                </tr>
                <tr>
                    <th>Power Of Click</th>
                    <td id ="powerClick">1</td>                    
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