<?php include "converter.php" ?>
<?php
$orig_quantity = floatval($_GET["temp"]);
$orig_unit = $_GET["unit"];
$new_unit = $_GET["convert"];
$temp = new Temperature($orig_quantity, $orig_unit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    <?php echo $temp->convert($new_unit) ?>
  </p>  
</body>
</html>