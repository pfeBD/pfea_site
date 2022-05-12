<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./modifierProfil.css" />
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
        <script src="../voirProfil/voirProfil.js" defer></script>
        <title>Modifier Votre Profil</title>
      </head>
<body>
    

    <?php
        include '../navbar.php';
    ?>

    
    <div class="container p-md-5">
        <div class="mt-3 py-2 ModifierProfile__button">
          <a href="../voirProfil/voirProfil.php" class="btn btn-primary fw-bold">
          voir profil
          </a>
        </div>
      <div class="mt-3 py-2 d-flex info-pres">
        <form action="" method="post" class="w-100">

            <!--
                photo
            -->
            <div  style="position: relative;">
                <img src="../images/avatar_defaut.webp" alt="ma photo" id="img_profil" style="border-radius: 50%;width: 150px;height: 150px; margin-left: 5%;">
                <label for="input_img_profil" class=" btn btn-primary fw-bold m-3 label_profil">Changer la photo</label>
                <input type="file" name="img_profil" id="input_img_profil">
            </div>
            <!--
                info personnelles
            -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" aria-describedby="nom">
            </div>
            <div class="mb-3">
              <label for="prenom" class="form-label">Prenom</label>
              <input type="text" class="form-control" name="prenom" id="prenom">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="tele" class="form-label">Numéro de télephone</label>
                <input type="tel" class="form-control" id="tele" name="tel">
            </div>
            <div class="mb-3">
                <label for="preference" class="form-label">Ajouter une preference</label>
                <input type="text" class="form-control" id="preference" name="preference">
            </div>
            <!--
             Modification de Biographie
            -->
            <div class="mb-3">
            <label for="biographie" class="form-label">Biographie</label>
            <textarea class="form-control" id="biographie" rows="3" placeholder="écrivez ici ..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary fw-bold">Modifier</button>
          </form>
      </div>
    </div>

     <?php
        include '../footer.php';
      ?>

</body>
</html>