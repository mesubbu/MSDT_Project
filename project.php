<?php 
    session_start();
?>
<html>
    <head>
        <title>SRKR Resources</title>
        <link rel="stylesheet" href="styles/project.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="project.php">Projects</a></li>
                    <li><a href="">Contact us</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="">|</a></li>
                    <li><a href="login.php">
                        <?php if(isset($_SESSION['id'])){ echo "Logout";}
                        else{ echo "Login";};
                        ?>
                    </a></li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <center>
                <?php 
                if (isset($_SESSION['id'])){ 
                    echo "<h1>Welcome, ".$_SESSION['name']."</h1>
                    <div class='logs'><a href='search.php'><button type='button'>Search project</button></a></div>
                    <div class='logs'><a href='upload.php'><button type='button'>Upload project</button></a></div>"; 
                }
                else { 
                    echo "<h1>Please login to access the resources.</h1>";
                };
                ?>
            </center>
        </div>
    </body>
</html>