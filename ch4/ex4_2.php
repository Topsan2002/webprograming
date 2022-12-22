<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>การกำหนดค่าแบบอ้างอิง call by ref.</title>
</head>
<body>
<?php 
	//ex

	// $a = 240;
	// $m = 100;
	// $a = &$m;

	$x = 123;
	$y = "abc";
	echo "$ x = $x <br>";
	echo "$ y = $y <br>";
	$x = &$y;

	echo "$ x = &$ y <br> $x <br>";

	echo "New Value $ x <br>";
	$x = "php";

	echo "$ x = $x <br>";
	echo "$ y = $y <br>";

	echo "New Value $ y <br>";
	$x = 100;

	echo "$ x = $x <br>";
	echo "$ y = $y  <br>";


 ?>

</body>
</html>