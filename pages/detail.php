<?php

require_once __DIR__ . "/../config/database.php";

$id = $_GET['pokemon_id'];
echo($id);

$stmt = $connection->prepare("SELECT * FROM pokemon WHERE pokemon_id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$pokemons = $stmt->fetchAll(PDO::FETCH_OBJ);

var_dump($pokemons);
