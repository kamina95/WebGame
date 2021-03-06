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
                    <input type="password" name = "pasword" id="PasswordInput"   title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br />
                </div>
                <div class = "formField">    
                    <label for = "comfirmPassword" class = "title">*Repit Pass:</label>                   
                    <input type = "password" name = "comfirmPassword" required ="requiered" id="comfirmPassword"/><br /> 
                </div>

                <!--<div class = "formField">
                    <label for = "age" class = "title">Date of born:</label>
                    <input type = "date" name = "age"/><br />
                </div> -->

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
                    
                    <button type='button' onclick="storeUser()">Register</button>
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
        if(CheckPassword() && CheckSimilitud() && CheckNumber() && CheckEmail() && CheckEmailExisting()){
            var usrObject={};
            usrObject.email = document.getElementById("EmailInput").value;
            usrObject.password = document.getElementById("PasswordInput").value;
            usrObject.password = document.getElementById("comfirmPassword").value;
            usrObject.userName = document.getElementById("UserNameInput").value;
            usrObject.telephone = document.getElementById("TelephoneItem").value;

            //store User
            localStorage[usrObject.email] = JSON.stringify(usrObject);

            //inform user of result
            document.getElementById("Result").innerHTML = "<b>Registration succesful </b>";

        }else if(!CheckEmailExisting()){

            document.getElementById("Result").innerHTML = "<b>Email already in use</b>";
            
        }else if(!CheckEmail()){

            document.getElementById("Result").innerHTML = "<b>Incorrect Format of Email</b>";

        }else if(!CheckPassword()){

            document.getElementById("Result").innerHTML = "<b>Password Incorrect</b>";

        }else if(!CheckSimilitud()){

            document.getElementById("Result").innerHTML = "<b>Password Doesn't match</b>";

        }else if(!CheckNumber()){

            document.getElementById("Result").innerHTML = "<b>Number Incorrect</b>";

        }

       

    }
    var test = "Hiii";

    document.getElementById("rules").innerHTML = "hola que tal  </br >" + test;


    function CheckEmailExisting()
    {
        var email = document.getElementById("EmailInput").value;
        if(localStorage[email] === undefined){
            return true;
        }
        return false;

    }

    function CheckEmail() 
    { 
        var emailRegex = new RegExp(/^[A-Za-z0-9_.-]+@[A-Za-z0-9.-]+$/);
        var email = document.getElementById("EmailInput").value;
        if(!emailRegex.test(email)) 
        { 
            return false;
        }
        return true;
    }

    function CheckPassword() 
    { 
        var passwordRegex = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/);
        var password = document.getElementById("PasswordInput").value;
        if(!passwordRegex.test(password)) 
        { 
            return false;
        }
        return true;
    }

    function CheckSimilitud() 
    {
        var password = document.getElementById("PasswordInput").value;
        var passwordRep = document.getElementById("comfirmPassword").value;

        if(password == passwordRep){
            return true;
        }
        return false;

    }

    function CheckNumber()
    {
        var number = document.getElementById("TelephoneItem").value;
        var numberRegex = new RegExp(/^(\+?)(\d{10,13})$/);

        if(!numberRegex.test(number)) 
        { 
            return false;
        }
        return true;

    }

</script>

<!--output for the footer-->
<?php
    //Output the footer
    outputFooter();
?>