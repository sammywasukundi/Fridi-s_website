<?php
    include 'dbconnexion.php';

    if(isset($_POST['submit_inscription'])){
        if(isset($_POST['nom'],$_POST['email'],$_POST['password'],$_POST['confirmpassword'])){
            if($_POST['nom'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['confirmpassword'] != ''){
                $nom=htmlspecialchars($_POST['nom']);
                $email=htmlspecialchars($_POST['email']);
                $pass=md5($_POST['password']);
                $confirmpwd=htmlspecialchars($_POST['confirmpassword']);

                    if($_POST['confirmpassword'] != $_POST['password']){
                        echo "<script>
                        alert('Veuillez taper le même mot de passe'); 
                        </script>";
                    }
                    else{
                        if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",htmlspecialchars($_POST['email']))){
                            if(preg_match("#^.{8,}$#",md5($_POST['password']))){  
                                if(isset($_FILES['file']) AND $_FILES['file']['error'] == 0){
                                    if($_FILES['file']['size'] < 5000000)
                                    {
                                        $nom_fichier = pathinfo($_FILES['file']['name']);
                                        $recup_extension =  $nom_fichier['extension'];
                                        $extensions =array('zip','png','rar','iso','jpg','JPG','PNG','jpeg','pdf','docx','xlx');
                                        if(in_array($recup_extension,$extensions)){
                                            if(move_uploaded_file($_FILES['file']['tmp_name'],'profils/'.basename($_FILES['file']['name'])))
                                            {
                                                $req = $pdo->prepare("INSERT INTO table_auteur(nom,email,password,file) VALUES(:nom,:email,:password,:file)");
                                                $req->execute(array(
                                                    'nom' => $nom,
                                                    'password' => $pass,
                                                    'email' => $email,
                                                    'file' => $_FILES['file']['name']
                                                ));                            
                                                if($req){
                                                    header('Location:connexion.php');
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
                            }else{ 
                                echo "<script>
                                alert('Le mot de passe doit avoir aumoins 8 caractères');
                                </script>";
                            }
                        }else{
                            echo "<script>
                            alert('Adresse Email Invalide');
                            </script>"; 
                        }
                }

            }
            else
            {
                echo "<script>
                alert('Veuillez compléter toutes les cases'); 
                </script>";
            }
        }
    }
    if(isset($_POST['submit_connexion'])){
        if(isset($_POST['nom'],$_POST['password'])){
            if($_POST['nom'] != '' && $_POST['password'] != ''){

                $nom = htmlspecialchars($_POST['nom']);
                $password = md5($_POST['password']);
                $req=$pdo->prepare('SELECT * FROM table_auteur WHERE nom = :nom AND password = :password');
                $req->execute(array(
                    'nom' => $nom,
                    'password' => $password
                ));
                $result = $req->fetch();
                if($result){
                        $_SESSION['id'] = $result['id'];
                        $_SESSION['nom'] = $result['nom'];
                        $_SESSION['password'] = $result['password'];
                        $_SESSION['file'] = $result['file'];
                        header('Location:index.php');
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