<?php include ('nav.php'); ?>
<section class=" dark:bg-slate-600 ">
  <div class="grid lg:grid-cols-3 mt-14  md:grid-cols-3 sm:grid-cols-1 gap-4 space-x-4 px-24 py-40">
              <div style="margin-right: 30px;" class="flex justify-end  bg-none items-baseline">
                  <form action="" id="form_msg" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;" class="space-y-4 bg-transparent rounded overflow-hidden shadow-lg hover:shadow-lg">
                  <div class="font-bold text-xl px-3 py-3">Message</div>                  
                  <input type="text" name="nom" id="nom" class="w-[90%] ml-3 mt-12 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required="">
                    <textarea name="" id="" cols="18" rows="4" class="ml-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    <div class="flex space-x-3 justify-center">
                      <button type="submit" class="block bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-6 py-2 rounded-md font-semibold dark:bg-blue-300">Annuler</button>
                      <button type="submit" class="block bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-6 py-2 rounded-md font-semibold dark:bg-blue-300">Envoyer</button>
                    </div>
                </form>
              </div> 
            <div class="bg-transparent rounded overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110">
                <!-- <img class="w-full object-cover" src="images/contact.png" alt="Sunset in the mountains"> -->
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Contact</div>
                    <form class="space-y-2 md:space-y-6" action="#">
                      <div>
                          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre nom</label>
                          <input type="text" name="nom" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex:samBro" required="">
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                      </div>
                      <button type="submit" class="w-full block bg-white border border-blue-400 hover:shadow-inner transform hover:scale-110 hover:bg-blue-400 hover:text-white transition ease-in duration-500 px-5 py-2 rounded-md font-semibold dark:bg-blue-300">Envoyer le message</button>
                  </form>

                </div>
            </div>
            <div class="border-2 border-blue-300 rounded overflow-hidden shadow-lg card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl">Nos contacts</div>
                    <ul class="block space-y-4 justify-end mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-white sm:mt-4 top-24">
                      <div class="flex justify-between space-x-4">
                        <div class="flex bg-slate-200 rounded-tr-xl hover:shadow-inner transform hover:scale-110 hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="#" class="hover:underline"><ion-icon name="call" class="text-3xl font-bold text-blue-500 px-2"></ion-icon>
                                </a>
                            </li> 

                        </div>
                        <div>
                            <p>+243999576452</p>
                            <p>+243999576452</p>
                        </div>
                      </div>
                      
                      <div class="flex justify-between space-x-4">

                      
                        <div class="flex bg-slate-200 hover:shadow-inner transform hover:scale-110 hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="#" class="hover:underline"><ion-icon name="mail" class="mt-2 text-3xl font-bold text-blue-500 px-2"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div>
                            <p>brosammy1et2@gmail.com</p>
                            <p>brosammy1et2@gmail.com</p>
                        </div>
                      </div>
                      <div class="flex justify-between space-x-4">
                        <div class="bg-slate-200 hover:shadow-inner transform hover:scale-110 hover:text-white transition ease-in duration-500">
                            <li class="py-1">
                                <a href="#" class="hover:underline"><ion-icon name="navigate" class="mt-2 text-3xl font-bold text-blue-500 px-2"></ion-icon>
                                </a>
                            </li> 
                        </div>
                        <div>
                            <p>Université Adventiste Lukanga <br> UNILUK dans le territoire de Lubero</p>
                        </div>
                      </div>
                      </ul>
                </div>
            </div>
               
                <button type="submit" class="fixed z-20" id="btn_msg"><ion-icon style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" name="mail-unread" class="text-3xl font-bold text-slate-600 rounded overflow-hidden shadow-2xl card hover:shadow-lg transition ease-in duration-300 transform hover:scale-110"></ion-icon></button>


  </div>


</section>
<script type="text/javascript">
  const btn = document.querySelector("#btn_msg");
  const content = document.querySelector("#form_msg");

  btn.addEventListener('click',function(){
      if(getComputedStyle(content).visibility != 'visible'){
          content.style.visibility='visible';
      }
      else{
          content.style.visibility='hidden';
      }
  })
</script>
<?php include('footer.php');?>
