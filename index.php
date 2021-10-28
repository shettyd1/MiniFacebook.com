<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login page - SecAD</title>
</head>
<body>
    <h1>Mini Facebook,SecAD</h1>
    <h2>Team 8: Divya Shetty and Veera Chaganti</h2>
<?php
    session_start();
    $mysqli = new mysqli('localhost',
                         'shettyd22',
                         '5678',
                         'secad');
    if($mysqli->connect_errno){
        printf("Database connection failed: %s\n, $mysqli->connect_error");
        exit();
    }
    if (securechecklogin($_POST["username"],$_POST["password"])) {
?>
    <h2> Welcome <?php echo $_POST['username']; ?> !</h2>
</body>
</html>
<?php
    }else{
        echo "<script>alert('Invalid username/password');</script>";
        die();
    }
    function securechecklogin($username, $password) {
        global $mysqli;
        $prepared_sql = "SELECT * FROM users WHERE username= ? " . " AND password=password(?);";
        if(!$stmt = $mysqli->prepare($prepared_sql))
            echo " Prepare Statement error";
        $stmt ->bind_param("ss", $username,$password);
        if(!$stmt ->execute()) echo "Execute Error";
        if(!$stmt ->store_result()) echo "Store_result Error";
        $result = $stmt;
        if($result->num_rows ==1)
            return TRUE;
        return FALSE;
    
}
?>

