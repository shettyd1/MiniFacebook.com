<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Change Password</title>
</head>
<body>
          <h1>Change password</h1>
        
<?php
  //some code here
  echo "Current time: " . date("Y-m-d h:i:sa")
?>
          <form action="changepassword.php" method="POST" class="form login">
                Username://<input type="text" class="text_field" name="username" /> <br>
               <?php echo htmlentities($_SESSION["username"]); ?>
               <br>
              <input type="hidden" name="nocsrftoken"  value="<?php echo $rand;?>"/>
                New password: <input type="password" class="text_field" name="newpassword" /> <br>
                <button class="button" type="submit">
                  Change password
                </button>
          </form>

</body>
</html>

