<!-- 11. Write PHP code to calculate Largest among three numbers using a) If_else b) conditional operator. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
   <form action="14.php" method="post">
        <input type="number" name="num1" placeholder="Enter first number">
        <input type="number" name="num2" placeholder="Enter second number">
        <input type="number" name="num3" placeholder="Enter third number">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            echo "num1 = $num1, num2 = $num2, num3 = $num3 <br>";
            if($num1 > $num2 && $num1 > $num3){
                echo "The largest number is: " . $num1;
            }elseif($num2 > $num1 && $num2 > $num3){
                echo "The largest number is: " . $num2;
            }else{
                echo "The largest number is: " . $num3;
            }
        }
    ?> 
    
</body>
</html>