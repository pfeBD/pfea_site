<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../fontweb/css/all.min.css">
    <link rel="stylesheet" href="./inscription.css">
</head>
<body> 

    <?php
        include '../navbar.php';
    ?>

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="../images/bg3.jpg" alt="" />
            <h3>Bonjour</h3>
            <p>pour tous les covoiturage , ici on essai a facilite la vie</p>
            <a class="btn border rounded-pill btn-light" href="../connexion/connexion.php">login</a><br />
        </div>
        <div class="col-md-9 register-right">
            <form action="" method="POST">

            <div class="tab-content">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Inscription</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Cin *" name="cin" required />
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control date  " placeholder="dateNaissance "
                                     name="date" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom" * name="nom" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prenom *" name="prenom" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mot de passe *" name="motPasse"
                                    required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" name="ConfirmPassword "
                                    required />
                            </div>

                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="sex" value="homme" checked>
                                        <span> homme </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="sex" value="femme">
                                        <span>femme </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder=" Email *" name="email" required />
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="telephone" class="form-control"
                                    placeholder="votre telephone *" required />
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="Question">
                                    <!-- ajouter un base de donner au cas ou mot de passe oublier -->
                                    <option class="select" hidden>choisire votre Question de securite</option>
                                    <option>votre aniversaire?</option>
                                    <option>votre ancien numero portable?</option>
                                    <option>votre animale preferer?</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter votre reponse *" name="Answer" />
                            </div>
                            <div class="form-group">
                                <label for="photo" class="btn btn-info m-1">
                                     inserer photo profil </label>
                                <div class="cols-sm-12">
                                    <input type="file" id="photo" name="photo"  hidden />
                                </div>
                            </div>
                            <input type="submit" class="btnRegister" name="Register" />
                        </div>
                    </div>
                </div>

            </div>
        </form>
        </div>

    </div>

</div>
    <?php
        include '../footer.php';
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
   
</body>

</html>