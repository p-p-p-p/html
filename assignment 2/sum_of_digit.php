<!-- 5.  WAP to calculate sum of the digits of a number. -->
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
        $store=$number;
        $sum = 0;
        while($number>0)
        {
            $sum = $sum + $number%10;
            $number = $number/10;
        }
        // echo "Sum of digit $number is $sum";
        echo "Sum of digit $store is $sum";
    }
?>
</html>