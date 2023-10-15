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

// insertion messages 
if(isset($_POST['submit_message'])){
    if(isset($_POST['destinataire_mail'],$_POST['message'],$_POST['monTextarea'])){
        if (!empty($_POST['destinataire_mail'] && !empty($_POST['message']) && !empty($_POST['monTextarea']))){
            $destinataire_mail=htmlspecialchars($_POST['destinataire_mail']);
            $message=htmlspecialchars($_POST['message']);
            $monTextarea=htmlspecialchars($_POST['monTextarea']);

            if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",htmlspecialchars($_POST['destinataire_mail']))){
                if(isset($_FILES['monInputFile']) AND $_FILES['monInputFile']['error'] == 0){
                    if($_FILES['monInputFile']['size'] < 8000000)
                    {
                        $nom_fichier = pathinfo($_FILES['monInputFile']['name']);
                        $recup_extension =  $nom_fichier['extension'];
                        $extensions =array('zip','rar','iso','pdf','docx','xlx');
                        if(in_array($recup_extension,$extensions)){
                            if(move_uploaded_file($_FILES['monInputFile']['tmp_name'],'fichier_email/'.basename($_FILES['monInputFile']['name'])))
                            {
                                $req = $pdo->prepare("INSERT INTO table_message(destinataire_mail,message,monTextarea,monInputFile) VALUES(:destinataire_mail,:message,:monTextarea,:monInputFile)");
                                $req->execute(array(
                                    'destinataire_mail' => $destinataire_mail,
                                    'message' => $message,
                                    'monTextarea' => $monTextarea,
                                    'monInputFile' => $_FILES['monInputFile']['name']
                                ));                            
                                if($req){
                                    echo "<script>
                                    alert('message envoyé avec succès');            
                                    </script>";
                                    //exit(0);
                                }
                                else{
                                    echo "<script>
                                    alert('message non envoyé');                    
                                    </script>";
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
            }else{
                echo "<script>
                alert('Veuillez entrer une adresse email valide'); 
                </script>";
            }   
        }
        else{
            echo "<script>
            alert('Veuillez compéter toutes les cases'); 
            </script>";
        }
    }
}

//submit publication
if(isset($_POST['submit_publication'])){ 	 	 	 	 	 	 
    $nom=$_POST['nom'];
    $coauteurs=$_POST['coauteurs'];
    $titre=$_POST['titre'];
    $domaine=$_POST['domaine'];
    $LaDate=$_POST['LaDate'];
    $type=$_POST['type'];
    $paiement=$_POST['paiement'];
    //$fichier=$_FILES['fichier'];

    // if(isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0){
    //     if($_FILES['fichier']['size'] < 8000000)
    //     {
    //         $nom_fichier = pathinfo($_FILES['fichier']['name']);
    //         $recup_extension =  $nom_fichier['extension'];
    //         $extensions =array('zip','rar','iso','pdf','docx','xlx','odt');
    //         if(in_array($recup_extension,$extensions)){
    //             if(move_uploaded_file($_FILES['fichier']['tmp_name'],'livreAuteur/'.basename($_FILES['fichier']['name'])))
    //             {
                    $req = $pdo->prepare("INSERT INTO table_articlepublier(nom,coauteurs,titre,domaine,LaDate,type,paiement) VALUES(:nom,:coauteurs,:titre,:domaine,:LaDate,:type,:paiement)");
                    $req->execute(array(	 	 	 	 	 		
                        'nom' => $nom,
                        'coauteurs' => $coauteurs,
                        'titre' => $titre,
                        'domaine' => $domaine,
                        'LaDate' => $LaDate,
                        'type' => $type,
                        'paiement' => $paiement
                        //'fichier' => $_FILES['fichier']['name']
                    ));                            
                    if($req){
                        echo "<script>
                        alert('fichier publié avec succès');            
                        </script>";
                        //exit(0);
                    }
                    else{
                        echo "<script>
                        alert('fichier non publié');                    
                        </script>";
                        //exit(0);
                    }                   
    //            }
    //         }else{
    //             echo "<script>
    //             alert('extension non autorisée');            
    //             </script>";
    //         }
    //     }else
    //     {
    //         echo "<script>
    //         alert('Fichier volumineux'); 
    //         </script>";

    //     }
    // }

}
// approbation de user par admin
if(isset($_POST['submit_autorisation'])){
    $query=$pdo->prepare("UPDATE table_auteur SET is_approved=true");
    $query->execute();
    if($query){
        echo "<script>
        alert('Utilisateur autorisé');            
        </script>";
        //header('Location:../admin.php');
        //exit(0);
    }
    else{
        echo "<script>
        alert('Utilisateur autorisé');            
        </script>";
        //header('Location:../admin.php');
        exit(0);
    }
}


?>

