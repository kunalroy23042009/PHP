<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relational,Ternary and Logical Ops</title>
</head>
<body>
    <h1><u>Ternary Operators: </u></h1><br>
    <?php
    $a=10;
    $b=20;
    echo "Variables a: ".($a).", b: ".($b)."<br><br>";
    echo "<u><b>Operations: </b></u><br><br>";
    echo "a==b: ".($a==$b? "True":"False")."<br>";
    echo "a>b: ".($a>$b? "True":"False")."<br>";
    echo "a<b: ".($a<$b? "True":"False")."<br>";
    echo "a>=b: ".($a>=$b? "True":"False")."<br>";
    echo "a<=b: ".($a<=$b? "True":"False")."<br>";
    echo "a!=b: ".($a!=$b? "True":"False")."<br>";


    echo "<h1><u>Relational Operators: </u></h1><br>";
    // var_dump() is a built-in PHP function used to inspect a variable.
    // It tells you what value the variable contains AND what data type it has.
    echo "<u><b>Operations: </b></u><br>";
    echo "With var_dump: <br>";
    echo "a>b: ";echo (var_dump($a>$b))."<br>";
    echo "a<b: ";echo (var_dump($a<$b))."<br>";
    echo "a>=b: ";echo (var_dump($a>=$b))."<br>";
    echo "a<=b: ";echo (var_dump($a<=$b))."<br>";
    echo "a==b: ";echo (var_dump($a==$b))."<br>";
    echo "a!=b: ";echo (var_dump($a!=$b))."<br><br>";
    echo "without var_dump: <br>";   //True:1.False:empty
    echo "a>b: ".($a>$b)."<br>";
    echo "a<b: ".($a<$b)."<br>";
    echo "a>=b: ".($a>=$b)."<br>";
    echo "a<b: ".($a<=$b)."<br>";
    echo "a==b: ".($a==$b)."<br>";
    echo "a!=b: ".($a!=$b)."<br>";

    echo "<h1><u>Logical Operators: </u></h1><br><br>";
    echo "With var_dump: <br>";
    echo "a&&b: ";echo (var_dump($a>5&&$b>10))."<br>";
    echo "a||b: ";echo (var_dump($a>10||$b>10))."<br>";
    echo "a!b: ";echo (var_dump(!$a==10))."<br><br>";

    echo "Without var_dump: <br>"; //True:1.False:empty
    echo "a&&b: ".($a>5&&$b>10)."<br>";
    echo "a||b: ".($a>10||$b>10)."<br>";
    echo "a!b: ".(!$a==10)."<br>";


    ?>

</body>
</html>