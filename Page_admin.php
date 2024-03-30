<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <?php include '\MAMP\htdocs\Projet\verification.php'; ?>
    <title>Accueil Administrateur</title>
</head>

<body>

    <!-- Menu de navigation -->
    
    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a href="index.html">
                    <img class="navbar-brand" src="img/logo.jpg" width="80" height="80" />
                    </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me auto mb-2 mb-lg-0">

                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="home_admin.html">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Application</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Aide</a></li>

                    </ul>
                </div>

                <div class="d-flex flex-row fs-5">
                    <a class="nav-link mx-2" href="#"><i class="bi bi-search text-dark"></i></a>
                    <a class="nav-link mx-2" href="#"><i class="bi bi-bell-fill text-dark"></i></a>
                    <a class="nav-link mx-2" href="#"><i class="bi bi-chat-square-text-fill text-dark"></i></a>
                    <a class="nav-link mx-2" href="#"><i class="bi bi-circle-half text-dark"></i></a>
                    <a class="nav-link mx-2" href="#"><i class="bi bi-person-circle text-dark"></i></a>
                </div>
                
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
                <h3>Gestion de la rédac'</h3>
                <p class="secondary">Liste des contenus en attente</p>
                  
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

        <section class="m-4 p-2">
            <div class="m-4">
                <h3>Gestion des utilisateurs</h3>
                <p class="secondary"></p>
                  
                <!-- Tableau -->

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pseudo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($infos as $row): ?>
                            <tr>
                                <th scope="row"><?php echo $row['code']; ?></th>
                                <td><?php echo $row['pseudo']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td> 
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <input type="hidden" name="delete" value="<?php echo $row['code']; ?>">
                                        <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Supprimer</button>
                                    </form>
                                </td>
                                <td><a href="#" class="btn btn-outline-primary">Profil</a></td>
                            </tr>
                        <?php endforeach; ?>
                            <tr>
                            <td><a href="#" class="btn btn-outline-primary">Voir plus</a></td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </section>

        <section class="m-4 p-2">
            <div class="m-4">
                <h3>Gestion du captcha</h3>
                <p class="secondary">Liste des questions et réponses</p>
                  
                <!-- Tableau -->

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Questions</th>
                            <th scope="col">Réponses</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($donnees as $row): ?>
                            <tr>
                                <th scope="row"><?php echo $row['Id']; ?></th>
                                <td><?php echo $row['Questions']; ?></td>
                                <td><?php echo $row['Reponses']; ?></td>
                                <!-- Formulaire pour connaitre l'Id de la ligne a supprimer -->
                                <td> 
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <input type="hidden" name="delete" value="<?php echo $row['Id']; ?>">
                                        <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <td><input type="text" name="Id" placeholder="Index"></td>
                                <td><input type="text" name="Questions" placeholder="Questions"></td>
                                <td><input type="text" name="Reponses" placeholder="Réponses"></td>
                                <td>
                                <button type="submit" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Ajouter</button>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>

