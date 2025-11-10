<!-- memaparkan output -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My First PHP</title>
</head>
<body>
	<?php
	$x=$_POST["length"];
	$y=$_POST["width"];

	//settype(var, type)

	settype($x, "integer");
	settype($y, "integer");

	$z = $x *$y;

	echo "The area of the rectangle with length = ".$x." and width = " .$y. " is " .$z ;

	?>



</body>
</html>