<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursion</title>
</head>
<body>
    <h1><u>Recursion in PHP</u></h1><br><br>
    <?php
    echo "<u><b>Factorial of a number:</u></b><br> ";

    function factorial($n)
    {
        if ($n==0 || $n==1)
            {
                return 1;
            }
        else
            {
                return $n*factorial($n-1);
            }
    }

    $a=5;
    echo "Recursion of ".($a).": ".(factorial($a));
    ?>
</body>
</html>