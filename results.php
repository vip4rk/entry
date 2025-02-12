<?php
$score = isset($_GET['score']) ? (int)$_GET['score'] : 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>Vos Résultats</h1>
        <p>Vous avez obtenu un score de <?= $score ?> sur 10.</p>

        <p>
            <?php
            if ($score == 10) {
                echo 'Excellent travail ! Vous êtes un expert de CESentry.';
            } elseif ($score >= 7) {
                echo 'Bon travail ! Quelques petites améliorations à faire.';
            } else {
                echo 'À améliorer. Recommencez pour obtenir un meilleur score !';
            }
            ?>
        </p>
        <a href="quiz.php?question_id=1" class="btn btn-primary">Recommencer le quiz</a>
    </div>
</body>
</html>
