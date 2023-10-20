<?php session_start(); include 'nav.php';?>  
<?php //require 'models/request.php'; ?>
    <div style="margin-top: 10%" class="absolute w-full">
            
            <?php 
                if(isset($_SESSION['id_admin'])){
            ?>
                <div id="toast-success" class="mb-10 max-w-sm mx-auto flex justify-center p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mt-10 z-50" role="alert">
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
                elseif(isset($_SESSION['id_auteur'])){
            ?>
                <div id="toast-success" class="mb-10 max-w-sm mx-auto flex justify-center p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mt-10 z-50" role="alert">
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
                }
            ?>
    <div id="wrapper" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;" class="max-w-4xl mx-auto w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select tab</label>
            <select id="tabs" class="hidden bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Statistics</option>
                <option>Services</option>
                <option>FAQ</option>
            </select>
        </div>
        <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
                <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Demande de soumission</button>

            </li>
            <li class="w-full">
                <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Mon compte</button>
            </li>
            <li class="w-full">
                <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Utilisateur</button>
            </li>
        </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                <form action="https://marchand.maishapay.online/payment/vers1.0/merchant/checkout" method="post" enctype="multipart/form-data">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                            <input type="text" id="first_name" name="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                        </div>
                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post Nom</label>
                            <input type="text" id="last_name" name="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                        </div>                   
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coauteurs</label>
                            <input type="text" id="coauteurs" name="coauteurs"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required>
                        </div>  
                        <div>
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">N° Télephone</label>
                            <input type="text" id="phone" name="phoneAuteur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="^(\+243|0)[1-9]\d{8}$" required>
                        </div>
                    </div>
                    <div class="mb-6">                       
                        <label for="ouvrages" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                        <select id="ouvrages" name="ouvrages" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="article">Article</option>
                        <option value="ouvrage">Ouvrage</option>
                        <option value="ouvrage">Nouvelles</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre Du Travail</label>
                        <input type="text" name="titreTravail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Le seigneur des anneaux" required>
                    </div> 
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domaine De Recherche</label>
                        <input type="text" name="domaineTravail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comptabilité,agronomie,Informatique" required>
                    </div> 
                    <div class="mb-6 flex-1 justify-center ">
                            <div class="flex space-x-8">
                                <div id="tooltip-light" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Choisir l'avatar
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                                <label  class="space-x-2 rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <svg data-tooltip-target="tooltip-light" class="mb-1 w-10 h-10 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                        </svg> 
                                    <input name="avatarAuteur" type="file" class="hidden" />
                                </label>
                                <div class="flex pl-0 sm:pl-2 ml-4">
                                    <div id="tooltip-dark" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Choisir l'article
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <label  class="space-x-2 rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <svg data-tooltip-target="tooltip-dark" class="mb-1 w-10 h-10 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                        </svg>
                                        <input name="livreAuteur" type="file" class="hidden" />
                                    </label>
                                </div>
                            
                                <!-- maishapay payment -->
                                <input type="hidden" name="gatewayMode" value=0>
                                <input type="hidden" name="publicApiKey" value="MP-SBPK-$zafoa2i0lB5Kh4ug5KZ$hq5mY$5SyO41gLF82XKy22g$0ThMN2moXfywWXp/hpobDWU9R/$$Es0gACf5u5TsnJ1OGh3I6wA1wY36nQ8s2qB4TFQ3gAgo0uv">
                                <input type="hidden" name="secretApiKey" value="MP-SBPK-YNaQyfm/0dK4q9YO2W9$.yeo6M/1wgd$OYKD/FMDazaYHha6fgwBXMluLUg3jUxx2n2$4mLPOyo$22$0BFyRz1Wd/lhKPvUkUPanmfDg0mw4ft1fN4$4J2vR">
                                <input type="hidden" name="montant" value="50">
                                <input type="hidden" name="devise" value="USD">
                                <!-- <input type="hidden" name="callbackUrl" value="{callback Url}"> -->
                                <!-- <input type="submit" class="flex justify-center items-center bg-white border border-blue-400 hover:shadow-inner hover:bg-blue-400 hover:text-white px-5 py-2 rounded-md font-semibold dark:bg-blue-300" value="Payement"> -->
                                <!-- maishapay payment -->
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                    Payement
                                </button>
                                <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-6 text-left">
                                                <h3 class="mb-8 text-lg font-normal text-gray-500 dark:text-gray-400">Ces numéros peuvent changés</h3>
                                                <ul class="text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    <li>+243999576452</li>
                                                    <li>+243999576452</li>
                                                    <li>+243999576452</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit_books" class="w-full mx-auto bg-white border border-blue-400 hover:shadow-inner hover:bg-blue-400 hover:text-white px-5 py-2 rounded-md font-semibold dark:bg-blue-300">Soumettre</button>
                            </div>
                    </div> 
                </form>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <h2 class="text-center mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Informations sur mon compte</h2>
                <div class="w-full  bg-white dark:bg-gray-800 dark:border-gray-700">
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
                                <button type="button" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Modifier</button>
                            </li>                        
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                        if(isset($_SESSION['id_auteur'])){
                    ?>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="profils/<?= $_SESSION['file']; ?>" alt="User image"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= $_SESSION['nom']; ?></h5>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= $_SESSION['email']; ?></h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Utilisateur simple</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                            <!-- Modal toggle -->
                            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Modifer
                            </button>

                                    <!-- Main modal -->
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Modifer les informations
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <?php
                                                        $readOne =$pdo->prepare('SELECT * from table_auteur where id_auteur=?');
                                                        $readOne->execute(array($_SESSION["id_auteur"]));
                                                        $i = 1;
                                                
                                                        while($user=$readOne->fetch()){
                                                    ?>
                                                    <form class="space-y-4 md:space-y-6" action="" enctype="multipart/form-data" method="post">
                                                        <input type="hidden" name="id_auteur" value="<?= $user['id_auteur'] ; ?>">    
                                                        <div>
                                                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                                                            <input type="text" name="nom" id="nom" value="<?= $user['nom'] ; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                        <div>
                                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                                                            <input type="email" name="email" value="<?= $user['email'] ; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                        <div>
                                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmer le Mot de passe</label>
                                                            <input type="password" name="password" value="<?= md5($user['password']) ; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>
                                                        <div>
                                                            <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir une photo</label>
                                                            <div class="flex pl-0 space-x-1 sm:pl-2">
                                                                <div class="flex w-full">
                                                                    <label class=" rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                                                        <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                                                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"/>
                                                                        </svg> 
                                                                        <input name="file" type="file" value="<?= $user['file'] ; ?>" class="hidden" />
                                                                    </label>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                        <button type="submit" name="submit_update_user" class="w-full block bg-white border border-blue-400 hover:shadow-inner hover:bg-blue-400 hover:text-white px-5 py-2 rounded-md font-semibold dark:bg-blue-300">Modifier</button>
                                                    </form>
                                                    <?php
                                                            ++$i;
                                                        }
                                                    ?>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal modification -->
                    <?php
                        }elseif(isset($_SESSION['id_admin'])){
                    ?>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="admin_profils/<?= $_SESSION['file_admin']; ?>" alt="User image"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= $_SESSION['nom_admin']; ?></h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Administrateur</span>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                
            </div>
            <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                    <span>Article</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">

                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                    <span>Messages d'utilisateurs</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                    <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                    <span>Recommandations pour la préparation des manuscrits</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Pour accélérer le processus de publication des articles soumis, il est demandé à l'auteur du manuscrit
                            de se conformer strictement aux recommandations ci-dessous.
                            Les recommandations suivantes sont conformes aux normes uniformisées pour la préparation des manuscrits soumis aux CAHIERS DU FRIDI.
                            Checklist ou liste de contrôle de la soumission L'auteur examine minutieusement les éléments de cette liste de contrôle. Principes de base
                            Le manuscrit n'est pas simultanément soumis à une autre revue.
                            Le manuscrit ne sera pas non plus soumis dans une autre revue après sa publication.
                            Format général de l'article
                            Le format du papier est A4.
                            Le type de police est Times New Roman et la taille de police est 12.
                            Une page titre comporte le titre de l'article, suivi de : Projet d'article présenté pour publication
                            aux CAHIERS DU FRIDI ; par (Prénom, nom, Grade, domaine de recherche) ; Institution
                            d'affiliation et contacts ; date de soumission.
                            Seul le titre de l'article est présenté en majuscule et ne dépasse pas 12 à 15 mots.
                            Le titre de l'article précise l'objet, les sujets d'étude et le lieu.
                            Le titre de l'article est repris sur la deuxième page mais sans nom de l'auteur.
                            Le titre ne commence pas avec un article, pas d'abréviation, pas de mots morts comme,
                            étude de problématique de, cas de, etc
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Le nom de l'auteur et des co-auteurs viennent directement après le titre.
                            Le résumé (^350 mots) de l'autre langue vient avant celui de la langue de publication.
                            Le résumé comprend : (1) une brève introduction (une à deux phrases) qui se clôture par
                            le but de l'étude, (2) la méthodologie comprenant le type d'étude,
                            l'échantillonnage et la taille de l'échantillon avec ses principales caractéristiques,
                            le lieu de collecte et le moment, (3) les principaux résultats en fonction de chaque objectif et (4) une brève conclusion (une à deux
                            phrases) avec une brèche ouverte pour d'autres chercheurs.
                            Les mots clés suivent le résumé de l'article et ne sont pas plus de six.
                            L'article suit globalement le plan IMRED des articles originaux comprenant introduction,
                            matériel et méthodes, résultats, discussion.
                            Les sous titres en minuscule suivent seulement les niveaux de retrait mais ne sont pas
                            numérotés .
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php if(isset($_SESSION['id_auteur'] )|| isset($_SESSION['id_admin'])){ include 'positionning2.php'; }?>
    <?php include 'footer.php'; ?>
</div>


<script>
//ScrollReveal().reveal('#wrapper',{delay:200,distance : '100px',duration : 2800,reset : true, origin:'top'});
</script>