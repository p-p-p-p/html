<!-- 3.  Print multiplication table of a number. -->
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
        for($i=1;$i<=10;$i++)
        {
            echo $number." * ".$i." = ".$number*$i."<br>";
        }
    }
?>
</html>