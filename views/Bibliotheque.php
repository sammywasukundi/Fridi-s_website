<?php session_start(); include 'nav.php'; include 'models/request_admin.php' ?>  
<?php
    $select=$pdo->prepare("SELECT * FROM table_livre");
    $select->execute();
    while($read=$select->fetch()){
        $_SESSION['avatarAuteur'] = $read['avatarAuteur'];
        $i=1;

?>
<div style="margin-top: 15%; position: absolute;" class="space-x-6 grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 mx-auto w-full md:space-y-4 sm:space-y-4">
    <div class="flex flex-col items-start max-w-sm p-6 ml-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-full w-9 h-9" src="avatar_auteur/<?= $_SESSION['avatarAuteur']; ?>" alt="">
        <a href="#">
            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?= $read['titre']; ?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400"><?= 'Par '.$read['first_name'].' '.$read['last_name'].'</br>'.'Domaine de '.$read['domaine']; ?></p>
        <div class="flex space-x-6">
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
            <a href="livre_auteur/<?= $read['livreAuteur'] ;?>" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
            </a>
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>  
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </button>   
        </div>
    </div>  
    <div class="px-4 flex flex-col items-start max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-full w-9 h-9" src="avatar_auteur/<?= $_SESSION['avatarAuteur']; ?>" alt="">
        <a href="#">
            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?= $read['titre']; ?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400"><?= 'Par '.$read['first_name'].' '.$read['last_name'].'</br>'.'Domaine de '.$read['domaine']; ?></p>
        <div class="flex space-x-6">
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
            <a href="livre_auteur/<?= $read['livreAuteur'] ;?>" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
            </a>
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>  
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </button>   
        </div>
    </div>   
    <div  class="flex flex-col items-start max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-full w-9 h-9" src="avatar_auteur/<?= $_SESSION['avatarAuteur']; ?>" alt="">
        <a href="#">
            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?= $read['titre']; ?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400"><?= 'Par '.$read['first_name'].' '.$read['last_name'].'</br>'.'Domaine de '.$read['domaine']; ?></p>
        <div class="flex space-x-6">
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
            <a href="livre_auteur/<?= $read['livreAuteur'] ;?>" class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
            </a>
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>  
            <button class="inline-flex bg-white shadow-md hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-2 py-1.5 rounded-md font-semibold dark:bg-gray-800 dark:shadow-lg">
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </button>   
        </div>
    </div>   
</div>
<?php
        $i++;
    }
?>

<?php //include 'footer.php'; ?>


