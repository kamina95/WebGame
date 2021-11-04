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
            <p class ="provisional">Game</p>
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
<?php
    //Output the footer
    outputFooter();
?>