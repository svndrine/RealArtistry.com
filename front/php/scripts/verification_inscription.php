<?php session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


function writeLogLine($success, $pseudo)
{
    $log = fopen('log.txt', 'a+');
    $line = date('Y/m/d - H:i:s') . " - Tentative d'inscription " . ($success ? 'réussie' : 'échouée') . ' de : ' . $pseudo . "\r";
    fputs($log, $line);
    fclose($log);
}


// Si attribut existe et n'est pas vide, enregistrer cet email dans un cookie
if (isset($_POST['first_name']) && !empty($_POST['first_name']))
setcookie('first_name', $_POST['first_name'], time() + 300, '/'); // Creation d'un cookie qui expire dans 1min30
// Si attribut existe et n'est pas vide, enregistrer cet email dans un cookie
if (isset($_POST['name']) && !empty($_POST['name']))
setcookie('name', $_POST['name'], time() + 300, '/');

if (isset($_POST['pseudo']) && !empty($_POST['pseudo']))
setcookie('pseudo', $_POST['pseudo'], time() + 300, '/'); 

if (isset($_POST['date_of_birth']) && !empty($_POST['date_of_birth']))
setcookie('date_of_birth', $_POST['date_of_birth'], time() + 300, '/'); 

if (isset($_POST['gender']) && !empty($_POST['gender']))
setcookie('gender', $_POST['gender'], time() + 300, '/'); 

if (isset($_POST['email']) && !empty($_POST['email']))
setcookie('email', $_POST['email'], time() + 300, '/'); 

if (isset($_POST['country']) && !empty($_POST['country']))
setcookie('country', $_POST['country'], time() + 300, '/');

if (isset($_POST['n']) && !empty($_POST['n']))
setcookie('n', $_POST['n'], time() + 300, '/');

if (isset($_POST['street']) && !empty($_POST['street']))
setcookie('street', $_POST['street'], time() + 300, '/');

if (isset($_POST['city']) && !empty($_POST['city']))
setcookie('city', $_POST['city'], time() + 300, '/'); 

if (isset($_POST['postal_code']) && !empty($_POST['postal_code']))
setcookie('postal_code', $_POST['postal_code'], time() + 300, '/');

if (isset($_POST['category']) && !empty($_POST['category']))
setcookie('category', $_POST['category'], time() + 300, '/'); 

if (isset($_POST['profil_picture']) && !empty($_POST['profil_picture']))
setcookie('profil_picture', $_POST['profil_picture'], time() + 300, '/'); 


// Connexion à la base de donnée
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
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Vérification des données du formulaire
$fields = ['first_name', 'name', 'pseudo', 'password', 'date_of_birth', 'gender', 'email'];
foreach ($fields as $field) {
    if (!isset($_POST[$field]) || empty($_POST[$field])) {

        // Ecrire une ligne dans le fichier log (erreur de co.) 
        writeLogLine(false, $_POST['pseudo']);
        header('Location: inscription.php?message=Veuillez remplir tous les champs obligatoires.');
        exit;
    }
}

// Vérification du format de l'email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    // Ecrire une ligne dans le fichier log (erreur de co.) 
    writeLogLine(false, $_POST['pseudo']);
    header('Location: inscription.php?message=Veuillez fournir une adresse email valide.');
    exit;
}

// Vérification de la longueur du mot de passe
if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 16) {

    // Ecrire une ligne dans le fichier log (erreur de co.) 
    writeLogLine(false, $_POST['pseudo']);
    header('Location: inscription.php?message=Le mot de passe doit contenir entre 6 et 16 caractères.');
    exit;
}

// Vérification si le pseudo ou l'email est déjà utilisé
$sql = "SELECT pseudo, email FROM USERS WHERE pseudo = :pseudo OR email = :email";
$stmt = $bdd->prepare($sql);
$stmt->execute([':pseudo' => $_POST['pseudo'], ':email' => $_POST['email']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {

    // Ecrire une ligne dans le fichier log (erreur de co.) 
    writeLogLine(false, $_POST['pseudo']);
    header('Location: inscription.php?message=Le pseudo ou l\'adresse email est déjà utilisé.');
    exit;
}

// ICI OK

// Génération d'une cle que l'on vas attribuer à l'utilisateur
$longeurkeys = 16;
$key = "";
for ($i = 1; $i <= $longeurkeys; $i++) {
    $key .= mt_rand(0, 9);
}

// Insertion des données dans la base de données
$sql = "INSERT INTO USERS (first_name, name, pseudo, password, date_of_birth, gender, email, country, n, street, city, postal_code, category, profil_picture, confirm_key) 
        VALUES (:first_name, :name, :pseudo, :password, :date_of_birth, :gender, :email, :country, :n, :street, :city, :postal_code, :category, :profil_picture, :confirm_key)";
$stmt = $bdd->prepare($sql);
$stmt->execute([
    ':first_name' => $_POST['first_name'],
    ':name' => $_POST['name'],
    ':pseudo' => $_POST['pseudo'],
    ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    ':date_of_birth' => $_POST['date_of_birth'],
    ':gender' => $_POST['gender'],
    ':email' => $_POST['email'],
    ':country' => $_POST['country'],
    ':n' => $_POST['n'],
    ':street' => $_POST['street'],
    ':city' => $_POST['city'],
    ':postal_code' => $_POST['postal_code'],
    ':category' => $_POST['category'],
    ':profil_picture' => $_POST['profil_picture'],
    ':confirm_key' => $key
]); 

// Écriture dans le fichier de log et redirection
writeLogLine(true, $_POST['pseudo']);
session_start();
$_SESSION['pseudo'] = $_POST['pseudo'];
header('Location: envoie_email.php');
exit;

?>