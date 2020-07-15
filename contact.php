<?php

$nameB = $_POST["name"];
$emailB = $_POST["email"];
$lnameB = $_POST["lname"];

?>
<!DOCTYPE html>

<html>
    <body>
       
        Welcome <?php echo $nameB ?> &nbsp; <?php echo lnameB ?> <br>
        Your email address is: <?php echo $emailB ?>
        
    </body>
</html>