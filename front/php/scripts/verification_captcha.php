<?php

// Connexion a la bdd

$db = new PDO ("mysql:host=localhost;dbname=PA", "root", "root");
$req = $db->query ('SELECT Id, Questions, Reponses FROM captcha');
$donnees = $req->fetchAll(PDO::FETCH_ASSOC);


//Gestion du captcha


// Traitement du formulaire quand il est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['delete'])) {


    // Insertion des donnees dans la bdd
    try {

        // Preparation de la requete d'insertion
        $stmt = $db->prepare("INSERT INTO captcha (Id, Questions, Reponses) VALUES (:Id, :Questions, :Reponses)");

        $stmt->bindParam(':Id', $_POST['Id']); 
        $stmt->bindParam(':Questions', $_POST['Questions']);
        $stmt->bindParam(':Reponses', $_POST['Reponses']);
        $stmt->execute();
        
        // Redirection vers la page actuelle 
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }

}


// Traitement du formulaire pour la suppression

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Recuperer l'id de la ligne a supprimer
    $idToDelete = $_POST['delete'];

    // Supprimer la ligne de la bdd
    try {

        // Preparation de la requete de suppression
        $stmt = $db->prepare("DELETE FROM captcha WHERE Id = :Id");
        $stmt->bindParam(':Id', $idToDelete);
        $stmt->execute();

        // Redirection vers la page pour actualiser le tableau
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }
}


//Gestion utilisateurs


// // Requete SQL pour recuperer les donnees de la bdd
// $stmt = $db->query("SELECT code, pseudo, email, category FROM USERS");
// $infos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// // Insertion des donnees dans la bdd
// try {

//     // Preparation de la requete d'insertion
//     $stmt = $db->prepare("INSERT INTO USERS (code, pseudo, email, category) VALUES (:code, :pseudo, :email, :category)");

//     $stmt->bindParam(':code', $_POST['code']);
//     $stmt->bindParam(':pseudo', $_POST['pseudo']);
//     $stmt->bindParam(':email', $_POST['email']);
//     $stmt->bindParam(':category', $_POST['category']);

//     $stmt->execute();
    
//     // Redirection vers la page actuelle 
//     header('Location: ' . $_SERVER['PHP_SELF']);
//     exit;
// } catch(PDOException $e) {
//     echo "Erreur: " . $e->getMessage();
// }
// }

// Traitement du formulaire pour la suppression

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
//     // Recuperer l'id de la ligne a supprimer
//     $idToDelete = $_POST['delete'];

//     // Supprimer la ligne de la bdd
//     try {

//         // Preparation de la requete de suppression
//         $stmt = $db->prepare("DELETE FROM USERS WHERE code = :code");
//         $stmt->bindParam(':code', $idToDelete);
//         $stmt->execute();

//         // Redirection vers la page pour actualiser le tableau
//         header('Location: ' . $_SERVER['PHP_SELF']);
//         exit;
//     } catch(PDOException $e) {
//         echo "Erreur: " . $e->getMessage();
//     }
// }
// ?>


