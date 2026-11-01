<?php

require_once __DIR__ . "/../config/database.php";

$id = $_GET['pokemon_id'];
echo($id);

$stmt = $connection->query("SELECT * FROM pokemon WHERE pokemon_id = 1");

$pokemons = $stmt->fetchAll(PDO::FETCH_OBJ);

var_dump($pokemons);
