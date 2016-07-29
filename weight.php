<?php include "converter.php" ?>
<?php
$orig_quantity = floatval($_GET["weight"]);
$orig_unit = $_GET["unit"];
$new_unit = $_GET["convert"];
$weight = new Weight($orig_quantity, $orig_unit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>
    <?php echo round($weight->convert($new_unit),1) ?>
  </p>  
</body>
</html>