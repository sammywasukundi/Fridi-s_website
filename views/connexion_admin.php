<?php session_start(); ?>
<?php include 'nav.php'; include 'models/dbconnexion.php'; include 'models/request_admin.php'; ?>
<?php      
    if(isset($_SESSION['id_admin'])){
        header('Location:admin.php');
        exit;
    }
?>
<section class=" dark:bg-slate-600">
  <div class="flex flex-col items-center justify-center px-6  mx-auto md:h-screen">
      <div style="margin-top: 17% ;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-2 md:space-y-4 sm:p-4 ">
            <h1 class="text-center dark:text-white text-black font-bold">Espace administrateur</h1>
            <form class="space-y-6" action="" method="post">
                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                    <input type="text" name="nom_admin" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:samBro">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">mot de passe</label>
                    <input type="password" name="password_admin" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" oninput="longuer()">
                </div>
                <div>
                    <label id="lenght"></label>
                </div>
                <button type="submit" name="submit_admin_connexion" class="w-full block bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300">Connexion</button>
                <div class="flex justify-between text-sm font-medium text-gray-500 dark:text-gray-300">
                    Non enregistré ? <a href="inscription.php" class="text-blue-400 hover:underline dark:text-blue-500">Créer un compte</a>
                </div>
            </form>  
          </div>
      </div>
  </div>
</section>
<?php include('footer.php');?>
<script>
    function longuer(){
        let longuer = document.getElementById('password').value;
        
        if(longuer.length > 0 && longuer.length < 4){
            document.getElementById('lenght').innerHTML='<p class="flex items-center p-4 mb-4 text-semibold text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">faible</p>';
        }
        else if(longuer.length >= 4 && longuer.length < 8){
        document.getElementById('lenght').innerHTML='<p class="flex items-center p-4 mb-4 text-semibold text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-red-400">moyen</p>'; 
        }
        else{
            document.getElementById('lenght').innerHTML='<p class="flex items-center p-4 mb-4 text-semibold text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400">long</p>';   
        }
    }
</script>