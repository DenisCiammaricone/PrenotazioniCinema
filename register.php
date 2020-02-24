        <!-- Modal -->
        <div class="modal" id="Register">
          <div class="modal-dialog">
            <div class="modal-content">
                <form id="registerForm" method="post" action="inc/php/loginSystem/sc_register.php">
                      <!-- Modal Header -->
                      <div class="modal-header bg-secondary">
                        <h4 class="modal-title text-white">Registrazione</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <!-- Modal body -->
                    <div class="modal-body text-center">
                       
                        <label for="name">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Nome*
                            </a>
                        </label>
                        
                        <br/>
                            
                        <div class="row form-group">
                            
                            <div class="col-3"></div>
                            
                            <input type="text" id="name" name="name" class="form-control"  style="width:50%;">
                            
                        </div>
                        
                        <label for="surname" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Cognome*
                            </a>
                        </label>
                        
                        <br/>
                        
                        <div class="row form-group">
                            
                            <div class="col-3"></div>
                            
                            <input type="text" id="surname" name="surname" class="form-control" style="width:50%;">
                            
                        </div>
              
                        <label for="emailRegister" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                E-Mail*
                            </a>
                        </label>
                        
                        <br/>
                            
                        <div class="row form-group">
                            
                            <div class="col-3"></div>
                            
                            <input type="email" id="emailRegister" name="emailRegister" class="form-control" style="width:50%;">
                            
                        </div>
                        
                        <label for="passRegister" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Password*
                            </a>
                        </label>
                        
                        <br/>
                            
                        <div class="row form-group">
                            
                            <div class="col-3"></div>
                            
                            <input type="password" id="passRegister" name="passRegister" class="form-control" style="width:50%;">
                            
                        </div>
                        
                        
                        <label for="confirmPass" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Conferma Password*
                            </a>
                        </label>
                        
                        <br/>
                            
                        <div class="row form-group">
                            
                            <div class="col-3"></div>
                            
                            <input type="password" id="confirmPass" name="confirmPass" class="form-control mb-4" style="width:50%;">
                            
                        </div>
                        
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="confirmTerms" name="confirmTerms">
                            <label class="custom-control-label" for="confirmTerms">Accetto i termini di utilizzo*</label>
                        </div>
                        
                    </div>

                    <!-- Modal footer -->
                
                    <div class="modal-footer justify-content-center">
                        
                        <input type="button" onClick="checkRegisterForm()" class="btn btn-outline-dark mr-4" value="Registrati">
                            
                    </div>
                </form>
            </div>
          </div>
        </div>