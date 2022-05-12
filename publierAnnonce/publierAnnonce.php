<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="./modifierProfil.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./publierAnnonce.css">
    <title>Publier une annonce</title>
</head>

<body>


    <?php
    include '../navbar.php';
    ?>


        <div class="container p-md-5">

            <div class="mt-3 py-2  info-pres">
                <form action="" method="post" class="w-100">



                  <div class="m-3">
                    <label>depart <span class="sterix">*</span> </label>
                    <select name="villeDepart" class="form-control" id="villeDepart">
                        <option selected>choisir une ville</option>
                    </select>
                    <select name="secteurDepart" class="form-control" id="secteurDepart" style="display: none;">
                        <option selected>choisir un secteur</option>
                    </select>

                </div>

                                <div class="m-3">
                                    <label>arriver <span class="sterix">*</span></label>
                                    <select name="villeArriver" class="form-control" id="villeArriver">
                                        <option selected>choisir une ville</option>
                                    </select>
                                    <select name="secteurArriver" class="form-control" id="secteurArriver" style="display: none;">
                                        <option selected>choisir un secteur</option>
                                    </select>
                </div>
                
                                  <div class="m-3">
                                       <label>date depart <span class="sterix">*</span> </label>
                                  <input required  type="date" name="dateDepart" class="form-control"  ></input>
                                </div>
                                <div class="m-3">
                                     <label>date arriver <span class="sterix">*</span> </label>
                                  <input required  type="date" name="dateArriver" class="form-control" ></input>
                                </div>
                                <div class="m-3">
                                     <label>heurs  depart <span class="sterix">*</span> </label>
                                  <input required  type="time" name="heursDepart" class="form-control" ></input>
                                </div>
                                <div class="m-3">
                                     <label>heurs  arriver <span class="sterix">*</span> </label>
                                   <input required  type="time" name="heursArriver" class="form-control" ></input>
                                </div>
            
                                 <div class="m-3">
                                      <label>modele <span class="sterix">*</span> </label>
                
                                 <input required  type="text" name="modele" placeholder="peugeut 206" class="form-control"></input>
                                </div>
                                <div class="m-3">
                                     <label>couleur <span class="sterix">*</span> </label>
                                 <input required  type="color" name="couleur" value="transparent" class="form-control" input>
                                </div>
                                <div class="m-3">
                                     <label>matricule <span class="sterix">*</span> </label>
                                  <input required  type="text" name="matricule" placeholder="pwd2349" class="form-control"></input>
                                </div>
                            
                                <div class="m-3">
                                     <label>Titre de votre annonce <span class="sterix">*</span> </label>
                
                                  <!-- on doit ajouter une coll type a la base donner -->
                                <input required type="text" class="form-control" name="titre" />
                                </div>
                                <div class="m-3">
                                     <label>Nomber de palce <span class="sterix">*</span> </label>
                                  <input required class="form-control"   type="number" name="nbPlace"  ></input>
                                </div>
                                <div class="m-3">
                                     <label>Décrivez en detail votre annonce  </label>
                                <textarea required class="form-control" name="description" ></textarea>
                                </div>
                                <div class="m-3">
                                     <label>Décrivez en detail votre preference <span class="sterix">*</span> </label>
                                <textarea class="form-control" name="preferences" ></textarea>
                                </div>
                                <div class="container">
                            <div class="m-3">
                            <div class="row">
                                <div class="col">
                                <label>prix <span class="sterix">*</span> </label>
                                 <input required type="text" class="form-control " name="prix" />
                                </div>
                                <div class="col">
                                <span class="dirhame " >MAD</span>
                                </div>
                            </div>
                               
                                  
                                </div>
                                 <div class="form-group mt-2 ">
                                <input type="submit" class="btn btn-success btn-lg btn-block login-button" value="Poster Annonce">
                            </div>
                            
                            

                            </div>          
<script src="./publierAnnonce.js" ></script>
</body>

</html>