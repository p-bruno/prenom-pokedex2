<?php
require_once __DIR__ . '/vendor/autoload.php';

// Charge les variables du fichier .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
    // mysql => indique le moteur de la BDD
    // host=localhost => l'adresse du serveur
    // dbname=studio_exemple => nom de la base de données
    $dns = "mysql:host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']};database={$_ENV['DB_NAME']};";
    // Utilisateur avec lequel se connecter a la BDD
    $utilisateur = $_ENV['DB_USER'];
    $motDePasse = $_ENV['DB_PASSWORD'];

    $options = [
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        PDO::MYSQL_ATTR_SSL_CA => true,
    ];

    $connection = new PDO ($dns, $utilisateur, $motDePasse, $options);
} catch (Exception $e) {
    echo "Connection à la BDD impossible : ", $e->getMessage();
    die();
}
?>