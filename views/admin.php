<?php session_start(); include 'nav.php'; ?>
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
                        ?>
        <!-- <h1 class="inline-block sm:mt-10 md:text-5xl font-bold sm:text-3xl text-center mb-10 dark:text-white">Foyer de recherche interdisciplinaire pour le développement integré</h1> -->
        <div id="wrapper" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;" class="max-w-6xl mx-auto  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                    <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Demande de publication</button>
                </li>
                <li class="w-full">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Soumission au lecteur</button>
                </li>
                <li class="w-full">
                    <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Utilisateur</button>
                </li>
            </ul>
            <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Profil
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Noms
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Coauteurs
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Titre
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Domaine
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Paiement
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Publier
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Lire
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Supprimer
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                require 'models/delete.php' ;
                                $read =$pdo->query("SELECT * from table_livre");
                                $i = 1;
                                while($student=$read->fetch()){
                            ?> 
                                <form action="" method="post" enctype="multipart/form-data">
                                
                                    
                                    <?php
                                        if($student['is_published']==false){
                                            ?>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img class="rounded-full w-9 h-9 object-cover" src="avatar_auteur/<?= $student['avatarAuteur'] ; ?>" alt="">
                                        </th>
                                        <th  scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <?= $student['first_name'].' '.$student['last_name'] ; ?>
                                            <input name="nom" type="hidden" value="<?= $student['first_name'].' '.$student['last_name'] ; ?>"> 
                                        </th>
                                        <td class="px-6 py-4">
                                                <?= $student['coauteurs'];  ?>
                                                <input name="coauteurs" value="<?= $student['coauteurs'];  ?>" type="hidden"> 
                                        </td>
                                        <td class="px-6 py-4">
                                                <?= $student['titre'] ; ?>
                                                <input name="titre" value="<?= $student['titre'] ; ?>" type="hidden"> 
                                        </td>
                                        <td class="px-6 py-4">
                                                <?= $student['domaine'] ; ?>
                                                <input name="domaine" value="<?= $student['domaine'] ; ?>" type="hidden"> 
                                        </td>
                                        <td class="px-6 py-4">
                                                <?= $student['laDate'] ; ?>
                                                <input name="LaDate" value="<?= $student['laDate'] ; ?>" type="hidden"> 
                                        </td>
                                        <td class="px-6 py-4">
                                                <?= $student['type'] ; ?>   
                                                <input name="type" value="<?= $student['type'] ; ?>" type="hidden"> 
                                        </td>
                                        <td class="px-6 py-4">
                                                <?= 'ici paiement' ; ?>
                                                <input name="paiement" value="<?= 'ici paiement' ; ?>" type="hidden"> 
                                        </td>
                                                                    
                                        <td class="px-6 py-4">
                                            <!-- <form action="" method="post"> -->
                                                 
                                                <a href="models/update.php?id=<?= $student['id'] ; ?> " class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                                                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                    </svg>
                                                </a>
                                                
                                            <!-- </form> -->
                                        </td>
                                        <td class="px-6 py-4">
                                                <a href="livre_auteur/<?= $student['livreAuteur'] ;?>" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                                                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                                    </svg>
                                                </a>
                                                <input  name="fichier" value="<?= $student['livreAuteur'] ;?>" type="hidden"> 
                                        </td>
                                        <td class="px-6 py-4">
                                            <button type="submit" name="delete_demande" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                                            <a href="models/delete.php?id=<?= $student['id'] ; ?> ">
                                                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </a>
                                            </button> 
                                        </td>

                                    </tr>
                                            <?php
                                        }
                                            ++$i;
                                        }
                                    ?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <form action="models/send_mail.php" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto shadow-xl p-4 rounded-xl">
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email du FRIDI</label>
                            <input type="email" name="emailfridi" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email du lecteur</label>
                            <input type="email" name="emaillecteur" id="emailLecteur" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                        </div>
                        <div class="bg-white rounded-t-lg dark:bg-gray-800">
                            <label class="sr-only">Your comment</label>
                            <textarea name="message" id="message" rows="6" class="w-full text-sm text-gray-900 bg-white px-3 py-3 rounded-lg dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400 shadow-lg border border-gray-300" placeholder="Ecrire un message" required></textarea>
                        </div>
                        <div class="flex items-start ">
                            <div class="flex-1 items-center mb-6">
                                <label for="select" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir l'article</label>
                                <select name="id" id="" class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                                    <?php
                                        $selection = $pdo->query("SELECT * FROM table_livre");
                                        while($res = $selection->fetch()){
                                    ?> 
                                            <option class="text-black" value="<?= $res['id'];?>"><?= $res['first_name'].':'.$res['livreAuteur'];?></option>
                                    <?php

                                        }

                                    ?>
                                </select>                            
                            </div>
                        </div>
                        <div class="mb-6">
                            <button type="submit" name="submit_lecteur" class="bg-white border border-blue-400 hover:shadow-inner hover:bg-blue-400 hover:text-white px-5 py-2 rounded-md font-semibold dark:bg-blue-300 w-full">Envoyer</button>
                        </div>
                    </form>
                </div>
                <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>Comptes d'utilisateurs</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">

                            
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Id
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Nom d'utilisateur
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Mot de passe d'utilisateur
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Photo d'utilisateur
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Autoriser
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Supprimer
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Publications
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            require 'models/delete.php' ;
                                            $read =$pdo->query("SELECT * from table_auteur");
                                            $i = 1;
                                            while($student=$read->fetch()){
                                        ?> 
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <?= $student['id_auteur'] ; ?>
                                                </th>
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    <?= $student['nom'] ; ?>
                                                </th>
                                                <td class="px-6 py-4">
                                                    <?= $student['password'];  ?>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <?= $student['file'] ; ?>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <form  action="" method="post">
                                                        <button id="autorisation" type="submit" name="submit_autorisation" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg" onclick="Autoriser()">
                                                            <svg  class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                                            </svg>
                                                         </button>
                                                    </form>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <button type="submit" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg"><a href="models/delete.php?id_auteur=<?= $student['id_auteur'] ; ?> ">
                                                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                    </a></button>   
                                                </td>
                                                <td class="px-6 py-4">
                                                    <button type="submit" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php
                                                    ++$i;
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
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
                            <span>What are the differences between Flowbite and Tailwind UI?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        
    </div>
    <script defer>
        const Autoriser = () =>{
            document.getElementById('autorisation').innerText="déjà autorisé";
        }
        //alert('oui');
        //ScrollReveal().reveal('#wrapper',{delay:200,distance : '100px',duration : 2800,reset : true, origin:'top'});
    </script>




