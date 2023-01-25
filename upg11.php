<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift 11</title>
</head>
<body>
<?php
    $names = array("noor", "raluca", "ariana", "corina"); // skapade en varibal som heter "names" och använder array fsom en lista med namn som ska användas
    sort($names); // sorterar namnen
    foreach ($names as $key => $val) {
    echo "names[" . $key . "] = " . $val . "\n";
    }
?>
</body>
</html>