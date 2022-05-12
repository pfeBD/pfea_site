<div class="modal fade " id="login" aria-hidden="true" aria-labelledby="loginlabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bgmodel">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group m-3">
                
              <input type="email" class="form-control m-2" id="email"placeholder="Your email address...">
            </div>
            <div class="form-group m-3">
              <input type="password" class="form-control m-2" id="password" placeholder="Your password...">
            </div>
            <div class="custom-control custom-checkbox " style="position:relative ;left:-28%">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">souvenez-vous de moi</label>
							</div>
                            <div class="d-grid gap-2 m-5">
                                 <button type="submit" class="btn btn-info  btn-round">Login</button>
                            </div>
            <div style="position:relative ; left:-10px;top:-22px;">
            <a href="#" class="text-danger text-decoration-none " data-bs-target="#motpasseoublier" data-bs-toggle="modal">mot de passe oublier ?</a>
            </div>
          </form>
      </div>
      </div>
      <div class="modal-footer " style="justify-content:space-around">
                   <div  >
                    <button type="submit" href="../inscription/inscription.php" class="btn btn-success btn-lg btn-round "> s'inscrire   </button>
                    </div>  
            </div>
        </div>

    </div>
  </div>
</div>
</div>
<div class="modal fade" id="motpasseoublier" aria-hidden="true" aria-labelledby="loginlabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginlabel2"> mot de passe oublier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form id="formAwesome" method="POST" action="">
        <div class="form-group">
          <div class="input-group">
            <select class="form-control  m-3" >
              <option selected="true" disabled>Please Select Security Question</option>
              <option>Which is your favorite movie?</option>
              <option>What is your pet's name?</option>
              <option>What is the name of your village?</option>
            </select>
          </div>
        </div>
        <div class="form-group " >
          <div class="input-group">
            <input  type="text" name="forgetAnswer" placeholder="Answer" class="form-control m-3" >
           </div>
          <div class="input-group">
            <input  type="password" name="newpassword" placeholder="Nouveaux Password" class="form-control m-3" > 
          </div>
          <div class="input-group">
            
            <input  type="password" name="renewpassword" placeholder="Saisire Nouveaux Password" class="form-control m-3" >
          </div>
        </div>
        <div class="form-group d-flex justify-content-center">
          <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" style="width:150px" value="Reset" type="reset">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-primary">sauvgarder changement</button>
      </div>
    </div>
  </div>
</div>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light fw-bold">
        <div class="container-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand fw-bold text-primary" href="/pfea_site/index.php">
                <i class="fa-solid fa-car"></i>Logo
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="/pfea_site/rechercherAnnonce/rechercherAnnonce.php">
                            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            <span>Rechercher</span>
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/pfea_site/publierAnnonce/publierAnnonce.php">
                            <i class="fa-solid fa-plus fa-lg "></i>
                            <span">Publier une annonce</span>
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/pfea_site/index.php#aide">
                            <i class="fa-solid fa-circle-question fa-lg"></i>
                            <span>Aide</span>
                        </a>
                    </li>
                </ul>
            </div>
        
               

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#login">
                <i class="fa-solid fa-circle-user fa-2xl"></i><span class="ms-1" >Connexion</span>
            </button>
            
            <!-- Modal -->
            <!-- <div class="modal fade " id="login" aria-hidden="true" aria-labelledby="loginlabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bgmodel">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group m-3">
                
              <input type="email" class="form-control m-2" id="email"placeholder="Your email address...">
            </div>
            <div class="form-group m-3">
              <input type="password" class="form-control m-2" id="password" placeholder="Your password...">
            </div>
            <div class="custom-control custom-checkbox " style="position:relative ;left:-28%">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">souvenez-vous de moi</label>
							</div>
                            <div class="d-grid gap-2 m-5">
                                 <button type="submit" class="btn btn-info  btn-round">Login</button>
                            </div>
            <div style="position:relative ; left:-10px;top:-22px;">
            <a href="#" class="text-danger text-decoration-none " data-bs-target="#motpasseoublier" data-bs-toggle="modal">mot de passe oublier ?</a>
            </div>
          </form>
      </div>
      </div>
      <div class="modal-footer " style="justify-content:space-around">
                   <div  >
                    <button type="submit" href="../inscription/inscription.php" class="btn btn-success btn-lg btn-round "> s'inscrire   </button>
                    </div>  
            </div>
        </div>

    </div>
  </div>
</div>
</div>
<div class="modal fade" id="motpasseoublier" aria-hidden="true" aria-labelledby="loginlabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginlabel2"> mot de passe oublier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form id="formAwesome" method="POST" action="">
        <div class="form-group">
          <div class="input-group">
            <select class="form-control  m-3" >
              <option selected="true" disabled>Please Select Security Question</option>
              <option>Which is your favorite movie?</option>
              <option>What is your pet's name?</option>
              <option>What is the name of your village?</option>
            </select>
          </div>
        </div>
        <div class="form-group " >
          <div class="input-group">
            <input  type="text" name="forgetAnswer" placeholder="Answer" class="form-control m-3" >
           </div>
          <div class="input-group">
            <input  type="password" name="newpassword" placeholder="Nouveaux Password" class="form-control m-3" > 
          </div>
          <div class="input-group">
            
            <input  type="password" name="renewpassword" placeholder="Saisire Nouveaux Password" class="form-control m-3" >
          </div>
        </div>
        <div class="form-group d-flex justify-content-center">
          <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" style="width:150px" value="Reset" type="reset">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-primary">sauvgarder changement</button>
      </div>
    </div>
  </div>
</div> -->




            
        </div>
      </nav>