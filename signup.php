<html>
    <head>
        <title>Login/Register</title>
        <link rel="stylesheet" href="styles/signup.css">
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
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
            <div class="mainbox">
                <center>
                    <img src="images/logo2.png">
                    <h1>SignUp</h1>
                    <form action="addusr.php" method="POST">
                        <div class="inputs"><input type="text" name="sname" placeholder="Enter your name"></div>
                        <div class="inputs"><input type="text" name="srgno" placeholder="Enter your Student ID"></div>
                        <div class="inputs"><input type="email" name="smail" placeholder="Enter your Email"></div>
                        <div class="inputs"><input type="password" name="spass" placeholder="Enter password"></div>
                        <div class="inputs"><input type="password" name="spass2" placeholder="Confirm your password"></div>
                        <div class="logs"><button type="submit">SignUp</button></div>
                        <div class="forg"><label><a href="login.php">Already have an account ? Login Here.</a></label></div>
                    </form>
                </center>
            </div>
        </div>
    </body>
</html>