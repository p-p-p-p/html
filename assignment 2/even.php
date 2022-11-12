<!-- 1. Check a number whether it is even or odd. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $number = $_POST["number"];
        if ($number % 2 == 0)
        {
            echo "$number is a Even number";
        }
        else
        {
            echo "$number is a Odd number";
        }
    }
?>
</html>