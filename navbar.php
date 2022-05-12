
<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-light fw-bold">
        <div class="container-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand fw-bold text-primary" href="/pfe_site/index.php">
                <i class="fa-solid fa-car"></i>Logo
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="/pfe_site/rechercherAnnonce/rechercherAnnonce.php">
                            <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                            <span>Rechercher</span>
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/pfe_site/publierAnnonce/publierAnnonce.php">
                            <i class="fa-solid fa-plus fa-lg "></i>
                            <span">Publier une annonce</span>
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/pfe_site/index.php#aide">
                            <i class="fa-solid fa-circle-question fa-lg"></i>
                            <span>Aide</span>
                        </a>
                    </li>
                </ul>
            </div>
        
               

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#connexionModal">
                <i class="fa-solid fa-circle-user fa-2xl"></i><span class="ms-1" >Connexion</span>
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="connexionModal" tabindex="-1" aria-labelledby="connexionModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title text-center" id="connexionModalLabel">Connectez-vous à votre compte</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="traitement.php" method="post">
                            <div>
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                              <span id="emailField" class="text-danger mx-2" ></span>
                            </div>
                            <div>
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" name="password" required>
                              <span id="passwordField" class="text-danger mx-2" ></span>
                            </div>
                            <div class="mb-2">
                                <a href="/pfe_site/motPassOublier/motPassOublier.php" style="text-decoration: none;">Mot de pass oublié?</a>
                            </div>
                            <hr>
                            <div class="mb-2">
                                <span>Vous n'avez pas encore de compte ?</span>
                                <a href="/pfe_site/inscription/inscription.php" style="text-decoration: none;">S'inscrire</a>
                            </div>
                            
                            <div class="modal-footer justify-content-center">
                                <input type="submit" class="btn btn-primary" name="submit" value="Se connecter">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                              </div>
                          </form>
                    </div>

                    
                </div>
                </div>
            </div>
            
        </div>
      </nav>