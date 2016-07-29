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
    <select name="unit" id="">
      <option value="F">F</option>
      <option value="C">C</option>
    </select>
    <select name="convert" id="">
      <option value="F">F</option>
      <option value="C">C</option>
    </select>
    <input type="submit" value="Submit">
  </form>

  <h2>Distance</h2>
  <form action="distance.php">
    <input type="text" name="dist">
    <select name="unit" id="">
      <option value="km">kilometers</option>
      <option value="mi">miles</option>
    </select>
    <select name="convert" id="">
      <option value="km">kilometers</option>
      <option value="mi">miles</option>
    </select>
    <input type="submit" value="Submit">
  </form>

</body>
</html>