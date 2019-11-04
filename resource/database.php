<?php

$dsn = 'mysql:host=localhost; dbname=register';
$username ='root';
$password ='cinfotech';



    try{
        
    $db = new PDO ($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    
    }catch(PDOException $ex){
        echo "Connection Failed!".$ex->getMessage(); 
    }
    
   

?>


