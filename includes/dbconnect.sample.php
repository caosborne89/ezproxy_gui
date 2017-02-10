<?php
$user = "";
$pass = "";
$dbname = "";
$dsn = 'mysql:dbname=' . $dbname . '$db;host=127.0.0.1';

try {
    $dbh = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
