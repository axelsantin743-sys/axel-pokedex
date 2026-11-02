<?php
require_once __DIR__ . '/../config/database.php';

//prepare la requete SQL 
$select = $connection->query('SELECT * FROM pokemon;');
// Envoie les requêtes SQL 
$pokemons = $select->fetchAll(PDO::FETCH_ASSOC);

var_dump($pokemons);
// echo ($pokemons[0]['pokemon_nom']);

foreach ($pokemons as $pokemon) {
    echo '<p>' . $pokemon['pokemon_nom'] . '</p>';
    echo ("<img width='150' height='150' src='{$pokemon['pokemon_img']}' alt='{$pokemon['pokemon_nom']}'>");
}
?>