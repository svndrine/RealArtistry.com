<?php session_start();

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
    $bdd = new PDO("mysql:host=$host;dbname=$db_name", $username, $userpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} 

catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

$fields = [$_GET['pseudo'], $_GET['key']]
foreach ($fields as $field) {
    if (!isset($field) || empty($field)) {
        echo 'Votre pseudo ou votre cle est incorret.';
        exit;
    }
}


$pseudo = htmlspecialchars(urldecode($_GET['pseudo']));
$key = htmlspecialchars($_GET['key']);
$req = $bdd->prepare("SELECT pseudo, confirm_key FROM USERS WHERE pseudo = $_GET['pseudo']  AND confirm_key = $_GET['key']");
$req->execute(array($pseudo, $key));
$userexist = $req->rowCount();
$res = $req->fetch();

if($userexist == 0){
    echo "L'utilisateur ou la clé n'existe pas."
}

$res = $req->fetch();

if($user['confirme'] == true){
    echo "Votre compte déjà été confirmé.";
}

if($user['confirme'] == false){
    echo "Votre compte n'a pas encore été confirmé, veuillez vérifier vos emails.";
}

$updateuser = $bdd->prepare("UPDATE USERS SET confirm = true WHERE pseudo = $_GET['pseudo'] AND confirm_key = $_GET['key']");
$updateuser->execute(array($pseudo, $key));
echo "Votre compte à bien été confirmé.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'email</title>
</head>
<body>
    <a class="nav-link p-2" href="connexion.php"> <i class="fa-solid fa-user"></i> S'inscrire </a>
</body>
</html>

