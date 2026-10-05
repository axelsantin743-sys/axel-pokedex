<?php
 try {   
    $dns = 'mysql:host=gateway01.eu-central-1.prod.aws.tidbcloud.com; port=4000 ; dbname=axel_pokedakex_BDD';
    $username = '2ZyDLSvnV8NtQFM.root';
    $password = 'Z8K7ZobDkSfnwFUP';

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