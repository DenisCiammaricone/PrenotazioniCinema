<!doctype html>
<html lang="it">
    <head>
        <title>Cinema Goosebumps</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="inc/js/slim.min.js" type="text/javascript"></script>
        <script src="inc/js/popper.min.js" type="text/javascript"></script>
        
        <link href="inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="inc/js/bootstrap.min.js" type="text/javascript"></script>
        
        <link href="inc/css/style.css" rel="stylesheet" type="text/css">
        <script src="inc/js/script.js" type="text/javascript"></script>
        <script src="inc/js/formVerification.js" type="text/javascript"></script>
        <script src="inc/js/checkPhpAutoLogin.js" type="text/javascript"></script>
    </head>
    
    <body>
        <!-- Cookie policy popup -->
        <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","colors":{"popup":{"background":"#2f2f2f","text":"#ffffff","border":"#ffffff"},"button":{"background":"#626161","text":"#ffffff"}},"position":"bottom-right","corners":"large","margin":"large","transparency":"10","content":{"href":"#","message":"Questo sito utilizza i Cookies per migliorare l'esperienza dell'utente.","button":"Accetto"}})});</script>
        
        <?php 
            session_start();
            require_once("./inc/php/db_connection.php");
    
            if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
                $email = $_COOKIE['email'];
                $pass = $_COOKIE['pass'];
                echo($email." ".$pass);
                $q = "SELECT user_email, user_pass
                    FROM users
                WHERE '$email' = user_email";
                $result = mysqli_query($conn, $q);
                mysqli_close($conn);
                
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)){
                        if(password_verify($pass,$row['user_pass'])){
                            //header("Location:../../../index.php");
                            $_SESSION["logged"] = "true";   
                        } else{
                            echo '
                                <script type="text/javascript">
                                    alert("Errore di LogIn Automatico!");
                                </script>
                            ';
                            header("Location:../../../index.php");
                            $_SESSION["logged"] = "false";
                        }
                    }
                } else {
                    echo'
                        <script type="text/javascript">
                            alert("Errore di LogIn Automatico!");
                        </script>
                    ';
                    
                    header("Location:../../../index.php");
                    $_SESSION["logged"] = "false";
                }
            }
        ?>

        <div class="fixed top" style="width:100%; z-index:9;" >
            <nav class="navbar navbar-expand justify-content-center bg-light" id="pcNav" style="padding-top:0.3vh; padding-bottom:0.5vh; ">

                <ul class="navbar-nav">

                    <li class="nav-item"><a href="index.php" class="nav-link active text-darkgray" style="margin-left:35vw;">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-darkgray" style="color:#4c4c4c;">Programmazione</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-darkgray" style="color:#4c4c4c;">Assistenza</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-darkgray" style="color:#4c4c4c; margin-right:25vw;">Contattaci</a></li>

                    <button id="loginButton" type="button" style="width:8vw;" class="btn btn-outline-dark" data-toggle="modal" data-target="#Login">
                        <?php 
                            if(isset($_SESSION['logged'])){
                                if($_SESSION['logged'] == "true"){ 
                                    echo("Log out");
                                }
                                else{ 
                                    echo("LogIn");
                                }
                            } else {
                                echo("LogIn");
                            }
                                
                        ?>
                    </button>
                </ul>

            </nav>
        </div>
        
        <?php include('login.php') ?>
        <?php include('register.php') ?>
        
        <header class="jumbotron jumbotron-fluid container-fluid text-center Opacizable" id="telHeader" style="padding:1%;">
            <h1 class="display-4">Benvenuti al cinema Goosebumps</h1>
        </header>
        
        
        <div class="fixed" id="cellAside">
            <aside class="navbar navbar-light">

                    <button class="navbar-toggler no-decoration" id="toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon no-decoration"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav pt-2 pb-4 pl-4 pr-2">
                            <li class="nav-item"><a class="nav-link" href="index.php" style="color:black;">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" style="color:black;">Programmazione</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" style="color:black;">Assistenza</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" style="color:black;">Contattaci</a></li>
                        </ul>
                    </div>

            </aside>
        </div>
        
        
        
        <main class=" mt-4 text-black Opacizable" >
            
            <div id="bg-goosebumps">s</div>
            
            <div class="container">
                <section class="mt-4">

                    <article class="mb-4">
                        <h4 >In programmazione oggi</h4>
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
                        <h4 >Prossimo spettacolo</h4>
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
        
        <footer class="text-light pt-2 pr-4 Opacizable">
            <div class="card-deck text-center">
                
                <div class="card dark-footer" style="width:20vw;">

                  <div class="card-body">
                      <p class="card-text">CopyRight @2019</p>
                  </div>

                </div>
                
                <div class="card dark-footer" style="width:20vw;">

                          <div class="card-body">
                              <p class="card-text">Giusto per prova</p>
                          </div>

                </div>
                
                <div class="card dark-footer" style="width:20vw;">

                          <div class="card-body">
                              <p class="card-text"><b>Made by</b><br>
                                    <i>Ciammaricone Denis</i><br>
                                    <i>Di Simone Andrea</i><br>
                                    <i>Lotorio Luca</i><br>
                                    <i>Stortini Corrado</i><br>
                                    <i>Tupitti Leonardo</i><br>
                                    <i>Vetuschi Luigi</i>
                              </p>
                          </div>

                </div>
                
            </div>
        </footer>
        
        <script>
            $(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        
    </body>
</html>