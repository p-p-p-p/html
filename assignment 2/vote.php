<!-- 10. Write PHP code to check that an user is eligible to vote or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="age">
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {   

            $age = $_POST["age"];
            if($age >= 18){
                echo "Your age is $age and you are eligible to vote.";
            }
            else{
                echo "Your age is $age and you are not eligible to vote.";
            }
        }
    ?>
    
</body>
</html>