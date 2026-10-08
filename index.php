<?php
require_once 'vendor/autoload.php';
// Load environment variables from .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

 try {   
    $dns = 'mysql:host=' . $_ENV['DB_HOST'] . '; port=' . $_ENV['DB_PORT'] . ' ; dbname=' . $_ENV['DB_NAME'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASS'];

    $options = [
        #ignore le certificat SSL
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        #activer le SSL
        PDO::MYSQL_ATTR_SSL_CA => true,
        #afficher les erreurs
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    $connection = new PDO($dns, $username, $password, $options);
 }
 catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
 }

?>