<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$db = 'projetofinalphp';

//estabelecer ligação ao sql
$conn = mysqli_connect($host, $user, $pw, $db);

//comunicar em utf-8 com a bd
mysqli_set_charset($conn, "UTF8");

if (!$conn) {
	die("Erro de Ligação: ".mysqli_connect_error());
}

?>