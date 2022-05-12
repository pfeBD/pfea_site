<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./publierAnnonce.css">
</head>
<body>

  <?php
    include '../navbar.php';
  ?>

    <div class="container">
        <div class="row ">  
        <div class=" col-md-15">
              <div class="box1">
              <h4>cher convoitureur Poster votre annonce</h4>
              </div>
              <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="#">
                            <div class="row ">  
                            <div class=" col-md-10">
                              <div class="box2">
                              <h4>  depart & arriver</h4>
                            </div>
                              </div>
                              </div>
                            <div class="form-group">
                                <div class="cols-md-7">
                                  <label>depart *</label>
                                    <select name="villeDepart" class="form-control" id="villeDepart">
                                        <option selected>choisir une ville</option>
                                    </select>
                                    <select name="secteurDepart" class="form-control" id="secteurDepart" style="display: none;">
                                        <option selected>choisir un secteur</option>
                                    </select>
                                    
                                </div>
                                </div>
                            <div class="form-group">
                                <div class="cols-md-7">
                                  <label>depart *</label>
                                    <select name="villeArriver" class="form-control" id="villeArriver">
                                        <option selected>choisir une ville</option>
                                    </select>
                                    <select name="secteurArriver" class="form-control" id="secteurArriver" style="display: none;">
                                        <option selected>choisir un secteur</option>
                                    </select>
                                    
                                </div>
                                </div>
                               
                                <div class="cols-md-7">
                                  <input required  type="date" name="dateDepart" class="form-control" placeholder="date depart *"></input>
                                </div>
                                <div class="cols-md-7">
                                  <input required  type="date" name="dateArriver" class="form-control" placeholder="date arriver *"></input>
                                </div>
                                <div class="cols-md-7">
                                  <input required  type="time" name="heursDepart" class="form-control" placeholder="heurs  depart*"></input>
                                </div>
                                <div class="cols-md-7">
                                   <input required  type="time" name="heursArriver" class="form-control" placeholder="heurs arriver*"></input>
                                </div>
                            </div>

                            
                            <div class="row ">  
                            <div class=" col-md-10">
                              <div class="box2">
                              <h4>information sur voiture</h4>
                            </div>
                              </div>
                              </div>
                            <div class="form-group">
                                <div class="cols-sm-12">
                                 <input required  type="text" name="modele" placeholder="model->exemple:peugeut 206" class="form-control"></input>
                                </div>
                                <div class="cols-sm-12">
                                 <input required  type="color" name="couleur" value="transparent" class="form-control" placeholder="couleur"></input>
                                </div>
                                <div class="cols-sm-12">
                                  <input required  type="text" name="matricule" placeholder="matricule->exemple:B98054fr" class="form-control"></input>
                                </div>
                                
                            </div>
    
                          
                            <div class="row ">  
                            <div class=" col-md-10">
                              <div class="box2">
                              <h4>Titre & Déscription & Prix</h4>
                            </div>
                              </div>
                              </div>
                            <div class="form-group">
                                <div class="cols-sm-12">
                                  <!-- on doit ajouter une coll type a la base donner -->
                                <input required type="text" class="form-control" name="titre" placeholder="Titre de votre annonce"/>
                                </div>
                                <div class="cols-sm-12">
                                  <input required class="form-control"   type="number" name="nbPlace" placeholder="Nomber de palce" ></input>
                                </div>
                                <div class="cols-sm-12">
                                <textarea required class="form-control" name="description" placeholder="Décrivez en detail votre annonce"></textarea>
                                </div>
                                <div class="cols-sm-12">
                                <textarea class="form-control" name="preferences" placeholder="Décrivez en detail votre preference"></textarea>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="cols-sm-12">
                                <div class="input-group">
                                <input required type="text" class="form-control" name="prix" placeholder="Votre prix"/><span class="dirhame" >MAD</span>
                                
                                </div>
                            </div>
                            <div class="form-group ">
                                <input type="submit" class="btn btn-success btn-lg btn-block login-button" value="Poster Annonce">
                            </div>
                        </form>
              </div>
          </div>
      </div>

    </div>

    <?php
    include '../footer.php';
  ?>
    
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="./publierAnnonce.js" ></script>
</body>
</html>