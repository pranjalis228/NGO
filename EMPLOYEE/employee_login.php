<?php 
include "connect.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel ="stylesheet" type="text/css" href=style.css>

</head>
<body>
    <header>
        <div class="logo">
            <img src="images/3.jpg" alt="LOGO" height="100">
            <h1 style="color:whitesmoke;font-size:25px">NGO MANAGEMENT SYSTEM</h1>
            </div>
             <nav>
                 <ul>
                     <li><a href="index.php">HOME</a></li>
                     <li><a href ="users.php">DONATE</a></li>
                     <li><a href ="employee_login.php">LOGIN</a></li>
                     <li><a href ="registration.php">SIGN-UP</a></li>
                 </ul>
             </nav>
    </header>
    <section>
        <div class="login_pic">
            <br>
            <div class="intro1">
              <br>
              <h1 style="text-align:center;font-size:25px">USER LOGIN</h1><br>
              <form name="Login" action="employee_login.php" method="post">
                  <div class="user_login">
                  <input type="text" name="username" placeholder="Username" required=""> <br><br>
                  <input type="password" name="password" placeholder="Password" required=""><br><br>
                  <input type="submit" name="submit" value="Login" style="color:black;width:80px;height:30px">
              </form>
              <p>
                  <a style="color: black" href ="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <a style="color:black"href="registration.php">SIGN UP</a>
              </p>
            </div></div>

        </div>

    </section>

       <?php
        if(isset($_POST['submit']))
        {
            $count=0;
            $sql=("SELECT * FROM employee WHERE username ='$_POST[username]' && password='$_POST[password]';" );
            $res=mysqli_query($db,$sql);
            $count=mysqli_num_rows($res);

            if ($count==0)
            {
                ?>
                <script type="text/javascript">
                    alert("Username or password is wrong.");
                </script>
                <?php
            }
            else
            {
                $_SESSION['login_user']= $_POST['username'];
                ?>
                  <script type ="text/javascript">
                  window.location ="index1.php"
                  </script>
                <?php
            }
        }
        ?>
     
     
</body>
</html>