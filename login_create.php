<?php


if (isset($_POST['submit']))
{

  $username = $_POST['username'];
  $password = $_POST['password'];
  $connection = mysqli_connect('localhost', 'root', 'M@dd0x1234', 'todoapp');

    if($connection)
    {
      echo "We are connected";
    }
    else
    {
      die("Database connection failed.");
    }


  $query = "INSERT INTO users(username,password) ";
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);

  if (!$result)
  {
    die('Query failed.');
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container">

  <div class="col-sm-6">
      <form class="" action="login_create.php" method="post">
        <label for="username">Username</label>
          <div class="form-group">
              <input type="text" class="form-control" name="username">
          </div>
          <label for="password">Password</label>
          <div class="form-group">
              <input type="password" class="form-control" name="password">
          </div>

          <input type="submit" class="btn btn-primary" name="submit" value="submit">
      </form>

  </div>

</div>

</body>
</html>
