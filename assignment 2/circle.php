<!-- 15. Write a PHP code to calculate area and perimeter of circle. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    radius:<input type="number" name="radius" >
    <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            $radius = $_POST["radius"];
            echo " radius = $radius <br>";
            
            $perimeter = 2 * pi() * $radius;
            $area = pi() * $radius ** 2;
            echo "The area of the circle is: $area <br>";
            echo "The perimeter of the circle is: $perimeter <br>";
        }
    ?>
    
</body>
</html>