<!DOCTYPE html>
<html>
<head>
  <title>Favorite City</title>
</head>
<body>
  <?php
  if(isset($_POST['city'])){
    $city = $_POST['city'];
    echo "Your favorite city is $city.";
  }else{
    echo '
      <form action="" method="post">
        <label for="city">What is your favorite city?</label>
        <input type="text" name="city" id="city">
        <input type="submit" value="Submit">
      </form>
    ';
  }
  ?>
</body>
</html>
