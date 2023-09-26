<?php
 include 'dbconnexion.php';

if(isset($_POST['submit_admin'])){
    if(isset($_POST['nom_admin'],$_POST['phone_admin'],$_POST['password_admin'],$_POST['confirmpassword'])){
        if($_POST['nom_admin'] != '' && $_POST['phone_admin'] != '' && $_POST['password_admin'] != '' && $_POST['confirmpassword']){
            $nom=htmlspecialchars($_POST['nom_admin']);
            $phone=$_POST['phone_admin'];
            $pass=md5($_POST['password_admin']);
            $confirmpwd=htmlspecialchars($_POST['confirmpassword']);

            if($_POST['confirmpassword'] != $_POST['password_admin']){
                echo "<script>
                alert('Veuillez taper le même mot de passe'); 
                </script>";
            }
            else{
                if(isset($_FILES['file_admin']) AND $_FILES['file_admin']['error'] == 0){
                    if($_FILES['file_admin']['size'] < 5000000)
                    {
                        $nom_fichier = pathinfo($_FILES['file_admin']['name']);
                        $recup_extension =  $nom_fichier['extension'];
                        $extensions =array('zip','png','rar','iso','jpg','JPG','PNG','jpeg','pdf','docx','xlx');
                        if(in_array($recup_extension,$extensions)){
                            if(move_uploaded_file($_FILES['file_admin']['tmp_name'],'admin_profils/'.basename($_FILES['file_admin']['name'])))
                            {
                                $req = $pdo->prepare("INSERT INTO administrateur(nom_admin,phone_admin,password_admin,file_admin) VALUES(:nom_admin,:phone_admin,:password_admin,:file_admin)");
                                $req->execute(array(
                                    'nom_admin' => htmlspecialchars($_POST['nom_admin']),
                                    'phone_admin' => $_POST['phone_admin'],
                                    'password_admin' => md5($_POST['password_admin']),
                                    'file_admin' => $_FILES['file_admin']['name']
                                ));                            
                                if($req){
                                    header('Location:connexion_admin.php');
                                    exit(0);
                                }
                                else{
                                    echo "<script>
                                    alert('L'enregistrement n'a pas pu être effectué');                    
                                    </script>";
                                }                   
                            }
                        }else{
                            echo "<script>
                            alert('extension non autorisée');            
                            </script>";
                        }
                    }else
                    {
                        echo "<script>
                        alert('Fichier volumineux'); 
                        </script>";

                    }
                }
            }
        }else{
            echo "<script>
            alert('Veuillez completer toutes les cases'); 
            </script>";
        }

    }
}
// connexion admin 

if(isset($_POST['submit_admin_connexion'])){
    if(isset($_POST['nom_admin'],$_POST['password_admin'])){
        if($_POST['nom_admin'] != '' && $_POST['password_admin'] != ''){

            $nom = htmlspecialchars($_POST['nom_admin']);
            $password = md5($_POST['password_admin']);
            $req=$pdo->prepare('SELECT * FROM administrateur WHERE nom_admin = :nom_admin AND password_admin = :password_admin');
            $req->execute(array(
                'nom_admin' => $nom,
                'password_admin' => $password
            ));
            $result = $req->fetch();
            if($result){
                    $_SESSION['id_admin'] = $result['id_admin'];
                    $_SESSION['nom_admin'] = $result['nom_admin'];
                    $_SESSION['email_admin'] = $result['email_admin'];
                    $_SESSION['phone_admin'] = $result['phone_admin'];
                    $_SESSION['password_admin'] = $result['password_admin'];
                    $_SESSION['file_admin'] = $result['file_admin'];
                    header('Location:admin.php');
                    exit;                        

            }else{
                echo 'Mauvais identifiant ou mot de passe !';  
            }
        }else{
            echo "<script>
            alert('Veuillez compléter tous les champs'); 
            </script>";
        }
    }
}


?>