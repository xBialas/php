<?php

$a = $_GET["a"];
$b = $_GET["b"];
$c2 = ($a*$a)+($b*$b);
$c = $a * $b;
$d = pow($a,$b);
$e = pow($b,$a);

echo " c^2 = $c2 <br>";
echo "c = $c<br>";
echo "a^b = $d<br>";
echo "b^a = $e<br>";








?>


<html>
<head></head>
<body>


<form action="" method="GET">
<input type="number" name="a">
<input type="number" name="b">
<input type="submit" name="oblicz" value="oblicz">


</form>
</body>
</html>
