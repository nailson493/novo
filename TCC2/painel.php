<?php
 include "head.php";
 include "/xampp/htdocs/TCC/TCC2/Admin/_scripts/functions.php";
?>




<body>
    <?php
    include "header.php";



    switch($_GET['r']){

        case 'signup':
                include "views/signup.php";
                break;
        case 'login':
                include "views/login.php";
                break;
        case 'inicial':
                include "views/inicial.php";
                break;
        case 'estabelecimento':
                include "views/estabelecimento.php";
                break;
        case 'profile':
                include "views/profile.php";
                break;
        case 'checkout':
                include "views/checkout.php";
                break;        
        default:
                include "views/inicial.php";
                break;
            
    }
    

    ?>
    
 <?php include "footer.php";?>
    
 <?php include "js.php"; ?>
 

</body>
</html>