<?php
$age = $_POST['age'];

$Age = ((time()- strtotime ("$age"))  /(3600 * 24 * 365));
echo intval($Age);
