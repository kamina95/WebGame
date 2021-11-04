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
            <table>
                <tr>
                    <th>Position</th>
                    <th>User Name</th>                    
                    <th>Puntuation</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Peter</td>
                    <td>90444</td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lois</td>
                    <td>70000</td>                   
                </tr>
                <tr>
                    <td>3</td>
                    <td>Joe</td>
                    <td>56788</td>                    
                </tr>
                <tr>
                    <td>4</td>
                    <td>Cleveland</td>
                    <td>40989</td>                    
                </tr>
                <tr>
                    <td>5</td>
                    <td>Brian</td>
                    <td>34555</td>                    
                </tr>
            </table>
        </fieldset>
    </div>

    <!--       personal scores table        -->
    <div class ="personalTable">
    <fieldset>
            <legend>Personal Ranking</legend>
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

<!--Output for the footer -->
<?php
    //Output the footer
    outputFooter();
?>