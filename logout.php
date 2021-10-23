<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader();
    outputBannerNavigation("Logout");
?>

<!-- Contents of the page -->
<?php
    tutorial("column1" ,"start");
?>
<div class = "column2">
    <fieldset>
        <legend>see you soon</legend>
        <div class = "buttonPos">      
            <a class ="button button1" href = "">SIGN OUT</a>
        </div>
    </fieldset>
</div>
<?php
    tutorial("column3", "end");
?>




<?php
    //Output the footer
    outputFooter();
?>