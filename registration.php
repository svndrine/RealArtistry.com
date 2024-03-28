<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX6pzh6qTMa6l6qurv3ya2wJDAWiTOA/czD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css" />
    <title>Sign In</title>
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
    
                        <a class="nav-link p-2" href="login.html"> <i class="fa-solid fa-user"></i> Se connecter</a>
                    </div>
                </div>
            </nav>
        </header>

    <main>
        
        <section>

            <div class="container">
                    <h1 class="d-flex justify-content-center m-5">Inscription</h1>
                <div class="d-flex row">

                <?php
                if (isset($_GET['message']) && !empty($_GET['message'])) {
                    echo '<p>' . htmlspecialchars($_GET['message']) . '</p>';
                }
                ?>

                    <form method="post" action="verification_inscription.php" class="row needs-validation p-2">
                        <div class="col-md-6 p-3">
                            <label for="firstname" class="form-label">Prénom*</label>
                            <input type="text" name="first_name" class="form-control" placeholder="" aria-label="first_name" value="<?= isset($_COOKIE['first_name']) ? $_COOKIE['first_name'] : ''; ?>" require>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="lastname" class="form-label">Nom*</label>
                            <input type="text" name="name"class="form-control" placeholder="" aria-label="name" value="<?= isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>"require>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="pseudo" class="form-label">Pseudo*</label>
                            <input type="text" name="pseudo" class="form-control" placeholder="" aria-label="pseudo" value="<?= isset($_COOKIE['pseudo']) ? $_COOKIE['pseudo'] : ''; ?>" require> 
                            <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                        </div>
                        
                        <div class="col-md-6 p-3">
                            <label for="password" class="form-label">Mot de passe*</label>
                            <input type="password" name="password" class="form-control" placeholder="" aria-label="password" require>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                        </div>


                        <div class="col-md-6 p-3">
                            <label for="dateofbirth" class="form-label">Date de naissance</label>
                            <input type="date" name="date_of_birth" class="form-control text-secondary" placeholder="dd, mmm, yyyy" aria-label="Date of birth" value="<?= isset($_COOKIE['date_of_birth']) ? $_COOKIE['date_of_birth'] : ''; ?>" require>
                        </div>

                       
                        <div class="col-md-6 p-3">
                            <label for="gender" class="form-label">Genre*</label>
                            <select type="text" name="gender" class="form-select" aria-label="gender" value="<?= isset($_COOKIE['gender']) ? $_COOKIE['gender'] : ''; ?>" require>
                                <option selected disabled></option>
                                <option value="homme">Homme</option>
                                <option value="femme">Femme</option>
                                <option value="autres">Autres</option>
                            </select>
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="email" class="form-label">Adresse e-mail*</label>
                            <input type="email" name="email" class="form-control" placeholder="nom@exemple.com" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>" require>
                            <div class="invalid-feedback">
                                Empty
                              </div>
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="country" class="form-label">Pays</label>
                            <input type="text" name="country" class="form-control" placeholder="" value="<?= isset($_COOKIE['country']) ? $_COOKIE['country'] : ''; ?>" >
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="number_address" class="form-label">N°</label>
                            <input type="text" name="n" class="form-control" placeholder="" aria-label="number" value="<?= isset($_COOKIE['n']) ? $_COOKIE['n'] : ''; ?>">
                        </div>

                        <div class="col-md-6 p-3">
                            <label for="street" class="form-label">Rue</label>
                            <input type="text" name="street" class="form-control" placeholder="" aria-label="street" value="<?= isset($_COOKIE['street']) ? $_COOKIE['street'] : ''; ?>">
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="City" class="form-label">Ville</label>
                            <input type="text" name="city" class="form-control" placeholder="" aria-label="city" value="<?= isset($_COOKIE['city']) ? $_COOKIE['city'] : ''; ?>">
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="postal_code" class="form-label">Code Postal</label>
                            <input type="text" name="postal_code" class="form-control" placeholder="" aria-label="postal_code" value="<?= isset($_COOKIE['postal_code']) ? $_COOKIE['postal_code'] : ''; ?>">
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="category" class="form-label">Categorie*</label>
                            <select type="text" name="category" class="form-select" aria-label="category" value="<?= isset($_COOKIE['category']) ? $_COOKIE['category'] : ''; ?>" require>
                                <option selected disabled></option>
                                <option value="auditeur">Auditeur</option>
                                <option value="artist">Artiste</option>
                                <option value="autres">Autres</option>
                            </select>                 

                        <div class="col-12 input-group mb-3 w-50 p-3 mt-3">
                            <label for="profil_picture" class="input-group-text">Photo de profils</label>
                            <input type="file" name="profil_picture" class="form-control" aria-label="profil_picture" value="<?= isset($_COOKIE['profil_picture']) ? $_COOKIE['profil_picture'] : ''; ?>">
                        </div>
                        

                          <div class="col-12 p-3 d-flex justify-content-center">
                            <button type="submit" value="submit" class="btn btn-primary w-auto">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>    
</body>
</html>
