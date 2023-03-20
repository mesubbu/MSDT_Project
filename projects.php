<!DOCTYPE html>
<html>
    <head>
        <title>SRKR Resources</title>
        <link rel="stylesheet" href="projects.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="">Faculty</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="">Contact us</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="">|</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <center>
            <?php
                include 'login.php'; 
                <h1>echo "Welcome ".$respass['sname']; </h1> 
            ?>
            </center>
        </div>
    </body>
</html>