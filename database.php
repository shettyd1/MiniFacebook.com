<?php
    $server_name = "localhost";
    $username = "username";
    $password = "password";
    
    $conn = new mysqli($server_name, $username, $password);
    
    if ($conn ->connect_error) {
        die("Connection failed: " . $conn ->connect_error);
    }
    echo "Connected successfully";


$sql = "CREATE DATABASE secad_s21_team8";
if ($conn ->query($sql) == TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " .$conn ->error;
}
   
CREATE TABLE users (
    username VARCHAR(30) NOT NULL PRIMARY KEY,
    password  VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
    
$stmt = $conn ->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt ->BIND_PARAM("sss", $username, $password);
    
$stmt = $conn ->prepare("INSERT INTO users (superuser1, superuser2, password1,password2) VALUES (?,?,?,?");
$stmt ->BIND_PARAM("sss", $superuser1, $superuser2, $password1, $password2);

    $username = "test1";
    $password = "abc";
    $conn ->close();
    stmt ->execute();
    
    $username = "test2";
    $password = "def";
    $conn ->close();
    stmt ->execute();
    
    $username = "test3";
    $password = "ghi";
    $conn ->close();
    stmt ->execute();
    
    echo "New records created successfully";
    
    $stmt ->close();
    $prepared_sql = "SELECT username, password FROM users";
    $result = $conn ->query($sql_select);
    if(!stmt = $mysqli ->prepare($prepared_sql)) {
        if (!$stmt ->execute) {
            while ($stmt ->fetch()) {
                echo "htmlentities($title) . ", " . htmlentities($content) . ", ".htmlentities($date) . "<br>";
            }
        } else {
            if (!stmt ->bind_result($title, $content, $date)) {
                echo "binding failed";
            }
            
        }
        
    }
    
"SELECT * from users WHERE superuser1=1 and username = ? and password=password(?)";
"SELECT * from users WHERE superuser2=2 and username = ? and password=password(?)";
    $sql_delete = "DELETE FROM users WHERE username = "" ";
    if ($conn ->query($sql_delete) == TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn ->error;
    }
    $conn ->close();
?>

