<?php
try {
    $connect = new PDO("mysql:host=localhost;dbname=daeu;charset=utf8", "root", "");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Active les erreurs
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage()); // Arrête le script en cas d'erreur
}
?>
