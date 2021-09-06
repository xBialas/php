<?php

$a = $_GET["liczba"];
function fib($a){
    if($a==1){
        return 1;
    }
    elseif($a==0){
        return 0;
    }
    else{
        return fib($a-1)+fib($a-2);
    }
}


echo (fib($a));


?>

<html>
<head></head>
<body>


<form action="" method="GET">
<input type="text" name="liczba">
<input type="submit" name="oblicz" value="oblicz">


</form>





</body>
</html>