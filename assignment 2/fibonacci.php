<!-- 9. Write PHP code to print Fibonacci series. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="num">
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            $num = $_POST["num"];
            $a = 0;
            $b = 1;
            $c = 0;
            echo "Fibonacci Series of $num : <br>";
            echo $a . "<br>";
            echo $b . "<br>";
            for($i = 2; $i < $num; $i++){
                $c = $a + $b;
                echo $c . "<br>";
                $a = $b;
                $b = $c;
            }
        }
    ?>
    
</body>
</html>