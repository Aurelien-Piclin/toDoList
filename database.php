<?php
$servername="";
$user = "";
$pwd = "";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=todolist", $user, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}