<?php include 'models/request.php'; include 'models/request_admin.php'; ?>
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
                        if(isset($_SESSION['id'])){
                    ?>                    
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 dark:bg-black bg-blue-100">
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="index.php">Accueil</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="contact.php">Contact</a></li>
                        <!-- <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="admin.php">Admin</a></li> -->
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="user.php">Utilisateur</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="librairie.php">Bibliothèque</a></li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <ion-icon id="sun" name="sunny-outline" class="sun cursor-pointer"></ion-icon>
                    <ion-icon id="moon" name="moon-outline" class="moon cursor-pointer"></ion-icon>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="cursor-pointer text-3xl md:hidden"></ion-icon>
                    
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer object-cover" src="profils/<?= $_SESSION['file']; ?>" alt="User dropdown">

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium truncate"><?= $_SESSION['nom']; ?></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="user.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tableau de Bord</a>
                        </li>
                        <li>
                            <a href="user.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mon compte</a>
                        </li>
                        </ul>
                        <div class="py-1">
                            <a href="deconnexion.php" class="flex px-4 py-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Déconnexion<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php
                        } 
                        elseif(isset($_SESSION['id_admin'])){
                    ?>                    
                    <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 dark:bg-black bg-blue-100">
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="index.php">Accueil</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="contact.php">Contact</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="admin.php">Administrateur</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="user.php">Utilisateur</a></li>
                        <li><a class="px-5 py-2 hover:text-blue-300 hover:bg-slate-100 hover:px-5 hover:py-2 rounded-md" href="librairie.php">Bibliothèque</a></li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <ion-icon id="sun" name="sunny-outline" class="sun cursor-pointer"></ion-icon>
                    <ion-icon id="moon" name="moon-outline" class="moon cursor-pointer"></ion-icon>
                    <ion-icon onclick="onToggleMenu(this)" name="menu" class="cursor-pointer text-3xl md:hidden"></ion-icon>
                    
                    
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer object-cover" src="admin_profils/<?= $_SESSION['file_admin']; ?>" alt="User dropdown">

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div><?= $_SESSION['nom_admin']; ?></div>
                        <div class="font-medium truncate"><a href="mailto:fridiuniluk@gmail.com?subject=Demande de soumission de l'article">fridiuniluk@gmail.com</a></div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                        <li>
                            <a href="admin.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tableau de Bord</a>
                        </li>
                        <li>
                            <a href="admin.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mon compte</a>
                        </li>
                        </ul>
                        <div class="py-1">
                        <a href="deconnexion.php" class="flex px-4 py-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Déconnexion<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>
                        </a>
                        </div>
                    </div>
                    <?php
                        }
                        else{
                    ?>
                        <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300"><a href="connexion.php">Connexion</a></button>
                        <button class=" ml-4 flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300">
                            <a href="inscription.php">S'inscrire</a>
                        </button>
                    <?php
                        }
                    ?>
                </div> 
                <!-- sessions for admin page -->
   
            </nav>

        </header>
        <script src="script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>