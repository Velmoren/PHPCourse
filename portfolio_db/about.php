<?php
$connection = include ('./connector.php');
$aboutData = $connection->query("SELECT name, post, email, phone, site FROM about");
$aboutData = $aboutData->fetch();
return $aboutData;