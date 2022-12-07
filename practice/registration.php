<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registration Form</h1>
    <style>
        .error {color: red;}
    </style>
    <?php 
    $name=$email=$password="";
    $nameErr=$emailErr=$passwordErr="";

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])){
            $nameErr="Name is required";
        }else{
            $name=test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameErr="Only letters and white space allowed";
            }
        }
        if (empty($_POST["email"])){
            $emailErr="Email is required";
        }else{
            $email=test_input($_POST["email"]);
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="Invalid email format";
            }
        }
        if (empty($_POST["password"])){
            $passwordErr="Password is required";
        }else{
            $password=test_input($_POST["password"]);
            if (strlen($password)<8){
                $passwordErr="Password must be at least 8 characters";
            }
        }
    }

    ?>
    <p><span class="error">* required field</span></p>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="name" placeholder="Enter your name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    Email: <input type="text" name="email" placeholder="Enter your email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Password: <input type="password" name="password" placeholder="Enter your password">
    <span class="error">* <?php echo $passwordErr; ?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    ?>


</body>
</html>
