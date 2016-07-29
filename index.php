<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Unit Converter</title>
</head>
<body>
  <h1>PHP Unit Converters</h1>
  <h2>Temperature</h2>
  <form action="temperature.php">
    <input type="text" name="temp">
    <select name="unit">
      <option value="F">F</option>
      <option value="C">C</option>
    </select>
    in
    <select name="convert">
      <option value="F">F</option>
      <option value="C">C</option>
    </select>
    <input type="submit" value="Submit">
  </form>

  <h2>Distance</h2>
  <form action="distance.php">
    <input type="text" name="dist">
    <select name="unit">
      <option value="km">kilometers</option>
      <option value="mi">miles</option>
    </select>
    in
    <select name="convert">
      <option value="km">kilometers</option>
      <option value="mi">miles</option>
    </select>
    <input type="submit" value="Submit">
  </form>

  <h2>Weight</h2>
  <form action="weight.php">
    <input type="text" name="weight">
    <select name="unit">
      <option value="lb">pounds</option>
      <option value="st">stone</option>
      <option value="kg">kilograms</option>
    </select>
    in
    <select name="convert">
    <option value="lb">pounds</option>
    <option value="st">stone</option>
    <option value="kg">kilograms</option>
    </select>
    <input type="submit" value="Submit">
  </form>
</body>
</html>