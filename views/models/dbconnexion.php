<?php
    try{
        $pdo=new PDO('mysql: host=localhost;dbname=fridi','root','');
    }
    catch(PDOException $e){
        die("Connection failed". $e->getMessage());
    }
?>