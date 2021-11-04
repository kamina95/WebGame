<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Register");
?>

<!-- Contents of the page -->
<?php
    tutorial("column1","start");
?>

<!--All the registration Form-->
<div class = "column2">
    <div class= "form">   
        <fieldset>
            <legend>Register</legend>
            <form>
                <div class = "formField">
                    <label for = "username" class = "title">*Username:</label>
                    <input type = "text" name = "username" required ="requiered"/><br />
                </div>
                    
                <div class = "formField">
                    <label for = "password" class = "title">*Password:</label>
                    <input type = "password" name = "pasword" required ="requiered"/><br />
                </div>
                <div class = "formField">    
                    <label for = "comfirmPassword" class = "title">*Repit Pass:</label>                   
                    <input type = "password" name = "comfirmPassword" required ="requiered"/><br /> 
                </div>

                <div class = "formField">
                    <label for = "realName" class = "title">Real Name:</label> 
                    <input type = "text" name = "realName"/><br />
                </div>

                <div class = "formField">
                    <label for = "age" class = "title">Date of born:</label>
                    <input type = "date" name = "age"/><br />
                </div>

                <div class = "formField">
                    <label for = "gender" class = "title">Gender:</label>
                    <input type = "radio" name = "gender" value= "Male"/>
                    Male
                    <input type = "radio" name = "gender" value= "Female"/>
                    Female
                    <input type = "radio" name = "gender" value= "Other" checked = "checked"/>
                    Other<br />
                </div>

                <div class ="submit">
                    <input type = "submit" name = "suscribe" value = "Register"/>
                </div>
            </form>
        </fieldset>
    </div>
</div>

<!--output for second column-->
<?php
    tutorial("column3", "end");
?>


<!--output for the footer-->
<?php
    //Output the footer
    outputFooter();
?>