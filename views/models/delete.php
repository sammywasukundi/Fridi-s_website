<?php //session_start(); ?>
<?php
     include 'dbconnexion.php';
    if(isset($_GET['id_auteur'])){

    
        $recupId = $_GET['id_auteur'];
        $delete = $pdo->prepare("DELETE FROM table_auteur WHERE id_auteur = ?");
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
    if(isset($_GET['id_admin'])){
        $recupId = $_GET['id_admin'];
        $delete = $pdo->prepare("DELETE FROM administrateur WHERE id_admin = ?");
        $delete->execute(array(
            $recupId
        ));
        if($delete){
            session_start();
            $_SESSION = array();
            session_destroy();
            header('Location:../inscription.php');
            exit(0);
        }else{
            echo 'fichier non supprimé';
        }
    }
    // delete le livre par l'admin
    if(isset($_GET['id'])){
        $recupIdLivre=$_GET['id'];
        $deleteLivre = $pdo->prepare("DELETE from table_livre WHERE id = ?");
        $deleteLivre ->execute(array( $recupIdLivre ));
        if($deleteLivre){
            header('Location:../admin.php');
            exit(0);
        }else{
            echo 'fichier non supprimé';
        }   
    }
?>