<?php
 include("connection.php");
 include("login.php");
 ?>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
    <?php 
      include ("navbar.php");
    ?>
    <h1 id = "log">Sign-in to Lumiere TV.</h1>
    <div id="form">
            <h1>Sign-in</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <center>
            <i class="fa fa-user fa-lg"></i>
                <input type="text" id="user" name="user" placeholder="Enter Username/Email" required></br></br>
                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" id="pass" name="pass" placeholder="Enter Password" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"><br><br>
                <p>Don't have an account?</p>
                <a href="signupindex.php">Sign up</a>
                </center>
            </form>
    </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
