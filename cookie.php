<?php

$name = "user";
$value = "Janek";
setcookie($name, $value, time()+ (86400*30), "/");

?>

<html>
    <body>
<?php

    echo "Cookie '" . $name . "' szef<br>";
    echo "Value to: " . $_COOKIE[$name];

?>


</body>
</html>