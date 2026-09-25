<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
</head>
<body>

    <h1><u>Control Flow: </u></h1>

    <?php

    echo "<u><b>Conditional Statements: </b></u><br><br>";

    echo "<b><u>1.If Statement: </u></b><br><br>";

    $age=17;

    if ($age>=18)
    {
        echo "Output: Adult<br><br>";
    }


    echo "<b><u>2.IF-ELSE Statement:<br></u></b>";

    if ($age>=18)
    {
        echo "Output: Adult<br><br>";
    }
    else
    {
        echo "Output: NOT ADULT<br><br>";
    }


    echo "<b><u>3.IF-ELSEIF-ELSE Statement: </u></b><br><br>";

    $marks=75;

    if ($marks>=90)
    {
        echo "Grade: A+<br>";
    }
    elseif ($marks>=80)
    {
        echo "Grade: A<br>";
    }
    elseif ($marks>=70)
    {
        echo "Grade: B<br>";
    }
    elseif ($marks>=60)
    {
        echo "Grade: C<br>";
    }
    else
    {
        echo "Grade: F<br>";
    }

    echo "<br>";


    echo "<b><u>4.Switch Statement: </u></b><br><br>";

    $day=2;

    switch ($day)
    {
        case 1:
            echo "Monday";
            break;

        case 2:
            echo "Tuesday";
            break;

        case 3:
            echo "Wednesday";
            break;

        case 4:
            echo "Thursday";
            break;

        case 5:
            echo "Friday";
            break;

        case 6:
            echo "Saturday";
            break;

        case 7:
            echo "Sunday";
            break;

        default:
            echo "Invalid Day";
    }

    echo "<br><br>";


    echo "<u><b>Loops: </b></u><br><br>";


    echo "<b><u>1.For Loop: </u></b><br><br>";

    for ($i=1; $i<=5; $i++)
    {
        echo "Number: ".$i."<br>";
    }

    echo "<br>";


    echo "<b><u>2.While Loop: </u></b><br><br>";

    $i=1;

    while ($i<=5)
    {
        echo "Number: ".$i."<br>";
        $i++;
    }

    echo "<br>";


    echo "<b><u>3.Do-While Loop: </u></b><br><br>";

    $i=1;

    do
    {
        echo "Number: ".$i."<br>";
        $i++;
    }
    while ($i<=5);

    echo "<br>";


    echo "<b><u>4.Foreach Loop: </u></b><br><br>";

    $fruits=["Apple","Banana","Mango","Orange"];

    foreach ($fruits as $fruit)
    {
        echo "Fruit: ".$fruit."<br>";
    }

    ?>

</body>
</html>