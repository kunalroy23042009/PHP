<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Functions in PHP</title>
</head>
<body>
	<h1>08. Functions in PHP</h1>

	<?php
		// 1. A simple function without parameters or a return value.
		function sayHello(): void
		{
			echo "Hello from PHP!<br>";
		}

		echo "<h2>Simple function</h2>";
		sayHello();

		// 2. A function can receive parameters.
		function greet(string $name): void
		{
			echo "Hello, $name!<br>";
		}

		echo "<h2>Function with a parameter</h2>";
		greet("Kunal");

		// 3. A return statement sends a value back to the caller.
		function add(int $firstNumber, int $secondNumber): int
		{
			return $firstNumber + $secondNumber;
		}

		echo "<h2>Function with a return value</h2>";
		$sum = add(10, 20);
		echo "10 + 20 = $sum<br>";

		// 4. Parameters can have default values.
		function welcome(string $name = "Guest"): string
		{
			return "Welcome, $name!";
		}

		echo "<h2>Default parameter</h2>";
		echo welcome() . "<br>";
		echo welcome("Neha") . "<br>";

		// 5. Multiple parameters and named arguments.
		function studentDetails(string $name, string $course, int $marks): string
		{
			return "$name studies $course and scored $marks marks.";
		}

		echo "<h2>Named arguments</h2>";
		echo studentDetails(marks: 85, course: "PHP", name: "Kunal") . "<br>";

		// 6. A variadic parameter accepts any number of arguments.
		function calculateTotal(int ...$numbers): int
		{
			return array_sum($numbers);
		}

		echo "<h2>Variadic function</h2>";
		echo "Total: " . calculateTotal(10, 20, 30, 40) . "<br>";

		// 7. Pass by reference allows a function to change the original variable.
		function increaseByTen(int &$number): void
		{
			$number += 10;
		}

		echo "<h2>Pass by reference</h2>";
		$score = 50;
		increaseByTen($score);
		echo "Updated score: $score<br>";

		// 8. An anonymous function is stored in a variable.
		echo "<h2>Anonymous function</h2>";
		$multiply = function (int $firstNumber, int $secondNumber): int {
			return $firstNumber * $secondNumber;
		};
		echo "5 x 4 = " . $multiply(5, 4) . "<br>";

		// 9. An arrow function is a short form of an anonymous function.
		echo "<h2>Arrow function</h2>";
		$square = fn (int $number): int => $number * $number;
		echo "Square of 6: " . $square(6) . "<br>";

		// 10. A function can be passed to another function as a callback.
		echo "<h2>Callback function</h2>";
		$numbers = [1, 2, 3, 4];
		$squares = array_map(fn (int $number): int => $number * $number, $numbers);
		echo "Squares: ";
		print_r($squares);
		echo "<br>";

		// 11. A recursive function calls itself until a stopping condition is met.
		function factorial(int $number): int
		{
			if ($number <= 1) {
				return 1;
			}

			return $number * factorial($number - 1);
		}

		echo "<h2>Recursive function</h2>";
		echo "5! = " . factorial(5) . "<br>";

		// 12. Variables created inside a function have local scope.
		function showLocalVariable(): void
		{
			$message = "This variable exists inside the function.";
			echo $message . "<br>";
		}

		echo "<h2>Local scope</h2>";
		showLocalVariable();

		// 13. A static variable keeps its value between function calls.
		function countCalls(): void
		{
			static $calls = 0;
			$calls++;
			echo "This function has been called $calls time(s).<br>";
		}

		echo "<h2>Static variable</h2>";
		countCalls();
		countCalls();
	?>
</body>
</html>
