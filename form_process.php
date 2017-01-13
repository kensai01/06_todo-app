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
