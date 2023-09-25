<?php //session_start(); ?>  
<footer class="w-full bg-white rounded-lg shadow dark:bg-gray-900 mt-10">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="flex items-center justify-between mx-auto w-[92%]">
                <h1 class="font-semibold text-6xl dark:text-white" style="text-shadow: 3px 0px 7px rgba(30,67,21,0.8), 
                        -3px 0px 7px rgba(30,67,21,0.8), 
                        0px 4px 7px rgba(30,67,21,0.8);">FRIDI</h1>
                <?php
                    if(isset($_SESSION['id']) || isset($_SESSION['id_admin'])){
                ?>
                <ul class="space-x-4 flex justify-end mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400 sm:mt-4">
                    <li>
                        <div id="tooltip-dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Qui sommes-nous ?
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <!-- ********************** -->
                        <!-- Modal toggle -->
                        <!-- <button  type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Dark tooltip</button> -->
                        <button data-tooltip-target="tooltip-dark" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="relative inline-flex items-center px-1.5 py-1 mb-4 text-sm font-medium text-center text-blue-400 bg-white rounded-lg hover:bg-blue-400 hover:text-white  border border-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-400 dark:hover:bg-blue-400 dark:text-white" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>                        
                        </button>
                        <!-- Main modal -->
                        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center">
                                            Foyer de recherche interdisciplinaire pour le développement integré                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-6 space-y-6">
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            Le Foyer de Recherche interdisciplinaire pour le développement
                                            integré(FRIDI) est un centre de recherche disposant d'une
                                            maison d'édition de publication nomée EDITIONS DU FRIDI 
                                            (EdiFridi) de l'Université Adventiste de Lukanga et l'ISTM-Lukanga
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            Le Foyer de Recherche interdisciplinaire pour le développement
                                            integré(FRIDI) est un centre de recherche disposant d'une
                                            maison d'édition de publication nomée EDITIONS DU FRIDI 
                                            (EdiFridi) de l'Université Adventiste de Lukanga et l'ISTM-Lukanga                                        </p>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                        <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ********************** -->

                    </li>
                    <li>
                        <!-- Light style tooltip -->
                        <a href="deconnexion.php" class="hover:underline">
                        <button data-tooltip-target="tooltip-light" data-tooltip-style="light" type="button" class="relative inline-flex items-center px-1.5 py-1 mb-4 text-sm font-medium text-center text-blue-400 bg-white rounded-lg hover:bg-blue-400 hover:text-white  border border-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-400 dark:hover:bg-blue-400 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>
                        </button>
                        </a>
                        <div id="tooltip-light" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Déconnexion
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>                                              
                    </li>
                    <li>
                        <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Boîte aux messages
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                        <button data-tooltip-target="tooltip-default" type="button" class="relative inline-flex items-center px-1.5 py-1 mb-4 text-sm font-medium text-center text-blue-400 bg-white rounded-lg hover:bg-blue-400 hover:text-white  border border-blue-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-400 dark:hover:bg-blue-400 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                        </svg>
                        <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">8</div>
                        </button>
                    </li>
                </ul>
                <?php
                    }
                ?>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="mt-6">
                <span class="block text-sm text-gray-500 text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Droit d'auteur:</a>Ir Sammy wasukundi SamBro</span>
                <span class="block text-sm text-gray-500 text-center dark:text-gray-400">tel : +243 999 576 452</span>
                <span class="block text-sm text-gray-500 text-center dark:text-gray-400"><a href="" class="hover:underline">brosammy1et2@gmail.com</a> </span>
            </div>
        </div>
    </footer>