<!-- 6. WAP to check a number is Palindrome or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="number">
        <input type="submit" value="Submit">
    </form>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $number = $_POST["number"];
       
        if (strrev($number) == $number)
        {
            echo "$number  is Palindrome";
        }
        else
        {
            echo "$number  is not Palindrome";
        }
    }

?>
</html>