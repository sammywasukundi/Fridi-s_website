<?php include 'models/request.php'; include 'models/request_admin.php'; ?>
<?php
    if(isset($_POST['validate'])){
        $keywords=$_POST['keywords'];
        $res=$pdo->prepare("SELECT message FROM table_message WHERE message = '$keywords'");
        $res->setFETchMode(PDO::FETCH_OBJ);
        $res->execute();

        if($row=$res->fetch()){
            ?>
            <br><br>
            <table>
                <tr>
                    <th>message</th>
                    <th>destinataire</th>
                </tr>
                <tr>
                    <td><?php echo $row->message; ?></td>
                    <td><?php echo $row->date_message; ?></td>
                </tr>
            </table>
        <?php
        }
        else{
            echo "n'existe pas";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="../style_distant/dist.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <!-- <script src="./node_modules/preline/dist/preline.js"></script> -->
        <title>Navbar</title>
    </head>
    <body class="font-[Poppins] text-blue-400 dark:text-blue-400 dark:bg-slate-600">
        <header class="fixed w-full bg-blue-100 z-50 dark:bg-black dark:text-white">
            <nav class="flex justify-between items-center mx-auto w-[92%]">
                <div>
                    <h1 class="font-semibold text-6xl" style="text-shadow: 3px 0px 7px rgba(30,67,21,0.8), 
                    -3px 0px 7px rgba(30,67,21,0.8), 
                    0px 4px 7px rgba(30,67,21,0.8);">FRIDI</h1>
                </div>
                <div class="nav-links duration-500 md:static fixed md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full flex items-center bg-blue-100 dark:bg-black">
                    <?php 
                        if(isset($_SESSION['id_auteur'])){
                    ?>                    
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 dark:bg-black bg-blue-100">
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="index.php">Accueil</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="user.php">Mon espace</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="Bibliotheque.php">Bibliothèque</a></li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <button id="btn_search" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>    
                    </button>
                    <ion-icon id="sun" name="sunny-outline" class="sun cursor-pointer w-5 h-5"></ion-icon>
                    <ion-icon id="moon" name="moon-outline" class="moon cursor-pointer w-5 h-5"></ion-icon>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="cursor-pointer text-3xl md:hidden"></ion-icon>
                    
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer object-cover" src="profils/<?= $_SESSION['file']; ?>" alt="User dropdown">

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="flex px-1 py-4 space-x-6 text-sm text-gray-900 dark:text-white">
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer object-cover" src="profils/<?= $_SESSION['file']; ?>" alt="User dropdown">
                        <div class="block">
                            <div class="font-medium truncate"><?= $_SESSION['nom']; ?></div>
                            <div class="font-medium truncate">Utilisateur</div> 
                        </div>

                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="user.php" class="flex px-1 py-2 space-x-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                </svg>Tableau de Bord
                            </a>
                        </li>
                        <li>
                            <a href="user.php" class="flex px-1 py-2 space-x-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>Mon compte
                            </a>
                        </li>
                        </ul>
                        <div class="py-1">
                            <a href="deconnexion.php" class="flex px-1 py-4 space-x-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>Déconnexion
                            </a>
                        </div>
                    </div>
                    <?php
                        } 
                        elseif(isset($_SESSION['id_admin'])){
                    ?>                    
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 dark:bg-black bg-blue-100">
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="index.php">Accueil</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="admin.php">Mon espace</a></li>
                        <!-- <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="user.php">Utilisateur</a></li> -->
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="Bibliotheque.php">Bibliothèque</a></li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <button id="btn_search" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>    
                    </button>
                    <ion-icon id="sun" name="sunny-outline" class="sun cursor-pointer w-5 h-5"></ion-icon>
                    <ion-icon id="moon" name="moon-outline" class="moon cursor-pointer w-5 h-5"></ion-icon>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="cursor-pointer text-3xl md:hidden"></ion-icon>
                    
                    
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer object-cover" src="admin_profils/<?= $_SESSION['file_admin']; ?>" alt="User dropdown">

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="flex px-1 space-x-6 py-3 text-sm text-gray-900 dark:text-white">
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer object-cover" src="admin_profils/<?= $_SESSION['file_admin']; ?>" alt="User dropdown">
                        <div class="block">
                            <div><?= $_SESSION['nom_admin']; ?></div>
                            <div>Administrateur</div>                            
                        </div>

                        <div class="font-medium truncate"><a href="mailto:fridiuniluk@gmail.com?subject=Demande de soumission de l'article">fridiuniluk@gmail.com</a></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="admin.php" class="flex px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                </svg>Tableau de Bord
                            </a>
                        </li>
                        <li>
                            <a href="settings.php" class="flex px-1 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Paramètres
                            </a>
                        </li>
                        </ul>
                        <div class="py-1">
                        <a href="deconnexion.php" class="flex px-1 py-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>Déconnexion
                        </a>
                        </div>
                    </div>
                    <?php
                        }
                        else{
                    ?>
                        <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300 sm:flex md:flex"><a href="connexion.php">Connexion</a></button>
                        <button class=" ml-4 flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300">
                            <a href="inscription.php">S'inscrire</a>
                        </button>
                    <?php
                        }
                    ?>
                </div> 
                <!-- sessions for admin page -->
   
            </nav>
            <?php
                if(isset($_SESSION['id_auteur']) or isset($_SESSION['id_admin'])){
            ?>
            <form class="hidden justify-center max-w-2xl mx-auto mb-2" id="form_search" method="post" action="" name="fo">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <input type="search" name="keywords" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-300 dark:focus:border-blue-300" placeholder="Mots-clés" required>
                    <button type="submit" name="validate" class="text-gray-600 absolute right-2 bottom-2  hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:text-gray-400 dark:hover:text-white dark:focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>  
                    </button>
                </div>
            </form>
            
            <!-- <form class="hidden justify-center max-w-xl mx-auto mb-2" id="form_search">
                <div class="flex">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">Catégories<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <select id="ouvrages" name="ouvrages" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-tl-lg rounded-bl-lg focus:ring-blue-500 focus:border-blue-500 block max-w-md p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="article">Education</option>
                    <option value="ouvrage">Informatique</option>
                    <option value="ouvrage">Santé</option>
                    <option value="ouvrage">Agronomie</option>
                    <option value="ouvrage">Economie</option>
                    </select>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Rechercher ici ..." required>
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-400 rounded-r-lg hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4 text-gray-600 hover:text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form> -->

            <?php
                }
            ?>  

        </header>
        <!-- <div style="margin-top: 10%;" class="z-10 bg-current shadow-md dark:bg-current dark:shadow-md absolute items-center max-w-xl w-full border-b">
            <p class="">Resultat</p>
            <ol class="inline-block">
                <li>Resultat 1</li>
            </ol>
        </div> -->
        <script>
            const btn = document.querySelector("#btn_search");
            const content = document.querySelector("#form_search");

            btn.addEventListener('click',function(){
                if(getComputedStyle(content).display != 'none'){
                    content.style.display='none';
                }
                else{
                    content.style.display='flex';
                }
            })
        </script>
        <script src="script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>