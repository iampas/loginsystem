<?php
$dsn = 'mysql:host=localhost; dbname=register ';
$username = 'root';
$password = 'cinfotech';

try {
    $db = new PDO($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connection successful";
} catch (PDOException $ex) {
    echo "Database connection is unsuccessful " . $ex->getMessage();
}
