<?php session_start(); include 'nav.php'; ?>  
<body onload="album()" class="h-auto">
        <main class="dark:text-white">
            
            <figure class=" relative transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0" >
            <div style="margin-left: 35%;" class="absolute flex justify-center mt-14">
                    <?php 
                        if(isset($_SESSION['id'])){
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
                    if(isset($_SESSION['id'])){
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
                <!-- contact offcanvas -->
            
                <!-- end contact offcanvas -->

                    
                

            </div>
            <h2 class="text-center font-semibold mt-12" style="text-shadow: 0 0 2px #316472;">Nos activités principales</h2>  
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 space-x-4 px-24 py-14">
                <div id="activity01" class="max-w-sm rounded overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110">
                    <img class="w-full object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="images/book2.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Suivie de la recherche des étudiants</div>
                        <p class="text-gray-700 text-base dark:text-white">
                            Le suivi d'un projet consiste à examiner les moyens déployés et les activités menées en vue de surveiller les progrès accomplis par rapport aux indicateurs sur la voie de la réalisation des produits.
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>
                <div id="activity02" class="max-w-sm rounded overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110">
                    <img class="w-full object-cover transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="images/book2.jpg" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Production du cahier FRIDI</div>
                        <p class="text-gray-700 text-base dark:text-white">
                            Le Foyer de Recherche interdisciplinaire pour le développement
                            integré(FRIDI) est un centre de recherche disposant d'une
                            maison d'édition de publication nomée EDITIONS DU FRIDI
                            (EdiFridi) de l'Université Adventiste de Lukanga et l'ISTM-Lukanga
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                    </div>
                </div>
                
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
                        <div class="px-6 pb-8 flex justify-center space-x-4">
                            <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-3 py-1 rounded-md text-xl dark:bg-blue-300 mt-10"><a href="user.php">Voir plus</a></button>
                            <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-3 py-1 rounded-md text-xl dark:bg-blue-300 mt-10"><a href="inscription.php">S'inscrire</a></button>
                        </div>
                    </a>    
                </div>   
                

            </div>
            <h2 class="text-center font-semibold" style="text-shadow: 0 0 2px #316472;">Ouvrages récemment publiées <br> et leurs auteurs</h2>  

            <div class="w-[90%] items-center ml-[5%] mt-12">
                <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
                    <figure id="author01" class="z-10 overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
                            <p class="my-4">If you care for your time, I hands down would go with this."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Bonnie Green</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                            </div>
                        </figcaption>    
                    </figure>
                    <figure id="author02" class="z-10 overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-tr-lg dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                            <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Roberta Casas</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                            </div>
                        </figcaption>    
                    </figure>
                    <figure id="author03" class="z-10 overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-bl-lg md:border-b-0 md:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow</h3>
                            <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                            </div>
                        </figcaption>    
                    </figure>
                    <figure id="author04" class="z-10 overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110 flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-br-lg dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                            <p class="my-4">You have many examples that can be used to create a fast prototype for your team."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center space-x-3">
                            <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Joseph McFall</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                            </div>
                        </figcaption>    
                    </figure>
                </div>
            </div>
            <!-- <h2 class="text-center font-semibold" style="text-shadow: 0 0 2px #316472;">Lire ou télécharger</h2>   -->
            <div class="flex justify-center w-[90%] ml-[5%] mt-12 rounded-md space-x-2 md:mb-12" style="margin-top:30px; text-shadow: 0 0 2px #316472;">
                <?php
                    if(!isset($_SESSION['id'])){
                ?>
                <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-3 rounded-md font-semibold dark:bg-blue-300 mt-10"><a href="inscription.php">S'inscrire</a></button>
                <button class="flex bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-3 rounded-md font-semibold dark:bg-blue-300 mt-10"><a href="connexion.php">Connexion</a></button>
                <?php
                    }else{
                ?>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 space-x-4 items-center"></div>
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="images/slide/book3.avif" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                            </div>
                        </div>
                    </div> 
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="images/slide/book3.avif" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                            </div>
                        </div>
                    </div> 
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="images/slide/book3.avif" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                            </div>
                        </div>
                    </div> 
                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="images/slide/book3.avif" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                                <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
            <!-- positionning -->
            <?php if(isset($_SESSION['id'])){ include 'positionning.php'; }if(isset($_SESSION['id_admin'])){ include 'positionning.php'; }?>
            <!-- end code positionning -->
            
        </main>
        <?php include('footer.php'); ?>

    </body>
    <script>
        ScrollReveal().reveal('#title',{delay:200,distance : '100px',duration : 2800,reset : true, origin:'top'});
        ScrollReveal().reveal('#para',{delay:200,distance : '80px',duration : 3600,reset : true, origin:'top'});
        ScrollReveal().reveal('#network_reseau',{delay:200,distance : '80px',duration : 2000,reset : true, origin:'left'});
        ScrollReveal().reveal('#activity01',{delay:300,distance : '220px',duration : 2500,reset : true, origin:'top'});
        ScrollReveal().reveal('#activity02',{delay:300,distance : '120px',duration : 2500,reset : true, origin:'top'});
        ScrollReveal().reveal('#activity03',{delay:300,distance : '20px',duration : 2500,reset : true, origin:'top'});
        ScrollReveal().reveal('#author01',{delay:300,distance : '60px',duration : 2500,reset : true, origin:'left'});
        ScrollReveal().reveal('#author02',{delay:300,distance : '60px',duration : 2500,reset : true, origin:'right'});
        ScrollReveal().reveal('#author03',{delay:300,distance : '60px',duration : 2500,reset : true, origin:'left'});
        ScrollReveal().reveal('#author04',{delay:300,distance : '60px',duration : 2500,reset : true, origin:'right'});
    </script>
