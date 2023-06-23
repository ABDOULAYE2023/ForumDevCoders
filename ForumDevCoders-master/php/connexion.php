<?php
// Connexion à la base de données avec PDO
try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "forum";
    
    $conn = new PDO("mysql:host=$servername;dbname=forum", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($conn) {
        echo "connexion réussu avec succès";
    } else {
        echo "Échec de la connexion à la base de données";
    }
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
