<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contact</title>
</head>
<body>
<style>
    main {
      margin-top: 150px; 
    }
  </style>
</head>
<body class="bg-light">

    <!-- Menu de navigation -->
    <header> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-black text-white fixed-top ">
            <div class="container-fluid">

                    <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <img class="navbar-brand" src="img/logo.jpg" width="120" height="120" />
                </a>

                    <!-- Bouton Menu burger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-items"><a class="nav-link active" aria-current="page" href="index.php">Accueil</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">Vente</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">Forum</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">La Rédac</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">Contact</a></li>
                    </ul>

                    <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Rechercher" aria-label="Search">
                      </form>
                    <a class="nav-link text-white mx-2" href=".php"> <i class="fa-solid fa-user"></i> Mon compte</a>
                    <a class="nav-link text-white mx-2" href=".php"> <i class="fa-solid fa-user"></i> Se déconnecter</a>
                </div>
            </div>
        </nav>
        
    </header>


    <main class="mb-5">
        <div class="container-fluid mt-5 d-flex justify-content-center align-items-center">
          <div class="max-width-form mt-4 w-50">
            <h1 class="text-center m-5">Contactez-nous :</h1>
            <form method="post" action="envoi_mail.php">
              <div class="form-group mb-4">
                <label for="inputNom">Nom : *</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
              </div>
              <div class="form-group mb-4">
                <label for="inputPrenom">Prénom : *</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required>
              </div>
              <div class="form-group mb-4">
                <label for="inputEmail">Email : *</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" required>
              </div>
              <div class="form-group mb-4">
                <label for="selectObjet">Objet : *</label>
                <select class="form-control" id="objet" name="objet" required>
                    <option value="" selected disabled>Choisissez un objet</option>
                    <option value="question">Question</option>
                    <option value="demande">Demande</option>
                    <option value="feedback">Feedback</option>
                    <option value="autre">Autre</option>
                </select>
              </div>
              <div class="form-group mb-4">
                <label for="inputTitre">Titre : *</label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre du message" required>
              </div>
              <div class="form-group mb-4">
                <label for="textareaMessage">Message : *</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
          </div>
        </div>
    </main>
</body>
</html>