<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1>3.Operators</h1>
        
    <?php
        $a = 10;
        $b = 3;

        echo "<h2>Arithmetic Operators</h2>";
        echo "Addition: " . ($a + $b) . "<br>";
        echo "Subtraction: " . ($a - $b) . "<br>";
        echo "Multiplication: " . ($a * $b) . "<br>";
        echo "Division: " . ($a / $b) . "<br>";
        echo "Modulus: " . ($a % $b) . "<br>";
        echo "Exponentiation: " . ($a ** $b) . "<br>";
        echo "Integer division: " . intdiv($a, $b) . "<br>";

        echo "<h2>Assignment Operators</h2>";
        $value = 10;
        $value += 5;
        echo "After += 5: $value<br>";
        $value -= 2;
        echo "After -= 2: $value<br>";
        $value *= 2;
        echo "After *= 2: $value<br>";
        $value /= 2;
        echo "After /= 2: $value<br>";
        $value %= 4;
        echo "After %= 4: $value<br>";

        echo "<h2>Comparison Operators</h2>";
        var_dump($a == "10");
        echo " - Equal<br>";
        var_dump($a === "10");
        echo " - Identical<br>";
        var_dump($a != $b);
        echo " - Not equal<br>";
        var_dump($a !== "10");
        echo " - Not identical<br>";
        var_dump($a < $b);
        echo " - Less than<br>";
        var_dump($a > $b);
        echo " - Greater than<br>";
        var_dump($a <= $b);
        echo " - Less than or equal<br>";
        var_dump($a >= $b);
        echo " - Greater than or equal<br>";
        var_dump($a <=> $b);
        echo " - Spaceship<br>";

        echo "<h2>Increment and Decrement Operators</h2>";
        $count = 1;
        echo "Pre-increment: " . (++$count) . "<br>";
        echo "Post-increment: " . ($count++) . "<br>";
        echo "Pre-decrement: " . (--$count) . "<br>";
        echo "Post-decrement: " . ($count--) . "<br>";

        echo "<h2>Logical Operators</h2>";
        var_dump(true && false);
        echo " - AND (&&)<br>";
        var_dump(true || false);
        echo " - OR (||)<br>";
        var_dump(!true);
        echo " - NOT (!)<br>";
        var_dump(true xor false);
        echo " - XOR<br>";

        echo "<h2>String Operators</h2>";
        $firstName = "Ada";
        $lastName = "Lovelace";
        echo "Concatenation: " . $firstName . " " . $lastName . "<br>";
        $message = "Hello";
        $message .= " PHP";
        echo "Concatenation assignment: $message<br>";

        echo "<h2>Array Operators</h2>";
        $firstArray = ["a" => 1, "b" => 2];
        $secondArray = ["b" => 3, "c" => 4];
        echo "Union (+): ";
        print_r($firstArray + $secondArray);
        echo "<br>Equal (==): ";
        var_dump($firstArray == ["b" => 2, "a" => 1]);
        echo "Identical (===): ";
        var_dump($firstArray === ["a" => 1, "b" => 2]);
        echo "Not equal (!=): ";
        var_dump($firstArray != $secondArray);

        echo "<h2>Conditional Operators</h2>";
        $age = 20;
        echo "Ternary: " . ($age >= 18 ? "Adult" : "Minor") . "<br>";
        $nickname = "";
        echo "Null coalescing: " . ($nickname ?: "Guest") . "<br>";
        $username = null;
        echo "Null coalescing operator: " . ($username ?? "Anonymous") . "<br>";

        echo "<h2>Bitwise Operators</h2>";
        echo "AND (&): " . (5 & 3) . "<br>";
        echo "OR (|): " . (5 | 3) . "<br>";
        echo "XOR (^): " . (5 ^ 3) . "<br>";
        echo "NOT (~): " . (~5) . "<br>";
        echo "Left shift (<<): " . (5 << 1) . "<br>";
        echo "Right shift (>>): " . (5 >> 1) . "<br>";

        echo "<h2>Type Operator</h2>";
        $items = ["PHP", "HTML"];
        var_dump($items instanceof ArrayObject);
        echo " - instanceof ArrayObject<br>";
    ?>
</body>
</html>