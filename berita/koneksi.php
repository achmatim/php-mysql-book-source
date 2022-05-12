<?php
$host = "localhost";
$user = "root";
$pass = "qwerty";
$dbnm = "demo";

$conn = mysqli_connect ($host, $user, $pass, $dbnm);
if (!$conn) {
	die ("Server/Database MySQL tidak terhubung");	
}

?>
