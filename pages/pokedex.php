<?php
require_once __DIR__ . '/../api/config/database.php';

//prepare la requete SQL 
$select = $connection->query('SELECT * FROM pokemon;');
// Envoie les requêtes SQL 
$pokemons = $select->fetchAll(PDO::FETCH_OBJ);

foreach ($pokemons as $pokemon) {
    echo ("<a href='detail?id={$pokemon->pokemon_id}'>");
    echo '<p>' . $pokemon->pokemon_nom . '</p>';
    echo ("<img width='150' height='150' src='{$pokemon->pokemon_img}' alt='{$pokemon->pokemon_nom}'>");
    echo ("</a>");
}
?>