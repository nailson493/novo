 <div class="flex flex-col md:flex-row">
        <nav aria-label="alternative nav">
            <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

                <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="painelAdmin.php?r=today" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Agendamentos</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="painelAdmin.php?r=lojaCopy" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-blue-600">
                            <i class="fa-solid fa-store pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-blue-600 md:text-blue-600 block md:inline-block">Estabelecimento</span>
                            </a>
                        </li>
                        <!-- <li class="mr-3 flex-1">
                            <a href="painel.php?r=loja" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                            </a>
                        </li> -->
                        <!-- <li class="mr-3 flex-1">
                            <a href="painelAdmin.php?r=menu" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fas fa-chart-area pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Analytics</span>
                            </a>
                        </li> -->
                        <!-- <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Payments</span>
                            </a>
                        </li> -->
                        <li class="mr-3 flex-1">
                            <a href="#" id="dropdownDefault" data-dropdown-toggle="dropdown" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa-solid fa-clipboard-list pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Pedidos</span>
                            </a>
                        
        <!-- Dropdown menu -->
                                <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                    <a href="painelAdmin.php?r=concluidos" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Concluidos</a>
                                </li>
                                <li>
                                    <a href="painelAdmin.php?r=cancelados" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cancelados</a>
                                </li>
                                </ul>
                            </div>
                         </li>
                    </ul>
                </div>


            </div>
        </nav>