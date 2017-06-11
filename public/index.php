<?php
require '../vendor/autoload.php';

use Projects\Ankur\Calculator;

$calc = new Calculator();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Calculator app</title>
  <meta charset="utf-8">
</head>
<body>
<h1>This is just a sample demo page.</h1>
<hr>
<?php

echo $calc->addTwo(2, 3);
echo '<br>';
echo $calc->multiplyTwo(2, 3);

?>
</body>
</html>