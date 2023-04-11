<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> print prime numbers between 1 and 100.</title>
</head>
<body>
    <?php

// loop through each number between 1 and 100
for ($i = 1; $i <= 100; $i++) {
  // assume the number is prime until proven otherwise
  $is_prime = true;
  
  // check if the number is divisible by any integer between 2 and itself
  for ($j = 2; $j < $i; $j++) {
    if ($i % $j == 0) {
      // if the number is divisible by any integer, it's not prime
      $is_prime = false;
      break;
    }
  }
  
  // if the number is prime, print it out
  if ($is_prime && $i != 1) {
    echo $i . " ";
  }
}

    ?>
</body>
</html>