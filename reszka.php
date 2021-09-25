<html>
    <head>
<?php
$resz = 0;
$orz = 0;
for($i=0; $i<100; $i++){
$los = rand(1,2);
if($los == 1)
{
    $resz++;
}
else
{ 
    $orz++;
}
}
if ($resz > $orz)
{
echo ("Wiecej reszek");
}
else if ($resz == $orz)
{
    echo ("Jest po równo <br>");
}
else 
echo ("Wiecej orzelkow");
echo ("Orzełków : ".$orz." Reszek : ".$resz);
?>
</head>
</html>