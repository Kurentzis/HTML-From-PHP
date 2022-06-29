<?php


   $field1 = $_POST['first_name']; 
   $field2 = $_POST['last_name'];
   $field3 = $_POST['address'];
   $field4 = $_POST['phone'];
   $field5 = $_POST['item_01'];
   $field6 = $_POST['item_02'];
   $field7 = $_POST['item_03'];
   $field8 = $_POST['item_04'];

   $field10 = $_POST['card'];
   $field11 = $_POST['credit_card'];
   $field12 = $_POST['exp_date'];
?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Black&Yellow</title>
  <link rel="stylesheet" href="assign08.css">
  <body>
  <h1>Black<span id="heading">&Yellow</span></h1>
    <h2 id="heading">Order details </h2><br />
      <?php
      $result = ($field5*100) +($field6*150)+($field7*500)+($field8*1000);
  
         print "<span id='heading'> First Name: </span>$field1<br />";
         print "<span id='heading'>Last Name: </span>$field2<br />";
         print "<span id='heading'>Address: </span>$field3<br />";
         print "<span id='heading'>Phone number: </span>$field4<br />";
         print "<span id='heading'>IPhone(100$): </span>$field5<br />";
         print "<span id='heading'>Tablet(150$): </span>$field6<br />";
         print "<span id='heading'>Laptop(500$): </span>$field7<br />";
         print "<span id='heading'>Our gratitude(1000$): </span>$field8<br />";
         print "<span id='heading'>Total cost: </span>$result$<br />";
         print "<h4 id='heading'> Payment details</h4>";
         print "<span id='heading'>Credit card: </span>$field10<br />";
         print "<span id='heading'>Credit card number:</span> $field11<br />";
         print "<span id='heading'>Expiration date: </span>$field12<br /><br /><br />";
      ?>  
   <form action="assign11_a.php" method="POST">
   <button type="submit" name="confirm" value="Confirm">Confirm</button>
   <button type="submit" name="confirm" value="Cancel">Cancel</button>
   </form>

   

 
 
</body>
</html>

