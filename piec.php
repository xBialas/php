<?php

$login = $_POST["login"];
$pass = $_POST["pass"];
$loginy = ["maciek", "kuba", "hub", "haha", "git"];
$passy = ["aaa", "bbb", "ccc", "ddd", "eee"];

if($loginy[0] == $login && $pass == $passy[0] ){
    echo "zostales zalogowany";
}
else{
    echo "wyjazd";

}



?>

<html>
<head></head>
<body>


<form action="" method="POST">
<input type="text" name="login">
<input type="text" name="pass">
<input type="submit" name="oblicz" value="oblicz">


</form>





</body>
</html>