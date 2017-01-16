<?php
  /*Connection to the database. */
  $connection = mysqli_connect('localhost', 'root', '', 'todoapp');
  if(!$connection) { die("Database connection failed.") ;}
?>
