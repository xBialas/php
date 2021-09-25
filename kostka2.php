<html>
<head></head>
<form action="" method="POST">
Początek: <input type="number" name="pocz"/><br>
Koniec: <input type="number" name="kon"/><br>
Losowanie: <input type="number" name="los"/><br>
<input type="submit" value="Rzut" name="przycisk"/>
</form>

<?php
if(isset($_POST['przycisk'])){
$poczatek = $_POST["pocz"];
$koniec = $_POST["kon"];
$los = $_POST["los"];
for($i=0; $i<$l; $i++)
{
$losowanie = rand($poczatek,$koniec);
echo $losowanie;
echo("<br>");
}
}
?>







</body>
</html>