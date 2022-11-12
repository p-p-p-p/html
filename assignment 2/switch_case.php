<!-- 7. Write PHP code to print Grade card of Student using Switch case. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="marks">
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   
            
            $marks = $_POST["marks"];
            echo "Marks:  $marks <br>";
            switch ($marks)
            {
                case ($marks >= 90):
                    echo "Grade A";
                    break;
                case ($marks >= 80):
                    echo "Grade B";
                    break;
                case ($marks >= 70):
                    echo "Grade C";
                    break;
                case ($marks >= 60):
                    echo "Grade D";
                    break;
                case ($marks >= 50):
                    echo "Grade E";
                    break;
                case ($marks >= 40):
                    echo "Grade F";
                    break;
                default:
                    echo "Grade G";
            }
        }
    
    ?>
</body>
</html>