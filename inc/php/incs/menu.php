<!-- Cookie policy popup -->
        <link rel="stylesheet" type="text/css" href="//wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="//wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","colors":{"popup":{"background":"#2f2f2f","text":"#ffffff","border":"#ffffff"},"button":{"background":"#626161","text":"#ffffff"}},"position":"bottom-right","corners":"large","margin":"large","transparency":"10","content":{"href":"#","message":"Questo sito utilizza i Cookies per migliorare l'esperienza dell'utente.","button":"Accetto"}})});</script>
        
        <?php 
            
            require_once("./inc/php/db_connection.php");
    
            if(isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
                $email = $_COOKIE['email'];
                $pass = $_COOKIE['pass'];
                $q = "SELECT nomeU, Email, Password
                    FROM users
                WHERE '$email' = Email";
                $result = mysqli_query($conn, $q);
                
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)){
                        if(password_verify($pass,$row['Password'])){
                            //header("Location:../../../index.php");
                            $_SESSION["logged"] = "true";
                            $nome = $row['nomeU'];
                            $_SESSION['nome'] = $nome;
                        } else{
                            echo '
                                <script type="text/javascript">
                                    alert("Errore di LogIn Automatico!");
                                </script>
                            ';
                            header("Location:index");
                            $_SESSION["logged"] = "false";
                        }
                    }
                } else {
                    echo'
                        <script type="text/javascript">
                            alert("Errore di LogIn Automatico!");
                        </script>
                    ';
                    
                    header("Location:index");
                    $_SESSION["logged"] = "false";
                }
            }
        ?>
        <div class="fixed top pagina OpacizableFooter" id="nav" style="width:100%; z-index:9;" >
            <nav class="navbar navbar-expand justify-content-center bg-light" id="pcNav" style="position:relative;padding-top:0.3vh; padding-bottom:0.5vh;">

                <ul class="navbar-nav">

                    <li class="nav-item"><a href="index" class="nav-link <?php if($active == 1) echo "active"?> text-darkgray" style="margin-left:32vw;">Home</a></li>
                    <li class="nav-item"><a href="programmazione" class="nav-link <?php if($active == 2) echo "active"?> text-darkgray" style="color:#4c4c4c;">Programmazione</a></li>
                    <li class="nav-item"><a href="assistenza" class="nav-link <?php if($active == 3) echo "active"?> text-darkgray" style="color:#4c4c4c;">Assistenza</a></li>
                    <li class="nav-item"><a href="contatti" class="nav-link <?php if($active == 4) echo "active"?> text-darkgray" style="color:#4c4c4c; margin-right:25vw;">Contattaci</a></li>

                    
                        <?php 
                            if(isset($_SESSION['logged'])){
                                if($_SESSION['logged'] == "true"){ 
                                    
                                    $nome = $_SESSION['nome'];
                                    echo '<div class="dropdown" id="account-dropdown" style="position:absolute; right:1%; width:2.5vw;">';
                                        echo "<span id='account-name' data-toggle='dropdown' style='position:absolute; margin-top:15%;'>".ucfirst($nome)."</span>";                                    
                                ?>
                        
                                    
                                        <a href="#" data-toggle="dropdown"><img src="inc/img/account.png" id="account-image"></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Account</a>
                                            <a class="dropdown-item" href="#">Acquisti</a>
                                            <a class="dropdown-item" id="logoutButton" href="logout.php">Logout</a>
                                        </div>
                                        
                                    
                                    
                                <?php
                                    echo "</div>";
                                    
                                }
                                else{ 
                                    echo('<div id="account-dropdown" style="position:absolute; right:1.2%; width:2.5vw;">
                                            <a href="#" class="btn btn-outline-dark" id="loginButton" data-toggle="modal" data-target="#Login">Login</a>
                                        
                                        </div>');
                                }
                            } else {
                                echo('<div id="account-dropdown" style="position:absolute; right:1.2%; ">
                                            <a href="#" class="btn btn-outline-dark" id="loginButton" data-toggle="modal" data-target="#Login" style="width:8vw;">Login</a>
                                        
                                        </div>');
                            }
                                
                        ?>
                    
                </ul>

            </nav>
        </div>
        <?php include('inc/php/incs/login.php') ?>
        <?php include('inc/php/incs/register.php') ?>

        <header class="jumbotron jumbotron-fluid Opacizable pagina" id="telHeader" style="padding:1%;">
            <div class="text-center container-fluid">
                    <img src="inc/img/logo.png" style="display:inline; width:5vw">
                    <h1 class="display-3" id="logo" style="display:inline; vertical-align:middle">Goosebumps</h1>
            </div>
        </header>
        
        
        <div class="fixed pagina OpacizableFooter" id="cellAside" style="clear:both;">
            <aside class="navbar navbar-light">

                    <button class="navbar-toggler no-decoration" id="toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon no-decoration"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav pt-2 pb-4 pl-4 pr-2">
                            <li class="nav-item"><a class="nav-link" href="index" style="color:black;">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="programmazione" style="color:black;">Programmazione</a></li>
                            <li class="nav-item"><a class="nav-link" href="assistenza" style="color:black;">Assistenza</a></li>
                            <li class="nav-item"><a class="nav-link" href="contatti" style="color:black;">Contattaci</a></li>
                        </ul>
                    </div>

            </aside>
        </div>