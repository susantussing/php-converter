<?php include "converter.php" ?>
<?php
$orig_quantity = floatval($_GET["dist"]);
$orig_unit = $_GET["unit"];
$new_unit = $_GET["convert"];
$dist = new Distance($orig_quantity, $orig_unit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php echo round($dist->convert($new_unit),1) ?>
</body>
</html>