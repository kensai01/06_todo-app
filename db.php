<?php
$connection = mysqli_connect('localhost', 'root', 'M@dd0x1234', 'todoapp');

    if(!$connection)
    {
      die("Database connection failed.");
    }
?>
