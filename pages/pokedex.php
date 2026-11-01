<?php
require_once __DIR__ . "/../config/database.php";

//Prépare la requête
$select = $connection->query("SELECT pokemon.pokemon_nom, pokemon.pokemon_img FROM pokemon;");

//Envoie  la requête SQL à la BDD, récupère (fetch) les résultats dans un tableau de dictionnaire
$pokemons = $select->fetchAll(PDO::FETCH_OBJ);

foreach ($pokemons as $pokemon) {
    echo ("<img width='150px' src='{$pokemon->pokemon_img}'>");
    echo ("<h1>{$pokemon->pokemon_nom}</h1>");
}

?>