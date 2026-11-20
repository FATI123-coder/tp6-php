<?php
$host = "localhost";
$dbname = "tp_php";   // a. nom de la base
$user = "root";
$password = "";       // vide par défaut sous XAMPP

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   echo "Connexion réussie à la base tp_php.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>