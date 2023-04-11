<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function calculateRectangleArea($width, $height) {
    $area = $width * $height;
    return "A rectangle of length $width and width $height has an area of $area.";
  }

  echo calculateRectangleArea(4, 5); // Output: A rectangle of length 4 and width 5 has an area of 20.
  ?>
</body>
</html>
