<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <div class="container">
    <h1>Conditional Statements</h1>
    <?php
        // 1. if: runs only when the condition is true.
        echo "<h2>if</h2>";
        $temperature = 30;
        if ($temperature > 25) {
            echo "It is a warm day.<br>";
        }

        // 2. if...else: chooses between two possible blocks.
        echo "<h2>if...else</h2>";
        $age = 20;
        if ($age >= 18) {
            echo "Eligible adult.<br>";
        } else {
            echo "Not an adult yet.<br>";
        }

        // 3. if...elseif...else: checks multiple conditions in order.
        echo "<h2>if...elseif...else</h2>";
        $marks = 75;
        if ($marks >= 90) {
            echo "Grade A.<br>";
        } elseif ($marks >= 60) {
            echo "Grade B.<br>";
        } else {
            echo "Grade C.<br>";
        }

        // 4. Nested if: an if statement inside another if statement.
        echo "<h2>Nested if</h2>";
        $loggedIn = true;
        $isAdmin = true;
        if ($loggedIn) {
            echo "User is logged in.<br>";

            if ($isAdmin) {
                echo "User has administrator access.<br>";
            }
        }

        // 5. switch: compares one value with several case values.
        echo "<h2>switch</h2>";
        $day = "Monday";
        switch ($day) {
            case "Monday":
                echo "Start of the work week.<br>";
                break;
            case "Friday":
                echo "End of the work week.<br>";
                break;
            default:
                echo "A regular day.<br>"; 
        }

        // 6. match: returns a value using strict comparison (PHP 8+).
        echo "<h2>match</h2>";
        $role = "editor";
        $roleMessage = match ($role) {
            "admin" => "Full access.",
            "editor" => "Can edit content.",
            "viewer" => "Can view content.",
            default => "Unknown role."
        };
        echo $roleMessage . "<br>";
    ?>
    </div>

</body>
</html>