<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
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
                     <li><a href ="Dbox.php">DONATIONBOX</a></li>
                     <li><a href ="donation.php">DONATION</a></li>
                 </ul>
             </nav>
    </header>
    <section>
        <div class="reg_pic">
            <br>
            <div class="intro2">
              <br>
              <h1 style="text-align:center;font-size:25px">ITEMS RECEIVED</h1><br>
              <form name="ITEMS RECEIVED" action="di.php" method="post">
                <div class="payment">
                    <input type="text" name="i_id" placeholder="ID" required=""> <br><br>
                    <input type="text" name="Name"  placeholder="Item Name" required=""> <br><br>
                    <input type="text" name="quantity" placeholder="Quantity" required=""> <br><br>
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
  $sql="SELECT Name from `donor_items`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['Name']==$_POST['Name'] && $row['i_id']==$POST['i_id'])
    {
     $count=$count+1;
    }
  }
  
if($count==0)
  
  {mysqli_query($db,"INSERT INTO `donor_items` VALUES('$_POST[i_id]','$_POST[Name]', '$_POST[quantity]');");
  ?>
    <script type="text/javascript">
     alert("Updated");
    </script>
  <?php
  }
else
  {

    ?>
      <script type="text/javascript">
        alert("ITEM PRESENT.");
      </script>
    <?php

  }

}

?>

   
       
      

</body>
</html> 