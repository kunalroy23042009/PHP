<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inc-dec Opr</title>
</head>
<body>
    <h1><u>Increement-Decreement Operators:</u></h1><br>

    // VERY IMPORTANT RULE TO REMEMBER: //
    // POST → Use the value FIRST, then change it.
    // PRE → Change the value FIRST, then use it.

    <?php
    $a=10;
    $b=10;
    echo "Variable a: ".($a)."<br><br>";
    echo "Post-Increement: ".($a++)."<br>";
    echo "Value after Post_Increement: ".($a)."<br><br>";

    echo "Pre-Increement: ".(++$a)."<br>";
    echo "Value after pre-increement: ".($a)."<br><br>";

    echo "Variable b: ".($b)."<br><br>";
    echo "Post-Decreement: ".($b--)."<br>";
    echo "Value after post-Decreement: ".($b)."<br><br>";

    echo "Pre-Decreement: ".(--$b)."<br>";
    echo "Value after Pre Decreement: ".($b);
    ?>
    
</body>
</html>