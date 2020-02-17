<!doctype html>
<html lang="it">
    <head>
        <title>Cinema</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
        <link href="inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="inc/js/bootstrap.min.js" type="text/javascript"></script>
        
        <link href="inc/css/style.css" rel="stylesheet" type="text/css">
    </head>
    
    <body class="gray">
        
        <header class="jumbotron jumbotron-fluid container-fluid text-center bg-dark text-light">
            <h1 class="display-3">Benvenuti al cinema *name*</h1>
        </header>
        
        <aside class="navbar navbar-dark fixed-top">
            
            <div class="bg-danger">
                <button class="navbar-toggler no-decoration" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon no-decoration"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav bg-danger pt-2 pb-4 pl-4 pr-2">
                        <li class="nav-item"><a class="nav-link text-light" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#">Roba</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#">Altro</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#">Assistenza</a></li>
                    </ul>
                </div>
            </div>
            
        </aside>
        
        
        
        <main class="container mt-4 text-light">
            
            <section class="text-center">
                <div id="demo" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="inc/img/cinema.jpg" alt="Los Angeles">
                    </div>
                    <div class="carousel-item">
                      <img src="inc/img/film.jpg" alt="Chicago">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>

                </div>
            </section>
            
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
                
                <article>
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
        </main>
        
        <footer class="text-light pt-2 pr-4">
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
        
    </body>
</html>