
<!-- <link rel="stylesheet" href="_css/inicial.css">
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script> -->

<?php
include_once('/xampp/htdocs/TCC/TCC2/Admin/_scripts/config.php');
$sql = "SELECT * FROM estabelecimento ORDER BY id DESC";
                  
$result = $mysqli->query($sql);

// print_r($result)


?>


<body>
<div class="flex justify-center mt-4 " id="container">
  <div class="alinhar justify-center inline-block">
    <a href="painel.php?r=estabelecimento"> 
      <div class="liss"> 
          <div class="bloco">
            <div id="carouselExampleCaptions1" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions1"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions1"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions1"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions1"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions1"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
          </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1 mt-4">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2 mt-10">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>

        </div>
        </div>
    </a>
      
    <a href="painel.php?r=estabelecimento">  
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions2" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions2"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions2"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions2"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions2"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions2"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
      
        <div class="text-card">
          <a href="painel.php?r=estabelecimento"> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>
      </div>
    </a>
   
    <a href="painel.php?r=estabelecimento">
        <div class="liss"> 
          <div class="bloco">
            <div id="carouselExampleCaptions3" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions3"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions3"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions3"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions3"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions3"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
          </div>       
            <div class="text-card">
            <a href=""> 
              <table id="table">
                <tr class="p-1">
                  <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                  <td class="l-2">4,5</td>
                </tr>
                <tr class="p-2">
                  <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                  <td class="p2-line2">30 KM</td>
                </tr>
              </table>
            </a>
          </div>
        </div>
    </a>
    
    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions4" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions4"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions4"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions4"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions4"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions4"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>

      </div>
    </a>

    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions5" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions5"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions5"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions5"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions5"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions5"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>
      </div>
    </a>
    
    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions6" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions6"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions6"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions6"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions6"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions6"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>
      </div>
    </a>

    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions7" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions7"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions7"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions7"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions7"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions7"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>
      </div>
    </a>

    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions8" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions8"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions8"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions8"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions8"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions8"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barbers <i class="fa-solid fa-star"></i></td>
                <td class="l-2">3,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">3,0 KM</td>
              </tr>
            </table>
          </a>
        </div>

      </div>
    </a>

    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions5" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions5"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions5"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions5"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions5"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions5"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>
      </div>
    </a>
    
    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions6" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions6"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions6"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions6"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions6"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions6"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>
      </div>
    </a>

    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions7" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions7"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions7"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions7"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions7"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions7"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>
      </div>
    </a>

    <a href="painel.php?r=estabelecimento">
      <div class="liss"> 
        <div class="bloco">
            <div id="carouselExampleCaptions8" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions8"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions8"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions8"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active relative float-left w-full">
                <img
                  src="img/pexels-dmitry-zvolskiy-1805600.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-luis-quintero-1453005 (1).jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
              <div class="carousel-item relative float-left w-full">
                <img
                  src="img/pexels-mídia-897251.jpg"
                  class="block w-full"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCaptions8"
              data-bs-slide="prev"
            >
              <i class="fa-solid fa-chevron-left"></i>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCaptions8"
              data-bs-slide="next"
            >
              <i class="fa-solid fa-chevron-right"></i>
              <span class="visually-hidden">Next</span>
            </button>
        
          </div>
        </div>
        
        <div class="text-card">
          <a href=""> 
            <table id="table">
              <tr class="p-1">
                <td>Erick Barber <i class="fa-solid fa-star"></i></td>
                <td class="l-2">4,5</td>
              </tr>
              <tr class="p-2">
                <td><i class="fa-sharp fa-solid fa-location-dot"></i></td>
                <td class="p2-line2">30 KM</td>
              </tr>
            </table>
          </a>
        </div>

      </div>
    </a>


    <div class="box">
    <div class="line mt-5">
      <hr />
    </div>
    
    <!-- <nav class="flex justify-center m-5" id="navegation-bar" aria-label="Page navigation example">
      <ul class="inline-flex items-center -space-x-px">
        <li>
          <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Previous</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
          </a>
        </li>
        <li>
          <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
        </li>
        <li>
          <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
          <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
        </li>
        <li>
          <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
        </li>
        <li>
          <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
        </li>
        <li>
          <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Next</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
        </li>
      </ul>
    </nav> -->
    
    </div>
  </div>
</div>




</body>
</html>