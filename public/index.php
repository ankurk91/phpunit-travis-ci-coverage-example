<!DOCTYPE html>
<html>
<head>
  <title>Calculator app</title>
  <meta charset="utf-8">
</head>
<body>
<?php

require '../vendor/autoload.php';

use Projects\Ankur\Calculator;

$obj = new Calculator();

echo $obj->addTwo(2, 3);
echo '<br>';
echo $obj->multiplyTwo(2, 3);

?>
<h1>This is just a sample demo page.</h1>
</body>
</html>