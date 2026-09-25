<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2D Arrays</title>
</head>
<body>
    <h1><u>2D-Arrays:</u></h1>
    <?php
    $Student=array(
        array("Kunal",25,"Cse"),
        array("Aditya",26,"Me"),
        array("Rounik",20,"Metalurgy"),
        array("Krrish",23,"Ee"),
        array("ahishek",15,"civil")
    );

    for ($i=0;$i<count($Student);$i++)
        {
            echo "Name: " . $Student[$i][0] . "<br>"; 
            echo "Age: " . $Student[$i][1] . "<br>"; 
            echo "Branch: " . $Student[$i][2] . "<br><br>";
        }
    ?>
</body>
</html>