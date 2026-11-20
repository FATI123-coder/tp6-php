<?php
$host = "localhost";
$dbname = "tp_php";
$user = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->query("SELECT * FROM products WHERE price > 300");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>

    <!-- a. Titre modifié -->
    <h1>Liste des produits de Fatima</h1>

    <!-- b, c, d. Tableau : nom, prix, quantité, total stock -->
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nom</th>
            <th>Prix (DH)</th>
            <th>Quantité</th>
            <th>Total stock</th>
        </tr>
        <?php foreach ($products as $p): ?>
        <tr>
            <td><?php echo htmlspecialchars($p["name"]); ?></td>
            <td><?php echo $p["price"]; ?></td>
            <td><?php echo $p["quantity"]; ?></td>
            <td><?php echo $p["price"] * $p["quantity"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>