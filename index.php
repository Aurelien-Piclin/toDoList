<?php 

require_once("bootstrap.php");

if (isset($_GET['page']) && $_GET['page'] == "insertion")
{
    insertion($pdo);  
}
else if (isset($_GET['page']) && $_GET['page'] == "delete")
{
    delete($pdo);
}

try{
    $donnee = getList($pdo);
    $template = 'view/index.html.php';
    include 'view/layout.html.php';
} catch(PDOException $e){
    die("ERROR: Could not able to execute " . $e->getMessage());
}