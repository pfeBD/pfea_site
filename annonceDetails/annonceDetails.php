<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./annonceDetails.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4196ef778b.js" crossorigin="anonymous"></script>
    <title>Annonce Détails</title>
</head>
<body>

    <?php
        include '../navbar.php';
    ?>
    

      <!-- annonce details -->

      <section class="container-fluid my-2">

            <!-- Date de depart -->
          <div class="row my-2 p-1">
              <div class="col">
                  <h2 class="text-center">Samedi 30 Avril</h2>
              </div>
          </div>

          <!-- Details annonce -->

          <div class="row justify-content-center my-2 p-1">
              <div class="col-10 col-md-10 col-lg-8 col-xl-7 bg-white border border-3 shadow-sm rounded">
                  <div style="display: flex; justify-content: center;" >
                        <div class="p-2 my-2 trajetDetails">
                          <div class="adr">
                                <div><i class="fa-solid fa-location-dot fa-xl text-danger"></i></div>
                                <div class="h6 fw-bold" >Adresse depart</div>
                                <div><i class="fa-solid fa-clock"></i>06:00</div>
                          </div>
                        </div>
                        <div class="distance">
                            <div class="icon">
                                <div><i class="fa-solid fa-circle-dot" style="color:blue;"></i></div>
                                <div style="height: 2px; width: 100%; background:blue; margin-top:10px;" ></div>
                                <div><i class="fa-solid fa-circle-dot" style="color:blue;"></i></div>
                            </div>
                            <div class="text-center fw-bold text-muted">19km</div>
                        </div>
                        <div class="p-2 my-2 trajetDetails">
                            <div class="adr">
                                <div><i class="fa-solid fa-location-dot fa-xl text-danger"></i></div>
                                <div class="h6 fw-bold" >Adresse depart</div>
                                <div><i class="fa-solid fa-clock"></i>06:00</div>
                            </div>
                        </div>
                  </div>
                  <hr>
                  <div class="prix">
                      <div class="fw-bold fs-6 ms-3">Prix</div>
                      <div class="fw-bold fs-6 me-2">61,00 MAD</div>
                  </div>
                  <hr>
                  <div class="nbPlaceDisponible">
                      <div class="fw-bold fs-6 ms-3">Nombres de place disponible</div>
                      <div class="fw-bold fs-6 me-2">2<i class="fa-solid fa-chair"></i></div>
                  </div>
                  <hr>
                  <div class="voiture">
                      <div class="voitureDetails ms-3">
                          <div class="modele fw-bold">MINI ONE</div>
                          <div class="color text-muted fw-bold">Noir</div>
                      </div>
                      <div class="me-2" ><img src="../images/carImage.jpg" alt="carImage" id="voitureImage"></div>
                  </div>
                  <hr>
                  <div class="description lead ms-3 me-2 mb-2 pb-2">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa eum fuga tempora minus perspiciatis voluptatum atque porro aliquam quas error hic laudantium delectus, tenetur quis architecto, ab dolor voluptas cumque!
                  </div>
              </div>
          </div>

          <!-- Passager -->

          <div class="row justify-content-center my-2 p-1">
            <div class="col-10 col-md-10 col-lg-8 col-xl-7 bg-white border border-3 shadow-sm rounded">
                <div class="container my-2">
                    <div class="row">
                        <div class="col fw-bold fs-5">Passager</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="passagers">

                                <!-- passager -->

                                <?php
                                    for($i=0;$i<4;$i++){
                                        echo <<<EOL

                                            <a href="../voirProfil/voirProfil.php" class="my-2 py-2 px-4 border rounded-pill passagerProfil" style="display: flex; text-decoration: none;">
                                                <img src="../images/avatar.jpg" alt="profilPicture" style="height: 50px; width: 50px; border-radius: 50%;">
                                                <div style="display: flex; flex-direction: column; justify-content: end;" class="ms-2">
                                                    <h6 class="mb-0 text-decoration-none text-dark">Mohamed</h6>
                                                    <div>
                                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                                    </div>
                                                </div>
                                            </a>

                                        EOL;
                                    }
                                ?>
                                
                                
                            </div>
                    </div>
                    </div>
                    
                </div>
            </div>
          </div>


          <!-- covoitureur -->

          <div class="row justify-content-center my-2 p-1">
            <div class="col-10 col-md-10 col-lg-8 col-xl-7 bg-white border border-3 shadow-sm rounded">
                <div class="container">
                    <div class="row">
                        <div class="col fw-bold fs-5 my-2">Covoitureur</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="../voirProfil/voirProfil.php" class="py-2 px-4 border rounded-pill passagerProfil" style="display: flex; text-decoration: none;">
                                <img src="../images/avatar.jpg" alt="profilPicture" style="height: 50px; width: 50px; border-radius: 50%;">
                                <div style="display: flex; flex-direction: column; justify-content: end;" class="ms-2">
                                    <h6 class="mb-0 text-decoration-none text-dark">Mohamed</h6>
                                    <div>
                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                        <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fw-bold fs-5 my-2">Preferences</div>
                    </div>
                    <div class="row">
                        <div class="col lead text-muted ms-2">
                            <ul style="list-style: none;">
                                <li>Je ne voyage pas avec des fumeurs</li>
                                <li>Je ne préfère pas voyager avec des animaux</li>
                                <li>J'aime bien discuter quand je me sens à l'aise</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
      </section>


      <?php
        include '../footer.php';
    ?>







    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>