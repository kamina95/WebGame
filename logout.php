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
        <div class = "buttonPos">      
            <a class ="button button1" href = "">SIGN OUT</a>
        </div>
    </fieldset>
</div>

<!-- Output Second Column-->
<?php
    tutorial("column3", "end");
?>

<!--output footer -->
<?php
    //Output the footer
    outputFooter();
?>