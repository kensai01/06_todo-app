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


  //can add different data types to single array
  $numberList = array(23, 54, 34, 234.2, 523, 345, '342', 342, '<h1>HELLO</h1>');

  // can display value by referencing index #
  echo $numberList[0];

  // prints the list even with different data types
  print_r($numberList);
?>

</body>
</html>
