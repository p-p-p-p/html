<!-- 13. Write a PHP code to calculate area and perimeter of Triangle. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    side1:<input type="number" name="side1" >
    side2: <input type="number" name="side2">
    side3: <input type="number" name="side3">

    <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            $side1 = $_POST["side1"];
            $side2 = $_POST["side2"];
            $side3 = $_POST["side3"];
            echo " side1 = $side1, side2 = $side2, side3 = $side3 <br>";
            
            $perimeter = $side1 + $side2 + $side3;
            $s = $perimeter / 2;
            $area = ($s*($s-$side1)*($s-$side2)*($s-$side3)) ** 0.5;
            echo "The area of the triangle is: $area <br>";
            echo "The perimeter of the triangle is: $perimeter <br>";
        }
    ?>
    
</body>
</html>