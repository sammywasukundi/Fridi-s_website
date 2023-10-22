<?php include 'dbconnexion.php'; ?>
<?php
// update forpublication du document
//if(isset($_POST['submit_publication'])){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $update=$pdo->prepare("UPDATE table_livre SET is_published=true WHERE id=?");
        $update->execute(array($id));
        if($update){
            echo "<script>
            alert('Fichier publié');            
            </script>";
            header('Location:../admin.php');
            exit(0);
        }
        else{
            echo "<script>
            alert('Fichier non publié');            
            </script>";
            exit(0);
        }
    }
//}
?>