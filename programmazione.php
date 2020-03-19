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
                    
                    <a href="programmazione.php?film=<?php echo $film; ?>"><img class="locandineFilm" src="admin/locandine/<?php echo $locandina; ?>"></a>
                    
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
            
            <section class="d-flex flex-column bg-light text-black text-left mt-4" style="margin-left:19%; width:7%;">
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
                            $descrizione = $riga['Descrizione'];
                            $locandina = $riga['Locandina'];
                            $durata = $riga['Durata'];
                            $genere = $riga['Nome'];
                            $nomeReg = $riga['NomeRF'];
                            $cognReg = $riga['CognomeRF'];
                        }
                        else
                        {
                            header("Location:index");
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
                        $descrizione = $riga['Descrizione'];
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
                        
                ?>
                
                        <div class=" border p-1 text-center"><?php echo $ora; ?></div>
                
                <?php
                        
                    }
                
                ?>
            </section>
            
            <section>
            
                
                
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