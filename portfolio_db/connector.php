<?php
$connection = new PDO('mysql:host=localhost; dbname=practice_db; charset=utf8', 'root', '');

$aboutData = $connection->query("SELECT name, post, email, phone, site FROM about");
$aboutData = $aboutData->fetch();
?>