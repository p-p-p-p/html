<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    $fullname=$email=$gender=$comment=$number=$age="";
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
            $fullname=test_input($_POST["name"]);
            $email=test_input($_POST["email"]);
            $gender=test_input($_POST["gender"]);
            $comment=test_input($_POST["comment"]);
            $number=test_input($_POST["number"]);
            $age=test_input($_POST["age"]);
    }

    function test_input($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>
<h2> Form Validation </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Gender:
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Number: <input type="number" name="number">
    <br><br>
    Age: <input type="number" name="age">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2> Your Input: </h2>";
echo $fullname;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $comment;
echo "<br>";
echo $number;
echo "<br>";
echo $age;



?>

</body>
</html>