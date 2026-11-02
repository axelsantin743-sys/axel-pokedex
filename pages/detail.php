<?php
require_once __DIR__  . '/../config/database.php';
$stmt = $connection->query("SELECT * FROM pokemon WHERE pokemon_id = 1");
$pokemon = $stmt->fetchALL(PDO::FETCH_OBJ);
var_dump($pokemon);
?>
