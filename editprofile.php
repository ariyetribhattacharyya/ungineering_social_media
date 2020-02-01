<!DOCTYPE html>
<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="/social_media/css/editprofile.css"/>
        <link rel="stylesheet" href="/social_media/css/trying.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            
    </head>
    <?php
    
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT * FROM users WHERE id=1";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    
    ?>
    <body>
        
        <div class="line"></div>
        <div class="a">
            
            <div class="a1">
                <div class="z1"><img src="/social_media/img/a.png" alt=" " height=60px /></div>
                <div class="z2">
                    <div class="z21"><span style="color: rgb(240,76,77)">un</span>gineering</div>
                    <div class="z22">A <span style="color: rgb(240,76,77)">bit</span> of knowledge is good.A <span style="color: rgb(240,76,77)">byte</span> is better
                    </div>
                </div>
                
            </div>
            <div class="a2">
                <a href="abc">
                <div class="a21">Logout</div></a>
                <div class="a22">                       
                    <div class="un">My Dashboard</div>
                    <div class="un2"></div>                    
                </div>                
            </div>
        </div>
        <div class="b">
            <div class="c">
                <a href="xyz">
                <div class="c1">Profile</div></a>
                <div class="c2">
                    <div class="un3">Edit Profile</div>
                    <div class="un4"></div>
                </div>    
            </div>
            <form id ="editprofile" method="post" action="editprofile_submit.php">
                <div class="d">
                    <div class="d1">
                        <div class="d11">Name</div>
                        <div class="d12"><input type="text" name="name" style=" width: 100%; height : 35px" value="<?php echo $name ?>"></div>
                    </div>    
                    <div class="d2">
                        <div class="d21">Email</div>
                        <div class="d22"><input type="email" name="email" style=" width: 100%; height : 35px" value="<?php echo $email ?>"></div>
                    </div>                  
                    <div class="d3">
                        <div class="d31">Password</div>
                        <div class="d32"><input type="password" name="password" style=" width: 100%; height : 35px" value="<?php echo $password ?>"></div>
                    </div>
                    <div class="d4">
                        <div class="d41">College</div>
                        <div class="d42"><input type="text" name="college" style=" width: 100%; height : 35px"></div>
                    </div>    
                    <div class="d5">
                        <div class="d51">Phone Number</div>
                        <div class="d52">
                            <input type="text" name="phonenumber" style=" width: 100%; height : 35px">
                        </div>
                    </div>    
                    <div class="d6">
                        <div class="d61">
                            <input type="submit" name="submit" value="Update">
                        </div>
                    </div>
                </div>
            </form>    
        </div>
        
        <div class="full"> 
            <div class="footer">
                <div class="fooleft">
                    <div class="fltop">
                    Connect with us at
                    </div>
                    <div class="flbottom">
                        <div class="flbleft">
                            <a href="https://www.youtube.com/">
                                <img src="/social_media/img/youtube.png" height="27px"/>
                            </a>
                        </div>
                        <div class="flbright">
                            <a href="https://www.facebook.com/">
                                <img src="/social_media/img/facebook2.png" height="27px"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fooright">
                    <div class="frtop">
                        For any questions / doubts,write us at-
                    </div>
                    <div class="frbottom">
                        queries@ungineering.com
                    </div>
                </div>        
                            
            </div>    
        </div> 
        
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/editprofile.js"></script>
    </body>
</html>            
                            
                            
