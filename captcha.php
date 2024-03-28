<?php session_start();

// Vérification si la réponse est correcte
if(isset($_POST['user_answer']) && isset($_SESSION['captcha_answer'])) {
    $user_answer = strtolower($_POST['user_answer']);
    $captcha_answer = strtolower($_SESSION['captcha_answer']);

    if($user_answer === $captcha_answer) {
        echo "Captcha validé !";
    //redirection
    } else {
        echo "Réponse incorrecte. Veuillez réessayer.";
    //redirection
    }

    // Suppression de la réponse stockée dans la session après vérification
    unset($_SESSION['captcha_answer']);
} else {
    echo "Erreur : Réponse manquante.";
    // Ici, vous pouvez rediriger l'utilisateur vers la page précédente ou afficher un message d'erreur
}

?>