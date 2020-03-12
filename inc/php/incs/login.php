<div class="modal" id="Login">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <form id="loginForm" method="post" action="inc/php/loginSystem/sc_login.php">
                      <!-- Modal Header -->
                      <div class="modal-header bg-secondary">
                        <h4 class="modal-title text-white">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                        
                        <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" class="custom-control-input" id="RestaConnesso" name="RestaConnesso">
                            <label class="custom-control-label" for="RestaConnesso">Resta connesso</label>
                        </div>
                        
                    </div>

                    <!-- Modal footer -->
                
                    <div class="modal-footer " style="display:block;">
                        
                        <div class="row justify-content-center">
                            <input type="button" onClick="checkLoginForm()" value="Accedi" class="btn btn-outline-dark mb-2">
                        </div>
                        
                        <div class="row justify-content-center">
                            <a href="#" data-toggle="modal" data-target="#Register" data-dismiss="modal">
                                Non ti sei ancora registrato? Clicca qui per registrarti!
                            </a>
                        </div>
                        
                    </div>
                </form>
            </div>
          </div>
        </div>