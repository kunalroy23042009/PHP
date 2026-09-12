<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loops in PHP</title>
</head>
<body>
	<h1>07. Loops in PHP</h1>

	<?php
		// 1. for loop: use it when you know how many times to repeat.
		echo "<h2>for loop</h2>";
		for ($counter = 1; $counter <= 5; $counter++) {
			echo "Count: $counter<br>";
		}

		// A for loop can count backwards with a decrement operation.
		echo "<h3>Countdown</h3>";
		for ($counter = 5; $counter >= 1; $counter--) {
			echo "$counter<br>";
		}

		// 2. while loop: checks the condition before every repetition.
		echo "<h2>while loop</h2>";
		$number = 1;
		while ($number <= 5) {
			echo "Number: $number<br>";
			$number++;
		}

		// 3. do...while loop: runs at least once before checking the condition.
		echo "<h2>do...while loop</h2>";
		$number = 1;
		do {
			echo "Number: $number<br>";
			$number++;
		} while ($number <= 5);

		// This still runs once even though the condition is false initially.
		echo "<h3>do...while always runs once</h3>";
		$number = 10;
		do {
			echo "This message runs once.<br>";
		} while ($number < 5);

		// 4. foreach loop: visits every item in an array.
		echo "<h2>foreach loop</h2>";
		$languages = ["PHP", "HTML", "CSS", "JavaScript"];
		foreach ($languages as $language) {
			echo "Language: $language<br>";
		}

		// foreach can provide both the key/index and the value.
		echo "<h3>foreach with index</h3>";
		foreach ($languages as $index => $language) {
			echo "Index $index: $language<br>";
		}

		// foreach also works with associative arrays.
		echo "<h3>foreach with associative array</h3>";
		$student = [
			"name" => "Kunal",
			"course" => "PHP",
			"marks" => 85
		];
		foreach ($student as $key => $value) {
			echo "$key: $value<br>";
		}

		// 5. Nested loops: one loop runs inside another loop.
		echo "<h2>Nested loops</h2>";
		for ($row = 1; $row <= 3; $row++) {
			for ($column = 1; $column <= 3; $column++) {
				echo "Row $row, Column $column<br>";
			}
		}

		// 6. break: stops the loop completely.
		echo "<h2>break</h2>";
		for ($number = 1; $number <= 10; $number++) {
			if ($number === 6) {
				break;
			}
			echo "$number<br>";
		}

		// 7. continue: skips the current repetition and continues the loop.
		echo "<h2>continue</h2>";
		for ($number = 1; $number <= 5; $number++) {
			if ($number === 3) {
				continue;
			}
			echo "$number<br>";
		}

		// 8. Alternative syntax is useful when mixing PHP with HTML.
		echo "<h2>Alternative syntax</h2>";
		for ($number = 1; $number <= 3; $number++):
			echo "Alternative syntax value: $number<br>";
		endfor;

		// 9. Loop through an array and calculate a total.
		echo "<h2>Loop calculation</h2>";
		$prices = [100, 250, 75];
		$total = 0;
		foreach ($prices as $price) {
			$total += $price;
		}
		echo "Total price: $total<br>";
	?>
</body>
</html>
