<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift 2</title> <!-- flikens namn -->
</head>
<body>
<?php
function addfive(&$value) { // man gör en funktion som heter "addfive" och jag har lagt in value
    $value += 5; // man beskriver hur mycker valuen är
}
$num = 2; // talet jag har valt att adderas med 5
addfive($num); // funktion
echo($num); // funktion
?>
</body>
</html>