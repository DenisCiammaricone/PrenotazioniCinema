<?php

    session_start();

?>

<!doctype html>
<html lang="it">
    <head>
        <title>Contatti cinema Goosebumps</title>
        
        <meta charset="utf-8">
        
        

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="inc/js/popper.min.js" type="text/javascript"></script>
        
        <link href="inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="inc/js/bootstrap.min.js" type="text/javascript"></script>
        
        <script src="inc/js/script.js" type="text/javascript"></script>
        <link href="inc/css/style.css" rel="stylesheet" type="text/css">
        <script src="inc/js/formVerification.js" type="text/javascript"></script>
        <script src="inc/js/adjustFooter.js" type="text/javascript"></script>
        <link href="inc/img/logo.png" rel="icon" type="image/png">
        
    </head>
    
    <body id="body">
        <?php
            if(isset($_SESSION['benvenuto']))
            {
                $active = 4;
                include("inc/php/incs/menu.php");
            
        ?>
        
        <main class="text-center Opacizable">
            
            <section class="sectionCenter">
                
                <h1>Contattaci</h1>
                <h3><small>Se hai bisogno di contattarci, compila questo form</small></h3>
                <article class="mt-4">
                
                    <form class="ContattiForm">
                        
                        <input type="text" class="contattiInput" placeholder="Nome">
                        
                        <input type="text" class="contattiInput" placeholder="Email">
                        
                        <input type="text" class="contattiInput" placeholder="Oggetto">
                        
                        <textarea class="contattiInput" id="TestoEmail" placeholder="Messaggio"></textarea>
                        
                        <input type="button" class="btn btn-outline-dark" id="InviaEmail" value="Invia">
                        <input type="reset" class="btn btn-outline-dark" value="Sbianca">
                        
                    </form>
                
                </article>
                
            </section>
        
        </main>
        
        <?php 
                
                include("inc/php/incs/footer.php");
            }
            else
            {
                echo "<script language=javascript>window.location.href='index'</script>";
            }
                
        ?>
        
        <script>
            $('.pagina').css('display','block');
            $('*').css('overflow-y','visible');
        </script>
    </body>
</html>