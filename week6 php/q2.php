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

function is_palindrome($string) {
    // remove all non-alphanumeric characters and convert to lowercase
    $string = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));
    
    // compare the string to its reverse
    return $string == strrev($string);
  }
  
    $string1 = "madam";
    $string2 = "nurses run";
    $string3 = "hello world";
    
    if (is_palindrome($string1)) {
      echo "$string1 is a palindrome";
    } else {
      echo "$string1 is not a palindrome";
    }
    
    if (is_palindrome($string2)) {
      echo "$string2 is a palindrome";
    } else {
      echo "$string2 is not a palindrome";
    }
    
    if (is_palindrome($string3)) {
      echo "$string3 is a palindrome";
    } else {
      echo "$string3 is not a palindrome";
    }
?>    
</body>
</html>