<?php
// Ici, tu peux ajouter la logique pour récupérer la question, vérifier la réponse et rediriger l'utilisateur.
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz CESentry</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Magistral:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">  <!-- Lien vers ton fichier CSS -->
</head>
<body>

    <!-- Page d'accueil -->
    <header>
        <div class="logo-container">
            <img src="logo-ces.png" alt="CES Logo" class="logo">  <!-- Ton logo ici -->
            <p class="brand-claim">Access to everything that matters</p>
        </div>
    </header>

    <!-- Quiz -->
    <main>
        <section class="quiz-intro">
            <p>Répondez aux questions pour tester vos connaissances sur les produits et services CESentry. À chaque bonne réponse, vous avancez dans le quiz. Bonne chance !</p>
        </section>

        <div class="question">
            <h2>Question 1</h2>
            <p>Quelle est la capitale de la France ?</p>
            <form method="POST">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="0">
                    <label class="form-check-label">Paris</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" value="1">
                    <label class="form-check-label">Lyon</label>
                </div>
                <button type="submit" class="btn secondary-btn">Suivant</button>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>© 2024 CES. Tous droits réservés.</p>
    </footer>

</body>
</html>
