
<?php
include_once('/xampp/htdocs/TCC/TCC2/Admin/_scripts/config.php');
$sql = "SELECT * FROM estilo ORDER BY id DESC";
                  
$resultStyle = $mysqli->query($sql);

// print_r($result)


?>

<?php
include_once('/xampp/htdocs/TCC/TCC2/Admin/_scripts/config.php');
$sql = "SELECT * FROM estabelecimento ORDER BY id DESC";
                  
$result = $mysqli->query($sql);

// print_r($result)


?>



  <div id="box-picture" class="container mx-auto  justify-center mt-4 ">
    <div class="grid md:grid-rows-2 grid-flow-col  grid-cols-4 gap-4 " id="dividido">
     <div class="row-span-2 col-span-2">    
      <div id="default-carousel" class="relative h-full " data-carousel="static">
        <!-- Carousel wrapper -->
        <div id="teste" class="relative h-full overflow-hidden rounded-lg ">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="img/handsome-man-cutting-beard-barber-shop-salon_1303-20932.webp" class="absolute h-full object-cover  h-full object-cover block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/handsome-man-cutting-beard-barber-shop-salon_1303-20932.webp" class="absolute h-full object-cover block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/handsome-man-cutting-beard-barber-shop-salon_1303-20932.webp" class="absolute h-full object-cover   block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
  </div> 
        <div class="side-card"><img class="rounded-md h-full" src="img/handsome-man-cutting-beard-barber-shop-salon_1303-20932.webp" alt="image description"></div>
        <div class="side-card"><img class="rounded-md h-full" src="img/handsome-man-cutting-beard-barber-shop-salon_1303-20932.webp" alt="image description"></div>
        <div class="side-card"><img class="rounded-md h-full " src="img/handsome-man-cutting-beard-barber-shop-salon_1303-20932.webp" alt="image description"></div>
        <div class="side-card"><img class="rounded-md h-full" src="img/handsome-man-cutting-beard-barber-shop-salon_1303-20932.webp" alt="image description"></div>
      </div> 
    </div>



    
    <section id="secao" class="container mx-auto  justify-center mt-4">
   
      
      <div class="bar">
        <div class="text-description">
          <!-- <h1>Erick Barber</h1> -->
          <?php
                $user_data = mysqli_fetch_assoc($result);
                {
                    echo "<tr>";
                    echo "<h1>".$user_data['nome']."</h1>";

                }

            ?>
            <!-- <div class="icon-profile relative mx-auto justify-center mt-4">
              <a href=""> 
                <img src="/icon.jpg" alt="">
              </a>
            </div> -->
          <hr class="relative">
        </div>
      </div>

      <form id="form" class="" action="./views/checkout.php">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
              Data
            </label>
            <div class="sticky">
              <div class=" flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-calendar-days"></i>
              </div>
              <input datepicker type="text" placeholder="DD/MM/AAAA" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-gray-900 block w-full pl-10 p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray">
            </div>
          </div>
          <div class="w-full md:w-1/2 px-3 mb-1">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
              Horario
            </label>
            <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:gray-900 focus:border-gray-900 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV">
              <option selected>Escolha o Horario</option>
              <option value="">9:00</option>
              <option value="">9:40</option>
              <option value="">10:20</option>
              <option value="">11:00</option>
              <option value="">14:00</option>
              <option value="">14:30</option>
              <option value="">15:00</option>
              <option value="">15:30</option>
              <option value="">16:00</option>
              <option value="">16:30</option>
              <option value="">17:00</option>
              <option value="">17:30</option>
              <option value="">18:00</option>
            </select>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
              Funcionario
            </label>
            <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV">
              <option selected>Escolha o Funcionario</option>
              <option value="">João</option>
              <option value="">Sérgio</option>
              <option value="">Pedro</option>
              <option value="">Eduardo</option>
            </select>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-last-name">
              Serviço
            </label>
            <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV">
            <?php
                $user_datae = mysqli_fetch_assoc($resultStyle);
                {
                    echo "<option>".$user_datae['estilo']."</option>";
                    echo "<option>".$user_datae['estilo']."</option>";             
                }

            ?>
 
            <!-- // <option selected>Escolha o Serviço</option>
            //   <option value="asdas"></option>
            //   <option value="">Corte + Barba</option>
            //   <option value="">Corte degradê</option>
            //   <option value="">Corte + Sombrancelha</option>
            //   <option value="">Pintura</option> -->
            </select>
          
        


          </div>
        </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <button type="Submit"  class=" w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Reservar</button>
            </div>
          </div>
      </form>
  

      <div id="lista" class="flex flex-col relative ">
        <ul style="list-style-type: none;">
          <li class="mt-6"><i class="fa-solid fa-phone"></i>&ensp;Telefone: <?php  echo "<span>".$user_data['telefone']."</span>";   ?></li>
          <li class="mt-6"><i class="fa-solid fa-clock"></i>&ensp;Funcionamento: <?php  echo "<span>".$user_data['abre']."</span>";   ?> as <?php  echo "<span>".$user_data['fecha']."</span>";   ?></li>
          <li class="mt-6"><i class="icon fas fa-map-marker-alt"></i>&ensp;Endereço: <?php  echo "<span>".$user_data['endereco']."</span>"; ?>,<?php  echo "<span>".$user_data['bairro']."</span>"; ?>,<?php  echo "<span>".$user_data['cidade']."</span>"; ?>,<?php  echo "<span>".$user_data['estado']."</span>"; ?>,<?php  echo "<span>".$user_data['cep']."</span>"; ?></li>
          <hr class="relative top-8">
         
        </ul>
      
     

      

      <div id="protect" class="" >
        <img src="./img/prot.png" alt="">
        <p>Todas as marcações incluem proteção gratuita contra cancelamentos feitos pelo estabelecimento, informações incorretas no anúncio, problemas de marcação, dentre outros.
        </p>
        <hr class="relative top-8">
      </div>

      <div class="place-title mt-10">
        <h1>O que esse lugar oferece</h1>
        <div id="place" class="gap-8 lg:grid lg:grid-cols-2  place-content-center w-[35rem] justify-center md:shrink-0 mt-4">
          <div ><li class="mt-4"><i class="fa-solid fa-wifi"></i>&ensp;WiFi</li></div>
          <div ><li class="mt-4"><i class="fa-solid fa-martini-glass"></i>&ensp;Frigobar</li></div>
          <div ><li class="mt-4"><i class="fa-solid fa-wind"></i>&ensp;Ar-condicionado</li></div>
          <div><li class="mt-4"><i class="fa-solid fa-face-laugh-beam"></i>&ensp;Sinuca</li></div>        
        </div>
      </div>
      
  
     



     


    </section>

     <div id="feedback" class=" top-[20rem] ">
      <div class="flex items-center mb-5">
        <p class="bg-blue-100 text-blue-800 text-sm font-semibold inline-flex items-center p-1.5 rounded dark:bg-blue-200 dark:text-blue-800">8.7</p>
        <p class="ml-2 font-medium text-gray-900 dark:text-black">Excelente</p>
        <span class="w-1 h-1 mx-2 bg-gray-900 rounded-full dark:bg-gray-500"></span>
        <p class="text-sm font-medium text-gray-500 dark:text-gray-400">10 Avaliações</p>
      </div>
    <div class="gap-8 sm:grid sm:grid-cols-2">
      <div>
          <dl>
              <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Funcionarios</dt>
              <dd class="flex items-center mb-3">
                  <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                      <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                  </div>
                  <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
              </dd>
          </dl>
          <dl>
              <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Conforto</dt>
              <dd class="flex items-center mb-3">
                  <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                      <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                  </div>
                  <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
              </dd>
          </dl>
          <dl>
              <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Serviço</dt>
              <dd class="flex items-center mb-3">
                  <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                      <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                  </div>
                  <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
              </dd>
          </dl>
      </div>
      <div>
          <dl>
              <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Preço</dt>
              <dd class="flex items-center mb-3">
                  <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                      <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                  </div>
                  <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
              </dd>
          </dl>
          <dl>
              <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Limpeza</dt>
              <dd class="flex items-center mb-3">
                  <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                      <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 70%"></div>
                  </div>
                  <span class="text-sm font-medium text-gray-500 dark:text-gray-400">7.0</span>
              </dd>
          </dl>
          <dl>
              <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Localização</dt>
              <dd class="flex items-center">
                  <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 mr-2">
                      <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                  </div>
                  <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
              </dd>
          </dl>
      </div>
    </div>
  
  
  </div> 
  
 


 
    
    
  <div class="flex flex-row inline-block mt-10 justify-evenly" >
    <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg ">
      <div class="relative flex gap-4">
          <img src="https://icons.iconarchive.com/icons/chanut/role-playing/128/Villager-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
          <div class="flex flex-col w-full">
              <div class="flex flex-row justify-between">
                  <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">Kaique</p>
                  <a class="text-gray-500 text-xl" href="#"></a>
              </div>
              <p class="text-gray-400 text-sm">20 April 2022, at 14:88 PM</p>
          </div>
      </div>
      <p class="-mt-4 text-gray-500">Lugar muito limpo e organizado, muito bom.</p>
      </div>
    <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg inline-block ml-[5rem] ">
      <div class="relative flex gap-4">
          <img src="https://icons.iconarchive.com/icons/chanut/role-playing/128/Villager-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
          <div class="flex flex-col w-full">
              <div class="flex flex-row justify-between">
                  <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">Kaique</p>
                  <a class="text-gray-500 text-xl" href="#"></a>
              </div>
              <p class="text-gray-400 text-sm">20 April 2022, at 14:88 PM</p>
          </div>
      </div>
      <p class="-mt-4 text-gray-500">Lugar muito limpo e organizado, muito bom.</p>
      </div>
  </div>
  <div class="flex flex-row inline-block mt-10 justify-evenly" >
    <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg ">
      <div class="relative flex gap-4">
          <img src="https://icons.iconarchive.com/icons/chanut/role-playing/128/Villager-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
          <div class="flex flex-col w-full">
              <div class="flex flex-row justify-between">
                  <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">Kaique</p>
                  <a class="text-gray-500 text-xl" href="#"></a>
              </div>
              <p class="text-gray-400 text-sm">20 April 2022, at 14:88 PM</p>
          </div>
      </div>
      <p class="-mt-4 text-gray-500">Lugar muito limpo e organizado, muito bom.</p>
      </div>
    <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg inline-block ml-[5rem] ">
      <div class="relative flex gap-4">
          <img src="https://icons.iconarchive.com/icons/chanut/role-playing/128/Villager-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
          <div class="flex flex-col w-full">
              <div class="flex flex-row justify-between">
                  <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">Kaique</p>
                  <a class="text-gray-500 text-xl" href="#"></a>
              </div>
              <p class="text-gray-400 text-sm">20 April 2022, at 14:88 PM</p>
          </div>
      </div>
      <p class="-mt-4 text-gray-500">Lugar muito limpo e organizado, muito bom.</p>
      </div>
  </div>
    
  

</body>
</html>