<html>
<head>
	<title>Exam</title>
</head>
<body>

<style>
	.error{
		color: red;
	}
</style>

<?php 
 $name=$email=$password=$subject=$gender=$hobby=$comment="";
 $nameErr=$emailErr=$passwordErr=$subjectErr=$genderErr=$hobbyErr=$commentErr="";

 function test_input($data)
 {
 	$data=trim($data);
 	$data=stripslashes($data);
 	$data=htmlspecialchars($data);
 	return $data;
 }

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 	if (empty($_POST["name"]))
 	{
 		$nameErr="Name can't be empty";
 	}
 	else
 	{
 		$name=test_input($_POST["name"]);
 		if(!preg_match( "/^[a-zA-Z-']*$/" ,$name))
 		{
 			$nameErr="Only contain white space and character";
 		}
 	}


if (empty($_POST["email"]))
 	{
 		$emailErr="Name can't be empty";
 	}
 	else
 	{
 		$email=test_input($_POST["email"]);
 		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
 		{
 			$emailErr="Enter a valid email";
 		}
 	}


if (empty($_POST["password"]))
 	{
 		$passwordErr="Enter can't be empty";
 	}
 	else
 	{
 		$password=test_input($_POST["password"]);
 		if(strlen($password)<8)
 		{
 			$passwordErr="Enter a 8 digit password";
 		}
 	}


if (empty($_POST["subject"]))
 	{
 		$subjectErr=" can't be empty";
 	}
 	else
 	{
 		$subject=test_input($_POST["subject"]);
 		if ($subject=="none")
 		{
 			$subjectErr="select a option";
 		}
 	}

if (empty($_POST["gender"]))
 	{
 		$genderErr=" can't be empty";
 	}
 	else
 	{
 		$gender=$_POST["gender"];
 		
 	}

if (empty($_POST["hobby"]))
 	{
 		$hobbyErr=" can't be empty";
 	}
 	else
 	{
 		$hobby=$_POST["hobby"];
 		
 	}



if (empty($_POST["comment"]))
 	{
 		$commentErr=" can't be empty";
 	}
 	else
 	{
 		$comment=test_input($_POST["comment"]);
 		
 	}


 }

?>

<p> 
	<span class="error">* required </span>
</p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" placeholder="Enter your name">
	<span class="error">* <?php echo $nameErr ;?></span>
	<br><br>
	Email: <input type="text" name="email" placeholder="Enter your email">
	<span class="error">* <?php echo $emailErr ;?></span>
	<br><br>
	Password: <input type="text" name="password" placeholder="Enter your password">
	<span class="error">* <?php echo $passwordErr ;?></span>
	<br><br>
	Subject: 
	<select name="subject">
		<option value="none">none </option>
		<option value="school">School </option>
		<option value="college">college </option>
		<option value="university">university </option>
	</select>
	<span class="error">* <?php echo $subjectErr ;?></span>
	<br> <br>
	Gender : 
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<input type="radio" name="gender" value="Other"> Other
	<span class="error">* <?php echo $genderErr ;?></span>
	<br> <br>

	Hobbies :
	<input type="checkbox" name="hobby[]" value="Dancing">Dancing
	<input type="checkbox" name="hobby[]" value="Drawing">Drawing
	<input type="checkbox" name="hobby[]" value="Singing">Singing
	<span class="error">* <?php echo $hobbyErr ;?></span>
	<br> <br>
	Comment:
	<textarea name="comment" rows="4" cols="50"></textarea>
	<span class="error">* <?php echo $commentErr ;?></span>
	<br> <br>
	<input type="submit" value="Submit">

</form>

<?php
 echo "$name";
 echo "<br>";
 echo "$email";
 echo "<br>";
 echo "$password";
 echo "<br>";
 echo "$subject";
 echo "<br>";
 echo "$gender";
 echo "<br>";
  foreach($hobby as $hb){
	 echo "$hb";
	}

 echo "<br>";
 echo "$comment";
?>

</body>
</html>
