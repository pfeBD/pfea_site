<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4196ef778b.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>

      <?php

      include './navbar.php';

      ?>

    
      <!-- main section -->

      <section class="container-fluid  bg-image ">
        <div class="row">
            <h1 class="col text-center my-5 fw-bolder">
                Covoiturage au meilleur prix
            </h1>
        </div>
        <form action="./rechercherAnnonce/rechercherAnnonce.php" method="get" class="row justify-content-center mb-4">
            <div class="col-10 col-sm-10 col-md-3 col-xl-2 p-0 m-1">
                <div class="input-group">
                    <span class="input-group-text" id="depart"><i class="fa-solid fa-location-dot"></i></span>
                    <input type="text" class="form-control" placeholder="Départ" aria-label="depart" aria-describedby="depart">
                </div>
            </div>
            <div class="col-10 col-sm-10 col-md-3 col-xl-2 p-0 m-1">
                <div class="input-group">
                    <span class="input-group-text" id="destination"><i class="fa-solid fa-location-dot"></i></span>
                    <input type="text" class="form-control" placeholder="Destination" aria-label="destination" aria-describedby="destination">
                </div>
            </div>
            <div class="col-10 col-sm-10 col-md-3 col-xl-2 p-0 m-1">  
                <input type="date" class="form-control">
            </div>
            <div class="col-3 col-sm-3 col-md-2 col-xl-2 p-0 m-1" style="width: 118.6px;">  
                <input type="submit" class="btn btn-primary border-primary rounded-pill" value="Rechercher">
            </div>
        </form>
      </section>

      <!-- Top annonce en fonction des prix -->

      <section class="container-fluid py-4">
          <div class="row">
              <h2 class="col m-3"><i class="fa-brands fa-hotjar text-danger"></i>Top annonce en fonction des prix.</h2>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <!-- annonce 1 -->

            <?php 
              for($i=0;$i<6;$i++){

              
                echo <<<EOL
                    <div class="col">
                    <div class="card m-2 shadow border-primary">
                      <div class="card-header card-header-container pb-0">
                          <div class="h4 fw-bold text-secondary"><i class="fa-solid fa-dollar-sign"></i>20.5</div>
                          <div class="h5 fw-bold text-secondary">2<i class="fa-solid fa-chair"></i></div>
                      </div>
                      <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col card-row-container">
                                      <div class="h6 fw-bolder">Casablanca</div>
                                      <div><i class="fa-solid fa-clock"></i>12:25</div>
                                </div>
                                <div class="col card-row-container">
                                  <div class="h6 fw-bolder">Rabat</div>
                                  <div><i class="fa-solid fa-clock"></i>14:05</div>
                                </div>
                            </div>
                            <div style="display: flex;" class="m-2">
                                  <a href="./voirProfil/voirProfil.php">
                                    <img src="./images/avatar.jpg" alt="avatar" style="height: 60px; width: 60px; border-radius: 50%;">
                                  </a>
                                  <div style="display: flex; flex-direction: column; justify-content: end;">
                                      <a href="./voirProfil/voirProfil.php" class="h6 mb-0 text-decoration-none text-dark">Mohamed</a>
                                      <div>
                                          <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                          <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                          <i class="fa-solid fa-star" style="color: #FFDF00;"></i>
                                          <i class="fa-solid fa-star-half-stroke" style="color: #FFDF00;"></i>
                                          <i class="fa-regular fa-star" style="color: #FFDF00;"></i>
                                      </div>
                                  </div>
                            </div>
                            <div class="ms-auto" style="width: fit-content;">
                                <a href="./annonceDetails/annonceDetails.php" class="btn btn-primary">Voir details</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
              EOL;
            }
            ?>
            

              
              
            

          </div>
      </section>

      <!-- Nos Service -->

      <section class="container-fluid bg-light">
          <div class="row justify-content-center align-items-center">
              <div class="col-md-5 text-center text-md-start">
                  <h2>
                      <div class="display-6">Nos service</div>
                  </h2>
                  <p class="lead my-4 text-muted">
                    Lorem ipsum dolor sit,
                    amet consectetur adipisicing elit. Est quas non deserunt odio.
                    Nam porro recusandae praesentium magnam distinctio optio voluptates, 
                    fugit accusamus amet reiciendis, ex dolor ut, voluptatem quos?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque praesentium error officiis qui perferendis quos temporibus ut,
                    soluta quasi expedita.
                    Repellendus sed non, deserunt rerum voluptatem delectus distinctio officiis dolor!</p>
              </div>
              <div class="col-md-5 text-center d-none d-md-block">
                <img class="img-fluid" src="./images/Driver.png" alt="image">
              </div>
          </div>
      </section>

      <!-- Aide -->

      <section id="aide">
          <div class="container py-4">
              <div class="display-6 fw-bolder text-center mb-3">QUESTIONS FRÉQUENTES</div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 align-items-center">
                    <div class="col my-2">
                        <h4 class="text-center">Comment rechercher un covoiturage ?</h4>
                        <p class="lead text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisic elit. Sint cupiditate cum in repellat nam qui ipsa et facilis molestiae quo, tenetur unde corrupti accusantium error consequuntur reiciendis, odit repudiandae est.</p>
                    </div>

                    <div class="col my-2">
                        <h4 class="text-center">Comment réserver un trajet ?</h4>
                        <p class="lead text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisic elit. Sint cupiditate cum in repellat nam qui ipsa et facilis molestiae quo, tenetur unde corrupti accusantium error consequuntur reiciendis, odit repudiandae est.</p>
                    </div>

                    <div class="col my-2">
                        <h4 class="text-center">Comment publier une annonce ?</h4>
                        <p class="lead text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisic elit. Sint cupiditate cum in repellat nam qui ipsa et facilis molestiae quo, tenetur unde corrupti accusantium error consequuntur reiciendis, odit repudiandae est.</p>
                    </div>

                    <div class="col my-2">
                        <h4 class="text-center">Comment annuler ma reservation ?</h4>
                        <p class="lead text-center text-muted">Lorem ipsum dolor sit amet consectetur adipisic elit. Sint cupiditate cum in repellat nam qui ipsa et facilis molestiae quo, tenetur unde corrupti accusantium error consequuntur reiciendis, odit repudiandae est.</p>
                    </div>
                    
              </div>
          </div>
      </section>

      <?php
      include './footer.php';

      ?>


    <script src="./index.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>