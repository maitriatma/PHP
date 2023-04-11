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

$jsonData = '[{
    "name": "John Care",
    "age": "15",
    "school": "Ahlcon Public school"
  },
  {
    "name": "Smith Soy",
    "age": "16",
    "school": "St. Marie school"
  },
  {
    "name": "Charle Rena",
    "age": "16",
    "school": "St. Columba school"
  }
]';

// Decode JSON data into an array
$data = json_decode($jsonData, true);

// Output HTML table
echo '<table>';
echo '<tr><th>Name</th><th>Age</th><th>School</th></tr>';
foreach ($data as $row) {
    echo '<tr>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['age'] . '</td>';
    echo '<td>' . $row['school'] . '</td>';
    echo '</tr>';
}
echo '</table>';

?>

</body>
</html>