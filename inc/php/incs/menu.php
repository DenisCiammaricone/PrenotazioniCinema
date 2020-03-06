<!-- Cookie policy popup -->
        <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","colors":{"popup":{"background":"#2f2f2f","text":"#ffffff","border":"#ffffff"},"button":{"background":"#626161","text":"#ffffff"}},"position":"bottom-right","corners":"large","margin":"large","transparency":"10","content":{"href":"#","message":"Questo sito utilizza i Cookies per migliorare l'esperienza dell'utente.","button":"Accetto"}})});</script>
        
        <?php 
            session_start();
            require_once("./inc/php/db_connection.php");
    
            if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
                $email = $_COOKIE['email'];
                $pass = $_COOKIE['pass'];
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

        <div class="fixed top pagina" style="width:100%; z-index:9;" >
            <nav class="navbar navbar-expand justify-content-center bg-light" id="pcNav" style="padding-top:0.3vh; padding-bottom:0.5vh; ">

                <ul class="navbar-nav">

                    <li class="nav-item"><a href="index.php" class="nav-link active text-darkgray" style="margin-left:35vw;">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-darkgray" style="color:#4c4c4c;">Programmazione</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-darkgray" style="color:#4c4c4c;">Assistenza</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-darkgray" style="color:#4c4c4c; margin-right:25vw;">Contattaci</a></li>

                    
                        <?php 
                            if(isset($_SESSION['logged'])){
                                if($_SESSION['logged'] == "true"){ 
                                    echo('<a id="logoutButton" href="logout.php" type="button" style="width:8vw;" class="btn btn-outline-dark">Logout</a>');
                                }
                                else{ 
                                    echo('<button id="loginButton" type="button" style="width:8vw;" class="btn btn-outline-dark" data-toggle="modal" data-target="#Login">Login</button>');
                                }
                            } else {
                                echo('<button id="loginButton" type="button" style="width:8vw;" class="btn btn-outline-dark" data-toggle="modal" data-target="#Login">Login</button>');
                            }
                                
                        ?>
                    
                </ul>

            </nav>
        </div>
        
        <?php include('inc/php/incs/login.php') ?>
        <?php include('inc/php/incs/register.php') ?>

        <header class="jumbotron jumbotron-fluid container-fluid text-center Opacizable pagina" id="telHeader" style="padding:1%;">
            <h1 class="display-4">Benvenuti al cinema Goosebumps</h1>
        </header>
        
        
        <div class="fixed pagina" id="cellAside">
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