<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$name=$email="";
$nameErr=$emailErr="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($_POST["name"]))
    {
      $nameErr="Name is required";
    }
    else{
      $name=test_input($_POST["name"]);
      if(!preg_match("/^[a-zA-Z ]*$/",$name))
      {
        $nameErr="Only letters and white space are allowd";
      }
    }
    
    if (empty($_POST["email"]))
    {
        $emailErr = "Email is required";
    }
    else
    {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
        }
    }

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
    Name: <input type="text" name="name" required>
    <br><br>
    E-mail: 
    <input type="email" name="email"  required>
    <br><br>
    <input type="submit" name="submit" value="Submit">



</form>

<?php
  if (isset($_POST['submit']))
  {
    echo "<h2> Your Input: </h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
  }
?>

 

</body>
</html>