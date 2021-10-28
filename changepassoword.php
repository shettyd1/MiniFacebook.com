require "session_auth.php";
require "database.php";
<?php
    $username = $_SESSION["username"];
    $newpassword = $_REQUEST["newpassword"];
    $nocsrftoken = $_POST["nocsrftoken"];
    
    if(!isset(nocsrftoken) or ($nocsrftoken!=$SESSION["nocsrftoken"])) {
        echo "<script>alert('cross site forgery detected');</script>";
        header("Refresh=0;url=form.php");
        die();
    }
    if (isset($username) AND isset($newpassword)) {
        echo "DEBUG: changepassword.php ->Got: username$username;newpassword=$newpassword\n<br>";
        if (changepassword($username,$newpassword)) {
            echo "<h4>The new password has been set</h4>";
        } else {
            echo "<h4> The new password cannot be updated</h4>";
        }
    }else{
        echo "No provided username/password to change.";
        exit();
    }
    ?>
<a href = "index.php">Home</a> | <a href="logout.php">Logout</a>

