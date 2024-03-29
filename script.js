// Définition des questions et réponses
const questions = [
    { question: "Quelle est la capitale de la France ?", answer: "Paris" },
    { question: "Combien font 5 + 3 ?", answer: "8" },
    { question: "Quelle est la couleur du ciel ?", answer: "Bleu" },
    // Ajoutez autant de questions que vous le souhaitez
];

// Sélection aléatoire d'une question
const randomQuestion = questions[Math.floor(Math.random() * questions.length)];

// Affichage de la question
document.getElementById('question').innerText = randomQuestion.question;

// Validation de la réponse
function validateAnswer() {
    const userAnswer = document.getElementById('answer').value.trim().toLowerCase();
    if (userAnswer === randomQuestion.answer.toLowerCase()) {
        alert("Félicitations ! Vous êtes un humain.");
        // Ajoutez ici le code pour rediriger l'utilisateur vers la page souhaitée après la validation du CAPTCHA
    } else {
        alert("La réponse est incorrecte. Veuillez réessayer.");
        // Ajoutez ici le code pour actualiser ou réinitialiser le CAPTCHA
    }
}
