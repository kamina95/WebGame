<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Login");
?>

<!-- Contents of the page -->
    <?php
        tutorial("column1", "start");
    ?>
    <div class = "column2">
    <div class= "form">   
            <fieldset>
                <legend>Login</legend>
                <form>
                <div class = "formField">
                    <label for = "username" class = "title">Username:</label>
                    <input type = "text" name = "username" required ="requiered"/><br />
                </div>        
                    <div class = "formField">    
                    <label for = "password" class = "title">Password:</label>                   
                    <input type = "password" name = "password" required ="requiered"/><br /> 
                    </div>
              
                <div class ="submit">                  
                    <input type = "submit" name = "suscribe" value = "Login"/>
                </div>
                </form>
            </fieldset>
</div>
        </div>
    <?php
        tutorial("column3" ,"end");
    ?>



<!-- Contents of the page -->


<?php
    //Output the footer
    outputFooter();
?>