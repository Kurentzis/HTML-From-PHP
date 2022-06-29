<?php


   $field1 = $_POST['confirm'];

   if (isset($_POST['confirm'])) {
    if ($_POST['confirm'] == 'Confirm') {
        $text = 'Thank you. You just confirmed your purchase!';
    }
    else if ($_POST['confirm'] == 'Cancel') {
        $text = 'You canceled your purchase!';
    } 
}
   
?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Black&Yellow</title>
  <link rel="stylesheet" href="assign08.css">

  <body>
  <h1>Black<span id="heading">&Yellow</span></h1>
   
<div>
<?php echo($text)?>
</div>


</body>
</html>