<?php 
    session_start();
    include 'dbconn.php';
    if (isset($_SESSION['pid']))
    {
        echo "Hi";
    }
    else
    {
        $_SESSION['prid']=1;
    }
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
        <?php
            $sql="select * from projects where pid=".$_SESSION['prid'].";";
            $presults=mysqli_query($conn,$sql);
            $pres=mysqli_fetch_assoc($presults);
        ?>
        <div class="content">
            <div class="mainbox">
                    <h1>Project Details</h1>
                    <div class="formbox">
                        <div class="ptit">
                            <label>Project Title</label><br>
                            <h3><?php echo $pres['ptitle']; ?></h3>
                        </div>
                        <div class="details">
                            <table>
                                <tr>
                                    <th>Mentor Name</th>
                                    <th>Mentor ID</th>
                                    <th>Mentor Mobile No.</th>
                                    <th>Mentor Branch</th>
                                </tr>
                                <tr>
                                    <td><?php echo $pres['pmname']; ?></td>
                                    <td><?php echo $pres['pmid']; ?></td>
                                    <td><?php echo $pres['pmmobile']; ?></td>
                                    <td><?php echo $pres['pmbranch']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="details">
                            <table>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    <th>Student Mobile No.</th>
                                    <th>Student Branch</th>
                                </tr>
                                <tr>
                                    <td><?php echo $pres['stdname']; ?></td>
                                    <td><?php echo $pres['stdid']; ?></td>
                                    <td><?php echo $pres['stdmobile']; ?></td>
                                    <td><?php echo $pres['stdbranch']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="prdetails">
                            <label>Project Description</label>
                            <p><?php echo $pres['pdesc']; ?></p>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>