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

  $number = array(10, 20, 30);

  print_r($number);

  // echo $number[2] . "<br>";
  echo "<br>";

  // rather than referring to elements by index number, we can assign names to indecies
  // this way we can refer to various elements by name rather than number
  $names = array("first_name" => 'Edwin', "last_name" => 'Dorkface');

  print_r($names);
  echo "<br>";

  // refere to data by name
  echo $names['first_name'] . " " . $names['last_name'];

?>

</body>
</html>
