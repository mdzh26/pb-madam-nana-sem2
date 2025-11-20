<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MARKAH</title>
</head>
<body>
	<?php
	$txt = "Purata Markah";
$bm = 80;
$bi = 76;
$mt = 87;
$sc = 93;
$purata = ($bm + $bi + $mt + $sc) / 4;
echo "<h2>$txt</h2> <br>" . "BM : $bm <br> BI : $bi <br> MT : $mt <br> SC : $sc <br><br> jumlah : " . ($bm + $bi + $mt + $sc) . "<br> Purata : $purata%";
?>

</body>
</html>