<?php

//can use both of the statements
// ini_set('display_errors','Off');
error_reporting(0);


$servername = "127.0.0.1";
$username = "root";
$password = "aa";

$db = new PDO("mysql:host=$servername;dbname=phpsecurity", $username, $password);
