<?php
    
    $mysqli=new mysqli('localhost','admin','1234','secad_s21_team8');
    if ($mysqli ->connect_error) {
        printf("Database connection failed:%s\n", $mysqli->connect_error);
        exit();
        
    }

    if(isset($_POST["submit"])) {
        $FirstName=$_POST["First Name"];
        $LastName=$_POST["Last Name"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $prepared_sql="INSERT INTO users($FirstName, $LastName, $username, $password, $email, $phone) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt ->bind_param("sssi", $FirstName, $LastName, $username, $password, $email, $phone);
        $stmt ->close();
        
        echo "<script>alert('You have successfully registered');</script>";
        header("Refresh:0;url=form.php");
        die();
    } else {
        echo "<script> Please try again</script>";
        header("Refresh=0;url=Registration.php");
        die();
    }
    if(isset($_POST["empty"])) {
        echo "<script>alert('No inputs');</script>";
        header("Refresh:0;url=Registration.php")
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = test_input($_POST["First Name"]);
    $LastName = test_input($_POST["Last Name"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["Phone"]);
}
    
    function test_input($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    
    
?>

