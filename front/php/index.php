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
    <title>Home</title>
</head>

<? include('include/header.php'); ?>

<body>
    
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

       
    <? include('include/footer.php'); ?>
    
</body>
</html>
