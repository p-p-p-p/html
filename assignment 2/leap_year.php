<!-- 2. Check a year whether it is leap year or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="year" name="year">
        <input type="submit" value="Submit">
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $year = $_POST["year"];
        if (($year % 400 == 0) and ($year % 100 == 0))  {
            echo "$year Leap Year";
        }
        else if (($year % 4 ==0) and ($year % 100 != 0))
        {
            echo "$year Not a Leap Year";
        }
        else
        {
            echo "$year Not a Leap Year";
        }
    }
?>
</html>