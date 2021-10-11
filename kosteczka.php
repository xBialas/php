<?php
$a = $_GET["kostka"];
$b = $_GET["ile"];
for($i=0; $i<$b; $i++){
$c = rand(1, $a);
echo("$c <br>");

if($a=$c){
    echo("ez wygranko<br>");
}
}







?>



<html>
    <head></head>
    <body>

<form action="" method="GET">
Ile ścian ma mieć kostka? <input type="number" name="kostka"><br>
Ile razy rzucasz<input type="number" name="ile"><br>
<input type="submit" name="Rzut" value="oblicz">  


</form>





</body>
</html>