<!DOCTYPE html>
<html>
<head>
<title>Share and motivation</title>
   <style type = "text/css">
   body{
   background-color: gray;
   }
   .a{
      background-color: pink;
      color: #8B413
      }
   .b{
      color: #0000FF;
      font-size: 50px;
     }
   input{
   width: 70px;
   height: 40px;
   margin-left: 50px;
   }
   .c{ 
   
   margin-left: 600px;
   
   }
   .d{
   width: 1000px auto;
   height: 300px;
   border: 5px white dotted;

   }
   .e{
   color: #4B0082;
   }
   </style>
   </head>
   <body>
   <div class ="a">
   <center>
   <h1> Share & Motivation</h1>
   </center>
   </div>
   <div class="b">Quotes</div>
   <form action="backend.php" method="POST">
   
   <textarea name="quotes"></textarea>
   <br>
   <input type="submit" name="submit" value="Share">
   </form>
   <div class="c">
   <form action="" method="GET">
   
   <select name="id">
   <?php
   
   $con = new mysqli("localhost", "root", "", "motivationapp");
   $result = $con->query("SELECT *FROM shares");
   while($r = $result->fetch_assoc())
   {
   ?>
   <option value="<?php echo $r['id'];?>"><?php echo $r['id'];?></option>

   <?php } ?>
   
   </select>
   <input type="submit" name="submit" value="Select"/>
   </form>
   </div>
   <br><br>
   <div class="d">
   <form action="" method="POST">
   <center>
   <h1>Quotes No:<?php
   $id = $_GET['id'];

   $con = new mysqli("localhost", "root", "", "motivationapp");
   $result = $con->query("SELECT *FROM shares WHERE id='$id'");
   if($r = $result->fetch_assoc())
   {
   echo $r['id'];

   }
    ?>
    </h1>
    <br>
    <hr>
    <div class="e">
    <h2> ~ <?php
    $id = $_GET['id'];
    $con = new mysqli("localhost", "root", "", "motivationapp");
   $result = $con->query("SELECT *FROM shares WHERE id ='$id'");

   if($r = $result->fetch_assoc())
   {
   echo $r['quotes'];

   }
    ?> . ~ </h2>
    </div>
    </center>
    </div>
    </body>
    </html>

