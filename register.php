<!DOCTYPE html>
<html lang="it"> 

    <head>
        <title>Registrati</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
        <link href="inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="inc/js/bootstrap.min.js" type="text/javascript"></script>


        <link href="inc/css/style.css" rel="stylesheet" type="text/css">
        <script src="inc/js/script.js" type="text/javascript"></script>
        <script src="inc/js/formVerification.js" type="text/javascript"></script>
    </head>

    <body>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Register">
          Registrati
        </button>

        <!-- Modal -->
        <div class="modal" id="Register">
          <div class="modal-dialog">
            <div class="modal-content">
                <form id="registerForm" method="post" action="inc/php/loginSystem/sc_register.php" class="form-group">
                      <!-- Modal Header -->
                      <div class="modal-header bg-secondary" style="justify-content:center;">
                        <h4 class="modal-title text-white">Registrazione</h4>
                      </div>

                      <!-- Modal body -->
                    <div class="modal-body text-center">
                       
                        <label for="name">Nome*</label><br/>
                            
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="text" id="name" name="name" class="form-control"  style="width:50%;">
                            
                        </div>
                        
                        <label for="surname" class="mt-2">Cognome*</label><br/>
                            
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="text" id="surname" name="surname" class="form-control" style="width:50%;">
                            
                        </div>
              
                        <label for="email" class="mt-2">E-Mail*</label><br/>
                            
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="email" id="email" name="email" class="form-control" style="width:50%;">
                            
                        </div>
                        
                        <label for="pass" class="mt-2">Password*</label><br/>
                            
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="password" id="pass" name="pass" class="form-control" style="width:50%;">
                            
                        </div>
                        
                        
                        <label for="confirmPass" class="mt-2">Conferma Password*</label><br/>
                            
                        
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="password" id="confirmPass" name="confirmPass" class="form-control mb-4" style="width:50%;">
                            
                        </div>
                        
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="confirmTerms" name="confirmTerms">
                            <label class="custom-control-label" for="confirmTerms">Accetto i termini di utilizzo*</label>
                        </div>
                        
                    </div>

                    <!-- Modal footer -->
                
                    <div class="modal-footer">
                        <div class="row">
                            
                            <div class="col">
                                <input type="button" onClick="checkForm();" class="btn btn-outline-dark mr-4" value="Registrati">
                            </div>      
                            
                            <div class="col" style="left:100%;">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Esci</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        
        
        
        
        
        
    </body>

</html>