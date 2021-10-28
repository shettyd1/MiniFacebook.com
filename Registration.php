<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
<meta property="og:locale" content="en_US"> == $0
<title idc="pageTitle"> MiniFacebook - SignUp </title> == $0
.error {color: #FF0000;}
    </style>
    </head>
<style nonce>
<script nonce></script>
<noscript><meta http-equiv="refresh" content="0; URL=/?_fb_noscript=1"/></noscript>
    <script type="application/ld+json" nonce></script>
    <body>
<h1> MiniFacebook </h1>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    FirstName: <input type="text" name="FirstName" value="<?php echo $FirstName;?" required pattern=" ^[\w.-]+(.[\w-]+)*$"
        title="Please enter a valid FirstName"
        placeholder="Your FirstName"
        onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
            <span class="error">* <?php echo $FirstNameErr;?></span>
           <br>
    LastName: <input type="text" name="LastName" value="<?php echo $LastName;?>"
     required pattern=" ^[\w.-]+(.[\w-]+)*$"
        title="Please enter a valid LastName"
        placeholder="Your LastName"
        onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
            <span class="error">* <?php echo $LastNameErr;?></span>
           <br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>" required
    pattern=" ^[\w.-]+(.[\w-]+)*$"
        title="Please enter a valid email"
        placeholder="Your email"
        onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
            <span class="error">* <?php echo $emailErr;?></span>
           <br>
    Phone: <input type="text" name="email" value="<?php echo $email;?>" required
    pattern="^[1-9]\d{2}-\d{3}-\d{4}"
    title="Phone number"
    placeholder="enter a valid phone number"
    onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
    <span class="error">* <?php echo $PhoneNumberErr;?></span>
   <br>
    username: <input type="text" name="username" value="<?php echo $username;?>" required pattern=" ^[\w.-]+(.[\w-]+)*$"
    title="Choose a username"
    placeholder="Your username"
    onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
        <span class="error">* <?php echo $usernameErr;?></span>
       <br>
    Password: <input type="text" name="Password" value="<?php echo $Password;?>"
     required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
    title="Please enter a valid password"
    placeholder="Your password"
    onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
          <span class="error">* <?php echo $passwordErr;?></span>
           <br>
ConfirmPassword: <input type="text" name="ConfirmPassword" value="<?php echo $ConfirmPassword;?>" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$ "
    title="please type again"
    placeholder="Your Confirmed Password"
    onchange="this.setCustomValidity(this.validity.patternMismatch?this.title: '');"/>
        <span class="error">* <?php echo $confirmpasswordErr;?></span>
         <br>
    form action="addnewUser.php" method="POST" class="Sign Up">
    <input type="submit" name="Sign Up" value="Sign Up" id="btnSign Up" button class="btn btn-primary">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css'
        media="screen" />
    
    <?php
    echo $FirstName;
    echo "<br>";
    echo $LastName;
    echo "<br>";
    echo $email;
    echo "<br>"
    echo $username
    echo "<br>";
    echo $Password;
    echo "<br>";
    echo $ConfirmPassword;
    echo "<br>";
    </button>
    </form>
<script type="text">
    window.onload = function () {
        var Password = document.getElementById("Password");
        var ConfirmPassword = document = document.getElementById("ConfirmPassword");
        Password.onchange = Confirm_Password;
        ConfirmPassword.onkeyup = Confirm_Password;
         function Confirm_Password() {
             ConfirmPassword.setCustomValidity("");
              if (Password.value !=ConfirmPassword.value) {
                  ConfirmPassword.setCustomValidity("Passwords do not match");
              }
         }
    }
    </script>
    </body>
    </html>
    
    
    
    

