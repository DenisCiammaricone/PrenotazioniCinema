<!doctype html>
<html lang="it">
    <head>
        <title>Admin | Cinema Goosebumps</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../inc/js/popper.min.js" type="text/javascript"></script>
        
        <link href="../inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="../inc/js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
           
        <form id="loginForm" method="post" action="php/sc_login.php">
              <!-- Modal Header -->
              <div class="modal-header bg-secondary">
                <h4 class="modal-title text-white">Login</h4>
              </div>
              <!-- Modal body -->
            <div class="modal-body text-center">
               
                <label for="email">E-Mail</label>
                
                <br/>
                    
                <div class="row form-group">
                    
                    <div class="col-3"></div>
                    
                    <input type="email" id="email" name="email" class="form-control" style="width:50%;">
                    
                </div>
                
                <label for="pass" class="mt-2">Password</label>
                
                <br/>
                
                <div class="row form-group">
                    
                    <div class="col-3"></div>
                    
                    <input type="password" id="pass" name="pass" class="form-control" style="width:50%;">
                    
                </div>
                
            </div>
            <!-- Modal footer -->
        
            <div class="modal-footer " style="display:block;">
                
                <div class="row justify-content-center">
                    <input type="submit" value="accedi" class="btn btn-outline-dark mb-2">
                </div>
                
            </div>
        </form>

    </body>
<html>