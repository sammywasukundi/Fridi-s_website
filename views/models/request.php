<?php
    include 'dbconnexion.php';

    if(isset($_POST['submit_inscription'])){
        if(isset($_POST['nom'],$_POST['email'],$_POST['password'],$_POST['confirmpassword'])){
            if($_POST['nom'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['confirmpassword'] != ''){
                $nom=htmlspecialchars($_POST['nom']);
                $email=htmlspecialchars($_POST['email']);
                $pass=md5($_POST['password']);
                // no repeating data 

                $req=$pdo->prepare('SELECT * FROM table_auteur WHERE email = :email AND password = :password');
                $req->execute(array(
                    'email' => $email,
                    'password' => $pass
                ));
                $result = $req->fetch();
                if($result){
                    echo "<script>
                    alert('L'adresse ou le mot de passe existe déjà dans la base de données.');                    
                    </script>";
                    header('Location:../inscription.php');
                    exit;                        
                } else {
                    // Insérer la donnée dans la base de données
                    $confirmpwd=htmlspecialchars($_POST['confirmpassword']);
                    if($_POST['confirmpassword'] == $_POST['password'] and preg_match("#^.{8,}$#",md5($_POST['password']))){
                        if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",htmlspecialchars($_POST['email']))){
                            if(isset($_FILES['file']) AND $_FILES['file']['error'] == 0){
                                if($_FILES['file']['size'] < 5000000)
                                {
                                    $nom_fichier = pathinfo($_FILES['file']['name']);
                                    $recup_extension =  $nom_fichier['extension'];
                                    $extensions =array('png','jpg','JPG','PNG','jpeg');
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
                            alert('Adresse Email Invalide');
                            </script>"; 
                        }
                    }
                    else{
                        echo "<script>
                        alert('Les mots de passes doivent être les mêmes'); 
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
                $req=$pdo->prepare('SELECT * FROM table_auteur WHERE nom = :nom AND password = :password AND is_approved = 1');
                $req->execute(array(
                    'nom' => $nom,
                    'password' => $password
                ));
                $result = $req->fetch();
                if($result){
                        $_SESSION['id_auteur'] = $result['id_auteur'];
                        $_SESSION['nom'] = $result['nom'];
                        $_SESSION['email'] = $result['email'];
                        $_SESSION['password'] = $result['password'];
                        $_SESSION['file'] = $result['file'];
                        header('Location:index.php');
                        exit;                        

                }else{
                    echo "<script>
                    alert('Mauvais identifiant ou mot de passe !'); 
                    </script>";  
                }
            }else{
                echo "<script>
                alert('Veuillez compléter tous les champs'); 
                </script>";
            }
        }
    }

    // update account informations
    if(isset($_POST['submit_update_user'])){
        $nom=htmlspecialchars($_POST['nom']);
        $email=htmlspecialchars($_POST['email']);
        $pass=md5($_POST['password']);

        if(isset($_FILES['file']) AND $_FILES['file']['error'] == 0){
            if($_FILES['file']['size'] < 5000000)
            {
                $nom_fichier = pathinfo($_FILES['file']['name']);
                $recup_extension =  $nom_fichier['extension'];
                $extensions =array('png','jpg','JPG','PNG','jpeg');
                if(in_array($recup_extension,$extensions)){
                    if(move_uploaded_file($_FILES['file']['tmp_name'],'profils/'.basename($_FILES['file']['name'])))
                    {
                        $query=$pdo->prepare("UPDATE table_auteur SET nom=?,email=?,password=? WHERE id_auteur=?");
                        $query->execute(array($nom,$email,$pass,$_SESSION["id_auteur"]));
                        if($query){
                            echo "<script>
                            alert('Informations biens modifiées');            
                            </script>";
                            header('Location:../user.php');
                            exit(0);
                        }
                        else{
                            echo "<script>
                            alert('Informations nons modifiées');            
                            </script>";
                            header('Location:../user.php');
                            exit(0);
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
    // create foreign key
    //$sql = "ALTER TABLE table_message ADD FOREIGN KEY (id_auteur) REFERENCES table_auteur(id_auteur)";
    // if ($pdo->query($sql) == TRUE) {
    //     echo "Clé étrangère créée avec succès.";
    // } else {
    //     echo "Erreur lors de la création de la clé étrangère : ";
    // }


    // insertion livre 
    if(isset($_POST['submit_books'])){
        if(isset($_POST['first_name'],$_POST['last_name'],$_POST['coauteurs'],$_POST['phoneAuteur'],$_POST['ouvrages'],$_POST['titreTravail'],$_POST['domaineTravail'])){
            $first_name=htmlspecialchars($_POST['first_name']);
            $last_name=htmlspecialchars($_POST['last_name']);
            $coauteurs=htmlspecialchars($_POST['coauteurs']);
            $phoneAuteur=$_POST['phoneAuteur'];
            $ouvrages=htmlspecialchars($_POST['ouvrages']);
            $titreTravail=htmlspecialchars($_POST['titreTravail']);
            $domaineTravail=htmlspecialchars($_POST['domaineTravail']);

            if(isset($_FILES['avatarAuteur']) && isset($_FILES['livreAuteur'])) {
                $fichier1 = pathinfo($_FILES['avatarAuteur']['name']);
                $fichier2 = pathinfo($_FILES['livreAuteur']['name']) ;
            
                // Vérifiez s'il n'y a pas d'erreurs lors de l'upload des fichiers
                if ($_FILES['avatarAuteur']['error'] == 0  && $_FILES['livreAuteur']['error'] == 0) {
                    // Déplacez les fichiers uploadés vers un répertoire de destination
                    $destination1 = 'avatar_auteur/' . basename($_FILES['avatarAuteur']['name']);
                    $destination2 = 'livre_auteur/' . basename($_FILES['livreAuteur']['name']);
                    
                    move_uploaded_file($_FILES['avatarAuteur']['tmp_name'], $destination1);
                    move_uploaded_file($_FILES['livreAuteur']['tmp_name'], $destination2);
                    $requete = $pdo->prepare('INSERT INTO table_livre(first_name,last_name,coauteurs,phone,type,titre,domaine,avatarAuteur,livreAuteur) VALUES(:first_name,:last_name,:coauteurs,:phone,:type,:titre,:domaine,:avatarAuteur,:livreAuteur)');
                    $requete->execute(array(
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'coauteurs' => $coauteurs,
                        'phone' => $phoneAuteur,
                        'type' => $ouvrages,
                        'titre' => $titreTravail,
                        'domaine' => $domaineTravail,
                        'avatarAuteur' => $_FILES['avatarAuteur']['name'],
                        'livreAuteur' => $_FILES['livreAuteur']['name']
                    ));
                    if($requete){
                        echo "<script>
                        alert('Livre bien enregistré');                    
                        </script>";
                    }
                    else{
                        echo "<script>
                        alert('L'enregistrement n'a pas pu être effectué');                    
                        </script>";
                    }  
                }
            }        
        }
    }
?>