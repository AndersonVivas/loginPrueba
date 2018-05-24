<?php
$server = 'loginuser.mysql.database.azure.com';
$username = 'user@loginuser';
$password = 'Anderson123';
$database = 'login';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}