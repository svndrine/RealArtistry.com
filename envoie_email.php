<?php session_start(); ?>

<?php
// Inclure les classes nécessaires de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

try { 
    $mail = new PHPMailer(true);     // Creer une nouvelle instance de PHPMailer
    $mail->isSMTP();     // Utiliser le protocole SMTP pour envoyer l'email
    $mail->SMTPAuth = false;     // Desactiver l'authentification SMTP
    $mail->Port = 25;    // Definir le port SMTP
    $mail->isHTML(true);    // Permettre l'envoi de contenu HTML dans l'email
    $mail->setFrom("ne-pas-repondre@realartistry.uk");    // Definir l'adresse expéditeur
    
    // Verifier si les parametres sont definis dans la requete GET
    if(isset($_GET['pseudo']) && isset($_GET['key']) && isset($_GET['email'])) {
        $mail->addAddress($_GET['email']);    // Ajouter l'adresse du destinataire
        $mail->Subject = 'Confirmation de votre email';    // Definir le sujet de l'email
        $mail->Body = '<html>
                            <body>
                                <div align="center">
                                    <a href="confirmation.php?pseudo=' . urlencode($_GET['pseudo']) . '&key=' . $_GET['key'] . '">Cliquez ici pour confirmer votre compte !</a>
                                </div>
                            </body>
                        </html>';

        // Envoyer l'email
        $mail->send();

        // Si l'envoi est réussi, afficher un message
        echo 'Veuillez vérifier votre boîte mail.';
    } else {
        // Si les paramètres ne sont pas définis, afficher un message d'erreur
        echo 'Paramètres manquants dans la requête GET.';
    }
} catch (Exception $e) {
    // En cas d'erreur lors de l'envoi de l'email, afficher un message d'erreur
    echo "L'email n'a pas pu être envoyé. Erreur : " . $e->getMessage();
}
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX6pzh6qTMa6l6qurv3ya2wJDAWiTOA/czD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-d8fOg15kPRaqCzQFFxPzYUOP0bfESuzMiB2H/2zgY4Bpk8M+O6kftz9a0OJiG4Jj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.0/css/all.css" />
    <title>Vérification e-mail</title> <!-- Correction de la balise title -->
</head>
<body>
    
<main>
    <h1>Vérification de votre email</h1>
    <h2>Un e-mail vous a été envoyé, cliquez sur le lien qu'il contient pour confirmer votre adresse email.</h2>
</main>
</body>
</html>
