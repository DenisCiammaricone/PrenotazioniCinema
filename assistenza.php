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
        
        <main class="text-center Opacizable">
            
            <section>
                
                <h1>Assistenza</h1>
                <h3><small>Questa è l'assistenza, come possiamo aiutarti?</small></h3>
                
                <article>
                    
                    <hr>
                    <p><strong>Ho problemi con</strong></p>
                    
                        <input type="button" data-toggle="collapse" data-target="#Account" class="btn btn-dark" value="Account">
                        <input type="button" data-toggle="collapse" data-target="#Pagamenti" class="btn btn-dark" value="Pagamenti">
                        <input type="button" data-toggle="collapse" data-target="#Altro" class="btn btn-dark" value="Altro">
                
                </article>
                
                <article id="accordion">
                    
                    <!--Problemi con l'account-->
                    <div class="collapse problemi bg-dark text-light shadow-lg p-4 text-left" id="Account" data-parent="#accordion">

                        <p style="width:50%; float:left">
                            <a href="#" class="hover" style="margin-left:15%;">Mi hanno rubato l'account</a><br>
                            <a href="#" class="hover" style="margin-left:15%;">Cambiare l'email</a>
                        </p>
                        
                        <p style="width:50%; float:left">
                            <a href="#" class="hover" style="margin-left:15%;">Cambiare la password</a><br>
                            <a href="#" class="hover" style="margin-left:15%;">Problemi con il login</a>
                        </p>
                        
                    </div>

                    <!--Problemi con i pagamenti-->
                    <div class="collapse problemi bg-dark text-light shadow-lg p-4 text-left" id="Pagamenti" data-parent="#accordion">

                        <p style="width:50%; float:left">
                            <a href="#" class="hover" style="margin-left:15%;">Rimborso del biglietto</a><br>
                            <a href="#" class="hover" style="margin-left:15%;">Acquisto non andato a buon fine</a>
                        </p>
                        
                        <p style="width:50%; float:left">
                            <a href="#" class="hover" style="margin-left:15%;">Metodi di pagamento accettati</a><br>
                            <a href="#" class="hover" style="margin-left:15%;">Problemi con il pagamento</a>
                        </p>

                    </div>

                    <!--Problemi tecnici-->
                    <div class="collapse problemi bg-dark text-light shadow-lg p-4" id="Altro" data-parent="#accordion">

                       <a href="#" class="hover">Clicca qui per inviarci un'email dettagliata</a>

                    </div>
                    
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