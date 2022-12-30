<?php
    try{
        $access = new PDO("mysql:host=localhost;
        dbname=shoping;
        charset=utf8",
        'root',
        'root'
        );
        $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $access;
        
    }catch(Exeption $e){
    $e->getMessage();
    }
?>