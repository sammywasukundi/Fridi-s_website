<?php include 'nav.php';?>
<?php include 'models/request.php'; include 'models/request_admin.php'; ?>
<section class=" dark:bg-slate-600">
        <div class="max-w-xl  mx-auto w-full h-36">
        </div>            
        <h1  class="text-center dark:text-white text-black font-bold">Créer un compte</h1>            
        <div style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="max-w-xl  mx-auto mt-14 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs" class="hidden bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Inscription administrateur</option>
                    <option>Inscription utilisateur</option>
                </select>
            </div>
            <ul class="text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                <li class="w-full">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Utilisateur</button>
                </li>                
                <li class="w-full">
                    <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Administrateur</button>
                </li>
            </ul>
            <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <div class="p-6 space-y-4 md:space-y-4 sm:p-4 ">
                        <form class="space-y-4 md:space-y-6" action="#" enctype="multipart/form-data" method="post">
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                                <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:samBro">
                            </div>
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:brosammy@gmail.com">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmer le Mot de passe</label>
                                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir une photo</label>
                                <input type="file" name="file" id="file" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <button type="submit" name="submit_inscription" class="w-full block bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300">Soumettre</button>
                            <p class="flex justify-between text-sm font-light text-gray-500 dark:text-gray-400">
                                Vous avez déjà un compte ? <a href="connexion.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500 text-blue-400">Connectez-vous</a>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                    <div class="p-6 space-y-4 md:space-y-4 sm:p-4 ">
                        <form class="space-y-4 md:space-y-6" action="#" enctype="multipart/form-data" method="post">
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                                <input type="text" name="nom_admin" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:samBro">
                            </div>
                            <!-- <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Email</label>
                                <input type="email" name="email_admin" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:brosammy@gmail.com">
                            </div> -->
                            <div>
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre N° Téléphone</label>
                                <input type="text" name="phone_admin" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:+243999576452">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                                <input type="password" name="password_admin" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmer le Mot de passe</label>
                                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div>
                                <label for="file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir une photo</label>
                                <input type="file" name="file_admin" id="file" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <button type="submit" name="submit_admin" class="w-full block bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300">Soumettre</button>
                            <p class="flex justify-between text-sm font-light text-gray-500 dark:text-gray-400">
                                Vous avez déjà un compte ? <a href="connexion_admin.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500 text-blue-400">Connectez-vous</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include('footer.php');?>