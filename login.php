<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX6pzh6qTMa6l6qurv3ya2wJDAWiTOA/czD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-d8fOg15kPRaqCzQFFxPzYUOP0bfESuzMiB2H/2zgY4Bpk8M+O6kftz9a0OJiG4Jj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css" />
    <title>Login</title>
</head>

<body class="bg-light">

    <!-- Menu de navigation -->

    <header> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-black text-white">
            <div class="container-fluid">

                    <!-- Logo -->
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand" src="img/logo.jpg" width="120" height="120" />
                </a>

                    <!-- Bouton Menu burger -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-items"><a class="nav-link" aria-current="page" href="index.html">Accueil</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">Vente</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">Forum</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">La Rédac</a></li>
                        <li class="nav-items"><a class="nav-link" href="#">Contact</a></li>
                    </ul>

                    <form class="d-flex mx-2" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    </form>

                    <a class="nav-link p-2" href="registration.html"> <i class="fa-solid fa-user"></i>  Inscription</a>
                </div>
            </div>
        </nav>
    </header>


    <main>

         <!-- Formulaire de connexion -->

            <!-- CAPCHA -->

            <section class="container">
                
                <h1 class="d-flex justify-content-center mt-5"> Se connecter </h1>
<br>
                <?php
                    if (isset($_GET['message']) && !empty($_GET['message'])) {
                        echo '<p>' . htmlspecialchars($_GET['message']) . '</p>';
                    }
                    ?>
 
                <div class="d-flex justify-content-center p-5">

                    <form class="needs-validation w-50" method="post" action="verification_connexion.php">

                    <div class="mb-3">
                        <label for="username" class="form-label">Identifiants</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="identifiantDeConnexion">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <p class="small mb-3 pb-lg-2"><a class="text-decoration-none" href="#">Mot de passe oublier ?</a></p>
                    <p class="small"><a class="text-decoration-none" href="registration.html">Créer un compte</a></p>
                    

                    <div class="mb-3">
                    <h2>Répondez à la question suivante pour prouver que vous êtes humain :</h2>
                    <div id="question"></div>
                    <input type="text" id="answer" placeholder="Réponse">
                    <button onclick="validateAnswer()">Valider</button>
                </div>



                    
                    <div class="d-flex justify-content-center p-4">
                        <button type="submit" value="submit" name="login" class="btn btn-primary w-25">Se connecter</button>
                    </div>
                </form>
                </div>

                
                <script src="script.js"></script>
            </section>
    </main>
</body>
</html>
