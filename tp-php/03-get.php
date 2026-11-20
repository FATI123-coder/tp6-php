<?php
// Récupérer les paramètres de l'URL (avec une valeur par défaut si absents)
$nom = $_GET["nom"] ?? "FATIMA EZZAHRAE";
$ville = $_GET["ville"] ?? "Marrakech";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paramètres GET</title>
</head>
<body>

    <h1>Paramètres GET</h1>

    <p>Nom reçu : <?php echo htmlspecialchars($nom); ?></p>
    <p>Ville reçue : <?php echo htmlspecialchars($ville); ?></p>

</body>
</html>