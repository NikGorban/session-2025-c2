<?php


function connectUser (PDO $con, string $login, string $pass): bool
{
    $sql = "SELECT * FROM `user` u WHERE u.`userlogin` = ?";
    
    $prepare = $con -> prepare($sql);


    try{
        $prepare->execute([$login]);
        if ($prepare->rowCount()!==1) return false;
        
    }catch(Exception $e){
        die($e->getMessage());
    }
    




    return true;
}

