<?php
    session_start();
    if (isset($_SESSION['id']))
    {
        session_destroy();
    }
?>
<html>
    <head>
        <title>Login/Register</title>
        <link rel="stylesheet" href="styles/login.css">
    </head>
    <body>
        <div class="mainpage">
            <nav>
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="project.php">Projects</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="">|</a></li>
                        <li><a href="signup.php">SignUp</a></li>
                    </ul>
                </div>
            </nav>
            <div class="mainbox">
                <center>
                    <img src="images/logo2.png">
                    <h1>Login</h1>
                    <form action="auth.php" method="POST">
                        <div class="inputs"><input type="email" name="smail" placeholder="Enter your Email"></div><br>
                        <div class="inputs"><input type="password" name="spass" placeholder="Enter password"><br></div>
                        <div class="forg"><label><a href="">Forgot your password ?</a></label></div><br>
                        <div class="logs"><button type="submit">Login</button></div>
                        <div class="forg"><label><a href="signup.php">Don't have an account? Register Here.</a></label></div>
                    </form>
                </center>
            </div>
        </div>
    </body>
</html>