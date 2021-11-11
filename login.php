<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Login");
?>

<!-- Contents of the page -->
<!-- output of first column-->

<?php
    tutorial("column1", "start");
?>

    <!--          login form        -->
<div class = "column2">
    <div class= "form">  
        
            <fieldset>
                <legend>Login</legend>
                <div id="loginPara">
                    <form>
                        <div class = "formField">
                            <label for = "email" class = "title">Email:</label>
                            <input type = "text" name = "email" id="emailInput" required ="requiered"/><br />
                        </div>        
                        <div class = "formField">    
                            <label for = "password" class = "title">Password:</label>                   
                            <input type = "password" name = "password" id="passwordInput" required ="requiered"/><br /> 
                        </div>
                    
                        <div class ="submit">                  
                            <button onclick="login()">Login</button>
                        </div>
                    </form>
                </div>
                <p id="loginFailure" style="color:red;"></p>
            </fieldset> 
    </div>
</div>

        <!--output last column -->
<?php
    tutorial("column3" ,"end");
?>

<script>
    window.onload = checkLogin;//check if there is a user already login

    function checkLogin(){
        if(sessionStorage.loggedInUsrEmail !== undefined){
            //Extract details of logged in user
            let usrObj = JSON.parse(localStorage[sessionStorage.loggedInUsrEmail])

            //say hello to logged in user
            document.getElementById("loginPara").innerHTML = usrObj.email + " logged in.";
        }
    }

    let cookies = document.cookie;

    function login(){
        //Get email address
        let email = document.getElementById("emailInput").value;
                
        //User does not have an account
        if(localStorage[email] === undefined){
            //Inform user that they do not have an account
            document.getElementById("loginFailure").innerHTML = "Email not recognized. Do you have an account?";
            return; //Do nothing else
        }
        else{//User has an account
            let usrObj = JSON.parse(localStorage[email]);//Convert to object
            let password = document.getElementById("passwordInput").value;
            if(password === usrObj.password){//Successful login
                document.getElementById("loginPara").innerHTML = usrObj.userName + " logged in.";
                document.getElementById("loginFailure").innerHTML = "";//Clear any login failures
                sessionStorage.loggedInUsrEmail = usrObj.email;
            }
            else{
                document.getElementById("loginFailure").innerHTML = "Password not correct. Please try again.";
            }
        }
    }
</script>



<!-- Contents of the page -->
<?php
    //Output the footer
    outputFooter();
?>