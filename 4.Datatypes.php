<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes</title>
</head>
<body>
    <h1>04. Datatypes</h1>
    <?php
        // Integer: a whole number without a decimal point.
        $integerValue = 55;
        echo "Integer: ";
        var_dump($integerValue);

        // Float: a number with a decimal point.
        $floatValue = 10.5;
        echo "Float: ";
        var_dump($floatValue);

        // String: a sequence of characters inside quotes.
        $stringValue = "This is a string";
        echo "String: ";
        var_dump($stringValue);

        // Boolean: can contain either true or false.
        $booleanValue = true;
        echo "Boolean: ";
        var_dump($booleanValue);

        // Array: stores multiple values in one variable.
        $arrayValue = ["PHP", "HTML", "CSS"];
        echo "Array: ";
        var_dump($arrayValue);

        // Object: an instance created from a class.
        class ExampleObject
        {
            public string $name = "Example object";
        }

        $objectValue = new ExampleObject();
        echo "Object: ";
        var_dump($objectValue);

        // Callable: a function or closure that can be called.
        $callableValue = function (int $number): int {
            return $number * 2;
        };
        echo "Callable result: " . $callableValue(5) . "<br>";

        // Null: represents a variable with no value.
        $nullValue = null;
        echo "Null: ";
        var_dump($nullValue);

        // Resource: a handle used to work with an external resource.
        // fopen() creates a file resource, and fclose() releases it.
        $resourceValue = fopen("php://memory", "r+");
        echo "Resource: ";
        var_dump($resourceValue);
        fclose($resourceValue);

        // Never: a function with this return type never returns normally.
        // The function is defined but not called because it would stop the script.
        function stopProgram(): never
        {
            exit("The never function stopped the program.");
        }

        echo "Never: demonstrated by the stopProgram() return type.<br>";
    ?>
</body>
</html>