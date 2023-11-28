<?php 

// configuration de la base de donnée
$host = "localhost:3306";
$dbname = "danceclub";
$username = "root";
$password = "";
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname;

//connexion à la base de données
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

?>