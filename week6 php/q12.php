<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rectangle Area</title>
</head>
<body>
  <h1>Rectangle Area Calculator</h1>
  <form method="post">
    <label>Please enter the values of the length and width of your rectangle:</label><br>
    <input type="text" name="length" placeholder="Length"><br>
    <input type="text" name="width" placeholder="Width"><br>
    <button type="submit">Calculate Area</button>
  </form>

  <?php
  function calculateRectangleArea($width, $height) {
    $area = $width * $height;
    return "A rectangle of length $width and width $height has an area of $area.";
  }

  if (isset($_POST['length']) && isset($_POST['width'])) {
    $length = $_POST['length'];
    $width = $_POST['width'];
    echo calculateRectangleArea($length, $width);
  }
  ?>
</body>
</html>
