<?php
 include "head.php";
 include "_scripts/functions.php";
?>



<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
    <?php
    include "header.php";
    include "nav.php";

    switch($_GET['r']){

        case 'menu':
                include "views/menu.php";
                break;
        case 'today':
                include "views/today.php";
                break;
        case 'concluidos':
                include "views/concluidos.php";
                break;
        case 'cancelados':
                include "views/cancelados.php";
                break;
        case 'lojaCopy':
                include "views/lojaCopy.php";
                break;
        case 'estilo':
                include "views/estilo.php";
                break;
        default:
                include "views/menu.php";
                break;
            
    }
    


    ?>
    
    
 <?php include "js.php"; ?>
 

</body>
</html>