<?php
    session_start();
?>
<html>
    <head>
        <title>SRKR Resources</title>
        <link rel="stylesheet" href="styles/index.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Faculty</a></li>
                    <li><a href="project.php">Projects</a></li>
                    <li><a href="">Contact us</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="">|</a></li>
                    <li><a href="login.php">
                        <?php if($_SESSION['id']>0){ echo "Logout";}
                        else{ echo "Login";};
                        ?>
                    </a></li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <center>
                <h1>SRKR Online Resources</h1>
                <p>Welcome to the SRKR Online Resources website where you can get all Resources necessary for your journey at SRKR. Happy Learning.</p>
            </center>
        </div>
    </body>
</html>