<?php
    session_start();
    require_once("./inc/php/db_connection.php");
?>
<!doctype html>
<html lang="it">
    <head>
        <title>Programmazione film</title>
        
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
                if(isset($_GET['codFilm']))
                {
                    $codiceFilm = $_GET['codFilm'];

                    $q = "select pk_codf from elenco_film";
                    $result = mysqli_query($conn,$q);

                    $trovato = false;

                    while($riga = mysqli_fetch_assoc($result))
                    {
                        if($codiceFilm == $riga['pk_codf'])
                        {
                            $trovato = true;
                        }
                    }

                    if($trovato)
                    {
                        $q = "select elenco_film.*, registifilm.*, generifilm.* 
                              from elenco_film,registifilm,generifilm
                              where PK_CodG = FK_CodG and PK_CodR = FK_CodR and PK_CodF = '$codiceFilm'";

                        $res = mysqli_query($conn,$q);

                        $riga = mysqli_fetch_assoc($res);

                        $titolo = $riga['Titolo'];
                        $descrizione = mysqli_real_escape_string($conn,$riga['Descrizione']);
                        $lnDescr = strlen($descrizione);
                        $locandina = $riga['Locandina'];
                        $durata = $riga['Durata'];
                        $genere = $riga['Nome'];
                        $nomeReg = $riga['NomeRF'];
                        $cognReg = $riga['CognomeRF'];
                    }
                    else
                    {
                        echo "<script language=javascript>window.location.href='index'</script>";
                    }
                }
                else
                {
                    $q = "select elenco_film.*, registifilm.*, generifilm.* 
                          from elenco_film,registifilm,generifilm
                          where PK_CodG = FK_CodG and PK_CodR = FK_CodR
                          order by pk_codf limit 1";

                    $res = mysqli_query($conn,$q);

                    $riga = mysqli_fetch_assoc($res);

                    $codiceFilm = $riga['PK_CodF'];
                    $titolo = $riga['Titolo'];
                    $descrizione = mysqli_real_escape_string($conn,$riga['Descrizione']);
                    $lnDescr = strlen($descrizione);
                    $locandina = $riga['Locandina'];
                    $durata = $riga['Durata'];
                    $genere = $riga['Nome'];
                    $nomeReg = $riga['NomeRF'];
                    $cognReg = $riga['CognomeRF'];

                }

                $q = "select TIME_FORMAT(Orario,'%H:%i') as Orario 
                      from spettacoli 
                      where FK_CodF = '$codiceFilm'";

                $res = mysqli_query($conn,$q);

                while($row = mysqli_fetch_assoc($res))
                {
                    $ora = $row["Orario"];
                }
                
                
                $user = $_SESSION['user'];
                
                $q = "select * from ordini where FK_CodU = '".$user."' and DataO = curdate()";
                
                $res = mysqli_query($conn,$q);
                
                if(mysqli_num_rows($res) == 0)
                {
                    $q = "insert into Ordini values
                          (NULL,curdate(),'$user')";
                    mysqli_query($conn,$q);
                }
                
                $row = mysqli_fetch_assoc($res);
                
                $ordine = $row['PK_CodO'];
        ?>
        <header class="jumbotron jumbotron-fluid text-center" style="padding:1%; margin-bottom:0;">
            <h1 class="display-4"><strong>Prenota biglietto</strong></h1>
        </header>
        
        <div class="d-inline-flex" id="hover-expand">
            <div class="bg-dark flex-fill" id="back-button">
                <a href="programmazione?film=<?php echo $codiceFilm;?>"><img src="inc/img/back-icon.png" alt="back-icon"></a>
            </div>
            <div class="bg-dark flex-fill" id="container-expand">
                
            </div>
            
        </div>
        
        <main class="container text-center">
            
            
        
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