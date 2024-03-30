<?php session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


function writeLogLine($success, $pseudo)
{
    $log = fopen('log.txt', 'a+');
    $line = date('Y/m/d - H:i:s') . ' - Tentative de connexion ' . ($success ? 'réussie' : 'échouée') . ' de : ' . $pseudo . "\r";
    fputs($log, $line);
    fclose($log);
}

include("bd.php");

// Si attribut existe et n'est pas vide, enregistrer cet email dans un cookie
if (isset($_POST['pseudo']) && !empty($_POST['pseudo']))
setcookie('pseudo', $_POST['pseudo'], time() + 300, '/'); // Creation d'un cookie qui expire dans 5m
// Si attribut existe et n'est pas vide, enregistrer cet email dans un cookie
if (isset($_POST['password']) && !empty($_POST['password']))
setcookie('password', $_POST['password'], time() + 300, '/');


// Vérification des données du formulaire
$fields = ['pseudo', 'password'];
foreach ($fields as $field) {
    if (!isset($_POST[$field]) || empty($_POST[$field])) {

        // Ecrire une ligne dans le fichier log (erreur de co.) 
        writeLogLine(false, $_POST['pseudo']);
        header('Location: connexion.php?message=Veuillez remplir tous les champs.');
        exit;
    }
}

// Vérification si le pseudo et le pswd existe.
$sql = "SELECT pseudo, password FROM USERS WHERE pseudo = :pseudo AND password = :password AND confirm = :confirm AND confirm_key = :confirm_key";
$stmt = $bdd->prepare($sql);
$stmt->execute([':pseudo' => $_POST['pseudo'], ':password' => $_POST['password']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    if($_POST['pseudo'] != $user['pseudo'] && $_POST['password'] != $user['password'])  //Condition: "Si username et pswd existe n'esxite pas dans la bdd > redirection avec un message
        {
    // Ecrire une ligne dans le fichier log (erreur de co.) 
    writeLogLine(false, $_POST['pseudo']);
    header('location: connexion.php?message=Identifiant ou mot de passe incorrect.');
            exit;
}

            // ICI, OK
            // Ecrire une ligne dans le fichier log (succes de co.)
            writeLogLine(true, $_POST['pseudo']);
            // Connectons l'utilisateur
            // Ouverture de la session de l'utilisateur
            session_start();
            // ajout d'un paramètre à la session
            $_SESSION['pseudo'] = $_POST['pseudo'];

            if ($user['confirm'] != true){
                header('location: envoie_email.php?key='.$user['confirm_key'].'');
                exit;
            }
            // redirection vers l'accueil
            header('location: index.php');
            exit;
        }

?>