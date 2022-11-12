<!-- 14. Write a PHP code to calculate the area and perimeter of the rectangle. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    height:<input type="number" name="height" >
    width: <input type="number" name="width">
    <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            $height = $_POST["height"];
            $width = $_POST["width"];
            echo " height = $height, width = $width <br>";
            
            $perimeter = 2 * ($height + $width);
            $area = $height * $width;
            echo "The area of the rectangle is: $area <br>";
            echo "The perimeter of the rectangle is: $perimeter <br>";
        }
    ?>
   
    
</body>
</html>