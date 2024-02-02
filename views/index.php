<?php session_start(); include 'nav.php'; ?>  
<body onload="album()" class="h-auto">
        <main class="dark:text-white">
            
            <figure class=" relative transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0" >
            <div style="margin-left: 35%;" class="absolute flex justify-center mt-14">
                    <?php 
                        if(isset($_SESSION['id_auteur'])){
                    ?>
                        <div id="toast-success" class="flex items-center p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mt-10 z-50" role="alert">
                            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="sr-only">Check icon</span>
                            </div>
                            <div class="ml-3 text-sm font-normal text-center"><?= 'Bonjour '.'<span class="font-bold">'.$_SESSION['nom'].'</span>'.' vous êtes connectés'.'<br>'."en tant qu'utilisateur"; ?></div>
                            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <?php 
                            }elseif(isset($_SESSION['id_admin'])){
                        ?>
                            <div id="toast-success" class="flex items-center p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mt-10 z-50" role="alert">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="sr-only">Check icon</span>
                                </div>
                                <div class="ml-3 text-sm font-normal text-center"><?= 'Bonjour '.'<span class="font-bold">'.$_SESSION['nom_admin'].'</span>'.' vous êtes connectés'.'<br>'."en tant qu'administrateur"; ?></div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                </button>
                            </div>   
                        <?php                            
                            }
                            else{
                        ?>   
                        <div id="toast-success" class="flex items-center p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mt-10 z-50" role="alert">
                            <div class="ml-3 text-sm font-normal text-center"><?= 'Vous êtes déconnectés , connectez-vous'.'<br>'.'ou créer un compte'; ?></div>
                            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div> 
                    <?php
                        }
                    ?>
                </div>
                <a href="#">
                    <img  class="rounded-lg w-full" src="images/slide/book1.jpg" alt="image description" id="idImage" style="height: 640px;">
                </a>
                <figcaption style="bottom: 165px;" class="absolute px-4 text-lg text-white">
                    <h1 class="inline-block md:text-5xl font-bold sm:text-3xl text-center" style="margin-top: 240px; text-shadow: 3px 0px 7px rgba(30,67,21,0.8), 
                    -3px 0px 7px rgba(30,67,21,0.8), 
                    0px 4px 7px rgba(30,67,21,0.8);" id="title">Foyer de recherche interdisciplinaire pour le développement integré</h1>
                    <p class="mt-10  text-center" style="text-shadow: 3px 0px 7px rgba(30,67,21,0.8), 
                    -3px 0px 7px rgba(30,67,21,0.8), 
                    0px 4px 7px rgba(30,67,21,0.8);" id="para">
                        Le Foyer de Recherche interdisciplinaire pour le développement
                        integré(FRIDI) <br> est un centre de recherche disposant d'une
                        maison d'édition de publication nomée EDITIONS DU FRIDI <br>
                        (EdiFridi) de l'Université Adventiste de Lukanga et l'ISTM-Lukanga
                    </p>
                </figcaption>
            </figure>

            <div id="network_reseau" class="relative block text-center space-y-6">
                <?php
                    if(isset($_SESSION['id_auteur'])){
                ?>
                    <ul class="block fixed z-50 justify-end mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400 sm:mt-4 top-24">
                        <div class="bg-slate-600 rounded-tr-xl hover:shadow-inner transform hover:scale-110 hover:bg-white hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="#" class="hover:underline"><ion-icon name="logo-whatsapp" class="mt-2 text-3xl font-bold text-green-500 px-2"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div class="bg-slate-600 hover:shadow-inner transform hover:scale-110 hover:bg-white hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="#" class="hover:underline"><ion-icon name="logo-facebook" class="mt-2 text-3xl font-bold text-blue-600"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div class="bg-slate-600 hover:shadow-inner transform hover:scale-110 hover:bg-white hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="#" class="hover:underline"><ion-icon name="logo-twitter" class="mt-2 text-3xl font-bold text-blue-400"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div class="bg-slate-600 rounded-br-xl hover:shadow-inner transform hover:scale-110 hover:bg-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="#" class="hover:underline"><ion-icon name="logo-youtube" class="mt-2 text-3xl font-bold text-red-600 "></ion-icon>
                                </a>
                            </li> 
                        </div>
                    </ul>
                <?php    
                    }
                ?>
                                <?php
                    if(isset($_SESSION['id_admin'])){
                ?>
                    <ul class="block fixed z-50 justify-end mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400 sm:mt-4 top-24">
                        <div class="bg-slate-600 rounded-tr-xl hover:shadow-inner transform hover:scale-110 hover:bg-white hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="https://web.whatsapp.com/" class="hover:underline"><ion-icon name="logo-whatsapp" class="mt-2 text-3xl font-bold text-green-500 px-2"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div class="bg-slate-600 hover:shadow-inner transform hover:scale-110 hover:bg-white hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="https://web.facebook.com/search/top?q=uniluk" class="hover:underline"><ion-icon name="logo-facebook" class="mt-2 text-3xl font-bold text-blue-600"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div class="bg-slate-600 hover:shadow-inner transform hover:scale-110 hover:bg-white hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="https://www.youtube.com/?hl=FR" class="hover:underline"><ion-icon name="logo-twitter" class="mt-2 text-3xl font-bold text-blue-400"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div class="bg-slate-600 rounded-br-xl hover:shadow-inner transform hover:scale-110 hover:bg-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="https://twitter.com/?lang=fr" class="hover:underline"><ion-icon name="logo-youtube" class="mt-2 text-3xl font-bold text-red-600 "></ion-icon>
                                </a>
                            </li> 
                        </div>
                    </ul>
                <?php    
                    }
                ?>
                <!-- contact offcanvas -->
            
                <!-- end contact offcanvas -->

                    
                

            </div>
            <h2 class="text-center font-semibold mt-12" style="text-shadow: 0 0 2px #316472;">Nos activités principales</h2>  
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 space-x-4 px-24 py-14">
                <div id="activity01" class="max-w-sm rounded overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110">
                    <img class="w-full object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="images/etudiants.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Suivie de la recherche des étudiants</div>
                        <p class="text-gray-700 text-base dark:text-white">
                            Le suivi d'un projet consiste à examiner les moyens déployés et les activités menées en vue de surveiller les progrès accomplis par rapport aux indicateurs sur la voie de la réalisation des produits.
                        </p>
                    </div>
                </div>
                <a href="#">
                    <div id="activity02" class="max-w-sm rounded overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110">
                        <img class="w-full object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="images/cahier.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Production du cahier FRIDI</div>
                            <p class="text-gray-700 text-base dark:text-white">
                                Le Foyer de Recherche interdisciplinaire pour le développement
                                integré(FRIDI) est un centre de recherche disposant d'une
                                maison d'édition de publication nomée EDITIONS DU FRIDI
                                (EdiFridi) de l'Université Adventiste de Lukanga et l'ISTM-Lukanga
                            </p>
                        </div>
                    </div>
                </a>
                <div id="activity03" class="max-w-sm rounded overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110">
                        <img class="w-full object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="images/book2.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Edition du Fridi (EdiFridi)</div>
                            <p class="text-gray-700 text-base dark:text-white">
                                Pour ce qui concerne la publication des livres aux <strong>Edition du Fridi (EdiFridi)</strong>, nous recevons aussi toutes les ouvrages 
                                , les brochures les collections qui sont des publications en série regroupant sous un même titre des documents ayant chacun son titre 
                                particulier , des monographies.
                            </p>
                        </div>
                    </a>    
                </div>   
                

            </div>
            <?php if(isset($_SESSION['id_auteur']) || isset($_SESSION['id_admin'])){ ?>
            <h2 class="text-center font-semibold" style="text-shadow: 0 0 2px #316472;">Ouvrages récemment publiées <br> et leurs auteurs</h2>  
            <?php } ?>
            <?php
                if(isset($_SESSION['id_auteur']) || isset($_SESSION['id_admin'])){
                    $select=$pdo->prepare('SELECT * FROM table_livre where is_published=true ORDER BY id DESC LIMIT 0, 2 ');
                    $select->execute();
                    while($read=$select->fetch()){
                        $_SESSION['avatarAuteur'] = $read['avatarAuteur'];
                        $i=0;

            ?>
            <div  class="grid sm:space-y-4 w-[90%] items-center ml-[5%] mt-12 lg:grid-cols-2 md:grid-cols-2">
                <div id="author01" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="avatar_auteur/<?= $_SESSION['avatarAuteur']; ?>" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $read['titre']; ?></h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= 'Domaine : '.$read['domaine']; ?></p>

                        <div class="badge mb-6">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span><?php echo $read['laDate'];  ?></span>
                        </div>
                        <a href="livre_auteur/<?= $read['livreAuteur'] ;?>" class="inline-flex items-center text-sm font-medium text-center text-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:text-gray-300">
                            Lire le livre
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                </div>
                <div id="author02" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="avatar_auteur/<?= $_SESSION['avatarAuteur']; ?>" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $read['titre']; ?></h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= 'Domaine : '.$read['domaine']; ?></p>
                        
                        <div class="badge mb-6">
                            <svg class="w-5 inline-block" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span><?php echo $read['laDate'];  ?></span>
                        </div>
                        <a href="livre_auteur/<?= $read['livreAuteur'] ;?>" class="inline-flex items-center text-sm font-medium text-center text-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:text-gray-300">
                            Lire le livre
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <?php
                        $i++;
                    }
                }
            ?>
            <!-- <h2 class="text-center font-semibold" style="text-shadow: 0 0 2px #316472;">Lire ou télécharger</h2>   -->
            <div class="flex justify-center w-[90%] ml-[5%] mt-12 rounded-md space-x-2 md:mb-12" style="margin-top:30px; text-shadow: 0 0 2px #316472;">
                <?php
                    if(!isset($_SESSION['id_auteur']) && !isset($_SESSION['id_admin'])){
                ?>
                <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-3 rounded-md font-semibold dark:bg-blue-300 mt-10"><a href="inscription.php">S'inscrire</a></button>
                <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-3 rounded-md font-semibold dark:bg-blue-300 mt-10"><a href="connexion.php">Connexion</a></button>
                <?php
                    }else{
                ?>

                <?php
                    }
                ?>
            </div>
            <!-- positionning -->
            <?php if(isset($_SESSION['id_auteur'])){ include 'positionning.php'; }if(isset($_SESSION['id_admin'])){ include 'positionning.php'; }?>
            <!-- end code positionning -->
            
        </main>
        <?php include('footer.php'); ?>

    </body>
    <script>
        ScrollReveal().reveal('#title',{delay:200,distance : '200px',duration : 2800,reset : true, origin:'top'});
        ScrollReveal().reveal('#para',{delay:200,distance : '200px',duration : 3000,reset : true, origin:'top'});
        ScrollReveal().reveal('#network_reseau',{delay:200,distance : '80px',duration : 2000,reset : true, origin:'left'});
        ScrollReveal().reveal('#activity01',{delay:300,distance : '250px',duration : 2500,reset : true, origin:'top'});
        ScrollReveal().reveal('#activity02',{delay:300,distance : '200px',duration : 2500,reset : true, origin:'top'});
        ScrollReveal().reveal('#activity03',{delay:300,distance : '150px',duration : 2500,reset : true, origin:'top'});
        ScrollReveal().reveal('#author01',{delay:300,distance : '100px',duration : 2500,reset : true, origin:'left'});
        ScrollReveal().reveal('#author02',{delay:300,distance : '100px',duration : 2500,reset : true, origin:'right'});
        ScrollReveal().reveal('#author03',{delay:300,distance : '100px',duration : 2500,reset : true, origin:'left'});
        ScrollReveal().reveal('#author04',{delay:300,distance : '100px',duration : 2500,reset : true, origin:'right'});
    </script>
