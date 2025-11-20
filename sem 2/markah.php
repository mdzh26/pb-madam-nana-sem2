<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Markah</title>
</head>
<body>
	<?php
	$txt = "Purata Markah";
	$BM = 80;
	$BI = 76;
	$MT = 87;
	$SC = 93;
    $JUMLAH = $BM + $BI + $MT + $SC;
    $PURATA = $JUMLAH / 4;

	echo $txt;
	echo "<br>";
	echo "BM ", ":" , $BM;
	echo "<br>";
	echo "BI ", ":" , $BI;
	echo "<br>";
	echo "MT ", ":" , $MT;
	echo "<br>";
	echo "SC ", ":", $SC;
	echo "<br>";
	echo "JUMLAH " , "=" , $JUMLAH;
	echo "<br>";
	echo " PURATA ", "=" , $PURATA;
	?>


</body>
</html>