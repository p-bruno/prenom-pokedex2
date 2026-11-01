<?php

require_once __DIR__ . "/../config/database.php";

$id = $_GET['pokemon_id'];

$stmt = $connection->prepare("SELECT * FROM pokemon WHERE pokemon_id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$pokemons = $stmt->fetchAll(PDO::FETCH_OBJ);
$pokemon = $pokemons[0];

echo "
<h2>{$pokemon->pokemon_nom}<h2>
<img src='{$pokemon->pokemon_img}' width='200'>
<p>Poids : {$pokemon->pokemon_poids} kg</p>
<p>Taille : {$pokemon->pokemon_taille} m</p>
<p>Description : {$pokemon->pokemon_description}</p>
";