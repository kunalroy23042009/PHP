<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><u>Associative Arrays: </u></h1><br><br>
    <?php
    $Student=array(
        "Name"=>"kunal kumar roy",
        "Roll"=>25,
        "Collage"=>"GPA",
        "Branch"=>"CSE"
    );

    echo "Student_name: ".($Student["Name"])."<br>";
    echo "Student_Roll: ".($Student["Roll"])."<br>";
    ?>
</body>
</html>