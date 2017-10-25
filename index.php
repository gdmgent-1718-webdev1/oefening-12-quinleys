<?php
$cities = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oefening 12</title>
</head>
<body>
<?php
    if($cities > 0){
        sort($cities);
        echo "<ol>";
        foreach ($cities as $c){
            
            echo "<li>$c</li>";
            
        }
        echo "</ol>";
    } else {
        echo "nothing in the array.";
    }
?>
</body>
</html>