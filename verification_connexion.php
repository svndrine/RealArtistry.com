<?php

function writeLogLine($success, $pseudo)
{

    $log = fopen('log.txt', 'a+');

    $line = date('Y/m/d - H:i:s') . ' - Tentative de connexion ' . ($success ? 'réussie' : 'échouée') . ' de : ' . $pseudo . "\r";

    fputs($log, $line);

    fclose($log);

}

if ($_SERVER['SERVER_NAME'] == "localhost") {
    $host = "localhost";
    $db_name = "testpa";
    $username = "root";
    $userpass = "root";
}

else {
    $host = "54.38.34.38";
    $db_name = "PROJET";
    $username = "DISTANT";
    $userpass = "SECURE";
}

try {
    $bdd = new PDO("mysql:host=$host;dbname=$db_name",
        "$username",
        "$userpass",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}

catch (Exception $e) {
    die("Erreur >>        " . $e -> getMessage());
}
 

  if(!empty($_POST['username']) && !empty($_POST['password'])) // Condition: "Si username et pswd sont non vide, OK, sinon > redirection avec un message
  {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $req = $bdd->prepare('SELECT password, username FROM users WHERE username = :username AND password = :password');
      $req->execute(array(':username' => $username, ':password' => $password ));
      $res = $req->fetch();
       
      if($res)
      {
        if($password === $res['password'] && $username === $res['username'])  //Condition: "Si username et pswd existe dans la bdd alors OK, sinon > redirection avec un message
        {
            // ICI, OK
            // Ecrire une ligne dans le fichier log (succes de co.)
            writeLogLine(true, $_POST['username']);
            // Connectons l'utilisateur
            // Ouverture de la session de l'utilisateur
            session_start();
            // ajout d'un paramètre à la session
            $_SESSION['username'] = $_POST['username'];

            // redirection vers l'accueil
            header('location: index.php');
            exit;
        }
        else // Username ou password n'existe pas > redirection vers connexion.php avec un paramètre get "message".
        {
            // Ecrire une ligne dans le fichier log (erreur de co.) 
            writeLogLine(false, $_POST['username']);
            header('location: connexion.php?message=Identifiant ou mot de passe incorrect.');
            exit;
        }
      }
   }
   else // Username ou password sont vides > redirection vers connexion.php avec un paramètre get "message".
   {
    // Ecrire une ligne dans le fichier log (erreur de co.) 
    writeLogLine(false, $_POST['username']);
    header('location: connexion.php?message=Veuilliez remplir les 2 champs.');
    exit;
        
   }

?>