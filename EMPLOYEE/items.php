<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate ITEMS</title>
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
             <nav>
                 <ul>
                     <li><a href="index.php">HOME</a></li>
                     <li><a href="di.php">UPDATEITEMS</a><li> &nbsp;
                     
                     <li><a href ="logout.php">LOGOUT</a><li>
                 </ul>
             </nav>
        </header>
        <section>
        <br>
          <header>
              <br>
              <h1 style="text-align:centre;font-size:40px">ITEMS DONATED</h1><br>
              <?php
              $res=mysqli_query($db,"SELECT * FROM `donor_items`;");

              echo "<table class='table table-bordered table-hover'>";
              echo "<tr style='background-color:white;'>";
                 //TABLE HEADER
                 echo"<th>"; echo"Id";echo"</th>"; 
                 echo"<th>"; echo"Name";echo"</th>";
                 echo"<th>"; echo"Quantity";echo"</th>";
             echo"</tr>";

             while($row=mysqli_fetch_assoc($res))
             {
                 echo"<tr>";
                 echo"<td>";echo $row['i_id'];echo"</td>";
                 echo"<td>";echo $row['Name'];echo"</td>";
                 echo"<td>";echo $row['quantity'];echo"</td>";
               
                 echo"</tr>";
             }
             echo "</table>"
              ?>

    
</header>

        </section>
    
</body>
</html>