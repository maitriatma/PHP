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
// Define an associative array
$a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');

// Loop through the associative array using foreach()
foreach ($a as $key => $value) {
  echo "The key is " . $key . " and the value is " . $value . "<br>";
}
?>

</body>
</html>