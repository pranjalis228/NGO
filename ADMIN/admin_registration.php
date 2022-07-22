<?php
include "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel ="stylesheet" type="text/css" href=style.css>

</head>
<body>
    <header>
        <div class="logo">
            <img src="images/3.jpg" alt="LOGO" height="100">
            <h1 Style="color:aquamarine;font-size:25px">NGO MANAGEMENT SYSTEM</h1>
            </div>
             <nav>
                 <ul>
                     <li><a href="index.php">HOME</a></li>
                     <li><a href ="admin_login.php">ADMIN-LOGIN</a></li>
                     <li><a href ="admin_registration.php">SIGN-UP</a></li>
                 </ul>
             </nav>
    </header>
    <section>
        <div class="reg_pic">
            <br>
            <div class="intro2">
              <br>
              <h1 style="text-align:center;font-size:25px">ADMIN-REGISTRATION</h1><br>
              <form name="Sign up" action="admin_registration.php" method="post">
                <div class="user_login">
                    <input type="text" name="Name" onkeypress="return(event.charCode >64 &&event.charCode<91)||(event.charCode>96&&event.charCode<123)" placeholder="Full Name" required=""> <br><br>
                    <input type="text" name="username"  placeholder="Username" required=""> <br><br>
                    <input type="password" name="password" placeholder="Password" required=""><br><br>
                    <input type="text" name="phone_number" placeholder="Email" required=""> <br><br>
                    <input type="text" name="email"  placeholder="Contact number" required=""> <br><br>
                    <input type="submit" name="submit" value="Register" style="color:black;width:80px;height:30px">
                </div>                     
              </form>

            </div>

        </div>

    </section>

    <?php

if(isset($_POST['submit']))
{
  $count=0;
  $sql="SELECT username from `admin`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['username']==$_POST['username'])
    {
     $count=$count+1;
    }
  }
  
if($count==0)
  
  {mysqli_query($db,"INSERT INTO `admin` VALUES('$_POST[a_id]','$_POST[Name]', '$_POST[username]', '$_POST[password]', '$_POST[phone_number]', '$_POST[email]');");
  ?>
    <script type="text/javascript">
     alert("Registration successful");
    </script>
  <?php
  }
else
  {

    ?>
      <script type="text/javascript">
        alert("Username not available.");
      </script>
    <?php

  }

}

?>

   
       
      

</body>
</html> 