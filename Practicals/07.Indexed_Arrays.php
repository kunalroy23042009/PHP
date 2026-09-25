<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
</head>
<body>
    <h1><u>Indexed Arrays in PHP: </u></h1>
    <?php
    $names=array("kunal","shubham","guddu","lucky","abhishek");
    echo "Names in Array: <br><br>";

    for ($i=0;$i<count($names);$i++)
        {
            echo "index ".($i),": ".$names[$i]."<br>";
        }
    ?>

</body>
</html>