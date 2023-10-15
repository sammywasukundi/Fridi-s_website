<?php session_start(); ?>
<?php include 'nav.php'; include 'models/dbconnexion.php'; include 'models/request.php';?>
<?php      
    if(isset($_SESSION['id_auteur'])){
        header('Location:index.php');
        exit;
    }
?>
<section class=" dark:bg-slate-600">
  <div class="flex flex-col items-center justify-center px-6  mx-auto md:h-screen">
      <div style="margin-top: 17% ;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="w-full bg-white rounded-lg shadow dark:border sm:max-w-md dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-2 md:space-y-4 sm:p-4 ">
            <h1 class="text-center dark:text-white text-black font-bold">Connectez-vous</h1>
              <form class="space-y-2 md:space-y-6" action="" method="post">
                  <div>
                      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                      <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:samBro">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" oninput="longuer()">
                  </div>
                  <div>
                    <label id="lenght"></label>
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                  </div>
                  <button type="submit" name="submit_connexion" class="w-full block bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300">Connexion</button>
                  <p class="flex justify-between text-sm font-light text-gray-500 dark:text-gray-400">
                      <a class="font-medium text-primary-600 hover:underline dark:text-primary-500 text-blue-400" href="connexion_admin.php">Connexion comme administrateur</a> <a href="inscription.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500 text-blue-400">Inscrivez-vous</a>
                  </p>
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