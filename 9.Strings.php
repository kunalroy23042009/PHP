<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Strings in PHP</title>
</head>
<body>
	<h1>09. Strings in PHP</h1>

	<?php
		// A string is text written inside single or double quotes.
		$singleQuoted = 'Hello from PHP';
		$doubleQuoted = "String example";

		echo "<h2>Creating strings</h2>";
		echo $singleQuoted . "<br>";
		echo $doubleQuoted . "<br>";

		// Double quotes can replace variables with their values.
		$name = "Kunal";
		echo "Hello, $name!<br>";
		echo 'Hello, $name!<br>';

		// The dot operator joins strings together.
		$firstName = "Kunal";
		$lastName = "Kumar";
		$fullName = $firstName . " " . $lastName;
		echo "<h2>Concatenation</h2>";
		echo $fullName . "<br>";

		// The concatenation assignment operator adds text to the same variable.
		$message = "Welcome";
		$message .= " to PHP";
		echo $message . "<br>";

		// Access individual characters using zero-based indexes.
		$word = "PHP";
		echo "<h2>String indexing</h2>";
		echo "First character: " . $word[0] . "<br>";
		echo "Last character: " . $word[strlen($word) - 1] . "<br>";
		$word[0] = "p";
		echo "After changing the first character: $word<br>";

		// strlen() returns the number of bytes in a string.
		$sentence = "Learning PHP is useful";
		echo "<h2>Length and character case</h2>";
		echo "Length: " . strlen($sentence) . "<br>";
		echo "Uppercase: " . strtoupper($sentence) . "<br>";
		echo "Lowercase: " . strtolower($sentence) . "<br>";
		echo "First letter uppercase: " . ucfirst($sentence) . "<br>";
		echo "Each word uppercase: " . ucwords($sentence) . "<br>";

		// Remove whitespace from the beginning and end of a string.
		$input = "   PHP strings   ";
		echo "Trimmed text: '" . trim($input) . "'<br>";
		echo "Left trimmed text: '" . ltrim($input) . "'<br>";
		echo "Right trimmed text: '" . rtrim($input) . "'<br>";

		// Search for text and check whether a string contains another string.
		echo "<h2>Searching strings</h2>";
		$description = "PHP is a popular server-side language";
		echo "Position of 'popular': " . strpos($description, "popular") . "<br>";
		var_dump(str_contains($description, "server-side"));
		echo " - contains server-side<br>";
		var_dump(str_starts_with($description, "PHP"));
		echo " - starts with PHP<br>";
		var_dump(str_ends_with($description, "language"));
		echo " - ends with language<br>";

		// substr() extracts part of a string.
		echo "<h2>Substring and slicing</h2>";
		echo "First three characters: " . substr($description, 0, 3) . "<br>";
		echo "Last eight characters: " . substr($description, -8) . "<br>";

		// Replace text with str_replace().
		$original = "I like JavaScript";
		$updated = str_replace("JavaScript", "PHP", $original);
		echo "Replaced text: $updated<br>";
		echo "Text with removed spaces: " . str_replace(" ", "", $description) . "<br>";

		// Convert a string into an array with explode().
		echo "<h2>Splitting and joining</h2>";
		$csv = "PHP,HTML,CSS,JavaScript";
		$technologies = explode(",", $csv);
		echo "Split values: ";
		print_r($technologies);
		echo "<br>";

		// Convert an array into a string with implode().
		echo "Joined values: " . implode(" | ", $technologies) . "<br>";

		// Compare strings, optionally without considering letter case.
		echo "<h2>Comparing strings</h2>";
		var_dump("PHP" === "PHP");
		echo " - strict comparison<br>";
		var_dump(strcmp("apple", "banana") < 0);
		echo " - apple comes before banana<br>";
		var_dump(strcasecmp("php", "PHP") === 0);
		echo " - case-insensitive comparison<br>";

		// printf() formats and prints text. sprintf() returns formatted text.
		echo "<h2>Formatting strings</h2>";
		$product = "Notebook";
		$price = 499.99;
		printf("Product: %s, Price: %.2f<br>", $product, $price);
		$summary = sprintf("%s costs %.2f", $product, $price);
		echo $summary . "<br>";

		// Escape HTML so user-provided text is displayed safely.
		echo "<h2>Escaping text</h2>";
		$userText = '<script>alert("Hello");</script>';
		echo "Safe output: " . htmlspecialchars($userText, ENT_QUOTES, "UTF-8") . "<br>";

		// Add line breaks and special characters with escape sequences.
		echo "<h2>Special characters</h2>";
		echo "Line one\nLine two<br>";
		echo "A tab\tseparates text<br>";
		echo "A quote: \"PHP\"<br>";

		// Heredoc is useful for readable multi-line strings.
		$heredocText = <<<TEXT
This is a multi-line string.
It can include the variable value: $name.
TEXT;
		echo "<h2>Heredoc</h2>";
		echo nl2br($heredocText) . "<br>";

		// Nowdoc keeps variables as plain text instead of replacing them.
		$nowdocText = <<<'TEXT'
This is a nowdoc string.
The variable $name is not replaced.
TEXT;
		echo "<h2>Nowdoc</h2>";
		echo nl2br($nowdocText) . "<br>";

		// Repeat a string a chosen number of times.
		echo "<h2>Repeating strings</h2>";
		echo str_repeat("PHP ", 3) . "<br>";

		// Word and character counts.
		$text = "PHP makes web development easier";
		echo "Word count: " . str_word_count($text) . "<br>";
		echo "Reversed text: " . strrev($text) . "<br>";
	?>
</body>
</html>
