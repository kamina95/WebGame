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
                    <input type = "text" name = "username" required ="requiered" id="UserNameInput"/><br />
                </div>
                    
                <div class = "formField">
                    <label for = "email" class = "title">*Email:</label>
                    <input type = "email" name = "email" required ="requiered" id="EmailInput"/><br />
                </div>

                <div class = "formField">
                    <label for = "password" class = "title">*Password:</label>
                    <input type = "password" name = "pasword" required ="requiered" id="PasswordInput"/><br />
                </div>
                <div class = "formField">    
                    <label for = "comfirmPassword" class = "title">*Repit Pass:</label>                   
                    <input type = "password" name = "comfirmPassword" required ="requiered" id="ConfirmationPassword"/><br /> 
                </div>

                <div class = "formField">
                    <label for = "age" class = "title">Date of born:</label>
                    <input type = "date" name = "age"/><br />
                </div>

                <div class = "formField">
                    <label for="telephone" class="title">Number:</label>
                    <input type="text" number = "telephone" id = "TelephoneItem"><br />   
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

                <div class = "submit">
                    <button onclick="storeUser()">Register</button>
                    <!--<input type = "submit" name = "suscribe" value = "Register"/>-->
                </div>
                
            </form>
            <p id ="Result"></p>
        </fieldset>
        
    </div>
</div>

<!--output for second column-->
<?php
    tutorial("column3", "end");
?>

<script>
    function storeUser(){
        //build objects that we are going to store 
        var usrObject={};
        usrObject.email = document.getElementById("EmailInput").value;
        usrObject.password = document.getElementById("PasswordInput").value;
        usrObject.userName = document.getElementById("UserNameInput").value;
        usrObject.telephone = document.getElementById("TelephoneItem").value;

        //store User
        localStorage[usrObject.email] = JSON.stringify(usrObject);

        //inform user of result
        document.getElementById("Result").innerHTML = "<b>Registration succesful </b>";

    }

</script>

<!--output for the footer-->
<?php
    //Output the footer
    outputFooter();
?>