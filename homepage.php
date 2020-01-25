<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql= "SELECT users.name,statuses.status,statuses.date,statuses.time FROM users INNER JOIN statuses on users.id=statuses.user_id";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br/>" . mysqli_error($conn));
    }
?>
    

<!DOCTYPE html>
<html>
    <head>
        <title>home page</title>
        <link rel="stylesheet"href="/social_media/css/homepage.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="a">
            <div class="a1a">
                <div class="a1aa">
                    <a href=<href="http://www.ungineering.com/">
                    <img src="logo.svg"height="80"width="80"alt=" "/>
                    </a>
                </div>
                <div class="a1ab">
                    <div class="a1aba">
                        <h2><span style="color:red">un</span><span>gineering</span></h2>
                    </div>
                    <div class="a1abb">
                        <h6>A <span style="color:red">bit</span> of knowledge is good.A <span style="color:red">byte</span> is better.</h6>
                    </div>
                </div>
            </div>
            <div class="a1b">
                <div class="a1ba">
                    <a class="loginsize"href="/login">  Login  </a>
                </div>
                    
                <div class="a1bb">
                    <a class="button"href="/newuser">New user</a>
                </div>
                    
                        
            </div>
    </div>
    
    <div class="b">
        <?php
            while ($row=mysqli_fetch_array($result)) {
            ?>
        <div class="b2a">
            <div class="b2aa">
               <?php echo $row['name'] . "<br/>";
               ?>
            </div>
            
            
            <div class="b2ab">
               <?php echo $row['status'] . "<br/>";
                ?>
            </div>
            <div class="b2ac">
                <p><i>Time:<?php 
                            echo $row['time'];
                            echo " | ";
                            echo $row['date'] . "<br/>";
                            ?> </i></p>  
                
            </div>
            
        </div>
        <?php
        }
        ?>
        
    </div>
      
        <div id="foot">
                <div class="foot1">
                    <div id="f1">
                        Connect with us at
                    </div>
                    <div id="yt">
                        <a href="https://www.youtube.com/">
                            <img src="youtube.png" height="30px"/>
                        </a>
                    </div>
                    <div id="fb">
                        <a href="https://www.facebook.com/">
                            <img src="facebook2.png" height="30px"/>
                        </a>
                    </div>
                </div>
                <div class="foot1">
                    <div id="f2">
                        <p>For any questions/doubts,write us at-</p>
                    </div>
                    <div id="f3">
                        <a href="link">queries@ungineering.com</a>
                    </div>
                </div>
            </div>
        </body>
</html>
       
