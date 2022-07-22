<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO MANAGEMENT SYSTEM</title>
    <link rel ="stylesheet" type="text/css" href=style.css>
</head>
<style type="text/css">

</style>
<body>
    <div class='wrap'>
        <header>
            <div class="logo">
            <img src="images/3.jpg" alt="LOGO" height="120">
            <h1 style="color:whitesmoke">NGO MANAGMENT SYSTEM</h1>
            </div>
            <?php
            if(isset($_SESSION['login_user']))
           {?>
           <div style="color:white;padding:5px">
               <?php
               echo "WELCOME  ".$_SESSION['login_user'];
               ?>
           </div>
              <nav>
                 <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href ="donation.php">DONATIONS</a></li>
                    <li><a href ="dbox.php">DONATIONBOX</a><li> &nbsp;
                    <li><a href = "items.php">ITEMS</a><li> &nbsp;
                    <li><a href ="employee.php">EMPLOYEE-INFORMATION</a><li> &nbsp;
                        
                    <li><a href ="logout.php">LOGOUT</a><li>&nbsp;
                    
                        
                
                 </ul>
              </nav>
              <?php
           }
           ?>
              
        </header>
        <section>
        <div class="home_pic">
          <br>
            <div class="intro">
              <br>
              <h1 style="text-align:centre;font-size:60px">DONATE!!!</h1><br>
              <h2 style="font-size:35px">Even small initiatives can help save a thousand of lives :)</h2>
            </div>
        </div>
        </section>
        <footer>
            <p style="text-align:center;">
                CONTACT US:<br>
                Email- ngo24@gmail.com <br>
                Mobile number- +91784568955 <br>
                Facebook-NGO24<br>
                Twitter-ngo24wu<br>
            </p>
    </div>
</footer>
</body>
</html>