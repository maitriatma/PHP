<!DOCTYPE html>
<html>
<head>
  <title>Laughing Poem</title>
</head>
<body>
  <?php
  if(isset($_POST['day'])){
    $day = $_POST['day'];
    if($day == 'Monday'){
      echo "Laugh on Monday, laugh for danger.";
    }elseif($day == 'Tuesday'){
      echo "Laugh on Tuesday, smile at a stranger.";
    }elseif($day == 'Wednesday'){
      echo "Laugh on Wednesday, laugh for a letter.";
    }elseif($day == 'Thursday'){
      echo "Laugh on Thursday, something better.";
    }elseif($day == 'Friday'){
      echo "Laugh on Friday, laugh for sorrow.";
    }elseif($day == 'Saturday'){
      echo "Laugh on Saturday, joy tomorrow.";
    }elseif($day == 'Sunday'){
      echo "Sunday is not included in the poem.";
    }else{
      echo "Invalid input.";
    }
  }else{
    echo '
      <form action="" method="post">
        <label for="day">Enter a day of the week:</label>
        <input type="text" name="day" id="day">
        <input type="submit" value="Submit">
      </form>
    ';
  }
  ?>
</body>
</html>
