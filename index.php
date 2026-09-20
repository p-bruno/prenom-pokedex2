<?php
try {
    // mysql => indique le moteur de la BDD
    // host=localhost => l'adresse du serveur
    // dbname=studio_exemple => nom de la base de données
    $dns = "mysql:host=gateway01.eu-central-1.prod.aws.tidbcloud.com;port=4000;database=prenom_pokedex_bdd;";
    // Utilisateur avec lequel se connecter a la BDD
    $utilisateur = "35a8BVBwx695s1o.root";
    $motDePasse = "xuCdeLspsruJnjZ8";

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