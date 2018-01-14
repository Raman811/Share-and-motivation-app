<?php


$quotes = $_POST['quotes'];
$con = new mysqli("localhost", "root", "", "motivationapp");
$con->query("INSERT INTO `shares` (`quotes`) VALUES ('$quotes')");


echo "quote inserted";



?>