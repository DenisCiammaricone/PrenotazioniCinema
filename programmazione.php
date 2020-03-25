<?php
    session_start();

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
                $active = 2;
                include("inc/php/incs/menu.php");
            
        ?>
        
        <main class="container text-center">
            
            <section class="d-inline-flex pt-1 pb-1 pl-1 bg-dark">
                
                <?php
                    
                    $q = "select pk_codf, Locandina from elenco_film order by PK_CodF LIMIT 5";
                        
                    $res = mysqli_query($conn,$q);
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $film = $row['pk_codf'];
                        $locandina = $row['Locandina'];
                        
                ?>
                
                <article class="mr-1 flex-fill">
                    
                    <a href="programmazione?film=<?php echo $film; ?>"><img class="locandineFilm" src="admin/locandine/<?php echo $locandina; ?>"></a>
                    
                </article>
                
                <?php 
                    }
                ?>
                
            </section>
            
            <hr style="opacity:0;">
            
            <section class="d-inline-flex pt-1 pb-1 pl-1 bg-dark">
            
                <button class="p-2 borderless border-right bg-dark text-white">Lunedì</button>
                <button class="p-2 borderless border-right bg-dark text-white">Martedì</button>
                <button class="p-2 borderless border-right bg-dark text-white">Mercoledì</button>
                <button class="p-2 borderless border-right bg-dark text-white">Giovedì</button>
                <button class="p-2 borderless border-right bg-dark text-white">Venerdì</button>
                <button class="p-2 borderless border-right bg-dark text-white">Sabato</button>
                <button class="p-2 borderless bg-dark text-white">Domenica</button>
            
            </section>
            
            <hr style="opacity:0;">
            
            <div class="d-flex">
                <section class="d-inline-flex flex-column bg-light text-black text-left" style="float:left;margin-left:19%; width:18%;">
                    <?php 
                        if(isset($_GET['film']))
                        {
                            $codiceFilm = $_GET['film'];

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
                        mysqli_close($conn);
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $ora = $row["Orario"];

                    ?>

                            <div class="border p-1 text-center"><?php echo $ora; ?></div>

                    <?php

                        }

                    ?>
                </section>

                <section class="d-inline-flex" style="float:left; margin-left:0.5%;">

                    <a href="inc/php/incs/trailer?film=<?php echo $codiceFilm;?>" id="trailer"><img src="admin/locandine/<?php echo $locandina; ?>" style="height:400px;"></a>

                    <div class="modal fade" id="trailer-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            </div>
                        </div>
                    </div>

                    <div class="ml-3 text-left mt-1" style="width:35%;">
                        <h3><?php echo $titolo?></h3>
                        <h3 class="text-left"><small>Regista: <?php echo $cognReg." ".$nomeReg; ?></small></h3>
                        <h4 class="text-left"><small>Durata: <?php echo $durata." minuti"; ?></small></h4>
                        <h4 class="text-left"><small>Genere: <?php echo $genere; ?></small></h4>

                        <p>

                            <?php 

                                $descr = substr_replace($descrizione,"... <a href='#'>Continua</a>",251,$lnDescr-251);

                                $descr = stripslashes(utf8_encode($descr));

                                echo $descr;
                            ;?>

                        </p>
                        <?php 
                            if(isset($_SESSION['logged']))
                            {
                               if($_SESSION['logged'] == "true")
                               {
                                   echo '<a href="prenotazione?codFilm='.$codiceFilm.'" type="button" class="btn btn-dark text-light">Acquista biglietto</a>';
                               }
                               else
                               {
                                   echo '<a href="#" data-toggle="modal" data-target="#ErroreAcquisto" type="button" class="btn btn-dark text-light">Acquista biglietto</a>';
                               }
                            }
                            else
                           {
                               echo '<a href="#" data-toggle="modal" data-target="#ErroreAcquisto" type="button" class="btn btn-dark text-light">Acquista biglietto</a>';
                           }
                        ?>

                    </div>
                </section>
                
                <?php include("inc/php/incs/erroreAcquisto.php");?>
                
            </div>
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