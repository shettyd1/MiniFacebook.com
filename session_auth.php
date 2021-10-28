<?php
    $lifetime = 15 * 60;
    $path = "/lab6";
    $domain = "192.168.1.245:8000";
    $secure = TRUE;
    $httponly = TRUE;
    session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);
    $_SESSION["role"] = "superuser";
    $_SESSION["superuser"] = $username;
    session_start();

    if (!isset($_SESSION["logged"]) or $_SESSION["logged"] !=TRUE) {
        echo "<script>alert('You have not login. Please login first');</script>";
        session_destroy();
        header("Refresh:0; url=form.php");
        die();
        }
    
    if($_SESSION["browser"] != $_SERVER["HTTP_USER_AGENT"]){
        echo "<script>alert('Session hijacking attack is detected!');</script>";
        session_destroy();
        header("Refresh:0 url=form.php");
        die();
    }
?>

