<?php
// Connexion à la base de données SQLite
$db = new SQLite3('cesentry_quiz.db');

// Créer la table "questions" si elle n'existe pas déjà
$query = "CREATE TABLE IF NOT EXISTS questions (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    question TEXT NOT NULL,
    answers TEXT NOT NULL,  -- Stocke un tableau JSON de réponses
    correct_answer INTEGER NOT NULL  -- L'indice de la réponse correcte dans le tableau answers
)";
$db->exec($query);

// Vérifier si la table est vide et insérer des données si nécessaire
$query = "SELECT COUNT(*) FROM questions";
$result = $db->querySingle($query);

if ($result == 0) {
    // Insérer des questions d'exemple si la table est vide
    $db->exec("INSERT INTO questions (question, answers, correct_answer) VALUES 
        ('Quelle est la capitale de la France?', '[\"Paris\", \"Lyon\", \"Marseille\", \"Toulouse\"]', 0),
        ('Quel est le produit phare de CESentry?', '[\"Cylindre électronique\", \"Télécommande\", \"Clé RFID\", \"Serrure biométrique\"]', 0)");
}

echo "Base de données et table créées avec succès !";
?>
