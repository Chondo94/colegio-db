<?php

$username = 'root';
$password = 'Cortez1234';
$database = 'schooldb';
$host = 'localhost';

try {

    $db_con = new PDO("mysql:host=$host; dbname=$database; charset=utf8", $username, $password);
    $db_con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch (PDOException $e){

    echo $e->getMessage();

 }
