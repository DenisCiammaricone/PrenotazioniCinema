<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Assistenza cinema Goosebumps</title>
        
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
                $active = 3;
                include("inc/php/incs/menu.php");
            
        ?>
        
        <main class="text-center">
            
            <section>
                <h1>Assistenza</h1>
                <h3><small>Questà è l'assistenza, come possiamo aiutarti?</small></h3>
                <article>
                    
                    <hr>
                    <p><strong>Ho problemi con</strong></p>
                    
                        <input type="button" class="btn btn-dark"  value="Account">
                        <input type="button" class="btn btn-dark"  value="Pagamenti">
                        <input type="button" class="btn btn-dark"  value="Tecnico">
                
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