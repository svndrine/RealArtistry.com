<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <title>Accueil Administrateur</title>
</head>

<body>

    <!-- Menu de navigation -->
    
    <header>

        <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
            <div class="container-fluid">
                <a href="index.html">
                    <img class="navbar-brand" src="img/logo.jpg" width="80" height="80" />
                    </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me auto mb-2 mb-lg-0">

                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="home_admin.html">Dashboard</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Acceuil</a></li>
                                <li><a class="dropdown-item" href="#">Vente</a></li>
                                <li><a class="dropdown-item" href="#">Forum</a></li>
                                <li><a class="dropdown-item" href="#">La Rédac'</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Promotion</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="newletters_admin.html">Newletter</a></li>
                                <li><a class="dropdown-item" href="#">Option</a></li>
                                <li><a class="dropdown-item" href="#">Option</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#">Utilisateurs</a></li>

                        <li class="nav-item"><a class="nav-link" href="#">Aide</a></li>
                    </ul>
                </div>

        </nav>
    
    </header>

        

    <main>

        <section class="m-4">
            <h3>Défaut</h3>
            <p class="text-secondary">Accueil - Tableaux de bord</p>
        
            <div class="container">
                <div class="row">
                    <!-- Première colonne -->
                    <div class="col-md-6">
                        <div class="card m-4">
                            <div class="card-header">
                                <h5>10</h5>
                                <p>Projets actifs en février</p>
                            </div>
                            <div class="card-body mt-5">
                                <p>50 projets en attente</p>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="15"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 15%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Deuxième colonne -->
                    <div class="col-md-6">
                        <div class="card m-4">
                            <div class="card-header">
                                <h5>3 vues <button type="button" class="btn btn-success opacity-75"><i
                                            class="bi bi-arrow-right"></i> 0%</button></h5>
                                <p>Nombre de visites en février</p>
                            </div>

                            <div class="card-body">
                                <img src="img/graph_vue.png" class="img-fluid " style="max-width: 65%;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Visite par pays</h5>
                        <p>1 pays se partage 100% des visites</p>
                    </div>
                    <div class="card-body">
                        <h6>France</h6>
                        <a href="#" class="text-decoration-none text-secondary">Voir le nombre de vues</a>
                    </div>
                </div>
            </div>
        
        </section>
        

        <!-- Gestion de la rédac -->
        <section class="m-4 p-2">
            <div class="m-4">
                <h3>Gestion de la rédac</h3>
                <p class="secondary">Liste des contenues en attente</p>
                  
                <!-- Tableau -->

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom d'utilisateur</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Date</th>
                            <th scope="col">Autorisation</th>
                            <th scope="col">Voir plus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>user1</td>
                            <td>Nom du titre</td>
                            <td>12 fév. 2023</td>
                            <td>
                                <button type="button" class="btn btn-outline-success"><i class="bi bi-check2"></i>Accepter</button>
                                <button type="button" class="btn btn-outline-danger"><i class="bi bi-ban"></i> Refuser</button>
                            </td>
                            <td><a href="#" class="text-decoration-none">Ouvrir</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>user2</td>
                            <td>Nom du titre</td>
                            <td>12 fév. 2023</td>
                            <td>
                                <button type="button" class="btn btn-outline-success"><i class="bi bi-check2"></i>Accepter</button>
                                <button type="button" class="btn btn-outline-danger"><i class="bi bi-ban"></i> Refuser</button>
                            </td>
                            <td><a href="#" class="text-decoration-none">Ouvrir</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>user3</td>
                            <td>Nom du titre</td>
                            <td>13 fév. 2023</td>
                            <td>
                                <button type="button" class="btn btn-outline-success"><i class="bi bi-check2"></i>Accepter</button>
                                <button type="button" class="btn btn-outline-danger"><i class="bi bi-ban"></i> Refuser</button>
                            </td>
                            <td><a href="#" class="text-decoration-none">Ouvrir</a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>user4</td>
                            <td>Nom du titre</td>
                            <td>14 fév. 2023</td>
                            <td>
                                <button type="button" class="btn btn-outline-success"><i class="bi bi-check2"></i>Accepter</button>
                                <button type="button" class="btn btn-outline-danger"><i class="bi bi-ban"></i> Refuser</button>
                            </td>
                            <td><a href="#" class="text-decoration-none">Ouvrir</a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>user5</td>
                            <td>Nom du titre</td>
                            <td>15 fév. 2023</td>
                            <td>
                                <button type="button" class="btn btn-outline-success"><i class="bi bi-check2"></i>Accepter</button>
                                <button type="button" class="btn btn-outline-danger"><i class="bi bi-ban"></i> Refuser</button>
                            </td>
                            <td><a href="#" class="text-decoration-none">Ouvrir</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>


</body>
</html>
