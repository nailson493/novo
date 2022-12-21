<body>
    <section class="dark:bg-gray-900 bg-local bg-no-repeat w-screen h-screen bg-right-top" style="background-image: url(img/ksdnakfaf.png)">
    <!-- <div class="">   
    <a href="inicial.html" class="fixed left-5 top-8 dark:text-white">
     <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
          Voltar
        </button>
    </a>
    </div>      -->
        <div class="flex flex-col items-center justify-center md:h-screen content-center max-w-lg" >
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-25 h-24 mr-2" id="logo" src="img/logo.png" alt="logo">
            </a>
            <div class="w-full bg-dark-500 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white-900 md:text-2xl dark:text-white">
                        Faça o login ou crie uma conta
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" id="lblEmail" class="block mb-2 text-sm font-medium  dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZVrequired=">
                        </div>
                        <div>
                            <label for="password" id="lblSenha" class="block mb-2 text-sm font-medium  dark:text-white">Senha</label>
                            <input type="password" name="password" id="senha" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-white hover:underline dark:text-primary-500">Forgot password?</a>
                        </div>
                        <button type="submit" href="painel.php?r=inicial" id="btnLogin" class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Login</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Não tem uma conta ainda?<a href="painel.php?r=signup" class="font-medium text-primary-600 hover:underline dark:text-primary-500"> Inscrever-se</a>
                        </p>
                       
                        <button type="button" href = "painel.php?r=inicial" id="btnAuthGoogle" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-800 dark:bg-white dark:border-gray-700 dark:text-gray-900 dark:hover:bg-gray-200 mr-2 mb-2">
                        <img class="w-6 h-6 right-3 relative" src="img/google.svg" alt="">
                        Continuar com Google
                         </button>
                    </form>
                </div>
            </div>
        </div>
        <script type="module">
                            import { GoogleAuthProvider, signInWithRedirect, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-auth.js";

                            import { auth } from "./_js/app.js";

                            var btnAuthGoogle = document.getElementById('btnAuthGoogle');
                            var btnlogin = document.getElementById('btnLogin');
                            var lblEmail = document.getElementById('lblEmail');
                            var lblSenha = document.getElementById('lblSenha');

                            btnAuthGoogle.addEventListener('click', function(){

                                const provider = new GoogleAuthProvider();

                                signInWithRedirect(auth, provider)
                                .then(function (result) {
                                    console.log(result);
                                });
                            });

                            btnlogin.addEventListener('click', function(){
                                signInWithEmailAndPassword(auth, lblEmail.value, lblSenha.value)
                                .then((userCredential) => {
                                    // Signed in 
                                    const user = userCredential.user;
                                    // ...
                                })
                                .catch((error) => {
                                    const errorCode = error.code;
                                    const errorMessage = error.message;
                                });

                             });
                        </script>
      </section>

    </body>

