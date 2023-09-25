<?php
     include 'dbconnexion.php';
    if(isset($_GET['id'])){

    
        $recupId = $_GET['id'];
        $delete = $pdo->prepare("DELETE FROM table_auteur WHERE id = ?");
        $delete->execute(array(
            $recupId
        ));
        if($delete){
            header('Location:../admin.php');
            exit(0);
        }else{
            echo 'fichier non supprimé';
        }
    }
?>