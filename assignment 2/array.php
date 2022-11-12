<!-- 8. Write PHP code to print rainbow colors within an array using for_each loop. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2> Rainbow Colors </h2>
    <?php
        $colors = array("red", "orange", "yellow", "green", "blue", "indigo", "violet");
        foreach($colors as $color){
            echo $color . "<br>";
        }
    ?>
</body>
</html>