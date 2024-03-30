<?

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

?>