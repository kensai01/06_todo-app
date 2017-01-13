<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php
  // addition
  echo 56 + 45;
  echo "<br>";
  // subtraction
  echo 56 - 45;
  echo "<br>";
  // multiplication
  echo 56 * 45;
  // division
  echo "<br>";
  echo 56 / 45;

  // this works too
  echo 45 + 34 * 45 / 421 - 45;
  echo "<br>";

  // order of operations
  echo 5 + 5 * 100;
  // notice that w/o penthesis around 5+5 php follows regular order of operations
  echo "<br>";

  // with variables
  $number1 = 12;
  $number2 = 34;
  echo $number1 + $number2;
?>

</body>
</html>
