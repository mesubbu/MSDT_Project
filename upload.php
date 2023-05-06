<?php 
    session_start();
?>
<html>
    <head>
        <title>SRKR Resources</title>
        <link rel="stylesheet" href="styles/upload.css">
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
                    <li><a href="contactus.php">Contact us</a></li>
                    <li><a href="profile.php">Profile</a></li>
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
            <div class="mainbox">
                    <h1>Upload your Project</h1>
                    <form action="uploadproject.php" method="POST" enctype="multipart/form-data">
                        <div class="pteam">
                            <div class="ptit">
                                <label>Project Title</label><br>
                                <input type="text" name="ptitle" placeholder="Enter your project title">
                            </div>
                            <div class="std">
                                <label>Project Mentor details:</label><br>
                                <input type="text" name="pmname" placeholder="Name">
                                <input type="text" name="pmid" placeholder="Mentor ID">
                                <input type="text" name="pmmobile" placeholder="Mobile number">
                                <select name="pmbranch">
                                    <option value="CSE">CSE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="IT">IT</option>
                                    <option value="MECH">MECH</option>
                                    <option value="EEE">EEE</option>
                                </select>
                            </div>
                            <div class="std">
                                <label>Project Team Leader details:</label><br>
                                <input type="text" name="tlname" placeholder="Name">
                                <input type="text" name="tlid" placeholder="Student ID">
                                <input type="text" name="tlmobile" placeholder="Mobile number">
                                <select name="tlbranch" id="tlbrnch">
                                    <option value="CSE">CSE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="IT">IT</option>
                                    <option value="MECH">MECH</option>
                                    <option value="EEE">EEE</option>
                                </select>
                            </div>
                            <div class="finfo">
                                <label>Project Description</labels><br>
                                <textarea name="pdesc" rows="5" cols="50" placeholder="Enter your project description in 150 words"></textarea><br>
                                
                                <label>Project files</label><br>
                                <div class="fileup"><input type="file" name="prfile"></div>
                                <div class="ackw">
                                <input type="checkbox" id="ack" name="stdack" value="agreed">
                                <label for="ack">I hereby declare that the above details are true.</label>
                                </div><br>
                                <div class="logs"><button type="submit">Upload Project</button></div>
                        </div>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>