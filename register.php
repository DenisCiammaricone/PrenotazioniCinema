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
                       
                        <label for="name">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Nome*
                            </a>
                        </label>
                        
                        <br/>
                            
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="text" id="name" name="name" class="form-control"  style="width:50%;">
                            
                        </div>
                        
                        <label for="surname" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Cognome*
                            </a>
                        </label>
                        
                        <br/>
                        
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="text" id="surname" name="surname" class="form-control" style="width:50%;">
                            
                        </div>
              
                        <label for="email" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                E-Mail*
                            </a>
                        </label>
                        
                        <br/>
                            
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="email" id="email" name="email" class="form-control" style="width:50%;">
                            
                        </div>
                        
                        <label for="pass" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Password*
                            </a>
                        </label>
                        
                        <br/>
                            
                        <div class="row">
                            
                            <div class="col-3"></div>
                            
                            <input type="password" id="pass" name="pass" class="form-control" style="width:50%;">
                            
                        </div>
                        
                        
                        <label for="confirmPass" class="mt-2">
                            <a data-toggle="tooltip" data-placement="right" title="Obbligatorio!">
                                Conferma Password*
                            </a>
                        </label>
                        
                        <br/>
                            
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
                                <input type="button" onClick="checkRegisterForm()" class="btn btn-outline-dark mr-4 rimettiNav" value="Registrati">
                            </div>      
                            
                            <div class="col" style="left:100%;">
                                <button type="button" class="btn btn-outline-danger rimettiNav" data-dismiss="modal">Esci</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
        