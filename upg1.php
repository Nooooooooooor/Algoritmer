<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift 1</title> <!-- flikens namn -->
</head>
<body>
<?php
function sum($x, $y) { // vi gör en funktion som får fram summan av $x, $y 
    $x + $y; // $x och $y adderas 
    return $x + $y; // den returnerar summan av $x och $y
}

echo "5 + 5 = " . sum(5, 5); // vi sberättar det som ska skrivas på hemsidan och vilka tal vi ska använda 
?>
</body>
</html>