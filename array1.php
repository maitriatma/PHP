<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>four</h1>
    <?php
        function arrayMult(){
            $array = array(1,2,3,4,5);
            $newArr = array();
            foreach($array as $x){
                $result = $x * 10;
                array_push($newArr, $result);
            }
            print_r($newArr);
        }
        
      arrayMult();
      
    ?>
  </body>
</html>


