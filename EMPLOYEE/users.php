<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE PAYMENT</title>
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
                     <li><a href ="employee_login.php">LOGIN</a></li>
                     <li><a href ="registration.php">SIGN-UP</a></li>
                 </ul>
             </nav>
    </header>
    <section>
        <div class="reg_pic">
            <br>
            <div class="intro2">
              <br>
              <h1 style="text-align:center;font-size:25px">ONLINE PAYMENT</h1><br>
              <form name="Payment" action="users.php" method="post">
                <div class="payment">
                    <input type="text" name="Name" placeholder="Full Name" required=""> <br><br>
                    <input type="text" name="phone_number"  placeholder="Contact number" required=""> <br><br>
                    <input type="text" name="amount" placeholder="Amount" required=""> <br><br>
                    <input type="text" name="receiptno" placeholder="RECEIPT NUMBER" required=""> <br><br>
                    <input type="submit" name="submit" value="Submit" style="color:black;width:80px;height:30px">
                </div>                     
              </form>

            </div>

        </div>

    </section>

    <?php

if(isset($_POST['submit']))
{
  $count=0;
  $sql="SELECT username from `users`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['receiptno']==$_POST['receiptno'])
    {
     $count=$count+1;
    }
  }
  
if($count==0)
  
  {mysqli_query($db,"INSERT INTO `users` VALUES('$_POST[u_id]','$_POST[Name]', '$_POST[phone_number]', '$_POST[amount]', '$_POST[receiptno]');");
  ?>
    <script type="text/javascript">
     alert("THANK YOU FOR BEING A PART OF IT...");
    </script>
  <?php
  }
else
  {

    ?>
      <script type="text/javascript">
        alert("RECEIPT NUMBER INVALID.");
      </script>
    <?php

  }

}

?>

   
       
      

</body>
</html> 