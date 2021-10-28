<!DOCTYPE html>
<html lang="en" id="miniFacebook" class> == $0
<head>
  <title>Login page </title>
</head>
<body>
          <h1>MiniFacebook</h1>

<?php
  //some code here
  echo "Current time: " . date("Y-m-d h:i:sa")
?>
<?php
          <form action="addnewUser.php" method="POST" class="form login">
                Username:<input type="text" class="text_field" name="username" required
          pattern=" ^[\w.-]+(.[\w-]+)*$"
          onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
          <span class="error">* <?php echo $usernameErr;?></span>
          <br>
                Password: <input type="password" class="text_field" name="password" required
                required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
               title="Please enter a valid password"
               onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
             <span class="error">* <?php echo $passwordErr;?></span>
             <br>
                if ($superuser1 == $superuser1 || $superuser2 == $superuser2 || $password1 == $password1 || $password2 == $password2) {
                    echo " Successful login";
                    $list = array("test1","test2","test3","superuser2");
                    list($a,$b,$c,$d) = $list;
                    echo "List of registered users, $a, $b, $c, $d";
                }
            }
                <button class="button" type="submit">
                  Login
                </button>
          </form>
?>
</body>
</html>

