<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Ranking");
?>


<!-- Contents of the page -->

<!-- The two columns of ranking page-->
<div class ="rankingPage">  
    
    <!--Global ranking table-->
    <div class ="globalTable">

        <fieldset>
            <legend>Global Ranking</legend>
            <table id ="tableRan">

            </table>
        </fieldset>
    </div>

    <!--       personal scores table        -->
    <div class ="personalTable">
    <fieldset>
            <legend>Personal Ranking</legend>
            <table >
                
                <tr>
                    <th>User Name</th>                    
                    <td id ="usrName">Unlogged</td>
                </tr>
                <tr>
                    <th>Max punctuation</th>
                    <td  id ="maxScore">0</td>                    
                </tr>
                <tr>
                    <th>Time Played</th>
                    <td id ="timer">00:00:00</td>
                    
                </tr>
                <tr>
                    <th>Max Cookies per second</th>
                    <td id ="maxPerSecond">0Cps</td>                   
                </tr>
                <tr>
                    <th>Duration of the Ability</th>
                    <td id = "duration">0</td>                    
                </tr>
                <tr>
                    <th>Speed of the Ability</th>
                    <td id= "speed">---</td>                    
                </tr>
                
            </table>
        </fieldset>
        
    </div>

</div>

<script src = "js/ranking.js"></script>

<!--Output for the footer -->
<?php
    //Output the footer
    outputFooter();
?>