<?php
session_name("test_session");
session_start();
echo $_SESSION["prueba"];



/*$passw = "unicah";
$llave = rand();
$passw = hash("sha512", $passw);
$llave = hash("sha512", $llave);

$passw = $passw.$llave;

$passw = hash("sha512", $passw);
echo "password: $passw, llave: $llave";*/

?>