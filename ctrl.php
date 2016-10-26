<?php
$i = $_REGUEST['Login'];
$p = $_REGUEST['password'];
try {
/*header("Location: panel.html");*/
$pdo = new PDO('mysql:host= localhost;dbname = db_sec','root','');
echo"Есть подключение";
}
catch(PDOException $e) {
	echo"Есть подключение";
}
?>