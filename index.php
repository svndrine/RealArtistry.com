<?php session_start(); ?>

<? if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
setcookie('pseudo', $_POST['pseudo'], time() + 1000, '/'); // Création d'un cookie qui expire dans ?
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX6pzh6qTMa6l6qurv3ya2wJDAWiTOA/czD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css" />
    <title>Home</title>
</head>


<body>

    <header> 

        <!-- Menu  -->

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

                    <a class="nav-link text-white mx-2" href="login.php"> <i class="fa-solid fa-user"></i> Se connecter</a>
                </div>
            </div>
        </nav>
        
    </header>


    <main>

        <section>

            <div class="d-flex justify-content-center align-items-center bg-image">
                <img class="img-fluid" src="img/a0.webp" alt="Home_picture_real_artistry">
                
                    <div class="position-absolute d-flex justify-content-center flex-column align-items-center text-white">
                        <h1 class="p-4 m-2">TITRE</h1>
                        <h2 class="p-4 m-2"> Notre slogan sera ici</h2>
                    </div>
            </div>
    
            
        </section>

        <!-- Présentation -->

        <section class="p-5 bg-black text-white">

            <div class="container">

                <div class="d-flex flex-row">
                    <!-- Colonne à gauche -->
                    <div class="col-xl-6 text-center d-flex flex-column justify-content-center p-5">
                        <h1>Titre de la section</h1>
                        <p class="p-4">Martinus agens illas provincias pro praefectis aerumnas graviter gemens saepeque obsecrans, ut ab omni culpa inmunibus parceretur.</p>
                    </div>
        
                    <!-- Colonne à droite -->
                    <div class="col-xl-6 d-flex flex-column justify-content-center p-5">
                        <img class="img-fluid w-100" src="img/a1.webp" alt="presentation-photo">
                    </div>
                </div>

            </div>

        </section>


            <!-- La Rédact' -->

        <section class="p-5 bg-dark text-white">


        </section>
        
            <!-- Forum -->

        <section class="p-5 bg-black text-white">


        </section>


        <!-- Vente -->
        <section class="p-5 bg-dark text-white">

             
        </section>

    </main>

        <!-- Pied de page -->

    <footer class="container-fluid bg-black text-white">

        <div class="row p-5"> 

            <div class="col">
                <h3>Aide</h3>
                <a href="#" class="link-light  text-decoration-none">Contactez-nous</a>
            </div>

            <div class="col">
                <h3>En savoir plus</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="link-light  text-decoration-none">A propos de nous</a></li>
                    <li><a href="#" class="link-light  text-decoration-none">Notre équipe</a></li>
                    <li><a href="#" class="link-light  text-decoration-none">Conditions Générales d'Utilisation</a></li>
                </ul>
            </div>

            <div class="col">
                <h3 class="pb-2">Newletters</h3>
                <ul class="list-unstyled">
                    <div class="input-group mb-3 w-75 h-25">
                        <input type="email" class="form-control" placeholder="Adresse mail" aria-label="subscribe_newletters" aria-describedby="basic-addon2">
                        <button class="btn btn-outline-secondary text-white" type="submit" value="submit">Newletters</button>
                    </div>
                </ul>
            </div>

            <div class="col">
                <h3>Communauté</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="link-light text-decoration-none"><i class="fab fa-facebook-f"></i>  Facebook</a></li>
                    <li><a href="#" class="link-light text-decoration-none"><i class="fab fa-twitter"></i>  Twitter</a></li>
                    <li><a href="#" class="link-light text-decoration-none"><i class="fab fa-instagram"></i>  Instagram</a></li>
                    <li><a href="#" class="link-light text-decoration-none"><i class="fab fa-linkedin-in"></i>  Linkedin</a></li>
                </ul>
            </div>
        </div>

    </footer>

    
</body>
</html>
