<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1><u>PHP Funtions: </u></h1>
    <?php
    function add($a,$b)
    {
        return $a+$b;
    }
    function multiply($a,$b)
    {
        return $a*$b;
    }

    $x=10;
    $y=20;

    echo "Addition: ".(add($x,$y))."<br>";
    echo "Multiply: ".(multiply($x,$y))."<br>";

    ?>

</body>
</html>