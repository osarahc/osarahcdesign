<?php
/*$username = "osarahc";
$password = "Tripoli12!";
$hostname = "mysql.osarahcdesign.com";*/

$dsn = 'mysql:host=mysql.osarahcdesign.com;dbname=osarahc_db';
$username = 'osarahc';
$password = 'Tripoli12!';

try{
    $db = new PDO($dsn, $username, $password);
}catch (PDOException $e){
    $error_message - $e->getMessage();
    exit();
}