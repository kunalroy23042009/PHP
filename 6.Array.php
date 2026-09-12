<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <div>
        <h1>06.Array</h1>
        <?php
        // An indexed array stores values with numeric indexes starting at 0.
        $names = ["Kunal", "Guddu", "Shubham", "Lucky", "Abhishek"];
        echo "<h2>Creating and indexing</h2>";
        echo "First name: " . $names[0] . "<br>";
        echo "Last name: " . $names[count($names) - 1] . "<br>";
        echo "Number of names: " . count($names) . "<br>";

        // Change an item by assigning a new value to its index.
        $names[1] = "Gaurav";
        echo "Changed second name: " . $names[1] . "<br>";

        // The null coalescing operator avoids an undefined-index warning.
        echo "Missing index: " . ($names[10] ?? "Index does not exist") . "<br>";

        // Add items to the end and beginning of an indexed array.
        $names[] = "Neha";
        array_push($names, "Ravi", "Sita");
        array_unshift($names, "Aman");
        echo "After adding items: ";
        print_r($names);
        echo "<br>";

        // Remove the last item, first item, or items from a chosen position.
        $lastName = array_pop($names);
        $firstName = array_shift($names);
        $removedNames = array_splice($names, 1, 2);
        echo "Removed last item: $lastName<br>";
        echo "Removed first item: $firstName<br>";
        echo "Removed items: ";
        print_r($removedNames);
        echo "<br>Remaining names: ";
        print_r($names);
        echo "<br>";

        // Slicing returns part of an array without changing the original array.
        $numbers = [10, 20, 30, 40, 50, 60];
        echo "<h2>Slicing</h2>";
        echo "First three numbers: ";
        print_r(array_slice($numbers, 0, 3));
        echo "<br>Last two numbers: ";
        print_r(array_slice($numbers, -2));
        echo "<br>Original numbers: ";
        print_r($numbers);
        echo "<br>";

        // foreach is the standard way to visit every item in an array.
        echo "<h2>Looping through every item</h2>";
        foreach ($numbers as $index => $number) {
            echo "Index $index contains $number<br>";
        }

        // Associative arrays use named keys instead of numeric indexes.
        $student = [
            "name" => "Kunal",
            "age" => 21,
            "course" => "PHP"
        ];
        echo "<h2>Associative arrays</h2>";
        echo "Student name: " . $student["name"] . "<br>";
        echo "Student age: " . $student["age"] . "<br>";
        foreach ($student as $key => $value) {
            echo "$key: $value<br>";
        }

        // Multidimensional arrays contain other arrays.
        $students = [
            ["name" => "Kunal", "marks" => 85],
            ["name" => "Neha", "marks" => 92]
        ];
        echo "<h2>Multidimensional arrays</h2>";
        echo $students[0]["name"] . " scored " . $students[0]["marks"] . "<br>";
        foreach ($students as $studentData) {
            echo $studentData["name"] . " scored " . $studentData["marks"] . "<br>";
        }

        // Search for values and keys.
        echo "<h2>Searching</h2>";
        var_dump(in_array(30, $numbers, true));
        echo " - 30 exists<br>";
        echo "Position of 40: " . array_search(40, $numbers, true) . "<br>";
        var_dump(array_key_exists("course", $student));
        echo " - course key exists<br>";

        // Common transformations and calculations.
        echo "<h2>Array functions</h2>";
        $doubledNumbers = array_map(function (int $number): int {
            return $number * 2;
        }, $numbers);
        echo "Doubled numbers: ";
        print_r($doubledNumbers);
        echo "<br>";

        $largeNumbers = array_filter($numbers, function (int $number): bool {
            return $number >= 40;
        });
        echo "Numbers 40 or greater: ";
        print_r($largeNumbers);
        echo "<br>";

        $total = array_reduce($numbers, function (int $carry, int $number): int {
            return $carry + $number;
        }, 0);
        echo "Total: $total<br>";
        echo "Smallest number: " . min($numbers) . "<br>";
        echo "Largest number: " . max($numbers) . "<br>";

        // Sorting changes the array. Use a copy when the original order matters.
        $scores = [70, 95, 82, 60];
        sort($scores);
        echo "Ascending scores: ";
        print_r($scores);
        echo "<br>";
        rsort($scores);
        echo "Descending scores: ";
        print_r($scores);
        echo "<br>";

        // Useful operations for combining and cleaning arrays.
        $firstPart = ["PHP", "HTML"];
        $secondPart = ["CSS", "JavaScript"];
        echo "Merged arrays: ";
        print_r(array_merge($firstPart, $secondPart));
        echo "<br>Unique values: ";
        print_r(array_unique([1, 2, 2, 3, 3, 3]));
        echo "<br>Reversed array: ";
        print_r(array_reverse($firstPart));
        echo "<br>";

        // Convert between array values and a string.
        $skills = ["PHP", "MySQL", "HTML"];
        echo "Joined skills: " . implode(", ", $skills) . "<br>";
        print_r(explode(", ", "PHP, MySQL, HTML"));
        echo "<br>";
        ?>
</div>
</body>
</html>