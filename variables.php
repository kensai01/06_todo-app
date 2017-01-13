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

  $name = 'Edwin';
  $number = 100;
  //$NUMBER = 100; is different, variables are case sensitive
  $number_list = 100;
  // $num-ber= 400; < bad format, don't use hyphen
  // $0uber = 400; < bad format, don't start with a number

  // concantination - use a dot, works between various data types
  echo $name . " " . $number;

  // you can assign html tags to variables, images etc
  $name = "<h1> HELLO </h1>";
  echo $name;

?>

</body>
</html>
