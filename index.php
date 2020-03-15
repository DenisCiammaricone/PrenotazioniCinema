<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Cinema Goosebumps</title>
        
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
            $active = 1; //dico che mi trovo su home
            include("inc/php/incs/menu.php");
        ?>
        
        <main class="mt-4 text-black Opacizable pagina" style="clear:both;">
            <div class="mt-4 container">
                <section>
                    <article class="mb-4">
                        
                        <h3 class="text-center"><i>In programmazione oggi</i></h3>
                        
                        <hr>
                        
                        <div class="card-deck" style="color:black;">

                            <!-- Primo spettacolo -->
                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Secondo spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Terzo spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Quarto spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Quinto spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title">Prova</h4>
                                  <p class="card-text">Giusto per prova</p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                        </div>
                    </article>

                    <article class="mb-4">
                        <h3 class="text-center"><i>Prossimi spettacoli</i></h3>
                        <hr>

                        <div class="card-deck" style="color:black;">

                            <!-- Primo spettacolo -->
                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Secondo spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Terzo spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Quarto spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title"></h4>
                                  <p class="card-text"></p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                            <!-- Quinto spettacolo -->

                            <div class="card" style="width:10vw;">

                              <img class="card-img-top" src="img_avatar1.png" alt="Card image">

                              <div class="card-body">
                                  <h4 class="card-title">Prova</h4>
                                  <p class="card-text">Giusto per prova</p>
                                  <a href="#" class="stretched-link"></a>
                              </div>

                            </div>

                        </div>
                    </article>
                </section>
            </div>
        </main>
        
        <?php include("inc/php/incs/footer.php");?>
        
        <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
            });
            
            window.setTimeout(sos,1);
            
        </script>
        
        <div id="bg-goosebumps">
            
            <div id="benvDiv">
                <div class="text-center">
                    <input type="image" src="inc/img/logo4.png" class="logo" id="benvenuto">
                </div>                
            </div>
            
        </div>
        
        <script>
        
            $('#benvenuto').click(
                function(){
                    
                    <?php $_SESSION['benvenuto'] = 1;?>
                    
                });
            
        </script>
        
    </body>
</html>