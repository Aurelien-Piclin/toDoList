<?php

function insertion($pdo) 
{
    try{
        $sth = $pdo->prepare("INSERT INTO liste (Tache, Categorie) VALUES (:task, :category)");
        $sth->bindParam('task', $_POST['task'], PDO::PARAM_STR);
        $sth->bindParam('category', $_POST['category'], PDO::PARAM_STR);
        $result = $sth->execute();
    
        } catch(PDOException $e){
            die("ERROR: Could not able to execute " . $e->getMessage());
        }
}

function delete($pdo) 
{
    try{
        $sth = $pdo->prepare('DELETE FROM liste  WHERE Id_Liste = :Id');
        $sth->bindParam('Id', $_POST['Id_Liste'], PDO::PARAM_INT);
        $sth->execute(); 

    } catch(PDOException $e){
        die("ERROR: Could not able to execute " . $e->getMessage());
    }
}

function getList($pdo) 
{
    $sql = 'SELECT Id_Liste, Tache, Categorie FROM Liste';
    return $pdo->query($sql);
}