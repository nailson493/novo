<header>
   
</header>

    <div class="flex flex-col md:flex-row w-[60rem]">

        <section class="w-full">
            <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
                <div class="bg-gray-800 pt-3 w-full">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white w-full">
                        <h1 class="font-bold pl-2">Informações do estabelecimento</h1>
                    </div>
                </div>
                <div  class="flex flex-row flex-wrap flex-grow mt-2 ml-14 w-f">
                        <div  class="mt-10 sm:mt-0 ">
                            <div id="full" class="md:grid md:grid-cols-3 md:gap-6 " >
                                <div  class="mt-5 md:col-span-2 md:mt-0  ">
                                    <form  method="POST"  runat="server" action="painelAdmin.php?r=estilo">                                                                                                                                                                                                                                                                                                             
                                            <div class="grid grid-rows-3 grid-flow-col gap-4  lg ">
                                                            <div class="col-span-2 "> 
                                                                <label for="city" class="block text-sm font-medium text-green-700 ">Estilo</label>
                                                                <input type="text" name="estilo" id="estilo" autocomplete="address-level2" class="mt-1 block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                            <div class="col-span-2  "> 
                                                                <label for="city" class="block text-sm font-medium text-green-700  ">Valor</label>
                                                                <input type="number" name="valor" id="valor" autocomplete="address-level2" class="mt-1 block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>
                                                            <div class="row-span-2 col-span-2 "> 
                                                                <label for="city" class="block text-sm font-medium text-green-700">Tempo</label>
                                                                <input type="time" step="2" name="tempo" id="tempo" autocomplete="address-level2" class="mt-1 block rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                            </div>                                                                                                 
                                            </div>
                                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Salvar</button>
                                    </form>            
                                    <?php 

if(!empty($_POST['estilo'])){

  if(cadastrarEstilo($_POST)){ ?>        

    <script language='javascript'>
      swal.fire({ 
        icon:"success",
        text: "Feito com Sucesso!",
        type: "success"}).then(okay => {
          if (okay) {
            window.location.href = "painelAdmin.php?r=estilo";
          }
        });
      </script>
      <?php }else{ ?>
          <script language='javascript'>
      swal.fire({ 
        icon:"error",
        text: "Ops! Ouve um erro.",
        type: "success"}).then(okay => {
          if (okay) {
            window.location.href = "painelAdmin.php?r=estilo";
          }
        });
      </script>
 <?php } 
}
?>                                            
                                            <div class="grid gap-4 grid-cols-2 mt-10">
                                                            <div>                                                   
                                                                <label class="inline-flex relative items-center cursor-pointer">
                                                                    <input type="checkbox" value="" class="sr-only peer">
                                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Ar-Condicionado</span>
                                                                </label>         
                                                            </div>
                                                            <div>
                                                                <label class="inline-flex relative items-center cursor-pointer">
                                                                    <input type="checkbox" value="" class="sr-only peer">
                                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Wifi</span>
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <label class="inline-flex relative items-center cursor-pointer">
                                                                    <input type="checkbox" value="" class="sr-only peer">
                                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Frigobar</span>
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <label class="inline-flex relative items-center cursor-pointer">
                                                                    <input type="checkbox" value="" class="sr-only peer">
                                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Televisão</span>
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <label class="inline-flex relative items-center cursor-pointer">
                                                                    <input type="checkbox" value="" class="sr-only peer">
                                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Louge</span>
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <label class="inline-flex relative items-center cursor-pointer">
                                                                    <input type="checkbox" value="" class="sr-only peer">
                                                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-black">Jogos</span>
                                                                </label>
                                                            </div>
                                                </div>                                                                                                                                                                                                                   
                                </div>                                                                                                              
                            </div>              
                                            <div class="">                                  
                                                <div class="bg-white w-full sm:px-8 md:px-16 sm:py-8">
                                                    <main class="container mx-auto max-w-screen-lg h-full">
                                                        <!-- file upload modal -->
                                                        <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                                                        <!-- overlay -->
                                                        <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                                            <i>
                                                            <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path d="M19.4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV4h-3v4h-2v-4h-3l4-4z" />
                                                            </svg>
                                                            </i>
                                                            
                                                        </div>

                                                        <!-- scroll area -->
                                                        <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                                                            <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                                            <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                                                <span>Arraste e solte as </span>&nbsp;<span>fotos aqui ou</span>
                                                            </p>
                                                            <input id="hidden-input" type="file" multiple class="hidden" />
                                                            <button id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                                                Selecione um arquivo
                                                            </button>
                                                            </header>

                                                            <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                                            Visualização
                                                            </h1>

                                                            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                                            <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                                                <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
                                                                <span class="text-small text-gray-500">Nenhuma foto selecionada</span>
                                                            </li>
                                                            </ul>
                                                        </section>

                                                        <!-- sticky footer -->
                                                        <footer class="flex justify-end px-8 pb-8 pt-4">
                                                            <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                                                            Concluir
                                                            </button>
                                                            <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                                            Cancelar
                                                            </button>
                                                        </footer>
                                                        </article>
                                                    </main>
                                                    </div>

                                                    <!-- using two similar templates for simplicity in js code -->
                                                    <template id="file-template">
                                                    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                                        <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                                        <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                                                        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                            <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                                            <div class="flex">
                                                            <span class="p-1 text-blue-800">
                                                                <i>
                                                                <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                                                </svg>
                                                                </i>
                                                            </span>
                                                            <p class="p-1 size text-xs text-gray-700"></p>
                                                            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                                </svg>
                                                            </button>
                                                            </div>
                                                        </section>
                                                        </article>
                                                    </li>
                                                    </template>

                                                    <template id="image-template">
                                                    <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                                        <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                                        <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                                        <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                                            <h1 class="flex-1"></h1>
                                                            <div class="flex">
                                                            <span class="p-1">
                                                                <i>
                                                                <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                    <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                                </svg>
                                                                </i>
                                                            </span>

                                                            <p class="p-1 size text-xs"></p>
                                                            <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                                </svg>
                                                            </button>
                                                            </div>
                                                        </section>
                                                        </article>
                                                    </li>
                                                    </template>
                                                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <!-- <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Salvar</button>                                      -->
                              </div>
                                            </div>                                                                                
                        
                                        </div>                                                                                           
                        
                    </div>                        
            </div>
        
          

      

    
    <script>
