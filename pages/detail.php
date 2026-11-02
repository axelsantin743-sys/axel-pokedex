<?php
require_once __DIR__  . '/../config/database.php';

$id = $_GET['id'];

$stmt = $connection->prepare("SELECT * FROM pokemon WHERE pokemon_id = :id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$pokemons = $stmt->fetchALL(PDO::FETCH_OBJ);
$pokemon = $pokemons[0];

echo "
<h2>{$pokemon->pokemon_nom}</h2>
<img width='150' height='150' src='{$pokemon->pokemon_img}' alt='{$pokemon->pokemon_nom}'>
<p>Poids : {$pokemon->pokemon_poids}</p>
<p>Taille : {$pokemon->pokemon_taille}</p>
<p>Description : {$pokemon->pokemon_description}</p>
";
?>
