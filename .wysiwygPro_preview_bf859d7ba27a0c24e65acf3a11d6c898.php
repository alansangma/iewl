<?php
if ($_GET['randomId'] != "HV4YTVVn0C_oVupbAJtpDT7iz9mtvwH2cC2_3x3C4TUzi2HBhbuJE6yb51RJsmVt") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
