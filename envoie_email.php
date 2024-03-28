<?php session_start(); ?>

<?
//Connection et utilisation de PHPmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Créer une instance ; passer `true` active les exceptions
$mail = new PHPMailer(true);

try {
    // Paramètres du serveur
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Activer la sortie de débogage verbeux
    $mail->isSMTP();                                            // Envoyer en utilisant SMTP
    $mail->Host       = 'smtp-relay.gmail.com';                     // Définir le serveur SMTP à utiliser
    $mail->SMTPAuth   = true;                                   // Activer l'authentification SMTP
    $mail->Username   = 'smtp-relay.gmail.com';                     // Nom d'utilisateur SMTP
    $mail->Password   = '';                               // Mot de passe SMTP
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Activer le chiffrement TLS implicite
    $mail->Port       = 465;                                    // Port TCP à connecter ; utilisez 587 si vous avez défini `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Destinataires
    $mail->setFrom('ne-pas-repondre@realartistry.uk', 'M.Sananes');
    $mail->addAddress($GET_['email']);           // Ajouter un destinataire
    $mail->addReplyTo('info@realartistry.fr', 'Info');

    // Contenu du mail
    $mail->isHTML(true);                                        // Définir le format de l'e-mail en HTML
    $mail->Subject = 'Confirmation de votre compte RealArtistry.';
    $mail->Body    = '<html>
                            <body>
                                <div align="center">
                                    <a href="confirmation.php?pseudo=' . urlencode($_GET['pseudo']) . '&key=' . $_GET['key'] . '">Cliquez ici pour confirmer votre compte !</a>
                                </div>
                            </body>
                        </html>';
    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur du Mailer : {$mail->ErrorInfo}";
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
        <title>Vérification e-mail</e-mail></title>
    </head>
<body>
    
<main>
    <h1> Vérification de votre email </h1>
    <h2> Un e-mail vous à été envoyé, cliquez sur lien qu'il contient pour confirmer votre adresse email.</h2>
</main>
</body>
</html>