<?php
/*
define('HOST', 'localhost');
define('DB_NAME', 'Hypnos');
define('USER', 'root');
define('PASSWORD', '');
*/

try{
    $pdo = new PDO('mysql:host=localhost;dbname=Hypnos', 'root', '');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    /*echo 'connection ok';*/
}
catch(PDOException $e){
    echo $e;
}