const fileTempl = document.getElementById("file-template"),
  imageTempl = document.getElementById("image-template"),
  empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
  const isImage = file.type.match("image.*"),
    objectURL = URL.createObjectURL(file);

  const clone = isImage
    ? imageTempl.content.cloneNode(true)
    : fileTempl.content.cloneNode(true);

  clone.querySelector("h1").textContent = file.name;
  clone.querySelector("li").id = objectURL;
  clone.querySelector(".delete").dataset.target = objectURL;
  clone.querySelector(".size").textContent =
    file.size > 1024
      ? file.size > 1048576
        ? Math.round(file.size / 1048576) + "mb"
        : Math.round(file.size / 1024) + "kb"
      : file.size + "b";

  isImage &&
    Object.assign(clone.querySelector("img"), {
      src: objectURL,
      alt: file.name
    });

  empty.classList.add("hidden");
  target.prepend(clone);

  FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
  overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
  for (const file of e.target.files) {
    addFile(gallery, file);
  }
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
  types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
  ev.preventDefault();
  for (const file of ev.dataTransfer.files) {
    addFile(gallery, file);
    overlay.classList.remove("draggedover");
    counter = 0;
  }
}

// only react to actual files being dragged
function dragEnterHandler(e) {
  e.preventDefault();
  if (!hasFiles(e)) {
    return;
  }
  ++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
  1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
  if (hasFiles(e)) {
    e.preventDefault();
  }
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
  if (target.classList.contains("delete")) {
    const ou = target.dataset.target;
    document.getElementById(ou).remove(ou);
    gallery.children.length === 1 && empty.classList.remove("hidden");
    delete FILES[ou];
  }
};

// print all selected files
document.getElementById("submit").onclick = () => {
  alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
  console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = () => {
  while (gallery.children.length > 0) {
    gallery.lastChild.remove();
  }
  FILES = {};
  empty.classList.remove("hidden");
  gallery.append(empty);
};

</script>







        </section>



<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>



