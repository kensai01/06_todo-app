<?php

if(isset($_POST['submit']))
{
  $nameList = array("Edwin", "Student", "Peter", "Samid", "Becky", "Julie", "Tom");

  $minimum = 5;
  $maximum = 10;
$username = $_POST['username'];
$password = $_POST['password'];


if (strlen($username) < $minimum)
{
  echo "Username has to be longer than five characters.";
}
if (strlen($username) > $maximum)
{
  echo "Username can't be longer than ten characters.";
}

if (in_array($username, $nameList))
{
  echo "Sorry you can't log in!";
}
else echo "Welcome!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
  <input type="text" name="username" palceholder="Enter Username">
  <input type="password" name="password" palceholder="Enter Password">
<br>
  <input type="submit" name="submit">
</form>


</body>
</html>
