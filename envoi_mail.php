<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $titre = $_POST['titre'];
    $message = $_POST['message'];

    // Adresse e-mail à laquelle envoyer le message
    $to = "lou.hassler.2005@gmail.com";

    // Sujet du message
    $subject = "Nouveau message de Page contact: $objet";

    // Contenu du message
    $email_content = "Nom: $nom\n";
    $email_content .= "Prénom: $prenom\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Titre: $titre\n";
    $email_content .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
