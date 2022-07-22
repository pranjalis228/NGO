<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGE PASSWORD</title>
    <link rel ="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
        
    
        </style>
<body>
    <div class='wrap'>
        <header>
            <div class="logo">
            <img src="images/3.jpg" alt="LOGO" height="120">
            <h1 style="color:whitesmoke">NGO MANAGMENT SYSTEM</h1>
            </div>
            <nav>
                 <ul>
                    <li><a href="index.php">HOME</a></li>
           
                    </ul>
              </nav>
        
 
</head>
<body>
    <div class="wrapper">
        <div style="text-align:center">
        <h1 style="text-align:center;font-size:35px">NGO MANAGEMENT SYSTEM</h1><br><br>
        <h2 style="text-align:center;font-size:35px">Change Password</h2>
<br> <br> <br> <br>
    </div>
    <div style="padding-left:510px">
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required=""><br><br>
        <input type="text" name="email" placeholder="EMAIL" required=""><br><br>
        
        <input type="text" name="password" placeholder="NEW PASSWORD" required=""><br><br>
        <BUTTON type="submit" name="submit">CHANGE</BUTTON>
    </form>
    </div>
    <?php
    if(isset($_post['submit]']))
    {
        if(mysqli_query($db,"UPDATE `admin` SET `password`='$_POST[password]' WHERE username='$_POST[username]' AND EMAIL='$_POST[email]';"))
        {
            ?> 
            <script type="text/javascript">
                alert("Psssword changed");
                </script>
                
                <?php

        }
    }
    ?></div>
</body>
</html>