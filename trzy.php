<?php

$a = $_POST["liczba"];
for($i = 1; $i < $a; $i++)
{
    $liczba = rand(1,1000);
    echo ($liczba);
    echo("<br>");

}


?>

<html>
<head></head>
<body>


<form action="" method="POST">
<input type="text" name="liczba">
<input type="submit">


</form>





</body>
</html>