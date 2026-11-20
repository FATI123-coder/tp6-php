<?php
// a. Vos propres valeurs
$nom = "Ahmed";      // mettez VOTRE nom
$age = 21;           // mettez VOTRE âge

// b. Nouvelle variable
$ville = "Marrakech"; // mettez VOTRE ville
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP et HTML</title>
</head>
<body>

    <!-- d. Titre HTML de votre choix -->
    <h1>Ma première page PHP + HTML</h1>

    <p>Nom : <?php echo $nom; ?></p>
    <p>Âge : <?php echo $age; ?> ans</p>

    <!-- c. Nouveau paragraphe pour la ville -->
    <p>Ville : <?php echo $ville; ?></p>

</body>
</html>