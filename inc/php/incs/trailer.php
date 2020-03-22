<?php   

    include('../db_connection.php');

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
            $q = "select Titolo from elenco_film where PK_CodF = '$codiceFilm'";
            $res = mysqli_query($conn,$q);
            
            $row = mysqli_fetch_assoc($res);
            
            $titolo = $row['Titolo'];
            
            $q = "select link from Trailer where FK_CodF = '$codiceFilm'";
            $res = mysqli_query($conn,$q);
            
            $row = mysqli_fetch_assoc($res);
            
            $link = $row['link'];
?>
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Trailer <?php echo $titolo; ?> </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <iframe width="420px" height="315" allowfullscreen src="https://www.youtube.com/embed/<?php echo $link; ?>"></iframe>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer flex-row-reverse">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Chiudi</button>
      </div>
<?php

        }
        else
        {
            header("Location:http://cinemagoosebumps.altervista.org"); //da cambiare su altervista
        }
}
else
{   
    header("Location:http://cinemagoosebumps.altervista.org"); //da cambiare su altervista
}
?>