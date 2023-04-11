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
// Create the array
$cities = array("Kathmandu", "Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

// Print the values separated by commas
echo implode(", ", $cities);

// Sort the array
sort($cities);

// Print the values as an unordered list
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";

// Add new cities to the array
$cities = array_merge($cities, array("Los Angeles", "Calcutta", "Osaka", "Beijing"));

// Sort the array again
sort($cities);

// Print the sorted array as an unordered list
echo "<ul>";
foreach ($cities as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";
?>
</body>
</html>