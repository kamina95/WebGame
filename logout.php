<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Logout");
?>

<!-- Contents of the page -->
<!-- Output first column-->
<?php
    tutorial("column1" ,"start");
?>

<!-- Button for logout-->
<div class = "column2">
    <fieldset>
        <legend>see you soon</legend>
        <div id ="userLogin">
            <div class = "buttonPos">      
                <a class ="button button1" onclick="logout()">SIGN OUT</a>
            </div>
        </div>
    </fieldset>
</div>

<!-- Output Second Column-->
<?php
    tutorial("column3", "end");
?>

<script>
    window.onclick = checkLogin;
    window.onload = checkLogin;//Check to see if user is logged in already
    function checkLogin(){
        if(sessionStorage.loggedInUsrEmail === undefined){                   
            //Say hello to logged in user
            document.getElementById("userLogin").innerHTML = "<p>There is no User Login</p>";
        }
    }


    function logout(){

        sessionStorage.clear();

    }

</script>

<!--output footer -->
<?php
    //Output the footer
    outputFooter();
?>