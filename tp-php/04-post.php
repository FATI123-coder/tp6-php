<?php
$nom = "";
$age = "";
$ville = "";
$envoye = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $envoye = true;
    $nom   = $_POST["nom"]   ?? "";
    $age   = $_POST["age"]   ?? "";
    $ville = $_POST["ville"] ?? "";   // d. récupération de la ville
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>

    <h1>Formulaire POST</h1>

    <form method="post" action="">
        <p>
            <label>Nom :</label>
            <input type="text" name="nom">
        </p>
        <p>
            <label>Âge :</label>
            <input type="number" name="age">
        </p>

        <!-- c. Nouveau champ ville -->
        <p>
            <label>Ville :</label>
            <input type="text" name="ville">
        </p>

        <button type="submit">Envoyer</button>
    </form>

    <?php if ($envoye): ?>
        <h2>Données reçues</h2>
        <p>Nom : <?php echo htmlspecialchars($nom); ?></p>
        <p>Âge : <?php echo htmlspecialchars($age); ?></p>
        <!-- d. affichage de la ville -->
        <p>Ville : <?php echo htmlspecialchars($ville); ?></p>
    <?php endif; ?>

</body>
</html>