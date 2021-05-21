<?php


$sName = "localhost"; //server name
$uName = "root"; //username to the database
$pass = ""; //password to the database
$db_name = "todo-list"; //database name

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
}catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
     
}


