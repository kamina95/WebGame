
<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Home");
?>



<!-- Contents of the page -->

<?php
    tutorial("column1", "start");
?>

<div class = "column2">
    <fieldset>
        <legend>Welcome</legend>
        <div class = "buttonPos">      
            <a class ="button button1" href = "login.php">LOGIN</a>
            <a class ="button button1" href = "register.php">REGISTER</a>

        </div>
    </fieldset>
</div>

<?php
    tutorial("column3", "end");
?>
</div>

<?php
    //Output the footer
    outputFooter();
?>