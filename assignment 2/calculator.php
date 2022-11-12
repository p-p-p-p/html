<!-- 12. Write PHP code to design a calculator program to show use of +,-,* ,/ operators. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operator">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];
            echo "num1 = $num1, num2 = $num2, operator = $operator <br>";
            switch($operator){
                case "add":
                    echo "The sum of $num1 and $num2 is: " . ($num1 + $num2);
                    break;
                case "sub":
                    echo "The difference of $num1 and $num2 is: " . ($num1 - $num2);
                    break;
                case "mul":
                    echo "The product of $num1 and $num2 is: " . ($num1 * $num2);
                    break;
                case "div":
                    echo "The quotient of $num1 and $num2 is: " . ($num1 / $num2);
                    break;
                default:
                    echo "Invalid operator";
            }
        }
        
    ?>
</body>
</html>
