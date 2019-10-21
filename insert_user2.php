<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Social Network</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>

<?php
include("includes/connection.php");
if(isset($_POST['sign_up']))
{
   /* real_escape_string is written to prevent any malacious code from entered
   in the field and avoid hackning */
  $name=$conn->real_escape_string($_POST['u_name']);
	$email=$conn->real_escape_string($_POST['u_email']);
	$pass=$conn->real_escape_string($_POST['u_pass']);
	$country=$conn->real_escape_string($_POST['u_country']);
	$birthday=$conn->real_escape_string($_POST['u_birthday']);
	$gender=$conn->real_escape_string($_POST['u_gender']);

  $query = "INSERT INTO users VALUES(null, '$name', '$email', '$pass', '$country', '$birthday', '$gender', 'default.png', NOW(), 'never', 'no')";
// NOW() is a predefined function that gives current date and time
	$result   = $conn->query($query);
	if($result)
	{
	  echo "<h2>  Congrats!! You are now a part of friendsbook.</h2>";
	  echo "<br>";
	  echo "<a href='index.php'>  Click here to login...</a>";
	}
	else
	 {
	  echo "<h2>Ohh Ohh!! Looks like something went wrong.</h2>";
	  echo " <br>";
	  echo "<a href='index.php'>  Please try signing up again</a>";
	}
}


?>

</body>
</html>
